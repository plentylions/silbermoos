<?php

namespace Silbermoos\Providers;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use IO\Helper\ComponentContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\ShopBuilder\Contracts\ContentWidgetRepositoryContract;
use Silbermoos\Widgets\WidgetCollection;

class SilbermoosServiceProvider extends ServiceProvider
{
    const PRIORITY = 0;

    public function register()
    {

    }

    public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        $widgetRepository = pluginApp(ContentWidgetRepositoryContract::class);
        $widgetClasses = WidgetCollection::all();
        foreach ($widgetClasses as $widgetClass) {
            $widgetRepository->registerWidget($widgetClass);
        }

        $dispatcher->listen('IO.Component.Import', function (ComponentContainer $componentContainer)
        {
            if($componentContainer->getOriginComponentTemplate() == 'Legend::WishList.Components.WishListCount'){
                $componentContainer->setNewComponentTemplate('Silbermoos::WishList.Components.WishListCount');
            }
        }, self::PRIORITY);


        $dispatcher->listen('IO.Resources.Import', function (ResourceContainer $container) {
            $container->addStyleTemplate('Silbermoos::Stylesheet');
        }, self::PRIORITY);
    }
}


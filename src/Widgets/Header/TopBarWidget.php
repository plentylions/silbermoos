<?php

namespace Silbermoos\Widgets\Header;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\Settings\ValueListFactory;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class TopBarWidget extends BaseWidget
{
    protected $template = "Silbermoos::Widgets.Header.TopBarWidget";

    public function getData()
    {
        return WidgetDataFactory::make("Silbermoos::TopBarWidget")
            ->withLabel("Widget.topBarLabel")
            ->withPreviewImageUrl("/images/widgets/top-bar.svg")
            ->withType(WidgetTypes::HEADER)
            ->withCategory(WidgetCategories::HEADER)
            ->withPosition(0)
            ->withAllowedNestingTypes(
                [
                    WidgetTypes::STRUCTURE,
                    WidgetTypes::STATIC,
                    WidgetTypes::DEFAULT,
                    WidgetTypes::ITEM_SEARCH
                ]
            )
            ->toArray();
    }

    public function getSettings()
    {
        /** @var WidgetSettingsFactory $settingsFactory */
        $settingsFactory = pluginApp(WidgetSettingsFactory::class);

        $settingsFactory->createCustomClass();

        $container = $settingsFactory->createVerticalContainer('entries')
            ->withList(1)
            ->withName('Widget.topBarEntryLabel');

        $container->children->createText('text')
            ->withDefaultValue("Argument")
            ->withName('Widget.topBarEntryTextLabel')
            ->withTooltip('Widget.topBarEntryTextLabel');

        return $settingsFactory->toArray();
    }
}

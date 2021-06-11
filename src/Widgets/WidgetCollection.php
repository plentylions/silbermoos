<?php

namespace Silbermoos\Widgets;

use Silbermoos\Widgets\Header\NavigationWidget;
use Silbermoos\Widgets\Header\TopBarWidget;

class WidgetCollection
{

    const HEADER_WIDGETS = [
        NavigationWidget::class,
        TopBarWidget::class
    ];

    public static function all()
    {
        return array_merge(
            self::HEADER_WIDGETS
        );
    }

}

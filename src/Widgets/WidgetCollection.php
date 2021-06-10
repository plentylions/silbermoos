<?php

namespace Silbermoos\Widgets;

use Silbermoos\Widgets\Header\NavigationWidget;

class WidgetCollection
{

    const HEADER_WIDGETS = [
        NavigationWidget::class
    ];

    public static function all()
    {
        return array_merge(
            self::HEADER_WIDGETS
        );
    }

}

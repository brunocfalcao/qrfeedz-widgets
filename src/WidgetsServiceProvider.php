<?php

namespace QRFeedz\Widgets;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class WidgetsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'qr-widgets');
        Blade::componentNamespace('QRFeedz\\Widgets\\Views\\Components', 'qr-widget');
    }

    public function register()
    {
        //
    }
}

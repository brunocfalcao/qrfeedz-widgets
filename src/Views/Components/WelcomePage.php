<?php

namespace QRFeedz\Widgets\Views\Components;

use Illuminate\View\Component;

class WelcomePage extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qr-widgets::components.welcome-page.widget');
    }
}

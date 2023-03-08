<?php

namespace QRFeedz\Widgets\Views\Components;

use Illuminate\View\Component;

class OneLiner extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qr-widgets::components.one-liner');
    }
}

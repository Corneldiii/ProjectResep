<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    // public $detail;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $detailProfil
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render(): View|string
    {
        return view('components.navbar');
    }
}

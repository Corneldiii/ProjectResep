<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardFood extends Component
{
    public $title;
    public $description;
    public $image;
    public $alt;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $image, $alt)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->alt = $alt;
    }
    public function render(): View|Closure|string
    {
        return view('components.card-food');
    }
}

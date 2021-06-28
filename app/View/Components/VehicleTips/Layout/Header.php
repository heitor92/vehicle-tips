<?php

namespace App\View\Components\VehicleTips\Layout;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Title
     *
     * @var string
     */
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vehicle-tips.layout.header');
    }
}

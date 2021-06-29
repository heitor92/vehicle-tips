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
     * usuário
     *
     * @var object
     */
    public $user;

    /**
     * Create a new component instance.
     * @param string $name
     * @param object $user
     * @return void
     */
    public function __construct($name, $user)
    {
        $this->name = $name;
        $this->user = $user;
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

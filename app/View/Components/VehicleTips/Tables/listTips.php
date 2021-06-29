<?php

namespace App\View\Components\VehicleTips\Tables;

use Illuminate\View\Component;

class listTips extends Component
{
    /**
     * usuário
     *
     * @var object
     */
    public $user;

    /**
     * Create a new component instance.
     * @param object $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vehicle-tips.tables.list-tips');
    }
}

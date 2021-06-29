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
     * dicas de veículos
     *
     * @var array
     */
    public $arVehicleTips;

    /**
     * Create a new component instance.
     * @param object $user
     * @param array $arVehicleTips
     * @return void
     */
    public function __construct($user, $arVehicleTips)
    {
        $this->user = $user;
        $this->arVehicleTips = $arVehicleTips;
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

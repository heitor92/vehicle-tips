<?php

namespace App\View\Components\VehicleTips\Forms;

use Illuminate\View\Component;

class Search extends Component
{
    /**
     * usuário
     *
     * @var object
     */
    public $user;

    /**
     * tipos de veículo
     *
     * @var array
     */
    public $arTypeVehicle;

    /**
     * Create a new component instance.
     * @param object $user
     * @param array $arTypeVehicle
     * @return void
     */
    public function __construct($user, $arTypeVehicle)
    {
        $this->user = $user;
        $this->arTypeVehicle = $arTypeVehicle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vehicle-tips.forms.search');
    }
}

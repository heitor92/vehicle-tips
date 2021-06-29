<?php

namespace App\View\Components\VehicleTips\Modals;

use Illuminate\View\Component;

class Upsert extends Component
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
     * marcas de veículos em base
     *
     * @var array
     */
    public $arBrands;

    /**
     * Create a new component instance.
     * @param object $user
     * @param array $arTypeVehicle
     * @param array $arBrands
     * @return void
     */
    public function __construct($user, $arTypeVehicle, $arBrands)
    {
        $this->user = $user;
        $this->arTypeVehicle = $arTypeVehicle;
        $this->arBrands = $arBrands;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vehicle-tips.modals.upsert');
    }
}

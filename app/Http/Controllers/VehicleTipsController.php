<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use App\Models\VehicleTip;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class VehicleTipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $name = 'Vehicle Tips';
        $title = "{$name} - Home";
        $user = [];

        $arTypeVehicle = $this->getTypesVehicle();
        $arBrands = $this->getBrandVehicle();
        $arVehicleTips = $this->getVehicleTips();
        if (request()->session()->has('id')) {
            $user['id'] = request()->session()->get('id');
            $user['name'] = request()->session()->get('name');
            $user['email'] = request()->session()->get('email');
        }

        return view('vehicle-tips.home', [
            'title' => $title,
            'name' => $name,
            'user' => $user,
            'arTypeVehicle' => $arTypeVehicle,
            'arBrands' => $arBrands,
            'arVehicleTips' => $arVehicleTips
        ]);
    }

    /**
     * lista tipos de veículos
     *
     * @return array
     */
    public function getTypesVehicle()
    {
        $typesVehicle = DB::table('type_vehicle')->get();
        $type = [];
        $arrayTypes = [];
        foreach ($typesVehicle as  $typeItem) {
            $type['id'] = $typeItem->id;
            $type['name'] = $typeItem->name;
            $arrayTypes[] = $type;
        }
        return $arrayTypes;
    }

    /**
     * lista marcar de veículos na base
     *
     * @return array
     */
    public function getBrandVehicle()
    {
        $brandsVehicle = DB::table('vehicle_tip')->distinct()->get('brand');
        $brand = [];
        $arrayBrands = [];
        foreach ($brandsVehicle as  $brandItem) {
            $brand['brand'] = $brandItem->brand;
            $arrayBrands[] = $brand;
        }
        return $arrayBrands;
    }

    /**
     * veículos na base
     *
     * @return array
     */
    public function getVehicleTips()
    {
        $tipsVehicle = DB::table('vehicle_tip')->get();
        $tip = [];
        $arrayTips = [];
        foreach ($tipsVehicle as  $tipItem) {
            $tip['id'] = $tipItem->id;
            $tip['id_user'] = $tipItem->id_user;
            $tip['type_vehicle'] = $tipItem->type_vehicle;
            $tip['brand'] = $tipItem->brand;
            $tip['model'] = $tipItem->model;
            $tip['version'] = $tipItem->version;
            $tip['created_at'] = $tipItem->created_at;
            $arrayTips[] = $tip;
        }
        return $arrayTips;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** Validação dos dados */
        $validated = $request->validate([
            'id_user' => 'required',
            'type_vehicle' => 'required|present',
            'brand' => 'required',
            'model' => 'required'
        ]);
        if ($request->session()->token() == $request->_token) {
            $vehicleTip = new VehicleTip();
            $vehicleTip->id_user = $validated['id_user'];
            $vehicleTip->type_vehicle = $validated['type_vehicle'];
            $vehicleTip->brand = $validated['brand'];
            $vehicleTip->model = $validated['model'];
            $vehicleTip->version = $request->version;
            $vehicleTip->save();
        } else {
            return new Response([
                'errors' => [
                    'id_user' => ['Necessário está logado!']
                ]
            ], 422);
        }

        return new Response([
            'success' => [
                'vehicle_tip' => ['Salvo com successo!']
            ]
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

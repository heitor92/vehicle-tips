<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use Illuminate\Http\Request;
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
        if(request()->session()->has('id')){
            $user['id'] = request()->session()->get('id');
            $user['name'] = request()->session()->get('name');
            $user['email'] = request()->session()->get('email');
        }
        
        return view('vehicle-tips.home', [
            'title' => $title,
            'name' => $name,
            'user' => $user,
            'arTypeVehicle' => $arTypeVehicle
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
        //
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

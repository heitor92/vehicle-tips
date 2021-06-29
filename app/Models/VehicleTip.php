<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'type_vehicle',
        'brand',
        'model',
        'version'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle_tip';
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_vehicle')->insert([
            'name' => 'Moto',
            'created_at' => now()
    
        ]);
        DB::table('type_vehicle')->insert([
            'name' => 'Carro',
            'created_at' => now()
    
        ]);
        DB::table('type_vehicle')->insert([
            'name' => 'Caminhão',
            'created_at' => now()
    
        ]);
        
    }
}

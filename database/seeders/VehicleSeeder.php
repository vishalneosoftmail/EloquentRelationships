<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles  = array(
            array('user_id'=> 1, 'vehicle_name'=>'Car', 'vehicle_no'=> 'MH31 CR1010'),
            array('user_id'=> 1, 'vehicle_name'=>'Bike', 'vehicle_no'=> 'MH49 BK2434'),
            array('user_id'=> 2, 'vehicle_name'=>'Bicycle', 'vehicle_no'=> 'MH31 BC0964'),
            array('user_id'=> 3, 'vehicle_name'=>'Bike', 'vehicle_no'=> 'MH42 BK1234'),
            array('user_id'=> 3, 'vehicle_name'=>'Bicycle', 'vehicle_no'=> 'MH45 BC8877'),
            array('user_id'=> 4, 'vehicle_name'=>'Car', 'vehicle_no'=> 'MH31 CR1099'),
            
        );
      Vehicle::insert($vehicles);
    }
}

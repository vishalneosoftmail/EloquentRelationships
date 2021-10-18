<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array('role_name'=>'SuperAdmin'),
            array('role_name'=>'Admin'),
            array('role_name'=>'Distributor'),
            array('role_name'=>'Retailer'),
            array('role_name'=>'Customer'),

        );

        Role::insert($roles);
    }
}

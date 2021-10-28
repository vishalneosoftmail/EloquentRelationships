<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles = array(
            array('user_id'=>1, 'role_id'=>1),
            array('user_id'=>1, 'role_id'=>2),
            array('user_id'=>1, 'role_id'=>3),
            array('user_id'=>2, 'role_id'=>3),
            array('user_id'=>2, 'role_id'=>4),
            array('user_id'=>3, 'role_id'=>5),
        );
        UserRole::insert($userRoles);
    }
}

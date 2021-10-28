<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users  = array(
            array('name'=>'Vishal'),
            array( 'name'=>'Rahul'),
            array( 'name'=>'Suraj'),
           
        );
        // User::insert( $users);
        // $users = User::all();
        foreach ($users as $key => $value) {
        $newUser  = User::create($value);

          //Add Rows in Image Table
          $newUser->getImage()->create([
            'image'=> $value['name'].' Image'
          ]);
       }
        
    }
}

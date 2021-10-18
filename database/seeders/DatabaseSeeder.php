<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //  $this->call(UserSeeder::class);
        //  $this->call(PhoneSeeder::class);
        //  $this->call(VehicleSeeder::class);
        //  $this->call(OrderSeeder::class);
        //  $this->call(CompanySeeder::class);

         $this->call([  UserSeeder::class, 
                        PhoneSeeder::class, 
                        VehicleSeeder::class, 
                        OrderSeeder::class, 
                        CompanySeeder::class,
                        UserKycSeeder::class,
                        InstalledAppSeeder::class,
                        RoleSeeder::class,
                        UserRoleSeeder::class,
                        PostSeeder::class,
                        VideoSeeder::class,
                        CommentSeeder::class,
                        TagSeeder::class,
                        TaggableSeeder::class
                    ]);
    }
}

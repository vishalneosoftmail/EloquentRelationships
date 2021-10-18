<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array(
            array('name'=> 'Great'),
            array('name'=> 'Nice'),
            array('name'=> 'Satisfied'),
            array('name'=> 'Good'),
        );

        Tag::insert($tags);
    }
}

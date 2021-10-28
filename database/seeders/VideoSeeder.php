<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = array(
           array('user_id'=>1, 'title'=> '1st Video'),
           array('user_id'=>2, 'title'=> '2st Video'),
           array('user_id'=>1, 'title'=> '3st Video'),
           array('user_id'=>3, 'title'=> '4st Video'),
       );
       
       foreach ($videos as $key => $value) {
          $newPost = Video::create($value);
          $newPost->getComments()->create([
              'user_id'=> $value['user_id'],
            'comment'=>'comment on '.$value['title']
          ]);
       }
    }
}

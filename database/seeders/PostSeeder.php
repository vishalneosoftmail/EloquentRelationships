<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = array(
           array('user_id'=>1, 'title'=> '1st Post'),
           array('user_id'=>2, 'title'=> '2st Post'),
           array('user_id'=>1, 'title'=> '3st Post'),
           array('user_id'=>3, 'title'=> '4st Post'),
       );
       
       foreach ($posts as $key => $value) {
          $newPost = Post::create($value);

          //Add Rows in comment table
          $newPost->getComments()->create([
              'user_id'=> $value['user_id'],
            'comment'=>'comment on '.$value['title']
          ]);

          //Add Rows in Image Table
          $newPost->getImage()->create([
            'image'=> $key+1 .' Post Image '
          ]);
       }
    }
}

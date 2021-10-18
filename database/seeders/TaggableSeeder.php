<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allTags = Tag::all();
        $allVideos = Video::all();
        $allPost = Post::all();

        foreach ($allPost as $key_post => $value_post) {
            if ($allTags[$key_post]) {
               $value_post->getTags()->attach($allTags[$key_post]);
            }else {
                $value_post->getTags()->attach($allTags[$key_post-count($allTags)]);
            }
            $value_post->getTags()->attach($allTags[rand(0,count($allTags)-1)]);

        }

        foreach ($allVideos as $key_video => $value_video) {
            if ($allTags[$key_video]) {
               $value_video->getTags()->attach($allTags[$key_video]);
            }else {
                $value_video->getTags()->attach($allTags[$key_video-count($allTags)]);
            }
            $value_video->getTags()->attach($allTags[rand(0,count($allTags)-1)]);

        }

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
 public $timestamps = false;
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function getPosts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function getVideos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}

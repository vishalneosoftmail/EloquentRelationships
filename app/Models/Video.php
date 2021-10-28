<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;

    /**
     * Get the user that owns the post.
     */
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getComments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function getComment(){
        return $this->morphOne(Comment::class, 'commentable');
    }

    public function getTags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

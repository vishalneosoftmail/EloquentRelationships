<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    /**
     * Get the parent commentable model (post or video).
     */
    public function commentable(){
        return $this->morphTo();
        // return $this->morphTo(__FUNCTION__, 'commentable_type', 'commentable_id');
    }
}

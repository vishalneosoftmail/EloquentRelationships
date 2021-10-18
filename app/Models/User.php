<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
     public $timestamps = false;
    protected $fillable = [
        'name',
        
    ];

   
   public function getPhone()
	{
		return $this->hasOne(Phone::class, 'user_id', 'id');
	}
    public function getVehicles(){
        return $this->hasMany(Vehicle::class, 'user_id', 'id');
    }

    /**
     * Get the user's most recent order.
    */
    public function latestOrder()
    {
        return $this->hasOne(Order::class)->latestOfMany();
    }
    
    /**
     * Get the user's oldest order.
    */
    public function oldestOrder()
    {
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    /**
     * Get the phone's company.
     */
    public function getUserkyc()
    {
        return $this->hasOneThrough(UserKyc::class, Phone::class,  'user_id', 'phone_id', 'id', 'id');
    }

    /**
     * Get all installed app user's phone.
     */
    public function getInstalledApp()
    {
        return $this->hasManyThrough(InstalledApp::class, Phone::class, 'user_id', 'phone_id', 'id', 'id');
    }

    /**
    * The roles that belong to the user.
    */
    public function getUserRoles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public function getPosts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
    public function getPost()
    {
        return $this->hasOne(Post::class, 'user_id', 'id');
    }

    public function getVideos()
    {
        return $this->hasMany(Video::class, 'user_id', 'id');
    }
    public function getVideo()
    {
        return $this->hasMany(Video::class, 'user_id', 'id');
    }

    /**
     * Get the user's image.
     */
    public function getImage()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

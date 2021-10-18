<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    //one to one relationship
    public function oneToOneRelation(Request $request){
        $userData = User::all();
        $phoneData = Phone::all();
        return view('pages.one_to_one', compact('userData', 'phoneData'));
    }

    //one to many relationship
    public function oneToManyRelation(Request $request){
            $userData = User::all();
            $vehicleData = Vehicle::all(); 
            // $vehicleData = Vehicle::with('getUser')->get(); 
            return view('pages.one_to_many', compact('userData', 'vehicleData'));
    }

    //Many to many relationship
    public function manyToManyRelation(Request $request){
            $userData = User::with('getUserRoles')->get();
            $roleData = Role::with('getRoleUsers')->get();
            
            return view('pages.many_to_many', compact('userData', 'roleData'));
    }

    public function hasOneOfMany(Request $request){
        $userLatestOrder = User::with('latestOrder')->get();
        $userOldestOrder = User::with('oldestOrder')->get();
       
        return view('pages.has_one_of_many', compact('userLatestOrder', 'userOldestOrder'));
    }

    public function hasOneManyThrought(Request $request){
        //has one through
        $hasOneThrough = User::with('getUserkyc')->get();

        //has many through
        $hasManyThrough = User::with('getInstalledApp')->get();


        return view('pages.has_one_through', compact('hasOneThrough', 'hasManyThrough'));
        
    }

    //one to one relationship
    public function oneToOneRelationPolymorphic(Request $request){
        $userData = User::with('getImage')->get();
        $postData = Post::with('getImage')->get();
        $images = Image::all();
       return view('pages.one_to_one_polymorphic', compact('userData', 'postData','images'));
    }  
    //one to many relationship
    public function oneToManyRelationPolymorphic(Request $request){
        $userData = User::all();

        
       return view('pages.one_to_many_polymorphic', compact('userData'));
    }  
    
    public function  manyToManyRelationPolymorphic(Request $request){
        $postData = Post::with('getTags')->get();
        $videoData = Video::with('getTags')->get();
        $tagData = Tag::all();
        return view('pages.many_to_many_polymorphic', compact('postData', 'videoData','tagData'));
    }
    
  
}

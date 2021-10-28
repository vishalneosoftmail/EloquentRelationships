@extends('layout.header')
@section('content')
 <!-- <center> -->
<h1 class= "text-center">One To One Polymorphic</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6 border-right">
           <h2 class= "text-center">User Images</h2>
            <hr>
            @foreach($userData as $key => $value)
            <!-- <h4 class= "text-center">{{--$value->name--}} 
                <ul class="list-group">    
                   <span class="badge badge-secondary">{{-- $value->getImage->image --}}</span>
                </ul>
                 </h4>   
            <br> -->
                <div class="card">
                    <div class="card-header text-center">
                    {{$value->name}} 
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $value->getImage->image }}</h4>
                    </div>
                </div>
                <hr>
            @endforeach
       

            
            <h2 class= "text-center">Post Images</h2>
            <hr>
            @foreach($postData as $k_post => $value_post) 
            <h4 class= "text-center">{{$value_post->title}}  
                <ul class="list-group">    
                    <span class="badge badge-secondary">{{ $value_post->getImage->image }}</span>
                </ul>
                </h4>   
            <br>
            @endforeach
       </div>
       <div class="col-md-6">
            <h2 class= "text-center">Images belongs To</h2>
           <hr>
           @foreach($images as $k_img => $value_img)
            <!-- <h4>  <span class="badge badge-secondary">{{-- $value_img->image --}}</span>  </h4>
                
                <ul class="list-group">
                     
                    <li class="list-group-item">
                       {{-- @if($value_img->imageable->name)
                        {{ $value_img->imageable->name }}
                        @elseif($value_img->imageable->title)
                        {{ $value_img->imageable->title }}
                        @endif
                       --}}
                    </li>
                    
                </ul>
                
          
            <br> -->
           <div class="card">
                    
                    <div class="card-body">
                        <h4 class="card-title text-center">
                           
                        {{ $value_img->image }}
                        </h4>
                    </div>
                    <div class="card-footer  text-center">
                         @if($value_img->imageable->name)
                        {{ $value_img->imageable->name }}
                        @elseif($value_img->imageable->title)
                        {{ $value_img->imageable->title }}
                        @endif
                    </div>
                </div>
                <hr>
            @endforeach

           
       </div>
   </div>


</div>

  <!-- </center> -->
@endsection
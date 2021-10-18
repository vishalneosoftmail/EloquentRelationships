@extends('layout.header')
@section('content')
 <!-- <center> -->
<h1 class= "text-center">Many To Many</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6 border-right">
           <h2 class= "text-center">Posts with Tags</h2>
            <hr>
            @foreach($postData as $key_post => $value_post)
            
                <div class="card">
                    <div class="card-header text-center">
                    {{$value_post->title}} 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">
                        @foreach($value_post->getTags as $key_p_tag => $value_p_tag)
                         <span class="badge badge-secondary">{{ $value_p_tag->name }}</span>
                        @endforeach
                        </h5>
                    </div>
                     <div class="card-footer  text-center">
                        -By {{  $value_post->getUser->name}}
                    </div>
                </div>
                <hr>
            @endforeach
       

            
            <h2 class= "text-center">Video with Tags</h2>
            <hr>
            @foreach($videoData as $key_video => $value_video)
            
                <div class="card">
                    <div class="card-header text-center">
                    {{$value_video->title}} 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">
                        @foreach ($value_video->getTags as $key_v_tag => $value_v_tag)
                         <span class="badge badge-secondary">{{ $value_v_tag->name }}</span>
                        @endforeach
                        </h5>
                    </div>
                     <div class="card-footer  text-center">
                        -By {{  $value_video->getUser->name}}
                    </div>
                </div>
                <hr>
            @endforeach
       </div>
       <div class="col-md-6">
            <h2 class= "text-center">Tag Used By</h2>
           <hr>
           @foreach($tagData as $key_tag => $value_tag)
            
           <div class="card">
                    <div class="card-header text-center">
                    {{$value_tag->name}} 
                    </div>
                    <div class="card-body">
                        
                        <ul class="list-group">
                            @foreach ($value_tag->getPosts as $key_t_post => $value_t_post) 
                            <li class="list-group-item">{{ $value_t_post->title }} By {{ $value_t_post->getUser->name }}</li>
                            @endforeach
                            @foreach ($value_tag->getVideos as $key_t_video => $value_t_video)
                            <li class="list-group-item">{{ $value_t_video->title }} By {{ $value_t_video->getUser->name }}</li>
                            @endforeach
                        </u>
                    </div>
                   
                </div>
                <hr>
            @endforeach

           
       </div>
   </div>


</div>

  <!-- </center> -->
@endsection
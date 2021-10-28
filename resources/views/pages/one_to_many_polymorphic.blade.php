@extends('layout.header')
@section('content')
 <!-- <center> -->
<h1 class= "text-center">One To Many</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6 border-right">
           <h2 class= "text-center">Comment on post</h2>
            <hr>
            @foreach($userData as $k_user => $value_user)
                <div class="card">
                    <div class="card-header text-center">
                    {{$value_user->name}} 
                    </div>
                    <div class="card-body">
                        
                        <ul class="list-group">
                            @foreach($value_user->getPosts as $key => $value)
                                <li class="list-group-item">{{ $value->title }} <br>
                                    @foreach($value->getComments as $k => $val)
                                        {{ $val->comment}}
                                    @endforeach
                                </li>
                            @endforeach
                        </u>
                    </div>
                   
                </div>
                <hr>
            @endforeach

            
           
       </div>
       <div class="col-md-6">
            <h2 class= "text-center">Comment On video</h2>
            <hr>
            @foreach($userData as $k_user => $value_user)
                <div class="card">
                    <div class="card-header text-center">
                    {{$value_user->name}} 
                    </div>
                    <div class="card-body">
                        
                        <ul class="list-group">
                            @foreach($value_user->getVideos as $value_video)
                            <li class="list-group-item">{{ $value_video->title }} <br>
                            @foreach ($value_video->getComments as $k_video => $val_video)
                             {{ $val_video->comment}}
                             @endforeach
                            </li>
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
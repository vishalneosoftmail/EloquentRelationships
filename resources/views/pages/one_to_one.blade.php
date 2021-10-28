@extends('layout.header')
@section('content')
 <center>
<h1>One to One</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6">
           <h2>hasOne</h2>
           <hr>
            @foreach($userData as $key => $value)
            <h2>{{$value->name}} 
                <span class="badge badge-secondary">{{$value->getPhone->phone_no}}</span></h2><br>
            @endforeach
       </div>
       <div class="col-md-6">
           <h2>belongsTo</h2>
           <hr>
            @foreach($phoneData as $key => $value)
            <h2>{{$value->phone_no}} 
                <span class="badge badge-secondary">{{$value->getUser->name}}</span></h2><br>
            @endforeach
       </div>
   </div>


</div>

  </center>
@endsection
@extends('layout.header')
@section('content')
 <center>
<h1>One To Many</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6">
           <h2>hasMany</h2>
           <hr>
            @foreach($userData as $key => $value)
            <h3>{{$value->name}} has
                 @foreach ($value->getVehicles as $k => $val) 
                    <span class="badge badge-secondary">{{$val->vehicle_name}}</span>
                @endforeach
               </h3>
            @endforeach
       </div>
       <div class="col-md-6">
           <h2>belongsTo</h2>
           <hr>
            @foreach($vehicleData as $key => $value)
            <h3>{{$value->vehicle_name}} No: {{$value->vehicle_no}} <br>
            Owner 
                <span class="badge badge-secondary">{{$value->getUser->name}}</span>
                </h3>
                 <hr>
            @endforeach
            
           
       </div>
   </div>


</div>

  </center>
@endsection
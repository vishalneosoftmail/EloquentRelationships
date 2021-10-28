@extends('layout.header')
@section('content')
 <center>
<h1>Has One Of Many</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6">
           <h2>Latest Order</h2>
           <hr>
            @foreach($userLatestOrder as $key => $value)
            <h3>{{$value->name}} 
                <br>
                <span class="badge badge-secondary">{{$value->latestOrder->product_name}} </span> at ₹{{$value->latestOrder->product_price}}</h3><br>
            @endforeach
       </div>
       <div class="col-md-6">
            <h2>Oldest Order</h2>
           <hr>
            @foreach($userOldestOrder as $key => $value)
            <h3>{{$value->name}} <br>
                <span class="badge badge-secondary">{{$value->oldestOrder->product_name}} </span> at ₹{{$value->oldestOrder->product_price}}</h3><br>
            @endforeach
       </div>
   </div>


</div>

  </center>
@endsection
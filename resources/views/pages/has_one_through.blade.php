@extends('layout.header')
@section('content')
 <center>
<h1>Has One/Many Through</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6">
           <h2>Has One Through</h2>
           <hr>
            @foreach($hasOneThrough as $key => $value)
            <h3>{{$value->name}} <br>
             with Phone No.  <span class="badge badge-secondary">{{$value->getPhone->phone_no}}</span>
                <br>
                 
                Verified By <span class="badge badge-secondary">{{$value->getUserkyc->kyc_document}} </span> </h3><br>
            @endforeach
       </div>
       <div class="col-md-6">
           <h2>Has Many Through</h2>
           <hr>
            @foreach($hasManyThrough as $key => $value)
            <h3>
                
                Installed App <br>
                 @foreach($value->getInstalledApp as $index => $insapp)
                 <span class="badge badge-secondary">{{$insapp->app_name}} </span>
                 @endforeach
                 <br>
                 in Phone No. <span class="badge badge-secondary">{{$value->getPhone->phone_no}}</span>
              <br>  of {{$value->name}} 
                </h3>
                
            <br>
            @endforeach
       </div>
   </div>


</div>

  </center>
@endsection
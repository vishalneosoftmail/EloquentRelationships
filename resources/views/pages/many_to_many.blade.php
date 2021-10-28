@extends('layout.header')
@section('content')
 <!-- <center> -->
<h1 class= "text-center">Many To Many</h1>
<hr>
<div class="container">
   <div class="row">
       <div class="col-md-6 border-right">
           <h2 class= "text-center">User Roles</h2>
           <hr>
            @foreach($userData as $key => $value)
            <h4>{{$value->name}}  has following roles</h4>
                
                <!-- <ul class="list-group">
                     @foreach ($value->getUserRoles as $index => $val) 
                  <h5>  <li class="list-group-item"><span class="badge badge-secondary">{{ $val->role_name }}</span></li></h5>
                    @endforeach
  
                </ul> -->
                <ul class="list-group">
                     @foreach ($value->getUserRoles as $index => $val) 
                    <li class="list-group-item">{{ $val->role_name }}</li>
                    @endforeach
  
                </ul>
          
            <br>
            @endforeach
       </div>
       <div class="col-md-6">
            <h2 class= "text-center">Roles of User</h2>
           <hr>
           @foreach($roleData as $key => $value)
            <h4>  <span class="badge badge-secondary">{{$value->role_name}}</span>  </h4>
                
                <ul class="list-group">
                     @foreach ($value->getRoleUsers as $index => $val) 
                    <li class="list-group-item">{{ $val->name }}</li>
                    @endforeach
  
                </ul>
                
          
            <br>
            @endforeach

            <!-- <table class="table table-bordered table-hover">
                <tbody>
                     @foreach($roleData as $key => $value)
                <tr>
                    <h4>
                    <th rowspan="{{ count($value->getRoleUsers) }}">{{$value->role_name}}</th>
                <td>
                    
              
                    <ul class="">
                        @foreach ($value->getRoleUsers as $index => $val) 
                        <li class="">{{ $val->name }}</li>
                        @endforeach
    
                    </ul>
                </td>
                </h4>
                </tr>
                @endforeach
                </tbody>
            </table> -->
       </div>
   </div>


</div>

  <!-- </center> -->
@endsection
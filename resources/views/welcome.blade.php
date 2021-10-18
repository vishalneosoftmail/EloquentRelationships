@extends('layout.header')
@section('content')
            <h2 class= "text-center">Eloquent Relationships</h2>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">One To One Relationship</h5>
                      
                        
                        <p class="card-text">User has one phone no</p>
                        
                        <a href="{{ route('one-to-one') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">One To Many Relationship</h5>
                      
                        
                        <p class="card-text">User can have multiple Vehical</p>
                        
                        <a href="{{ route('one-to-many') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Many To Many Relationship</h5>
                      
                        
                        <p class="card-text"> 
                            1) User may have more than one Role <br>
                            2) Many User have same Role
                        </p>
                        
                        <a href="{{ route('many-to-many') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

               
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Has One/Many Through Relationship</h5>
                      
                        
                        <p class="card-text"></p>
                        
                        <a href="{{ route('has-one-many-through') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Has One Of Many Relationship</h5>
                      
                        
                        <p class="card-text"></p>
                        
                        <a href="{{ route('has-one-of-many') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>
            </div>
            <hr>
            <h2 class= "text-center">Eloquent Polymorphic Relationships</h2>
             <p class="card-text text-center">Child model can belong to more than one type of model using a single association</p>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">One To One Relationship</h5>
                      
                        
                        <p class="card-text">User has one phone no</p>
                        
                        <a href="{{ route('one-to-one-polymorphic') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">One To Many Relationship</h5>
                      
                        
                        <p class="card-text">User can have multiple Vehical</p>
                        
                        <a href="{{ route('one-to-many-polymorphic') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <!-- <a href="{{ route('one-to-one') }}"> -->
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Many To Many Relationship</h5>
                      
                        
                        <p class="card-text"> 
                            1) User may have more than one Role <br>
                            2) Many User have same Role
                        </p>
                        
                        <a href="{{ route('many-to-many-polymorphic') }}" class="btn btn-primary ">Check Sample</a>
                          </center>
                    </div>
                    <!-- </a> -->
                    </div>
                </div>

               
            </div>
            <hr>
@endsection
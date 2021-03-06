@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('includes.message')
                <div class="card border-secondary">
                    <div class="card-header">
                        <h4>Login Here</h4>
                    </div>

                    <div class="card-body">
                         <form method = "POST" action="{{route('loginUser')}}">
                            @csrf
                             <div class="mb-3">
                               <label for="username"><h5>Username</h5></label>

                               <input type="text" name="username" class="form-control rounded-pill" placeholder="Enter Username">
                             </div>

                             <div class="mb-3">
                               <label for="password"><h5>Password</h5></label>
                               <input type="password" name="password" class="form-control rounded-pill" placeholder="Enter Password">
                            </div>

                            <button class="btn btn-secondary">Login</button>
                        </form> 
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
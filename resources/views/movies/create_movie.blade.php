@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('includes.message')
                <div class="card border-secondary">
                    <div class="card-header">
                        <h4>Create Movie</h4>
                    </div>

                    <div class="card-body">
                        <form method = "POST" action="{{route('createMovie')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="date"><h5>Movie Name</h5></label>

                                <input type="text" name="name" class="form-control border-secondary rounded-pill" 
                                    placeholder="Movie Name">
                             </div>

                             
       
                                    <div class="mb-3">
                                         <label for="Cinema"> <h5>Showtimes</h5></label>
                                             <select name="showtime_id" class=" border-secondary 
                                                form-select form-control rounded-pill">
                                                 <option value=""> Select Showtime</option>
                                                 @foreach($showtimes as $showtime)
                                                 <option value="{{$showtime->id}}">
                                                    {{$showtime->date}}
                                                     (<small>
                                                        {{$showtime->duration}}
                                                    </small>)
                                                </option>

                                                 @endforeach
                                                 
                                            </select>
                                    </div>

                                        
         
                             <div class="mt-3">
                                 
                                <button class="btn btn-secondary">Create Movie</button>
                             </div>
                        </form> 
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
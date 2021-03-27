@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="col-md-4 offset-md-7">
        <form>
            <div class="row">
                <div class="col-md-9 mb-3">
                     <input class="form-control me-2" type="search" placeholder="Search Movie" aria-label="Search">
                </div>

                <div class="col-md-3">
                    <button class="btn btn-outline-success" type="submit">Search</button>     
                </div>
            </div>
        </form>
            
        </div>
        <div class="row">
            <div class="col-md-8 mb-3">
                        <h4>Our Movies!</h4>
                        <div class="row"></div>
                        <ul class="list-group">
                        @foreach($movies as $movie)
                           <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('img/default.jpg')}}" alt="">   
                                        </div>

                                    <div class="col-md-8">
                                        <a href=""  style="text-decoration: none;" class="text-dark">
                                            <h5>Movie: {{$movie->name}}</h5>
                                        </a>

                                            <small>
                                                Showtime: {{$movie->showtime->date}} ({{$movie->showtime->duration}})
                                            </small><br>
                                            

                                            <small>
                                                Cinema: {{$movie->showtime->cinema->name}}
                                            </small>

                                       
                                    </div>
                                </div>
                              
                            </li>
                            @endforeach
                        </ul>       
            </div>
        </div>
    </div>
@endsection
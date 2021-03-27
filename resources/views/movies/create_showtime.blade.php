@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('includes.message')
                <div class="card border-secondary">
                    <div class="card-header">
                        <h4>Add Showtime</h4>
                    </div>

                    <div class="card-body">
                        <form method = "POST" action="{{route('createShowtime')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="date"><h5>Date</h5></label>

                                <input type="text" name="date" class="form-control border-secondary rounded-pill" 
                                    placeholder="E.G: 24-10-2021">
                             </div>

                             <div class="mb-3">
                                <label for="duration"><h5>Duration</h5></label>

                                <input type="text" name="duration" class="form-control border-secondary rounded-pill" 
                                    placeholder="E.G: 10am to 12pm">
                             </div>
                             
       
                                    <div class="mb-3">
                                         <label for="Cinema"> <h5>Cinema</h5></label>
                                             <select name="cinema" class=" border-secondary 
                                                form-select form-control rounded-pill">
                                                 <option value=""> Select Cinema Location</option>
                                                 <option value="Lekki-Cinema">Lekki Cinema</option>
                                                 <option value="Ajah-Cinema">Ajah Cinema</option>
                                                 <option value="Ikeja-Cinema">Ikeja Cinema</option>
                                            </select>
                                    </div>

                                        
         
                             <div class="mt-3">
                                 
                                <button class="btn btn-secondary">Create Showtime</button>
                             </div>
                        </form> 
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
<?php
namespace App\Repositories;

use App\Models\Movie;
use App\Models\Showtime;
use App\Traits\ValidationTrait;
use App\Traits\validateMovieRequest;
use Illuminate\Http\Request;


class MovieRepository 
{
	use ValidationTrait;

	public function index(){
		
    	return  Movie::orderBy('created_at')->get();

	}
	
	public function creates(){

		return  Showtime::orderBy('created_at')->get();
	}

	public function createMovies(Request $request){

		$validatedRequest = $this->validateMovieRequest($request);

    	Movie::create($validatedRequest);
	}
}
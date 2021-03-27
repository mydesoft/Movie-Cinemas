<?php

namespace App\Http\Controllers;

use App\Repositories\MovieRepository;
use Illuminate\Http\Request;

class MovieController extends Controller
{

	private $MovieRepository;

	public function __construct(MovieRepository $MovieRepository)
	{
		$this->MovieRepository = $MovieRepository;
	}


    public function create(Request $request){

    	$showtimes = $this->MovieRepository->creates();

    	return view('movies.create_movie', compact('showtimes'));
    }

    public function createMovie(Request $request){

    	 $this->MovieRepository->createMovies($request);

    	return redirect()->back()->with('success', 'Movie Created Successfully');

    }
}

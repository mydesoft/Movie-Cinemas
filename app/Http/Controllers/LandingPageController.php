<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Repositories\MovieRepository;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

	private $MovieRepository;

	public function __construct(MovieRepository $MovieRepository)
	{
		$this->MovieRepository = $MovieRepository;
	}

    public function index()
    {    
    	$movies = $this->MovieRepository->index();
    			
    	return view('index', compact('movies'));
    }
}

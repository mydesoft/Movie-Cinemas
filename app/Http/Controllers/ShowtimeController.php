<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Showtime;
use App\Repositories\ShowtimeRepository;
use App\Traits\ValidationTrait;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
	private $ShowtimeRepository;

    public function __construct(ShowtimeRepository $ShowtimeRepository)
    {
        $this->ShowtimeRepository = $ShowtimeRepository;
    }

    public function create(){

    	return view('showtime.create_showtime');
    }

    public function createShowtime(Request $request){

    $this->ShowtimeRepository->createShowtimes($request);

    return redirect()->back()->with('success', 'Showtime created!');

    }

}

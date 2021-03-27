<?php
namespace App\Repositories;

use App\Models\Cinema;
use App\Models\Showtime;
use App\Traits\ValidationTrait;
use Illuminate\Http\Request;

/**
 * 
 */
class ShowtimeRepository 
{
	use ValidationTrait;

	public function createShowTimes(Request $request)
	{

	$this->validateShowtimeRequest($request);

    $cinema= Cinema::where('name', $request->cinema)->firstOrFail();

    Showtime::create([

    	'date' => $request->date,
    	'duration' => $request->duration,
    	'cinema_id' => $cinema->id,

    ]);

	}
}
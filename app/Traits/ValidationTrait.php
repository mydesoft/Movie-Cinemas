<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ValidationTrait{

	public function validateRequest(Request $request){

		return $request->validate([

			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8'
		]);
	}


	public function validateLoginRequest(Request $request){

		return $request->validate([

			'username' => 'required',
			'password' => 'required|min:8'
		]);
	}

	public function validateShowtimeRequest(Request $request){

		return $request->validate([

			'date' => 'required',
			'duration' => 'required',
			'cinema' => 'required',
		]);
	}

	public function validateMovieRequest(Request $request){

		return $request->validate([

			'name' => 'required',
			'showtime_id' => 'required',
		]);
	}
}
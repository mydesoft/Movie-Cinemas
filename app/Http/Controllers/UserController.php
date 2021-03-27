<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ValidationTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	use ValidationTrait;

    public function register()
    {
    	return view('user.register');
    }

    public function registerUser(Request $request)
    {
    	$validatedRequest = $this->validateRequest($request);

    	$validatedRequest['password'] = Hash::make($request->password);

    	User::create($validatedRequest);

    	return redirect()->route('login');
    }


     public function login()
    {
    	return view('user.login');
    }

    public function loginUser(Request $request){

    	$this->validateLoginRequest($request);

    	if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
    		
    		return redirect()->route('showtime');
    	}

    	else{

    		return redirect()->back()->with('error', 'Invalid Details');
    	}
    }

    public function logout(){

    	Auth::logout();
    	
    	return redirect()->route('login');
    }
}

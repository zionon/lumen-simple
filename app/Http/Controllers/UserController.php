<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
* UserController
*/
class UserController extends Controller
{
	
	// function __construct()
	// {
		
	// }
	
	public function signup(Request $request)
	{
		var_dump($request->input('User'));
	}

	public function register()
	{
		return view('register');
	}
}
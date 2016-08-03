<?php
namespace App\Http\Controllers;

use Log;
use DB;
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
		$data = DB::table('user')->insertGetId($request->input('User'));
		var_dump($data);
	}

	public function register()
	{
		Log::info('this is register page');
		return view('register');
	}
}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
* PageController
*/
class PageController extends Controller
{
	
	function __construct()
	{
		//
	}

	public function signup()
	{
		echo "this is signup page";
	}
}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
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
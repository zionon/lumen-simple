<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
* PostController
*/
class PostController extends Controller
{
	
	function __construct()
	{
		//
	}

	/**
	 * 
	 */
	public function create()
	{
		return view('post.create');
	}
}
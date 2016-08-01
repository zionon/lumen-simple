<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Psr\Http\Message\ServerRequestInterface;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 
     */
    public function test()
    {
        // echo 'hello ' . $name . "<br />";
        // $url = action('ExampleController@test');
        return redirect('json');
    }

    /**
     * 
     */
    public function update(Request $request, $id)
    {
        var_dump($request->all());
        echo $id;
    }

    /**
     *
     * 
     */
    public function json()
    {
        return response()->json(['name' => 'Huangguanhao', 'age' => '18']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
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
     */
    public function view()
    {
        var_dump(response());
        // return view('greeting', ['name' => 'Huang']);
    }

    /**
     * 
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     *
     * 
     */
    public function json()
    {
        return response()->json(['name' => 'Huangguanhao', 'age' => '18']);
    }

    /**
     * 
     */
    public function phpinfo()
    {
        phpinfo();
    }
}

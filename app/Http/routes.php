<?php
// use Psr\Http\Message\ServerRequestInterface;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    // return $app->version();
    return 'hello world';
});

$app->get('foo/bar', function () use ($app) {
	$url = url('foo/bar');
	return $url;
});

$app->get('user/{userid}/test/{test}', function ($i, $t) {
	return 'User ' . $i . $t;
});

$app->get('test', ['uses' => 'ExampleController@test', 'as' => 'name']);

$app->get('te', function () use ($app) {
	// $url = action('ExampleController@test');
	$url = route('name');
	echo $url;
});

$app->get('id/{name}', 'ExampleController@update');

$app->get('json', 'ExampleController@json');
$app->get('view', 'ExampleController@view');
$app->get('login', 'ExampleController@login');
$app->get('phpinfo', 'ExampleController@phpinfo');

$app->get('signup', 'PageController@signup');
$app->get('register', 'UserController@register');
$app->post('register', ['uses' => 'UserController@signup', 'as' => 'signup']);
// $app->post();
// $app->get('psr', function (ServerRequestInterface $request) {
// 	var_dump($request);
// });










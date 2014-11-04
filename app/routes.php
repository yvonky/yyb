<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/av',function()
{
	$query = new AVQuery('VenueList');
    // $query->where('ID',1);
    $return = $query->find();
    // print_r($return);
    echo "<ul>";
    foreach ($return as $name) {
    	echo "<li>";
    	echo ($name['name']);
    	echo "</li>";
    }
    echo "</ul>";
    // print_r($return['name']);
});

// Route::get('/av','YybController@show');

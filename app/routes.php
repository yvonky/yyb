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
	$query = new AVQuery();
     // $query->where('ID',1);
    // $query->where('sportID','1');
    // $query->orderBy('sportID');
    // var_dump($query->$args);
    // $return = $query->find();
    // print_r($return);
    $cql=array('cql'=>"select * from SportObject where sportID='1'");
    $return = $query->cqlfind($cql);
    // echo "<ul>";
    // foreach ($return as $name) {
    // 	echo "<li>";
    // 	echo ($name['sportID'].'  '.$name['sportName']);
    // 	echo "</li>";
    // }
    // echo "</ul>";
    print_r($return);
});

// Route::get('/av','YybController@show');

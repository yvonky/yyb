<?php
class YybController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'YybController@showYyb');
	|
	*/
	public function getIndex()
	{
		return View::make('yyb');			
	}

	public function getAdminlogin()
	{
		return View::make('admin/adminlogin');
	}

	public function show()
	{
		$query = new AVQuery('SportObject');
	}
}

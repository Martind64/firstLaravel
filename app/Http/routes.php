<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return view('welcome');
});

/**
* Show tasks
*/
Route::get('/tasks', function(Request $request)
{
	return view('tasks');
});

/**
* Add New Task
*/
Route::post('/task', function(Request $request) 
{
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',

	]);
	
	if($validator->fails()) 
	{
		return redirect('/tasks')
			->withInput()
			->withErrors($validator);
	}
			
	// create the task	

});

/**
* Delete Task
*/
Route::delete('/task/{task}', function(Task $task) 
{
	//
});

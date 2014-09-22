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


//添加一条新记录
Route::get('/add', function(){
	$resource = new Resource;
	$resource->name = '测试数据';
	$resource->save();

	//return View::make('add');
});
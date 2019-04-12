<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('treasurebox','treasureboxcontroller');
Route::get('session','treasureboxcontroller@usession');

Route::get('/treasurebox',function()
{
	return view('treasurebox.treasurebox');
});
Route::get('/treasurebox',["as"=>"treasurebox/treasurebox",function()
	{
		return view("treasurebox/treasurebox");
	}]);

Route::post('treasure',function()
{
	session()->flash('message','Registered successfully');
	return redirect('/treasurebox');
});

Route::post('/login','treasureboxcontroller@session');
Route::get('/semester',function()
{
	return view('treasurebox/semester');
});





























Route::get('/semester1',function()
{
	return view('treasurebox/semester1');
});
Route::get('/CHE110',function()
{
	return view('treasurebox/a1');
});
Route::get('/unit1.ppt',function()
{
	$pathToFile="notes/unit1.ppt";
	return response()->file($pathToFile);
});
Route::get('/unit2.ppt',function()
{
	$pathToFile="notes/unit2.ppt";
	return response()->file($pathToFile);
});
Route::get('/unit3.ppt',function()
{
	$pathToFile="notes/Biodiversity.ppt";
	return response()->file($pathToFile);
});
Route::get('/unit4.ppt',function()
{
	$pathToFile="notes/Environmental Pollution.ppt";
	return response()->file($pathToFile);
});
Route::get('/unit5.ppt',function()
{
	$pathToFile="notes/Environment law and regulation.ppt";
	return response()->file($pathToFile);
});
Route::get('/unit6.ppt',function()
{
	$pathToFile="notes/Human population.ppt";
	return response()->file($pathToFile);
});
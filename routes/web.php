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
	return redirect('login');
});

Route::post('send','mailController@send')->name('sendemail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/employee/all', 'HomeController@employee')->name('empList');
Route::get('/delete/{EmpID}', 'HomeController@destroy')->name('deleteEmp');
Route::get('/edit/{EmpID}', 'HomeController@edit')->name('editEmp');
Route::post('/update/{EmpID}', 'HomeController@update')->name('update');

Route::post('uploadimg', 'HomeController@uploadimg');


Route::get('/logout', function(){
	Auth::logout();
	return redirect('login');
});

Route::get('/imagedemo', function()
{
    $img = Image::make('Desert.jpg')->resize(300, 200);

    $imgname = $img->basename;

    //$dt = $img->response('jpg');

    $img->save('upload/'.$imgname);
});


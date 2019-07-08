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

Route::get('/hh', function () {
  return view('hadiyah');
});

Route::get('/GUIProgram', function () {
    return view('GUIProgram');
});
Route::get('/GUIObserver', function () {
    return view('GUIObserver');
});
Route::get('/GUIObserverForms', function () {
    return view('GUIObserverForms');
});
Route::get('/GUISupervisor', function () {
    return view('GUISupervisor');
});
Route::get('/GUIObserverInfo', function () {
    return view('GUIObserverInfo');
});
Route::get('/GUIAdmin', function () {
    return view('GUIAdmin');
});
Route::get('/GUIadminProgramInfo', function () {
    return view('GUIadminProgramInfo');
});
Route::get('/GUIit', function () {
    return view('GUIit');

});

Route::resource('/Programs', 'ProgramController');
Route::get('/Programs/{programs}','ProgramController@show')->name('program.show');

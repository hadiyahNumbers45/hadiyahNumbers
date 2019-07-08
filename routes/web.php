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

    return view('home');
});

Route::get('/GUIProgram', function () {
    return view('GUIProgram');
});
/*delegation 8/7/2019*/
Route::get('/GUIdelegation', function () {
    return view('GUIdelegation');
});
/*delegation 8/7/2019*/
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

/*delegation 8/7/2019
* '\insert' is action from gui
*/

Route::post('/insert', 'Cnteoller@insert');
/*delegation 8/7/2019*/

Rout::post('/test','itController@signup');

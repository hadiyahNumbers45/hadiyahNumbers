<?php
use App\Material;
use App\Service;
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

Route::get('/hhh', function () {
  return view('hadiyah');
});
Route::get('/hh', function () {
  return view('testTemplate');
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
    $materials = Material::all();
    $services=Service::all();

    return view('GUISupervisor',compact('services','materials'));
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

Route::resource('/GUIObserverInfo', 'GUIObserverInfoController');
Route::resource('/Programs', 'ProgramController');
Route::get('/Programs/{programs}','ProgramController@show')->name('program.show');

/*delegation 8/7/2019
* '\insert' is action from gui
*/

Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');
Route::get('/observers','GUIObserverInfoController@index');
Route::post('/search','GUIObserverInfoController@searchid' );
Route::post('/insert', 'Cnteoller@insert');
/*delegation 8/7/2019*/

Route::post('/test','itController@signup');



//Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');


Route::get('/observers/create','GUIObserverInfoController@create');

Route::get('edit','GUIObserverInfoController@show');

Route::get('edit/{id}','GUIObserverInfoController@edit');

//Route::post('/Observersaction','GUIObserverInfoController@editObserver');

Route::post('/Observersaction','GUIObserverInfoController@editObserver');

//Asayel it form to creatacount 13-11-1440
Route::PATCH('/newAccount','RegisterController@signup');

Route::post('/signin','itController@signinusers');

Route::post('/show','itController@showInfo');

Route::PATCH('/update/{id}','itController@update');

Route::PATCH('/delete/{id}','itController@deleteUser');
//----Supervisor
Route::PATCH('/addMaterials','GUISupervisorController@addMaterials');

Route::PATCH('/add-service-materials','GUISupervisorController@storMaterials');

//end Asayel
//end Asayel




Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');
Route::get('/observers','GUIObserverInfoController@index');
Route::post('/search','GUIObserverInfoController@searchid' );
Route::post('/insert', 'Cnteoller@insert');
/*delegation 8/7/2019*/

Route::post('/test','itController@signup');



//Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');


Route::get('/observers/create','GUIObserverInfoController@create');

Route::post('/edit','GUIObserverInfoController@show');
Route::post('update','GUIObserverInfoController@update');
//Route::post('/edit','GUIObserverInfoController@edit');

//Route::post('/Observersaction','GUIObserverInfoController@editObserver');



Auth::routes();






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
//bsma  21/7
Route::get('/','homeController@index');
Route::get('/GUIProgram/{id}','GUIProgramController@index');
Route::get('/GUIObserver','GUIObserverController@index'); // هند

//BASMA forms
Route::post('/GUIObserverForm','GUIObserverFormsController@index');
Route::post('/indexlocation','GUIObserverFormsController@indexlocation');
Route::post('/sevedata','GUIObserverFormsController@store');
// basma admin page
Route::get('/SupervisersInfo', 'GUIAdminController@get_superviser');


Route::get('/hhh', function () {
  return view('hadiyah');
});
Route::get('/hh', function () {
  return view('testTemplate');
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

Route::resource('/GUIObserverInfo', 'GUIObserverInfoController');
Route::resource('/Programs', 'ProgramController');
Route::get('/Programs/{programs}','ProgramController@show')->name('program.show');

/*delegation 8/7/2019
* '\insert' is action from gui
*/

Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');
Route::get('/observers','GUIObserverInfoController@index');
Route::post('/search','GUIObserverInfoController@searchid' );
Route::post('/insert', 'Cnteoller@insert');
/*delegation 8/7/2019*/

Route::post('/test','itController@signup');



//Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');


Route::get('/observers/create','GUIObserverInfoController@create');

Route::get('edit','GUIObserverInfoController@show');

Route::get('edit/{id}','GUIObserverInfoController@edit');

//Route::post('/Observersaction','GUIObserverInfoController@editObserver');

Route::post('/Observersaction','GUIObserverInfoController@editObserver');

//Asayel it form to creatacount 13-11-1440
Route::PATCH('/newAccount','itController@signup');

Route::get('/signin','itController@signinusers');

Route::post('/show','itController@showInfo');

Route::PATCH('/update/{id}','itController@update');

Route::PATCH('/delete/{id}','itController@deleteUser');

//end Asayel




Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');
Route::get('/observers','GUIObserverInfoController@index');
Route::post('/search','GUIObserverInfoController@searchid' );
Route::post('/insert', 'Cnteoller@insert');
/*delegation 8/7/2019*/

Route::get('/test','ProgramController@index');


//Route::get('views/GUIObserverInfo','GUIObserverInfoController@index');


Route::get('/observers/create','GUIObserverInfoController@create');

Route::post('/edit','GUIObserverInfoController@show');
Route::post('update','GUIObserverInfoController@update');
//Route::post('/edit','GUIObserverInfoController@edit');

//Route::post('/Observersaction','GUIObserverInfoController@editObserver');





/*session 21/7/2019
Route::get('/hadiyah', function (){
    return view('hadiyah');*/


/*session 21/7/2019*/
Route::post('/hadiyah','SessionController@Session');

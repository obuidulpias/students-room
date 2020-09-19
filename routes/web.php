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

/*Route::get('/', function () {
    return view('welcome');
}); */

//Route::get('/', [StudentController::index, 'index']);

Route::get('/',[
    'uses' => 'StudentController@index',
    'as'   => '/'
]);
Route::post('/registration',[
    'uses' => 'StudentController@studentSignUp',
    'as'   => 'student-sign-up'
]);
Route::get('/student-information',[
    'uses' => 'StudentController@mainContent',
    'as'   => 'main-content'
]);

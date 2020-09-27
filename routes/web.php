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
Route::post('/login',[
    'uses' => 'StudentController@studentloginCheck',
    'as'   => 'student-login'
]);
Route::post('/logout',[
    'uses' => 'StudentController@studentlogout',
    'as'   => 'student-logout'
]);
Route::get('/student-information',[
    'uses' => 'StudentController@mainContent',
    'as'   => 'main-content'
]);
Route::get('/rds',[
    'uses' => 'StudentController@rdsContent',
    'as'   => 'rds-content'
]);
Route::get('/student/info',[
    'uses' => 'StudentController@studentInfoContent',
    'as'   => 'student-info'
]);
Route::get('/id-card',[
    'uses' => 'StudentController@idCardInfo',
    'as'   => 'id-card'
]);

Route::get('/edit/student/info',[
    'uses' => 'StudentController@editStudentInfo',
    'as'   => 'edit-student-info'
]);
Route::post('/update/student/info',[
    'uses' => 'StudentController@updateStudentInfo',
    'as'   => 'update-student-info'
]);
Route::get('/edit/password',[
    'uses' => 'StudentController@editPassword',
    'as'   => 'edit-password'
]);

Route::post('/update/password',[
    'uses' => 'StudentController@updatePassword',
    'as'   => 'update-Password'
]);
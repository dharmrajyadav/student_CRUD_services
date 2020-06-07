<?php

use Illuminate\Support\Facades\Route;

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
    return view('student.registration');
    });

    
// Route::get('/registration', function () {
//     return view('student.registration');
//     })->name('registration.data');

Route::get('registGet','registrationController@registGetview');

//Route::post('registPost','registrationController@registSubmit')->name('registration.data');
Route::get('courseType','registrationController@getCourseType')->name('course.Type');

Route::get('getCountry','registrationController@getCountry')->name('country.name');

Route::get('/getCountryId/{id}','registrationController@getCountryId')->name('country.Id');

Route::get('/studentDetails','studentDetails@getStudentDetails');
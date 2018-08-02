<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('register', 'DoctorController@create')->name('register');

Route::post('register', 'DoctorController@store');

Route::get('/', 'Controller@welcome');

Route::get('home', 'HomeController@index')->name('home');

Route::get('app/cities', 'CityController@index')->name('api.list.cities');

Route::get('app/specialties', 'SpecialtyController@index')->name('api.list.specialties');

Route::get('app/doctors', 'DoctorController@index')->name('api.list.doctors');

Route::get('app/doctor/{doctor}', 'DoctorController@show')->name('api.show.doctor');

Route::get('app/doctor/filter/{location}/{specialty}', 'DoctorController@filter')->name('api.filter.doctor');


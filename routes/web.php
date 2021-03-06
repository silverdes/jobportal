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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('accounts', 'AccountController');

Route::resource('countries', 'CountryController');

Route::resource('invitations', 'InvitationController');

Route::resource('jobs', 'JobController');

Route::resource('organisations', 'OrganisationController');

Route::resource('roles', 'RoleController');

Route::resource('skills', 'SkillController');

Route::resource('organisationUsers', 'OrganisationUserController');

Route::resource('failedJobs', 'FailedJobController');

Route::resource('users', 'UserController');
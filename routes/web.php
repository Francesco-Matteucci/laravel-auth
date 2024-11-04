<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/projects', 'ProjectController@index')->name('projects.index');
    Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
    Route::post('/projects', 'ProjectController@store')->name('projects.store');
    Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show');
    Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('projects.edit');
    Route::put('/projects/{project}', 'ProjectController@update')->name('projects.update');
    Route::delete('/projects/{project}', 'ProjectController@destroy')->name('projects.destroy');
});
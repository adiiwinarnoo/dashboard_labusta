<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\JeniskelaminController;
use App\Http\Controllers\ChatController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard',function(){
    return view('layouts.master');
});
Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
    Route::resource('students', StudentsController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('jeniskelamin', JeniskelaminController::class);
});

Route::get('siswa', 'App\Http\Controllers\StudentsController@index');
Route::get('chat', 'App\Http\Controllers\ChatController@index');




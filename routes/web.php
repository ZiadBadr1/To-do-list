<?php

use App\Http\Controllers\TaskController;
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
    return view('welcome');
});

Route::controller(TaskController::class)->group(function (){

    Route::get("tasks",'index')->name("main");
    Route::get("tasks/add",'add')->name("Add.Task");
    Route::post("tasks/store",'store')->name("store");
    Route::get("tasks/edit/{id}",'edit')->name("edit");
    Route::PUT("tasks/update/{id}",'update')->name("update");
    Route::get("tasks/delete/{id}",'delete')->name("delete");
    Route::get("tasks/deleteAll",'deleteWithTruncate')->name("deleteAll");


});




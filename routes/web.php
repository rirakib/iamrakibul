<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\SkillController;

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
    return view('frontend.index');
});



Route::prefix('/adminn',function() {


});

Route::prefix('adminn')->group(function() {

    Route::get('/',function () {
        return view('backend.index');
    });

    Route::resource('/service',ServiceController::class);
    Route::resource('setting/header',HeaderController::class);
    Route::resource('setting/skill',SkillController::class);
});




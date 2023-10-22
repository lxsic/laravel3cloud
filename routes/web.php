<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
use Tests\Unit\ExampleTest;

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


Route::get('/',function(){
return view('welcome');
});

Route::resource('/example',ExampleController::class);
Route::delete('example/forceDelete/{example}',[ExampleController::class,'forceDelete'] )->name('example.forceDelete');
Route::post('/example/restore/{example}',[ExampleController::class,'restore'])->name('example.restore');


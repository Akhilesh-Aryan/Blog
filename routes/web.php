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
use App\Http\Controllers\Home;
use App\Models\Post;
Route::get("/", function () {
    return view('home',['posts'=>Post::all()]);
})->name("homepage");
Route::get("/insert", function () {
    return view('insert');
})->name("insertpage");
Route::post("/insert-Category",[Home::class,"insertCat"])->name('insertCat');
Route::post("/insert-Post",[Home::class,"insertPost"])->name('insertPost');

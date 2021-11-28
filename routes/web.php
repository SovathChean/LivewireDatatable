<?php

use App\Http\Livewire\CategoryTable;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Category\EditCategory;
use App\Http\Livewire\Category\IndexCategory;
use App\Http\Livewire\Category\CreateCategory;

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
Route::get("/home", function () {
    return view('home');
});
Route::get("/category/add", CreateCategory::class)->name('category.add');
Route::get("/category/list", IndexCategory::class)->name('category.index');
Route::get("/category/edit", EditCategory::class)->name('category.edit');

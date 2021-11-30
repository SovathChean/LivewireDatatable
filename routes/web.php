<?php

use App\Http\Livewire\Category\CreateCategoryComponent;
use App\Http\Livewire\Category\EditCategoryComponent;
use App\Http\Livewire\Category\IndexCategoryComponent;
use App\Http\Livewire\CategoryTable;
use App\Http\Livewire\Post\IndexComponents;
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
Route::get("/home", function () {
    return view('home');
});
Route::get("/category/add", CreateCategoryComponent::class)->name('category.add');
Route::get("/category/{category}/show", App\Http\Livewire\Category\View::class)->name('category.show');
Route::get("/category/list", IndexCategoryComponent::class)->name('category.index');
Route::get("/category/{category}/edit", EditCategoryComponent::class)->name('category.edit');

Route::get("/product/add", App\Http\Livewire\Product\Add::class)->name('product.add');
Route::get("/product/{product}/show", App\Http\Livewire\Product\View::class)->name('product.show');
Route::get("/product/list", App\Http\Livewire\Product\Index::class)->name('product.index');
Route::get("/product/{product}/edit", App\Http\Livewire\Product\Edit::class)->name('product.edit');

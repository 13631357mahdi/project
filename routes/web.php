<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\back\CategoriesController as backCategoriesController;
use App\Http\Controllers\back\PropertiesController as backPropertiesController;
use App\Http\Controllers\front\PropertyController;


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

//ROUTE::get('/', [postController::class, 'post']);
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('create');
//  Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');


// Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');

//Route::post('/User/store', [UsersController::class, 'store'])->name('User.store');
// Route::resource('/user', UsersController::class);
// Route::post('/Login', [LoginController::class, 'Login'])->name('login');
// Route::get('/loginForm', [LoginController::class, 'showLogin'])->name('showLogin');

Route::prefix('/CategoriesCategory')->group(function(){
     Route::get('/', [backCategoriesController::class, 'index'])->name('Categories');
     Route::get('creat', [backCategoriesController::class, 'create'])->name('Categories.create');
     Route::post('store', [backCategoriesController::class, 'store'])->name('Categories.store');
     Route::get('edit/{Category}', [backCategoriesController::class, 'edit'])->name('Categories.edit');
     Route::post('update/{Category}', [backCategoriesController::class, 'update'])->name('Categories.update');
     Route::get('destroy/{Category}', [backCategoriesController::class, 'destroy'])->name('Categories.destroy');
});
Route::prefix('PropertiesProperty')->group(function(){
     Route::get('/', [backCategoriesController::class, 'index'])->name('Property');
     Route::get('creat', [backCategoriesController::class, 'create'])->name('Property.create');
     Route::post('store', [backCategoriesController::class, 'store'])->name('Property.store');
     Route::get('edit/{Property}', [backCategoriesController::class, 'edit'])->name('Property.edit');
     Route::post('update/{Property}', [backCategoriesController::class, 'update'])->name('Property.update');
     Route::get('destroy/{Property}', [backCategoriesController::class, 'destroy'])->name('Property.destroy');
});
Route::get('/frontCategory', [frontPropertyController::class, 'index'])->name('Category');
Route::get('/frontProperties', [frontPropertyController::class, 'show'])->name('Property');





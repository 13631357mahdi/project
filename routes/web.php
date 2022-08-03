<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\back\CategoriesController as backCategoriesController;
use App\Http\Controllers\back\PrppertiesController as backPrppertiesController;


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

Route::prefix('/Categories.Category')->group(function(){
     Route::get('/', [CategoriesController::class, 'index'])->name('Categories');
     Route::get('creat', [CategoriesController::class, 'create'])->name('Categories.create');
     Route::post('store', [CategoriesController::class, 'store'])->name('Categories.store');
     Route::get('edit/{Category}', [CategoriesController::class, 'edit'])->name('Categories.edit');
     Route::post('update/{Category}', [CategoriesController::class, 'update'])->name('Categories.update');
     Route::get('destroy/{Category}', [CategoriesController::class, 'destroy'])->name('Categories.destroy');
});
Route::prefix('Properties.Property')->group(function(){
     Route::get('/', [back.PropertyController::class, 'index'])->name('Property');
     Route::get('creat', [PropertyController::class, 'create'])->name('Property.create');
     Route::post('store', [PropertyController::class, 'store'])->name('Property.store');
     Route::get('edit/{Property}', [PropertyController::class, 'edit'])->name('Property.edit');
     Route::post('update/{Property}', [PropertyController::class, 'update'])->name('Property.update');
     Route::get('destroy/{Property}', [PropertyController::class, 'destroy'])->name('Property.destroy');
});
Route::get('/front.Category', [front.PropertyController::class, 'index'])->name('Category');
Route::get('/front.Properties', [front.PropertyController::class, 'show'])->name('Property');





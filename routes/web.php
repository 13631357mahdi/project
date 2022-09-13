<?php

// use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PostsController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\UsersController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\back\PropertyController as backPropertyController;
// use App\Http\Controllers\front\PropertyController;
// use App\Http\Controllers\back\IndexController as backIndexController;
// use App\Http\Controllers\front\indexController as frontindexController;
 use App\Http\Controllers\front\indexController as frontindexController;
 use App\Http\Controllers\back\indexController as backindexController;
 use App\Http\Controllers\back\CategoriesController as CategoriesController;
 use App\Http\Controllers\back\ArticleController as ArticlesbackController;
 use App\Http\Controllers\front\ArticlesController as ArticlesfrontController;
 use App\Http\Controllers\back\CommentController as backcontroller;
 use App\Http\Controllers\front\CommentController as frontcontroller;
 use App\Http\Controllers\back\DataController;
 use App\Http\Controllers\back\SimpleController;
 use App\Http\Controllers\auth\RegisterController;
 use App\Http\Controllers\auth\loginController;
 use App\Http\Controllers\front\EditController;
 use App\Http\Controllers\back\BlankController;






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
//  Route::get('/', [backIndexController::class, 'index']);

// Route::prefix('/CategoriesCategory')->group(function(){
//      Route::get('/', [backCategoriesController::class, 'index'])->name('Categories');
//      Route::get('creat', [backCategoriesController::class, 'create'])->name('Categories.create');
//      Route::post('store', [backCategoriesController::class, 'store'])->name('Categories.store');
//      Route::get('edit/{Category}', [backCategoriesController::class, 'edit'])->name('Categories.edit');
//      Route::post('update/{Category}', [backCategoriesController::class, 'update'])->name('Categories.update');
//      Route::get('destroy/{Category}', [backCategoriesController::class, 'destroy'])->name('Categories.destroy');
// });
// Route::prefix('PropertiesProperty')->group(function(){
//      Route::get('/', [backPropertyController::class, 'index'])->name('Property');
//      Route::get('creat', [backPropertyController::class, 'create'])->name('Property.create');
//      Route::post('store', [backPropertyController::class, 'store'])->name('Property.store');
//      Route::get('edit/{Property}', [backPropertyController::class, 'edit'])->name('Property.edit');
//      Route::post('update/{Property}', [backPropertyController::class, 'update'])->name('Property.update');
//      Route::get('destroy/{Property}', [backPropertyController::class, 'destroy'])->name('Property.destroy');
// });
// Route::get('/', [frontindexController::class, 'index']);
// Route::get('/frontCategory', [PropertyController::class, 'index'])->name('Category');
// Route::get('/frontProperties', [PropertyController::class, 'show'])->name('Property');

Route::prefix('/admin')->group(function(){
    Route::get('/', [backindexController::class, 'index'])->name('admin');
    Route::get('/blank', [BlankController::class, 'index'])->name('blank');
});


    Route::get('/Category', [CategoriesController::class, 'index'])->name('index.category');
    Route::get('/create', [CategoriesController::class, 'create'])->name('create.category');
    Route::post('/Category/store', [CategoriesController::class, 'store'])->name('store.category');
    Route::get('/Category/{category}/edit', [CategoriesController::class, 'edit'])->name('edit.category');
    Route::put('/Category/update/{category}', [CategoriesController::class, 'update'])->name('update.category');
    Route::get('/Category/destroy/{category}', [CategoriesController::class, 'destroy'])->name('destroy.category');

    Route::get('/Article', [ArticlesbackController::class, 'index'])->name('index.Article');
    Route::get('/Article/create', [ArticlesbackController::class, 'create'])->name('create.Article');
    Route::post('/Article/store', [ArticlesbackController::class, 'store'])->name('store.Article');
    Route::get('/Article/edit/{article}', [ArticlesbackController::class, 'edit'])->name('edit.Article');
    Route::put('/Article/update/{article}', [ArticlesbackController::class, 'update'])->name('update.Article');
    Route::get('/Article/destroy/{article}', [ArticlesbackController::class, 'destroy'])->name('destroy.Article');
    Route::get('/Article/status/{article}', [ArticlesbackController::class, 'updatestatus'])->name('updatestatus.Article');


    Route::get('/comment', [backcontroller::class, 'index'])->name('index.comment');
    Route::get('/comment/edit/{comment}', [backcontroller::class, 'edit'])->name('edit.comment');
    Route::put('/comment/update/{comment}', [backcontroller::class, 'update'])->name('update.comment');
    Route::get('/comment/destroy/{comment}', [backcontroller::class, 'destroy'])->name('destroy.comment');
    Route::get('/comment/status/{comment}', [backcontroller::class, 'updatestatus'])->name('updatestatus.comment');


    Route::get('/', [frontindexController::class, 'index'])->name('frontview');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::get('/front/article', [ArticlesfrontController::class, 'index'])->name('front.index.article');
    Route::get('/front/show/{article}', [ArticlesfrontController::class, 'show'])->name('front.show.article');
    Route::post('/comment/store', [frontcontroller::class, 'store'])->name('store.comment');
















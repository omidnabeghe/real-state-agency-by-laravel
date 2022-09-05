<?php

use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->namespace('Admin')->middleware('AdminAuth')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class,'index'])->name('admin.category');
        Route::get('/create', [CategoryController::class,'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class,'store'])->name('admin.category.store');
        Route::get('/edit/{category}', [CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('/update/{category}', [CategoryController::class,'update'])->name('admin.category.update');
        Route::delete('/destroy/{category}', [CategoryController::class,'destroy'])->name('admin.category.destroy');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class,'index'])->name('admin.post');
        Route::get('/create', [PostController::class,'create'])->name('admin.post.create');
        Route::post('/store', [PostController::class,'store'])->name('admin.post.store');
        Route::get('/edit/{post}', [PostController::class,'edit'])->name('admin.post.edit');
        Route::put('/update/{post}', [PostController::class,'update'])->name('admin.post.update');
        Route::delete('/destroy/{post}', [PostController::class,'destroy'])->name('admin.post.destroy');
    });

    Route::prefix('ads')->group(function () {
        Route::get('/', [AdsController::class,'index'])->name('admin.ads');
        Route::get('/create', [AdsController::class,'create'])->name('admin.ads.create');
        Route::post('/store', [AdsController::class,'store'])->name('admin.ads.store');
        Route::get('/edit/{advertise}', [AdsController::class,'edit'])->name('admin.ads.edit');
        Route::put('/update/{advertise}', [AdsController::class,'update'])->name('admin.ads.update');
        Route::delete('/destroy/{advertise}', [AdsController::class,'destroy'])->name('admin.ads.destroy');


        Route::get('/gallery/{advertise}', [GalleryController::class,'index'])->name('admin.ads.gallery');
        Route::post('gallery/store/{advertise}', [GalleryController::class,'store'])->name('admin.ads.gallery.store');
        Route::delete('/destroy/{gallery}/{advertise}', [GalleryController::class,'destroy'])->name('admin.ads.gallery.destroy');

    });

    Route::prefix('slide')->group(function () {
        Route::get('/', [SlideController::class,'index'])->name('admin.slide');
        Route::get('/create', [SlideController::class,'create'])->name('admin.slide.create');
        Route::post('/store', [SlideController::class,'store'])->name('admin.slide.store');
        Route::get('/edit/{slide}', [SlideController::class,'edit'])->name('admin.slide.edit');
        Route::put('/update/{slide}', [SlideController::class,'update'])->name('admin.slide.update');
        Route::delete('/destroy/{slide}', [SlideController::class,'destroy'])->name('admin.slide.destroy');
    });

    Route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class,'index'])->name('admin.comment');
        Route::get('/show/{comment}', [CommentController::class,'show'])->name('admin.comment.show');
        Route::get('/status/{comment}', [CommentController::class,'status'])->name('admin.comment.status');
        Route::get('/approved/{comment}', [CommentController::class,'approved'])->name('admin.comment.approved');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class,'index'])->name('admin.user');
        Route::get('/approved/{user}', [UserController::class,'isActive'])->name('admin.user.isActive');
        Route::get('/edit/{user}', [UserController::class,'edit'])->name('admin.user.edit');
        Route::put('/update/{user}', [UserController::class,'update'])->name('admin.user.update');
        Route::get('/userRoleShow/{user}', [UserController::class,'userRoleShow'])->name('admin.user.userRoleShow');
        Route::put('/userRole/{user}', [UserController::class,'userRole'])->name('admin.user.userRole');

    });

});

Route::prefix('admin')->group(function () {
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::get('/roles/showRelations/{role}', [RolesController::class,'showRelations'])->name('admin.roles.showRelations');
    Route::put('/roles/setRelations/{role}', [RolesController::class,'setRelations'])->name('admin.roles.setRelations');
});




Auth::routes();

Route::namespace('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/ads', [HomeController::class, 'ads'])->name('ads');
    Route::get('/ads/{Ads:name}', [HomeController::class, 'adsCategory'])->name('ads.category');
    Route::get('/advertise/{advertise}', [HomeController::class, 'advertise'])->name('advertise');
    Route::get('/posts', [HomeController::class, 'posts'])->name('posts');
    Route::get('/posts/{Post:name}', [HomeController::class, 'postsCategory'])->name('posts.category');
    Route::get('/post/{post}', [HomeController::class, 'post'])->name('post');
    Route::post('/comment/{comment}', [HomeController::class, 'comment'])->name('comment');
    Route::get('/help', [HomeController::class, 'help'])->name('help');
    Route::get('/search/category', [SearchController::class, 'searchCategory'])->name('search.searchCategory');
    Route::get('/search/post', [SearchController::class, 'searchPost'])->name('search.searchPost');
    Route::get('/search/Ads', [SearchController::class, 'searchAds'])->name('search.searchAds');


});

<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\SiteController;
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
Auth::routes(['register'=>false]);
##############Authentication Guard###############################################################
Route::get('site',[SiteController::class,'site'])->middleware('auth:web')->name('site');
Route::get('admin',[AdminController::class,'admin'])->middleware('auth:admin')->name('admin');
Route::get('admin/login', [AdminController::class,'adminLogin'])-> name('admin.login');
Route::post('admin/login', [AdminController::class,'checkAdminLogin'])-> name('save.admin.login');
##############EndAuthentication Guard##############################################################


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

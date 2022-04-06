<?php
use App\Http\Controllers\Front;
use App\Http\Controllers;
use Resources\Views\front\index;
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

Route::get('/',[Front\HomeController::class,'index']);


Route::prefix('shop')->group( function () {

    Route::get('/product/{id}',[Front\ShopController::class,'show']);
    Route::post('/product/{id}',[Front\ShopController::class,'postComment']);
    
    Route::get('/',[Front\ShopController::class,'index']);  
    Route::get('/{categoryName}',[Front\ShopController::class,'category']);
});
Route::get('/admin',[Front\AdminController::class,'admin_login']);
Route::get('/menuadmin',[Front\AdminController::class,'show_dashboard']);
Route::get('productc','ProductController@add')->name('productc');
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

Route::get('/', 'getdealsusa@index');
Route::get('/product/{product_slug}', 'getdealsusa@product');
Route::get('/category/{category_slug}', 'getdealsusa@category');
Route::get('/search/{searchquery}/{categoryid}', 'getdealsusa@search');

Route::get('/admin','AdminController@dashboard');
Route::get('/admin/dashboard','AdminController@dashboard');

//GET-7 route
Route::get('/about','getdealsusa@about');
Route::get('/cookie_policy','getdealsusa@cookie_policy');
Route::get('/privacy_policy','getdealsusa@privacy_policy');
Route::get('/faq','getdealsusa@faq');
Route::get('/contact','getdealsusa@contact');
Route::get('/sitemap','getdealsusa@sitemap');
Route::get('/terms-condition','getdealsusa@terms');



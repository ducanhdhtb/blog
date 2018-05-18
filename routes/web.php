<?php

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
use App\Category ;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//login user, admin, vendor,.... customer, account
Route::get('user/login', 'UserController@loginAction');
Route::post('user/loginPost', 'UserController@loginPostAction');

// Show all posts 
Route::get('post/list', 'PostController@listAction');
// Show  detail post with url ex: post/view/id/123 and /things-they-say
Route::get('post/view', 'PostController@viewAction');
// New post redirect to Edit with flag new ex: post/new
Route::get('post/new', 'PostController@newAction');
// Edit post ex: post/edit/id/123
Route::get('post/edit', 'PostController@editAction');
// Delete ex :  post/delete/id/123
Route::post('post/delete', 'PostController@deleteAction');
// Delete ex :  post/save
Route::post('post/save', 'PostController@saveAction');

// Show all category
Route::get('category/list', 'Blog\CategoryController@listAction');
// Show detail category and list post in category
// Ex: category/view/id/123 and /spiralbound
Route::get('category/view', 'CategoryController@viewAction');
Route::get('category/new', 'CategoryController@newAction');
Route::get('category/edit', 'CategoryController@editAction');
Route::post('category/delete', 'CategoryController@deleteAction');
Route::post('category/save', 'CategoryController@saveAction');

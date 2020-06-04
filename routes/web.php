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

Route::get('/', function () {
    return view('blog');
})->name("index");

// Route::get('/about', 'PageController@about')->name("about");
// Route::get('/contact', 'PageController@contact')->name("contact");
// Route::post('/contact', 'PageController@submitContact');
Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswerController', ['except' => ['index', 'create', 'show']]);;

// Route::get('user/{id?}', function ($id=null) {
//     return "User" . $id;
// });


// Route::get('post/{post}/comments/{comments}', function ($post,$comments) {
//     return "POST:" . $post . " Comments:" . $comments;
// });

// Route::get('user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

/*

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'PageController@profile')->name('profile');

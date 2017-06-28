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
/** registering service container
 App::bind() - will create new instance for every request, like-#110,#111,#112
 App::singleton() - will reuse same instance for all requests, like-#110,#110,#110
 */


//  App::make() or resolve() or app()
//$stripe = app('\App\Billing\Stripe'); #$stripe2 = resolve('\App\Billing\Stripe');$stripe3 = resolve('\App\Billing\Stripe');
//var_dump($stripe); #var_dump($stripe2);var_dump($stripe3);


Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');

Route::get('/posts/tags/{tag}','TagsController@index');


Route::post('/posts/{post}/comments','CommentsController@store');


Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout','SessionsController@destroy');


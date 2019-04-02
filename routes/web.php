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

Route::get('/',['uses'=>"PageController@getHomePage",'as'=>"page.home"]);

Route::get('/about-us',['uses'=>"PageController@getAboutUsPage",'as'=>"page.about"]);

Route::get('/contact-us',['uses'=>"PageController@getContactUsPage",'as'=>"page.contact"]);

Route::post('/contact-us',['uses'=>"PageController@postContactUsPage",'as'=>"page.contact.post"]);

Route::resource('post', 'PostController');
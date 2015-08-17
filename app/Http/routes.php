<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


get('blog',['as' => 'blog','uses' => 'BlogController@index']);
get('articles/{slug}',['as' => 'blog.post','uses' => 'BlogController@show']);
get('contact',['as' => 'contact','uses' => 'ContactController@getContact']);
post('contact',['as' => 'contact.post','uses' => 'ContactController@postContact']);

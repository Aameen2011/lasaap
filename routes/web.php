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

// Route::get('/', function () {
//     return view('welcome');
    
// });
 Route::get('/about',function(){
    return view('pages.about');
 });

 Route::get('/user/{id}/{name}',function($id,$name){
    return 'This is user'.$name;
 });


 Route::get('/','pagesController@index');
 Route::get('/about','pagesController@about');
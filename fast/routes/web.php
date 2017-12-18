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

Route::get('signup', 'PagesController@getSignup');
Route::get('contact', 'PagesController@getContact');
Route::get('about', function(){return view('pages/chat');})->middleware('auth');//use this to login and then open the chat
Route::get('services', 'PagesController@getServices');
Route::get('packages', 'PagesController@getPackages');
Route::get('/', 'PagesController@getIndex');
Route::get('messages', function(){    //load all messages according to user
        return App\Messages::with('user')->get();//Messages is a class in providers folder
})->middleware('auth');

Route::post('messages', function(){
        //store the data
        $user = Auth::user();
        //$message =
        $user->messages()->create([
          'message' => request()->get('message')
        ]);
                //return App\Messages::with('user')->get();
        return ['status' => 'OK'];
})->middleware('auth');
//Route::get('/', 'PagesController@getChat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


// Social Auth
// Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');


Route::get('/','HomeController@index');

Auth::routes();

Route::get('/welcome', 'HomeController@home')->name('welcome');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::get('/admin', 'AdminController@admin')->middleware('admin')->name('admin');
// Route::get('/topic/{name?}/{id?}', 'HomeController@load_topic')->name('topic');
// Route::get('/comment/{name?}/{id?}', 'HomeController@load_comment')->name('comment');

Route::group([ 'middleware' => [ 'auth'] ], function()
{
  Route::get('/deposit', 'HomeController@show_deposit')->name('deposit');
  Route::get('/transaction_history', 'HomeController@show_transaction_history')->name('history');
  Route::get('/FAQ', 'HomeController@show_FAQ')->name('FAQ');
    Route::get('/account_settings', 'HomeController@show_account_settings')->name('account_settings');
      Route::get('/create_tournaments', 'HomeController@show_create_tournaments')->name('create_tournaments');
// Route::get('/create_industry', 'AdminController@create_industry')->name('industry');
// Route::post('/store_industry','AdminController@store_industry')->name('store_industry');
// Route::get('/create_sub_industry', 'AdminController@create_sub_industry')->name('_industry');
// Route::post('/store_sub_industry','AdminController@store_sub_industry')->name('store_sub_industry');
// Route::post('/comment','CommentController@store_comment')->name('savecomment');
// Route::get('/create_topic', 'TopicController@index')->name('create_topic');
// Route::get('/create_company', 'TopicController@getview')->name('create_company');
// Route::get('/subinds/{id?}', 'TopicController@getSubindustry')->name('subinds');
// Route::post('/save_new_topic','TopicController@create')->name('save_new_topic');
// Route::post('rate', 'CommentController@rate')->name('rate');
// Route::post('/save_new_reply_comment','TopicController@createreply')->name('save_new_reply_comment');
//  Route::get('/update/{id?}', 'HomeController@updatepost')->name('update');
//  Route::get('/profile/{id?}', 'HomeController@updateprofile')->name('profile');
//   Route::get('/contact', 'HomeController@contact')->name('contact');
//     Route::post('/Update_profile', 'HomeController@Update_profile')->name('Update_profile');
//  Route::post('/like', ['uses' => 'HomeController@postLikePost','as' => 'like']);
//  Route::get('/img/{username}', ['uses' => 'HomeController@getUserImage','as' => 'account.image']);

});

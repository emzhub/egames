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


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

  Route::get('/admin', 'AdminController@admin')->middleware('admin')->name('admin');
// Route::get('/topic/{name?}/{id?}', 'HomeController@load_topic')->name('topic');
// Route::get('/comment/{name?}/{id?}', 'HomeController@load_comment')->name('comment');

//       Route::group(['prefix' => 'agent'], function($controller = 'HomeController@') {
//     Route::get('change_password', $controller.'show_change_password')->name('change_password');
//     Route::get('pay/success', $controller.'success');
//     Route::get('pay/failure', $controller.'failure');
//     Route::get('credits', $controller.'credits');
//     Route::get('checkout', $controller.'checkout');
// });

Route::group([ 'middleware' => [ 'auth'] ], function()
{
	Route::get('/welcome', 'HomeController@home')->name('welcome');
  Route::get('/deposit', 'HomeController@show_deposit')->name('deposit');
  Route::get('/my_games', 'HomeController@show_Games')->name('my_games');
  Route::get('/change_password', 'HomeController@show_change_password')->name('change_password');
  Route::get('/transaction_history', 'HomeController@show_transaction_history')->name('history');
  Route::get('/FAQ', 'HomeController@show_FAQ')->name('FAQ');
  Route::get('/account_settings', 'HomeController@show_account_settings')->name('account_settings');
  Route::get('/create_tournaments', 'HomeController@show_create_tournaments')->name('create_tournaments');
	Route::get('/Add_Console', 'AdminController@show_Console')->name('Add_Console');
	Route::get('/Add_Games', 'AdminController@show_Games')->name('Add_Games');
 	Route::get('/Add_Team', 'AdminController@show_Team')->name('Add_Team');
     Route::post('/add_console', 'AdminController@save_add_console')->name('add_console');
     Route::post('/add_game', 'AdminController@save_add_game')->name('add_game');
     Route::post('/add_team', 'AdminController@save_add_team')->name('add_team');
     Route::post('/store_match','HomeController@store_match')->name('store_match');
     Route::post('/store_tourna','HomeController@store_tourna')->name('store_tourna');
     Route::post('/store_settings','HomeController@store_settings')->name('store_settings');
     Route::post('/change password', 'HomeController@save_change_password')->name('changePassword');







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

<?php

use Illuminate\Http\Request;
use App\Article;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')
->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// using controllers
// articles
Route::get('articles', 'ArticlesController@index');
Route::get('articles/{article}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::put('articles/{article}', 'ArticlesController@update');
Route::delete('articles/{article}', 'ArticlesController@delete');

// using routes
// get all articles
// Route::get('articles', function()
// {
// 	return Article::all();
// });  

// // get one
// Route::get('articles/{id}', function($id)
// {
// 	return Article::find($id);

// });

// //create one
// Route::post('articles', function(Request $request) {
//     return Article::create($request->all);
// });

// // update one

// Route::put('articles/{id}', function(Request $request, $id)
// {
// 	$article= Article::findOrFail($id);

// 	$article->update($request->all());

// 	return $article;
// }
// );

// // delete one

// Route::delete('articles/{id}', function($id)
// {
// 	Article::find($id)->delete();
	
// 	return 204;
// }
// );
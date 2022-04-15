<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::get('/athenticated', function () {
        return true;
    });

    Route::get('/topics', [\App\Http\Controllers\TopicController::class, 'get_topics'])->name('topics');
    Route::get('/topics/{id}', [\App\Http\Controllers\TopicController::class, 'get_topic_by_id'])->where('id', '[0-9]+')->name('topic_by_id');
});




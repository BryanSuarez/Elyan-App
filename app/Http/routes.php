<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */





/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    /* INICIO SISTEMA */
    Route::get('/', [
        'uses' => '\Elyan\Http\Controllers\HomeController@index',
        'as' => 'home',
    ]);


    /* AUTENTICACIÓN */
    Route::get('/signup', [
        'uses' => '\Elyan\Http\Controllers\AuthController@getSignup',
        'as' => 'auth.signup',
        'middleware' => ['guest'],
    ]);

    Route::post('/signup', [
        'uses' => '\Elyan\Http\Controllers\AuthController@postSignup',
        'middleware' => ['guest'],
    ]);

    Route::get('/signin', [
        'uses' => '\Elyan\Http\Controllers\AuthController@getSignin',
        'as' => 'auth.signin',
        'middleware' => ['guest'],
    ]);

    Route::post('/signin', [
        'uses' => '\Elyan\Http\Controllers\AuthController@postSignin',
        'middleware' => ['guest'],
    ]);

    Route::get('/signout', [
        'uses' => '\Elyan\Http\Controllers\AuthController@getSignout',
        'as' => 'auth.signout',
    ]);

    /* Buscar Amigos */
    Route::get('/search', [
        'uses' => '\Elyan\Http\Controllers\SearchController@getResults',
        'as' => 'search.results',
    ]);

    /* Perfiles de usuario */
    Route::get('/user/{nombreusuario}', [
        'uses' => '\Elyan\Http\Controllers\ProfileController@getProfile',
        'as' => 'profile.index',
    ]);

    Route::get('/profile/edit', [
        'uses' => '\Elyan\Http\Controllers\ProfileController@getEdit',
        'as' => 'profile.edit',
        'middleware' => ['auth'],
    ]);

    Route::post('/profile/edit', [
        'uses' => '\Elyan\Http\Controllers\ProfileController@postEdit',
        'middleware' => ['auth'],
    ]);

    /* Listar Amigos */
    Route::get('/friends', [
        'uses' => '\Elyan\Http\Controllers\FriendController@getIndex',
        'as' => 'friend.index',
        'middleware' => ['auth'],
    ]);

    /* Agregar Amigos */
    Route::get('/friends/add/{nombreusuario}', [
        'uses' => '\Elyan\Http\Controllers\FriendController@getAdd',
        'as' => 'friend.add',
        'middleware' => ['auth'],
    ]);

    /* Aceptar Soliditud De Amigos */
    Route::get('/friends/accept/{nombreusuario}', [
        'uses' => '\Elyan\Http\Controllers\FriendController@getAccept',
        'as' => 'friend.accept',
        'middleware' => ['auth'],
    ]);

    /*Eliminar amigos*/
    Route::post('/friends/delete/{nombreusuario}', [
        'uses' => '\Elyan\Http\Controllers\FriendController@postDelete',
        'as' => 'friend.delete',
        'middleware' => ['auth'],
    ]);

    /*     * Módulo de Comentarios */
    Route::post('/status', [
        'uses' => '\Elyan\Http\Controllers\StatusController@postStatus',
        'as' => 'status.post',
        'middleware' => ['auth'],
    ]);

    Route::post('/status/{estadoId}/reply', [
        'uses' => '\Elyan\Http\Controllers\StatusController@postReply',
        'as' => 'status.reply',
        'middleware' => ['auth'],
    ]);

    /**Módulo de likes*/
    Route::get('/status/{estadoId}/like', [
        'uses' => '\Elyan\Http\Controllers\StatusController@getLike',
        'as' => 'status.like',
        'middleware' => ['auth'],
    ]);

    /* CALENDARIO */
    Route::get('/calendario', [
        'uses' => '\Elyan\Http\Controllers\CalendarController@getCalendar',
        'as' => 'calendar',
    ]);

    Route::resource('task','TaskController');


});

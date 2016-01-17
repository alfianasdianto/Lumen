<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
    $api = 'lumen';
    $app->get($api . '/alumni', ['uses' => 'AlumniController@getAlumni', 'as' => 'allAlumni']);
    $app->get($api . '/alumni/{id}', ['uses' => 'AlumniController@detailAlumni', 'as' => 'detailAlumni']);
    $app->post($api . '/alumni', ['uses' => 'AlumniController@saveAlumni', 'as' => 'saveAlumni']);
    $app->put($api . '/alumni/{id}', ['uses' => 'AlumniController@updateAlumni', 'as' => 'updateAlumni']);
    $app->delete($api . '/alumni/{id}', ['uses' => 'AlumniController@deleteAlumni', 'as' => 'deleteAlumni']);
});

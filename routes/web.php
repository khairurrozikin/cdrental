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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() use($router){
    return str_random(32);
});

$router->group(['prefix'=>'api'], function() use($router){
    $router->get('cditem',['uses'=> 'ItemController@showAllCdItems']);
    
    $router->get('cdmember',['uses'=> 'MemberCdController@showAllCdMembers']);
    $router->post('savemember', 'MemberCdController@create');
    $router->delete('delete/{id}', 'MemberCdController@destroy');
    $router->post('update/{id}', 'MemberCdController@update');
    
    $router->get('cdcategory',['uses'=> 'CategoryCdController@showAllCdCategorys']);

    $router->get('cdtablerent', ['uses'=> 'TableRentController@showAllCdTableRents']);
    $router->post('savetablerent', 'TableRentController@create');
    $router->delete('delete/{id}', 'TableRentController@destroy');
    $router->post('update/{id}', 'TableRentController@update');

    $router->get('cdtablereturn',['uses'=> 'TableReturnController@showAllCdTableReturn']);

    $router->get('cdtablerentdetail',['uses'=> 'TableRentDetailController@showAllCdTableRents']);
});
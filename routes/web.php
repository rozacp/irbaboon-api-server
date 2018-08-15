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

$router->get('/', function (){

    // $room = App\Room::find(1);

    
    $hvac = App\Room::find(1)->hvac;
    
    // $hvac->update(['flow' => 10, 'finished' => true]);
    
    // return str_plural('room_ac');
    return $hvac;
});


$router->group(['prefix' => 'api'], function () use ($router) {

    // Rooms routes
    $router->get('rooms',  ['uses' => 'RoomController@index']);
    $router->get('rooms/{id}', ['uses' => 'RoomController@show']);
    $router->post('rooms', ['uses' => 'RoomController@create']);
    $router->put('rooms/{id}', ['uses' => 'RoomController@update']);
    $router->delete('rooms/{id}', ['uses' => 'RoomController@delete']);

    // Ac Models routes
    $router->get('acmodels',  ['uses' => 'AcModelController@index']);
    $router->get('acmodels/{id}', ['uses' => 'AcModelController@show']);
    $router->post('acmodels', ['uses' => 'AcModelController@create']);
    $router->put('acmodels/{id}', ['uses' => 'AcModelController@update']);
    $router->delete('acmodels/{id}', ['uses' => 'AcModelController@delete']);


});

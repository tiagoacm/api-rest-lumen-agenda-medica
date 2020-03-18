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


$router->group(['prefix' => 'api'], function() use ($router){

    $router->group(['prefix' => 'especialidade'], function() use ($router){
        $router->get('' , 'EspecialidadeController@read');
        $router->get('{id}' , 'EspecialidadeController@readId');
        $router->get('{especialidadeId}/medicos', 'MedicoController@buscaPorEspecialidade');
    });

    $router->group(['prefix' => 'medico'], function() use ($router){
        $router->get('' , 'MedicoController@read');
        $router->get('{id}' , 'MedicoController@readId');
        $router->get('{medicoId}/agendas', 'AgendaController@buscaPorMedico');
    });

    $router->group(['prefix' => 'agenda'], function() use ($router){
        $router->get('' , 'AgendaController@read');
        $router->get('{id}' , 'AgendaController@readId');
    });



});

<?php

//use App\Controllers\PagesControllercategorias;

$router->get('categorias','CategoriasController@categorias');
$router->post('categorias/create','CategoriasController@create');
$router->post('categorias/delete','CategoriasController@delete');
$router->post('categorias/edit','CategoriasController@edit');
$router->get('quemsomos','quemsomoscontatocontroller@quemsomos');
$router->get('contato','quemsomoscontatocontroller@contato');
?>
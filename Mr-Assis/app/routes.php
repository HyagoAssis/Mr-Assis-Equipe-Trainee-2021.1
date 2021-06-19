<?php

//use App\Controllers\PagesControllercategorias;

$router->get('categorias','PagesControllercategorias@categorias');
$router->post('categorias/create','PagesControllercategorias@create');
$router->post('categorias/delete','PagesControllercategorias@delete');
$router->post('categorias/edit','PagesControllercategorias@edit');
$router->get('quemsomos','quemsomoscontatocontroller@quemsomos');
$router->get('contato','quemsomoscontatocontroller@contato');
?>
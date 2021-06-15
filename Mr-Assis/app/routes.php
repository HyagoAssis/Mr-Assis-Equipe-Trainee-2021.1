<?php

//use App\Controllers\PagesControllercategorias;

$router->get('inicio','PagesControllercategorias@index');
$router->post('categorias/create','PagesControllercategorias@create');
?>
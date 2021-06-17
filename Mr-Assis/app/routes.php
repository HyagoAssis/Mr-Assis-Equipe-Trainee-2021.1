<?php


$router->get('','UsuariosController@index');

$router->post('usuarios/create', 'UsuariosController@create');

$router->post('usuarios/delete', 'UsuariosController@delete');

$router->post('usuarios/edit', 'UsuariosController@edit');

?>
<?php


$router->get('','UsuariosController@index');

$router->post('usuários/create', 'UsuariosController@create');

$router->post('usuários/delete', 'UsuariosController@delete');

?>
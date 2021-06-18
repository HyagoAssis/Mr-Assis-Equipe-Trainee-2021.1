<?php


$router->get('','UsuariosController@index');
$router->get('admin/usuarios', 'UsuariosController@admUsuarios');
$router->get('login', 'PagesController@login');
$router->get('contato', 'PagesController@contato');

$router->post('admin/create', 'UsuariosController@create');
$router->post('admin/delete', 'UsuariosController@delete');
$router->post('admin/edit', 'UsuariosController@edit');

?>
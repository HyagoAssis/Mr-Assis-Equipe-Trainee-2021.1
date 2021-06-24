<?php

$router->get('','UsuariosController@index');
//$router->get(' ','PagesController@index');
$router->get('admin/usuarios', 'UsuariosController@admUsuarios');
//$router->get('login', 'PagesController@login');
$router->get('contato', 'ContatoController@contato');

$router->post('admin/create', 'UsuariosController@create');
$router->post('admin/delete', 'UsuariosController@delete');
$router->post('admin/edit', 'UsuariosController@edit');

$router->post('contato/email', 'ContatoController@email');

?>
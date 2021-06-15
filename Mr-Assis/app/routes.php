<?php

use App\Core\Router;

$router->get('', 'PagesController@index');
$router->get('admin/produtos', 'ProdutosController@admProdutos');

$router->post('admin/criar-produto', 'ProdutosController@create');
$router->post('admin/deletar-produto','ProdutosController@delete');
$router->post('admin/editar-produto', 'ProdutosController@edit');

?>
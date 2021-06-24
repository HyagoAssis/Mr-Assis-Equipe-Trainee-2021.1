<?php
use App\Core\Router;
$router->get('categorias','CategoriasController@categorias');
$router->post('categorias/create','CategoriasController@create');
$router->post('categorias/delete','CategoriasController@delete');
$router->post('categorias/edit','CategoriasController@edit');
$router->get('quemsomos','quemsomoscontatocontroller@quemsomos');
$router->get('contato','quemsomoscontatocontroller@contato');
$router->get('login','loginController@index');
$router->post('login/log','loginController@login');
$router->get('login/logout','loginController@logout');


$router->get('', 'PagesController@index');
$router->get('admin/produtos', 'ProdutosController@admProdutos');
$router->get('admin', 'ProdutosController@adm');

$router->get('produtos', 'ProdutosController@produtos');

$router->get('produto', 'ProdutosController@produtoView');

$router->post('admin/criar-produto', 'ProdutosController@create');
$router->post('admin/deletar-produto','ProdutosController@delete');
$router->post('admin/editar-produto', 'ProdutosController@edit');

<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

class ProdutosController {

    public function admProdutos()
    {
        $produtos = App::get('database')->selectAll('produtos');

        

        $tables = [
            'produtos' => $produtos,
        ];
        return view('adimin-produtos', $tables);
    }

    protected static $arquivosCss = [
        'categorias.css'=>'../../public/css/categorias.css',
        'styles-admin-produto.css'=>'../../public/css/styles-admin-produto.css',
        'styles-home.css'=>'../../public/css/styles-home.css',
        'styles-navbar-footer.css'=>'../../public/css/styles-navbar-footer.css',
        'styles-produtos.css'=>'../../public/css/styles-produtos.css',
        'styles-view-um-produto.css'=>'../../public/css/styles-view-um-produto.css',
        'stylesadministrativa.css'=>'../../public/css/stylesadministrativa.css',
        'stylescontato.css'=>'../../public/css/stylescontato.css',
        'stylesLogin.css'=>'../../public/css/stylesLogin.css',
        'stylesquemsomos.css'=>'../../public/css/stylesquemsomos.css',
        'stylesViewVizualizar.css'=>'../../public/css/stylesViewVizualizar.css'
    ];
    protected static $arquivosJs = [
        'js/script.js'=>'../../public/js/script.js'
    ];

    public static function css($key)
    {
        if( ! array_key_exists($key, static::$arquivosCss))
        {
            throw new Exception(
                "O diretório {$key} não foi encontrado"
            );
        }
        return static::$arquivosCss[$key];
    }

    public static function js($key)
    {
        if( ! array_key_exists($key, static::$arquivosJs))
        {
            throw new Exception(
                "O diretório {$key} não foi encontrado"
            );
        }
        return static::$arquivosJs[$key];
    }
    
    public function create()
    {

        $parameters = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria'],
            'descricao' => $_POST['descricao'],
            'imagem'=> $_POST['imagem']
        ];

        App::get('database')->insereProdutos('produtos', $parameters);

        header('Location: /admin/produtos');
    }

    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);

        header('Location: /admin/produtos');
    }

    public function edit()
    {
        $parameters = [
            'id'=> $_POST['id'],
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria'],
            'descricao' => $_POST['descricao'],
            'imagem'=> $_POST['imagem']
        ];

        App::get('database')->edit('produtos', $parameters);

        header('Location: /admin/produtos');
    }

}
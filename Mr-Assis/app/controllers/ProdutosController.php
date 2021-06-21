<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

class ProdutosController {

    public function admProdutos()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');
        
        
        $tables = [
            'produtos' => $produtos,
            'categorias'=> $categorias,
        ];
        return view('adimin-produtos', $tables);
    }
    public function produtoView()
    {
        
        $produto = App::get('database')->selectProduto('produtos', $_GET['id']);
        
        
        return view("produto", compact('produto'));
        
    }
    
    public function filtro()
    {

        $produtos = App::get('database')->selectCategoria('produtos', $_GET['categoria']);
        $categorias = App::get('database')->selectAll('categorias');

        $tables = [
            'produtos'=>$produtos,
            'categorias'=>$categorias,
        ];

        return view('produtos', $tables);

    }

    public function busca()
    {

        $produtos = App::get('database')->selectBusca('produtos', $_GET['busca']);
        $categorias = App::get('database')->selectAll('categorias');

        $tables = [
            'produtos'=>$produtos,
            'categorias'=>$categorias,
        ];

        return view('produtos', $tables);

    }
    public function produtos()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');
        
        $tables = [
            'produtos'=>$produtos,
            'categorias'=>$categorias,
        ];

        return view('produtos', $tables);
    }
    
    public function create()
    {
       
        foreach($_POST as $postKey => $postValor)
        {
            $parameters["$postKey"] = $postValor;
            
        }
        // $parameters = $_POST; ACHO QUE ISSO FUNCIONA, POREM PODE SER UMA MA PRATICA
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
        foreach($_POST as $postKey => $postValor)
        {
            if( !($postValor == '') )
            {
                $parameters["$postKey"] = $postValor;
            }
            
        }

        App::get('database')->edit('produtos', $parameters);

        header('Location: /admin/produtos');
    }

}
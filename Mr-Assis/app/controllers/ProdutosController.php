<?php

namespace App\Controllers;
use App\Core\App;
use Exception;

class ProdutosController {

    public function adm()
    {
        return view('adm/admin-home');
    }
    public function admProdutos()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');
        
        
        $tables = [
            'produtos' => $produtos,
            'categorias'=> $categorias,
        ];
        return view('adm/adimin-produtos', $tables);
    }
    public function produtoView()
    {
        
        $produto = App::get('database')->selectProduto('produtos', $_GET['id']);
        
        
        return view("produto", compact('produto'));
        
    }
    
    public function filtro()
    {
        $produtos = App::get('database')->selectCategoria('produtos', $_GET['filtro']);
        $categorias = App::get('database')->selectAll('categorias');

        $tables = [
            'produtos'=>$produtos,
            'categorias'=>$categorias,
        ];
        
        return view('produtos', $tables);
        
    }

    public function produtos()
    {
        //Declarando filtro e busca
        if( array_key_exists('filtro', $_GET) ) { $filtro = $_GET['filtro']; }
        else { $filtro = ''; }

        if(array_key_exists('busca', $_GET)) { $busca = $_GET['busca']; }
        else { $busca = ''; }

        //Pegando as categorias
        $categorias = App::get('database')->selectAll('categorias');
        
        //numero de maximo de itens por paginas
        $itens_por_pagina = 9;
        
        // pegar a pagina atual
        if(array_key_exists('pagina', $_GET))
        {
            $pagina = intval($_GET['pagina']) - 1;
        }
        else{
            $pagina = 0;
        }
        
        //Numero total de produtos
        $num_produtos = (int) App::get('database')->numLinhas('produtos', $filtro, $busca);
        
        //Numero de paginas
        $num_paginas = ceil($num_produtos/$itens_por_pagina);
        
        //Verifica se a pagina esta dentro do intervalo de paginas
        if(!((0 <= $pagina) && ($pagina <= $num_paginas-1)))
        {
            return view('produtos', [
                'categorias'=>$categorias,
                'num_paginas'=>$num_paginas,
                ]
            );
        }
        
        
        //Numero de produtos restantes
        $produtos_restantes =  $num_produtos - (($pagina)*$itens_por_pagina);
        
        if( $produtos_restantes > $itens_por_pagina)
        {
            //puxar os produtos do banco    
            $produtos = App::get('database')->paginacao('produtos', $pagina, $itens_por_pagina, $filtro, $busca);
        }else
        {
            //Caso o numero de produtos restantes for menor que itens por pagina ele mostrará so o numero de itens restantes
            $produtos = App::get('database')->paginacao('produtos', $pagina * $itens_por_pagina, $produtos_restantes, $filtro, $busca);
        }
            
        

        
        $tables = [
            'produtos'=>$produtos,
            'categorias'=>$categorias,
            'num_paginas'=>$num_paginas,
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
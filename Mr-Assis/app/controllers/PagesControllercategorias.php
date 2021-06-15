<?php

namespace App\Controllers;
use App\Core\App;

class PagesControllercategorias {

    public function index ()
    {   
         
        $categorias = App::get('database') ->selectAll('categorias');


        return view('view-adm-categorias',compact('categorias'));       
    }

    
        public function create(){

            $parametros = [
                'name'=> $_POST['nome']
            ];
            App::get('database')->insert('categorias',$parametros);

            header('Location: /inicio');

        }
}
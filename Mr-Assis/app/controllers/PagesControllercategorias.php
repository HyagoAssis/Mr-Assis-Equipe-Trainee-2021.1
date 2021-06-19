<?php

namespace App\Controllers;
use App\Core\App;

class PagesControllercategorias {


    public function categorias ()
    {   
         
        $categorias = App::get('database') ->selectAll('categorias');


        return view('view-adm-categorias',compact('categorias'));       
    }

    
        public function create(){

            $parametros = [
                'name'=> $_POST['nome']
            ];
            App::get('database')->insert('categorias',$parametros);

            header('Location: /categorias');

        }

        public function delete(){

            App::get('database')->delete('categorias',$_POST['id']);
            header('Location: /categorias');
        }
        public function edit(){

            $parametros = [
                'name'=> $_POST['name'],
                'id'=> $_POST['id']
            ];
            App::get('database')->edit('categorias',$parametros);

            header('Location: /categorias');

        }
}
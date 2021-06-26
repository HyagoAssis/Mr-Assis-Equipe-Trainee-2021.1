<?php

namespace App\Controllers;
use App\Core\App;

class CategoriasController {


    public function categorias ()
    {   
         
        $categorias = App::get('database') ->selectAll('categorias');


        return view('adm/view-adm-categorias',compact('categorias'));       
    }

    
        public function create(){

            $parametros = [
                'nome'=> $_POST['nome']
            ];
            App::get('database')->insereCategoria('categorias',$parametros);

            header('Location: /admin/categorias');

        }

        public function delete(){

            App::get('database')->delete('categorias',$_POST['id']);
            header('Location: /admin/categorias');
        }
        public function edit(){

            $parametros = [
                'nome'=> $_POST['nome'],
                'id'=> $_POST['id']
            ];
            App::get('database')->edit('categorias',$parametros);

            header('Location: /admin/categorias');

        }
}
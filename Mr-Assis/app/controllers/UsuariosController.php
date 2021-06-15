
<?php

namespace App\Controllers;

use App\Core\App;

class UsuariosController{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
    
        return view('view-admin-usuarios', compact('usuarios'));
    }

    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome']
            
        ];

        App::get('database')->insert('usuários', $parametros);

        header('Location: /inicio');
    }
    public function delete ()
    {
        
        App::get('database')->delete('usuarios', $_POST['id']);

        header('Location: /inicio');
    }
}
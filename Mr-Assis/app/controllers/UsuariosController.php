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
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'foto' => $_POST['foto']
            
        ];

        App::get('database')->insert('usuarios', $parametros);

        header('Location: /');
    }
    public function delete ()
    {
        
        App::get('database')->delete('usuarios', $_POST['id']);

        header('Location: /');
    }
    public function edit()
    {
        foreach($_POST as $postKey => $postValor)
        {
            $parameters["$postKey"] = $postValor;
            
        }

        App::get('database')->edit('usuarios', $parameters);

        header('Location: /');
    }
}
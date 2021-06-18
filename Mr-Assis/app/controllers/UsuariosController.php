<?php

namespace App\Controllers;

use App\Core\App;

class UsuariosController{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
    
        return view('view-admin-usuarios', compact('usuarios'));
    }
    public function admUsuarios()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
        
        $tables = [
            'usuarios' => $usuarios
        ];
        return view('view-admin-usuarios', $tables);
    }

    public function create()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'foto' => $_POST['foto']
            
        ];

        App::get('database')->insert('usuarios', $parametros);

        header('Location: /admin/usuarios');
    }
    public function delete()
    {
        
        App::get('database')->delete('usuarios', $_POST['id']);

        header('Location: /admin/usuarios');
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

        App::get('database')->edit('usuarios', $parameters);

        header('Location: /admin/usuarios');
    }
}
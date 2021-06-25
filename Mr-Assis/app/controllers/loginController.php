<?php

namespace App\Controllers;
use App\Core\App;

class loginController {


    public function index()
    {   
         
        


        return view('viewLogin');       
    }

    public function login(){

        $email= $_POST['email'];
        $senha= $_POST['senha'];

       $var = App::get('database')->login('usuarios',$email,$senha);

       if (empty($var)){
                    
            return  view('senhaerrada');
       }
       else{
        
        session_start();
        $_SESSION['user'] = 'ativo';
        

        return view('admin-home');
       }
        

    }
        
    public function logout()
    {
       session_start();
       session_destroy();

        header('location: /login');

    }
       
        
}
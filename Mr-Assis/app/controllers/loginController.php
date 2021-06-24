<?php

namespace App\Controllers;
use App\Core\App;

class loginController {


    public function login()
    {   
         
        


        return view('viewLogin');       
    }

    public function teste(){

        $email= $_POST['email'];
        $senha= $_POST['senha'];

       $var = App::get('database')->login('usuario',$email,$senha);

       if (empty($var)){
            $msg = "email e senha invalidos";
            
            return  view('viewLogin',compact('msg'));
       }
       else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        session_start();

        return view('viewHomeAdm');
       }
        var_dump($var);

    }
        

       
        
}
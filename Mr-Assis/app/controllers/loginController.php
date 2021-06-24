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
                    
            return  view('senhaerrada');
       }
       else{
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        return view('viewHomeAdm',compact('email','senha'));
       }
        var_dump($var);

    }
        

       
        
}
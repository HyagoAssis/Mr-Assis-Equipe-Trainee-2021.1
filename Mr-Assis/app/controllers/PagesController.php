<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {

    public function index()
    {   
        return view('index');
    } 
    
    public function login()
    {

        return view('login');

    }
    public function contato()
    {

        return view('contato');

    }
        
}

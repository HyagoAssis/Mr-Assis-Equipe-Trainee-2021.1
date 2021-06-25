<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {


    public function index()
    {   
        $produtos = App::get('database')->selectAll('produtos');


        return view('home', compact('produtos'));
    }
    
        
}
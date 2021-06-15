<?php

use App\Controllers\ProdutosController;

//Procurando o css
$css = ProdutosController::css("stylesadministrativa.css");
$js = ProdutosController::js("js/script.js");

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="public/img/favicon.ico">

    <title>Mr. Assis - Administrativo </title>

    
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="manifest" href="img/icons/site.webmanifest">


    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $css ?>" media="screen" />
    
    <!-- Javascript -->
    <!-- <script type="text/javascript" src="js/scripts.js?version=0.0.1"></script>  -->
    <script type="text/javascript" src="<?= $js ?>"></script>

  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow position-static">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
            <img src="../../public/img/Mr.Assis.png" alt="Logo Mr. Assis" class="img-fluid ">
        </a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-md-block bg-light sidebar position-static">
          <div id="mySidebar" class="sidebar-sticky">
            <ul class="nav flex-column">
              <button id="threeline-icon" class="btn btn-secondary" onclick="openNav()">&#9776;</button>
              <!-- <li id="threeline-icon" class="threeline-icon" onclick="openNav()">&#9776; Open adms</li> -->
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Usuários
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Categorias
                </a>
              </li>
            </ul>

            
            </ul>
          </div>
        </nav>


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
 <?php if(!($_SESSION['email'])){

  header('Location: /login' );
  exit();
 }
  
 ?>
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

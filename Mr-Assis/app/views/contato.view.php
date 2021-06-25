<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&family=Playfair+Display&display=swap" rel="stylesheet">
        <script type="text/javascript" src = "js/scripts.js"></script>
       
      <!-- links do site MDB -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <?php require 'links-navbar.php' ?>
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
          <!-- Google Fonts Roboto -->
          <link
              rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
            />
            <!-- MDB -->
          <link rel="stylesheet" href="css/mdb.min.css" />
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <?php require 'links-navbar.php' ?>

        <link rel="stylesheet" href="../../public/css/stylescontato.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          
      </head>
<body>
    <?php require 'navbar.view.php' ?>
    
    <div class = "container">
        <form action="contato/email" method="POST" name="form_contato" id="form_contato">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
            <div class="form group col-md-4">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
            </div>
            <div class="form group col-md-4">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Endereço de email</label>
            <input type="email" class="form-control"  name="email" placeholder="email" required>
          </div>
          <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" class="form-control" id="inputAddress" name="assunto" placeholder="Assunto" required>
          </div>
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" ></input>
            
         </form>
         <?php if(isset($m)){
                echo '<p class = "mensagem">' . $m .'</p>' ;      
            } ?>
        
    </div> 
    <div class = "containermapa">
        <div class = "mapa">
          <h1>Onde Estamos</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5743164749247!2d-43.35785178558967!3d-21.758022703356612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b64bb93da7b%3A0xba4e334b893fbe6!2sAv.%20Oleg%C3%A1rio%20Maciel%20-%20Santa%20Helena%2C%20Juiz%20de%20Fora%20-%20MG!5e0!3m2!1spt-BR!2sbr!4v1621451903757!5m2!1spt-BR!2sbr" width="950" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <?php require 'footer.php' ?>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php require 'footer.php' ?>
</body>
</html>
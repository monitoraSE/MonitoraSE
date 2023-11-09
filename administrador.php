<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MonitoraSE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/style_cadastro.css">
  <link rel="stylesheet" href="styles/style_adm.css">

</head>

<body>
    <!-- Menu-->
    <?php
          include_once("navbar-home.php");
    ?>
    <main class="containerTitulo">
      <div>    
          <h1 class="text-center"><b>Área do Administrador</b></h1><br>  
      </div>
        <div id="container1">
          <a href="cadastro.php" class="link-admin">
          <div id="container11">
            <div class="container-text">
              <h3>Cadastrar</h3>
              <h3>Usuário</h3></a>
            </div>
          </div> 
          </a>
          <a href="cadastroTurma.php" class="link-admin">
          <div id="container12">
            <div class="container-text">
              <h3>Cadastrar</h3>
              <h3>Turmas</h3>
            </div>
          </div> 
          </a>
          <div id="container13">
            <div class="container-text">
              <h3>Calendário</h3>
              <h3>Escolar</h3>
            </div>
          </div>  
        </div>

        <div id="container2">
          <div id="container14">
            <div class="container-text">
              <h3>Notificações</h3>
              <h3>Gerais</h3>
            </div>
          </div> 
          <div id="container15">
            <div class="container-text">
              <h3>Registrar Entrada</h3>
              <h3>de Alunos</h3>
            </div>
          </div> 
          
        </div>
    </main>

</body>
<?php
          include_once("rodape.php");
    ?>


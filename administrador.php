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
    <nav class="navbar navbar-expand-md bg-body-tertiary fonteMenu shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="container-fluid fonteMenu" >
          <a class="navbar-brand monitoraseMenu" href="index.html">MonitoraSE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link botoesMenu" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu" href="index.html#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu active" href="#">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu" href="#">Download</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="search..." aria-label="Search">
              <button class="btn btn-bd-lupa" type="submit"><img src="imagens/lupa.png" width="15px" height="15px"  alt="lupaPesquisa"> </button>
            </form> 
            <a class="btn btn-bd-login fonteBotao" href="login.html" role="button">Login</a>
            <br>
          </div>
    </nav> 
    <div id="containerTitulo">    
        <h1 class="text-center"><b>Área do Administrador</b></h1><br>  
    </div>

    <main>
      <div id="container1">
        <div id="container11">
          <div class="container-text">
            <h3>Cadastrar</h3>
            <h3>Usuário</h3>
          </div>
        </div> 
        <div id="container12">
          <div class="container-text">
            <h3>Cadastrar</h3>
            <h3>Turmas</h3>
          </div>
        </div> 
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
    <?php
          include_once("rodape.php");
    ?>
</body>


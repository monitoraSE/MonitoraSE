<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<nav class="navbar navbar-expand-md bg-body-tertiary fonteMenu shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid fonteMenu" >
      <a class="navbar-brand monitoraseMenu" href="index.php">MonitoraSE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link botoesMenu active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botoesMenu" href="#sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botoesMenu" href="contato.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link botoesMenu" href="#reviews">Avaliações</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" id="searchbar" type="search" onkeyup="search_home()" placeholder="search..." aria-label="Search">
          <button class="btn btn-bd-lupa" type="submit"><img src="imagens/lupa.png" width="15px" height="15px"  alt="lupaPesquisa"> </button>
        </form>
        <?php
          session_start();
          if(isset($_SESSION['usuarioNome'])){
            echo '<a href="php/logout.php" class="btn btn-bd-login fonteBotao"> 
              Logout
            </a>';
          }
          else{
            echo '<a href="login.php" class="btn btn-bd-login fonteBotao"> 
            Login
          </a>';
          }
        ?>
      </div>
    </nav>    
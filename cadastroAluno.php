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

    <!--Conteiner principal-->

    <div id="containerCadastro">    

      <h2 class="text-center"><b>Cadastrar Aluno</b></h2><br>

      <label for="nomeAluno" class="form-label "><b>Nome:</b></label>
      <input type="text" class="form-control" id="nomeAluno" name="nome" required> 

      <br><br>
      
      <b>Sexo:</b>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Feminino
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Masculino
        </label>
      </div>

      <br><br>

      <label for="matriculaAluno" class="form-label "><b>Matrícula:</b></label>
      <input type="number" class="form-control" id="matriculaAluno" name="matricula" required>

      <br><br>

      <label for="responsavelAluno" class="form-label "><b>Responsável:</b></label>
      <input type="text" class="form-control" id="responsavelAluno" name="responsavel" required>

      <br><br><br>

      <div class="botaoCadastrar">
        <button class="meuBotao">Cadastrar Aluno</button>
      </div>
      
    </div>
</body>

    <!-- Rodapé-->
    <?php
      include_once("rodape.php");
    ?>

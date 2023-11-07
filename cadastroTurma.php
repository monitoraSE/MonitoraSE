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

    <!-- Logo-->
    <div class="imagemContato container p-3 mb-5 ">
        <img src="imagens/logo.png" class="img-fluid" alt="LogoMonitoraSE">
    </div>

    <!--Conteiner principal-->

    <div id="containerCadastro">    

      <h2 class="text-center"><b>Cadastrar Turma</b></h2><br>

      <label for="anoFormTurma" class="form-label "><b>Ano:</b></label>
      <input type="text" class="form-control" id="anoFormTurma" name="ano" required> 

      <label for="idFormTurma" class="form-label "><b>Identificação:</b></label>
      <input type="cpf" class="form-control" id="idFormTurma" name="idTurma" required>

      <label for="idAluno" class="form-label "><b>Aluno:</b></label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Selecione Aluno</option>
        <option value="Maria">One</option>
        <option value="João">Two</option>
        <option value="Luisa">Three</option>
      </select>  
      <br><br><br>

      <div class="botaoCadastrar">
        <button class="meuBotao">Cadastrar Turma</button>
      </div>
      
    </div>
  

    <script>
      // Adiciona um evento de clique ao botão "Cadastrar"
      document.getElementById('cadastrarBotao').addEventListener('click', function(event) {
        // Validação dos campos obrigatórios
        var nome = document.getElementById('nomeFormCada').value;
        var cpf = document.getElementById('cpfFormCada').value;
        var nascimento = document.getElementById('nascFormCada').value;
        var email = document.getElementById('emailFormCada').value;
        var senha = document.getElementById('senhaFormCada').value;
        var tipoUsuario = document.querySelector('input[name="tipoUsuario"]:checked');
    
        if (!nome || !cpf || !nascimento || !email || !senha || !tipoUsuario) {
          alert('Por favor, preencha todos os campos.');
          event.preventDefault(); // Impede o envio do formulário
        }
      });
    </script>

</body>

    <!-- Rodapé-->
    <?php
          include_once("rodape.php");
    ?>

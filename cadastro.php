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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles/style_cadastro.css">

</head>


<body>
    <!-- Menu-->
    <?php
          include_once("navbar-home.php");
    ?>

    <!-- Logo-->
    <div class="imagemContato container p-3 mb-5 ">
        <img src="imagens/logo.png" class="img-fluid" alt="LogoMonitoraSE">
    </div>

    <!--Conteiner principal-->

    <div id="containerCadastro">    

      <h2 class="text-center"><b>Cadastrar Usuário</b></h2><br>

      <label for="nomeFormCada" class="form-label "><b>Nome:</b></label>
      <input type="text" class="form-control" id="nomeFormCada" name="nome" required> 

      <label for="cpfFormCada" class="form-label "><b>CPF:</b></label>
      <input type="cpf" class="form-control" id="cpfFormCada" name="cpf" required>

      <label for="nascFormCada" class="form-label "><b>Data de Nascimento:</b></label>
      <input type="nasc" class="form-control" id="nascFormCada" name="nasc" required>

      <label for="emailFormCada" class="form-label "><b>E-mail:</b></label>     
      <input type="email" class="form-control" id="emailFormCada" placeholder="name@example.com" name="email" required>
      
      <label for="senhaFormCada" class="form-label "><b>Senha:</b></label>
      <input type="senha" class="form-control" id="cpfFormCada" name="senha" required>
      <br><br>
      <label for="usuFormCada" class="form-label "><b>Tipo de Usuário:</b></label>
      <br><br>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Professor</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Responsável</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Aluno</label>
      </div>
      <br><br><br>

      <div class="botaoCadastrar">
        <button class="meuBotao">Cadastrar</button>
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

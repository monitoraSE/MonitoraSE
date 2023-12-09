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
  <link rel="cadastro" href="./js/cadastro.js">
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

    <form id="containerCadastro" action="./php/cadastro-usuario.php" method="post">    

      <h2 class="text-center"><b>Cadastrar Usuário</b></h2><br>
      <div class="mb-3">
        <label for="formFile" class="form-label">Insira uma imagem de perfil</label>
        <input class="form-control" type="file" id="formFile" name="imagemperfil">
      </div>
      <label for="cpfFormCada" class="form-label "><b>CPF:</b></label>
      <input type="cpf" class="form-control" id="cpfFormCada" name="cpf" placeholder="apenas números" required>

      <label for="nomeFormCada" class="form-label "><b>Nome:</b></label>
      <input type="text" class="form-control" id="nomeFormCada" name="nome" required> 

      <label for="nomeusuFormCada" class="form-label "><b>Nome do Usuário:</b></label>
      <input type="text" class="form-control" id="nomeusuFormCada" name="nome_usuario" placeholder="Para fazer login" required> 

      <label for="emailFormCada" class="form-label "><b>E-mail:</b></label>     
      <input type="email" class="form-control" id="emailFormCada" placeholder="name@example.com" name="email" required>

      <label for="nascFormCada" class="form-label "><b>Data de Nascimento:</b></label>
      <input type="date" class="form-control" id="nascFormCada" name="nascimento" placeholder="xx/xx/xxxx apenas números" required>

      <label for="telefoneFormCada" class="form-label "><b>Telefone:</b></label>
      <input type="text" maxlength="11" class="form-control" id="telefoneFormCada" name="telefone" placeholder="xxxxxxx-xxxx apenas números" required>
      
      <label for="senhaFormCada" class="form-label "><b>Senha:</b></label>
      <input type="senha" maxlength="15" class="form-control" id="senhaFormCada" name="senha" required>
      <br><br>
      <label for="usuFormCada" class="form-label "><b>Tipo de Usuário:</b></label>
      <br><br>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoUsuario"
        <?php if(isset($usuario) && $usuario == "2") echo "checked";?> id="inlineRadio1" value="2">
        <label class="form-check-label" for="inlineRadio1">Professor</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoUsuario" 
        <?php if(isset($usuario) && $usuario == "3") echo "checked";?> id="inlineRadio2" value="3">
        <label class="form-check-label" for="inlineRadio2">Responsável</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoUsuario" 
        <?php if(isset($usuario) && $usuario == "3") echo "checked";?> id="inlineRadio3" value="4">
        <label class="form-check-label" for="inlineRadio3">Aluno</label>
      </div>
      <br><br><br>

      <div class="botaoCadastrar">
        <button type="submit" class="meuBotao">Cadastrar</button>
      </div>
      
    </form>

</body>

    <!-- Rodapé-->
<?php
    include_once("rodape.php");
?>

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

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
    <?php
          include_once("navbar-home.php");
    ?>

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

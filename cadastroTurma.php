<?php
        session_start(); 
?>

<?php
        //Incluindo a conexão com banco de dados   
    include_once("php/conexaobd.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['cpf'])) && (isset($_REQUEST['busca']))){
        $usuario = mysqli_real_escape_string($conecta, $_POST['cpf']);
        //$pesquisa = $_POST['cpf'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM Usuario WHERE CPF = '$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conecta, $result_usuario) or die("Erro ao retornar dados");
        //$resultado = mysqli_fetch_assoc($resultado_usuario);

        //$numRegistro = mysqli_num_rows($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        while($registro = mysqli_fetch_assoc($resultado_usuario)){
          $nome = $registro['Nome'];
          $cpf = $registro['CPF'];
          //var_dump($_POST);
        }
    }
    if((isset($_POST['cpf'])) && (isset($_REQUEST['cadastro-turma']))){
      $cpf   = $_POST["cpf"];
      $ano       = $_POST["ano"];
      $turma      = $_POST["turma"];
      $inserir_turma = "UPDATE Usuario SET Ano='$ano', Turma='$turma' WHERE CPF='$cpf'";
      // Testa se foi inserido no BD
      //if($conecta->query($inserir_turma) === true){
        //echo "Atualizado com sucesso";
      //}else{
        //echo "Não atualizado";
    //}
    }
    //mysql_close($conexao);
?>

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

    <!-- Logo-->
    <div class="imagemContato container p-3 mb-5 ">
        <img src="imagens/logo.png" class="img-fluid" alt="LogoMonitoraSE">
    </div>

    <!--Conteiner principal-->

    <div id="containerCadastro">    

      <h2 class="text-center"><b>Cadastrar Turma</b></h2><br>

      <form action="" method="post">  
        <label for="anoFormTurma" class="form-label "><b>Ano:</b></label>
        <input type="text" class="form-control" id="anoFormTurma" name="ano"> 

          <label for="idFormTurma" class="form-label "><b>Identificação:</b></label>
          <input class="form-control" id="searchbar" type="text" onkeyup="search_home()" placeholder="Digite CPF do aluno" aria-label="Search" name="cpf" value="<?php if(isset($cpf)) print $cpf; ?>"required>
          <br>
          <button class="btn btn-bd-lupa" type="submit" name="busca"><img src="imagens/lupa.png" width="15px" height="15px"  alt="lupaPesquisa"> </button>

          <label for="idAluno" class="form-label "><b>Aluno:</b></label>
          <input value="<?php if(isset($nome)) print $nome; ?>"/>
        <br>

        <label for="numeroTurma" class="form-label "><b>Turma:</b></label>
        <input type="text" class="form-control" id="turma" name="turma"> 
        <br><br><br>
        <div class="botaoCadastrar">
          <button class="meuBotao" name="cadastro-turma">Cadastrar Turma</button>
        </div>
        </form>

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

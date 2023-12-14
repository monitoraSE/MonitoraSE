<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonitoraSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">
</head>
<body class="body__login">
    <?php
          include_once("navbar-home.php");
    ?>
    <main class="main-login">

        <div class="retangulo__branco">  

            <h1 class="login-titulo">Login</h1>

            <form class="container-imput" method="POST" action="./php/loginUsuario.php">

                <div>
                    <label for="cpf" class="email-senha">Nome Usuário</label>
                    <input type="text" id="idusuario" name="idusuario" class="input" placeholder="Digite seu id usuário">
                </div>

                <div>
                    <label for="senha" class="email-senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="input" placeholder="******">
                </div>
                <div>
                    <a href="cadastro.php">Ainda não possui conta? Cadastre-se</a>
                </div>
                <div class="botao_login_enviar">
                    <input type="submit" value="Entrar" class="input-entrar">
                </div>

            </form>

            <p class="text-center text-danger">
                <?php 
                //Recuperando o valor da variável global, os erro de login.
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }?>
            <p class="text-center text-success">
            <?php 
			      //Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>

        </div>

    </main>

    <?php
          include_once("rodape.php");
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/reviews.js"></script>
</body>
</html>
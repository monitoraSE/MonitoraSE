<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/style__login.css">
</head>

<body>
    <header>

        <div class="cabecalho">

            <a href="./index.html" class="cabecalho__link">Home</a> 
            <a href="#" class="cabecalho__link">Sobre</a> 
            <a href="#" class="cabecalho__link">Recursos</a> 
            <a href="#" class="cabecalho__link">Download</a> 
            

        </div>
        
    </header>

    <main>

        <div class="retangulo__branco">  

            <form method="POST" action="./php/loginUsuario.php" class="card">

                <h1 class="card__login"><strong>Login</strong></h1>
                <label for="email" class="card__email">E-mail</label><br>
                <input type="email" id="email" name="email" class="input__email"><br>
                <label for="senha" class="card__senha">Senha</label><br>
                <input type="password" id="senha" name="senha" class="input__senha"><br><br>
                <input type="submit" value="Entrar" class="input__entrar"><br>

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

    <footer class="rodape">

        <div class="container__institucional">
            <h4>INSTITUCIONAL</h4>
            <a href="#" class="rodape__link">Sobre nós</a>
            <a href="#" class="rodape__link">Pagamentos</a>
            <a href="#" class="rodape__link">Contatos</a>
            <a href="#" class="rodape__link">Política de Privacidade</a>
        </div>

        <div class="container__atendimento">
            <h4>ATENDIMENTO</h4>
            <p class="p__atendimento">(32) 9 9800 0000<br>comercial@monitorese.com.br</p>

            <div class="atendimento__icones">
                <a href="#" class="rodape__icone"><img src="./imagens/email 1.png" alt="icone do email"></a>
                <a href="#" class="rodape__icone"><img src="./imagens/whatsapp 1.png" alt="icone do whatsapp"></a>
                <a href="#" class="rodape__icone"><img src="./imagens/facebook 1.png" alt="icone do facebook"></a>
                <a href="#" class="rodape__icone"><img src="./imagens/instagram 1.png" alt="icone do instagram"></a>

            </div>
        </div>

        <div>
            <h4>FORMAS DE PAGAMENTO</h4>
            <img src="./imagens/formasPagamento.png" alt="formas de pagamento">

        </div>


    </footer>

</body>
</html>
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
                <a class="nav-link botoesMenu active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu" href="contato.html">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link botoesMenu" href="#reviews">Avaliações</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" id="searchbar" type="search" onkeyup="search_home()" placeholder="search..." aria-label="Search">
              <button class="btn btn-bd-lupa" type="submit"><img src="imagens/lupa.png" width="15px" height="15px"  alt="lupaPesquisa"> </button>
            </form> 
            
          </div>
    </nav>  


    <main class="main-login">

        <div class="retangulo__branco">  

            <h1 class="login-titulo">Login</h1>

            <form class="container-imput" method="POST" action="./php/loginUsuario.php">

                <div>
                    <label for="cpf-cnpj" class="email-senha">CPF/CNPJ</label>
                    <input type="text" id="email" name="cpf-cnpj" class="input" placeholder="CPF ou CNPJ">
                </div>

                <div>
                    <label for="senha" class="email-senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="input" placeholder="****************">
                </div>
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

    <footer class="text-center fonteFooter">
        <div class="container-fluid row mx-auto gap-5 g-1 justify-content-center">
            <div class="col-md-3 col-lg-2">
            <h4 class="fonteFooterDestaque">Institucional</h4>
            
            <a class="fonteFooter" href="#sobre">Sobre nós</a><br>
            Políticas de Pagamento<br>
            <a class="fonteFooter" href = "contato.html">Contato</a>
            </div>
            <div class="col-md-3 col-lg-2">
            <h4 class="fonteFooterDestaque">Atendimento</h4>
    
            (32) 9 9800 0000<br>
            comercial@monitorase.com.br<br>
            <img src="imagens/redesociais.png" width="150" height="40" alt="Redes Sociais">
            </div>
            <div class="col-md-3 col-lg-2">      
            <h4 class="fonteFooterDestaque">Formas de Pagamento</h4>
                <img src="imagens/pagamentos.png" width="197" height="96" alt="Formas de Pagamento">
            </div>
        </div> 
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido por Guilherme, Marcela e Tamires | Projeto fictício para disciplina de Desenvolvimento Web.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/reviews.js"></script>
</body>
</html>
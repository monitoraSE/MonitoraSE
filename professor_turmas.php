<?php
        session_start(); 
        include_once("./php/consultaEscola.php");    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonitoraSE - Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="./styles/style_responsavel-professor.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-md bg-body-tertiary shadow p-3 bg-body-tertiary rounded">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">MonitoraSE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="professor.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
          </div>
          <?php
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

    <main class="card-branco">
        <h1 class="titulo-principal"><?php print $_SESSION['usuarioNome']; ?></h1>
        <h2 class="titulo-principal secundario">Escola **************</h2>

        <!-- Turma dentro do container trasparente com bordas -->
        <div class="card_transparente">
            <div class="container_texto turma">
                <p class="texto escola">
                    Turma: **************
                </p>
            </div>

            <!-- botoes amarelos -->
            <div class="botoes">
                <a class="card-amarelo botao_amarelo link_botao" href="professor_rg_nota.php">
                    Registro de nota
                </a>

                <a class="card-amarelo botao_amarelo" href="professor_rg_presenca.php">
                    Registro de presença
                </a>

                <a class="card-amarelo botao_amarelo" href="professor_rg_atividade.php">
                    Registro de tarefas
                </a>   
            </div>
        </div>
        <!-- Fim do container de turma -->

        <!-- Turma dentro do container trasparente com bordas 2-->
        <div class="card_transparente">
            <div class="container_texto turma">
                <p class="texto escola">
                    Turma: **************
                </p>
            </div>

            <!-- botoes amarelos -->
            <div class="botoes">
                <a class="card-amarelo botao_amarelo link_botao" href="#">
                    Registro de nota
                </a>

                <a class="card-amarelo botao_amarelo" href="#">
                    Registro de presença
                </a>

                <a class="card-amarelo botao_amarelo" href="#">
                    Registro de tarefas
                </a>   
            </div>
        </div>
        <!-- Fim do container de turma 2-->

        <!-- Turma dentro do container trasparente com bordas 3-->
        <div class="card_transparente">
            <div class="container_texto turma">
                <p class="texto escola">
                    Turma: **************
                </p>
            </div>

            <!-- botoes amarelos -->
            <div class="botoes">
                <a class="card-amarelo botao_amarelo link_botao" href="#">
                    Registro de nota
                </a>

                <a class="card-amarelo botao_amarelo" href="#">
                    Registro de presença
                </a>

                <a class="card-amarelo botao_amarelo" href="#">
                    Registro de tarefas
                </a>   
            </div>
        </div>
        <!-- Fim do container de turma 3-->

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
</body>
</html>
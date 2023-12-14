<?php
        session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsavel</title>
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
                        <a class="nav-link active" aria-current="page" href="responsavel.php">Home</a>
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

        <div class="card_aluno">

            <div class="nome_aluno">
                <h2>Aluno: ***********</h2>
            </div>
            

            <!-- notas dos alunos -->
            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <!-- notas dos alunos -->
        </div>

        <div class="card_aluno">

            <div class="nome_aluno">
                <h2>Aluno: ***********</h2>
            </div>
            

            <!-- notas dos alunos -->
            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>

            <div class="container_nota">
                <p class="atividade">Atividade: *********</p>
                <p class="nota">Nota: *****</p>

            </div>
            <!-- notas dos alunos -->
        </div>

    </main>

    <?php
          include_once("rodape.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
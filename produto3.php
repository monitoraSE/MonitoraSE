<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonitoraSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">
    <link href="./styles/style__produto1.css" rel="stylesheet">
</head>

<body class="body-produto1">

<?php
          include_once("navbar-home.php");
    ?>

    <main class="main-produto1">
        
        <p class="plano__assinatura">Plano de Assinatura - <strong class="strong__plano">Plano Escolar 3</strong></p>


        <div class="ilustrativo__contratacao">

            <img src="./imagens/plano1__descricao.png" alt="imagem de descricao do plano 1" class="imagem__plano1">

            <div class="funcionalidades">
                <h2>Plano Escolar 3</h2>

                <p class="preco">R$ 35,00 / aluno</p>

                <ul class="lista__funcionalidades">
                    <li>Funcionalidade 1;</li>
                    <li>Funcionalidade 2;</li>
                    <li>Funcionalidade 3;</li>
                    <li>Funcionalidade 4;</li>
                    <li>Funcionalidade 5;</li>
                    <li>Funcionalidade 6.</li>
                </ul>



            </div>

            <div class="card__assinar">

                <h2>Plano Escolar 3</h2>

                <div class="add_quantidades">
                    <p class="p__quantidade">Quantidade: </p>
                </div>

                <div class="add__funcionalidades__card">
                    <p class="p__funcionalidades">Adicionar Funcionalidades extras: </p>
                    <div class="dropdown">
                        <button class="dropdown-funcionalidades btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Adicionar Funcionalidades
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">funcionalidade 1</a></li>
                          <li><a class="dropdown-item" href="#">funcionalidade 2</a></li>
                          <li><a class="dropdown-item" href="#">funcionalidade 3</a></li>
                        </ul>
                      </div>
                </div>

                <div>
                    <p>Total:</p>
                    <h2 class="preco">R$35,00/Aluno</h2>
                </div>
                
                <div>
                    <a class="botao-assinar btn btn-bd-login fonteBotao" href="#" role="button">Assinar</a>
                </div>
                



            </div>



        </div>

        <h1 class="descricao-texto">Descrição</h1>

        <div class="linha__divisao"></div>

        <div class="container-texto">
            <p class="texto">
                Lorem ipsum dolor sit amet. Id ullam earum qui repellendus tenetur At dolor ipsum!
                 Non unde earum eos aperiam fugit eos ducimus galisum et molestiae numquam sed
                  doloremque distinctio in distinctio consequatur est quaerat quaerat?<br><br>

                Vel adipisci ipsa ut omnis ipsa et repellendus voluptatem et iusto laboriosam ut 
                reiciendis dolorem? Rem Quis dicta sed quas nihil cum quod officiis est sunt 
                consequatur. Eos nulla placeat est iusto consequatur id dolorum saepe et dolores 
                exercitationem sed eius ullam sit laboriosam ullam et nihil consectetur. Qui omnis 
                ducimus et pariatur consectetur ut minima debitis quo totam rerum et quod fuga.
            </p>
        </div>

    </main>




    <?php
          include_once("rodape.php");
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/reviews.js"></script>

</body>
</html>
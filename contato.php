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
</head>

<body>
    <?php
          include_once("navbar-home.php");
    ?>

    <div class="imagemContato container p-3 mb-5 ">
        <img src="imagens/logo.png" class="img-fluid" alt="LogoMonitoraSE">
    </div>

        <section id="contato">
          <!--action="contatoEnviar.php" method= "post" metodo para fazer o botao do form enviar-->
            <form method= "post" action="contatoEnviar.php">
                <div class="container-fluid card shadow p-3 mb-5 bg-body rounded h-50 w-50 justify-content-center">
                    <h2 class="text-center"><b>Entre em contato conosco</b></h2><br>
                    <br>
                    <label for="nomeFormHome" class="form-label fontePlanosAssinatura"><b>Digite seu nome:</b></label>
                    <input type="text" class="form-control" id="nomeFormHome" name="nome">
                    <br>
                    <label for="emailFormHome" class="form-label fontePlanosAssinatura"><b>E-mail:</b></label>     
                    <input type="email" class="form-control" id="emailFormHome" placeholder="name@example.com" name="email">
                    <br>
                    <label for="assuntoFormHome" class="form-label fontePlanosAssinatura"><b>Assunto:</b></label>
                    <input type="text" class="form-control" id="assuntoFormHome" name="assunto">
                    <br>
                    <label for="textAreaHome" class="form-label fontePlanosAssinatura"><b>Deixe seu comentário:</b></label>
                    <textarea class="form-control" id="textAreaHome" rows="5" name="mensagem"></textarea>
                    <br>
                    <input class="btn btn-bd-login fonteBotao" type="submit" value="Enviar" data-bs-container="body" data-bs-toggle="popover" data-bs-content="Contato realizado!">
                </div>
            </form>
        </section>
        <br>
        <?php
          include_once("rodape.php");
        ?>

        <script>
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
              return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>
    </body>

</html>
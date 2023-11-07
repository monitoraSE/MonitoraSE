<?php
include "conexaobd.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MonitoraSE - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                <ol class="breadcrumb">
                    <li class="active"><a href="../cadastro.php">Cadastrar Usuário</a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <?php
        // Declarando as variáveis de acesso as páginas
        //$var = "index.html";
        // o @ suprime avisos de erro do PHP.
        //@$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        //if(empty($_SERVER["QUERY_STRING"])) {
        //    include("$var");
        //} else {
        //    include("$pg.php");
        //}
    ?>
        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

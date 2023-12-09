<?php

include("conexaobd.php");

//insercao no banco
    if(isset($_POST["nome"]) && isset($_POST["nascimento"]) && isset($_POST["tipoUsuario"])) {
        $nome = $_POST["nome"];
        $cpf   = $_POST["cpf"];
        $nascimento  = $_POST["nascimento"];
        $data = date("Y-m-d", strtotime($nascimento));
        $telefone = $_POST["telefone"];
        $email       = $_POST["email"];
        $imagem  = $_FILES("imagemperfil");
        $senha       = $_POST["senha"];
        $hash =   password_hash ($senha, PASSWORD_DEFAULT);
        $tipoUsuario     = $_POST["tipoUsuario"];
        $nomeUsuario     = $_POST["nome_usuario"];


        $inserir = "INSERT INTO Usuario ";
        $inserir .= "(CPF,Nome,Email,Data_Nascimento,Telefone,Senha,Tipo_Usuario,Nome_Usuario) ";
        $inserir .= "VALUES ";
        $inserir .= "('$cpf','$nome','$email','$data','$telefone','$hash','$tipoUsuario','$nomeusuario')";

        $operacao_inserir = mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("Ocorreu um erro ao cadastrar");
        }else {
            echo "<script>alert('Cadastrado com sucesso'); setTimeout(function(){
                window.location='../cadastro.php';},500);
                </script>";
        }
    }

?>
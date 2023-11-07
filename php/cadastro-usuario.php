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
        $senha       = $_POST["senha"];
        $tipoUsuario     = $_POST["tipoUsuario"];

        $inserir = "INSERT INTO Usuario ";
        $inserir .= "(Nome,CNPJ_CPF,Data_Nascimento,Telefone,Email,Senha,Tipo_Usuario) ";
        $inserir .= "VALUES ";
        $inserir .= "('$nome','$cpf','$data','$telefone','$email','$senha','$tipoUsuario')";

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
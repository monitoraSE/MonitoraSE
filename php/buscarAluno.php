<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexaobd.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['cpf']))){
        $pesquisa = $_POST['cpf'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_cpf = "SELECT Nome FROM Usuario WHERE CPF = '$pesquisa' LIMIT 1";
        $resultado_usuario = mysqli_query($conecta, $result_cpf) or die("Erro ao retornar dados");
        //$resultado = mysqli_fetch_assoc($resultado_usuario);

        //$numRegistro = mysqli_num_rows($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        while($registro = mysqli_fetch_array($resultado_usuario)){
            echo $registro['Nome'];
            //var_dump($_POST);
        }
        mysqli_close($conecta);
    }
?>
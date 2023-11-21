<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexaobd.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['nomeusuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conecta, $_POST['nomeusuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conecta, $_POST['senha']);
        //$senha = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM Usuario WHERE Nome_Usuario = '$usuario' && Senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conecta, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['IdUsuario'];
            $_SESSION['usuarioNome'] = $resultado['Nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['Tipo_Usuario'];
            $_SESSION['usuarioCPF'] = $resultado['CPF'];
            $_SESSION['usuarioUsuario'] = $resultado['Nome_Usuario'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: ../administrador.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: ../professor.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
                header("Location: ../responsavel.php");
            }else{
                header("Location: ../aluno.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            echo "<script>alert('Problema 1'); setTimeout(function(){
                window.location='../cadastro.php';},500);
                </script>";
            header("Location: ../index.html");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        echo "<script>alert('Problema 2'); setTimeout(function(){
            window.location='../cadastro.php';},500);
            </script>";
        header("Location: ../index.html");
    }
?>
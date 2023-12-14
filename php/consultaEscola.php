<?php
        //Incluindo a conexão com banco de dados   
        include_once("php/conexaobd.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if(isset($_SESSION)){
        $usuario = $_SESSION['usuarioId'];
        //$pesquisa = $_POST['cpf'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM Escola_Usuario WHERE IdUsuario = '$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conecta, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        //echo '$resultado';
        //$resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
            $id_escola = $resultado['IdEscola'];

            $busca_escola = "SELECT Nome, Endereco from Escola WHERE IdEscola = '$id_escola'";
            $resultado_busca = mysqli_query($conecta, $busca_escola);

            while($registro = mysqli_fetch_assoc($resultado_busca)){
                $nome = $registro['Nome'];
                $endereco = $registro['Endereco'];
                $_SESSION['escolaNome'] = $nome;
                $_SESSION['escolaEndereco'] = $endereco;
                //var_dump($_POST);
              }


        }
    }

?>
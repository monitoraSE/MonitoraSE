<?php
if (isset($_POST["send"])) {

 $nome = $_POST['Nome'];
 $email = $_POST['Email']; 
 $assunto = $POST['Assunto'];
 $mensagem = $_POST['Mensagem']; 

 $email_remetente = "marcelagp623@gmail.com"; 

 $email_destinatario = $email;
 $email_reply = "$email"; 
 $email_assunto = $assunto;

 $email_conteudo = "Enviado por: $nome \n"; 
 $email_conteudo .= "$mensagem \n"; 

 $email_headers = implode ( "\n",array ( "From: $email_destinatario", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 3.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

 if (mail ($email_remetente, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
  echo "<script>alert('E-mail enviado com sucesso!');location.href = 'contato.html';</script>";

 } 
 else{ 
  echo "<script>alert('Falha no envio!');location.href = 'contato.html';</script>";
  } 
}
?>



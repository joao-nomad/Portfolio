<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'joaovitorlessa@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "E-mail de Cliente:  $name";
$email_body = "João, você acabou de receber uma mensagem no seu website.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nE-mail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "From: portfolio@joaovitorlessa.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;

/*$quebra_linha = "\r\n";
$emailsender = "teste@jvitorlb.com";
$nomeremetente = "João Vitor";
$emaildestinatario = "joaovitorlessa@gmail.com";
$comcopia = "joaovitorlessa@gmail.com";
$comcopiaoculta = "joaovitorlessa@gmail.com";
$assunto = "Teste PHPMail";
$mensagem = "Mensaginha";

$mensagemHTML = "<p>Teste de função PHP Mail (): !</p>
<p>Título</p>
<p>".$mensagem."</p>
<hr>";

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso_8859_1".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-path: ".$emailsender.$quebra_linha;
$headers .= "Cc: ".$comcopia.$quebra_linha;
$headers .= "Bc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
print ("Mensagem enviada com sucesso");/*
?>
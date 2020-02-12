<?php
/* Envio de E-mail mail()
Arquivo enviaContato.php - PHP
criado: 11/02/2020
Criado por: @Rods
rodsducarmo@gmail.com
 ***********************************************************
 */

// Armazenando os IMPUTS do usuário para envio:
$empresa = $_POST["empresa"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

// Definindo o FORMATO do e-mail a ser recebido:
$texto = "<h3> Formulário </h3><br>
            <b>Empresa:</b> $empresa<br>
			<b>Nome do Cliente:</b> $nome<br>
			<b>Telefone:</b> $telefone<br>
			<b>E-mail:</b> $email<br>
			<b>Mensagem:</b> $mensagem<br>";

//Enviando o e-mail para o DESTINATÁRIO:
$emailDestino = "rodsducarmo@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:" . $email . "\r\n";
mail($emailDestino, 'Teste de E-mail', $texto, $headers);

//Resposta AUTOMÁTICA para o cliente (<img src> deve ter o logo 'em criação...'):
$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From:" . $email . " \r\n";
$texto .= "Hello. We HAPPY for your contact<br>
			Your case is waiting...<br>
			<br>
			Att: Comercial Departiment...<br>
			www.topjobsflooring<br>
			rodsducarmo@gmail.com<br>
			Tanks You!
			<br>
			<img src=''>
            "; mail($email, 'Teste de E-mail', $texto, $headers2);

//REDIRECIONANDO para a HOME:
print '<script>location.href= "contato.php";</script>';

?>

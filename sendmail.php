<?php

 if (!empty($_POST['nome'])) {
        $mensagem = $_POST['mensagem'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    
		ini_set('display_errors', 1);

		error_reporting(E_ALL);

		$from = "info@podermonetario.com.br";

		$to = $email;

		$subject = "Enviado por".$nome."";

		$message = $message;

		$headers = "De:". $from;

		mail($to, $subject, $message, $headers);

		echo "A mensagem de e-mail foi enviada.";
} 
?>
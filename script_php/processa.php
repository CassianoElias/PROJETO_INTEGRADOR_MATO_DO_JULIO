<?php
	include ('conexao.php');
	include ('class.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['msg'];

	/*$a = new Envio ();
	$a->setNome($nome);
	$a->setEmail($email);
	$a->setTelefone($telefone);
	$a->setAssunto($assunto);
	$a->setMsg($msg);*/

	$sql = "INSERT INTO faleconosco(nomeCompleto,email,telefone,assunto,mensagem)
	VALUES
	('$nome','$email','$telefone','$assunto','$msg')";

	if ($conn->query($sql)===true){
		echo "<script language='javascript' type='text/javascript'>
			alert('Mensagem enviado com sucesso!');
			window.location.href='../paginas_php/fale-conosco.php';</script>";
			die();
		}else{
			echo "Erro: ".$sql."<br>".$conn->error;
			echo "<br>";
			echo "Não foi possível enviar mensagem ";
		}
		$conn->close();
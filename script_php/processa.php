<?php
	include ('conexao.php');
	include ('class.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['msg'];

	

	$sql = "INSERT INTO faleconosco(nomeCompleto,email,telefone,assunto,mensagem)
	VALUES
	('$nome','$email','$telefone','$assunto','$msg')";

	if ($conexao->query($sql)===true){
		echo "<script language='javascript' type='text/javascript'>
			alert('Mensagem enviado com sucesso!');
			window.location.href='../paginas_php/fale-conosco.php';</script>";
			die();
		}else{
			echo "Erro: ".$sql."<br>".$conexao->error;
			echo "<br>";
			echo "Não foi possível enviar mensagem ";
		}
		$conexao->close();
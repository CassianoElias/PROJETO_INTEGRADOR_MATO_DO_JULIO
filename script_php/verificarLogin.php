<?php
	include('conexao.php');
	$login = $_POST['usuario'];
	$senha = $_POST['senha'];
	$entrar = $_POST['entrar'];
	
	$criptografia = MD5($senha);
	
	if(isset($entrar)){
		$verifica = 
		mysqli_query($conexao,"SELECT * FROM admin WHERE usuario = '$login' and senha = '$criptografia'")or die("Erro ao buscar no banco");
		if(mysqli_num_rows($verifica)<=0){
		echo "<script language='javascript' type='text/javascript'>
		alert('Usuário ou senha incorretos!');
		window.location.href='../paginas_php/login.php';
		</script>";	
		die();
		}else{
				session_start();
			$_SESSION['nome_uso_sessao']= $login;
			header("Location: ../paginas_php/showform.php");
			}
		}
?>
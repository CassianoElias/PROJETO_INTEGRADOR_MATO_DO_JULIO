<?php
		include ('conexao.php');
		include ('class.php');
	
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		
		$criptografia = MD5($senha);
	
		if($usuario == "" || $usuario == null){
			echo "<script language='javascript' type='text/javascript'>
			alert('O campo usuario deve ser preenchido!');
			window.location.href='cadastro.php';
			</script>";	
				}else{
					if($senha == "" || 
					$senha == null){
					echo "<script language='javascript' type='text/javascript'>
					alert('O campo senha deve ser preenchido!');
					window.location.href='cadastro.php';
					</script>";
					die();	
					}else{
						$inserir = "INSERT INTO 
						admin (usuario, senha)
						VALUES('$usuario','$criptografia')";
						$executar = mysqli_query($conexao,$inserir);
						if($executar){
						echo "<script language='javascript' type='text/javascript'>
						alert('Usuario cadastrado com sucesso!');
						window.location.href='../paginas_php/login.php';</script>";
						}else{
						echo "<script language='javascript' type='text/javascript'>
						alert('Não foi possível cadastrar!');
						window.location.href='cadastroAdm.php';</script>";
			
						}
					}
				}
			?>
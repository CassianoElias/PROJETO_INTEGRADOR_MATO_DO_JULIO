<?php
	//Criar a conexão com o BD
	$host = 'localhost';
	$user = 'root';
	$senha = '';
	$banco = 'mato';
	
$conexao = 
new mysqli($host,$user,$senha,$banco);

if($conexao->connect_error){
	die("Falha na conexão: "
	.$conexao->connect_error);
}
	
?>
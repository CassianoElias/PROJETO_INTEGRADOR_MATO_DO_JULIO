<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pagina do Administrador</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="./imagens/favicon/icon_favicon.ico">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/scrollbar.css"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Felipa&family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="./script/menu.js"></script>
</head>
<body >
<table class="table">

<thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Assunto</th>
        <th>Mensagem</th>
    </tr>
</thead>
<tbody>
    <?php
        include "../script_php/conexao.php";
        
        $query = "Select nomeCompleto,email,telefone,assunto,mensagem from faleconosco";
        $dados = mysqli_query($conexao, $query);
        if($dados){
            while($linha = mysqli_fetch_assoc($dados)){

                ?>
                <tr>
                    <td><?php echo $linha ("nomeCompleto") ?></td>
                    <td><?php echo $linha ("email") ?></td>
                    <td><?php echo $linha ("telefone") ?></td>
                    <td><?php echo $linha ("assunto") ?></td>
                    <td><?php echo $linha ("mensagem") ?></td>
                    <td>
                        <button>Editar</button>
                        <button>Excluir</button>
                    </td>
                </tr>
                <?php
            }
        }
?>

    
</tbody>
</table>
    </body>
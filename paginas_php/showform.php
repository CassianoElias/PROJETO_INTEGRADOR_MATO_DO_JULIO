<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pagina do Administrador</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/showform.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css"> 
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Felipa&family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="../script/menu.js"></script>
</head>
<body >
<header>        
            <div id="txtheader">
                <h1 id="title">MATO DO JULIO</h1>
                <p id="subtitle"> A maior floresta de Cachoeirinha</p>
                
            </div>  
        </header>
        <nav class="nav-bar">
        <div class="nav-list" id="menu">
            <ul>
                <li class="nav-item"><a href="../paginas_php/login.php">SAIR DA AREA DO ADMINISTRADOR</a></li>
            </ul>
        </div>
        </nav>    
<table border="1" class="table">

<thead>
    <tr>
        <th >Nome</th>
        <th >Email</th>
        <th >Telefone</th>
        <th >Assunto</th>
        <th >Mensagem</th>
        <th >Opções</th>
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
                    <td><?php echo $linha ["nomeCompleto"] ?></td>
                    <td><?php echo $linha ["email"] ?></td>
                    <td><?php echo $linha ["telefone"] ?></td>
                    <td><?php echo $linha ["assunto"]  ?></td>
                    <td><?php echo $linha ["mensagem"] ?></td>
                    <td>
                        <button id="editar" class="table-button">Editar</button>
                        <button id="excluir" class="table-button">Excluir</button>
                    </td>
                </tr>
                <?php
            }
        }
?>

    
</tbody>
</table>
    </body>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                
            <img class="logofooter" src="../imagens/./logo-removebg-preview.png"  alt="logomatodojulio" title="Mato do Julio">
            <img class="logofooter" src="../imagens/associacao-removebg-preview.png" alt="logoassociacao" title="Associação de preservação da natureza">
                </div>
                <div id="footer_social_media">
                    
                    <a href="https://www.instagram.com/matodojulio/" class="social" alt="Instagram" >
                    <img class="imgrede" src="../imagens/redes/logo_insta.png" alt="instagram" title="Instagram"></a>
                    
                    <a href="https://www.facebook.com/matodojulio/" class="social alt="Facebook" >
                    <img class="imgrede" src="../imagens/redes/logo_face.png" alt="Facebook"  title="Facebook"></a>

                    <a href="https://twitter.com/MatoDoJulio" class="social" alt="Twitter" title="Twitter" >
                    <img class="imgrede" src="../imagens/redes/logo_twitter.png" alt="Twitter" title="Twitter"></a>
                            
                    <a href="https://www.youtube.com/@matodojulio" class="social" alt="Youtube" >
                    <img class="imgrede" src="../imagens/redes/logo_youtube.png" alt="Youtube" title="Youtube"></a>	
                </div>
            
        </div>
        <div id="footer_copyright" >
            &#169
            2023 all rights reserved <a href="https://github.com/CassianoElias"> <img class="imggithub" src="../imagens/redes/github_black.png" alt="github"> </a>
        </div>
    </footer>
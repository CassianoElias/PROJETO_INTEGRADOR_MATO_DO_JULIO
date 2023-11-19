<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pagina do Administrador</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
    <!--link css--->
	<link rel="stylesheet" type="text/css" href="../css/showform.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css"> 
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <!--import font--->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Felipa&family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!--link script JS--->
    <script src="../script/menu.js"></script>
</head>
<body >
<header> 
        <div id="cabecalho">
                <div id="header-up">
                    <div id="cont-ramo">
                        <img id="ramo" src="../imagens/ramo.png" alt="">
                    </div>
                        <h1 id="title">MATO DO JULIO</h1>
                </div>
                <div id="logo-bixos">
                    <img id="img-bixo" src="../imagens/bixos-logo.png" alt="">
                </div>
        </div>       
              
        </header>
<div>
    
<nav class="nav-bar">
        <div class="nav-list" id="menu">
        <ul>
        <div id="usuario">
	<?php
			if (isset($_SESSION['nome_uso_sessao'])){
				echo  'Ola '.$_SESSION['nome_uso_sessao'].'<br/>'.' Seja bem vindo!<br/>';
			}else{
				echo" <div id='login'><a href='login.php?logout'>
				login</a></div>";
			}
			if(isset($_GET['logout'])){
				session_destroy();
				header("Location: login.php");

			}

			?>
            </div>
        <li class="nav-item"><a id="menuadm" href="../paginas_php/login.php">SAIR DA AREA DO ADMINISTRADOR</a></li>
            </ul>
            
        </div>    
        <div class="mobile-menu-icon">
           <button id="botao" onclick="menuShow()" type="menu"><a href="javascript:void(0);" 
            style="font-size: 20px;" 
            class="icon" onclick="myFunction()">
            &#9776;</a></button>
        </div>
    </nav>
    
    <div class="mobile-menu">
        <ul>
        <li class="nav-item"><a id="menuadm" href="../paginas_php/login.php">SAIR DA AREA DO ADMINISTRADOR</a></li>
        
        </ul>
    </div>
    
</div>
        
     

<table border="1" class="table">

<thead>
    <tr>
        <th >Nome</th>
        <th >Email</th>
        <th >Telefone</th>
        <th >Assunto</th>
        <th >Mensagem</th>
        <th >Opções</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php
        include "../script_php/conexao.php";
        
        $query = "Select id,nomeCompleto,email,telefone,assunto,mensagem from faleconosco";
        $dados = mysqli_query($conexao, $query);
        if($dados){
            while($linha = mysqli_fetch_assoc($dados)){

                ?>
                <tr>
                    <td><?php echo $linha ["id"] ?></td>
                    <td><?php echo $linha ["nomeCompleto"] ?></td>
                    <td><?php echo $linha ["email"] ?></td>
                    <td><?php echo $linha ["telefone"] ?></td>
                    <td><?php echo $linha ["assunto"]  ?></td>
                    <td><?php echo $linha ["mensagem"] ?></td>
                    <td id="campo-botao">
                    <button id="botao-excluir">
                        <a id="excluir" href="../script_php/excluir.php?id=<?php echo $linha["id"];?>">
                        Excluir
                            </a>
                    </button>
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
            <div id="footer-bixo">
            <img id="img-footer" src="../imagens/footer.png" alt="">
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
            <a href="../paginas_php/login.php">Area do Administrador</a>
        </div>
    </footer>
</html>
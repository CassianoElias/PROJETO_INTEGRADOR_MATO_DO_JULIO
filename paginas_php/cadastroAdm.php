<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mato do Julio</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/fale-conosco.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css"> 
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
    <header>        
            <div id="txtheader">
                <h1 id="title">MATO DO JULIO</h1>
                <p id="subtitle"> A maior floresta de Cachoeirinha</p>
            </div>  
        </header>
	<nav class="nav-bar">
        <div class="nav-list" id="menu">
            <ul>
                <li class="nav-item"><a href="../index.html" class="nav-link" >Inicio</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Voluntários</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Resgates</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Acões</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Produtos</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Doações</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link" >Matérias</a></li>
                <li class="nav-item"><a href="fale-conosco.html" class="nav-link" >Fale Conosco</a></li>
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
            <li class="nav-item"><a href="../index.html" class="nav-link" >Inicio</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Voluntários</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Resgates</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Acões</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Produtos</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Doações</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link" >Matérias</a></li>
            <li class="nav-item"><a href="fale-conosco.php" class="nav-link" >Fale Conosco</a></li>
        </ul>
    </div>
    <div id="formulario">
        <form action="../script_php/recebeCadastro.php" method="post"><!--ENVIAR PARA O ARQUIVO dados.php method="post"-->
            <h1>Area do Administrador</h1>
            <h2>Cadastre um administrador</h2>
            <label>Usuário: 
                <input type="text" name="usuario" placeholder="usuario"  minlength="3" required>
            </label><br>
            <label>Senha:</label>
				<input type="password" id="senha" name="senha" minlength="5" required placeholder="********"/><br>
           
            <input type="submit" value="CADASTRAR" name="enviar" id="botaoform"><br>
        </form>
    </div>
    

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
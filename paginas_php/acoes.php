<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Ações</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
<!--links css--->
	<link rel="stylesheet" type="text/css" href="../css/acoes.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css"> 
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
	<nav class="nav-bar">
        <div class="nav-list" id="menu">
        <ul>
                <li class="nav-item"><a href="../index.php" class="nav-link" >Inicio</a></li>
                <li class="nav-item"><a href="voluntarios.php" class="nav-link" >Voluntários</a></li>
                <li class="nav-item"><a href="resgates.php" class="nav-link" >Resgates</a></li>
                <li class="nav-item"><a href="acoes.php" class="nav-link" >Acões</a></li>
                <li class="nav-item"><a href="produtos.php" class="nav-link" >Produtos</a></li>
                <li class="nav-item"><a href="doacoes.php" class="nav-link" >Doações</a></li>
                <li class="nav-item"><a href="materias.php" class="nav-link" >Matérias</a></li>
                <li class="nav-item"><a href="fale-conosco.php" class="nav-link" >Fale Conosco</a></li>
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
                <li class="nav-item"><a href="../index.php" class="nav-link" >Inicio</a></li>
                <li class="nav-item"><a href="voluntarios.php" class="nav-link" >Voluntários</a></li>
                <li class="nav-item"><a href="resgates.php" class="nav-link" >Resgates</a></li>
                <li class="nav-item"><a href="acoes.php" class="nav-link" >Acões</a></li>
                <li class="nav-item"><a href="produtos.php" class="nav-link" >Produtos</a></li>
                <li class="nav-item"><a href="doacoes.php" class="nav-link" >Doações</a></li>
                <li class="nav-item"><a href="materias.php" class="nav-link" >Matérias</a></li>
                <li class="nav-item"><a href="fale-conosco.php" class="nav-link" >Fale Conosco</a></li>
        </ul>
    </div>

    <div id="container">
            <h2 id="subtitle1">Caminhada pelo Mato do Júlio - 2020</h2>
            <img class="img-voluntarios" src="../imagens/caminhada1.jpg" alt="coletivomato" title="Voluntarios">
            <img class="img-voluntarios" src="../imagens/caminhada2.jpg" alt="coletivomato" title="Voluntarios">
            <img class="img-voluntarios" src="../imagens/caminhada3.jpg" alt="coletivomato" title="Voluntarios">
            <img class="img-voluntarios" src="../imagens/documento.jpg" alt="coletivomato" title="Voluntarios">
            <h2 id="subtitle1">O que fazemos?</h2>
                <p>-> Busca pelo aprimoramento da legislação ambiental domunicípio; </p>
                <p>-> Doações de alimentos e agasalhos parafamílias carentes; </p>
                <p>-> Registros de atropelamentos no entorno do Mato. </p>
             
        </div>

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


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	 
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
<!--links css--->
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
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

        <form class="card" action="../script_php/verificarLogin.php" method="POST">
            
            <div class="input" id="validarInput">
                <label for="email">Usuário</label>
                <input class="input1" type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
            </div>

            <div class="input">
                <label for="senha">Senha</label>
                <input class="input1" type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="resetarSenha">
                Esqueceu sua senha? <span><a>Clique aqui!</a></span>
            </div>

            <div class="cont-botao">
                <button type="submit" class="botao" name="entrar" > Entrar </button>
            </div>

            <a id="botao-back" href="../index.php">Retornar</a>

        </form>

       
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
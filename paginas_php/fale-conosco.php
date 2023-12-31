<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Fale Conosco</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/favicon/icon_favicon.ico">
<!--link css--->
	<link rel="stylesheet" type="text/css" href="../css/fale-conosco.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css"> 
    <link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<!--import font--->
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

    <div id="formulario">
        <form action="../script_php/processa.php" method="post"><!--ENVIAR PARA O ARQUIVO dados.php method="post"-->
                <div class="container-txt">
                        <h1 id="about">Fale Conosco</h1>
                        <h2 id="text">Deixe sua mensagem que entraremos em contato</h2>
                </div>
        
            <fieldset>
                    <fieldset class="bloco">
                        <div class="dados">
                        <label>Nome Completo: </label>
                        <label>
                            <input type="text" name="nome" placeholder="Nome" maxlength="55" minlength="3" required>
                    </label>
                        </div>
                    </fieldset>
                    <fieldset class="bloco">
                        <div class="dados">
                        <label>Email: </label>
                        <input type="email" name="email" placeholder="exemplo@dominio.com" maxlength="55" minlength="10" required>
                    </label>
                        </div>
                    </fieldset>
                    <fieldset class="bloco">
                        <div class="dados">
                        <label>Telefone: </label>
                        <input type="text" name="telefone" placeholder="(xx)xxxxxxxxx" maxlength="11" minlength="11" required>
                    </label>
                        </div>
                    </fieldset>
                    <fieldset class="bloco">
                        <div class="dados">
                        <label>Assunto: </label>
                        <select name="assunto" id="assunto" required>
                                <option selected="" value="" disabled selected>-- Selecione o Assunto --</option>
                                <option value="Duvidas">Duvidas</option>
                                <option value="Sugestao">Sugestões</option>
                                <option value="Denuncia">Denuncia</option>
                        </select>
                    </label>
                        </div>
                    </fieldset>
                    <fieldset class="bloco">
                        <div class="dados">
                        <label>Mensagem: 
                        <textarea name="msg" id="msg" cols="30" rows="10" required></textarea>
                    </label>
                    </div>
                    <div class="area-botao">
                    <input type="submit" value="ENVIAR" name="enviar" id="botaoform">
                    </div>
                    </fieldset>
            </fieldset>
        </form>
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
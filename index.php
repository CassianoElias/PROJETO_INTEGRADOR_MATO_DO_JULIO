<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mato do Julio</title>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 	
	<link rel="shortcut icon" type="image/x-icon" href="./imagens/favicon/icon_favicon.ico">

	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/scrollbar.css"> 
    <link rel="stylesheet" type="text/css" href="./css/header.css">

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
        <div id="cabecalho">
                <div id="header-up">
                    <div id="cont-ramo">
                        <img id="ramo" src="./imagens/ramo.png" alt="">
                    </div>
                        <h1 id="title">MATO DO JULIO</h1>
                </div>
                <div id="logo-bixos">
                    <img id="img-bixo" src="./imagens/bixos-logo.png" alt="">
                </div>
        </div>       
              
        </header>
	<nav class="nav-bar">
        <div class="nav-list" id="menu">
            <ul>
                <li class="nav-item"><a href="index.php" class="nav-link" >Inicio</a></li>
                <li class="nav-item"><a href="./paginas_php/voluntarios.php" class="nav-link" >Voluntários</a></li>
                <li class="nav-item"><a href="./paginas_php/resgates.php" class="nav-link" >Resgates</a></li>
                <li class="nav-item"><a href="./paginas_php/acoes.php" class="nav-link" >Acões</a></li>
                <li class="nav-item"><a href="./paginas_php/produtos.php" class="nav-link" >Produtos</a></li>
                <li class="nav-item"><a href="./paginas_php/doacoes.php" class="nav-link" >Doações</a></li>
                <li class="nav-item"><a href="./paginas_php/materias.php" class="nav-link" >Matérias</a></li>
                <li class="nav-item"><a href="./paginas_php/fale-conosco.php" class="nav-link" >Fale Conosco</a></li>
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
                <li class="nav-item"><a href="index.php" class="nav-link" >Inicio</a></li>
                <li class="nav-item"><a href="./paginas_php/voluntarios.php" class="nav-link" >Voluntários</a></li>
                <li class="nav-item"><a href="./paginas_php/resgates.php" class="nav-link" >Resgates</a></li>
                <li class="nav-item"><a href="./paginas_php/acoes.php" class="nav-link" >Acões</a></li>
                <li class="nav-item"><a href="./paginas_php/produtos.php" class="nav-link" >Produtos</a></li>
                <li class="nav-item"><a href="./paginas_php/doacoes.php" class="nav-link" >Doações</a></li>
                <li class="nav-item"><a href="./paginas_php/materias.php" class="nav-link" >Matérias</a></li>
                <li class="nav-item"><a href="./paginas_php/fale-conosco.php" class="nav-link" >Fale Conosco</a></li>
            </ul>
    </div>
    <div>
        <div id="container">
            <h2 id="about">Quem somos</h2>
                <div id="box">
                    <p id="p1"> O coletivo Mato do Júlio é composto por
                                pessoas que defendem a área da
                                especulação imobiliária e política.
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;Nosso objetivo é conseguir a
                                preservação total da área, protegendo
                                toda fauna e flora que ali habitam, seu
                                material histórico e cultural.
                    </p>
            <img class="imgindex" src="./imagens/img1.jpg" alt="coletivomato" title="Voluntarios">
        </div>
                
        </div>
            <div id="container">
                <h2 id="about">O que é</h2>
                    <div id="box">
                        <p id="p1">O Mato do Júlio é composto por
                                    uma área de 256 hectares,
                                    localizado no município de
                                    Cachoeirinha - RS <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;Nele encontramos predomínio do
                                    bioma Mata Atlântica e resquícios
                                    do bioma Pampa.
                        </p>
                            <img class="imgindex" src="./imagens/mapa.jpg" alt="mapa" title="Imagem Satelite">
        </div>
                
            <div id="local">
                    <p id="txtlocal">📌 confira no mapa a sua localização 📌 </p>
                <p id="pmap"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.987477178751!2d-51.090342825056204!3d-29.951038826950136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519739b836ec6c9%3A0x577ee2bf4fe5b3f9!2sMato%20do%20J%C3%BAlio!5e0!3m2!1spt-BR!2sbr!4v1694527002879!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p> 
            </div>
        </div>
    </div>
    <div id="container3">
            <h2>Qual a sua importancia?</h2>
            <div id="importancia">
                <div id="historica">
                    
                    <h3>Histórica</h3>
                    <a href="#anc1"><img class="img-imp" src="./imagens/img2.jpg" alt=""></a>
                </div>

                <div id="biologica">
                
                    <h3>Biológica</h3>
                    <a href="#anc2"><img class="img-imp"  src="./imagens/img3.jpg" alt=""></a>
                </div>

                <div id="geografica">
                    
                    <h3>Geográfica</h3>
                    <a href="#anc3"><img class="img-imp"  src="./imagens/img4.jpg" alt=""></a>
                </div>
            
            
            </div><!--FIM DA DIV QUAL A SUA IMPORTANCIA-->
        <div id="conteudo-historica">
            <h2 id="anc1">Histórica</h2>
                <div id="conteudopt1">
                    <img class="imghouse" src="./imagens/img5.jpg" alt=""></p>
                    <p>A casa dos Baptistas foi construída em
                        torno de 1815 por João Baptista Soares,
                        nativo da ilha de São Jorge nos Açores.
                        A casa possui uma arquitetura colonial com
                        senzala fixada na casa grande.
                    
                </div>
                <div id="conteudopt2">
                        <p>No dia 23 de março do ano de
                            2022, após anos de pressão por
                            parte da população e justiça, a
                            Casa dos Baptistas foi tombada.
                            A partir disso considera-se
                            patrimônio histórico de
                            Cachoerinha uma das casas mais
                            antigas do Rio Grande do Sul
                        </p>
                        <img class="imghouse" src="./imagens/img6.jpg" alt="">
                </div>
        </div><!--fim da div conteudo-historica-->
        <div id="conteudo-biologica">
            <h2 id="anc2">Biológica</h2>
                <div id="conteudopt1">
                    <img class="imgbixo" src="./imagens/img7.jpg" alt="">
                    <p>O mato do Júlio é rico em
                        biodiversidade, dentro dessa
                        área encontramos: nascentes,
                        arroio, açudes, banhados, além
                        de possuir abundância em
                        fauna e flora
                        </p>
                </div>
                <br>
                <img class="imgbixo" src="./imagens/img8.jpg" alt="">
                <div id="conteudopt2">
                
                    <p>A área é ideal para espécies que estão
                        ameaçadas de extinção.
                        O bugio-ruivo já foi avistado por
                        moradores do entorno do Mato do Júlio
                        anos atrás, mas devido a urbanização e
                        caça hoje não habitam mais a área.
                    </p>
                        
                </div>        
                    
                    <div id="itens-biologica2">
                        <img class="imgbixo" src="./imagens/img9.jpg" alt="">
                        <p class="nomebixo">Besourinho</p>
                        <p class="nomebixo">Gaviçao-carijó</p>
                        <img class="imgbixo" src="./imagens/img10.jpg" alt="">
                        <img class="imgbixo" src="./imagens/img11.jpg" alt="">
                        <p class="nomebixo">Pica-Pau do-Campo</p>
                        <p class="nomebixo">Preá</p>
                        <img class="imgbixo" src="./imagens/img12.jpg" alt="">
                        <img class="imgbixo" src="./imagens/img13.jpg" alt="">
                        <p class="nomebixo">Tatu-mulita</p>
                        <p class="nomebixo">Lagarto Teiú</p>
                        <img class="imgbixo" src="./imagens/img14.jpg" alt="">
                    </div>


                    <div id="itens-biologica2-mobile">
                        <img class="imgbixo" src="./imagens/img9.jpg" alt="">
                        <p class="nomebixo">Besourinho</p>
                        <img class="imgbixo" src="./imagens/img10.jpg" alt="">
                        <p class="nomebixo">Gaviçao-carijó</p>
                        <img class="imgbixo" src="./imagens/img11.jpg" alt="">
                        <p class="nomebixo">Pica-Pau do-Campo</p>
                        <img class="imgbixo" src="./imagens/img12.jpg" alt="">
                        <p class="nomebixo">Preá</p>
                        <img class="imgbixo" src="./imagens/img13.jpg" alt="">
                        <p class="nomebixo">Tatu-mulita</p>
                        <img class="imgbixo" src="./imagens/img14.jpg" alt="">
                        <p class="nomebixo">Lagarto Teiú</p>
                        
                    </div>
                    <div id="cont-final">
                        <h2>Serviços ecossistêmicos</h2>
                        <p>Principais serviços ecossistêmicos que o Mato do Julio nos proporciona</p>
                    <ul>
                            <li>Regulação do clima</li>
                            <li>Qualidade do ar</li>
                            <li>Polinização</li>
                            <li>Regulação do fluxo de água, controle de secas e inundações</li>
                            <li>Controle de pragas e controle de doenças</li>
                            <li>Controle da erosão e manutenção da fertilidade do solo</li>
                            <li>Controle de desastres naturais</li>
                    </ul>
                    </div>
                        
                    
                        </div>
        </div> <!--FIM DA DIV IMPORTANCIA BIOLOGICA-->

        <div id="cont-geografica">
            <h2 id="anc3">Geográfica</h2>
                <div>
                    <p>A área funciona como um
                    grande sistema de drenagem
                    responsável pela retenção da
                    água da chuva que se converte
                    enriquecendo a biodiversidade
                    do local, sendo o seu banhado
                    um dos afluentes do Rio
                    Gravataí.
                    </p>
                    <img id="mapa-fluvial" src="./imagens/analise_drenagem.jpg" alt=""> 
                    <p>As cidades de Cachoeirinha e Gravataí
                        foram construídas em uma região de
                        ‘’várzea’’
                        , ou ‘’banhado’’
                        . Ou seja, foram
                        construídas em terrenos baixos, e
                        sujeitos a inundações.</p>
                        <div id="cont-geografica3">
                    <img class="imggeo2" src="./imagens/alagamento1.jpg" alt="">
                    <img class="imggeo2" src="./imagens/alagamento2.jpg" alt="">
                        </div>
                    
                </div>
        </div>
        

    </div> <!--FIM DA DIV CONTAINER3-->
    </body>
      
    
    <footer>   
        <div id="footer_content">
            <div id="footer-bixo">
            <img id="img-footer" src="./imagens/footer.png" alt="">
            </div>
                <div id="footer_social_media">
                    
                    <a href="https://www.instagram.com/matodojulio/" class="social" alt="Instagram" >
                    <img class="imgrede" src="./imagens/redes/logo_insta.png" alt="instagram" title="Instagram"></a>
                    
                    <a href="https://www.facebook.com/matodojulio/" class="social alt="Facebook" >
                    <img class="imgrede" src="./imagens/redes/logo_face.png" alt="Facebook"  title="Facebook"></a>

                    <a href="https://twitter.com/MatoDoJulio" class="social" alt="Twitter" title="Twitter" >
                    <img class="imgrede" src="./imagens/redes/logo_twitter.png" alt="Twitter" title="Twitter"></a>
                            
                    <a href="https://www.youtube.com/@matodojulio" class="social" alt="Youtube" >
                    <img class="imgrede" src="./imagens/redes/logo_youtube.png" alt="Youtube" title="Youtube"></a>	
                </div>
            
        </div>
        <div id="footer_copyright" >
            &#169
            2023 all rights reserved <a href="https://github.com/CassianoElias"> <img class="imggithub" src="./imagens/redes/github_black.png" alt="github"> </a>
            <a href="./paginas_php/login.php">Area do Administrador</a>
        </div>
    </footer>
</html>
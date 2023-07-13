<?php $produto = $_GET['name']; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<meta name="theme-color" content="#000">
	<meta name="author" content="MobSpot Soluções Web">

	<title>Newloc</title>

	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script> var exports = {}; </script>

	<meta name='robots' content='max-image-preview:large' />
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minae48.css?ver=6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.minae48.css?ver=6.2' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
    :where(.wp-block-columns.is-layout-flex){gap: 2em;}
    .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
    </style>
</head>

<style>
    .cardEvento ul{
        font-size: 1.2rem!important;
        font-weight: 200!important;
    }
    .cardEsquerda ul{
        text-align: left!important; 
        line-height: 30px; 
        color:white;
    }

    #sobreEvento{
        margin-top:80px;
    }
    @media screen and (min-width: 1024px){
        .imgs-bg img{
            object-fit: fill!important;
        }
    }
    @media screen and (max-width: 765px){
        #sobreEvento{
            margin-top:0px;
            padding:0;
        }
    }
</style>

<body class="home page-template-default page page-id-8">
	
	<a href="https://api.whatsapp.com/send?phone=5511981349241" style="position:fixed; bottom:55px; right:55px; z-index: 1000;" target="_blank">
		<img src="./assets/zap-ico.png" style="width:60px; height:60px;"/>
	</a>
    
<main id="etapa">
    
    <header id="header" class="header-block">
        <div class="container">
            <input type="checkbox" id="burguer-menu">
            <label for="burguer-menu">
                <span></span>
            </label>
                    <div class="logo">
                <a href="index.html">
                                    <div class="img-logo">
                        <img src="assets/newloc-logotipo.png" class="hidden-xs">
                        <img src="assets/newloc-logotipo.png" class="hidden-lg">
                    </div>
                </a>
                <div class="infos">
                    <div class="cidade hidden-xs"><span></div>
                    <div class="cont">
                        <div class="distancias"></div>
                        <div class="data"></div>
                    </div>
                </div>
                
            </div>
            <input type="checkbox" id="close-header">
            <label for="close-header" class="alterar-cidade hidden-lg hidden-xs">
                <img src="#" data-svg="icon_fechar.svg" alt="Fechar Modal" class="svg">
            </label>
            <nav>
                <label for="burguer-menu">
                    <span class="bg"></span>
                </label>
                <div class="menu"><a href="https://www.newlocequipamentos.com.br" >Início</a>
                                <a href="https://www.newlocequipamentos.com.br/produtos.html" >Produtos</a>
                                <a href="#" >Empresa</a>
                                <a href="https://www.newlocequipamentos.com.br/contato.html" >Contato</a>
                                <hr class="hidden-xs">
                </div>
            </nav>
        </div>

        
    </header>

    <script>
        var url = "https://www.newlocequipamentos.com.br"
        fetch('singleProdutos.json')
            .then(response => response.json())
            .then(data => {
                const produtosLista = document.getElementById('sobreEvento');
                for (let i = 0; i< data.length; i++) {
                    const prod = data[i];

                    if(prod.imagem == "<?php echo $produto; ?>"){
                        
                        const div1 = document.createElement('div');
                        div1.classList.add('containerSobre');
                        div1.innerHTML = "<div class='container'>" +
                                                "<h1>"+prod.produto+"</h1>" +
                                                "<div class='sobre esquerda'>" +
                                                    "<div class='imgs-bg'>" +
                                                        "<img src='"+url+"/produtos/"+prod.imagem+"'>" +
                                                        "<div class='boxLaranja'></div>" +
                                                    "</div>" +
                                                    "<div class='cardEvento cardEsquerda'>" +
                                                        "<p>"+prod.descricao+"</p>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</div>"
                
                        produtosLista.appendChild(div1);

                    }
                }})
            .catch(error => console.error(error));
    
    </script>

    
    <section id="sobreEvento"></section>

    <section id="slider-infos">
        <div class="bg">
                            </div>
        <h1 class="hidden-xs">Outros Produtos</h1>
        <div class="container">
            <div class="info-titulo-mobile hidden-lg">
                <h2>Nossos Produtos</h2>
                <img src="#">
            </div>
                                        <div class="info">
                <img src="produtos/compressor-de-pintura-140lbs.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Compressor de Pintura 140Lbs</h3> -->
                <div class="hover">
                    <h3>Compressor de Pintura 140Lbs</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/motor-vibrador-a-gasolina.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Motor Vibrador a Gasolina</h3> -->
                <div class="hover">
                    <h3>Motor Vibrador a Gasolina</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/compressor-pneumatico-92-pcm.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Compressor Pneumático 92 PCM</h3> -->
                <div class="hover">
                    <h3>Compressor Pneumático 92 PCM</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/serra-circular-7.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Serra Circular 7”</h3> -->
                <div class="hover">
                    <h3>Serra Circular 7”</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/serra-marmore.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">SERRA MARMORE</h3> -->
                <div class="hover">
                    <h3>SERRA MARMORE</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/furadeira-e-parafusadeira-eletrica.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">KIT FURADEIRA </h3> -->
                <div class="hover">
                    <h3>KIT FURADEIRA </h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/misturador-de-argamassa.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Compressor de Pintura 175Lbs</h3> -->
                <div class="hover">
                    <h3>Compressor de Pintura 175Lbs</h3>
                                        </div>
            </div>
                                        <div class="info">
                <img src="produtos/compressor-de-pintura-175lbs.jpg" alt="Background Info" class="bg">
                <!-- <h3 class="hidden-xs">Misturador de Argamassa</h3> -->
                <div class="hover">
                    <h3>Misturador de Argamassa</h3>
                                        </div>
            </div>
                    <a class="hidden-lg" href="#" target="_blank" rel="noopener noreferrer">Veja Mais</a>
        </div>
            <a class="hidden-xs" href="#" target="_blank" rel="noopener noreferrer">Veja Mais</a>

    </section>

    <section id="percurso" class="percursos padding-section-menor">
        
        <input type="checkbox" id="abreCardPercurso" class="card">
        <label for="abreCardPercurso">
            <span class="card-link mobile-cards" data-card="percurso">
                <div class="figure">
                    <img src="#" data-svg="" alt="Percurso/Recorrido" class="svg">
                </div>
                <h2>COMO CHEGAR</h2>
            </span>
        </label>
        
        <div class="card-content" data-card="percurso">

            <header class="header-section">
                <div class="titulos">
                    <h1>COMO CHEGAR</h1>
                </div>
            </header>
            
            <div class="navigation">
                    <a href="https://goo.gl/maps/kQJeHRwH9aGPDBMu7" target="_blank" rel="noopener noreferrer">Google Maps</a>
                    <a href="https://goo.gl/maps/kQJeHRwH9aGPDBMu7" target="_blank" rel="noopener noreferrer">Waze</a>
            </div>

            <div class="iframes">

                <input type="checkbox" id="acessaPercurso">

                <div class="percursos">
                    
                    <div class="iframe">
                        <div>
                            <input type="checkbox" id="shadow-iframe" checked>
                            <label for="shadow-iframe" class="shadow-iframe">
                                <span>
                                    <!-- <img src="" data-svg="" alt="Pointer" class="svg"> -->
                                    <span>Clique para ativar o mapa</span>
                                </span>
                            </label>
                            <iframe id="percurso-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.2127632681986!2d-46.823283!3d-23.6325503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce54b57e9e9341%3A0x110a95ace6a3eb8b!2sR.%20Ubirajara%20Oct%C3%A1vio%20de%20Oliveira%2C%20281%20-%20Parque%20Jane%2C%20Embu%20das%20Artes%20-%20SP%2C%2006810-240!5e0!3m2!1sen!2sbr!4v1683035332097!5m2!1sen!2sbr"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #percurso .card-link{  }
            #percurso .card-content .imagem-breve{  }
        </style>
    </section>

    <section id="footer-basico">

        <div class="container">
            
            <div class="logoTexto">
                <img src="assets/newloc-logotipo.png" alt="Logo Evento">
                <p>É com grande satisfação que apresentamos a Newloc, uma empresa dedicada à locação de máquinas e equipamentos para a construção civil. Com anos de experiência no mercado, nossa equipe está comprometida em oferecer soluções sob medida para os desafios do setor da construção, auxiliando nossos clientes a atingirem seus objetivos de maneira eficiente e econômica.</p>
            </div>

            <div class="news">
                <h4>Encontre-nos nas redes socias</h4>
                <ul>
                                                                                                                                                                                                                                                                                                                                                                                        </ul>
            </div>

            <div class="links">
                <ul>
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                </ul>
            </div>

        </div>


    </section>

    <footer id="footer">
        <div class="logos">
            <img src="assets/newloc-logotipo-1.png">
        </div>
        <div class="box-descricao">
            <p>© 2023 NEWLOC LOCAÇÃO DE EQUIPAMENTOS | Design by <a href="https://www.mobspot.com.br/" target="_blank">MobSpot</a></p>
        </div>
    </footer>

</main>

<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
<script type="text/javascript" src="js/libs/libs.min.js"></script>
<script type="text/javascript" src="js/scripts.min.js"></script>

</body>
</html>
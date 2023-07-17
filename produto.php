<?php $produto = $_GET['name']; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php include('header.html');?>
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
    
<?php include('menu.html');?>


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
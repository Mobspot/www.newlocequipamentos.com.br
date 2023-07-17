<!DOCTYPE html>
<html lang="pt-BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<?php include('header.html');?>
</head>
<style>
    .cardEvento p{
        font-size: 1.2rem!important;
        font-weight: 200!important;
    }
    .cardEsquerda p{
        text-align: left!important;  
    }
    .cardDireita p{
        text-align: right!important;
        justify-content: right;
    }
    .cardDireita{
        text-align: right!important;
        justify-content: start;
        align-items: flex-end;
    }
    .vermais{
        margin-top:30px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        width: 214px;
        height: 65px;
        border-radius: 54px;
        text-align: center;
        font-family: Kanit,sans-serif;
        font-size: 18px;
        line-height: 77px;
        font-weight: 700;
        letter-spacing: 0;
        color: #fff;
        background: #38b6ff;
        box-shadow: 0 3px 0 1px #192957;
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
<body class="page-template-default page page-id-141">
	
	<a href="https://api.whatsapp.com/send?phone=5511981349241" style="position:fixed; bottom:55px; right:55px; z-index: 1000;" target="_blank">
		<img src="assets/zap-ico.png" style="width:60px; height:60px;"/>
	</a><main id="etapa">

    <!-- Definir a ordem dos módulos -->
    
    <?php include('menu.html');?>


    <section id="banner" class="">
        <div class="bgWrapper">
            <div class="mobile">
                                    <img src="assets/banner-produtos-mobile.png" alt="Background">
                            </div>
            <div class="hd">
                                    <img src="assets/banner-produtos-desk.png" alt="Background">
                            </div>
        </div>

        <div class="container">
            <div class="content-wrapper">
                <div class="title-wrapper">
                    <img src="#" class="banner-logo" alt="">
                </div>
                <p class="text"></p>
				
                <img src="#" alt="" class="ministry-logo">
            </div>
        </div>
        
    </section>

    <script>
        var url = "https://www.newlocequipamentos.com.br"
        fetch('produtos.json')
            .then(response => response.json())
            .then(data => {
                const produtosLista = document.getElementById('sobreEvento');
    
                for (let i = 0; i< data.length; i += 2) {
                    const prod1 = data[i];
                    const prod2 = data[i + 1];

                    const div1 = document.createElement('div');
                    div1.classList.add('containerSobre');
                    div1.innerHTML = "<div class='container'>" +
                                            "<h1>"+prod1.produto+"</h1>" +
                                            "<div class='sobre esquerda'>" +
                                                "<div class='imgs-bg'>" +
                                                    "<img src='"+url+"/produtos/"+prod1.imagem+"'>" +
                                                    "<div class='boxLaranja'></div>" +
                                                "</div>" +
                                                "<div class='cardEvento cardEsquerda'>" +
                                                    "<p>"+prod1.descricao+"</p>"+
                                                    "<div class='vermais'>" +
                                                        "<a href='"+url+"/produto.php?name="+prod1.imagem+"'>"+" VEJA MAIS" +"</a>" +
                                                    "</div>" +
                                                "</div>"+
                                            "</div>"+
                                            
                                        "</div>"
                    
                    const div2 = document.createElement('div');
                    div2.classList.add('containerSobre');
                    div2.classList.add('direita')
                    div2.innerHTML = "<div class='container'>" +
                                            "<h1>"+prod2.produto+"</h1>" +
                                            "<div class='sobre'>" +
                                                "<div class='imgs-bg'>" +
                                                    "<img src='"+url+"/produtos/"+prod2.imagem+"'>" +
                                                    "<div class='boxLaranja'></div>" +
                                                "</div>" +
                                                "<div class='cardEvento cardDireita'>" +
                                                    "<p>"+prod2.descricao+"</p>"+
                                                    "<div class='vermais'>" +
                                                        "<a href='"+url+"/produto.php?name="+prod2.imagem+"'>"+" VEJA MAIS" +"</a>" +
                                                    "</div>" +
                                                "</div>"+
                                            "</div>"+
                                        "</div>"

                    produtosLista.appendChild(div1);
                    produtosLista.appendChild(div2);

                }})
            .catch(error => console.error(error));
    
    </script>

    <section id="sobreEvento"></section>

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

<script type="text/javascript" src="js/libs/libs.min.js"></script>
<script type="text/javascript" src="js/scripts.min.js"></script>

</body>
</html>
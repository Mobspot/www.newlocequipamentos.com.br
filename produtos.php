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

    <?php include('footer.html');?>
    
</main>

<script type="text/javascript" src="js/libs/libs.min.js"></script>
<script type="text/javascript" src="js/scripts.min.js"></script>

</body>
</html>
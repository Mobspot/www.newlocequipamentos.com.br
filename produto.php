<?php $produto = $_GET['name']; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php include('header.html');?>
</head>

<style>
    .cardEvento ul, p{
        font-size: 1.2rem!important;
        font-weight: 200!important;
        padding-bottom: 20px;
    }

    .cardEsquerda ul, p{
        text-align: left!important; 
        line-height: 30px; 
        color:white;
    }

    #sobreEvento{
        margin-top:80px;
    }
    .imgs-bg img{
            object-fit: contain!important;
            background-color: white!important;
        }
    @media screen and (min-width: 1024px){
        .imgs-bg img{
            object-fit: contain!important;
            background-color: white!important;
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

    <?php include('resumeProdutos.php');?>

    <?php include('footer.html');?>

</main>

<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
<script type="text/javascript" src="js/libs/libs.min.js"></script>
<script type="text/javascript" src="js/scripts.min.js"></script>

</body>
</html>
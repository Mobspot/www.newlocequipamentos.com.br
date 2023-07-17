<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include('header.html');?>
  </head>
<style>
  #headerContato{
    display: flex;
    flex-direction: column;
    align-items: center;
    width:100%;
    height: 500px;
    margin-top:200px;
  }
  #headerContato div p{
    font-size: 30px;
    font-weight: 600;
    color:#192957;
    font-family: kanit, sans-serif;
    margin-bottom: 120px;
  }
  #contatoRedes{
    width: 80%;
    text-align: center;
    display:flex;
    justify-content: space-around;
  }
  #contatoRedes img{
    width: 200px;
  }

  @media (max-width: 786px) {
    #headerContato{
      margin-top:50px;
      height: 1024px;
  }
  #headerContato div p{
    margin-bottom: 100px;
  }
  #contatoRedes{
    width: 100%;
    text-align: center;
    display:flex;
    flex-direction: column;
  }
  #contatoRedes img{
    width: 180px;
    margin-bottom: 40px;
  }
}

</style>
<body class="home page-template-default page page-id-8">

    
<?php include('menu.html');?>


<secition id="headerContato">
  <div><p>CONTATO</p></div>
  <div id="contatoRedes">
    <a href="https://www.facebook.com/p/NewLoc-Equipamentos-100063627923138/?locale=hi_IN" target="_blank">
      <img src="assets/face.png">
    </a>
    <a href="https://www.instagram.com/p/CC5mnYllBX7/" target="_blank">
      <img src="assets/insta.png">
    </a>
    <a href="mailto:contato@newlocequipamentos.com.br?subject=Contato Site&body=Olá, gostaria de um orçamento para...">
      <img src="assets/email.png">
    </a>
    <a href="https://api.whatsapp.com/send?phone=5511981349241" target="_blank">
      <img src="assets/zap.png">
    </a>
  </div>
</secition>

 
<section id="percurso" class="percursos padding-section-menor">
    
  <input type="checkbox" id="abreCardPercurso" class="card">
  <label for="abreCardPercurso">
      <span class="card-link mobile-cards" data-card="percurso">
          <!-- <div class="figure">
              <img src="#" data-svg="https://newlocequipamentos.com.br/wp-content/uploads/2023/06/1093169.svg" class="svg">
          </div> -->
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
<script type="text/javascript" src="wp-content/themes/hotsites-2020/js/libs/libs.min.js"></script>
<script type="text/javascript" src="wp-content/themes/hotsites-2020/js/scripts.min.js"></script>
<script type="text/javascript">
    if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent))
        document.write('<script type="text\/javascript" src="wp-content/themes/hotsites-2020/index.html\/js\/ie\/scripts-ie.min.js"><\/script>');
</script>

</body>
</html>
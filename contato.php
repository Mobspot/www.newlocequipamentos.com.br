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
    <a href="https://www.facebook.com/p/NewLoc-Equipamentos-100063627923138" target="_blank">
      <img src="assets/face.png">
    </a>
    <a href="https://www.instagram.com/p/CC5mnYllBX7/" target="_blank">
      <img src="assets/insta.png">
    </a>
    <a href="mailto:gerencia@newlocequipamentos.com.br?subject=Contato Site&body=Olá, gostaria de um orçamento para...">
      <img src="assets/email.png">
    </a>
    <a href="https://api.whatsapp.com/send?phone=5511981349241" target="_blank">
      <img src="assets/zap.png">
    </a>
  </div>
</secition>

 
<?php include('footer.html');?>
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
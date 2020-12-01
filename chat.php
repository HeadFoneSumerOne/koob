<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/17f610ec47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Koob - Chat</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2b385b">
        <div class= "container">
            <a class="navbar-brand h1 mb-2" href="index.php">Koob</a>
            <button class="navbar-toggler" type="buttom" data-toggle="collapse" data-target="#navbarSite">
                <spam class="navbar-toggler-icon"></spam>
            </button>

        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="acervo.php">Acervo</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link" href="chat.php">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biblioteca.php">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nos.php">Sobre nós</a>
                </li>
            </ul>

        </div>
    </div>
    </nav>
  <?php
      include("config.php");
      if(isset($_SESSION['login'])){
        if($_SESSION['login']){
  ?>
      
      <section>
        <div class="container">
         <div class="row">
           <div class="col-md-4">
            <div class="chat-list-box">
            <div class="head-box">
              <ul class="list-inline text-left d-inline-block float-left">
                <li> <img src="./imagens/us.png" alt="" width="40px">
                <span class="text-white ml-1"><strong><?php
                echo $_SESSION['nome']
                ?> </strong></span>
                </li>
              </ul>
              </div>
          
              <div class="chat-person-list">
                <ul class="list-inline"> 
                  <li> <a href="#" class="flip"> <img src="./imagens/bi.png" alt=""> <span><strong> Bibliotecária</strong></span></a> 
                  </li> 
                </ul>
              </div>
              
            </div>
           </div>
           
           <div class="col-md-8">
             <div class="message-box">
               <div class="head-box-1">
               
                 <ul class="msg-box list-inline text-left d-inline-block float-left">
                  <li> <i class="fas fa-arrow-left" id="back"></i> </li> 
                    <li> <img src="./imagens/bi.png" alt="" width="50px"> <span> Bibliotecária </span> <br> </li> 
                 </ul>
              </div>
              
              <div class="msg_history">
             
              <div class="incoming_msg">
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p> Olá, <?php echo $_SESSION['nome']?></p>
                    <span class="time_date"> <?php echo date("H:i \- j\/m");?></span></div>
                </div>
              </div>
             </div>
             <div class="send-message">
                <textarea cols="10" rows="2" class="form-control" placeholder="Digite sua mensagem aqui e clique no aviãozinho para enviar..." id="texto-chat"></textarea>
                 <ul class="list-inline">  
                   <li id="mandar"> <i class="fas fa-paper-plane"></i> </li>
                 </ul>
             </div>
           </div>
           
         </div>
        </div>
      </section>
      <br>
  <hr>

      <div class="row col-lg-12 justify-content-center " style="background-color: #efeff1">
      <div class="col-sm-3 ml-5 mt-3 mb-5">
          <h3> Contatos:</h3>
          <p><i class="far fa-envelope"></i> koob.tcc@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Av.cruzeiro do Sul 2630 Prédio I - Santana</p>

      </div>

      <div class="col-sm-3 ml-5 mt-3">
          <h3>Redes sociais:</h3>
          <div class="social-networks">
                          <a href="https://www.facebook.com/Koob-100708925223834" class="facebook"><i class="fab fa-facebook-f"></i></a>
                          <a href="https://www.instagram.com/koob.tcc/" class="instagram"><i class="fab fa-instagram"></i></a>
           </div>
      </div>

      <div class="col-sm-3 ml-5 mt-3 mb-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6614703091745!2d-46.62612668502325!3d-23.508699984709043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5882587e8607%3A0xa4cbaa38551a68e4!2sEtec%20Parque%20da%20Juventude!5e0!3m2!1spt-BR!2sbr!4v1599540369961!5m2!1spt-BR!2sbr" width="250" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>
<?php
        }
      } else {
  ?>
      <div>
        <div class="container">
          <div class="row justify-content-center">
             <div class="col-8 text-center mt-5">
              <h4 class="display-4"> Ops! Parece que você não está logade. <a href="login.php">Entre</a> para ter acesso ao chat :)</h4>
             </div>
          </div>
        </div>
       </div>
  <?php
      }
    ?>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    
    <script>
      $("#attach").click(function(){
          $(".attachement").toggle();
        });
    </script>
    <script>
      $("#dset").click(function(){
          $(".setting-drop").toggle('1000');
        });
    </script>
    
    <script>
    $(document).ready(function(){
    
    $('#mandar').click(function(){
      let mensagem = $('#texto-chat').val(),
          bloco = $('.msg_history'),
          html,
          data = new Date(),
          mes = data.getMonth() + 1



      html = '<div class="outgoing_msg"><div class="sent_msg"><p>' + mensagem + '</p><span class="time_date">'+data.getHours()+':'+data.getMinutes()+' | '+data.getDate()+'/'+mes+'</span></div></div>'
       $(bloco).append(html)
       $('#texto-chat').val('')
       setTimeout(function(){ 
        html = '<div class="incoming_msg"><div class="received_msg"><div class="received_withd_msg"><p>' + 'Responderei assim que possível :)' + '</p><span class="time_date">'+data.getHours()+':'+data.getMinutes()+' | '+data.getDate()+'/'+mes+'</span></div></div></div>'
        $(bloco).append(html)
      }, 3000);
    })
    $(".flip").click(function(){
        $(".message-box").show("slide", { direction: "right" }, 10000);

    });
    $("#back").click(function(){
        $(".message-box").hide("slide", { direction: "left" }, 10000);
    });
});
 </script>

  </body>
</html>

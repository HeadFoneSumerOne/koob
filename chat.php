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

    <title>Koob</title>
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

            <form class="form-inline">
                <input class="form-control ml-4 mr-1" type="search" placeholder="Busca">
                <button class="btn btn-muted" type="Submit"><span style="color: white">
                  <i class="fas fa-search"></i></span></button>
            </form>
        
        </div>
    </div>
    </nav>
    <section>
      <div class="container">
       <div class="row">
         <div class="col-md-4">
          <div class="chat-list-box">
          <div class="head-box">
            <ul class="list-inline text-left d-inline-block float-left">
              <li> <img src="https://i.ibb.co/fCzfFJw/person.jpg" alt="" width="40px"> </li> 
            </ul>
            </div>
        
            <div class="chat-person-list">
              <ul class="list-inline"> 
                <li> <a href="#" class="flip"> <img src="https://i.ibb.co/6JpcfrK/p4.png" alt=""> <span> Bibliotecária</span> <span class="chat-time">12:00 Am</span> </a> </li> 
              </ul>
            </div>
            
          </div>
         </div>
         
         <div class="col-md-8">
           <div class="message-box">
             <div class="head-box-1">
             
               <ul class="msg-box list-inline text-left d-inline-block float-left">
                <li> <i class="fas fa-arrow-left" id="back"></i> </li> 
                  <li> <img src="https://i.ibb.co/fCzfFJw/person.jpg" alt="" width="40px"> <span> Bibliotecária </span> <br> <small class="timee"> 12:45 Pm </small> </li> 
               </ul>
               
               
            </div>
            
            <div class="msg_history">
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p> Olá, boa tarde</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Olá, Fernando.</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p> Gostaria de saber da disponibilidade de um livro: o mistério da casa verde</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Esse estará disponível em uma semana.</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p> ok, obrigada! </p>
                <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p> Por nada!</p>
                  <span class="time_date"> 11:01 AM    |    Today</span></div>
              </div>
            </div>
          </div>
            
            <div class="send-message">
              <form action="" method="">
               <textarea cols="10" rows="2" class="form-control" placeholder="Type your message here ..."> </textarea>
                <ul class="list-inline"> 
                 <li>
                  <a href="#" id="attach">  <i class="fas fa-paperclip"></i> </a> 
                    <div class="attachement">
                      <ul class="list-inline"> 
                       <li> <a href="#"> <i class="fas fa-file"></i> </a> </li> 
                       <li> <a href="#"> <i class="fas fa-camera"></i> </a> </li> 
                       <li> <a href="#"> <i class="fas fa-image"></i> </a> </li> 
                       <li> <a href="#"> <i class="far fa-play-circle"></i> </a> </li> 
                       <li> <a href="#"> <i class="fas fa-map-marker-alt"></i> </a> </li> 
                       <li> <a href="#"> <i class="fas fa-id-card"></i> </a> </li> 
                      </ul>
                    </div> 
                  </li>   
                  <li> <i class="fas fa-paper-plane"></i> </li>
                </ul>
              </form>
            </div>
            
            
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
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
         </div>
    </div>

    <div class="col-sm-3 ml-5 mt-3 mb-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6614703091745!2d-46.62612668502325!3d-23.508699984709043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5882587e8607%3A0xa4cbaa38551a68e4!2sEtec%20Parque%20da%20Juventude!5e0!3m2!1spt-BR!2sbr!4v1599540369961!5m2!1spt-BR!2sbr" width="250" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
    
    
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
    $(".flip").click(function(){
        $(".message-box").show("slide", { direction: "right" }, 10000);
    });
});
 </script>
 <script>
    $(document).ready(function(){
    $("#back").click(function(){
        $(".message-box").hide("slide", { direction: "left" }, 10000);
    });
});
 </script>
  </body>
</html>
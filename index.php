<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/17f610ec47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Koob</title>
  </head>
 
  <body>
    <?php
      include("config.php");
      ob_start();
      if(isset($_GET['sair']))
        Cadastro::sair()
    ?>
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
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link text-danger" href="index.php?sair">Sair</a>
                </li>
            </ul>

        </div>
    </div>
    </nav>

     <div id="carouselSite" class="carousel slide my-2" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
             <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="./imagens/carkoob1.png" class="img-fluid d-block">
        </div>
        <div class="carousel-item">
                <img src="./imagens/carkoob2.png" class="img-fluid d-block">
        </div>
        <div class="carousel-item">
                <img src="./imagens/carkoob3.png" class="img-fluid d-block">
        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span> </a>

        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
     </div>
     </div>
     <br> <br>

     <div class="row justify-content-center mb-5 ml-auto mr-auto" id="home">
        <div class="col-sm-3">
            <a href="acervo.php">
            <div class="card">
                <i class="fas fa-book"></i>
                <div class="card-body">
                    <h4 class="card-title">Acervo</h4>
                    <p>Todos os titulos da biblioteca na palma da sua mão</p>
                </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="chat.php">
            <div class="card">
                <i class="fas fa-comment-dots"></i>
                <div class="card-body ">
                    <h4 class="card-title">Chat</h4>
                    <p>Fale com o bibliotecário e verifique a disponibilidade do livro</p>

                </div>
            </div>
        </a>
        </div>
        <div class="col-sm-3">
            <a href="biblioteca.php">
            <div class="card">
                <i class="fas fa-book-reader"></i>
                <div class="card-body">
                    <h4 class="card-title">Biblioteca</h4>
                    <p>Além dos livros conheça também um pouco mais da biblioteca hospedada</p>

                </div>
            </div>
        </a>
        </div>
    </div>
    <br>
    <hr>

    <div class="container" id="registro">
    <div class="row justify-content-center">
        <div class="col-8 text-center mb-5">
            <h3 class="display-4"> Faça um cadastro e converse com e bibliotecare da sua instituição.</h3>
        </div>
        </div>

    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <form method="post" action="">
                <?php
                if(isset($_POST['acao'])){
                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $novo = new Cadastro();
                    $novo->cadastrar($nome, $sobrenome,$email,$senha);
                }
                ?>
                <div class="form row">
                    <div class="form-group col-sm-6">
                        <label for="inputNome">Seu nome:</label>
                        <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" required>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="inputSobrenome"> Seu sobrenome:</label>
                        <input type="text" class="form-control" name="sobrenome" id="inputSobrenome" placeholder="Sobrenome" required>
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="inputEmail"> Seu Email:</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="inputSenha">Senha:</label>
                      <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha" required>
            
                </div>
                    <div class="form-row">
                        <div class="col-sm-12 ml-3">
                            <button type="submit" name="acao" class="btn btn-dark">Cadastre-se</button>
                            <span>Já tem cadastro? Faça <a href="login.php"> login</a></span>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    
</div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </body>
</html>

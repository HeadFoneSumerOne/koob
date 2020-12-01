<?php
    include("config.php");
    if(isset($_GET['cat'])){
        $campo = "genero";
        $categoria = $_GET['cat'];
        $busca = new Livro();
        $busca = $busca->filtro($campo, $categoria);


    }
?>
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

    <title>Koob - Acervo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2b385b">
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

           <form class="form-inline" method="post">
              <?php
              if(isset($_POST['acao'])){ 
                if(isset($_POST['busca'])){
                    $campo = "nome_livro";
                    $titulo = $_POST['busca'];
                    $busca = new Livro();
                    $busca = $busca->busca($campo, $titulo);
                }
              }
              ?>
                <input class="form-control ml-4 mr-1" type="search" name="busca" placeholder="Busca">
                <button class="btn btn-muted" type="Submit" name="acao"><span style="color: white">
                  <i class="fas fa-search"></i></span></button>
            </form>
        
        </div>
    </div>
    </nav>

    <div class="container mt-4" >
    <div class="row" id="filtro">
    <div class="col-2 mt-2 ">
      <p class= "h5">Filtros de busca</p><br>
      <p>
        <a href="acervo.php">Todos</a><br>
        <a href="acervo.php?cat=Administracao">Administração</a><br>
        <a href="acervo.php?cat=Informatica">Informática</a><br>
        <a href="acervo.php?cat=Biblioteconomia">Biblioteconomia</a><br>
        <a href="acervo.php?cat=Enfermagem">Enfermagem</a><br>
    </p>
    </div>
    <?php
        $livros = New Livro();
        $livros = $livros->livros();
        if(isset($busca))
            $livros = $busca;
    ?>
        <div class="col-10">
            <p class="h3">Livros</p>
            <br>
            <div class="row" id="livros">
                    <?php
                        foreach ($livros as $key => $value) {
                    ?>
                    
                        <div class="col-sm-4 ml-0">
                            <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src=<?php echo '"./imagens/'.$value['imagem'].'"'; ?>>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $value['nome_livro']; ?> </h4>
                                    <p>Autor: <?php echo $value["autor"]; ?> | Editora: <?php echo $value['editora']?></p>
                                </div>
                            </div>
                        </div>

                        </div>
                    
                    <?php
                           
                        }
                    ?>    
            </div>
        </div>

       
    </div>
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

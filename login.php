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

    <title>Koob - Login</title>
  </head>
  <style type="text/css">
    body{
      background-color: #fff4ee;
    }

  </style>
  <body>
    <?php
      include("config.php");
      ob_start();

    ?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <h3 class="display-3"> Login</h3>
            <h6 class="display-4">Bem-vinde de volta ao koob :)</h6>
        </div>
        </div>
        <br>
    </div>
    <div class="container">
  <div class="row mt-5">
    <div class="col mt-1 ml-2">
        <div class="text-center">
            <img src="./imagens/logotcc.png" width="200">
        </div>
    </div>

    <?php
    if(isset($_POST['acao'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $login = new Cadastro();
        $login = $login->login($email, $senha);
        if($login === true){
            header("Location: chat.php");
        } else {
            $errado = true;
        }
    }
    ?>
    <span class="border border-secondary border-right"></span>
    <div class="col">
        <form method="post" action="">
            <div class=<?php if(!isset($errado)) echo '"d-none"'; else echo '"alert alert-danger"';?>>Email ou senha incorretos</div>
            <div class="form-group col-sm-10">
                    <label for="inputEmail"> Seu Email:</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
            <div class="form-group col-sm-10">
                    <label for="inputSenha">Senha:</label>
                      <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha" required>
            </div>

            <div class="form-row">
                    <div class="col-sm-12 ml-3">
                        <button type="submit" name="acao" class="btn btn-dark">Entrar</button>
                        <span>Não tem cadastro?<a href="index.php#registro"> Registre-se</a></span>
                    </div>
            </div>
        </form>
  </div>
    

            
        </div>
  </body>
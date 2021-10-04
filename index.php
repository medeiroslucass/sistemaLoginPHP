<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = 'lucas';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //Logado com sucesso
                    $_SESSION['login'] == $login;
                    header('Location: home.php');
                }else{
                    //Algo deu errado
                    echo '<p class="alert alert-danger">Login ou senha inválidos</p>';
                }
            }

            include ('login.php');
        }else{
            include('home.php');
        }

    ?>
</body>
</html>
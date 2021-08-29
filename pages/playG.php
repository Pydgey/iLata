<!DOCTYPE html>
    <?php
        session_start();
        if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:../index.php');
        }
        
        $logado = $_SESSION['login'];
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>conexão sucesfull <?php echo "Bem vindo $logado"; ?></div>
</body>
</html>
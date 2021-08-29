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

    <link rel="stylesheet" href="../css/nick.css">
    <script src="../js/nick.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <title>ilata - A lata virtual de estimação</title>
</head>
<body onload="alert('Hello, eu sou a lata de estimação');">
    
    <div id="container_lata">
        <img id="lataimg" src="../img/latoso01.png" alt="iLata" onclick="touchLata();" />
    </div>
    
    <form method="post" action="../back/nickCD.php" id="formnick">

        <input class="" placeholder="nickName" type="text" name="nick" id="nickP">

        <div id="bt_container" class="hide">

            <button id="play" onclick="play();" type="submit" name="action">Play Game</button>

        </div>  
    </form>

</body>
</html>
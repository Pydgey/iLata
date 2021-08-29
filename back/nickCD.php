<?php
    session_start();
    if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:../index.php');
    }
        
    $logado = $_SESSION['login'];


    $nickName = $_POST['nick'];

    define('HOST','127.0.0.1');
    define('USUARIO','root');
    define('SENHA','');
    define('DB','server');

$con = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"server") or die ("Sem acesso ao banco de dados");


?>
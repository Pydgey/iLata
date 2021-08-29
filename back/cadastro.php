<?php
session_start();

define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','server');

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"server") or die ("Sem acesso ao banco de dados");

$result = mysqli_query($con,"CALL cadastro('$login','$senha',@saida)");


if(mysqli_num_rows($result) == 1) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:../pages/nick.php');

} else {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:../index.php');
};
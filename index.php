<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ope.php" id="formlogin">
        <fieldset>
            <legend>LOGIN</legend> <br/>
            <label>NOME :</label>
            <input type="text" name="login" id="login" /> <br/>

            <label>SENHA :</label>
            <input type="password" name="senha" id="senha" /> <br/>
            <input type="submit" value="LOGAR " />
            <button id="registrar_bt">
                <a id="registrar" href="registrar.php">
                    Registrar
                </a>
            </button>
            
        </fieldset>
    </form>
</body>
</html>
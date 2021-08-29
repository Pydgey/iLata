<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/form.css">

    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <div class="row">
            <form class="col s12" method="post" action="back/ope.php" id="formlogin">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="login" placeholder="UserName" id="first_name" type="text" class="validate">
                        <label for="first_name">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="senha" id="password" type="password" class="validate">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
                    <button class="btn waves-effect waves-light">
                <a id="registrar" href="pages/registrar.php">
                    Registrar
                </a>
            </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
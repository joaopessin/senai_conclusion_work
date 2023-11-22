<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/tela_login_construtora.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 retangulo-horizontal">
                <div class="op-logins">

                    <a href="index.php"><img class="logo-tela-log" src="../image/obra360.png" alt="Logo do Obra360" width="100" height="100"></a>
                    
                    <h2 class="branco">SEJA BEM-VINDO(A)!</h2>
                    <p class="branco">Escolha uma das opcções para login.</p>

                    <div class="btns-login">
                        <a class="btn btn-secondary btn-funcionario azul" href="loginFuncionario.php">CONSTRUTORA</a>
                        <a class="btn btn-secondary btn-cliente laranja" href="loginCliente.php">CLIENTE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 retangulo-vertical">

                <h3 class="branco d-flex justify-content-center align-items-center mt-5">ÁREA DA CONSTRUTORA</h3>

                <div class="login-box">
                    
                    <form action="./bd/validarLogin_funcionario.php/conexao.php" method="post">
                        <div class="user-box">
                            <input id="inputEmail" type="text" name="email_func_const" required="">
                            <label>email</label>
                        </div> 

                        <div class="user-box">
                            <input id="inputSenha" type="password" name="senha_func_const" required="">
                            <label>senha</label>
                        </div>

                        <a href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input class="btn btn-secondary laranja btn-entrar" type="submit" value="ENTRAR">
                        </a>
                    </form>

                </div>   
            </div>
        </div>
    </div>
</body>
</html>
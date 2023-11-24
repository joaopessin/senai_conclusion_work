<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/tela_principal_construtora.css">
</head>

<body>

    <!------ logo do obra360 ------->
    <div class="logo-principal">
        <a href="loginFuncionario.php"><img src="../image/obra360.png" alt="Logo do Obra360" width="100" height="100"></a>
    </div>

    <!-------- Menu lateral --------->

    <ul class="side-menu">
        <li><a href=""><span class="fa fa-code"><img class="menu-img" src="../image/menu-branco.png" alt="menu barra"></span>Obra 360</a></li>
        <li><a href="#"><span class="fa fa-cog"><img class="menu-info" src="../image/info-branco.png" alt="incone informacao"></span>Sobre nós</a></li>
        <li><a href="../content/cadastro_funcionarios.php"><span class="fa fa-font"><img class="menu-cadastro" src="../image/cadastro-branco.png" alt="incone cadastro"></span>Cadastrar Cliente</a></li>
        <li><a id="logout" href="tela_login_construtora.php"><span class="fa fa-check-square"><img class="menu-info" src="../image/sair-branco.png" alt="incone informacao"></span>Sair</a></li>
    </ul>
    <script>
        document.getElementById('logout').onclick = function() {
            return confirm("Você realmente deseja sair?");
        }
    </script>


    <!----- Barra de pesquisa ------->

    <div class="pesquisa">
        <form class="example">
            <input type="text" placeholder="Pesquisa..." name="search">
        </form>
    </div>

    <div class="div-add-obra">
        <a href="cadastro_detalhes.php"><img class="add-obra" src="../image/add-branco.png" alt="adicionar"></a>
    </div>


    <!------ Conteudo Obras -------->

    <a href="detalhes_obras.php">
        <div class="div-obra1">
            <h2 class="branco conteudo-div-obra">Obra 1</h2>
            <p class="branco conteudo-div-obra">Etapa atual</p>
            <p class="branco conteudo-div-obra">Progresso:</p>
            <div class="container">
                <input type="radio" class="radio" name="progress" value="five" id="five">
                <label for="five" class="label">5%</label>

                <input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>
                <label for="twentyfive" class="label">25%</label>

                <input type="radio" class="radio" name="progress" value="fifty" id="fifty">
                <label for="fifty" class="label">50%</label>

                <input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">
                <label for="seventyfive" class="label">75%</label>

                <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
                <label for="onehundred" class="label">100%</label>

                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>
        </div>
    </a>



    <a href="detalhes_obras.php">
        <div class="div-obra2">
            <h2 class="branco conteudo-div-obra">Obra 2</h2>
            <p class="branco conteudo-div-obra">Etapa atual</p>
            <p class="branco conteudo-div-obra">Progresso:</p>

            <div class="container">
                <input type="radio" class="radio" name="progress2" value="five" id="five">
                <label for="five" class="label">5%</label>

                <input type="radio" class="radio" name="progress2" value="twentyfive" id="twentyfive" checked>
                <label for="twentyfive" class="label">25%</label>

                <input type="radio" class="radio" name="progress2" value="fifty" id="fifty">
                <label for="fifty" class="label">50%</label>

                <input type="radio" class="radio" name="progress2" value="seventyfive" id="seventyfive">
                <label for="seventyfive" class="label">75%</label>

                <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
                <label for="onehundred" class="label">100%</label>

                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
            </div>
        </div>
    </a>







</body>

</html>
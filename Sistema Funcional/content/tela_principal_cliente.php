<?php
include('../database/conexao.php');

$query = $dbh->prepare('SELECT id_obra, nome_obra, descricao_obra, endereco_obra 
    FROM obras;');

$query->execute();

$obras = $query->fetchAll();



$query2 = $dbh->prepare('SELECT id_obra FROM obras GROUP BY id_obra;');
$query2->execute();

$totalObras = $query2->fetchAll();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../style/tela_principal_cliente.css">

    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
</head>

<body>

    <header>
        <div class="page">
            <nav class="page__menu menu">
                <ul class="menu__list r-list">
                    <li id="logout" class="menu__group menu__logout"><a href="tela_login_cliente.php" class="menu__link r-link text-underlined">Sair</a></li>
                    
                    <!-----Nome e logo------>
                    <li id="logout" class="menu__logo" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="laranja suaClasse">Obra360</h2>
                        <img class="suaClasse" src="../image/obra360.png" alt="Logo do Obra360" width="100" height="100">
                    </li>
                </ul>
            </nav>
            <script>
                document.getElementById('logout').onclick = function() {
                    return confirm("Você realmente deseja sair?");
                }
            </script>
        </div>


        <!-------- Menu lateral --------->

        <ul class="side-menu">
            <li><a href=""><span class="fa fa-code"><img class="menu-img" src="../image/menu-branco.png" alt="menu barra"></span>Obra 360</a></li>
            <li><a href="sobre_nos_cliente.php"><span class="fa fa-cog"><img class="menu-info" src="../image/info-branco.png" alt="incone informacao"></span>Sobre nós</a></li>
            <li><a id="logout2" href="tela_login_cliente.php"><span class="fa fa-check-square"><img class="menu-info" src="../image/sair-branco.png" alt="incone informacao"></span>Sair</a></li>
        </ul>
        <script>
            document.getElementById('logout').onclick = function() {
                return confirm("Você realmente deseja sair?");
            }
        </script>
        <script>
            document.getElementById('logout2').onclick = function() {
                return confirm("Você realmente deseja sair?");
            }
        </script>
    </header>

    <!----- Barra de pesquisa ------->

    <!--<div class="pesquisa">
        <form class="example">
            <input type="text" placeholder="Pesquisa..." name="search">
        </form>
    </div>-->

    



    <!------ Conteudo Obras -------->




    <?php
    foreach ($obras as $obra) {
        if (isset($obra)) {
            echo '<a href="detalhes_obras_cliente.php?idObra=' . $obra['id_obra'] . '">';

            echo '<div class="div-obra' . $obra['id_obra'] . '">';

            echo '<h2 class="branco conteudo-div-obra">' . $obra['nome_obra'] . '</h2>';
            echo '<p class="branco conteudo-div-obra">Etapa atual</p>';
            echo '<p class="branco conteudo-div-obra">Progresso:</p>';

            echo '<div class="container">';
            echo '<input type="radio" class="radio name="progress" value="five" id="five">';
            echo '<label for="five" class="label">5%</label>';
            echo '<input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>';
            echo '<label for="twentyfive" class="label">25%</label>';
            echo '<input type="radio" class="radio" name="progress" value="fifty" id="fifty">';
            echo '<label for="fifty" class="label">50%</label>';
            echo '<input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">';
            echo '<label for="seventyfive" class="label">75%</label>';
            echo '<input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">';
            echo '<label for="onehundred" class="label">100%</label>';

            echo '<div class="progress">';
            echo '<div class="progress-bar"></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
        } else {
            echo 'Obras não cadastrada!';
        }
    }

    ?>

    <script>
        function alertarDelet() {
            var resposta = confirm("Veja as informações da obra antes de deletar!");
            if (resposta) {
                // O usuário clicou em "OK"
                header('Location: tela_principal_construtora.php');
                alert("Você excluiu essa obra!");
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não excluiu essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>

    <script>
        function alertarEdit() {
            var resposta = confirm("Veja as informações da obra antes de atualizar!");
            if (resposta) {
                // O usuário clicou em "OK"
                header('Location: tela_principal_construtora.php');
                alert("indo para a tela de editar");
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não editou essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>








    <?php

    for ($obraE = 1; $obraE < 12; $obraE++) {
        echo '<a href="detalhes_obras.php?idObra=' . $obraE . '">';
        $cont = 0;
        foreach ($totalObras as $linha) {
            //print_r($linha);
            if ($linha['id_obra'] == $obraE) {
                $cont++;
            }
        }
    }
    ?>





</body>

</html>
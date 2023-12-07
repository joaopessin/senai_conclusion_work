<?php
include('../database/conexao.php');

$obraE = $_GET['idObra'];

$query = $dbh->prepare('SELECT id_obra, nome_obra, descricao_obra, endereco_obra 
        FROM obras WHERE id_obra =:id_obra');

$query->execute(array(':id_obra' => $obraE));

$obras = $query->fetchAll();


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da obra</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/detalhes_obra.css">
    <link rel="stylesheet" href="../style/menu_obra.css">
</head>

<body>

    <header>
        <div class="page">
            <nav class="page__menu menu">
                <ul class="menu__list r-list">
                    <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
                    <li class="menu__group">
                        <?php
                            foreach ($obras as $obra) { echo '<a href="detalhes_obras_cliente.php?idObra=' . $obra['id_obra'] . '" id="menu_detalhes" class="menu__link r-link text-underlined">Detalhes</a>'; }
                        ?>
                    </li>

                    <li class="menu__group">
                        <?php
                            foreach ($obras as $obra) { echo '<a href="timeline_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Andamento</a>'; }
                        ?>
                    </li>

                    <li class="menu__group">
                        <?php
                            foreach ($obras as $obra) { echo '<a href="acesso_funcionarios_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Funcionários</a>'; }
                        ?>
                    </li>

                    <li class="menu__group">
                        <?php
                            foreach ($obras as $obra) { echo '<a href="tela_mensagem.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Menssagem</a>'; }
                        ?>
                    </li>

                    <li id="logout" class="menu__group menu__logout">
                        <?php
                            foreach ($obras as $obra) { echo '<a href="tela_principal_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Sair</a>'; }
                        ?>
                    </li>
                </ul>
            </nav>
            <script>
                document.getElementById('logout').onclick = function() {
                    return confirm("Você realmente deseja sair?");
                }
            </script>
        </div>
    </header>



    <?php
    foreach ($obras as $obra) {
        echo '<div id="obra' . $obra['id_obra'] . '" class="div-obra1-detalhes">';
        echo '<h1 class="titulo-obra">' . $obra['nome_obra'] . '</h1>';

        echo '<div>';
        echo '<div class="div-icone-descricao">';
        echo '<img src="../image/message-icon.png" class="m-t">';
        echo '<h2 class="m-l">Descrição geral</h2>';
        echo '</div>';

        echo '<div class="descricao-texto">';
        echo '<p class="branco">' . $obra['descricao_obra'] . '</p>';
        echo '</div>';

        echo '<div class="div-icone-local-obra">';
        echo '<img src="../image/local-laranja.png" class="m-t">';
        echo '<h2 class="m-l">' . $obra['endereco_obra'] . '</h2>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
    }
    ?>

    <script>
        function alertarDelet() {
            var resposta = confirm("Deseja deletar essa obra?");
            if (resposta) {
                // O usuário clicou em "OK"
                alert("Você excluiu essa obra!");
                header('Location: tela_principal_construtora.php');
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não excluiu essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>

    <script>
        function alertarEdit() {
            var resposta = confirm("Você realmente deseja editar essa obra?");
            if (resposta) {
                // O usuário clicou em "OK"
                header('Location: atualizar).php');
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não editou essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>



    <div class="div-sobre">

        <h1 class="titulo-sobre">NOME DA CONSTRUTORA</h1>

        <div>
            <div class="div-icone-sobre">
                <img src="../image/info-azul.png" class="m-t">
                <h2 class="m-l">Descrição geral</h2>
            </div>

            <div class="descricao-texto">
                <p class="branco">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>


            <div class="div-icone-local-construtora">
                <img src="../image/local-azul.png" class="m-t">
                <a target="_blank" href="https://www.google.com.br/maps/place/Master+Tower/@-20.3114451,-40.2930238,17.5z/data=!4m6!3m5!1s0xb8172397e43f3d:0x28497b634ed8d18f!8m2!3d-20.3114984!4d-40.291089!16s%2Fg%2F11glgj69k1?entry=ttu">
                    <h2 class="m-l branco">Endereço da construtora aqui</h2>
                </a>
            </div>



        </div>

    </div>

    <script src="../script/tela_principal_construtora.js">

    </script>
</body>

</html>
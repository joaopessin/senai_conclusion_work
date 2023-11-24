<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da obra</title>
    <link rel="stylesheet" href="../style/detalhes_obra.css">
    <link rel="stylesheet" href="../style/menu_obra.css">
</head>

<body>

    <header>
        <div class="page">
            <nav class="page__menu menu">
                <ul class="menu__list r-list">
                    <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
                    <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Detalhes</a></li>
                    <li class="menu__group"><a href="timeline.php" class="menu__link r-link text-underlined">Andamento</a></li>
                    <li class="menu__group"><a href="funcionarios.php" class="menu__link r-link text-underlined">Funcionários</a></li>
                    <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Mensagens</a></li>
                    <li id="logout" class="menu__group menu__logout"><a href="tela_principal_construtora.php" class="menu__link r-link text-underlined">Sair</a></li>
                </ul>
            </nav>
            <script>
                document.getElementById('logout').onclick = function() {
                    return confirm("Você realmente deseja sair?");
                }
            </script>
        </div>
    </header>

    <div class="div-obra1-detalhes">

        <h1 class="titulo-obra">OBRA 1</h1>

        <div>
            <div class="div-icone-descricao">
                <img src="../image/message-icon.png" class="m-t">
                <h2 class="m-l">Descrição geral</h2>
            </div>

            <div class="descricao-texto">
                <p class="branco">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>


            <div class="div-icone-local-obra">
                <img src="../image/local-laranja.png" class="m-t">
                <h2 class="m-l">Endereço da obra aqui</h2>
            </div>

        </div>
    </div>


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
                <h2 class="m-l">Endereço da obra aqui</h2>
            </div>


        </div>

    </div>


</body>

</html>
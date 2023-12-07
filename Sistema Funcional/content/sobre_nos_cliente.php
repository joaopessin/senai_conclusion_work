<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações construtora</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/sobre_nos.css">


</head>

<body>

    <header>
        <div class="page">
            <nav class="page__menu menu">
                <ul class="menu__list r-list">
                    <li id="logout" class="menu__group menu__logout"><a href="tela_principal_cliente.php" class="menu__link r-link text-underlined">Sair</a></li>

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
    </header>


    <div class="div-sobre">

        <h1 class="titulo-sobre">NOME DA CONSTRUTORA</h1>

        <div>
            <div class="div-icone-sobre">
                <img src="../image/info-azul.png" class="m-t m-l tamanhoimg">
                <h2 class="m-l">Descrição geral</h2>
            </div>

            <div class="descricao-texto">
                <p class="branco">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>


            <div class="div-icone-local-construtora">
                <img src="../image/local-azul.png" class=" m-l tamanhoimg">
                <a target="_blank" href="https://www.google.com.br/maps/place/Master+Tower/@-20.3114451,-40.2930238,17.5z/data=!4m6!3m5!1s0xb8172397e43f3d:0x28497b634ed8d18f!8m2!3d-20.3114984!4d-40.291089!16s%2Fg%2F11glgj69k1?entry=ttu">
                    <h2 class="m-l branco">Endereço da construtora aqui</h2>
                </a>
            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var suaDiv = document.querySelector('.div-sobre');
            suaDiv.addEventListener('mouseover', function() {
                document.body.style.backgroundColor = '#0F2F4B'; // Cor ao passar o mouse
            });
            suaDiv.addEventListener('mouseout', function() {
                document.body.style.backgroundColor = '#8a9aa7'; // Cor original
            });
        });
    </script>

</body>
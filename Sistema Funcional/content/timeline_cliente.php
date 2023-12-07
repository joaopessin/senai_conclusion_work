<?php
include('../database/conexao.php');

$query = $dbh->prepare('SELECT * FROM etapas;');
$query->execute();
$etapas = $query->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($produtos);
// echo '<pre>';

$obraE = $_GET['idObra'];

$query2 = $dbh->prepare('SELECT id_obra, nome_obra, descricao_obra, endereco_obra FROM obras WHERE id_obra =:id_obra');

$query2->execute(array(':id_obra' => $obraE));

$obras = $query2->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../style/timeline.css">
</head>

<body>
  <header>
    <div class="page">
      <nav class="page__menu menu">
        <ul class="menu__list r-list">
          <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
          <li class="menu__group">
            <?php
            foreach ($obras as $obra) {
              echo '<a href="detalhes_obras_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Detalhes</a>';
            }
            ?>
          </li>

          <li class="menu__group">
            <?php
            foreach ($obras as $obra) {
              echo '<a href="timeline_cliente.php?idObra=' . $obra['id_obra'] . '" id="menu_detalhes" class="menu__link r-link text-underlined">Andamento</a>';
            }
            ?>
          </li>

          <li class="menu__group">
            <?php
            foreach ($obras as $obra) {
              echo '<a href="acesso_funcionarios_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Funcionários</a>';
            }
            ?>
          </li>

          <li class="menu__group">
            <?php
            foreach ($obras as $obra) {
              echo '<a href="tela_mensagem.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Menssagens</a>';
            }
            ?>
          </li>

          <li id="logout" class="menu__group menu__logout">
            <?php
            foreach ($obras as $obra) {
              echo '<a href="tela_principal_cliente.php?idObra=' . $obra['id_obra'] . '" class="menu__link r-link text-underlined">Sair</a>';
            }
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

  <section class="intro">
    <div class="container">
      <h1>Etapas de Construção &darr;</h1>
    </div>
  </section>

  <section class="timeline">
    <ul>
      <?php
      foreach ($etapas as $etapa) {
        echo '<li>';
        echo '<div>';
        echo '<time>' . $etapa['nome_etapa'] . '</time>' . $etapa['descricao_etapa'];
        echo '<br>';
        echo '<button><a href="detalhes_da_etapa.php">Detalhes</a></button>';
        echo '</div>';
        echo '</li>';
      }
      ?>




    </ul>
  </section>

  <footer class="page-footer">
    <a href="../image/qrcode.png" target="_blank">
      <img class="qrcode" src="../image/qrcode.png" alt="Obra 360">
    </a>
  </footer>

  <script src="../script/timeline.js"></script>
</body>

</html>
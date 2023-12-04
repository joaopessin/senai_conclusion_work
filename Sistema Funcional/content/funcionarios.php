<?php
    include('../database/conexao.php');
    $query = $dbh->prepare('SELECT id_funcionario, nome_funcionario, cargo_funcionario FROM funcionarios;');
    
    $query->execute();

    $funcionarios = $query->fetchAll();

    // echo '<pre>';
    // print_r($produtos);
    // echo '<pre>';
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/funcionarios.css">
  <title>Detalhes de funcionários</title>

</head>

<body>
  <div class="container">
    <header>
      <div class="page">
        <nav class="page__menu menu">
          <ul class="menu__list r-list">
            <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
            <li class="menu__group"><a href="detalhes_obras.php" class="menu__link r-link text-underlined">Detalhes</a></li>
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

        <h2>Lista de Funcionários</h2>

      </div>
    </header>

    <main>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">Cargo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($funcionarios as $funcionario) {
            echo '<tr>';
            echo '<td>' . $funcionario['id_funcionario'] . '</td>';
            echo '<td>' . $funcionario['nome_funcionario'] . '</td>';
            echo '<td>' . $funcionario['cargo_funcionario'] . '</td>';
            echo '<td><a href="edit_produto.php?idFuncionario=' . $funcionario['id_funcionario'] . '">Editar</a></td>';
            echo '<td><a href="delete_produto.php?idProduto=' . $funcionario['id_funcionario'] . '">Deletar</a></td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </main>

  </div>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
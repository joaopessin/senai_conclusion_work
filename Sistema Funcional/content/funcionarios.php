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
            <li class="menu__logo"><img src="image/logo.png" alt="logo_obra_360"></li>
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
          <tr>
            <th scope="row">1</th>
            <td>Roger Dariva Vogas Menezes</td>
            <td>Encarregado de Obra</td>
            <td><a href="">Alterar</a></td>
            <td><a href="">Remover</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Joao Vitor Pessin Santos</td>
            <td>Pedreiro</td>
            <td><a href="">Alterar</a></td>
            <td><a href="">Remover</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Laysson Batista</td>
            <td>Ajudante de Pedreiro</td>
            <td><a href="">Alterar</a></td>
            <td><a href="">Remover</a></td>
          </tr>
        </tbody>
      </table>
    </main>

  </div>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
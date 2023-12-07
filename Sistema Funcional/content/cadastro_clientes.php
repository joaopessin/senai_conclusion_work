<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="../style/cadastro_clientes.css">
</head>

<body>
  <div class="form-container">
    <h2 class="laranja suaClasse">Cadastro de Cliente</h2>

    <form action="insert_clientes.php" method="post">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome_cliente" required>
      </div>

      <div class="form-group">
        <label for="cpf">Cpf:</label>
        <input type="text" id="cpf" name="cpf_cliente" pattern="^[0-9]{11}$" required>
        <small>Insira um CPF válido com 11 dígitos e sem caracteres especiais.</small>
      </div>

      <div class="form-group">
        <label for="mensagem">Email</label>
        <input type="email" id="email" name="email_cliente" required>
        <small>Insira um Email válido com "@".</small>
      </div>

      <div class="form-group">
        <label for="mensagem">Telefone</label>
        <input type="text" id="frmNumero" name="telefone_cliente" size="20" maxlength="11" placeholder="Somente números (incluir ddd)" required>
      </div>


      <div class="form-group">
        <label for="mensagem">Senha</label>
        <input type="password" id="senha" name="senha_cliente" required>
      </div>

      <div class="form-group">
        <button onclick="return alertar();" type="submit">Cadastrar</a></button>
        <button><a href="tela_principal_construtora.php">Cancelar</a></button>
      </div>
    </form>

    <script>
      function alertar() {
        alert('Se os campos estiverem devidamentes preenchidos, o clinte foi cadastrado!');
        
      }
    </script>
    <script>
      document.getElementById('frmNumero').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
      });
    </script>

  </div>
</body>

</html>
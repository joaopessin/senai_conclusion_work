<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>

  <link rel="stylesheet" href="../style/cadastro_clientes.css">
</head>

<body>
  <div class="form-container">
    <h2>Cadastro de cliente</h2>

    <form action="insert_clientes.php" method="post">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome_cliente" required>
      </div>

      <div class="form-group">
        <label for="endereco">Cpf</label>
        <input type="text" id="cpf" name="cpf_cliente" required>
      </div>

      <div class="form-group">
        <label for="mensagem">Email</label>
        <input type="text" id="email" name="email_cliente" required>
      </div>

      <div class="form-group">
        <label for="mensagem">Telefone</label>
        <input type="text" id="telefone" name="telefone_cliente" required>
      </div>


      <div class="form-group">
        <label for="mensagem">Senha</label>
        <input type="password" id="senha" name="senha_cliente" required>
      </div>

      <div class="form-group">
        <button onclick="return alertar();" type="submit"><a href="insert_clientes.php">Cadastrar</a></button>
        <button><a href="tela_principal_construtora.php">Cancelar</a></button>
      </div>
    </form>

    <script>
      function alertar() {
        alert('Cliente cadastrado!');
      }
    </script>

  </div>
</body>

</html>
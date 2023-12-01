<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <link rel="stylesheet" href="../style/cadastro_detalhes.css">
  </head>
  <body>
    <div class="form-container">
      <h2>Cadastro de cliente</h2>

      <form>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
          <label for="endereco">Cpf</label>
          <input type="text" id="cpf" name="cpf" required>
        </div>

        <div class="form-group">
          <label for="mensagem">Email</label>
          <input type="text" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="mensagem">Senha</label>
          <input type="password" id="senha" name="senha" required>
        </div>

        <div class="form-group">
          <button type="submit">Cadastrar</button>
					<button type="submit">Cancelar</button>
        </div>
      </form>
    </div>
  </body>
</html>

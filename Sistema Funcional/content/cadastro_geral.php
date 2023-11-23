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
      <h2>Cadastro</h2>

      <form>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
        </div>

        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" required>
        </div>

        <div class="form-group">
          <button type="submit">Cadastrar</button>
					<button type="submit">Cancelar</button>
        </div>
      </form>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../style/cadastro_funcionarios.css">
  </head>
  <body>

    <div class="container">
        <div class="form-container">
        <h2>Cadastro de Funcionário</h2>

        <form action="insert_funcionarios.php" method="post">
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome_funcionario" required>
          </div>

          <div class="form-group">
            <label for="mensagem">Cargo</label>
            <input  type="text" id="mensagem" name="cargo_funcionario" rows="4" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit">Cadastrar</button>
            <button><a href="tela_principal_construtora.php">Cancelar</button></a>
          </div>

        </form>

        
      </div>

      <div class="img-container">
             <img class="suaClasse" src="../image/obra360.png" alt="">    
      </div>

    </div>
    
  
  </body>

</html>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="../style/cadastro_detalhes.css">
</head>

<body>

  <div class="container">
    <div class="form-container">
      <h2>Cadastro de Obra</h2>

      <form  action="insert_detalhes.php" method="post">
        <div class="form-group">
          <label for="nome_obra">Nome</label>
          <input type="text" id="nome" name="nome_obra" required>
        </div>

        <div class="form-group">
          <label for="descricao_obra">Detalhes da Obra</label>
          <textarea id="mensagem" name="descricao_obra" rows="4" required></textarea>
        </div>

        <div class="form-group">
          <label for="endereco_obra">Endereço da Obra</label>
          <input type="text" id="endereco" name="endereco_obra" required>
        </div>

        <div class="form-group">
          <button onclick="return alertar();" type="submit">Avançar</a></button>

          <button><a href="tela_principal_construtora.php">Cancelar</a></button>
          
        </div>

      </form>


    </div>

    <div class="img-container">
      <img src="../image/obra360.png" alt="">
    </div>

  </div>

  <script>
    function alertar() {
      alert('Obra cadastrada!');
    }
  
  </script>
</body>

</html>
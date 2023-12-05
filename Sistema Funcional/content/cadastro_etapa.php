<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../style/cadastro_etapa.css">
  </head>
  <body>

    <div class="container">
        <div class="form-container">
        <h2>Nova Etapa</h2>

        <form>
          <div class="form-group">
            <label for="nome">Nome da etapa:</label>
            <input type="text" id="nome" name="nome" required>
          </div>

          <div class="form-group">
            <label for="mensagem">Descrição:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required placeholder=" Descreva o que deverá sem feito nessa etapa de construção"></textarea>
          </div>

          <div class="form-group">
            <label for="data">Duração média::</label>
            <input type="text" id="duracao_media" name="duracao_media" required>
          </div>

          <div class="form-group">
            <label for="arquivo">Periodicidade de atualização:</label>
            <select id="frequencia" name="frequencia">
              <option value="semanal">Semanal</option>
              <option value="quinzenal">15 em 15 dias</option>
              <option value="mensal">Mensal</option>
          </select>
        </div>

          <div class="form-group">
            <button type="submit">Cadastrar</button>
            <button type="submit">Cancelar</button>
          </div>         

        </form>    

        </div>

      <div class="img-container">
             <img src="image\logo.png" alt="">    
      </div>

    </div>
    
  
  </body>

</html>

<?php
include('../database/conexao.php');

// Função para processar a exclusão da etapa
function excluirEtapa($dbh, $etapaId) {
    $query = $dbh->prepare('DELETE FROM detalhes_etapa WHERE id_etapa = :id');
    $query->bindParam(':id', $etapaId, PDO::PARAM_INT);
    return $query->execute();
}

// Função para processar a atualização da etapa
function atualizarEtapa($dbh, $etapaId, $novoNome, $novaDescricao, $novaImagem, $novoDuracao, $novaPeriodicidade) {
  $query = $dbh->prepare('UPDATE detalhes_etapa SET nome_etapa = :nome, descricao_etapa = :descricao, caminho_foto = :imagem, duracao = :duracao, periodicidade_atualizacao = :periodicidade WHERE id_etapa = :id');
  $query->bindParam(':id', $etapaId, PDO::PARAM_INT);
  $query->bindParam(':nome', $novoNome, PDO::PARAM_STR);
  $query->bindParam(':descricao', $novaDescricao, PDO::PARAM_STR);
  $query->bindParam(':imagem', $novaImagem, PDO::PARAM_STR);
  $query->bindParam(':duracao', $novoDuracao, PDO::PARAM_STR);
  $query->bindParam(':periodicidade', $novaPeriodicidade, PDO::PARAM_STR);
  return $query->execute();
}

// Processar a exclusão ou atualização se houver dados do POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['excluir_etapa'])) {
        $etapaId = $_POST['etapa_id'];
        excluirEtapa($dbh, $etapaId);
    } elseif (isset($_POST['confirmar_edicao'])) {
      $etapaId = $_POST['etapa_id'];
      $novoNome = $_POST['novo_nome'];
      $novaDescricao = $_POST['nova_descricao'];
      $novaImagem = $_POST['nova_imagem'];
      $novoDuracao = $_POST['novo_duracao'];  // Adicionado
      $novaPeriodicidade = $_POST['nova_periodicidade'];  // Adicionado

      atualizarEtapa($dbh, $etapaId, $novoNome, $novaDescricao, $novaImagem, $novoDuracao, $novaPeriodicidade);
  }
}

$query = $dbh->prepare('SELECT * FROM detalhes_etapa');
$query->execute();
$etapas = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Obras</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../style/detalhes_da_etapa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="page">
        <nav class="page__menu menu">
            <ul class="menu__list r-list">
                <li class="menu__logo"><img src="../image/obra360.png" alt="logo_obra_360"></li>
                <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Detalhes</a></li>
                <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Andamento</a></li>
                <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Funcionários</a></li>
                <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Mensagens</a></li>
                <li class="menu__group menu__logout"><a href="#0" class="menu__link r-link text-underlined">Sair</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container mt-5">
    <h2>Etapas da Obra</h2>
    <div class="row" id="etapas-list">
        <?php foreach ($etapas as $etapa) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-etapa" src="<?php echo $etapa['caminho_foto']; ?>" alt="<?php echo $etapa['nome_etapa']; ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $etapa['nome_etapa']; ?></h5>
                        <p class="card-text"><?php echo $etapa['descricao_etapa']; ?></p>
                        <p class="card-text"><strong>Tempo de duração:</strong> <?php echo $etapa['duracao']; ?></p>
                        <p class="card-text"><strong>Periodicidade:</strong> <?php echo $etapa['periodicidade_atualizacao']; ?></p>

                        <!-- Botões de Editar e Excluir -->
                        <form method="post" class="mt-3">
                            <input type="hidden" name="etapa_id" value="<?php echo $etapa['id_etapa']; ?>">
                            <button type="submit" name="excluir_etapa" class="btn btn-danger">Excluir</button>
                        </form>

                        <button class="btn btn-primary btn-editar mt-3" data-etapa-id="<?php echo $etapa['id_etapa']; ?>">Editar</button>

                        <!-- Formulário de Edição (inicialmente oculto) -->
                        <form method="post" class="form-editar mt-3" data-etapa-id="<?php echo $etapa['id_etapa']; ?>" style="display: none;">
                          <div class="mb-3">
                              <label for="novo_nome" class="form-label">Novo Nome:</label>
                              <input type="text" class="form-control" id="novo_nome" name="novo_nome" required>
                          </div>
                          <div class="mb-3">
                              <label for="nova_descricao" class="form-label">Nova Descrição:</label>
                              <textarea class="form-control" id="nova_descricao" name="nova_descricao" required></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="novo_duracao" class="form-label">Novo Tempo de Duração:</label>
                              <input type="text" class="form-control" id="novo_duracao" name="novo_duracao" required>
                          </div>
                          <div class="mb-3">
                              <label for="nova_periodicidade" class="form-label">Nova Periodicidade:</label>
                              <input type="text" class="form-control" id="nova_periodicidade" name="nova_periodicidade" required>
                          </div>
                          <div class="mb-3">
                              <label for="nova_imagem" class="form-label">Nova Imagem (URL):</label>
                              <input type="text" class="form-control" id="nova_imagem" name="nova_imagem">
                          </div>

                          <input type="hidden" name="etapa_id" value="<?php echo $etapa['id_etapa']; ?>">
                          <button type="submit" name="confirmar_edicao" class="btn btn-success">Confirmar</button>
                          <button type="button" class="btn btn-secondary btn-cancelar">Cancelar</button>
                      </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(".btn-editar").on("click", function () {
            var etapaId = $(this).data("etapa-id");

            // Pré-preenche os campos com os dados da etapa correspondente
            var etapa = <?php echo json_encode($etapas); ?>;
            var etapaSelecionada = etapa.find(function (element) {
                return element.id_etapa == etapaId;
            });

            // Esconde todos os elementos com a classe "form-editar"
            $(".form-editar").hide();

            // Mostra o elemento específico da etapa clicada
            $(".form-editar[data-etapa-id='" + etapaId + "']").show();

            // Preenche os campos do formulário com os dados da etapa selecionada
            $(".form-editar[data-etapa-id='" + etapaId + "']").find("#novo_nome").val(etapaSelecionada.nome_etapa);
            $(".form-editar[data-etapa-id='" + etapaId + "']").find("#nova_descricao").val(etapaSelecionada.descricao_etapa);
            $(".form-editar[data-etapa-id='" + etapaId + "']").find("#nova_imagem").val(etapaSelecionada.caminho_foto);
            $(".form-editar[data-etapa-id='" + etapaId + "']").find("#novo_duracao").val(etapaSelecionada.duracao);
            $(".form-editar[data-etapa-id='" + etapaId + "']").find("#nova_periodicidade").val(etapaSelecionada.periodicidade_atualizacao);
        });

        // Adiciona um ouvinte de clique para os botões de cancelar
        $(".btn-cancelar").on("click", function () {
            var etapaId = $(this).closest("form").data("etapa-id");
            $(".form-editar[data-etapa-id='" + etapaId + "']").hide();
        });
    });
</script>


    <script src="../script/detalhes_da_etapa.js"></script>
  </body>
</html>

</body>
</html>


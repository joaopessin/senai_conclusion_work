<?php
//print_r($_GET);
include('../database/conexao.php');

$idObra;

if (!isset($_GET['idObra'])) {
    echo 'Ação invalida';
    die();
} else {
    $idObra = $_GET['idObra'];
    $query = $dbh->prepare('SELECT * FROM obras WHERE id_obra=:idObra');

    $query->execute(array(
        ':idObra' => $idObra
    ));

    $linha = $query->fetch();
}
?>




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
            <h2>Atualizar Obra</h2>

            <form action="update_obra.php" method="post">
                <input type="hidden" name="id_obra" value="<?php echo $linha['id_obra'] ?>">
                <div class="form-group">
                    <label for="nome_obra">Nome da Obra</label>
                    <input type="text" id="nome" name="nome_obra" required value="<?php echo $linha['nome_obra'] ?>">
                </div>

                <div class="form-group">
                    <label for="descricao_obra">Detalhes da Obra</label>
                    <input id="descricao" name="descricao_obra" rows="4" required value="<?php echo $linha['descricao_obra'] ?>"></input>
                </div>

                <div class="form-group">
                    <label for="endereco_obra">Endereço da Obra</label>
                    <input type="text" id="endereco" name="endereco_obra" required value="<?php echo $linha['endereco_obra'] ?>">
                </div>

                <div class="form-group">
                    <button onclick="return alertarATT();" type="submit">Atualizar</button>

                    <button onclick="return alertarCancel();"><a href="tela_principal_construtora.php">Cancelar</a></button>

                </div>

            </form>


        </div>

        <div class="img-container">
            <img src="../image/obra360.png" alt="">
        </div>

    </div>



    <script>
        function alertarATT() {
            var resposta = confirm("Deseja atualizar essa obra?");
            if (resposta) {
                // O usuário clicou em "OK"
                alert("Você atualizou essa obra!");
                header('Location: tela_principal_construtora.php');
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não atualizou essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>

    <script>
        function alertarCancel() {
            var resposta = confirm("Cancelar atualização da obra?");
            if (resposta) {
                // O usuário clicou em "OK"
                alert("Atualização cancelada!")
                header('Location: tela_principal_construtora.php');
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não editou essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>


</body>

</html>
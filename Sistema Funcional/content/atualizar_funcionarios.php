<?php
//print_r($_GET);
include('../database/conexao.php');

$id_funcionario;

if (!isset($_GET['id_funcionario'])) {
    echo 'Ação invalida';
    die();
} else {
    $id_funcionario = $_GET['id_funcionario'];
    $query = $dbh->prepare('SELECT * FROM funcionarios WHERE id_funcionario=:id_funcionario');

    $query->execute(array(
        ':id_funcionario' => $id_funcionario
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

    <link rel="stylesheet" href="../style/cadastro_funcionarios.css">
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2 class="azul suaClasse">Atualizar Funcionário</h2>

            <form action="update_funcionarios.php" method="post">
                <input type="hidden" name="id_funcionario" value="<?php echo $linha['id_funcionario'] ?>">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome_funcionario" required value="<?php echo $linha['nome_funcionario'] ?>">
                </div>

                <div class="form-group">
                    <label for="mensagem">Cargo</label>
                    <input id="cargo" name="cargo_funcionario" rows="4" required value="<?php echo $linha['cargo_funcionario'] ?>">
                </div>

                <div class="form-group">
                    <button onclick="return alertarATT();" type="submit">Atualizar</button>

                    <button onclick="return alertarCancel();"><a href="funcionarios.php">Cancelar</a></button>
                </div>

            </form>


        </div>

        <div class="img-container">
            <img class="suaClasse" src="../image/obra360.png" alt="">
        </div>

    </div>

    <script>
        function alertarATT() {
            var resposta = confirm("Deseja atualizar esse funcionário?");
            if (resposta) {
                // O usuário clicou em "OK"
                alert("Você atualizou esse funcionário!");
                header('Location: update_funcionarios.php');
                
            } else {
                // O usuário clicou em "Cancelar"
                
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>

    <script>
        function alertarCancel() {
            var resposta = confirm("Deseja voltar?");
            if (resposta) {
                // O usuário clicou em "OK"
                header('Location: funcionarios.php');
            } else {
                // O usuário clicou em "Cancelar"
                alert("Você não editou essa obra!");
            }
            return false; // Isso impede que o navegador siga o link
        }
    </script>


</body>

</html>
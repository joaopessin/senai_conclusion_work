<?php
include('../database/conexao.php');

$obraE = $_GET['idObra'];

$query = $dbh->prepare('SELECT id_obra, nome_obra, descricao_obra, endereco_obra FROM obras WHERE id_obra =:id_obra');

$query->execute(array(':id_obra' => $obraE));

$obras = $query->fetchAll();

if (isset($_GET['id_funcionario'])) {
    $id_funcionario = $_GET['id_funcionario'];
} else {
    echo 'Variaveis não definidas';
    die();
}

try {
    $query = $dbh->prepare('DELETE FROM funcionarios WHERE id_funcionario=:id_funcionario;');

    $query->execute(
        array(
            ':id_funcionario' => $id_funcionario
        )
    );
} catch (PDOException $e) {
    echo 'erro';
}


header('Location: funcionarios.php?idObra=' . 1 . '"');

?>

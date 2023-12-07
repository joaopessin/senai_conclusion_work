<?php
    include('../database/conexao.php');
    
if (isset($_POST['nome_funcionario'], $_POST['cargo_funcionario']) && $_POST['nome_funcionario'] != '') {
    $nome_funcionario = $_POST['nome_funcionario'];
    $cargo_funcionario = $_POST['cargo_funcionario'];
    $id_funcionario = $_POST['id_funcionario'];
        
} else {
    echo 'Variaveis não definidas';
    die();
}

try {
    $query = $dbh->prepare('UPDATE funcionarios SET nome_funcionario=:nome_funcionario,
     cargo_funcionario=:cargo_funcionario WHERE id_funcionario=:id_funcionario;');

    $query->execute(array(
    ':nome_funcionario' => $nome_funcionario,
    ':cargo_funcionario' => $cargo_funcionario,
    ':id_funcionario' => $id_funcionario
    ));
    
} catch (PDOException $e) {
    echo 'erro';
}

header('Location: funcionarios.php?idObra=' . 1 . '');
?>
<?php
    include('../database/conexao.php');
    
if (isset($_POST['nome_obra'], $_POST['descricao_obra'], $_POST['endereco_obra']) && $_POST['nome_obra'] != '') {
    $nome_obra = $_POST['nome_obra'];
    $descricao_obra = $_POST['descricao_obra'];
    $endereco_obra = $_POST['endereco_obra'];
    $idObra  = $_POST['id_obra'];
        
} else {
    echo 'Variaveis não definidas';
    die();
}

try {
    $query = $dbh->prepare('UPDATE obras SET nome_obra=:nome_obra,
     descricao_obra=:descricao_obra, endereco_obra=:endereco_obra 
     WHERE id_obra=:idObra;');

    $query->execute(array(
    ':nome_obra' => $nome_obra,
    ':descricao_obra' => $descricao_obra,
    ':endereco_obra' => $endereco_obra,
    ':idObra' => $idObra
    ));
    
} catch (PDOException $e) {
    echo 'erro';
}

header('Location: tela_principal_construtora.php');
?>
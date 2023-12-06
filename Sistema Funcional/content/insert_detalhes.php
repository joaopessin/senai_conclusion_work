<?php
include('../database/conexao.php');
if (isset($_POST['nome_obra'], $_POST['descricao_obra'], $_POST['endereco_obra']) && $_POST['nome_obra'] != '') {
  $nome_obra = $_POST['nome_obra'];
  $descricao_obra = $_POST['descricao_obra'];
  $endereco_obra = $_POST['endereco_obra'];
  
} else {
  echo 'Variaveis não definidas';
  die();
}
try {
  $query = $dbh->prepare('INSERT INTO obras (nome_obra, descricao_obra, endereco_obra) VALUES(:nome_obra, :descricao_obra,:endereco_obra);');

  $query->execute(array(
    ':nome_obra' => $nome_obra,
    ':descricao_obra' => $descricao_obra,
    ':endereco_obra' => $endereco_obra
  ));
 
  
} catch (PDOException $e) {
  echo 'erro';
}

header('Location: tela_principal_construtora.php');
?>


<?php
include('../database/conexao.php');
if (isset($_POST['nome_cliente'], $_POST['cpf_cliente'], $_POST['telefone_cliente'], $_POST['email_cliente'], $_POST['senha_cliente']) && $_POST['email_cliente'] != '') {
  $nome_cliente = $_POST['nome_cliente'];
  $cpf_cliente = $_POST['cpf_cliente'];
  $telefone_cliente = $_POST['telefone_cliente'];
  $email_cliente = $_POST['email_cliente'];
  $senha_cliente = $_POST['senha_cliente'];
  
} else {
  echo 'Variaveis não definidas';
  die();
}
try {
  $query = $dbh->prepare('INSERT INTO clientes (nome_cliente, cpf_cliente, telefone_cliente, email_cliente, senha_cliente) VALUES(:nome_cliente, :cpf_cliente, :telefone_cliente, :email_cliente, :senha_cliente);');

  $query->execute(array(
    ':nome_cliente' => $nome_cliente,
    ':cpf_cliente' => $cpf_cliente,
    ':telefone_cliente' => $telefone_cliente,
    ':email_cliente' => $email_cliente,
    ':senha_cliente' => $senha_cliente
  ));
 
  
} catch (PDOException $e) {
  echo 'erro';
}

header('Location: tela_principal_construtora.php');
?>


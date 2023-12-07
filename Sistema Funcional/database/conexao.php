<?php
/* Connect to a MySQL database using driver invocation */
try {
    $dsn = 'mysql:dbname=obra360;host=127.0.0.1;port=3307';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    echo "Erro de conexao com o Banco de Dados" . $e->getMessage();

}

?>
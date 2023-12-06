<?php
    //print_r($_GET);
    include('../database/conexao.php');
    if(isset($_GET['idObra'])){
        $idObra = $_GET['idObra'];
    }else{
        echo 'Variaveis não definidas';
        die();
    }

    try{
        $query = $dbh->prepare('DELETE FROM obras WHERE id_obra=:idObra;');

        $query->execute(array(
            ':idObra' => $idObra)
        );
        
    }catch(PDOException $e){
        echo 'erro';
    }

    header('Location: tela_principal_construtora.php');
?>
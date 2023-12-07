<?php
    print_r($_SESSION);
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION["email_funcionario"])) {
        echo 'Entre no sistema para acessar essa pagina <a href="./">Clique aqui</a>';
        die();
    }
?>
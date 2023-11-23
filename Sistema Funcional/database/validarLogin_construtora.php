<?php
    //inclusão da conexão
    include("conexao.php");

    //Criando variaveis para realização da consulta ao banco de dados
    //Variaveis do funcionario
    $email_func_const = $_POST['email_func_const'];
    $senha_func_const = $_POST['senha_func_const'];


    //Verficando se o usuário digitou os campos obrigatórios
    if (empty($email_func_const) || empty($senha_func_const)){
        //Utilizando alerta em javaScript para exibição de mensagem
        echo "<script>alert('Campos obrigatórios vazios')</script>";
    
    }else{
        //Tentando realizar consulta, o try é importante pois o erro não exibido por padrão ao usuário

        try{
            //Preparando instrução para a consulta do banco de dados

            $query_func = $dbh->prepare("SELECT id_func_const,email_func_const,senha_func_const FROM funcionarios_construtora WHERE email_func_const=:email_func_const AND senha_func_const=:senha_func_const;");
            $query_func->execute(array(
                ':email_func_const' => $email_func_const,
                ':senha_func_const' => $senha_func_const
            )
        );
        //Obtendo através do fetch uma única linha de resultado do banco
        $resultado = $query_func->fetch();
        //print_r($resultado);
        if(empty($resultado)){
            echo "<script>alert('Usuário e/ou senha invalidos')</script>";
        }else{
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $resultado['id_func_const'];
            $_SESSION['email'] = $resultado['email_func_const'];
            header('Location: ../../content/tela_principal_construtora.php');
        }

        } catch(Exception $e){
            echo $e;
        }
    } 

?>
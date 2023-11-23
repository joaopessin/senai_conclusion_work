<?php
    //inclusão da conexão
    include("conexao.php");

    //Variaveis do cliente 
    $email_cliente = $_POST['email_cliente'];
    $senha_cliente = $_POST['senha_cliente'];
 
 
    //Validando cliente
    if (empty($email_cliente) || empty($senha_cliente)){
         echo "<script>alert('Campos obrigatórios vazios')</script>";
    }else{
 
        try{
            
            $query_cliente = $dbh->prepare("SELECT id_cliente,email_cliente,senha_cliente FROM clientes WHERE email_cliente=:email_cliente AND senha_cliente=:senha_cliente;");
            $query_cliente->execute(array(
                ':email_cliente' => $email_cliente,
                ':senha_cliente' => $senha_cliente
            )
 
        );    
        
        $resultado2 = $query_cliente->fetch();
        if(empty($resultado2)){
            echo "<script>alert('Usuário e/ou senha invalidos')</script>";
        }else{
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $resultado2['id_cliente'];
            $_SESSION['email'] = $resultado2['email_cliente'];
            header('Location: ../../content/tela_principal_cliente.php');
 
        }
 
        } catch(Exception $e){
            echo $e;
        }
    }
?>
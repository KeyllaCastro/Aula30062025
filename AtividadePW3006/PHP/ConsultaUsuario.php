<?php

    require_once 'Conexao.php'; //conecta no banco

    $email = $_POST['emailFormulario'];


    if(!empty($email)){

        $sql = "SELECT * FROM usuarios WHERE email = :email";

        //instrução consulta

        $requisicao = $conexao->prepare($sql);
        $requisicao->bindParam(':email', $email);
        try {
            $requisicao->execute();
            if($requisicao->rowCount() > 0){
                echo "Usuário encontrado com sucesso!";
            }else{
                echo"Usuário não existe!";
            }
        }catch(PDOException $e) {
            echo "ERRO AO CONSULTAR". $e->getMessage();
        }



    }else{
        echo "Digite um email para consultar!";
    }



?>
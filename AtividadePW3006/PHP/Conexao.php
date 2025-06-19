<?php

//declarando as variáveis que vamos utilizar na conexão
$host = '127.0.0.1';
$nomeBanco = 'crud_pdo';
$usuario = 'root';
$senha = '123456';

//Criar um novo objeto que conecta no banco de dados
//vamos utilizar PDO para isso, passando as variáveis como parametro.

try{

    $conexao = new PDO(
        "mysql:host=$host;
        dbname=$nomeBanco; charset=UTF8",
        $usuario,
        $senha
    );
    //Define como o PDO vai tratar o erro
    //No caso, vai lançar uma exceção, que posteriormente será tratada no CATCH
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão realizada com êxito! <br><hr><br>';


}catch(PDOException $e){

    echo 'ERRO: '. $e->getMessage();
     return null;
}

?>
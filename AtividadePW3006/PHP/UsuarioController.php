<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['requisicao'])) {
$requisicao = $_POST['requisicao'];

switch($requisicao){
    case 'Atualizar':
        include "AtualizaUsuario.php";
        break;
    case "Cadastrar";
        include "CadastroUsuario.php";
        break;
    case "Consultar";
        include "ConsultaUsuario.php";
        break;
    case "Remover";
        include "RemoveUsuario.php";
        break;

        default:
        echo "Ação Inválida, por gentileza seleciona uma opção válida";
        break;
}
}

?>
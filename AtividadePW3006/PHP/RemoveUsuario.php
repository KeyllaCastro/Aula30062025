<?php
require_once 'Conexao.php';

if (isset($_POST['emailFormulario'])) {
    $email = $_POST['emailFormulario'];

    if (!empty($email)) {
        $sql = "DELETE FROM usuarios WHERE email = :email";
        $requisicao = $conexao->prepare($sql);
        $requisicao->bindParam(':email', $email);

        try {
            $requisicao->execute();
            
            if ($requisicao->rowCount() > 0) {
                echo "Usuário removido com sucesso!";
            } else {
                echo "Nenhum usuário encontrado com este email.";
            }
        } catch (PDOException $e) {
            // Mensagem de erro pura (sem HTML/JS):
            echo "Erro ao remover usuário: " . $e->getMessage();
        }
    } else {
        echo "Por favor, informe um email válido.";
    }
} else {
    echo "Requisição inválida. O campo email é obrigatório.";
}
?>
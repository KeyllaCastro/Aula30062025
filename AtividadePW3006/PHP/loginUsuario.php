<?php

require_once 'Conexao.php';

// Verifica se os campos foram enviados via POST
if(isset($_POST['emailFormulario']) && isset($_POST['senhaFormulario'])) {
    $email = $_POST['emailFormulario'];
    $senha = $_POST['senhaFormulario'];

    if(!empty($email) && !empty($senha)) {
        // Instrução SQL para buscar o usuário pelo email
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        
        // Preparar a consulta
        $requisicao = $conexao->prepare($sql);
        $requisicao->bindParam(':email', $email);
        
        try {
            $requisicao->execute();
            
            // Verifica se encontrou o usuário
            if($requisicao->rowCount() == 1) {
                $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);
                
                // Verifica se a senha está correta
                if(password_verify($senha, $usuario['senha'])) {
                    // Login bem-sucedido
                    session_start();
                    $_SESSION['usuario_logado'] = true;
                    $_SESSION['usuario_email'] = $usuario['email'];
                    $_SESSION['usuario_nome'] = $usuario['nome'];
                    
                    header('Location: ../pagina_principal.php'); // fazer
                    exit();
                } else {
                    // Senha incorreta
                    echo '<script>
                        Swal.fire({
                            title: "Erro!",
                            text: "Senha incorreta!",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    </script>';
                }
            } else {
                // Usuário não encontrado
                echo '<script>
                    Swal.fire({
                        title: "Erro!",
                        text: "Usuário não encontrado!",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
        } catch(PDOException $e) {
            echo '<script>
                Swal.fire({
                    title: "Erro!",
                    text: "Erro ao realizar login: '.$e->getMessage().'",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            </script>';
        }
    } else {
        echo '<script>
            Swal.fire({
                title: "Erro!",
                text: "Preencha todos os campos!",
                icon: "warning",
                confirmButtonText: "OK"
            });
        </script>';
    }
} else {
    echo '<script>
        Swal.fire({
            title: "Erro!",
            text: "Requisição inválida!",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>';
}

?>
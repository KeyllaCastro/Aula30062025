function cadastro(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtém os valores dos campos
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var senha2 = document.getElementById('senha2').value;

    // Verifica se os campos estão preenchidos
    if (email == "" || senha == "" || senha2 == "") {
        Swal.fire({
            title: 'Erro!',
            text: 'Preencha todos os campos.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    } else if (senha != senha2) { 
        // Verifica se as senhas coincidem
        Swal.fire({
            title: 'Erro!',
            text: 'As senhas não coincidem. Tente novamente.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    } else {
        // Redireciona para a página home.html após cadastro bem-sucedido
        Swal.fire({
            title: 'Cadastro realizado!',
            text: 'Bem-vindo!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() => {
                location.href = "../paglogin/index.html"; // Caminho corrigido
            }, 100);
        });
    }
}

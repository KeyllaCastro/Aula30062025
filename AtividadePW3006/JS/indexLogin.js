function logar(event) {
    event.preventDefault();

    var usuario = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if (usuario == 'admin@example.com' && senha == 'admin') {
        Swal.fire({
            title: 'Login realizado!',
            text: 'Bem-vindo, ' + usuario + '!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() => {
                location.href = "../login/html/home.html"; // Caminho corrigido
            }, 100); 
        });
    } else {
        Swal.fire({
            title: 'Erro!',
            text: 'Usuário ou senha incorretos.',
            icon: 'error',
            confirmButtonText: 'Tentar novamente'
        });
    }
}



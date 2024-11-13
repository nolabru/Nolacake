function passwordReveal() {
    let senha = document.getElementById('password');
    let verSenha = document.getElementById('eye');

    if (senha.type === 'password') {
        senha.setAttribute('type', 'text');
        verSenha.classList.add('reveal');
    }
    else {
        senha.setAttribute('type', 'password');
        verSenha.classList.remove('reveal');
    }

}
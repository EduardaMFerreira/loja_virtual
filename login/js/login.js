
// Função para alternar a visibilidade da senha no campo de senha
const togglePassword = document.getElementById('toggle-password');
const passwordField = document.getElementById('senha');

togglePassword.addEventListener('click', function () {
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
    this.classList.toggle('fa-eye-slash');
});

// Função para fechar o formulário de login ao clicar no ícone de fechar
const fecharLogin = document.getElementById('fechar-login');
fecharLogin.addEventListener('click', function () {
    document.querySelector('.container').style.display = 'none';
});
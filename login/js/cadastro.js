
// Funcionalidade de mostrar/esconder senha para o campo 'senha'
const toggleSenha = document.getElementById('toggle-senha');
const senhaField = document.getElementById('senha');

toggleSenha.addEventListener('click', function () {
    const type = senhaField.type === 'password' ? 'text' : 'password';
    senhaField.type = type;
    this.classList.toggle('fa-eye-slash');
});

// Funcionalidade de mostrar/esconder senha para o campo 'confirmar senha'
const toggleConfirmaSenha = document.getElementById('toggle-confirma-senha');
const confirmaSenhaField = document.getElementById('confirma-senha');

toggleConfirmaSenha.addEventListener('click', function () {
    const type = confirmaSenhaField.type === 'password' ? 'text' : 'password';
    confirmaSenhaField.type = type;
    this.classList.toggle('fa-eye-slash');
});

// Fechar o formulário de cadastro ao clicar no X
const fecharCadastro = document.getElementById('fechar-cadastro');
fecharCadastro.addEventListener('click', function () {
    document.querySelector('.container').style.display = 'none';
});

// Validar senhas antes de enviar o formulário
document.querySelector('.cadastro-form').addEventListener('submit', function (e) {
    const senha = document.getElementById('senha').value;
    const confirmaSenha = document.getElementById('confirma-senha').value;

    if (senha !== confirmaSenha) {
        alert('As senhas não coincidem!');
        e.preventDefault(); // Impede o envio do formulário
    }
});
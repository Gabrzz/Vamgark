const emailInput = document.getElementById('email');
const nomeCampo = document.getElementById('nome-campo');
const senhaCampo = document.getElementById('senha-campo');
const botaoSubmit = document.getElementById('botao-submit');
const emailError = document.getElementById('email-error');
const nomeError = document.getElementById('nome-error');
const senhaError = document.getElementById('senha-error');
const form = document.getElementById('login-form');

emailInput.addEventListener('blur', () => {
  const email = emailInput.value;
  const emailValido = email.endsWith('@vamgark.com');

  if (emailValido) {
    // Verifica se o email já existe no banco de dados
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../models/verifica_email.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (this.status == 200) {
        const emailExiste = this.responseText;
        if (emailExiste == true) {
          // Se o email existe, mostra o campo de senha e o botão "Entrar"
          senhaCampo.style.display = 'block';
          nomeCampo.style.display = 'none'; // Esconde o campo nome
          botaoSubmit.textContent = 'Entrar';
        } else {
          // Se o email não existe, mostra os campos de nome e senha e o botão "Registrar"
          nomeCampo.style.display = 'block';
          senhaCampo.style.display = 'block';
          botaoSubmit.textContent = 'Registrar';
        }
        emailError.textContent = ''; // Limpa a mensagem de erro
      }
    }
    xhr.send('email=' + email);
  } else {
    // Se o email não for válido, esconde os campos de nome e senha
    nomeCampo.style.display = 'none';
    senhaCampo.style.display = 'none';
    botaoSubmit.textContent = 'Próximo'; // Volta o texto do botão para o padrão
    emailError.textContent = 'E-mail inválido. Use um e-mail @vamgark.com.';
  }
});

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const email = emailInput.value;
  const nome = document.getElementById('nome').value;
  const senha = document.getElementById('senha').value;

  let erro = false;

  if (!email.endsWith('@vamgark.com')) {
    emailError.textContent = 'E-mail inválido. Use um e-mail @vamgark.com.';
    erro = true;
  } else {
    emailError.textContent = '';
  }

  if (nomeCampo.style.display === 'block' && nome.trim() === '') {
    nomeError.textContent = 'Por favor, insira seu nome.';
    erro = true;
  } else {
    nomeError.textContent = '';
  }

  if (senha.trim() === '') {
    senhaError.textContent = 'Por favor, insira sua senha.';
    erro = true;
  } else {
    senhaError.textContent = '';
  }

  if (!erro) {
    // Envia os dados para o servidor via AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../models/processa_login.php', true); 
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      const Status = this.responseText
      console.log (Status)
      if (this.status == 200) {
        if (Status == 1) {
          // Redireciona para a página home após o login/registro
          window.location.href = '../views/Home/index.php';
        } else {
          alert('Erro ao fazer login/registrar. Código de Erro: ' + this.responseText);
        }
      }
    }
    xhr.send('email=' + email + '&nome=' + nome + '&senha=' + senha);
  }
});
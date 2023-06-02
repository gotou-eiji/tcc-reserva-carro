function showForm(formType) {
    document.getElementById('formSelection').style.display = 'none';
    if (formType === 'funcionario') {
      document.getElementById('funcionarioForm').style.display = 'block';
    } 
  }

  function submitForm(formType) {
    event.preventDefault();
    if (formType === 'funcionario') {
      var nomeCompleto = document.getElementById('nomeCompleto').value;
      var dataNascimento = document.getElementById('dataNascimento').value;
      var cpf = document.getElementById('cpf').value;
      var telefone = document.getElementById('telefone').value;
      var email = document.getElementById('email').value;
      var funcao = document.getElementById('funcao').value;
      var empresa = document.getElementById('empresa').value;
      var cep = document.getElementById('cep').value;
      var sexo = document.getElementById('sexo').value;

      // Validação do CPF
      if (!validarCPF(document.getElementById('cpf'))) {
      return;
    }

      // Aqui você pode fazer o que quiser com os dados da pessoa física
      console.log('Funcionário');
      console.log('Nome Completo:', nomeCompleto);
      console.log('Data de Nascimento:', dataNascimento);
      console.log('CPF:', cpf);
      console.log('Telefone:', telefone);
      console.log('Email:', email);
      console.log('Funcao:', funcao);
      console.log('Empresa:', empresa);
      console.log('CEP:', cep);
      console.log('Sexo:',sexo);
     } 
  }

  // Função para formatar CPF
function formatarCPF(cpfInput) {
    let cpf = cpfInput.value;
  
    // Remove todos os caracteres que não sejam dígitos
    cpf = cpf.replace(/\D/g, '');
  
    // Adiciona a máscara
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
  
    // Atualiza o valor no campo
    cpfInput.value = cpf;
  }

  function validarCPF(cpfInput) {
    var cpf = cpfInput.value;
  
    // Remove todos os caracteres que não sejam dígitos
    cpf = cpf.replace(/\D/g, '');
  
    // Verifica se o CPF tem 11 dígitos
    if (cpf.length !== 11) {
      alert('CPF inválido (por tamanho)');
      return false;
    }
  
    // Verifica se todos os dígitos são iguais
    if (/^(\d)\1*$/.test(cpf)) {
      alert('CPF inválido (dígitos iguais)');
      return false;
    }
  
    // Verifica se o CPF é válido pelos cálculos
    var soma = 0;
    var resto;
    for (var i = 1; i <= 9; i++) {
      soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }
    resto = (soma * 10) % 11;
  
    if (resto === 10 || resto === 11) {
      resto = 0;
    }
  
    if (resto !== parseInt(cpf.substring(9, 10))) {
      alert('CPF inválido (por cálculos)');
      return false;
    }
  
    soma = 0;
    for (var i = 1; i <= 10; i++) {
      soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }
    resto = (soma * 10) % 11;
  
    if (resto === 10 || resto === 11) {
      resto = 0;
    }
  
    if (resto !== parseInt(cpf.substring(10, 11))) {
      alert('CPF inválido (por cálculos)');
      return false;
    }
  
    // CPF válido
    return true;
  }
  
  // Função para formatar telefone
  function formatarTelefone(telefoneInput) {
    let telefone = telefoneInput.value;
  
    // Remove todos os caracteres que não sejam dígitos
    telefone = telefone.replace(/\D/g, '');
  
    // Adiciona a máscara
    telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
  
    // Atualiza o valor no campo
    telefoneInput.value = telefone;
  }
  
  // Função para formatar CEP
function formatarCEP(cepInput) {
    var cep = cepInput.value;
  
    // Remove todos os caracteres que não sejam dígitos
    cep = cep.replace(/\D/g, '');
  
    // Adiciona a máscara
    cep = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
  
    // Atualiza o valor no campo
    cepInput.value = cep;
  }

    //Função para formatar Data Nascimento
  
    // Função para adicionar a máscara de data de nascimento (DD/MM/AAAA)
    function addDateMask(input) {
      input.addEventListener('input', function (e) {
        var value = e.target.value;
        var sanitizedValue = value.replace(/[^0-9]/g, '');
        var formattedValue = '';

        if (sanitizedValue.length >= 1) {
          formattedValue = sanitizedValue.slice(0, 2);

          if (sanitizedValue.length >= 3) {
            formattedValue += '/' + sanitizedValue.slice(2, 4);

            if (sanitizedValue.length >= 5) {
              formattedValue += '/' + sanitizedValue.slice(4, 8);
            }
          }
        }

        e.target.value = formattedValue;
      });
    }

    // Adicionando a máscara para o campo de data de nascimento
    var dataNascimentoInput = document.getElementById('dataNascimento');
    addDateMask(dataNascimentoInput);

    function goBack(){
      window.history.back()
    }

    function validarEmail(email) {
      var regex = /\S+@\S+\.\S+/;
      if (regex.test(email)) {
        // Email válido
        return true;
      } else {
        // Email inválido
        alert("O email digitado não é válido!");
        return false;
      }
    }
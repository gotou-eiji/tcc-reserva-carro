// Função para formatar CPF
function formatarCPF(cpfInput) {
    var cpf = cpfInput.value;
  
    // Remove todos os caracteres que não sejam dígitos
    cpf = cpf.replace(/\D/g, '');
  
    // Adiciona a máscara
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
  
    // Atualiza o valor no campo
    cpfInput.value = cpf;
  }
  
  // Função para formatar telefone
  function formatarTelefone(telefoneInput) {
    var telefone = telefoneInput.value;
  
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

  
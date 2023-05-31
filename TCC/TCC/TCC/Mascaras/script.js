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
  
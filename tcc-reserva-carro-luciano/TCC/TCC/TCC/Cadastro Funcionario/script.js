function showForm(formType) {
    document.getElementById('formSelection').style.display = 'none';
    if (formType === 'pessoaFisica') {
      document.getElementById('pessoaFisicaForm').style.display = 'block';
    } else if (formType === 'pessoaJuridica') {
      document.getElementById('pessoaJuridicaForm').style.display = 'block';
    }
  }

  function submitForm(formType) {
    event.preventDefault();
    if (formType === 'pessoaFisica') {
      var nomeCompleto = document.getElementById('nomeCompleto').value;
      var dataNascimento = document.getElementById('dataNascimento').value;
      var cpf = document.getElementById('cpf').value;
      var email = document.getElementById('email').value;
      var telefone = document.getElementById('telefone').value;
      var funcao = document.getElementById('funcao').value;
      var empresa = document.getElementById('empresa').value;
      var cep = document.getElementById('cep').value;

      // Aqui você pode fazer o que quiser com os dados da pessoa física
      console.log('Pessoa Física:');
      console.log('Nome Completo:', nomeCompleto);
      console.log('Data de Nascimento:', dataNascimento);
      console.log('CPF:', cpf);
      console.log('Email:', email);
      console.log('Telefone:', telefone);
      console.log('Função:', funcao);
      console.log('Empresa:', empresa);
      console.log('CEP:', cep);
    } else if (formType === 'pessoaJuridica') {
      var nomeFantasia = document.getElementById('nomeFantasia').value;
      var nomeEmpresa = document.getElementById('nomeEmpresa').value;
      var telefoneJuridica = document.getElementById('telefoneJuridica').value;
      var cnpj = document.getElementById('cnpj').value;
      var emailJuridica = document.getElementById('emailJuridica').value;
      var cepJuridica = document.getElementById('cepJuridica').value;
      var razaoSocial = document.getElementById('razaoSocial').value;
      var inscricaoEstadual = document.getElementById('inscricaoEstadual').value;
      var tipoEmpresa = document.getElementById('tipoEmpresa').value;

      // Aqui você pode fazer o que quiser com os dados da pessoa jurídica
      console.log('Pessoa Jurídica:');
      console.log('Nome Fantasia:', nomeFantasia);
      console.log('Nome da Empresa:', nomeEmpresa);
      console.log('Telefone:', telefoneJuridica);
      console.log('CNPJ:', cnpj);
      console.log('Email:', emailJuridica);
      console.log('CEP:', cepJuridica);
      console.log('Razão Social:', razaoSocial);
      console.log('Inscrição Estadual:', inscricaoEstadual);
      console.log('Tipo de Empresa:', tipoEmpresa);
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

//Toda função busca CEP
function limpa_formulário_cep() {
  //Limpa valores do formulário de cep.
  document.getElementById('rua').value=("");
  document.getElementById('bairro').value=("");
  document.getElementById('cidade').value=("");
  document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
  //Atualiza os campos com os valores.
  document.getElementById('rua').value=(conteudo.logradouro);
  document.getElementById('bairro').value=(conteudo.bairro);
  document.getElementById('cidade').value=(conteudo.localidade);
  document.getElementById('uf').value=(conteudo.uf);
} //end if.
else {
  //CEP não Encontrado.
  limpa_formulário_cep();
  alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

  //Expressão regular para validar o CEP.
  var validacep = /^[0-9]{8}$/;

  //Valida o formato do CEP.
  if(validacep.test(cep)) {

      //Preenche os campos com "..." enquanto consulta webservice.
      document.getElementById('rua').value="...";
      document.getElementById('bairro').value="...";
      document.getElementById('cidade').value="...";
      document.getElementById('uf').value="...";

      //Cria um elemento javascript.
      var script = document.createElement('script');

      //Sincroniza com o callback.
      script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

      //Insere script no documento e carrega o conteúdo.
      document.body.appendChild(script);

  } //end if.
  else {
      //cep é inválido.
      limpa_formulário_cep();
      alert("Formato de CEP inválido.");
  }
} //end if.
else {
  //cep sem valor, limpa formulário.
  limpa_formulário_cep();
}
};

function formatarCEP(cepInput) {
var cep = cepInput.value;

// Remove todos os caracteres que não sejam dígitos
cep = cep.replace(/\D/g, '');

// Adiciona a máscara
cep = cep.replace(/(\d{5})(\d{3})/, '$1-$2');

// Atualiza o valor no campo
cepInput.value = cep;
}

// Função para enviar os dados do formulário de cadastro de pessoa física
function cadastrarPessoaFisica(event) {
    event.preventDefault(); // Impede o envio do formulário
  
    // Obtenção dos valores dos campos do formulário
    var nome = document.getElementById("nome").value;
    var cpf = document.getElementById("cpf").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var endereco = document.getElementById("endereco").value;
    var funcao = document.getElementById("funcao").value;
    var emprego = document.getElementById("emprego").value;
  
    // Exibição dos dados cadastrados (pode ser alterado de acordo com a necessidade)
    alert("Dados cadastrados:\n\n" +
          "Nome: " + nome + "\n" +
          "CPF: " + cpf + "\n" +
          "Email: " + email + "\n" +
          "Telefone: " + telefone + "\n" +
          "Endereço: " + endereco + "\n" +
          "Função: " + funcao + "\n" +
          "Emprego: " + emprego);
  
    // Aqui você pode fazer o envio dos dados para o servidor ou realizar outras ações necessárias.
  }
  
  // Adiciona o evento de submit ao formulário
  document.getElementById("cadastroForm").addEventListener("submit", cadastrarPessoaFisica);
  
  // Função para redirecionar para a página de cadastro de Pessoa Física
function goToPessoaFisicaPage() {
      window.location.href = "cadastro_pessoa_fisica.html";
    }
    
    // Função para redirecionar para a página de cadastro de Pessoa Jurídica
    function goToPessoaJuridicaPage() {
      window.location.href = "cadastro_pessoa_juridica.html";
    }
    
    // Adiciona os eventos de clique aos botões
    document.getElementById("pessoaFisicaBtn").addEventListener("click", goToPessoaFisicaPage);
    document.getElementById("pessoaJuridicaBtn").addEventListener("click", goToPessoaJuridicaPage);
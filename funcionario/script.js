
const form = document.getElementById("form");
const username = document.getElementById("Nome")
const email = document.getElementById("email")
const telefone = document.getElementById("telefone")
const funcao = document.getElementById("funcao")
const emprego = document.getElementById("emprego")
const data = document.getElementById("data")
const cep = document.getElementById("cep")



form.addEventListener("submit", (event) => {
  event.preventDefault();

  checkForm();
})

username.addEventListener("blur", () => {
  checkInputUsername();
})

email.addEventListener("blur", () => {
  checkInputEmail();
})

telefone.addEventListener("blur", () => {
  checkInputTelefone();
})

funcao.addEventListener("blur", () => {
  checkInputFuncao();
})

emprego.addEventListener("blur", () => {
  checkInputEmprego();
})

data.addEventListener("blur", () => {
  checkInputData();
})

cep.addEventListener("blur", () => {
  checkInputCep();
})



function checkInputUsername(){
  const usernameValue = username.value;

  if(usernameValue === ""){
    errorInput(username, "Preencha o Nome!")
  }else{
    const formItem = username.parentElement;
    formItem.className = "form-content"
  }

}

function checkInputEmail(){
  const emailValue = email.value;

  if(emailValue === ""){
    errorInput(email, "O Email é obrigatório.")
  }else{
    const formItem = email.parentElement;
    formItem.className = "form-content"
  }


}


function checkInputTelefone(){
  const telefoneValue = telefone.value;

  if(telefoneValue === ""){
    errorInput(telefone, "O Telefone é obrigatório.")
  }else if(telefoneValue.length < 9){
    errorInput(telefone, "O Telefone precisa ter 9 digitos.")
  }else{
    const formItem = telefone.parentElement;
    formItem.className = "form-content"
  }


}

function checkInputFuncao(){
  const funcaoValue = funcao.value;

  if(funcaoValue === ""){
    errorInput(funcao, "A Funcao é obrigatório.")
  }else{
    const formItem = funcao.parentElement;
    formItem.className = "form-content"
  }


}

function checkInputEmprego(){
  const empregoValue = emprego.value;

  if(empregoValue === ""){
    errorInput(emprego, "O Emprego é obrigatório.")
  }else{
    const formItem = emprego.parentElement;
    formItem.className = "form-content"
  }


}

function checkInputData(){
  const dataValue = data.value;

  if(dataValue === ""){
    errorInput(data, "O Data de Nascimento é obrigatório.")
  }else{
    const formItem = data.parentElement;
    formItem.className = "form-content"
  }


}

function checkInputCep(){
  const cepValue = cep.value;

  if(cepValue === ""){
    errorInput(cep, "O Cep de Nascimento é obrigatório.")
  }else{
    const formItem = cep.parentElement;
    formItem.className = "form-content"
  }


}



function checkForm(){
  checkInputUsername();
  checkInputEmail();
  checkInputTelefone();
  checkInputFuncao();
  checkInputEmprego();
  checkInputData();
  checkInputCep();


  const formItems = form.querySelectorAll(".form-content")

  const isValid = [...formItems].every( (item) => {
    return item.className === "form-content"
  });

  if(isValid){
    alert("CADASTRADO COM SUCESSO!")
    //form.submit(); // Envia o formulário para a página especificada no atributo "action" do elemento <form>

  }

}


function errorInput(input, message){
  const formItem = input.parentElement;
  const textMessage = formItem.querySelector("a")

  textMessage.innerText = message;

  formItem.className = "form-content error"

}
insert into funcionario (idfuncionario,nome,cpf,email,telefone,funcao,emprego,sexo,data_nascimento,cep)
 values ("1","rafael","94020192","rafael@gmail.com","42718724","entregador","muffato","masculino",'2003-04-10',"87090532");
insert into login (idlogin,funcionario_idfuncionario,usuario,senha,admin)
 values ("1","1","admin","8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918","1");

//o usuário e a senha do login que está criptografado é "admin".
create database corujaogames;
use corujaogames;

create table usuario(
	cpf varchar(14) not null primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null,
	endereco varchar(100),
    cep varchar(9)
);

create table produto(
    id int, 
    titulo varchar(100) not null, 
    descricao varchar(300) not null, 
    url_imagem varchar(100) not null, 
    preco double not null, 
    tipo_produto varchar(200) not null, 
    plataforma varchar(100) not null, 
    primary key(id));
);

drop database corujaogames;
select * from usuario;



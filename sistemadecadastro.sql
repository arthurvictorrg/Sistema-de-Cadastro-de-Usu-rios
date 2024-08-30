create database sistema_usuarios;
USE sistema_usuarios;
create table usuarios (
	id int auto_increment primary key,
    nome varchar(100),
    email varchar(100),
    senha VARCHAR(100)
);
select * from usuarios;
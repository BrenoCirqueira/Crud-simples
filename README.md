DATABASE REFERENCE

create database crud;
use crud;

create table usuario (
	id_usuario						int primary key auto_increment,
	nome_usuario					varchar(40),
	senha_usuario					varchar(20),
	email_usuario					varchar(200) unique,	
	data_nasc_usuario				date
);

select * from usuario;
drop table usuario;

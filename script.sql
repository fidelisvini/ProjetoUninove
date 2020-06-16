create database projetodb;

use projetodb;

create table prod_produto (
    prod_id int auto_increment,
    prod_nome varchar(40),
    prod_desc varchar(40),
    prod_quant int,
    prod_preco decimal(4, 2),
    prod_data date,
    prod_fornecedor int,
    primary key (prod_id)
);

create table forn_fornecedor(
    forn_id int auto_increment,
    forn_nome varchar(40),
    forn_cnpj varchar(40),
    forn_telefone varchar(20),
    primary key (forn_id)
);

create table usua_usuario(
    usua_id int auto_increment,
    usua_nome varchar(40),
    usua_email varchar(40) unique,
    usua_senha varchar(20),
    usua_admin boolean default false,
    primary key (usua_id)
);

alter table prod_produto add constraint prod_fornecedor_fk foreign key (prod_fornecedor) references forn_fornecedor(forn_id);

insert into usua_usuario (usua_nome, usua_email, usua_senha) values ('admin', 'admin', 'admin');
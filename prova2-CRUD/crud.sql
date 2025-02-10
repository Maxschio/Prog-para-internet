CREATE table usuarios(
    id INT primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100),
    senha varchar(255));
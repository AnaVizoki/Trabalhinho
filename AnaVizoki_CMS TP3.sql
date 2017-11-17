create table clientes (
cod_cliente int(5) primary key auto_increment,
nome_cliente varchar(50),
email_cliente varchar(40)
)default char set = utf8;
create table modalidades (
cod_mod int(5) primary key auto_increment,
nome_mod varchar(40),
preco decimal(5,2)
)default char set = utf8;
create table matriculas (
cod_matricula int(5) primary key auto_increment,
cod_cliente int(5),
cod_mod int(5),
data_inicio date,
data_fim date
) default char set = utf8;
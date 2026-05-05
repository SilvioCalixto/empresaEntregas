
create table endereco (
	codigo int not null primary key auto_increment,
    logradouro varchar(45),
    numero int,
    bairro varchar(20),
    estado varchar(45),
    cep varchar(10)
) engine = InnoDB;

create table cliente (
	codigo int not null primary key auto_increment,
    nome varchar(45),
    cnpj varchar(20),
    telefone varchar(17),
    codigoEndereco int
) engine = InnoDB;
   
alter table cliente add constraint clienteEndereco
foreign key(codigoEndereco) references endereco(codigo);

create table veiculo (
	codigo int not null primary key auto_increment,
    tipo varchar(20),
    modelo varchar(20),
    ano date,
    cor varchar(45),
    placa varchar(20)
) engine = InnoDB;

create table entregador (
	codigo int not null primary key auto_increment,
    nome varchar(45),
    cpf varchar(15),
    cnh varchar(15)
)engine = InnoDB;

create table encomenda (
	codigo int not null primary key auto_increment,
    descricao varchar(200),
    peso decimal(3,2),
    valorDeclarado decimal(5,2),
    horarioPrevisto time,
    situacao varchar(10),
    codigoCliente int,
    codigoRoteiroEntrega int
) engine = InnoDB;

alter table encomenda add constraint encomendaCliente
foreign key (codigoCliente) references cliente(codigo);

create table roteiroEntrega (
	codigo int not null primary key auto_increment,
    regiaoEntrega varchar(45),
    diaEntrega varchar(15),
    codigoEntregador int,
    codigoVeiculo int
) engine = InnoDB;

alter table encomenda add constraint encomendaRoteiroEntrega
foreign key (codigoRoteiroEntrega) references roteiroEntrega(codigo);
alter table roteiroEntrega add constraint roteiroEntregaEntregador
foreign key (codigoEntregador) references entregador(codigo);
alter table roteiroEntrega add constraint roteiroEntregaVeiculo
foreign key (codigoVeiculo) references veiculo(codigo);

CREATE TABLE usuario (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255)
)engine = InnoDB;

CREATE DATABASE obra360 CHARACTER SET utf8
COLLATE utf8_general_ci;

USE obra360;

CREATE TABLE funcionarios_construtora (
id_func_const INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
email_func_const CHAR(100) NOT NULL,
senha_func_const CHAR(155) NOT NULL
);

CREATE TABLE clientes (
id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_cliente VARCHAR(155),
cpf_cliente VARCHAR(155),
telefone_cliente VARCHAR(155),
email_cliente CHAR(100) NOT NULL,
senha_cliente CHAR(155) NOT NULL
);

INSERT INTO funcionarios_construtora (email_func_const, senha_func_const) VALUES ('layson@gmail.com','123');
INSERT INTO clientes (email_cliente, senha_cliente) VALUES ('felipe@gmail.com','321');


CREATE TABLE obras (
id_obra INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_obra VARCHAR(50) NOT NULL,
descricao_obra VARCHAR(255) NOT NULL,
endereco_obra VARCHAR(100) NOT NULL
);

CREATE TABLE construtora(
id_construtora INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_construtora VARCHAR(50) NOT NULL,
descricao_construtora VARCHAR(255) NOT NULL,
endereco_construtora VARCHAR(100) NOT NULL
);

CREATE TABLE etapas (
id_etapa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_etapa VARCHAR(50) NOT NULL,
descricao_etapa VARCHAR(1000) NOT NULL,
duracao VARCHAR(50) NOT NULL,
periodicidade_atualizacao VARCHAR(50) NOT NULL
);


CREATE TABLE atualizacoes(
id_atualizacao INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_atualizacao VARCHAR(50) NOT NULL,
descricao_atualizacao VARCHAR(255) NOT NULL,
data_atualizacao DATE NOT NULL,
foto_atualizacao CHAR(255)
);

CREATE TABLE funcionarios(
id_funcionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_funcionario VARCHAR(255) NOT NULL,
cargo_funcionario VARCHAR(50) NOT NULL
);

INSERT INTO etapas (nome_etapa, descricao_etapa, duracao, periodicidade_atualizacao) values
('Terraplanagem', 'A terraplanagem é uma técnica que consiste em cortar e retirar o excesso de terra de um ambiente a fim de deixar a região nivelada.
	Nesse método, o material retirado é, muitas vezes, utilizado para cobrir outros espaços mais vazios de forma a deixar tudo plano.', '30 dias', 'quinzenal'),
('Funcação', 'A fundação é a estrutura que permite a distribuição de carregamentos (como o peso dos materiais) para o solo na construção de casas, prédios, viadutos ou qualquer grande edificação.
	Por esse motivo, é também uma das primeiras etapas a ser realizada no momento de levantar uma obra.', '30 dias', 'quinzenal'),
('Alvenaria', 'Alvenaria é um conceito da construção civil que designa o conjunto de pedras, tijolos ou blocos que reunidos formam paredes, muros ou alicerces de uma edificação.', 
	'45 dias', 'semanal'),
('Cobertura', 'Em geral, podemos definir as coberturas como sendo as estruturas que envolvem uma edificação pela parte superior.
 Desta maneira, pretendem garantir a proteção da edificação contra qualquer tipo de ação de intempéries e fatores externos.', '20 dias', 'semanal'),
('Elétrica', 'Consiste no processo de assegurar que toda a parte elétrica e fornecimento de energia do imóvel estejam adequados. Além disso, garante a segurança contra acidentes que
poderiam gerar danos maiores.', '14 dias', 'semanal'),
('Hidráulica', 'As instalações hidráulicas são compostas de sistemas e subsistemas de uma edificação que servem para captar, transportar e armazenar fluidos
 e podem ser instalações de água fria, de esgoto, de água quente, instalações de água pluvial ou de combate a incêndios, por exemplo.', '14 dias', 'semanal'),
('Acabamento', 'O acabamento é a parte da construção que fica exposta, sendo minuciosamente observada por todos.
 Portanto, além de garantir a beleza do imóvel, a qualidade do acabamento é essencial para promover funcionalidade e durabilidade ao empreendimento.', '60 dias', 'semanal');
 
select * from etapas;
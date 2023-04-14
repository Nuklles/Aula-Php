CREATE DATABASE FPB;
USE FPB;

CREATE TABLE funcao (
id_funcao INTEGER,
descricao VARCHAR(100),
CONSTRAINT pk_id_funcao PRIMARY KEY (id_funcao)
);

CREATE TABLE cadastro (
matricula VARCHAR(15),
nome VARCHAR(300),
cpf VARCHAR(12),
funcao INTEGER,
CONSTRAINT pk_matricula PRIMARY KEY (matricula),
CONSTRAINT fk_funcao FOREIGN KEY (funcao) REFERENCES funcao (id_funcao)
);

CREATE TABLE cursos (
id_curso INTEGER,
nome VARCHAR(100),
CONSTRAINT pk_id_curso PRIMARY KEY (id_curso)
);

CREATE TABLE ucs (
id_uc INTEGER,
nome VARCHAR(150),
CONSTRAINT pk_id_uc PRIMARY KEY (id_uc)
);

CREATE TABLE turma (
id_turma INTEGER,
professor VARCHAR(15),
aluno VARCHAR(15),
curso INTEGER,
ano INTEGER,
periodo INTEGER,
CONSTRAINT pk_id_turma PRIMARY KEY (id_turma),
CONSTRAINT fk_professor FOREIGN KEY (professor) REFERENCES cadastro (matricula),
CONSTRAINT fk_aluno FOREIGN KEY (aluno) REFERENCES cadastro (matricula),
CONSTRAINT fk_curso FOREIGN KEY (curso) REFERENCES cursos (id_curso)
);

CREATE TABLE notas (
id_notas INTEGER,
aluno VARCHAR(15),
uc INTEGER,
avaliacao1 INTEGER,
avaliacao2 INTEGER,
avaliacao3 INTEGER,
avaliacaoi INTEGER,
CONSTRAINT pk_id_notas PRIMARY KEY (id_notas),
CONSTRAINT fk_aluno_nota FOREIGN KEY (aluno) REFERENCES cadastro (matricula),
CONSTRAINT fk_uc_notas FOREIGN KEY (uc) REFERENCES ucs (id_uc)
);


INSERT INTO funcao (id_funcao, descricao)
VALUES
	(1, 'Aluno'),
	(2, 'Professor'),
	(3, 'Coordenador'),
	(4, 'Adminstrativo');
	
INSERT INTO cursos (id_curso, nome) 
VALUES
	(1, 'Ciências da Computação'),
	(2, 'Analise e Desenvolvimento de Sistemas'),
	(3, 'Gestão de Tecnologia da Informação'),
	(4, 'Jogos Digitais');
	
INSERT INTO ucs (id_uc, nome)
VALUES
	(1, 'Sistemas Distribuídos e Mobile'),
	(2, 'Modelagem de Softwares'),
	(3, 'Computação Gráfica e Realidade Virtual'),
	(4, 'Inteligência Artificial'),
	(5, 'Modelos, Metodos e Técnicas de Engenharia de Softwares');
	
INSERT INTO cadastro (matricula, nome, cpf, funcao)
VALUES
	('2022100001', 'Chuck Norris', '111111111-11', 2),
	('2022100002', 'Arnold Schwazenegger', '222222222-22', 1),
	('2022100003', 'Silverter Stalone', '333333333-33', 1),
	('2022100004', 'Will Smith', '444444444-44', 1),
	('2022100005', 'Leonardo DiCaprio', '555555555-55', 1),
	('2022100006', 'Robert Downey Jr', '666666666-66', 1),
	('2022100007', 'Tom Holland', '777777777-77', 2),
	('2022100008', 'Chris Patt', '888888888-88', 1),
	('2022100009', 'Mark Ruffalo', '999999999-99', 3),
	('2022100000', 'Charlie Sheen', '000000000-00', 4);
    
 set sql_safe_updates=0;
 SET foreign_key_checks=0; 
    

INSERT INTO turma (id_turma, professor, aluno, curso, ano, periodo)
VALUES
	(1, '2022100001', '2022100002', 1, 2022, 1),
	(2, '2022100001', '2022100003', 1, 2022, 1),
	(3, '2022100001', '2022100004', 1, 2021, 2),
	(4, '2022100001', '2022100005', 1, 2021, 1),
	(5, '2022100001', '2022100006', 1, 2021, 2),
	(6, '2022100001', '2022100000', 2, 2021, 2),
	(7, '2022100007', '2022100008', 2, 2022, 2),
	(8, '2022100007', '2022100009', 2, 2022, 2);

INSERT INTO notas 
(id_notas, aluno, uc, avaliacao1, avaliacao2, avaliacao3, avaliacaoi)
VALUES
	(1, '2022100002', 1, 27, 30, 40, 0),
	(2, '2022100003', 1, 14, 22, 40, 0),
	(3, '2022100004', 1, 20, 21, 40, 0),
	(4, '2022100005', 1, 19, 20, 40, 0),
	(5, '2022100006', 1, 03, 19, 40, 0),
	(6, '2022100008', 1, 10, 30, 40, 0),
	(7, '2022100009', 1, 17, 04, 40, 0),
	(8, '2022100002', 2, 10, 15, 40, 0),
	(9, '2022100003', 2, 11, 19, 40, 0),
	(10, '2022100004', 2, 21, 22, 40, 0),
	(11, '2022100005', 2, 12, 21, 40, 0),
	(12, '2022100006', 2, 24, 15, 40, 0),
	(13, '2022100008', 2, 29, 02, 40, 0),
	(14, '2022100009', 2, 22, 28, 40, 0),
	(15, '2022100002', 3, 09, 29, 40, 0),
	(16, '2022100003', 3, 22, 30, 40, 0),
	(17, '2022100004', 3, 22, 21, 40, 0),
	(18, '2022100005', 3, 20, 17, 40, 0),
	(19, '2022100006', 3, 14, 18, 40, 0),
	(20, '2022100008', 3, 21, 19, 40, 0),
	(21, '2022100009', 3, 11, 26, 40, 0),
	(22, '2022100000', 1, 13, 22, 40, 0),
	(23, '2022100000', 2, 18, 30, 40, 0),
	(24, '2022100000', 3, 19, 15, 40, 0);

    CREATE TABLE login (
matricula varchar(50),
login VARCHAR(50),
senha varchar(50),
CONSTRAINT pk_login PRIMARY KEY (matricula)
);
 set sql_safe_updates=1;
 SET forign_key_checks=1
 ;
insert into login (matricula , login, senha)
values ('2022100001', 'aluno', '123456')

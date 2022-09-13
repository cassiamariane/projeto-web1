
CREATE DATABASE progae;
USE progae;

 CREATE TABLE `Usuario` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`nome` varchar(255) NOT NULL,
	`cpf` varchar(255) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`senha` varchar(255) NOT NULL,
	`perfil` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`email`)
);

CREATE TABLE `Projeto` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`descricao` varchar(255) NOT NULL,
	`data_inicio` DATE NOT NULL,
	`data_fim` DATE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Aluno` (
	`matricula` varchar(11) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`curso` varchar(255) NOT NULL,
	`horas_extensionistas` int DEFAULT '0',
	PRIMARY KEY (`matricula`)
);

CREATE TABLE `Responsavel` (
	`ciape` varchar(255) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`ciape`)
);

CREATE TABLE `Coordenacao` (
	`ciape_coordenador` varchar(255) NOT NULL,
	`curso` varchar(255) NOT NULL,
	`departamento` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`ciape_coordenador`)
);

CREATE TABLE `Participa` (
	`matricula_aluno` varchar(11) NOT NULL,
	`id_projeto` int NOT NULL,
	`data_inicio` DATE NOT NULL,
	`data_fim` DATE,
	`horas_validadas` int,
	PRIMARY KEY (`matricula_aluno`,`id_projeto`)
);

CREATE TABLE `Tem_projeto` (
	`ciape_responsavel` varchar(7) NOT NULL,
	`id_projeto` int NOT NULL,
	PRIMARY KEY (`ciape_responsavel`,`id_projeto`)
);

CREATE TABLE `Relatorio` (
	`id` int NOT NULL AUTO_INCREMENT,
	`descricao` TEXT NOT NULL,
	`qtd_horas` int NOT NULL,
	`matricula_aluno` varchar(11) NOT NULL,
	`id_projeto` int NOT NULL,
	`validado` BOOLEAN NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `Solicita` (
	`matricula_aluno` varchar(11) NOT NULL,
	`id_projeto` int NOT NULL,
	`aceito` BOOLEAN NOT NULL DEFAULT '0',
	PRIMARY KEY (`matricula_aluno`,`id_projeto`)
);

ALTER TABLE `Aluno` ADD CONSTRAINT `Aluno_fk0` FOREIGN KEY (`email`) REFERENCES `Usuario`(`email`);

ALTER TABLE `Responsavel` ADD CONSTRAINT `Responsavel_fk0` FOREIGN KEY (`email`) REFERENCES `Usuario`(`email`);

ALTER TABLE `Coordenacao` ADD CONSTRAINT `Coordenacao_fk0` FOREIGN KEY (`email`) REFERENCES `Usuario`(`email`);

ALTER TABLE `Participa` ADD CONSTRAINT `Participa_fk0` FOREIGN KEY (`matricula_aluno`) REFERENCES `Aluno`(`matricula`);

ALTER TABLE `Participa` ADD CONSTRAINT `Participa_fk1` FOREIGN KEY (`id_projeto`) REFERENCES `Projeto`(`id`);

ALTER TABLE `Tem_projeto` ADD CONSTRAINT `Tem_projeto_fk0` FOREIGN KEY (`ciape_responsavel`) REFERENCES `Responsavel`(`ciape`);

ALTER TABLE `Tem_projeto` ADD CONSTRAINT `Tem_projeto_fk1` FOREIGN KEY (`id_projeto`) REFERENCES `Projeto`(`id`);

ALTER TABLE `Relatorio` ADD CONSTRAINT `Relatorio_fk0` FOREIGN KEY (`matricula_aluno`) REFERENCES `Aluno`(`matricula`);

ALTER TABLE `Relatorio` ADD CONSTRAINT `Relatorio_fk1` FOREIGN KEY (`id_projeto`) REFERENCES `Projeto`(`id`);

ALTER TABLE `Solicita` ADD CONSTRAINT `Solicita_fk0` FOREIGN KEY (`matricula_aluno`) REFERENCES `Aluno`(`matricula`);

ALTER TABLE `Solicita` ADD CONSTRAINT `Solicita_fk1` FOREIGN KEY (`id_projeto`) REFERENCES `Projeto`(`id`);
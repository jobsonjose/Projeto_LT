CREATE DATABASE PROJETO_LT;
USE PROJETO_LT;


CREATE TABLE supervisor(

  super_id    INTEGER      NOT NULL AUTO_INCREMENT,
  super_nome  VARCHAR(45)  NOT NULL,
  super_email VARCHAR(255) NOT NULL,
  super_senha VARCHAR(70)  NOT NULL,
  super_tele  VARCHAR(12)  NOT NULL,
  CONSTRAINT super_id_pk PRIMARY KEY (super_id)
);

CREATE TABLE usuario(

  user_id    INTEGER      NOT NULL AUTO_INCREMENT,
  user_nome  VARCHAR(45)  NOT NULL,
  user_email VARCHAR(255) NOT NULL,
  user_tele  VARCHAR(13),
  user_senha VARCHAR(70)  NOT NULL,
  CONSTRAINT user_id_PK PRIMARY KEY (user_id)

);

CREATE TABLE atividade(
      atv_id INTEGER NOT NULL AUTO_INCREMENT,
      atv_titulo VARCHAR(45) NOT NULL,
      atv_texto VARCHAR(10000) NOT NULL,
      atv_data DATE NOT NULL,
      CONSTRAINT atv_id_pk PRIMARY KEY (atv_id)
);
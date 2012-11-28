-- Procedures de atualização de usuários

USE trocaverde;

DELIMITER |

CREATE PROCEDURE atualiza_cliente(app_email1 VARCHAR(70), app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_celular VARCHAR(11), app_data_nasc DATE, app_email2 VARCHAR(70), app_rg VARCHAR(10),
  app_rua VARCHAR(200), app_num INTEGER, app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50),
  app_estado VARCHAR(2), app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    UPDATE cliente SET nome = app_nome, snome = app_snome, telefone = app_tel, celular = app_celular, 
            data_nasc = app_data_nasc, email = app_email2, RG = app_rg, rua = app_rua, num = app_num,
            complemento = app_complemento, bairro = app_bairro, cidade = app_cidade, cep = app_cep
            WHERE email = app_email1;
    UPDATE login SET email = app_email2, senha = app_senha
            WHERE email = app_email1;
    
    SELECT email FROM cliente WHERE email = app_email2;
    
END;

|

CREATE PROCEDURE atualiza_loja(app_email1 VARCHAR(70), app_cnpj VARCHAR(14), app_rsocial VARCHAR(200), app_nfantasia VARCHAR(200),
  app_inscest VARCHAR(50), app_tel VARCHAR(11), app_email2 VARCHAR(70), app_rua VARCHAR(200), app_num INTEGER,
  app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50), app_estado VARCHAR(2),
  app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    UPDATE loja SET CNPJ = app_cnpj, razao_social = app_rsocial, nome_fantasia = app_nfantasia,
            insc_estadual = app_inscest, telefone = app_tel, email = app_email2, rua = app_rua, 
            numero = app_num, complemento = app_complemento, bairro = app_bairro, cidade = app_cidade,
            estado = app_estado, cep = app_cep
            WHERE email = app_email1;
    UPDATE login SET email = app_email2, senha = app_senha
            WHERE email = app_email1;
    
    SELECT email FROM loja WHERE email = app_email2;
    
END;

|

CREATE PROCEDURE atualiza_pontuador(app_email1 VARCHAR(70), app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_email2 VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    UPDATE pontuador SET nome = app_nome, snome = app_snome, telefone = app_tel, email = app_email2
            WHERE email = app_email1;
    UPDATE login SET email = app_email2, senha = app_senha
            WHERE email = app_email1;
    
    SELECT email FROM pontuador WHERE email = app_email2;
    
END;

|

CREATE PROCEDURE atualiza_admin(app_email1 VARCHAR(70), app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_email2 VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    UPDATE admin SET nome = app_nome, snome = app_snome, telefone = app_tel, email = app_email2
            WHERE email = app_email1;
    UPDATE login SET email = app_email2, senha = app_senha
            WHERE email = app_email1;
    
    SELECT email FROM admin WHERE email = app_email2;
    
END;

|




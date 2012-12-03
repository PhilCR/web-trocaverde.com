-- Criação das Stored Procedures responsáveis pelos cadastros
-- tipo_usuario na tabela login recebe os seguintes valores: 0=administrador, 1=pontuador, 2=loja, 3=cliente

DELIMITER |
CREATE PROCEDURE cadastro_cliente(app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_celular VARCHAR(11), app_data_nasc DATE, app_email VARCHAR(70), app_pontos INTEGER, app_rg VARCHAR(10),
  app_rua VARCHAR(200), app_num INTEGER, app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50),
  app_estado VARCHAR(2), app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    DECLARE var_id INTEGER;

    INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 3);
    SELECT ID INTO var_id FROM login WHERE email = app_email;
    INSERT INTO cliente (ID, nome, snome, telefone, celular, data_nasc, email, pontos, RG, rua, numero, complemento, bairro, cidade, estado, cep)
      VALUES (var_id, app_nome, app_snome, app_tel, app_celular, app_data_nasc, app_email, app_pontos, app_rg, app_rua, app_num,
      app_complemento, app_bairro, app_cidade, app_estado, app_cep);
 
    SELECT nome, snome, login.email, tipo_usuario FROM cliente, login WHERE app_email = login.email AND login.email = cliente.email;
END

|

CREATE PROCEDURE cadastro_loja(app_cnpj VARCHAR(14), app_rsocial VARCHAR(200), app_nfantasia VARCHAR(200),
  app_inscest VARCHAR(50), app_tel VARCHAR(11), app_email VARCHAR(70), app_rua VARCHAR(200), app_num INTEGER,
  app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50), app_estado VARCHAR(2),
  app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    DECLARE var_id INTEGER;
    DECLARE var_cnpj VARCHAR(14);

    SELECT CNPJ INTO var_cnpj FROM loja WHERE app_cnpj = CNPJ;
    IF var_cnpj IS NULL THEN
        INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 2);
        SELECT ID INTO var_id FROM login WHERE email = app_email;
        INSERT INTO loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada, rua, numero, complemento, bairro, cidade, estado, cep)
          VALUES (var_id, app_cnpj, app_rsocial, app_nfantasia, app_inscest, app_tel, app_email, 0, app_rua, app_num, app_complemento,
          app_bairro, app_cidade, app_estado, app_cep);
        
        SELECT razao_social, login.email, tipo_usuario FROM loja, login WHERE app_email = login.email AND login.email = loja.email;
    END IF; 
END

|

CREATE PROCEDURE cadastro_pontuador(app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_email VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    DECLARE var_id INTEGER;

    INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 1);
    SELECT ID INTO var_id FROM login WHERE email = app_email;
    INSERT INTO pontuador (ID, nome, snome, telefone, email)
      VALUES (var_id, app_nome, app_snome, app_tel, app_email);
 
    SELECT nome, snome, login.email, tipo_usuario FROM pontuador, login WHERE app_email = login.email AND login.email = pontuador.email;
END

|

CREATE PROCEDURE cadastro_admin(app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_email VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    DECLARE var_id INTEGER;

    INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 0);
    SELECT ID INTO var_id FROM login WHERE email = app_email;
    INSERT INTO admin (ID, nome, snome, telefone, email)
      VALUES (var_id, app_nome, app_snome, app_tel, app_email);
 
    SELECT nome, snome, login.email, tipo_usuario FROM admin, login WHERE app_email = login.email AND login.email = admin.email;
END

|

CREATE PROCEDURE login(app_email VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    DECLARE var_tp VARCHAR(70);
    
    SELECT tipo_usuario INTO var_tp FROM login WHERE email = app_email AND senha = app_senha;

    IF var_tp = 3 THEN SELECT nome, snome, login.email, tipo_usuario FROM cliente, login WHERE app_email = login.email AND login.email = cliente.email;
    ELSEIF var_tp = 2 THEN SELECT razao_social, login.email, tipo_usuario FROM loja, login WHERE app_email = login.email AND login.email = loja.email;
    ELSEIF var_tp = 1 THEN SELECT nome, snome, login.email, tipo_usuario FROM pontuador, login WHERE app_email = login.email AND login.email = pontuador.email;
    ELSEIF var_tp = 0 THEN SELECT nome, snome, login.email, tipo_usuario FROM admin, login WHERE app_email = login.email AND login.email = admin.email;
    END IF;
END;
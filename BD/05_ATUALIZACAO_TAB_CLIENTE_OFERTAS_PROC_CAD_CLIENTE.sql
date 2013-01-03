-- Este script atualiza as tabelas cliente e ofertas, e a procedure cadastro_cliente

USE trocaverde;

ALTER TABLE cliente DROP COLUMN rg;
ALTER TABLE cliente ADD COLUMN CPF VARCHAR(11) NOT NULL UNIQUE AFTER snome;

ALTER TABLE ofertas CHANGE COLUMN info tag VARCHAR(50);

DROP PROCEDURE cadastro_cliente;

DELIMITER |
CREATE PROCEDURE cadastro_cliente(app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_celular VARCHAR(11), app_data_nasc DATE, app_email VARCHAR(70), app_pontos INTEGER, app_cpf VARCHAR(11),
  app_rua VARCHAR(200), app_num INTEGER, app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50),
  app_estado VARCHAR(2), app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    DECLARE var_id INTEGER;
    DECLARE var_cpf VARCHAR(14);

    SELECT CPF INTO var_cpf FROM cliente WHERE app_cpf = CPF;
    IF var_cpf IS NULL THEN
        INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 3);
        SELECT ID INTO var_id FROM login WHERE email = app_email;
        INSERT INTO cliente (ID, nome, snome, CPF, telefone, celular, data_nasc, email, pontos, rua, numero, complemento, bairro, cidade, estado, cep)
          VALUES (var_id, app_nome, app_snome, app_cpf, app_tel, app_celular, app_data_nasc, app_email, app_pontos, app_rua, app_num,
          app_complemento, app_bairro, app_cidade, app_estado, app_cep);
 
        SELECT nome, snome, login.email, tipo_usuario FROM cliente, login WHERE app_email = login.email AND login.email = cliente.email;
    END IF;
END;
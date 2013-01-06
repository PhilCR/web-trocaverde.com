DROP PROCEDURE cadastro_loja;
DROP PROCEDURE login;
DROP PROCEDURE libera_oferta;
DROP PROCEDURE atualiza_cliente;

DELIMITER |

CREATE PROCEDURE cadastro_loja(app_cnpj VARCHAR(14), app_rsocial VARCHAR(200), app_nfantasia VARCHAR(200),
  app_inscest VARCHAR(50), app_tel VARCHAR(11), app_email VARCHAR(70), app_rua VARCHAR(200), app_num INTEGER,
  app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50), app_estado VARCHAR(2),
  app_cep VARCHAR(10), app_senha VARCHAR(16), app_regiao varchar(100))

BEGIN
    DECLARE var_id INTEGER;
    DECLARE var_cnpj VARCHAR(14);

    SELECT CNPJ INTO var_cnpj FROM loja WHERE app_cnpj = CNPJ;
    IF var_cnpj IS NULL THEN
        INSERT INTO login (email, senha, tipo_usuario) VALUES (app_email, app_senha, 2);
        SELECT ID INTO var_id FROM login WHERE email = app_email;
        INSERT INTO loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada, rua, numero, complemento, bairro, cidade, estado, cep, regiao)
          VALUES (var_id, app_cnpj, app_rsocial, app_nfantasia, app_inscest, app_tel, app_email, 0, app_rua, app_num, app_complemento,
          app_bairro, app_cidade, app_estado, app_cep, app_regiao);
        
        SELECT razao_social, login.email, tipo_usuario FROM loja, login WHERE app_email = login.email AND login.email = loja.email;
    END IF; 
END

|

CREATE PROCEDURE login(app_email VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    DECLARE var_tp VARCHAR(70);
    
    SELECT tipo_usuario INTO var_tp FROM login WHERE email = app_email AND senha = app_senha;

    IF var_tp = 3 THEN SELECT nome, snome, login.email, tipo_usuario FROM cliente, login WHERE app_email = login.email AND login.email = cliente.email;
    ELSEIF var_tp = 2 THEN SELECT razao_social, login.email, tipo_usuario, autorizada FROM loja, login WHERE app_email = login.email AND login.email = loja.email;
    ELSEIF var_tp = 1 THEN SELECT nome, snome, login.email, tipo_usuario FROM pontuador, login WHERE app_email = login.email AND login.email = pontuador.email;
    ELSEIF var_tp = 0 THEN SELECT nome, snome, login.email, tipo_usuario FROM admin, login WHERE app_email = login.email AND login.email = admin.email;
    END IF;
END;

|

CREATE PROCEDURE libera_oferta(app_cod INTEGER, app_pontos INTEGER)
BEGIN
	UPDATE ofertas SET pontos = app_pontos WHERE cod = app_cod;
    UPDATE ofertas SET autorizada = 1 WHERE cod = app_cod;
END

|

CREATE PROCEDURE atualiza_cliente(app_email1 VARCHAR(70), app_nome VARCHAR(200), app_snome VARCHAR(50), app_tel VARCHAR(11),
  app_celular VARCHAR(11), app_data_nasc DATE, app_email2 VARCHAR(70), app_cpf VARCHAR(11),
  app_rua VARCHAR(200), app_num INTEGER, app_complemento VARCHAR(20), app_bairro VARCHAR(30), app_cidade VARCHAR(50),
  app_estado VARCHAR(2), app_cep VARCHAR(10), app_senha VARCHAR(16))

BEGIN
    UPDATE cliente SET nome = app_nome, snome = app_snome, telefone = app_tel, 
			celular = app_celular, data_nasc = app_data_nasc, email = app_email2, 
			CPF = app_cpf, rua = app_rua, numero = app_num, complemento = app_complemento, 
			bairro = app_bairro, cidade = app_cidade, cep = app_cep
	WHERE email = app_email1;

    UPDATE login SET email = app_email2, senha = app_senha
            WHERE email = app_email1;
    
    SELECT email FROM cliente WHERE email = app_email2;
END;

|
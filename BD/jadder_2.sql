USE trocaverde;

GRANT ALL PRIVILEGES ON trocaverde.* TO 'semcadastro'@'%';

DROP PROCEDURE

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
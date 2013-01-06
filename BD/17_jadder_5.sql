USE trocaverde;

DROP PROCEDURE atualiza_cliente;

DELIMITER |

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
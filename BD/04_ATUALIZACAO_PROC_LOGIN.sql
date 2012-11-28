USE trocaverde;

DROP PROCEDURE login;

DELIMITER |
CREATE PROCEDURE login(app_email VARCHAR(70), app_senha VARCHAR(16))

BEGIN
    DECLARE var_tp VARCHAR(70);
    
    SELECT tipo_usuario INTO var_tp FROM login WHERE email = app_email AND senha = app_senha;

    IF var_tp = 3 THEN SELECT nome, snome, login.email, pontos, tipo_usuario FROM cliente, login WHERE app_email = login.email AND login.email = cliente.email;
    ELSEIF var_tp = 2 THEN SELECT razao_social, login.email, tipo_usuario FROM loja, login WHERE app_email = login.email AND login.email = loja.email;
    ELSEIF var_tp = 1 THEN SELECT nome, snome, login.email, tipo_usuario FROM pontuador, login WHERE app_email = login.email AND login.email = pontuador.email;
    ELSEIF var_tp = 0 THEN SELECT nome, snome, login.email, tipo_usuario FROM admin, login WHERE app_email = login.email AND login.email = admin.email;
    END IF;
END;
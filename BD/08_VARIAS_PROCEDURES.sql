-- Script de criação de algumas procedures. Acredito que seus nomes e codigos sejam auto-explicativas XD

USE trocaverde;

DELIMITER |
CREATE PROCEDURE excluir_usuario (app_email VARCHAR(70))
BEGIN
    DELETE FROM login WHERE email = app_email;
END

|

CREATE PROCEDURE get_dados_usuarios(app_email VARCHAR(70))
BEGIN
    DECLARE var_tp TINYINT;
    
    SELECT tipo_usuario INTO var_tp FROM login WHERE app_email = email;
    
    IF var_tp = 3 THEN SELECT cliente.ID, nome, snome, CPF, telefone, celular, data_nasc, cliente.email, pontos,
        rua, numero, complemento, bairro, cidade, estado, cep, tipo_usuario FROM cliente, login
        WHERE app_email = login.email AND login.email = cliente.email;
    ELSEIF var_tp = 2 THEN SELECT loja.ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, loja.email,
        autorizada, rua, numero, complemento, bairro, cidade, estado, cep, tipo_usuario FROM loja, login
        WHERE app_email = login.email AND login.email = loja.email;
    ELSEIF var_tp = 1 THEN SELECT pontuador.ID, nome, snome, telefone, pontuador.email, tipo_usuario FROM pontuador, login
        WHERE app_email = login.email AND login.email = pontuador.email;
    ELSEIF var_tp = 0 THEN SELECT admin.ID, nome, snome, admin.email, tipo_usuario FROM admin, login
        WHERE app_email = login.email AND login.email = admin.email;
    END IF;
END

|

CREATE PROCEDURE cadastro_oferta(app_nome_oferta VARCHAR(200), app_qtde_max INTEGER, app_data_validade DATE,
    app_imagem VARCHAR(200), app_descricao VARCHAR(200), app_tag VARCHAR(50), app_email VARCHAR(70))
BEGIN
    DECLARE var_id INTEGER;

    SELECT ID INTO var_id FROM login WHERE app_email = email;

    INSERT INTO ofertas (ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao, data_validade, imagem,
      descricao, tag, autorizada) VALUES (var_id, app_nome_oferta, app_qtde_max, 0, 0, curdate(), app_data_validade,
      app_imagem, app_descricao, app_tag, 0);
END

|

CREATE PROCEDURE excluir_oferta(app_cod_oferta INTEGER)
BEGIN
    DELETE FROM ofertas WHERE app_cod_oferta = cod;
END

|

CREATE PROCEDURE compra(app_cod_oferta INTEGER, app_qtde INTEGER, app_email VARCHAR(70))
BEGIN
    DECLARE var_id INTEGER;
    DECLARE var_pts INTEGER;

    SELECT pontos INTO var_pts FROM ofertas WHERE app_cod_oferta = cod;
    SELECT ID INTO var_id FROM login WHERE app_email = email;

    INSERT INTO pedidos (cod_oferta, cod_cliente, qtde_comprada, total_pontos, data_pedido)
      VALUES (app_cod_oferta, var_id, app_qtde, app_qtde*var_pts, curdate());

    UPDATE cliente SET pontos = pontos-app_qtde*var_pts WHERE app_email = email;
    UPDATE ofertas SET qtde_vendida = qtde_vendida+app_qtde WHERE app_cod_oferta = cod;
END;
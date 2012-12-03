-- SCRIPT DE CRIAÇÃO DE UMA PROCEDURE QUE RETORNA OS DADOS DE UM CLIENTE A PARTIR DE SEU CPF
-- E DE ATUALIZAÇÃO DA PROCEDURE COMPRA, QUE ANTES ENTRAVA COM O E-MAIL DO CLIENTE,
-- EM VEZ DO CPF, PARA REALIZAR O DÉBITO DE PONTOS

DROP PROCEDURE compra;

DELIMITER |
CREATE PROCEDURE dados_cliente_por_cpf(app_cpf VARCHAR(11))
BEGIN
    
    SELECT ID, nome, snome, CPF, telefone, celular, data_nasc, email, pontos,
      rua, numero, complemento, bairro, cidade, estado, cep FROM cliente
      WHERE app_cpf = CPF;
    
END

|

CREATE PROCEDURE compra(app_cod_oferta INTEGER, app_qtde INTEGER, app_cpf VARCHAR(11))
BEGIN
    DECLARE var_id INTEGER;
    DECLARE var_pts INTEGER;

    SELECT pontos INTO var_pts FROM ofertas WHERE app_cod_oferta = cod;
    SELECT ID INTO var_id FROM cliente WHERE app_cpf = CPF;

    INSERT INTO pedidos (cod_oferta, cod_cliente, qtde_comprada, total_pontos, data_pedido)
      VALUES (app_cod_oferta, var_id, app_qtde, app_qtde*var_pts, curdate());

    UPDATE cliente SET pontos = pontos-app_qtde*var_pts WHERE app_cpf = CPF;
    UPDATE ofertas SET qtde_vendida = qtde_vendida+app_qtde WHERE app_cod_oferta = cod;
END;
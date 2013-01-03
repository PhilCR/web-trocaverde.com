use trocaverde;
GRANT EXECUTE ON PROCEDURE trocaverde.dados_cliente_por_cpf to 'pontuador'@'%';
GRANT EXECUTE ON PROCEDURE trocaverde.dados_cliente_por_cpf to 'loja'@'%';
GRANT EXECUTE ON PROCEDURE trocaverde.compra to 'loja'@'%';

DELIMITER |

CREATE PROCEDURE pontuar(app_pontos INTEGER, app_email VARCHAR(70))
BEGIN
    UPDATE cliente SET pontos = pontos + app_pontos WHERE app_email = email;
END

|

GRANT EXECUTE ON PROCEDURE trocaverde.pontuar to 'pontuador'@'%';
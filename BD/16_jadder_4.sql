USE trocaverde;

DROP PROCEDURE libera_oferta;

DELIMITER |

CREATE PROCEDURE libera_oferta(app_cod INTEGER, app_pontos INTEGER)
BEGIN
	UPDATE ofertas SET pontos = app_pontos WHERE cod = app_cod;
    UPDATE ofertas SET autorizada = 1 WHERE cod = app_cod;
END

|
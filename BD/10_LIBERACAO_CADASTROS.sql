-- Procedures de liberação do cadastro de loja, oferta e pontuação
USE trocaverde;

DELIMITER |

CREATE PROCEDURE pontuacao(app_nome_rec VARCHAR(50), app_peso INTEGER, app_email VARCHAR(70))
BEGIN
    DECLARE var_pts INTEGER;
    SELECT pontos_per_kg INTO var_pts FROM reciclaveis WHERE nome = app_nome_rec;
    UPDATE cliente SET pontos = pontos + app_peso * var_pts WHERE app_email = email;
END

|

CREATE PROCEDURE libera_loja(app_email VARCHAR(70))
BEGIN
    UPDATE loja SET autorizada = 1 WHERE email = app_email;
END

|

-- OBS: na aplicação acho que se deve fazer uma busca primeiro pra achar a oferta e passar seu codigo
-- como parâmetro
CREATE PROCEDURE libera_oferta(app_cod INTEGER)
BEGIN
    UPDATE oferta SET autorizada = 1 WHERE cod = app_cod;
END

|

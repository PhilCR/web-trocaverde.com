-- Criações das restrições dos objetos do banco de dados referentes ao cadastro e login de usuarios
-- ################DEVE ESTAR LOGADO COMO USUÁRIO ROOT!!!!#####################

USE trocaverde;
GRANT ALL PRIVILEGES ON trocaverde.* TO 'admin'@'%';
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'cliente'@'%';
GRANT SELECT ON mysql.proc TO 'cliente'@'%';
GRANT INSERT ON mysql.proc TO 'cliente'@'%';
GRANT UPDATE ON mysql.proc TO 'cliente'@'%';
GRANT DELETE ON mysql.proc TO 'cliente'@'%';
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'loja'@'%';
GRANT SELECT ON mysql.proc TO 'loja'@'%';
GRANT INSERT ON mysql.proc TO 'loja'@'%';
GRANT UPDATE ON mysql.proc TO 'loja'@'%';
GRANT DELETE ON mysql.proc TO 'loja'@'%';
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'pontuador'@'%';
GRANT SELECT ON mysql.proc TO 'pontuador'@'%';
GRANT INSERT ON mysql.proc TO 'pontuador'@'%';
GRANT UPDATE ON mysql.proc TO 'pontuador'@'%';
GRANT DELETE ON mysql.proc TO 'pontuador'@'%';;
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'semcadastro'@'%';
GRANT EXECUTE ON PROCEDURE trocaverde.cadastro_cliente to 'semcadastro'@'%';
GRANT EXECUTE ON PROCEDURE trocaverde.cadastro_loja to 'semcadastro'@'%';
GRANT EXECUTE ON PROCEDURE trocaverde.login to 'semcadastro'@'%';
GRANT SELECT ON mysql.proc TO 'semcadastro'@'%';
GRANT INSERT ON mysql.proc TO 'semcadastro'@'%';
GRANT UPDATE ON mysql.proc TO 'semcadastro'@'%';
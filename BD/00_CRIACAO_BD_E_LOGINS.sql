-- #######################IMPORTANTE: ESTAR LOGADO COMO USUARIO ROOT!!!########################

CREATE DATABASE trocaverde;

CREATE USER admin;

CREATE USER cliente;

CREATE USER pontuador;

CREATE USER loja;

CREATE USER semcadastro;

SET PASSWORD FOR 'admin'@'%' = PASSWORD('projet02012');

SET PASSWORD FOR 'cliente'@'%' = PASSWORD('2012proj3to');

SET PASSWORD FOR 'pontuador'@'%' = PASSWORD('pr0j_2012');

SET PASSWORD FOR 'loja'@'%' = PASSWORD('012_proj');

SET PASSWORD FOR 'semcadastro'@'%' = PASSWORD('cadastro');
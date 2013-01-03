--ATUALIZACAO DA TABELA OFERTAS PARA ARMAZENAR IMAGENS

alter table ofertas modify column imagem blob not null;
alter table ofertas modify column imagem blob not null;

alter table loja add column regiao varchar(100) not null;

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (8, 'restaurante@gostogostoso.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (8, '10695020000170', 'Restaurante Gosto Gostoso LTDA-ME', 'Restaurante Gosto Gostoso',
				'492-513-778-110', '1532010010', 'restaurante@gostogostoso.com', 1, 'rua 14 de abril',
				'745', null, 'Boa Vista', 'Sorocaba', 'SP', '18020360', 'Sorocaba');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (9, 'roupas@favodemel.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (9, '10695020000171', 'Favo de Mel LTDA-ME', 'Favo de Mel',
				'492-514-798-110', '1532015020', 'roupas@favodemel.com', 1, 'rua 14 de abril',
				'745', null, 'Boa Vista', 'Sorocaba', 'SP', '18020360', 'Sorocaba');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (10, 'info@tamojunto.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (10, '10695020000172', 'Flávio Cavalcante LTDA', 'Info Games Tamo Junto',
				'492-513-998-111', '1532012810', 'info@tamojunto.com', 1, 'rua 14 de abril',
				'745', null, 'Boa Vista', 'Sorocaba', 'SP', '18020360', 'Sorocaba');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (11, 'worldtenis@uol.com.br', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (11, '10695020200173', 'Jean Tênis LTDA', 'World Tênis',
				'555-513-778-114', '1532010789', 'worldtenis@uol.com.br', 1, 'Av. Antonio Carlos Comitre',
				'1256', null, 'Boa Vista', 'Votorantim', 'SP', '18025060', 'Sorocaba');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (12, 'morato@joiasfinas.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (12, '10695020000174', 'Bijuterias Finas LTDA', 'Morato Jóias',
				'652-444-778-110', '1532020125', 'morato@joiasfinas.com', 1, 'Av. Antonio Carlos Comitre',
				'1256', null, 'Boa Vista', 'Votorantim', 'SP', '18025060', 'Sorocaba');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (13, 'jujubadoces@gmail.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (13, '10695020000175', 'Júlia Camargo Doces LTDA', 'Docinhos da Jujuba',
				'415-513-412-002', '1932016898', 'jujubadoces@gmail.com', 1, 'rua João de Arruda',
				'50', null, 'Morro do Além', 'Indaiatuba', 'SP', '18020054', 'Campinas');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (14, 'bichofeliz@gmail.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (14, '10695020000176', 'Moura Pet Shop LTDA', 'Bicho Feliz',
				'778-513-778-456', '1932010010', 'bichofeliz@gmail.com', 1, 'rua Maria José',
				'457', null, 'Espanhóis', 'Indaiatuba', 'SP', '18078200', 'Campinas');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (15, 'noitesexshop@hotmail.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (15, '10695020000177', 'Vilma Artigos Sexuais LTDA', 'Sex Shop Noite Quente',
				'756-513-998-456', '1979216533', 'noitesexshop@hotmail.com', 1, 'Av. dos Prazeres',
				'145', null, 'Jardim do Carmo', 'Campinas', 'SP', '18056235', 'Campinas');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (16, 'chinaling@hotmail.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (16, '10695020070178', 'Lanchonete China Wong', 'China Wong Lanches',
				'890-789-456-110', '1950245670', 'chinaling@hotmail.com', 1, 'Av dos Prazeres',
				'145', null, 'Jardim do Carmo', 'Campinas', 'SP', '18056235', 'Campinas');

INSERT INTO login (ID, email, senha, tipo_usuario) VALUES (17, 'travelworld@gmail.com', '123456', 2);
insert into loja (ID, CNPJ, razao_social, nome_fantasia, insc_estadual, telefone, email, autorizada,
				  rua, numero, complemento, bairro, cidade, estado, cep, regiao)
		values (17, '10695020000179', 'Travel World LTDA', 'Travel World Brazil',
				'852-741-778-145', '1950547896', 'travelworld@gmail.com', 1, 'Av. dos Prazeres',
				'145', null, 'Jardim do Carmo', 'Campinas', 'SP', '18056235', 'Campinas');


-- ***************************************************** -- 

alter table ofertas modify column imagem varchar(500);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (1, 8, 'Jantar para duas pessoas', 50, 0, 500, '2013-01-04', '2013-02-04',
				'Coma a vontade no buffet do restaurante Gosto Gostoso, promoção válida para o casal', 
				'restaurante', 1, 
'http://divinacomidarestaurante.com.br/wp/wordpress/wp-content/uploads/2010/11/divina-comida-023.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (2, 9, 'Calça Jeans 50% OFF', 5, 0, 700, '2013-01-04', '2013-01-20',
				'Calça jeans com 50% de desconto', 'roupa', 1, 
'http://www.guiainclusivo.com.br/wp-content/uploads/2012/04/cal%C3%A7a-jeans.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (3, 9, 'Blusa moletom 80% OFF', 15, 0, 400, '2013-01-04', '2013-01-20',
				'Blusa moletom com 80% de desconto', 'roupa', 1, 
'http://www.symbolvirtual.com.br/symbolstore/Assets/product_images/grandes/26_03_2012_blusa_moletom_neff_7029a_001.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (4, 10, '3 jogos de XBox 360 com 20% de desconto', 20, 0, 1000, '2013-01-05', '2013-01-29',
				'3 jogos a escolha para XBox 360 com 20% de desconto no total', 'jogos', 1, 
'http://bimg1.mlstatic.com/lego-indiana-joneskung-fu-panda-xbox360-2-jogos_MLB-F-2986833381_082012.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (5, 11, 'Tênis Nike por apenas R$300!', 10, 0, 1500, '2013-01-04', '2013-01-20',
				'Tênis Nike com descontão, pague R$300!!!', 'tênis', 1, 
'http://t1.gstatic.com/images?q=tbn:ANd9GcQnLco3iY9aYBq7-zuXjzeuIJok0FPdzkd_pB3VC3_U2GwbjBQnkmOk3uar');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (6, 11, 'Sandália Dakota por apenas R$50', 20, 0, 550, '2013-01-04', '2013-01-20',
				'Sandália Dakota em uma mega promoção!', 'sandálias', 1, null);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (7, 12, 'Par de alianças de ouro por R$1500', 3, 0, 700, '2013-01-04', '2013-01-20',
				'Par de alianças ouro 50k com desconto de 30%', 'joias', 1, 
'http://pt.artesanum.com/upload/postal/1/5/7/par_de_aliancas_em_ouro_18_kl-84118.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (8, 13, 'Kit festa: 1000 brigadeiros por R$100,05', 4, 0, 1000, '2013-01-04', '2013-01-20',
				'Kit festa: 1000 brigadeiros com desconto!', 'doces', 1, null);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (9, 13, 'Kit festa: 1000 beijinhos por R$100,05', 4, 0, 1000, '2013-01-04', '2013-01-20',
				'Kit festa: 1000 beijinhos por apenas R$100,05', 'doces', 1, null);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (10, 14, 'Promoção amigo feliz! Tosa por R$20,00', 20, 0, 300, '2013-01-04', '2013-01-20',
				'Deixe seu amigo fiel mais feliz! Tosa por R$20,00', 'animais', 1, null);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (11, 14, 'Filhote de Labrador por R$1000,00', 2, 0, 1300, '2013-01-04', '2013-01-20',
				'Seja o melhor amigo deste filhote!', 'animais', 1, 
'http://www.blogdicas.com/wp-content/uploads/2012/04/foto-filhotes-de-labrador.jpg');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (12, 15, 'Conjunto de Lingerie Sensual por apenas R$50,00', 10, 0, 700, '2013-01-04', '2013-01-20',
				'Apimente ainda mais sua relação com lingeries de diversas fantasias', 'sexo', 1, null);

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (13, 16, 'Noite do pastel, pastéis a vontade por R$1,00', 10, 0, 1000, '2013-01-04', '2013-01-20',
				'Coma pastéis de diversos sabores a vontade', 'comida', 1, 
'http://4.bp.blogspot.com/-SA8QEggJbok/T2aPNsOUBdI/AAAAAAAAAik/6Rv7OafRwFI/s1600/pastel-massa-frita.png');

insert into ofertas (cod, ID_loja, nome_oferta, qtde_max, qtde_vendida, pontos, data_ativacao,
					 data_validade, descricao, tag, autorizada, imagem) 
		values (14, 17, 'Viagem para Disney World, por apenas R$2000,00', 3, 0, 5000, '2013-01-04', '2013-01-20',
				'Viaje para este mundo encantado nos EUA!', 'viagem', 1, 
'http://www.bestorlandovacationpackages.com/media/ecom/prodsm/Disney-World-Characters.jpg');
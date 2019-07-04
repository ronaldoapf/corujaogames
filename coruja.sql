create database corujaogames;
use corujaogames;

create table usuario(
	cpf varchar(14) not null primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null,
	endereco varchar(100),
    cep varchar(9)
);

create table produto(
    id int primary key,
    titulo varchar(100) not null, 
    descricao varchar(1000) not null, 
    url_imagem varchar(100) not null, 
    preco double not null, 
    tipo_produto varchar(200) not null, 
    plataforma varchar(100) not null
);

create table carrinho_usuario(
	cpf varchar(14),
    id_produto int,
	quantidade int,
	foreign key (id_produto) references  produto (id)	
);	

select  * from usuario;
select * from carrinho_usuario;	

SELECT * FROM carrinho_usuario WHERE cpf = '000.000.000-00' AND id_produto = 8;

UPDATE carrinho_usuario SET quantidade = 3 WHERE id_produto = 6;

SELECT * from carrinho_usuario where id_produto = 6;

INSERT INTO carrinho_usuario (cpf, id_produto) values('120.594.916-06', 3);

SELECT cpf, id FROM carrinho_usuario WHERE cpf = '000.000.000-00' AND id_produto = 2;

drop database corujaogames;

use corujaogames;

select * from produto where id = 9;

INSERT INTO `produto` (`id`, `titulo`, `descricao`, `url_imagem`, `preco`, `tipo_produto`, `plataforma`) VALUES
(1, 'God Of War (2018)', 'God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseado nas mitologias grega e nórdica sendo criado originalmente por David Jaffe da Santa Monica Studio. Iniciada em 2005, a série tornou-se carro-chefe para a marca PlayStation, que consiste em oito jogos em várias plataformas.', 'assets/uploads/thumbs/PS4/gow.jpg', 189.99, 'Ação/Aventura', 'PS4'),
(2, 'Devil May Cry 5', 'Devil May Cry 5 é um jogo eletrônico de ação-aventura hack and slash desenvolvido e publicado pela Capcom. É o quinto título principal da série Devil May Cry e foi lançado em 8 de março de 2019 para Microsoft Windows, PlayStation 4 e Xbox One.', 'assets/uploads/thumbs/PC/dmc5.jpg', 179.99, 'Ação, Hack and slash', 'PC'),
(3, 'Red Dead Redemption 2', 'Red Dead Redemption II é um jogo eletrônico de ação-aventura western desenvolvido pela Rockstar Studios e publicado pela Rockstar Games. Lançado mundialmente em 26 de outubro de 2018 para PlayStation 4 e Xbox One, é uma prequela de Red Dead Redemption e o terceiro título da franquia Red Dead.', 'assets/uploads/thumbs/PS4/rdr2.jpg', 159.99, 'Ação/Aventura/Faroeste', 'PS4'),
(4, 'Halo 5', 'Halo 5: Guardians é um videojogo de tiro na primeira pessoa, parte da série Halo e sequência de Halo 4. Revelado oficialmente a 16 de Maio de 2014, Halo 5: Guardians foi produzido pela 343 Industries e publicado pela Microsoft Studios a 27 de Outubro de 2015 para Xbox One.', 'assets/uploads/thumbs/Xbox/halo5.jpg', 59.99, 'Ação/Aventura', 'Xbox One'),
(5, 'Spider Man', 'Seja o Homem-Aranha. Após oito anos usando a máscara, Peter Parker agora é um mestre na luta contra o crime. Sinta todo o poder de um Homem-Aranha mais experiente com uma mecânica de combate improvisada, habilidades acrobáticas dinâmicas, movimentos urbanos brandos e interações com o ambiente. Não sendo mais um principiante, esse é o Homem-Aranha mais habilidoso que você já jogou.', 'assets/uploads/thumbs/PS4/spiderman.jpg', 149.99, 'Ação/Aventura', 'PS4'),
(6, 'Devil May Cry 5', 'Devil May Cry 5 é um jogo eletrônico de ação-aventura hack and slash desenvolvido e publicado pela Capcom. É o quinto título principal da série Devil May Cry e foi lançado em 8 de março de 2019 para Microsoft Windows, PlayStation 4 e Xbox One.', 'assets/uploads/thumbs/PS4/dmc5.jpg', 195.99, 'Ação/Aventura', 'PS4'),
(7, 'Fifa 19', 'FIFA 19 é um jogo eletrônico de futebol desenvolvido (e) publicado pela EA Sports, que foi lançado localmente em 28 de setembro de 2018. Este é terceiro game da franquia a usar a engine de jogo da Frostbite para Xbox One, PS4 e PC.', 'assets/uploads/thumbs/Xbox/fifa19.jpg', 200, 'Futebol', 'Xbox One'),
(8, 'Destiny 2', 'Destiny 2 é um jogo de tiro que te leva a uma viagem épica através do sistema solar. Você vai entrar em um mundo cheio de personagens interessantes e lutar para retomar nosso planeta em uma campanha cinematográfica.', 'assets/uploads/thumbs/Xbox/destiny2.jpg', 200, 'Ação/Aventura', 'Xbox One'),
(9, 'Minecraft', 'Minecraft é um jogo eletrônico tipo sandbox e independente de mundo aberto que permite a construção usando blocos (cubos) dos quais o mundo é feito.', 'assets/uploads/thumbs/Xbox/minecraft.jpg', 149.99, 'Ação/AVentura', 'Xbox One');
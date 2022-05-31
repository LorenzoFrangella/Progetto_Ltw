create table utente(
	nome varchar(40) not null,
	cognome varchar(40) not null,
	nickname varchar(40) not null,
	email varchar(319) primary key,
	pass varchar not null
)
--TABELLA PER LA MEMORIZZAZIONE DI VALORI IN CLASSIFICA

create table classifica(
	nickname varchar(40),
	minuti int check(minuti >= 0),
	secondi int check(secondi >= 0 and secondi < 60),
	totale_secondi int check(totale_secondi >= 0)
)

--INSERIMENTO TUPLE NELLA TABELLA
insert into utente values('mario','rossi','mario_bros','mario@bros.it','coccodrillo'),('luigi','bianchi','luigi_sium','luigi@bianchi.it','montagna');


insert into classifica values ('mario_bros',9,32,572),('luigi_sium',5,30,330)


insert into utente (nome,cognome,nickname,email,pass)
values
('Mario','Rossi','Mario','mario@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Lorenzo','Mastrandrea','Pigiby','pigi@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Rosapia','Laudati','Rosy','rosapia@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Michele','Neri','Mick','michele@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Rossella','Di Maria','Ross','rossella@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Andrea','Russo','Andrea','andrew@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Alessia','Bianchi','Ale','alessia@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Filippo','Romano','Fil','filippo@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Bruno','Costa','Bruno','bruno@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Maria','Fontana','Maria','maria@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Daniela','Greco','Dani01','daniela@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Francesco','Marino','Fra','francesco@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Claudio','De Luca','Claus','claudio@mail.com','3dbe00a167653a1aaee01d93e77e730e'),
('Lisa','Gentile','Lisa','lisa@mail.com','3dbe00a167653a1aaee01d93e77e730e')



insert into classifica (nickname,minuti,secondi,totale_secondi)
values 
('Mario',10,15,615),
('Mick',15,14,914),
('Ross',27,6,1626),
('Andrea',9,6,546),
('Ale',13,19,799),
('Fil',8,25,505),
('Bruno',9,34,574),
('Maria',14,42,882),
('Dani01',28,14,1694),
('Fra',10,56,656),
('Claus',23,46,1426),
('Lisa',17,22,1042)

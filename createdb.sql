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
insert into utente values('mario','rossi','mario_bros','mario@bros.it','coccodrillo')('luigi','bianchi','luigi_sium','luigi@bianchi.it','montagna')


insert into classifica values ('mario_bros',9,32,572),('luigi_sium',5,30,330)
create table utente(
	nome varchar(40) not null,
	cognome varchar(40) not null,
	nickname varchar(40) not null,
	email varchar(319) primary key,
	pass varchar not null
)
--TABELLA PER LA MEMORIZZAZIONE DI VALORI IN CLASSIFICA

create table classifica(
	nome varchar(40),
	nickname varchar(40),
	minuti int,
	secondi int check(secondi >= 0 and secondi < 60)
)
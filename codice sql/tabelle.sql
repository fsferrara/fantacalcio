########################################################################
#                                                                      #
#          Progetto di "Basi di dati e sistemi informativi"            #
#              Ferrara Francesco Saverio - 566/811                     #
#                                                                      #
########################################################################
# 
# Questo file inserisce automaticamente: 
#   - id della prima fantagiornate
#   - password di amministratore

DROP DATABASE dbsaverio;

CREATE DATABASE dbsaverio;

USE dbsaverio;

CREATE TABLE `fantasquadre` (
 `nome` VARCHAR( 20 ) NOT NULL ,
 `fantallenatore` VARCHAR( 40 ) NOT NULL ,
 `password` CHAR( 16 ) NOT NULL ,
 `maglietta` VARCHAR( 30 ) NOT NULL ,
 `fantacrediti` SMALLINT( 3 ) DEFAULT '200' NOT NULL ,
 `punti` SMALLINT( 4 ) UNSIGNED DEFAULT '0' NOT NULL ,
 PRIMARY KEY ( `nome` ) ,
 CONSTRAINT deficit CHECK ( fantacrediti >= 0 )
) TYPE = InnoDB COMMENT = 'fantasquadre partecipanti al fantacampionato';

CREATE TABLE `giocatori` (
 `codice` SMALLINT( 4 ) NOT NULL AUTO_INCREMENT ,
 `nome` VARCHAR( 20 ) NOT NULL ,
 `cognome` VARCHAR( 20 ) NOT NULL ,
 `ruolo` VARCHAR( 15 ) NOT NULL ,
 `valore` SMALLINT( 3 ) NOT NULL ,
 `squadra` VARCHAR( 20 ) NOT NULL ,
 `fantasquadra` VARCHAR( 20 ) DEFAULT 'NULL' ,
 PRIMARY KEY ( `codice` ) ,
 INDEX ( `cognome` ) ,
 INDEX ( `fantasquadra` ) ,
 FOREIGN KEY (`fantasquadra`)
   REFERENCES fantasquadre(nome)
   ON DELETE SET NULL
   ON UPDATE CASCADE,
 CONSTRAINT too_money CHECK ( (valore <= 183) AND (valore > 0) )
) TYPE = InnoDB COMMENT = 'giocatori esistenti sul mercato';

CREATE TABLE `fantagiornate` (
 `numero` TINYINT( 2 ) NOT NULL AUTO_INCREMENT ,
 PRIMARY KEY ( `numero` ) ,
 CONSTRAINT limite_giornate CHECK ( numero < 35 )
) TYPE = InnoDB COMMENT = 'fantagiornate giocate';

INSERT INTO `fantagiornate` VALUES ("");

CREATE TABLE `formazioni` (
 `codice` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
 `schema` CHAR( 5 ) NOT NULL ,
 PRIMARY KEY ( `codice` )
) TYPE = InnoDB COMMENT = 'formazioni messe in campo dalle fantasquadre';

CREATE TABLE `giocare` (
 `formazione` INT UNSIGNED NOT NULL ,
 `giocatore` SMALLINT( 4 ) NOT NULL ,
 `riserva` BIT( 1 ) NOT NULL DEFAULT '0' ,
 INDEX ( `formazione` ) ,
 INDEX ( `giocatore` ) ,
 FOREIGN KEY (`formazione`)
   REFERENCES formazioni(codice)
   ON DELETE CASCADE
   ON UPDATE CASCADE ,
 FOREIGN KEY (`giocatore`)
   REFERENCES giocatori(codice)
   ON DELETE NO ACTION
   ON UPDATE CASCADE
) TYPE = InnoDB COMMENT = 'gocatori appartenenti alla formazione';

CREATE TABLE `schiera` (
 `fantagiornata` TINYINT( 2 ) NOT NULL ,
 `fantasquadra` VARCHAR( 20 ) NOT NULL ,
 `formazione` INT UNSIGNED NOT NULL ,
 INDEX ( `fantagiornata` ) ,
 INDEX ( `fantasquadra` ) ,
 INDEX ( `formazione` ) ,
 FOREIGN KEY (`fantasquadra`)
   REFERENCES fantasquadre(nome)
   ON DELETE CASCADE
   ON UPDATE CASCADE ,
 FOREIGN KEY (`fantagiornata`)
   REFERENCES fantagiornate(numero)
   ON DELETE NO ACTION
   ON UPDATE CASCADE ,
 FOREIGN KEY (`formazione`)
   REFERENCES formazioni(codice)
   ON DELETE CASCADE
   ON UPDATE CASCADE
) TYPE = InnoDB COMMENT = 'correlazione delle formazioni in una determinata fantagiornata';

CREATE TABLE `risultato` (
 `giocatore` SMALLINT( 4 ) NOT NULL ,
 `fantagiornata` TINYINT( 2 ) NOT NULL ,
 `voto` TINYINT( 2 ) DEFAULT '0' ,
 `goalfatti` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `assist` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `rigorisbagliati` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `autoreti` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `espulsione` BIT( 1 ) NOT NULL DEFAULT '0' NOT NULL ,
 `ammonizioni` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `rigoreparati` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 `goalsubiti` TINYINT( 2 ) DEFAULT '0' NOT NULL ,
 INDEX ( `giocatore` ) ,
 INDEX ( `fantagiornata` ) ,
 FOREIGN KEY (`giocatore`)
   REFERENCES giocatori(codice)
   ON DELETE NO ACTION
   ON UPDATE CASCADE ,
 FOREIGN KEY (`fantagiornata`)
   REFERENCES fantagiornate(numero)
   ON DELETE NO ACTION
   ON UPDATE CASCADE ,
 CONSTRAINT voto_alto CHECK ( (voto <= 10) AND (voto >= 0) ) ,
 CONSTRAINT max_ammonizioni CHECK ( ammonizioni <= 2 )
) TYPE = InnoDB COMMENT = 'risultato di una fantagiornata';

CREATE TABLE `amministratore` (
 `password` CHAR( 16 ) NOT NULL UNIQUE,
 `lock_iscrizione` BIT(1) DEFAULT '0' NOT NULL,
 `lock_formazione` BIT(1) DEFAULT '0' NOT NULL
) TYPE = MyISAM COMMENT = 'password di amministratore';

# SETTAGGIO DELLA PASSWORD DI AMMINISTRATORE
INSERT INTO `amministratore` VALUES (PASSWORD("a"),0,0);


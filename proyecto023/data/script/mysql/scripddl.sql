CREATE TABLE planeta(
    codplaneta int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar (100) not null
    );

CREATE TABLE continente(
    codcontinente int primary Key, 
    nombre varchar (100) not null,
    codplaneta int not null
    );

CREATE TABLE pais (
        codpais int AUTO_INCREMENT PRIMARY KEY,
        nombre varchar (100) not null
        codcontinente int not null
        );
ALTER TABLE continente
add CONSTRAINT fk_planeta_continente FOREIGN KEY (codplaneta) REFERENCES planeta(codplaneta) on UPDATE CASCADE;
ALTER TABLE pais
add CONSTRAINT fk_continente_pais FOREIGN KEY (codcontinente) REFERENCES continente(codcontinente) on UPDATE CASCADE;

// taller  construccion 
create table tipodato(
codtipo int auto_increment primary key,
nombre varchar (100) not null
)
INSERT INTO tipodatos VALUES 
(1,'Undefined'),
 (2,'Boolean'),
 (3,'Scale'),
 (4,'Numeric'),
 (5,'Data center value'),
 (6,'Ordered set'),
 (7,'Descripte'),
 (8,'Ecuation'),
 (9,'Concurrency'),
 (10,'Percentaje'),
 (11,'Other Unit ');

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
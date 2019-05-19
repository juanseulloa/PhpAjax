CREATE TABLE feligres(
    codfeligres int AUTO_INCREMENT PRIMARY KEY,
    nombres varchar (150) not null,
    apellidos varchar (150) not null,
    fechanacimiento date,
    genero SMALLINT (1) 
    );

CREATE TABLE voto(
    codfeligres1 int ,
       codfeligres2 int ,
       codsacramento int
       
    );

CREATE TABLE sacramento (
        codsacramento int AUTO_INCREMENT PRIMARY KEY,
        nombresacramento varchar (150) not null
        );
ALTER TABLE voto
add CONSTRAINT fk_voto_feligres1 FOREIGN KEY (codfeligres1) REFERENCES feligres(codfeligres) on UPDATE CASCADE,
add CONSTRAINT fk_voto_feligres2 FOREIGN KEY (codfeligres2) REFERENCES feligres(codfeligres) on UPDATE CASCADE,
add CONSTRAINT fk_voto_sacramento FOREIGN KEY (codsacramento) REFERENCES sacramento(codsacramento) on UPDATE CASCADE;
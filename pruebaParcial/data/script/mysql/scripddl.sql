CREATE TABLE persona (
  idpersona int auto_increment  PRIMARY KEY,
  documento varchar(50) COMMENT "mi comentario" NOT NULL,
  nombre varchar(50) NOT NULL,
  apellidos varchar(50) NOT NULL,
  genero varchar(20) NOT NULL,
  fechanacimiento Date NOT NULL
   );

CREATE TABLE personaua (
  idpersona int (30)  ,
  idunidadacademica int (30) ,
  idasistencias int (30) 
  ) ;

CREATE TABLE unidadacademica (
  idunidadacademica int auto_increment PRIMARY KEY,
  nombreua varchar(50) NOT NULL,
  Tipoua varchar(50) NOT NULL
  );
  
ALTER TABLE personaua
ADD CONSTRAINT fk_personaua_persona FOREIGN KEY (idpersona) REFERENCES persona (idpersona) ON UPDATE CASCADE,
ADD CONSTRAINT fk_personaua_unidadacademica FOREIGN KEY (idunidadacademica) REFERENCES unidadacademica(idunidadacademica) ON UPDATE CASCADE;

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

CREATE TABLE asistencia(
idasistencia int auto_increment PRIMARY KEY,
fechaentrada date NOT NUll,
horaentrada time NOT NULL
);
CREATE TABLE seguimiento (
idseguimiento int auto_increment PRIMARY KEY,
id asistencias int (30),
cantidadasistencias(30)
);
ALTER TABLE seguimiento
ADD CONSTRAINT fk_asistencias_seguimiento FOREIGN KEY (idasistencias) REFERENCES asistencia (idasistencia) ON UPDATE CASCADE;

CREATE TABLE planacondicionamiento (
idplanacondicionamiento int auto_increment PRIMARY KEY,
idseguimiento int (30),
biotipo varchar (50) NOT NULL,
tipoplan varchar (50) NOT NULL,
nombre varchar (50) NOT NULL
);  

ALTER TABLE planacondicionamiento 
ADD CONSTRAINT fk_seguimiento_planacondicionamiento FOREIGN KEY (idseguimiento) REFERENCES seguimiento (idseguimiento) ON UPDATE CASCADE;

CREATE TABLE imc (
idimc int auto_increment PRIMARY KEY,
idseguimiento int (30);
masa int (10) NOT NULL,
peso int (10) NOT NULL
);
ALTER TABLE imc 
ADD CONSTRAINT fk_seguimiento_imc FOREIGN KEY (idseguimiento) REFERENCES seguimiento (idseguimiento) ON UPDATE CASCADE;

CREATE TABLE porcentajegraso (
idporcentaje int auto_increment PRIMARY KEY,
idseguimiento int (30),
cintura varchar (10) NOT NULL,
cuello varchar (10) NOT NULL,
actividadfisica varchar (50) NOT NULL
);
ALTER TABLE porcentajegraso 
ADD CONSTRAINT fk_seguimiento_porcentaje FOREIGN KEY (idseguimiento) REFERENCES seguimiento (idseguimiento) ON UPDATE CASCADE;

CREATE TABLE plannutricion(
idnutricion int auto_increment PRIMARY KEY,
idplanacondicionamiento int (30),
tipoplannutricion varchar (30),
nombreplan varchar (30)
);
ALTER TABLE plannutricion
ADD CONSTRAINT fk_planacondicionamiento_plannutricional FOREIGN KEY (idplanacondicionamiento) REFERENCES planacondicionamiento (idplanacondicionamiento) ON UPDATE CASCADE;

CREATE TABLE rutina(
idrutina int auto_increment PRIMARY KEY,
idplanacondicionamiento int (30),
tiporutina varchar (30) NOT NULL,
nombre varchar (30) NOT NULL
);
ALTER TABLE rutina
ADD CONSTRAINT fk_planacondicionamiento_rutinaa FOREIGN KEY (idplanacondicionamiento) REFERENCES planacondicionamiento (idplanacondicionamiento) ON UPDATE CASCADE;
  
CREATE TABLE ejercisios(
idejercisio int auto_increment PRIMARY KEY,
idrutina int (30),
tipomusculo varchar (30),
nombreejercisio varchar (30)
);
ALTER TABLE ejercisios
ADD CONSTRAINT fk_rutina_ejercisio FOREIGN KEY (idrutina) REFERENCES rutina (idrutina) ON UPDATE CASCADE;

CREATE TABLE ejercisios(
idejercisio int auto_increment PRIMARY KEY,
idrutina int (30),
tipomusculo varchar (30),
nombreejercisio varchar (30)
);
ALTER TABLE ejercisios
ADD CONSTRAINT fk_rutina_ejercisio FOREIGN KEY (idrutina) REFERENCES rutina (idrutina) ON UPDATE CASCADE;

CREATE TABLE inventario(
idinventario int auto_increment PRIMARY KEY,
idrutina int (30),
tipomaquina varchar (30),
nombremaquina varchar (30)
);
ALTER TABLE inventario
ADD CONSTRAINT fk_rutina_inventario FOREIGN KEY (idrutina) REFERENCES rutina (idrutina) ON UPDATE CASCADE;

CREATE TABLE dieta(
iddieta int auto_increment PRIMARY KEY,
idnutricion int (30),
tipodieta varchar (30),
nombredieta varchar (30)
);
ALTER TABLE dieta
ADD CONSTRAINT fk_plannutrcion_inventario FOREIGN KEY (idnutricion) REFERENCES plannutricion (idnutricion) ON UPDATE CASCADE;

create table item(
coditem int auto_icrement primary key,
nombre varchar (100) not null,
pagina varchar (100) not null,
modulo varchar (100) not null,
codpadre int 
);
alter table item 
add constraint FK_item_item FOREIGN KEY (codpadre) references item (coditem) on update cascade; 

insert into item (nombre,pagina,modulo,codpadre) values ('root','root','root',null); 
insert into item (nombre,pagina,modulo,codpadre) values ('home','index.php','module/application/view/',1); 
insert into item (nombre,pagina,modulo,codpadre) values ('clases','#','#',1);
insert into item (nombre,pagina,modulo,codpadre) values ('otros','#','#',1);
insert into item (nombre,pagina,modulo,codpadre) values ('Gym','#','#',1);
insert into item (nombre,pagina,modulo,codpadre) values ('personas','#','#',1);

insert into item (nombre,pagina,modulo,codpadre) values ('rolver','rolver.php','module/application/view/',3);
insert into item (nombre,pagina,modulo,codpadre) values ('personaver','personaver.php','module/application/view/',3);

insert into item (nombre,pagina,modulo,codpadre) values ('una','index.php','module/others/view/',4);


insert into item (nombre,pagina,modulo,codpadre) values ('Unidad Academica','unidadacademica.php','module/gym/view/',5);
insert into item (nombre,pagina,modulo,codpadre) values ('formulario UA','formularioua.php','module/gym/view/',5);
insert into item (nombre,pagina,modulo,codpadre) values ('formulario Plan','formularioplan.php','module/gym/view/',5);
insert into item (nombre,pagina,modulo,codpadre) values ('Plan Acondicionamiento','planacondicionamiento.php','module/gym/view/',5);



insert into item (nombre,pagina,modulo,codpadre) values ('ver personas','index.php','module/gym/view/',6);
insert into item (nombre,pagina,modulo,codpadre) values ('formulario personas','formulario.php','module/gym/view/',6);
insert into item (nombre,pagina,modulo,codpadre) values ('administrar personas','personas_admin.php','module/gym/view/',6);




 



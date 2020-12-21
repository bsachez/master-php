/*
TIPOS DE DATOS EN SQL

int (numero de caracteres) -----------------------  ENTERO
integer (numero de caracteres) -------------------  ENTERO
varchar (numero de caracteres) -------------------  STRING / ALFANUMERICO (por lo regular estos almacenan un maximo de 255 caracteres)
char (numero de caracteres)  ---------------------  STRING / ALFANUMERICO (por lo regular estos almacenan un maximo de 255 caracteres)
float (numero de cifras, numero de decimales) ----- DECIMAL / COMA FLOTANTE
date, time, timestamp

PARA ALMACENAR DEMACIADA INFORMACION SE PUEDEN USAR LOS SIGUIENTES TIPOS DE DATOS

text = 65535 caracteres
mediumtext = 16 millones de caracteres
longtext = 4 billones de caracteres

PARA ENTEROS MAS LARGOS

mediumint
bigint

*/

/* CREAR TABLA */

CREATE TABLE usuarios(
id                  int(11) auto_increment not null,
nombre         varchar(100) not null,
apellidos       varchar(255) default 'Hola que tal',
email             varchar(100) not null,
password      varchar(255)
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
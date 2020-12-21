# CONSULTAS DE AGRUPAMIENTO
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTA DE AGRUPAMIENTO CON CONDICIONES
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3;

# FUNCIONES DE AGRUPAMIENTO

/*

AVG                     SACAR LA MEDIA
COUNT                CONTAR EL NUMERO DE ELEMENTOS
MAX                     VALOR MAXIMO DEL GRUPO
MIN                     VALOR MINIMO DEL GRUPO
SUM                     SUMAR TODO EL CONTENIDO DEL GRUPO

*/

SELECT AVG (id) AS 'Media de entradas' FROM entradas;
SELECT MAX (id) AS 'Maximo id' FROM entradas;
SELECT SUM(id) AS 'Suma de id' FROM entradas;
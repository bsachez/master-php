/*

CONSULTA MULTITABLA

SON CONSULTAS QUE SIRVEN PARA CONSULTAR VARIAS TABLAS EN UNA SOLA SENTENCIA

*/

# MOSTRAR LAS ENTRADAS CON EL NOMBRE DE AUTOR Y EL NOMBRE DE LA CATEGORIA
SELECT e.id, e.titulo, u.combre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e, usuarios u, categorias c, WHERE e.usuario_id = u.id AND e.categoria_id = c.id;
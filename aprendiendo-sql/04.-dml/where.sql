 # CONSULTA CON UNA CONDICION
SELECT * FROM usuarios WHERE email = 'admin@admin.com' FROM usuarios;

/*
OPERADORES DE COMPARACION

igual                       =
distinto                  !=
menor                    <
mayor                    >
menor o igual         <=
mayor o igual         >=
entre                     between A and B
en                          in
es nulo                  is null
no esnulo               is not null
es como                 like
no es como             not like

OPERADORES LOGICOS
O           or
Y           and
NO        not

COMODINES
Cualquier cantidad de caracteres = %
Cualquier caracter desconocido = _
*/


# EJEMPLO

# 1.- mostrar nombres y apellidos de todos los usuarios rejistrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 2.- Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL (fecha);

# 3.- Mostrar el email de los usuarios cullo apellido contenga la letra 'A' y que la contraseña sea "1234"
SELECT email FROM usuarios WHERE apellidos LIKE '%A%' AND password = '1234';

# 4.- Sacar todos los registros de la tabla usuarios cuyo año de registro sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5.- Sacar todos los registros de la tabla usuarios cuyo nombre tanga mas de 5 letras y que se hayan registrado antes del 2020,
# y ademas mostrar el nombre en mayusculas

SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR (fecha) < 2020;

# PARA ORDENAR REGISTROS DE MANERA DECENDENTE
SELECT * FROM usuarios ORDER BY fecha DESC;

# PARA ORDENAR REGISTROS DE MANERA ACENDENTE
SELECT * FROM usuarios ORDER BY fecha ASC;
# INSERTAR NUEVOS REGISTROS
INSERT INTO usuarios VALUES(null, 'Brayan', 'Sànchez', 'brayan.contacto@gmial.com', '1234', '2020-12-17');
INSERT INTO usuarios VALUES(null, 'Diana', 'Alvarez', 'diana.contacto@gmial.com', '1234', '2019-01-05');
INSERT INTO usuarios VALUES(null, 'Pamela', 'Arizmendi', 'pamela.contacto@gmial.com', '1234', '2018-10-12');

# COMO INSERTAR FILAS SOLO CON CIERTAS COLUMNAS
INSERT INTO usuarios(email, password) VALUES ('admil@admil.com', 'administrador');

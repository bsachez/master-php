# RENOMBRAR UNA TABLA
ALTER TABLE usuarios RENAME TO usuarios_renome;

# CAMBIAR NOMBRES DE UNA COLUMNA
ALTER TABLE usuarios_renome CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE
ALTER TABLE usuarios_renome MODIFY apellido char(40) not null;

# AÑADIR COLUMNA
ALTER TABLE usuarios_renome ADD website varchar(100) null;

# AÑADIR RESTRICCION A COLUMNA
ALTER TABLE usuarios_renome  ADD CONSTRAINT uq_email UNIQUE(email);

# BORRA UNA COLUMNA
ALTER TABLE usuarios_renome DROP website;
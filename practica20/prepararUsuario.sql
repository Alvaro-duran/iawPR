CREATE DATABASE usuario;
USE usuario;
CREATE TABLE usuarios(
    usuario VARCHAR(100) PRIMARY KEY
);

CREATE USER usuario@localhost IDENTIFIED BY '7654321';

GRANT ALL ON usuario.* TO usuario@localhost;
select * from usuarios;
delete from usuarios;
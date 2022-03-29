DROP DATABASE IF EXISTS mascotas;
CREATE DATABASE IF NOT EXISTS mascotas DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE mascotas;

GRANT ALL PRIVILEGES ON mascotas.* TO 'usuario_pet'@'localhost' IDENTIFIED BY 'pet123';


CREATE TABLE roles (
    estatus_rol TINYINT(1) NOT NULL DEFAULT 2 COMMENT '2-> Habilitado, -1-> Deshabilitado',
    id_rol INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR(40) NOT NULL
)ENGINE=InnoDB;

INSERT INTO roles (estatus_rol, id_rol, rol) VALUES
('2', 784, 'Superadmin'),
('2', 444, 'Operador');

CREATE TABLE usuarios (
    estatus_usuario TINYINT(1) NOT NULL DEFAULT 2 COMMENT '2-> Habilitado, -1-> Deshabilitado',
    id_usuario INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    ap_paterno_usuario VARCHAR(50) NOT NULL,
    ap_materno_usuario VARCHAR(50) NOT NULL,
    sexo_usuario TINYINT(1) NOT NULL COMMENT '0-> Femenino, 1-> Masculino',
    imagen_usuario VARCHAR(100)  NULL,
    email_usuario VARCHAR(100) NOT NULL,
    password_usuario VARCHAR(64) NOT NULL,
    id_rol INT(3) NOT NULL,
    FOREIGN KEY(id_rol) REFERENCES roles (id_rol) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO usuarios (estatus_usuario, id_usuario, nombre_usuario, ap_paterno_usuario, ap_materno_usuario,
sexo_usuario, imagen_usuario, email_usuario, password_usuario, id_rol) 
VALUES
('2', NULL, 'Kevin Diaz', 'Gutierres', 'Pluma',1,NULL,'Kevin_@gmail.com',SHA2('pet123',0),784),
('2', NULL, 'Marisa', 'Melendez', 'Torres',1,NULL,'TorresMar@gmail.com.com',SHA2('pet123',0),444);


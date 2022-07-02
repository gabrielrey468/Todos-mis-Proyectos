CREATE DATABASE IF NOT EXISTS proyecto_gabriel;
USE proyecto_gabriel;

CREATE TABLE IF NOT EXISTS users(
    id          int(255) auto_increment not null,
    role        varchar(20),
    name        varchar(200),
    apellido    varchar(200),
    email       varchar(255),
    password    varchar(200),
    tlf         date(200),
    pais        varchar(200),
    created_at      datetime,
    updated_at      datetime,
    remember_token  varchar(255),
    CONSTRAINT  pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;
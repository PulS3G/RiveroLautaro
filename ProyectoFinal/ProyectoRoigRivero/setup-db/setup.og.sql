create database if not exists motoweb;
uses motoweb;


create table if not exists motos(
    id auto_increment primary key,
    nombre text NOT NULL,
    tipo text NOT NULL,
    cilindrada text NOT NULL,
    presupuesto text NOT NULL,
    potencia int NOT NULL,
    combustible int NOT NULL,
    peso int NOT NULL,
);

create table if not exists users(
    id_users auto_increment primary key,
    nombre_user text NOT NULL,
    contrasena text NOT NULL
);


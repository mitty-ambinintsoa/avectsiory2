CREATE DATABASE ghm;
use ghm;
CREATE TABLE projet (
    id_projet int primary key auto_increment,
    nom varchar(100),
    descriptions varchar(100),
    id_image int
);
CREATE TABLE image(
    id_image int primary key auto_increment,
    nom varchar(100)
);
INSERT INTO image (nom) VALUES('antsaravibe.jpg'),
('journee.jpg'),
('recrute.jpg'),
('viavy.jpg');
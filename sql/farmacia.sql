create database farmacia;
use farmacia;

create table user(
nombre varchar(5),
usuario varchar(10),
email char(30),
password varchar(10) NOT NULL);

INSERT INTO user (nombre, usuario, email, password) VALUES
('Ramon', 'Ramon135', 'ramonramirez@gmail.com', '135R4m0n*','false'),
('Ana', 'Anita55', 'anitaafarmaceutica@gmail.com', 'ceu23034*','false'),
('Moises', 'Moiselete', 'moises183@gmail.com', '1234Luis*','false'),
('Marta', 'Dueña', 'farmaciamaro@example.com', 'jef4arm*','true'),
('Narel', 'narel10', 'narel@gmail.com', 'nARel2920','false');


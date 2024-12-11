create database farmacia;
use farmacia;

create table user(
nombre varchar(5),
usuario varchar(10),
email char(30),
password varchar(10) NOT NULL),
isAdmin boolean;

INSERT INTO user (nombre, usuario, email, password) VALUES
('Ramon', 'Ramon135', 'ramonramirez@gmail.com', '135R4m0n*','false'),
('Ana', 'Anita55', 'anitaafarmaceutica@gmail.com', 'ceu23034*','false'),
('Moises', 'Moiselete', 'moises183@gmail.com', '1234Luis*','false'),
('Marta', 'Dueña', 'farmaciamaro@example.com', 'jef4arm*','true'),
('Narel', 'narel10', 'narel@gmail.com', 'nARel2920','false');


CREATE TABLE Medicamento (
    idMedicamento INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    cantidad INT NOT NULL
);

INSERT INTO Medicamentos (idMedicamento, codigo, nombre, descripcion, cantidad)
VALUES
  (1, 'COD001', 'Paracetamol', 'Analgésico y antipirético', 100),
  (2, 'COD002', 'Ibuprofeno', 'Antiinflamatorio no esteroideo', 200),
  (3, 'COD003', 'Amoxicilina', 'Antibiótico de amplio espectro', 150),
  (4, 'COD004', 'Ciprofloxacino', 'Antibiótico para infecciones bacterianas', 75),
  (5, 'COD005', 'Metformina', 'Tratamiento para la diabetes tipo 2', 300),
  (6, 'COD006', 'Omeprazol', 'Inhibidor de la bomba de protones', 180),
  (7, 'COD007', 'Losartán', 'Antihipertensivo', 250),
  (8, 'COD008', 'Simvastatina', 'Reductor del colesterol', 220),
  (9, 'COD009', 'Clonazepam', 'Tratamiento para trastornos de ansiedad', 90),
  (10, 'COD010', 'Salbutamol', 'Broncodilatador para asma', 400),
  (11, 'COD011', 'Dexametasona', 'Corticoide antiinflamatorio', 120),
  (12, 'COD012', 'Crema Hidratante', 'Hidratante para piel seca', 50),
  (13, 'COD013', 'Pomada Antifúngica', 'Tratamiento tópico para infecciones por hongos', 80),
  (14, 'COD014', 'Jarabe para la Tos', 'Alivio para la tos seca', 300),
  (15, 'COD015', 'Solución Oftálmica', 'Gotas para ojos secos', 120),
  (16, 'COD016', 'Protector Solar', 'Protección contra rayos UV', 200),
  (17, 'COD017', 'Gel Antiséptico', 'Desinfectante de manos', 500),
  (18, 'COD018', 'Crema Antiinflamatoria', 'Alivio para dolores musculares', 70),
  (19, 'COD019', 'Pomada Cicatrizante', 'Promueve la cicatrización de heridas', 60);

CREATE TABLE Cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO Cliente (direccion, telefono, email)
VALUES 
('Cale Dublin 123, Malaga', '1234567890', 'sarabarrios@email.com'),
('Avenida Siempre Viva 742, Malaga', '0987654321', 'angela241@email.com'),
('Plaza España 45, Motril', '1122334455', 'alejandromargo@email.com'),
('Calle Real 10, Velez-Malaga', '6677889900', 'joelroma@email.com'),
('Avenida de la Paz 50, Granada', '5566778899', 'josemadrid@email.com'),
('Calle de la Esperanza 20, Granada', '3344556677', 'moiseslorente@email.com');

CREATE TABLE Pedido (
    codigoPedido INT AUTO_INCREMENT PRIMARY KEY,
    idCliente INT NOT NULL,
    idUser INT NOT NULL,
    cantidad INT NOT NULL,
    idMedicamento INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES Cliente(id),
    FOREIGN KEY (idUser) REFERENCES Usuario(id),
    FOREIGN KEY (idMedicamento) REFERENCES Medicamento(idMedicamento)
);

INSERT INTO Pedido (idCliente, idUser, cantidad, idMedicamento, precio, fecha)
VALUES 
(1, 101, 3, 5, 150.75, '2024-12-01'),
(2, 102, 2, 3, 200.50, '2024-12-02'),
(3, 103, 5, 2, 99.99, '2024-12-03'),
(4, 104, 1, 1, 120.25, '2024-12-04'),
(5, 105, 4, 4, 250.00, '2024-12-05'),
(6, 106, 2, 6, 180.40, '2024-12-06');

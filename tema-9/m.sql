CREATE DATABASE IF NOT EXISTS php2;

USE php2;

CREATE TABLE IF NOT EXISTS tema (
  id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(30),
  contenido VARCHAR(100),
  autor VARCHAR(30),
  fecha DATE,
  hora TIME,
  PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS respuesta (
  id INT NOT NULL AUTO_INCREMENT,
  id_tema INT NOT NULL,
  respuesta VARCHAR(100),
  autor VARCHAR(30),
  fecha DATE,
  PRIMARY KEY(id),
  FOREIGN KEY(id_tema) REFERENCES tema(id)
);

INSERT INTO tema (titulo, contenido, autor , fecha, hora)
VALUES ('V.F. Corporation', 'Apparel', 'Johnna', '2024-01-30', '1:26:14'),
('Inter Parfums, Inc.', 'Package Goods/Cosmetics', 'Lorette', '2024-01-30', '15:38:04'),
('CNA Financial Corporation', 'Property-Casualty Insurers', 'Tomi', '2024-08-22', '5:34:41'),
('ServisFirst Bancshares, Inc.', 'Major Banks', 'Tierney', '2024-09-29', '13:03:34'),
('ChromaDex Corporation', 'Specialty Chemicals', 'Benedetta', '2024-02-26', '12:12:22');

INSERT INTO respuesta (id_tema, respuesta, autor, fecha)
VALUES ('1', 'Major Banks', 'Wilhelm', '2025-01-13'),
('2', 'Biotechnology: Laboratory Analytical Instruments', 'Noemi', '2024-11-26'),
('3', 'Semiconductors', 'Bruno', '2024-10-05'),
('4', 'Major Pharmaceuticals', 'Kaine', '2024-11-17'),
('5', 'Major Pharmaceuticals', 'Lionel', '2024-12-10');

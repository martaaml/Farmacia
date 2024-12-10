CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin123';
GRANT ALL PRIVILEGES ON mistiendas.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;
/* % para todas las conexiones, sino localhost o uno especifico*/
ALTER USER 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin123';
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'rMps12EN15';
GRANT ALL PRIVILEGES ON farmacia.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;
/* % para todas las conexiones, sino localhost o uno especifico*/
ALTER USER 'admin'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin123';
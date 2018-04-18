DDL

1. CREATE DATABASE butel;
2. CREATE TABLE bukutelepon (
  id int(11) NOT NULL AUTO_INCREMENT,
  nama varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  TEL varchar(50) DEFAULT NULL,
  tanggal_lahir date DEFAULT NULL,
  hobi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB

3. INSERT INTO bukutelepon VALUES (1,'Fikri hernanda','fikri.hernanda@yahoo.co.id','085704089567','2018-04-29','futsal'),(2,'Faiz ELYUAN','faiz.elyuan@gmail.com','089973452321','2018-04-17','makan'),(3,'Rodrigo','rodrigo.Juni@gmail.com','0812312312','2018-04-05','minum'),(4,'Joy Ginting','joy@gmail.com','08452321','2018-04-05','basket');
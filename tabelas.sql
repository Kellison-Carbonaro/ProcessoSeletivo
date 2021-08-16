CREATE TABLE `kryptontec`.`carros` ( `id_carro` INT(11) NOT NULL , `marca_carro` VARCHAR(45) NOT NULL , `modelo_carro` VARCHAR(45) NOT NULL , `cor_carro` VARCHAR(45) NOT NULL , `fk_id_motor_motores` INT(11) NOT NULL ) ENGINE = InnoDB;
CREATE TABLE `kryptontec`.`rotina` ( `atividade` VARCHAR(100) NOT NULL , `hora` TIME NOT NULL ) ENGINE = InnoDB;

INSERT INTO `rotina` (`atividade`, `hora`) VALUES ('tomar café da manhã', '06:30'), ('correr', '06:45'), ('tomar banho', '07:15'), ('transito', '07:40'), ('ler emails', '08:15'), ('ir para cada dos avós', '09:00'), ('almoço em família', '12:00'), ('ver filme em casa', '14:00'), ('tomar banho', '17:00'), ('arrumar para aniversario', '17:20'), ('transito', '17:45'), ('comemoração do aniversario', '18:30'), ('transito', '21:30'), ('ligar video game', '22:00'), ('descansar', '23:00')
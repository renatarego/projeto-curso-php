CREATE TABLE `contato` (
  `idColuna` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexo` char(1) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `melhorHorario` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`idColuna`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*Data for the table `contato` */insert  into `contato`(`idColuna`,`nome`,`email`,`sexo`,`assunto`,`melhorHorario`,`mensagem`,`telefone`,`dataCadastro`) values (1,'qweqw','efranco23@gmail.com','M','DÃºvida','ManhÃ£,Tarde,Noite','eqweqwewq','eeqweqwe','2014-11-15 16:03:18'),(2,'gdfgdfgdg','efranco23@gmail.com','M','DÃºvida','ManhÃ£,Tarde,Noite','eqweqwewq','eeqweqwe','2014-11-15 16:09:41'),(3,'Eder Martins Franco','efranco23@gmail.com','M','DÃºvida','ManhÃ£,Tarde','Teste','99999999','2014-11-15 16:14:17'),(4,'Eder Martins Franco','efranco23@gmail.com','M','DÃºvida','ManhÃ£,Tarde,Noite','Teste','99999999','2014-11-15 16:19:46'),(5,'Eder Martins Franco','efranco23@gmail.com','M','Quero trabalhar com vocês','Manhã,Tarde','Teste chibata.','92981910517','2014-11-22 14:15:02'),(6,'Eder Martins Franco','efranco23@gmail.com','M','Quero trabalhar com vocês','Manhã,Tarde','Teste chibata.','92981910517','2014-11-22 14:24:51'),(7,'Eder Martins Franco','efranco23@gmail.com','M','Quero trabalhar com vocês','Manhã,Tarde','Teste chibata.','92981910517','2014-11-22 14:27:37'),(8,'Eder Martins Franco','efranco23@gmail.com','M','Quero trabalhar com vocês','Manhã,Tarde','Teste chibata.','92981910517','2014-11-22 14:30:08');
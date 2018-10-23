CREATE TABLE `participante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(11) DEFAULT NULL,
  `apellidos` varchar(11) DEFAULT NULL,
  `sexo` varchar(11) DEFAULT NULL,
  `fecha_nacimiento` int(11) DEFAULT NULL,
  `grado` varchar(11) DEFAULT NULL,
  `colegio` varchar(11) DEFAULT NULL,
  `fecha_creacion_test` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

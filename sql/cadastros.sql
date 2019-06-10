

Create  Database: `cgb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--estrutura da tabela especialidades-----
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_especialidades`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


INSERT INTO `especialidades` ( `especialidades`) VALUES
( 'Alegorlogista'),
( 'Endocrinologista'),
( 'Hematologista'),
( 'Oncologisra'),
( 'Otorrinolaringolista'),
( 'Pneumiologista'),
( 'Traumatologista');

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE sistema;
USE sistema;

CREATE TABLE `empresa` (
  `nome` varchar(50) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `ddd` varchar(2) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `site` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `empresa` (`nome`, `razaosocial`, `cnpj`, `ddd`, `telefone`, `site`) VALUES
('Empresa2', 'Gestao', '73417761000117', '47', '91353017', 'teste.com'),
('Empresa3', 'TI', '7341776100666', '47', '91353023', '');

ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nome`,`cnpj`,`telefone`);
COMMIT;

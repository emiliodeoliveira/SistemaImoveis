-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2017 às 04:12
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_idwell`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradoras`
--
-- FOREIGN KEY (idAdmin) REFERENCES administradoras(idAdmin)
-- PRIMARY KEY (idAdmin) 

CREATE TABLE `administradoras` (
  `idAdmin` bigint(20) NOT NULL AUTO_INCREMENT,
  `cnpj` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `razaoSocial` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  PRIMARY KEY (idAdmin)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estrutura da tabela `condominios`
--

CREATE TABLE `condominios` (
  `idCondominio` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `nomeCondominio` varchar(50) NOT NULL,
  `imgId` varchar(100) NOT NULL,
  PRIMARY KEY (idCondominio),
  FOREIGN KEY (idAdmin) REFERENCES administradoras(idAdmin)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`idCondominio`, `bairro`, `endereco`, `complemento`, `numero`, `nomeCondominio`, `imgId`) VALUES
(0, 'Cidade Baixa', 'Rua Venancio Aires', '123', '12', 'Condominio 1', 'cond-01.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotes`
--

CREATE TABLE `lotes` (
  `idLote` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `tamanho` decimal(10,5) NOT NULL,
  PRIMARY KEY (idLote),
  FOREIGN KEY (idCondominio) REFERENCES condominios(idCondominio),
  FOREIGN KEY (idPessoa) REFERENCES pessoas(idPessoa)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idPessoa` int(10) NOT NULL AUTO_INCREMENT,
  `cpf` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `login`, `senha`) VALUES
(1, 'teste', 'teste'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradoras`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

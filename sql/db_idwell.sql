-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2017 às 22:20
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

CREATE TABLE `administradoras` (
  `idAdmin` bigint(20) NOT NULL,
  `cnpj` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `razaoSocial` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condominios`
--

CREATE TABLE `condominios` (
  `idCondominio` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `nomeCondominio` varchar(50) NOT NULL,
  `imgId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`idCondominio`, `bairro`, `endereco`, `complemento`, `numero`, `nomeCondominio`, `imgId`) VALUES
(1, 'Cidade Baixa', 'Rua Venancio Aires', '123', '12', 'Condominio 1', 'cond-01.jpg'),
(2, 'Cidade baixa', 'Rua JosÃ© BonifÃ¡cio', '2', '32', 'CondomÃ­nio 2', 'cond-02.jpg'),
(3, 'SÃ£o JpÃ£o', 'Rua CearÃ¡', '12', '54', 'CondomÃ­nio 3', 'cond-01.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotes`
--

CREATE TABLE `lotes` (
  `idLote` int(10) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tamanho` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idPessoa` int(10) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `dataNasc` varchar(20) NOT NULL,
  `fotoPessoa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idPessoa`, `cpf`, `endereco`, `complemento`, `numero`, `nome`, `bairro`, `dataNasc`, `fotoPessoa`) VALUES
(1, '009.032.321.-07', 'Rua Olavo Barreto Viana', '1', '22', 'Jorge Luis Prada', 'Moinhos de vento', '02/11/1985', 'joe-eazor-portrait.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
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
ALTER TABLE `administradoras`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`idCondominio`);

--
-- Indexes for table `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`idLote`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradoras`
--
ALTER TABLE `administradoras`
  MODIFY `idAdmin` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `idCondominio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

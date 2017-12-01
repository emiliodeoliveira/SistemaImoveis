-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2017 às 23:52
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nomeAdministradora` varchar(50) NOT NULL,
  `imgAdmin` varchar(150) NOT NULL,
  `cnpj` bigint(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `razaoSocial` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradoras`
--

INSERT INTO `administradoras` (`idAdmin`, `nomeAdministradora`, `imgAdmin`, `cnpj`, `endereco`, `complemento`, `numero`, `razaoSocial`, `bairro`) VALUES
(1, 'Auxiliadora Predial', 'auxiliadora.jpg', 92780600000138, 'Rua Sete de Stembro', '-', '1116', 'Grupo Auxiliadora Predial de Porto Alegre LTDA', '');

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
  `imgId` varchar(100) NOT NULL,
  `idPessoa` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condominios`
--

INSERT INTO `condominios` (`idCondominio`, `bairro`, `endereco`, `complemento`, `numero`, `nomeCondominio`, `imgId`, `idPessoa`, `idAdmin`) VALUES
(1, 'Cidade Baixa', 'Rua Venancio Aires', '123', '12', 'Condominio Princesa Isabel', 'cond-01.jpg', 0, 0),
(2, 'Vila Nova', 'Estrada das TrÃªs Meninas', '2', '32', 'CondomÃ­nio Alphaville', 'cond-02.jpg', 0, 0),
(3, 'Bairro SÃ£o SebastiÃ£o', 'Rua das HortÃªnsias', 'Conjunto 1', '246', 'CondomÃ­nio Casa da Montanha', 'casa_montanha.jpg', 0, 0),
(4, 'Bairro Floresta', 'Rua do Luar', 'Conjunto 1', '110', 'CondomÃ­nio Moradas do Lago', 'lake-houses-dream-houses.jpg', 0, 0),
(5, 'Centro', 'Avenida SÃ£o JoÃ£o', 'Conjunto 2', '402', 'CondomÃ­nio Brasil', 'irmocelsomartinelli.jpg', 0, 0),
(6, 'Ipanema', 'Rua MagalhÃ£es Filho ', 'Conjunto 1', '62', 'CondomÃ­nio Ipanema Azul', 'vista-aerea-atlantico-sul.jpg', 0, 0),
(8, 'Lapa', 'Rua Visconde Almeida', '1', '25', 'CondomÃ­nio Solar da Lapa', 'cond2721.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotes`
--

CREATE TABLE `lotes` (
  `idLote` int(10) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tamanho` decimal(10,5) NOT NULL,
  `idPessoa` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lotes`
--

INSERT INTO `lotes` (`idLote`, `descricao`, `tamanho`, `idPessoa`, `idAdmin`) VALUES
(1, 'Lote 1', '80.00000', 1, 7),
(2, 'Lote 2', '75.00000', 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `menulabel` varchar(50) DEFAULT NULL,
  `content` text
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
  `fotoPessoa` varchar(100) NOT NULL,
  `funcaoPessoa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idPessoa`, `cpf`, `endereco`, `complemento`, `numero`, `nome`, `bairro`, `dataNasc`, `fotoPessoa`, `funcaoPessoa`) VALUES
(1, '123.456.789-01', 'Rua Olavo Barreto Viana', '1', '22', 'Emilio de Oliveira', 'Moinhos de vento', '10/05/1987', 'emilio-10.jpg', 'Administrador'),
(2, '022.123.432-05', 'Rua Teixeira de Freitas', 'Apto 24', '81', 'Bruno Tozetto', 'Santo Antônio', '20/09/1990', 'bruno-10.jpg', 'Administrador'),
(3, '021.236.698-05', 'Rua dos Carvalhos', 'Apto 202 Torre C', '282', 'Diego Lago', 'Centro', '10/06/1949', 'im03231.jpg', 'Usuario'),
(4, '365.521.256-08', 'Rua Santo AntÃ´nio', 'Apto 1104 Torre B', '450', 'Ricardo Shimabukuro', 'Bairro EsperanÃ§a', '08/11/1958', 'HK.jpg', 'Usuario'),
(5, '012.658.877-07', 'Rua Murilo Mendes', 'Apto 301 Torre A', '331', 'JoÃ£o Becker', 'Sete de Setembro', '02/06/1980', 'CUSTOM_EPIPHONE_091015_01.jpg', 'Sindico'),
(6, '201.365.874-12', 'Avenida Brasil', 'Apto 702 Torre B', '541', 'StÃ©fano Wortmann', 'Rio Branco', '07/09/1969', 'StevenWilson.jpg', 'Usuario'),
(7, '142.698.622-19', 'Avenida Osmar Arantes', 'Apto 901 Torre A', 'altNumPess', 'Sofia Souza', 'altBairroPessoa', '08/01/1988', '19ee5094d155f000f9d3efb7d36feb80--simone-simons-auburn.jpg', 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_in_roles`
--

CREATE TABLE `users_in_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_in_roles`
--

INSERT INTO `users_in_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

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
  MODIFY `idAdmin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `idCondominio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lotes`
--
ALTER TABLE `lotes`
  MODIFY `idLote` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_in_roles`
--
ALTER TABLE `users_in_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `users_in_roles`
--
ALTER TABLE `users_in_roles`
  ADD CONSTRAINT `users_in_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_in_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2022 às 06:18
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vicentinos`
--
CREATE DATABASE IF NOT EXISTS `vicentinos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vicentinos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mural`
--

CREATE TABLE `mural` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `foto` longblob NOT NULL,
  `descricao` text DEFAULT NULL,
  `dataCadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mural`
--

INSERT INTO `mural` (`id`, `nome`, `foto`, `descricao`, `dataCadastro`) VALUES
(17, 'ok', 0x617373696e61747572614469676974616c2e706e67, NULL, '2022-03-26 23:07:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transparencia`
--

CREATE TABLE `transparencia` (
  `id` int(11) NOT NULL,
  `origem` varchar(200) NOT NULL,
  `doador` varchar(200) NOT NULL,
  `objeto` text NOT NULL,
  `data` date NOT NULL,
  `valor` double NOT NULL,
  `comprovante` longblob DEFAULT NULL,
  `dataCadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `transparencia`
--

INSERT INTO `transparencia` (`id`, `origem`, `doador`, `objeto`, `data`, `valor`, `comprovante`, `dataCadastro`) VALUES
(4, 'Privado', 'ela', 'aquilo', '2022-01-01', 13000, NULL, '2022-03-25 14:58:27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mural`
--
ALTER TABLE `mural`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `transparencia`
--
ALTER TABLE `transparencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mural`
--
ALTER TABLE `mural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `transparencia`
--
ALTER TABLE `transparencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

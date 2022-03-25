-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Mar-2022 às 21:13
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
  `comprovante` blob DEFAULT NULL,
  `dataCadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `transparencia`
--

INSERT INTO `transparencia` (`id`, `origem`, `doador`, `objeto`, `data`, `valor`, `comprovante`, `dataCadastro`) VALUES
(4, 'Privado', 'ela', 'aquilo', '2022-01-01', 13000, NULL, '2022-03-25 14:58:27'),
(5, 'Privado', 'denovo', 'aquilo la', '2022-12-31', 22, NULL, '2022-03-25 14:59:00'),
(6, 'Publico', 'alskakl', 'ultimo', '2022-12-01', 20000, NULL, '2022-03-25 14:59:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `transparencia`
--
ALTER TABLE `transparencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `transparencia`
--
ALTER TABLE `transparencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2024 às 16:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_academia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `exercicios`
--

CREATE TABLE `exercicios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `peso` int(10) NOT NULL,
  `series` int(10) NOT NULL,
  `repeticoes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `exercicios`
--

INSERT INTO `exercicios` (`cod`, `nome`, `peso`, `series`, `repeticoes`) VALUES
(17, 'Supino Reto', 26, 2, 7),
(19, 'Remada Curvada', 70, 2, 6),
(20, 'Supino Reto', 26, 2, 6),
(22, 'Pull Down', 40, 2, 7),
(23, 'Supino Inclinado', 26, 3, 6),
(24, 'Pull Around', 60, 2, 8),
(25, 'Cross Over', 25, 3, 10),
(26, 'Leg Press', 200, 3, 6),
(27, 'Agachamento Livre', 80, 2, 5),
(28, 'Extensora', 140, 1, 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `exercicios`
--
ALTER TABLE `exercicios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `exercicios`
--
ALTER TABLE `exercicios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

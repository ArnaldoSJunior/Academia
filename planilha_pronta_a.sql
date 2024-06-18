-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2024 às 22:20
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
-- Estrutura para tabela `planilha_pronta_a`
--

CREATE TABLE `planilha_pronta_a` (
  `cod` int(11) NOT NULL,
  `nome_treino` varchar(100) NOT NULL,
  `nome_exercicio` varchar(100) NOT NULL,
  `peso` int(11) NOT NULL,
  `series` int(11) NOT NULL,
  `repeticoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `planilha_pronta_a`
--

INSERT INTO `planilha_pronta_a` (`cod`, `nome_treino`, `nome_exercicio`, `peso`, `series`, `repeticoes`) VALUES
(1, 'Treino A', 'Supino Inclinado', 30, 3, 10),
(2, 'Treino A', 'Voador Frente', 45, 3, 12),
(3, 'Treino A', 'Elevação Lateral', 12, 3, 10),
(4, 'Treino A', 'Triceps Francês Halter', 14, 3, 12),
(5, 'Treino B', 'Agachamento Smith', 60, 3, 10),
(6, 'Treino B', 'Cadeira Extensora', 45, 3, 12),
(7, 'Treino B', 'Mesa Flexora', 30, 3, 10),
(8, 'Treino B', 'Stiff barra', 30, 3, 12),
(9, 'Treino B', 'Afundo Búlgaro', 14, 3, 10),
(10, 'Treino C', 'Puxada Alta', 40, 4, 10),
(11, 'Treino C', 'Remada Baixa', 30, 3, 12),
(12, 'Treino C', 'Pull Down', 25, 3, 10),
(13, 'Treino C', 'Remada Curvada', 14, 3, 12),
(14, 'Treino C', 'Rosca Scott Halter', 12, 3, 12);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `planilha_pronta_a`
--
ALTER TABLE `planilha_pronta_a`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `planilha_pronta_a`
--
ALTER TABLE `planilha_pronta_a`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22/05/2024 às 01:18
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
-- Banco de dados: `gerador_rifa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_comprador`
--

CREATE TABLE `dados_comprador` (
  `numero_bilhete` int(10) UNSIGNED NOT NULL,
  `nome` varchar(1000) DEFAULT NULL,
  `contato` varchar(17) DEFAULT NULL,
  `endereco` varchar(1000) DEFAULT NULL,
  `cidade` varchar(500) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_comprador`
--

INSERT INTO `dados_comprador` (`numero_bilhete`, `nome`, `contato`, `endereco`, `cidade`, `estado`) VALUES
(43, 'Edilson Silva da Costa Segundo', '(84) 99832 - 0993', 'teste', 'Natal', 'RN'),
(46, 'teste', '(84) 34534 - 2231', 'teste', 'Natal', 'RN'),
(47, 'Edilson Silva da Costa Segundo', '(12) 31312 - 3123', '2241313', 'Natal', 'RN');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_comprador`
--
ALTER TABLE `dados_comprador`
  ADD PRIMARY KEY (`numero_bilhete`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_comprador`
--
ALTER TABLE `dados_comprador`
  MODIFY `numero_bilhete` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

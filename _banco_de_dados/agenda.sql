-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2024 às 03:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(4) NOT NULL,
  `nome_evento` varchar(30) NOT NULL,
  `data_evento` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `descricao_evento` text DEFAULT NULL,
  `local_evento` varchar(60) DEFAULT NULL,
  `responsavel_evento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `nome_evento`, `data_evento`, `hora_inicio`, `hora_fim`, `descricao_evento`, `local_evento`, `responsavel_evento`) VALUES
(1, 'Teste', '0000-00-00', '21:40:00', '22:40:00', 'Teste', 'Etec - Laboratório 1', 'Israel'),
(2, 'Teste', '2024-10-17', '22:00:00', '23:00:00', 'Teste', 'Etec - Laboratório 1', 'Israel'),
(3, 'Teste 2', '2024-10-17', '11:00:00', '12:30:00', 'Aula', 'Etec - Laboratório 2', 'Israel'),
(4, 'Aula de BD II', '2024-10-17', '21:00:00', '23:00:00', 'Aula de Banco de Dados II do curso técnico de Desenvolvimento de Sistemas.', 'Etec Guarulhos - Laboratório de Informática 2', 'Prof° Afonso'),
(5, 'Aula de BD II', '2024-10-17', '21:00:00', '23:00:00', 'Aula de Banco de Dados II do curso técnico de Desenvolvimento de Sistemas.', 'Etec Guarulhos - Laboratório de Informática 2', 'Prof° Afonso'),
(6, 'Teste 3', '2024-10-17', '01:00:00', '13:00:00', '', 'Laboratório 3', 'Cleide'),
(7, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(8, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(9, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(10, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(11, 'Teste 4', '2024-10-17', '04:00:00', '06:00:00', '', 'Teste', 'Teste'),
(12, 'Teste 4', '2024-10-17', '04:00:00', '06:00:00', '', 'Teste', 'Teste'),
(13, 'Teste 4', '2024-10-17', '04:00:00', '06:00:00', '', 'Teste', 'Teste'),
(14, 'Teste 4', '2024-10-17', '04:00:00', '06:00:00', '', 'Teste', 'Teste'),
(15, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(16, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(17, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(18, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(19, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(20, '', '2024-10-17', '00:00:00', '00:00:00', '', '', ''),
(21, '', '2024-10-17', '00:00:00', '00:00:00', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

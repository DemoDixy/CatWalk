-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2024 às 22:49
-- Versão do servidor: 8.0.26
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifchamp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campeonatos`
--

CREATE TABLE `campeonatos` (
  `idCampeonato` int NOT NULL,
  `fotoCampeonato` varchar(255) DEFAULT NULL,
  `nomeCampeonato` varchar(100) NOT NULL,
  `descricaoCampeonato` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `categoriaCampeonato` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `campeonatos`
--

INSERT INTO `campeonatos` (`idCampeonato`, `fotoCampeonato`, `nomeCampeonato`, `descricaoCampeonato`, `categoriaCampeonato`) VALUES
(1, 'img/Captura de Tela (21).png', 'Valorant', 'adsdaa', 'alimentos'),
(2, 'img/Captura de Tela (21).png', 'Valorant', 'sadd', 'alimentos'),
(3, 'img/Captura de Tela (21).png', 'Valorant', 'sadd', 'alimentos'),
(4, 'img/Captura de Tela (21).png', 'Valorant', 'sadd', 'alimentos'),
(5, 'img/Captura de Tela (21).png', 'Valorant', 'sadd', 'alimentos'),
(6, 'img/Captura de Tela (21).png', 'Valorant', 'sadd', 'alimentos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `matriculaUsuario` char(11) NOT NULL,
  `fotoUsuario` varchar(100) NOT NULL,
  `nomeUsuario` varchar(40) NOT NULL,
  `cursoUsuario` char(3) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`matriculaUsuario`, `fotoUsuario`, `nomeUsuario`, `cursoUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
('11111111111', 'img/Captura de tela 2024-09-24 174625.png', 'vini', 'JOG', 'vini@gmail', '594f803b380a41396ed63dca39503542');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `campeonatos`
--
ALTER TABLE `campeonatos`
  ADD PRIMARY KEY (`idCampeonato`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matriculaUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `campeonatos`
--
ALTER TABLE `campeonatos`
  MODIFY `idCampeonato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

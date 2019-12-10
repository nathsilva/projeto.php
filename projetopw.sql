-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 29-Nov-2019 às 02:19
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetopw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `idAlternativa` int(11) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `idQuestao` int(11) NOT NULL,
  `correta` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `idQuestoes` int(100) NOT NULL,
  `enunciado` text NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposquestao`
--

CREATE TABLE `tiposquestao` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `senha`) VALUES
(9, 'Tanjiro', 'uuuuuu@nezuko.tanji.com', '202cb962ac59075b964b07152d234b70'),
(13, 'inosuke', 'inosuke@monjiro.com', '1e48c4420b7073bc11916c6c1de226bb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`idAlternativa`),
  ADD KEY `alternativa_questao` (`idQuestao`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`idQuestoes`);

--
-- Indexes for table `tiposquestao`
--
ALTER TABLE `tiposquestao`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `idAlternativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `idQuestoes` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiposquestao`
--
ALTER TABLE `tiposquestao`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD CONSTRAINT `alternativa_questao` FOREIGN KEY (`idQuestao`) REFERENCES `questoes` (`idQuestoes`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

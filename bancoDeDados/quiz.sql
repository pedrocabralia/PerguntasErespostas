-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2018 at 05:47 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `participante`
--

CREATE TABLE `participante` (
  `idparticipante` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participante`
--

INSERT INTO `participante` (`idparticipante`, `nome`, `email`, `senha`) VALUES
(6, 'Pedro Vinicios Sena de Matos', 'pedrocabralia@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(7, 'Pedro Vinicios Sena de Matos', 'pedrocabralia@hotmail.com', '723feb93f36ad69ffe41e926f7b52c0c04178f73');

-- --------------------------------------------------------

--
-- Table structure for table `pergunta`
--

CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL,
  `alternativaA` varchar(45) NOT NULL,
  `alternativaB` varchar(45) NOT NULL,
  `alternativaC` varchar(45) NOT NULL,
  `alternativaCorreta` int(11) NOT NULL,
  `pergunta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `alternativaA`, `alternativaB`, `alternativaC`, `alternativaCorreta`, `pergunta`) VALUES
(1, 'Tiririca', 'Lula', 'Cristóvão Colombo', 3, 'Quem descobriu a America?'),
(2, 'Corinthians', 'brasil', 'Cabrália ', 3, 'Qual o melhor Time do Mundo?'),
(3, 'Temer', 'Tirica', 'Luiz Inácio', 2, 'Quem é o Presidente do Brasil?'),
(4, '2', '3', '4', 1, 'Quanto é 1+1?'),
(5, 'Messi', 'Cristiano Ronaldo', 'Pelé', 2, 'Quem é o melhor jogador do mundo?'),
(6, 'Didi', 'Tite', 'Felipão', 2, 'Quem é o treinador do Brasil? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`idparticipante`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idpergunta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
  MODIFY `idparticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

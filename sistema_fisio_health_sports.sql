-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Jun-2021 às 21:09
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema fisio health sports`
--
CREATE DATABASE IF NOT EXISTS `sistema fisio health sports` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema fisio health sports`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `celular` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(8) NOT NULL,
  `telefone` int(11) NOT NULL,
  `datadenascimento` date NOT NULL,
  `escolhasexo` tinyint(1) NOT NULL,
  `necessidade_especial` tinyint(1) NOT NULL,
  `fisica` varchar(11) NOT NULL,
  `motora` varchar(11) NOT NULL,
  `psiquica` varchar(11) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `repetesenha` varchar(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutores`
--

CREATE TABLE IF NOT EXISTS `instrutores` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ID_cref` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `celular` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rg` int(8) NOT NULL,
  `telefone` int(11) NOT NULL,
  `datadenascimento` date NOT NULL,
  `escolhasexo` tinyint(1) NOT NULL,
  `mensagem` varchar(400) NOT NULL,
  `senha` int(8) NOT NULL,
  `redigitesenha` int(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE IF NOT EXISTS `sessao` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `horario` varchar(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

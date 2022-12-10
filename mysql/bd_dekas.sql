-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Dez-2022 às 23:13
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_dekas`
--
CREATE DATABASE IF NOT EXISTS `bd_dekas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_dekas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `idTabCarrinho` int(11) NOT NULL AUTO_INCREMENT,
  `idCarrinho` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  PRIMARY KEY (`idTabCarrinho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idTabPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idPedido` int(11) NOT NULL,
  `idCarrinho` int(11) NOT NULL,
  PRIMARY KEY (`idTabPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProdu` int(11) NOT NULL AUTO_INCREMENT,
  `srcIMG` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nomeProdu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valProdu` decimal(5,2) NOT NULL,
  `pesoProdu` int(10) NOT NULL,
  `dscProduto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idProdu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProdu`, `srcIMG`, `nomeProdu`, `valProdu`, `pesoProdu`, `dscProduto`, `estado`) VALUES
(1, 'imgProdutos\\bolo.png', 'DEDE', '100.00', 1, 'Bolo feito de amor', 0),
(2, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(3, 'imgProdutos\\bolo.png', 'Bolodasdasdasdda', '100.00', 1, 'Bolo feito de amor', 0),
(4, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(5, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(6, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(7, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(8, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(9, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(10, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(11, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(12, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(13, 'imgProdutos\\bolo.png', 'tomar banho', '100.00', 1, 'Bolo feito de amor', 0),
(14, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(15, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(16, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(17, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(18, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(19, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(20, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(21, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(22, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(23, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(24, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(25, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(26, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(27, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(28, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(29, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(30, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(31, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(32, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(33, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(34, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(35, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(36, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(37, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(38, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(39, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(40, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(41, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(42, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(43, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(44, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(45, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(46, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(47, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(48, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(49, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(50, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(51, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(52, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(53, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(54, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(55, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(56, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0),
(57, 'imgProdutos\\bolo.png', 'Bolo', '100.00', 1, 'Bolo feito de amor', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefoneUsuario` int(11) NOT NULL,
  `CEP` int(8) NOT NULL,
  `numeroEnder` int(5) NOT NULL,
  `dscComple` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `CPF`, `email`, `senha`, `nomeUsuario`, `telefoneUsuario`, `CEP`, `numeroEnder`, `dscComple`, `admin`) VALUES
(19, 1, 'a@a.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'SuperAdmin', 1, 1, 1, '1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

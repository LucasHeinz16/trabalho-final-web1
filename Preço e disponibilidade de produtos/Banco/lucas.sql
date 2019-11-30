-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2019 às 05:01
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lucas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `IDCategoria` int(11) NOT NULL,
  `NomeCategoria` varchar(15) NOT NULL,
  `Descricao` text DEFAULT NULL,
  `Figura` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`IDCategoria`, `NomeCategoria`, `Descricao`, `Figura`) VALUES
(37, 'Mouse', 'Periferico', 0x646174613a3b6261736536342c),
(38, 'Teclado', 'Periferico', 0x646174613a3b6261736536342c),
(39, 'Processador', 'Hardware', 0x646174613a3b6261736536342c),
(40, 'Windows 10 Pro', 'Software', 0x646174613a3b6261736536342c),
(41, 'Avast', 'Software', 0x646174613a3b6261736536342c);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `IDFornecedor` int(11) NOT NULL,
  `NomeCompanhia` varchar(40) NOT NULL,
  `NomeContato` varchar(30) DEFAULT NULL,
  `TituloContato` varchar(30) DEFAULT NULL,
  `Endereco` varchar(60) DEFAULT NULL,
  `Cidade` varchar(15) DEFAULT NULL,
  `Regiao` varchar(15) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `Pais` varchar(15) DEFAULT NULL,
  `Telefone` varchar(24) DEFAULT NULL,
  `Fax` varchar(24) DEFAULT NULL,
  `Website` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`) VALUES
(2, 'Lucas Heinz 1'),
(8, 'Lucas Heinz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `disponibilidade` int(1) NOT NULL DEFAULT 1,
  `codigo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `disponibilidade`, `codigo`) VALUES
(7, 'SSD Kingston A400, 480GB, SATA, Leitura 500MB/s, G', '259,90', 1, 1),
(8, 'Placa-Mãe Gigabyte GA-AB350M-DS3H V2, AMD AM4', '389,90', 1, 37),
(9, 'Memória HyperX Fury, 4GB, 2400MHz, DDR4, CL15', '137,90', 1, 26),
(10, 'Placa de Vídeo Asus TUF3 NVIDIA GeForce GTX 1660', '1399,90', 1, 21),
(11, 'Processador AMD Ryzen 3 2200G, Cooler Wraith', '365,90', 1, 27),
(12, 'Monitor LG LED 29´ Ultrawide, IPS, HDMI, FreeSync ', '849,90', 1, 89),
(13, 'Mochila Gamer Husky Avalanche, para Notebook', '129,97', 1, 127),
(14, 'Teclado Óptico Mecânico Gamer Razer Huntsman,', '697,84', 1, 84),
(15, 'Processador Intel Core i9-9900KF Coffee Lake', '2199,99', 1, 56),
(16, 'AirPods com Estojo de Recarga, Branco - MV7N2BE/A', '1142,00', 1, 1646);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_cat_produtos`
--

CREATE TABLE `usuarios_cat_produtos` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_cat_produtos`
--

INSERT INTO `usuarios_cat_produtos` (`id`, `login`, `email`, `password`) VALUES
(2, 'Lucas Heinz', 'a@a', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_pessoas`
--

CREATE TABLE `usuarios_pessoas` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_pessoas`
--

INSERT INTO `usuarios_pessoas` (`id`, `login`, `email`, `password`) VALUES
(14, 'Lucas Heinz', 'a@a', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_produtos`
--

CREATE TABLE `usuarios_produtos` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_produtos`
--

INSERT INTO `usuarios_produtos` (`id`, `login`, `email`, `password`) VALUES
(2, 'Lucas Heinz', 'a@a', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`IDCategoria`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`IDFornecedor`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_cat_produtos`
--
ALTER TABLE `usuarios_cat_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_pessoas`
--
ALTER TABLE `usuarios_pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_produtos`
--
ALTER TABLE `usuarios_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `IDCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `IDFornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios_cat_produtos`
--
ALTER TABLE `usuarios_cat_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios_pessoas`
--
ALTER TABLE `usuarios_pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios_produtos`
--
ALTER TABLE `usuarios_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

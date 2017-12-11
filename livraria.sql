-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11-Dez-2017 às 13:29
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `valor`) VALUES
(1, 268);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `capa` varchar(100) NOT NULL,
  `tipo_obj` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome`, `preco`, `qtd`, `tipo`, `capa`, `tipo_obj`) VALUES
(1, 'A cabana', 23, 8, 'Drama', '4b1b69b19ed54e87b8c2dfacbd2cc5c3.jpeg', ''),
(2, 'O pequeno prÃ­ncipe', 30, 12, 'Aventura', '050b53b3d3c0bba397ef465f8dd665ce.jpg', ''),
(3, 'Mitologia nÃ³rdica', 20, 9, 'Aventura', '130bc86745fa4f1185b097adfdbcbfda.jpeg', ''),
(4, 'Mitologia grega', 20, 10, 'Aventura', '12217bb1d0429277379ed6c63109f04c.jpg', ''),
(5, 'Uma longa jornada', 19, 10, 'Drama', 'cff4cc329c23e5740539897a055c0a6c.jpeg', ''),
(6, 'Como ser milionÃ¡rio', 30, 29, 'Aventura', '26093a3cf365cdcf7db676092abd9cbb.jpg', ''),
(7, 'Titanic', 20, 18, 'Drama', '01f33544a74e6b587731cc63041f4ab9.jpg', ''),
(8, 'Como viver bem', 10, 10, 'Aventura', 'e9b9f6fd4134748107bce6f2d8c97349.jpg', ''),
(9, 'Como ser mais saudÃ¡vel', 10, 10, 'Aventura', 'ad2dc8758aa7fd00e6c1c06a87490613.jpg', ''),
(10, 'O teorema Katherine', 34, 9, 'Aventura', '2a090de4b261f4c13fade042cdd7324a.jpeg', 'ilustraÃ§Ãµes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `nome`) VALUES
(1, 'Aventura'),
(2, 'Comedia'),
(3, 'Drama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'gabriel', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `nome_livro` varchar(50) NOT NULL,
  `tipo_livro` varchar(30) NOT NULL,
  `preco_unit_livro` float NOT NULL,
  `qtd_itens` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `nome_livro`, `tipo_livro`, `preco_unit_livro`, `qtd_itens`, `total`) VALUES
(1, 'A cabana', 'Drama', 23, 2, 46),
(2, 'Mitologia nÃ³rdica', 'Aventura', 20, 1, 20),
(3, 'Titanic', 'Drama', 20, 2, 40),
(4, 'O teorema Katherine', 'Aventura', 34, 3, 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2020 às 16:45
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reino_acai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingr` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingr`, `nome`, `valor`) VALUES
(1, 'Banana', 1.5),
(2, 'Pera', 1.5),
(3, 'Uva', 1.5),
(4, 'Morango', 1.5),
(5, 'Manga', 1.5),
(6, 'Nutela', 2),
(7, 'Leite em pó', 1.35),
(8, 'Paçoca', 1.35),
(9, 'Chocolate Granulado', 3.35),
(10, 'Leite Condensado', 1.3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_usuario`, `descricao`, `valor`) VALUES
(1, 18, 'Açaí P Banana Pera Uva Paçoca Chocolate Granulado Leite em pó Leite Condensado ', 17.85),
(2, 18, 'Açaí P Banana Pera Uva Paçoca Chocolate Granulado Leite em pó Leite Condensado ', 17.85),
(3, 18, 'Açaí P Banana Pera Uva Paçoca Chocolate Granulado Leite em pó Leite Condensado Leite em pó Leite em pó Paçoca Manga ', 23.4),
(4, 18, 'Banana Pera Morango Açaí G ', 16.5),
(5, 18, 'Açaí G Banana Pera ', 15),
(6, 18, 'Açaí + Cupuaçu G ', 13),
(7, 18, 'Cupuaçu P Banana Pera Uva Leite em pó ', 11.85),
(8, 18, 'Açaí M Pera Uva Morango ', 13.5),
(9, 18, 'Cupuaçu G Pera ', 13.5),
(10, 18, 'Açaí + Cupuaçu G Uva Morango Morango ', 17.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `preco_p` float NOT NULL,
  `preco_m` float NOT NULL,
  `preco_g` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `preco_p`, `preco_m`, `preco_g`) VALUES
(2, 'Açaí', 6, 9, 12),
(3, 'Cupuaçu', 6, 9, 12),
(4, 'Açaí + Cupuaçu', 7, 10, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `sobrenome`, `email`, `tel`, `senha`) VALUES
(18, 'David', 'Alves', 'daviid02@gmail.com', '19983255005', 'caf1a3dfb505ffed0d024130f58c5cfa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingr`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

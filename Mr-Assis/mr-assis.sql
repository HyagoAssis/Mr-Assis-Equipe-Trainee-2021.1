-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2021 às 23:12
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mr-assis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Computadores'),
(2, 'Hardware'),
(3, 'Monitores'),
(4, 'Impressoras'),
(5, 'Serviços'),
(6, 'Periféricos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(400) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria`, `descricao`, `imagem`, `quantidade`) VALUES
(1, 'Impressora', '1500.90', 'Computadores', 'mio impressora', 'impressora.jpg', 15),
(2, 'Computador de Escritório', '3499.99', 'Computadores', 'Computador ótimo para trabalhar.', 'computador.jpg', 4),
(3, 'Serviço de Formatação', '100.00', 'Serviços', 'Formatamos o seu Pc e deixamos ele nos trinques', 'formatacao.png', 5),
(4, 'Anti Virus', '500.00', 'Serviços', 'Retiramos qualquer virus do seu pc', 'servicos-antivirus.png', 5),
(5, 'Headset', '399.90', 'Periféricos', 'Melhor headset, da pra ouvir os cara saindo da base tr.', 'headset.jpg', 6),
(6, 'Monitor Gamer', '1500.90', 'Monitores', 'Monitor Bullet 144hz', 'monitor-acer.jpg', 2),
(7, 'Notebook Acer Aspire 3', '4499.90', 'Computadores', 'Ryzen 7 3700U\r\nRoda seus joguinho de fada tudo', 'Notebook-Acer-Aspire-3-AMD-Ryzen-7-3700U.jpg', 4),
(8, 'Placa de Video GTX 1650', '1600.00', 'Hardware', 'Placa de video que roda warzone no ultra', 'placa-de-video-gigabyte-nvidia-geforce-gtx-1650.jpg', 1),
(9, 'Teclado Razer Rosinha lindo', '700.00', 'Periféricos', 'Lindo kawai tecladinho ui uiui ', 'Teclado Razer Blackwidow Tournament Chroma V2 (quartz).jpg', 7),
(10, 'Processador dos avengers', '5000.00', 'Hardware', 'HOMEM DE FERRO INVEJA ESSE PROCESSADOR', 'processador-avenger.jpg', 1),
(11, 'Notebook gamer asus', '1700.90', 'Computadores', 'Notebook que da pra jogar e viajar e jogar e tem luizinha gamer pra toda familia', 'notebook gamer asus.jpg', 7),
(14, 'outro teste a', '200.00', 'Hardware', 'jklafhs dfashdjkfhasjkdf', 'gps.png', 100),
(15, 'computador 1', '500.00', 'Computadores', 'computador 1', 'computador.jpg', 100),
(16, 'computador 2', '1500.00', 'Computadores', 'computador 2', 'notebook gamer asus.jpg', 200),
(17, 'computador 3', '1500.90', 'Computadores', 'computador 3', 'computador.jpg', 3),
(18, 'impressora 1', '1500.00', 'Impressoras', 'impressora 1', 'impressora.jpg', 45),
(19, 'impressora 2', '1600.00', 'Impressoras', 'impressora 2', 'formatacao.png', 2),
(20, 'impressora 3', '1500.90', 'Impressoras', 'impressora 3', 'impressora.jpg', 200),
(21, 'Kit Periféricos ', '90.00', 'Periféricos', 'Kit Periféricos 1', 'Teclado Razer Blackwidow Tournament Chroma V2 (quartz).jpg', 2),
(22, 'Kit Periféricos 2', '1700.00', 'Periféricos', 'Kit Periféricos 2', 'monitor-acer.jpg', 4),
(23, 'Computador gamer 1', '20000.00', 'Computadores', 'Computador gamer 1', 'notebook gamer asus.jpg', 1),
(24, 'Computador gamer 2', '30000.00', 'Computadores', 'Computador gamer 2', 'computador.jpg', 1),
(25, 'Computador gamer 3', '40000.00', 'Computadores', 'Computador gamer 3', 'notebook gamer asus.jpg', 12),
(26, 'Computador gamer 5', '50000.00', 'Computadores', 'Computador gamer 5\r\n', 'Notebook-Acer-Aspire-3-AMD-Ryzen-7-3700U.jpg', 1),
(27, 'Computador desktop', '1000.00', 'Computadores', 'Computador desktop', 'computador.jpg', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `foto`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'loja2.jpg'),
(3, '123', '123', '123', 'foto usuario.jpg'),
(4, 'sdgfagsdhjf asdf', 'dflsdjkahfjsdhgf@gmail.com', '1234', 'loja3.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

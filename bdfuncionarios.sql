-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13-Ago-2022 às 20:36
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdfuncionarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrados`
--

CREATE TABLE `cadastrados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datanascimento` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `morada` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datacontratacao` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salario` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `htd` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrados`
--

INSERT INTO `cadastrados` (`id`, `nome`, `datanascimento`, `bi`, `morada`, `datacontratacao`, `email`, `telefone`, `salario`, `htd`, `cargo`, `foto`) VALUES
(12, 'Carlos Garcia', '2001', '007938115TA040', 'Viana', ' 2020-04-08', 'carlosgarcia@gmail.com', '938092678', '2.000.000kz', '5', 'Professor', 'FB_IMG_16366579059068260.jpg'),
(32, 'Luis Chilembo Mateus', 'we12', 'L190394320492304', 'Viana', ' 2020-04-08', 'luisavelino@gmail.com', '938092678', '4.000.000kz', '2', 'Professor', 'FB_IMG_163647437418014482.jpg'),
(36, 'l', '2003', 'kl', 'kl', ' 2020-04-07', 'meury@gmail.com', '887', '89', '12', 'Programador', 'FB_IMG_16366578584959481.jpg'),
(37, 'Ludmila Silva', '2004', '9090uwqdwu80', 'Viana', ' 2021-12-13', 'a@gmail.com', '2132312', '21323', '1', 'r', 'Captura de ecrã_2020-04-01_20-32-25.png'),
(40, 'Domingos Braganha', '1945', '007938115LA040', 'Viana', ' 2022-03-02', 'coderx19@gmail.com', '938092678', '4.000.000kz', '5', 'Programador', 'FB_IMG_16366578584959481.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrados`
--
ALTER TABLE `cadastrados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrados`
--
ALTER TABLE `cadastrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

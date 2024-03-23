-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2023 às 01:07
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_autoria`
--
CREATE DATABASE `bd_autoria`;
USE `bd_autoria`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_Autor` int(5) NOT NULL,
  `NomeAutor` varchar(35) NOT NULL,
  `Sobrenome` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Cod_Autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nasc`) VALUES
(1, 'Joaquim Maria', 'Jesus', 'machadodeassis41@gmail.com', '1987-01-21'),
(2, 'Conceição', 'Reis', 'conceicaoevaristo50@gmail.com', '1950-05-12'),
(3, 'Carolina Maria', 'Jesus', 'carolinamaria03@gmail.com', '1970-06-04'),
(4, 'Ruth', 'Ribeiro', 'ruthguimaraes20@gmail.com', '1960-05-08'),
(5, 'Maria Firmina', 'Reis', 'mariafirminareis05@gmail.com', '1978-05-14'),
(6, 'Mel', 'Duarte', 'melduarte06@gmail.com', '1980-04-18'),
(7, 'Esmeralda', 'Ribeiro', 'esmeraldarikbeiro07@gmail.com', '1990-05-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_Autor` int(5) NOT NULL,
  `Cod_livro` int(5) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Editora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`Cod_Autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
(1, 1, '2020-05-10', 'Companhia da Letras'),
(2, 2, '2022-08-13', 'Globo Livros'),
(3, 3, '2023-01-21', ' Editora Rocco'),
(4, 4, '2019-09-08', 'Suma'),
(5, 5, '2014-06-17', 'Aleph'),
(6, 6, '2022-09-16', 'Leya'),
(7, 7, '2023-04-03', 'Saraiva'),
(5, 5, '2016-05-10', 'Principis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_livro` int(5) NOT NULL,
  `Título` varchar(30) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `Idioma` varchar(15) NOT NULL,
  `QtdePag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_livro`, `Título`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Alice país das maravilhas', 'Conto', '978-85-3780-172-7', 'Português', 250),
(2, 'Pantera negra', 'Ficção ', '862-00-3780-172-7', 'Inglês', 190),
(3, 'Refugiados', 'Biografia', '821-85-5910-172-7', 'Português', 350),
(4, 'A cinco passos de você', 'Romance', '555-99-3780-172-7', 'Inglês', 450),
(5, 'Amoras', 'Infantil', '658-45-5480-172-7', 'Português', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `Login` varchar(10) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Login`, `Senha`) VALUES
('Edna', 2023),
('Andressa', 2023);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_Autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_livro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

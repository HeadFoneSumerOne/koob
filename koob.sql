-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 06:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koob`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(1, 'Julia', 'Cunha', 'jubs@gmail.com', 'juju123'),
(2, 'Ericson', 'Tassini', 'eric@gmail.com', 'papai123'),
(5, 'Joao', 'Silva', 'jsilva@gmail.com', '123456'),
(8, 'JOse', 'Arruda', 'arrudao@uol.com', '654321'),
(12, 'moiseis', 'eduardo', 'duduzinho@gmail.com', 'julialinda'),
(13, 'Sabrina', 'Maria', 'sabs@gmail.com', 'sasa123'),
(14, 'bernardo ', 'Cunha', 'bernardocunhatassini@gmail.com', 'bebe123'),
(15, 'Camila', 'Cunha', 'camilacunhaaraujo@hotmail.com', 'jujubebe'),
(16, 'Usuário', 'Teste', 'usuario@gmail.com', 'usu123'),
(18, 'Usuário', 'teste', 'usuario9@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_livro`
--

CREATE TABLE `tb_livro` (
  `id_livro` int(11) NOT NULL,
  `nome_livro` varchar(70) NOT NULL,
  `autor` varchar(70) NOT NULL,
  `editora` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `isbn` int(15) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_livro`
--

INSERT INTO `tb_livro` (`id_livro`, `nome_livro`, `autor`, `editora`, `genero`, `isbn`, `imagem`) VALUES
(1, 'O Poder Da Ação - Edição Luxo', 'Vieira, Paulo', 'Gente', 'Administracao', 12345, 'adm1.jpg'),
(2, 'Garra', 'Duckworth, Angela', 'Intrinseca', 'Administracao', 987654, 'adm5.jpg'),
(3, 'Filosofia de gestão', 'Márcio Fernandes', 'Portfolio e Penguin', 'Administracao', 48579, 'adm2.jpg'),
(4, 'História da Biblioteconomia Brasileira', 'Castro, César Augusto', 'Thesaurus', 'Biblioteconomia', 909685, 'biblio5.jpg'),
(7, 'Enfermagem Em Ginecologia E Saúde Da Mulher', 'Santos, Nívea Cristina Moreira', 'Érica', 'Enfermagem', 657839, 'enfe8.jpg'),
(8, 'Informática Para Concursos', 'Castilho, Ana Lúcia', 'Ferreira', 'Informatica', 895030, 'info6.jpg'),
(9, 'Enfermagem Em Terapia Intensiva', 'Viana, Renata Andréa Pietro Pereira - Torre, Mariana', 'MANOLE', 'Enfermagem', 773992, 'enfe9.jpg'),
(10, 'Tecnologia da Informação', 'Laurindo, Fernando Jose Barbin', 'Atlas Humanas Didático', 'Informatica', 5242728, 'info9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_livro`
--
ALTER TABLE `tb_livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

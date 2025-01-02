-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/01/2025 às 13:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `customers_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_customers`
--

CREATE TABLE `tb_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `register` datetime DEFAULT NULL,
  `access_level` int(1) UNSIGNED DEFAULT 1,
  `active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_customers`
--

INSERT INTO `tb_customers` (`id`, `first_name`, `last_name`, `user_name`, `email`, `passwd`, `register`, `access_level`, `active`) VALUES
(1, 'admin', 'admin2', 'admin2', 'admin@admin2.com', '$2y$10$7m4ZKe.3/.Y9F1BI7ZyKluVRYL6xUSOcnO7.81CblAUEpLzwjvMry', '2024-12-17 00:22:09', 1, 1),
(2, 'João', 'Silva', 'joaosilva23', 'joao.silva23@email.com', '$2y$10$8VNS3kI8sJ/KwRQstXjlkeWbIm/mCHzC3Skc7y4qFXt9ZwfuhhkTW', '2024-12-18 23:34:37', 1, 1),
(3, 'Lucas', 'Costa', 'lucascosta', 'lucas.costa21@email.com', '$2y$10$3K3JcqzNr95/eIUeSnJ5v.YbBH4YM1H2AN.FPtVOTtB14Fp6oGG3e', '2024-12-18 23:35:44', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2019 às 15:47
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
-- Banco de dados: `gerenciadormensalidades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `associadofisico`
--

CREATE TABLE `associadofisico` (
  `idAssociadoFisico` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rg` bigint(20) NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `usaProtese` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricaoProtese` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deficienteVisual` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tomaMedicacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualMedicacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fezCirurgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diagnostico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fazTratamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualTratamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nomeOftalmo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipoParto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meses` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `comprimento` int(11) NOT NULL,
  `nomePai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nomeMae` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `recursosOpticos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quemDetectou` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `motivoAtendimento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doencaOptica` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualDoenca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `associadojuridico`
--

CREATE TABLE `associadojuridico` (
  `idJuridico` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `idDoacao` int(11) NOT NULL,
  `idJuridico` int(11) NOT NULL,
  `dataPagamento` date NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `idMensalidade` int(11) NOT NULL,
  `dataPagamento` date NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idAssociadoFisico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(5, 'ACDV', 'acdv@gerenciadormensalidades.com', 'acdv@gerenciadormensalidades.com', '$2y$10$WNaoz0ugSg3y0Iy0L1aNfe1lOp8K35GToZ2NZy7kqgtFg3yqmKMSO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `associadofisico`
--
ALTER TABLE `associadofisico`
  ADD PRIMARY KEY (`idAssociadoFisico`);

--
-- Índices para tabela `associadojuridico`
--
ALTER TABLE `associadojuridico`
  ADD PRIMARY KEY (`idJuridico`);

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`idDoacao`),
  ADD KEY `idJuridico` (`idJuridico`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`idMensalidade`),
  ADD KEY `idAssociadoFisico` (`idAssociadoFisico`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `associadofisico`
--
ALTER TABLE `associadofisico`
  MODIFY `idAssociadoFisico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `associadojuridico`
--
ALTER TABLE `associadojuridico`
  MODIFY `idJuridico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `idDoacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  MODIFY `idMensalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `idJuridico` FOREIGN KEY (`idJuridico`) REFERENCES `associadojuridico` (`idJuridico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD CONSTRAINT `idAssociadoFisico` FOREIGN KEY (`idAssociadoFisico`) REFERENCES `associadofisico` (`idAssociadoFisico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2023 às 21:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reserva_carro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idagenda` int(11) NOT NULL,
  `carro_idcarro` int(11) DEFAULT NULL,
  `login_idlogin` int(11) NOT NULL,
  `funcionario_idfuncionario` int(11) NOT NULL,
  `quilometragem_inicial` int(11) NOT NULL,
  `entrada` date NOT NULL,
  `saida` date NOT NULL,
  `horario_entrada` time NOT NULL,
  `horario_saida` time NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `carro_disponivel` tinyint(4) DEFAULT NULL,
  `data_entregue` timestamp NULL DEFAULT NULL,
  `pagamento` float DEFAULT NULL,
  `cliente_idcliente` int(11) DEFAULT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `nome_funcionario` varchar(255) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamento`
--

INSERT INTO `agendamento` (`idagenda`, `carro_idcarro`, `login_idlogin`, `funcionario_idfuncionario`, `quilometragem_inicial`, `entrada`, `saida`, `horario_entrada`, `horario_saida`, `motivo`, `cidade`, `bairro`, `carro_disponivel`, `data_entregue`, `pagamento`, `cliente_idcliente`, `nome_cliente`, `nome_funcionario`, `preco`) VALUES
(46, NULL, 14, 15, 10, '2023-06-26', '2023-06-29', '12:12:00', '12:22:00', 'tes', 'tds', 'tds', NULL, NULL, 690, NULL, 'Maria', 'alexei', 0),
(48, NULL, 14, 15, 1, '2023-06-26', '2023-06-27', '12:23:00', '12:23:00', 'teste', 'Fodase', 'sexio', NULL, NULL, 230, NULL, 'Maria', 'alexei', 0),
(49, NULL, 14, 15, 15, '2023-06-26', '2023-06-28', '12:12:00', '12:12:00', 'teste', 'Fodase', 'sexio', NULL, NULL, 24, NULL, 'Maria', 'alexei', 0),
(50, NULL, 14, 15, 100, '2023-06-26', '2023-08-28', '12:12:00', '12:12:00', 'teste', 'Fodase', 'sexio', NULL, NULL, 6300, NULL, 'Maria', 'alexei', 0),
(51, 14, 14, 15, 0, '2023-06-26', '2023-06-30', '12:12:00', '12:41:00', 'a', 'bsaas', 'bsabsa', NULL, NULL, 200, 18, 'Emerson', 'alexei', 0),
(52, 14, 14, 15, 0, '2023-06-26', '2023-06-27', '12:22:00', '23:23:00', 'teste', 'Fodase', 'sexio', 1, NULL, 50, 18, 'Emerson', 'alexei', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `idcarro` int(11) NOT NULL,
  `quilometragem_inicial` int(11) DEFAULT NULL,
  `placa` varchar(7) NOT NULL,
  `modelo` varchar(120) NOT NULL,
  `preco` float NOT NULL,
  `motorizacao` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `automatico` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carro`
--

INSERT INTO `carro` (`idcarro`, `quilometragem_inicial`, `placa`, `modelo`, `preco`, `motorizacao`, `ano`, `cor`, `automatico`, `marca`, `imagem`) VALUES
(14, 10, 'SNH3', 'nod', 50, '1', 2004, 'vermelho', 'sim', 'tosd', '../imagens_carros/fuscao.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `telefone`, `endereco`, `cnh`) VALUES
(18, 'Emerson', 3242434, 'Rua do Santos', '../imagens_clientes/WallpaperSF2022_1600x900.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entregar_carro`
--

CREATE TABLE `entregar_carro` (
  `identregar_carro` int(11) NOT NULL,
  `agendamento_idagenda` int(11) NOT NULL,
  `kilometragem_inicial` double NOT NULL,
  `kilometragem_saida` double NOT NULL,
  `gasolina` tinyint(4) NOT NULL,
  `pneu` tinyint(4) NOT NULL,
  `farol` tinyint(4) NOT NULL,
  `banco` tinyint(4) NOT NULL,
  `janela` tinyint(4) NOT NULL,
  `motor` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(13) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `emprego` varchar(255) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` varchar(45) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `cpf`, `email`, `telefone`, `funcao`, `emprego`, `sexo`, `data_nascimento`, `cep`, `numero`, `complemento`, `cnh`) VALUES
(13, 'asdas', 123213, 'asdas@aasdasd', 123123, '21312', '123123', 'masculino', '2222-12-12', '12123', NULL, NULL, NULL),
(15, 'Alexei Mardegan', 123123, 'adsd@fer', 3242434, 'todsd', 'adasd', 'masculino', '2023-06-23', '123123', NULL, NULL, NULL),
(16, 'LUCIANO', 1231221, 'adsd@fer', 999999999, 'todsd', 'adasd', 'masculino', '1222-02-12', '1212213', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `funcionario_idfuncionario` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `excluido` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`idlogin`, `funcionario_idfuncionario`, `usuario`, `senha`, `admin`, `excluido`) VALUES
(14, 15, 'alexei', '3c4c0aec843b3d5164285a367f92794eee300bafdd1ee56407bd680f0898bb44', 1, 0),
(15, 13, 'fernando', '076a89c23179cedfc61171fe400ecf01fb76b9a48a68fb82dd0cd688d684d900', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagenda`),
  ADD KEY `fk_agendamento_carro1_idx` (`carro_idcarro`),
  ADD KEY `fk_agendamento_funcionario1_idx` (`funcionario_idfuncionario`),
  ADD KEY `fk_agendamento_login1_idx` (`login_idlogin`),
  ADD KEY `fk_agendamento_cliente1_idx` (`cliente_idcliente`);

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`idcarro`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices de tabela `entregar_carro`
--
ALTER TABLE `entregar_carro`
  ADD PRIMARY KEY (`identregar_carro`),
  ADD KEY `fk_entregar-carro_agendamento1_idx` (`agendamento_idagenda`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`),
  ADD KEY `fk_login_funcionario1_idx` (`funcionario_idfuncionario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idagenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `idcarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `entregar_carro`
--
ALTER TABLE `entregar_carro`
  MODIFY `identregar_carro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_carro1` FOREIGN KEY (`carro_idcarro`) REFERENCES `carro` (`idcarro`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_cliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_agendamento_funcionario1` FOREIGN KEY (`funcionario_idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_login1` FOREIGN KEY (`login_idlogin`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `entregar_carro`
--
ALTER TABLE `entregar_carro`
  ADD CONSTRAINT `fk_entregar-carro_agendamento1` FOREIGN KEY (`agendamento_idagenda`) REFERENCES `agendamento` (`idagenda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_funcionario1` FOREIGN KEY (`funcionario_idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

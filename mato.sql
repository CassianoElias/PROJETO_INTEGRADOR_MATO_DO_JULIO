-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2023 às 21:53
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(255) NOT NULL,
  `senha` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id`, `nomeCompleto`, `email`, `telefone`, `assunto`, `mensagem`) VALUES
(1, 'Cassiano Elias', 'cassianoessantana@gmail.com', '51986121874', 'teste', 'teste'),
(2, 'nome grande para testar o campo da tabela', 'emailgrandeparatestarocampodatable@gmail.com', '51986121874', 'assunto grande para testar o campo da tabela', 'A Terceira Guerra Púnica foi a terceira e última de três guerras travadas entre Roma e Cartago. As duas potências lutaram pela supremacia por quatro anos em confrontos inteiramente dentro do território cartaginês no Norte da África. A Segunda Guerra Púnica tinha acabado em 201 a.C. e um dos termos de paz proibia Cartago de guerrear sem a permissão de Roma. O rei númida Massinissa, aliado romano, explorou essa proibição e atacou o território cartaginês repetidas vezes com impunidade. Cartago enviou em 151 a.C. um exército sob Asdrúbal contra Massinissa apesar dos termos do tratado. Esta campanha terminou em desastre na Batalha de Oróscopa, com o exército cartaginês se rendendo. Facções anticartaginesas em Roma usaram essa ação como pretexto para o envio de uma expedição punitiva.\r\n\r\nUm grande exército romano desembarcou em Útica mais tarde, em 149 a.C.. Os cartagineses esperavam aplacar os romanos, porém estes seguiram para cercar a cidade de Cartago apesar dos cartagineses terem rendid'),
(3, 'Cassiano Elias', 'gabriel@inter.com', '51986121874', 'teste', 'Antecedentes\r\nRoma era a potência dominante na região do Mar Mediterrâneo em meados do século II a.C.,[22] enquanto Cartago era uma grande cidade-Estado localizada no Norte da África.[23] As duas lutaram durante 23 anos na Primeira Guerra Púnica entre 264 e 241 a.C. e depois por dezessete anos na Segunda Guerra Púnica de 218 a 201 a.C.. Ambas as guerras terminaram em vitórias romanas, com a segunda terminando especificamente quando o comandante romano Cipião Africano derrotou o comandante cartaginês Aníbal na Batalha de Zama, aproximadamente 160 quilômetros ao sudoeste da cidade de Cartago.[24] Cipião impôs um tratado de paz sobre os cartagineses que os despojou de todos os seus territórios de além mar e também alguns de seus africanos. Uma indenização de dez mil talentos[nota 2] de prata deveria ser paga no decorrer de cinquenta anos.[25] Reféns foram tomados e Cartago foi proibida de guerrear fora da África e na África apenas com expressa permissão romana. Muitos cartagineses queriam'),
(4, 'ALEMAO', 'EXEMPLO@DOMINIO.COM', '11111111111', 'ASASA', 'TESTETETETETETEETETET'),
(5, 'Cassiano Elias', 'cassianoessantana@gmail.com', '51986121874', 'Denuncia', 'TENHO HEMORRÓIDAS '),
(6, 'Cassiano Elias', 'cassianoessantana@gmail.com', '51986121874', 'Denuncia', 'adashasuasah'),
(7, 'texte excluir', 'cassianoessantana@gmail.com', '51986121874', 'Sugestao', 'wdasdasdas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

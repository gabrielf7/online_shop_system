-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2020 às 03:48
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web-db_loja-acert-cmp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(30) NOT NULL,
  `description_category` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`, `description_category`) VALUES
(1, 'Marketing Digital', 'Categoria dedica a ganho comercial pela internet.'),
(2, 'BackEnd', 'Profissional designado a resolver problemas de sites.'),
(3, 'Comércio Gamer', 'Comércio dedicado ao público Gamer.'),
(4, 'Informática', 'Categoria dedica ao acessórios técnico sobre informática.'),
(5, 'Framework', 'Categoria dedica a informar sobre as melhores Frameworks do mercado.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id_client` int(11) NOT NULL,
  `name_client` varchar(30) NOT NULL,
  `surname_client` varchar(30) NOT NULL,
  `phone_client` varchar(8) NOT NULL,
  `smartphone_client` varchar(9) NOT NULL,
  `cpf_client` varchar(11) NOT NULL,
  `email_client` varchar(254) NOT NULL,
  `street_client` varchar(50) NOT NULL,
  `number_client` varchar(5) NOT NULL,
  `neighborhood_client` varchar(50) NOT NULL,
  `city_client` varchar(50) NOT NULL,
  `state_client` varchar(50) NOT NULL,
  `cep_client` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_client`
--

INSERT INTO `tbl_client` (`id_client`, `name_client`, `surname_client`, `phone_client`, `smartphone_client`, `cpf_client`, `email_client`, `street_client`, `number_client`, `neighborhood_client`, `city_client`, `state_client`, `cep_client`) VALUES
(1, 'Falcon', 'Zeus', '35253423', '981887899', '06188830959', 'eee@developer.com', 'Rua Y de Augustino', '45', 'Seu zé Doze', 'Bonito', 'Bonito', '95600140'),
(2, 'Ana', 'Souza', '35093422', '981092345', '09123242456', 'ana@gema.com', 'Rua Simples Souza', '37', 'Fica limpo', 'Limposa', 'Limeira', '95400300'),
(3, 'Luisa', 'Albertania', '35213126', '981187623', '01288830959', 'Albertania@fk.com', 'Rua Ficaniana', '56', 'Acerolana', 'Petrolelis', 'Amapará', '95100442'),
(4, 'Carlos', 'Paunelano', '31313122', '991181624', '09258820951', 'Paunelano@go.com', 'Rua dos finalistas', '121', 'Finalista de Ribeirao', 'Ribeirao', 'Rio grande', '92500020'),
(5, 'Victavo', 'Ficavi', '32911512', '981818162', '05158810953', 'Ficavi@fk.com', 'Rua de quem fica com alguém', '77', 'Casamenteiro', 'Casande', 'Casarao', '96100120'),
(6, 'Fakeano', 'Silva', '37675725', '981383726', '05259970154', 'SilvaFK@dg.com', 'Rua Fika', '222', 'Fika Longe', 'Ficandino', 'Dino', '93501130'),
(7, 'Joke', 'Bravo', '37774774', '977783777', '07128970177', 'Bravo777@ggizi.com', 'Volta 7', '77', 'Prod7', 'Prodecemente', 'Proceder', '77700117');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_items_sale`
--

CREATE TABLE `tbl_items_sale` (
  `id_items_sale` int(11) NOT NULL,
  `id_sale` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity_product` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(10) NOT NULL,
  `name_product` varchar(30) NOT NULL,
  `description_product` varchar(120) NOT NULL,
  `value_product` float NOT NULL,
  `stock_product` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `id_category`, `name_product`, `description_product`, `value_product`, `stock_product`) VALUES
(1, 1, 'Comércio Digital - JoãoDDR4', 'Serviço digital', 600, 100),
(2, 4, 'Mouse PRO BAX', 'Mouse de lta performance', 500, 100),
(3, 4, 'SSD AXIOS PRO', 'SSD de alta performance ', 500, 100),
(4, 2, 'Curso de PHP - JoãoDDR4', 'Curso focado em profissionalizar os programadores Back End.', 400, 100),
(5, 5, 'Curso de ReactJS - JoãoDDR4', 'Curso dedicado a formar pessoas especilizadas em React.', 500, 100),
(6, 1, 'Curso de Marketing - JoãoDDR4', 'Curso focado em marketing empresarial', 700, 100),
(7, 3, 'Cadeira Gamer', 'Cadeira extramamente confortável para pessoas que queiram jogar seus jogos por horas seguidas', 1200, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `id_sale` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_sale` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_sale`
--

INSERT INTO `tbl_sale` (`id_sale`, `id_client`, `date_sale`) VALUES
(1, 3, '2020-09-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Índices para tabela `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Índices para tabela `tbl_items_sale`
--
ALTER TABLE `tbl_items_sale`
  ADD PRIMARY KEY (`id_items_sale`),
  ADD KEY `id_sale` (`id_sale`),
  ADD KEY `id_product` (`id_product`);

--
-- Índices para tabela `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Índices para tabela `tbl_sale`
--
ALTER TABLE `tbl_sale`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_items_sale`
--
ALTER TABLE `tbl_items_sale`
  MODIFY `id_items_sale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_sale`
--
ALTER TABLE `tbl_sale`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_items_sale`
--
ALTER TABLE `tbl_items_sale`
  ADD CONSTRAINT `tbl_items_sale_ibfk_1` FOREIGN KEY (`id_sale`) REFERENCES `tbl_sale` (`id_sale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_items_sale_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

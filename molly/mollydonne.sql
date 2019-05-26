-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 26, 2019 at 10:34 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `molly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_nom` varchar(50) NOT NULL,
  `admin_mdp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_nom`, `admin_mdp`) VALUES
(1, 'Eternast42', 'Eternast42'),
(2, 'pierre.velon@eemi.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `article_Nom` varchar(50) NOT NULL,
  `article_Taille` varchar(150) NOT NULL,
  `article_Coloris` varchar(200) NOT NULL,
  `article_Genre` varchar(50) NOT NULL,
  `article_Marque` varchar(500) NOT NULL,
  `article_Information` varchar(500) NOT NULL,
  `article_Conseil` varchar(200) NOT NULL,
  `article_Prix` varchar(15) NOT NULL,
  `article_Image_principale` varchar(200) NOT NULL,
  `article_Image_secondaire` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `article_Nom`, `article_Taille`, `article_Coloris`, `article_Genre`, `article_Marque`, `article_Information`, `article_Conseil`, `article_Prix`, `article_Image_principale`, `article_Image_secondaire`) VALUES
(1, 'Fila Disruptor - Homme Chaussures', '40-41-42-43-44-45-46', 'Bleu-Blanc-Rouge', 'Hommes', 'Fila est une marque italienne fondée à Biella dans le Piémont (Italie) en 1911 par les frères Fila, spécialisée dans les vêtements de sport.', 'La FILA Disruptor revient sur le devant de la scène ! Poursuivant la tendance des années 90 elle conserve sa silhouette classique et son look sportif pour offrir une allure audacieuse. ', 'Laver a froid', '99,99€', 'https://zupimages.net/up/19/21/kx6d.png', 'https://zupimages.net/up/19/21/zzna.png\r\nhttps://zupimages.net/up/19/21/mxhj.png\r\nhttps://zupimages.net/up/19/21/iff0.png'),
(2, 'Nike Air Force 1 Low - Homme Chaussures', '39-40-41-42-43-44-45', 'Marron-Rouge-Jaune', 'Hommes', 'Nike est une entreprise américainecréée \r\nen 1971 par Philip Knight et Bill Bowerman. \r\nBasée à Beaverton dans l’Oregon, elle est \r\nspécialisée dans la fabrication d’articles de \r\nsport.', 'La Nike Air Force 1 ’07 LV8 intègre les mêmes \r\ncaractéristiques de performance que l’original de 1982, tout en ajoutant des détails de conception novateurs pour un look plus élégant.', 'Laver a froid\r\n\r\nMettre la sneaker dans un filet', '109,99€', 'https://zupimages.net/up/19/21/8dab.png', 'https://zupimages.net/up/19/21/8k32.png\r\nhttps://zupimages.net/up/19/21/p9a9.png\r\nhttps://zupimages.net/up/19/21/leb5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

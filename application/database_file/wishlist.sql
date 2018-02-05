-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2018 a las 13:37:30
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wishlist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id_user` int(3) NOT NULL,
  `id_product` int(3) NOT NULL,
  PRIMARY KEY (`id_user`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(70) NOT NULL,
  `price` double(5,2) NOT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `img`) VALUES
(1, 'Lloytron 2', 'Colour: Silver, Type: Radio, Brand: Lloytron', 21.95, 'lloytron.jpeg'),
(2, 'Coby 2', 'Colour: Black, Type: Radio, Brand: Coby', 22.95, 'coby-2-1.jpeg'),
(11, 'Coby 2 Portable', 'Colour: Grey, Type: Portable Radio, Brand: Lloytron', 22.95, 'coby-2-2.jpeg'),
(12, 'Groov-e White', 'Colour: White, Type: Docking speakers, Brand: Groov e', 22.95, 'groov-e.jpeg'),
(13, 'Beurer Clock/Radio', 'Brand: Beurer, Type: Radio', 35.95, 'beurer.jpeg'),
(14, 'Groov-e Black', 'Colour: Black, Type: Docking speakers, Brand: Groov e', 36.95, 'groov-e-black.jpeg'),
(15, 'Lloytron Blue Portable', 'Brand: Lloytron, Colour: Blue, Type: Radio', 44.95, 'lloytron-blue.jpeg'),
(16, 'Lloytron Silver Portable', 'Brand: Lloytron, Colour: Silver, Type: Radio', 44.95, 'lloytron-silver.jpeg'),
(17, 'Lloytron Red Portable', 'Brand: Lloytron, Colour: Red, Type: Radio', 44.95, 'lloytron-red.jpeg'),
(18, 'GPO Rydell Four Black Portable', 'Brand: GPO, Colour: Black, Type: Retro Radio', 44.95, 'gpo-rydell-black.jpeg'),
(19, 'GPO Rydell Four Cream Portable', 'Brand: GPO, Colour: Cream, Type: Retro Radio', 44.95, 'gpo-rydell-cream.jpeg'),
(20, 'Roadstar Brown Vintage', 'Brand: Roadstar, Colour: Brown, Type: Retro Radio', 73.95, 'roadstar-brown.jpeg'),
(21, 'Beurer Wake-Up', 'Brand: Beurer, Colour: White', 95.95, 'beurer-wake-up.jpeg'),
(22, 'Sonoro GoLondon', 'Brand: Sonoro, Type: Portable Radio', 99.95, 'sonoro.jpeg'),
(23, 'Roberts 1950''s Replica Leaf', 'Brand: Roberts, Colour: Leaf, Type: Retro Radio', 139.95, 'roberts.jpeg'),
(24, 'Roberts 1950''s Replica Black', 'Brand: Roberts, Colour: Black, Type: Retro Radio', 139.95, 'roberts-black.jpeg'),
(25, 'Roberts 1950''s Replica Duck Eg', 'Brand: Roberts, Colour: Duck Egg, Type: Retro Radio', 139.95, 'roberts-duck-egg.jpeg'),
(26, 'Sonoro Radio Green', 'Colour: Green, Type: Radio, Brand: Sonoro', 299.95, 'sonoro-radio-green.jpeg'),
(27, 'Sonoro Radio Red', 'Colour: Red, Type: Radio, Brand: Sonoro', 299.95, 'sonoro-radio-red.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`, `email`) VALUES
(2, 'javier', 'a1234567', 'joshduranzin@gmail.com'),
(3, 'paul', 'root1234', 'paul@square1.io');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

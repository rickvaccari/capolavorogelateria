# ************************************************************
# Sequel Ace SQL dump
# Versione 20067
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.39)
# Database: gelateria
# Tempo Di Generazione: 2024-05-24 21:28:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump della tabella confezione
# ------------------------------------------------------------

DROP TABLE IF EXISTS `confezione`;

CREATE TABLE `confezione` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_nome` varchar(20) NOT NULL,
  `c_prezzo` decimal(10,2) DEFAULT NULL,
  `c_moneta` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `confezione` WRITE;
/*!40000 ALTER TABLE `confezione` DISABLE KEYS */;

INSERT INTO `confezione` (`id`, `c_nome`, `c_prezzo`, `c_moneta`)
VALUES
	(1,'vaschetta',20.00,'€'),
	(2,'bicchiere',3.00,'€'),
	(3,'cono',2.00,'€');

/*!40000 ALTER TABLE `confezione` ENABLE KEYS */;
UNLOCK TABLES;


# Dump della tabella gusti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gusti`;

CREATE TABLE `gusti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `g_nome` varchar(40) NOT NULL,
  `g_titolo` varchar(255) NOT NULL,
  `g_desc` varchar(255) NOT NULL,
  `g_prezzo` decimal(10,2) NOT NULL,
  `g_moneta` varchar(11) NOT NULL,
  `g_name` varchar(40) NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_descr` varchar(255) NOT NULL,
  `g_price` decimal(10,2) NOT NULL,
  `g_money` varchar(11) NOT NULL,
  `g_image` varchar(200) NOT NULL,
  `g_tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

LOCK TABLES `gusti` WRITE;
/*!40000 ALTER TABLE `gusti` DISABLE KEYS */;

INSERT INTO `gusti` (`id`, `g_nome`, `g_titolo`, `g_desc`, `g_prezzo`, `g_moneta`, `g_name`, `g_title`, `g_descr`, `g_price`, `g_money`, `g_image`, `g_tipo`)
VALUES
	(1,'cioccolato','gelato al cioccolato','Latte intero, Panna fresca,  Zucchero,Cacao in polvere, Uova,Cioccolato fondente (fuso),Vaniglia (facoltativa), Scorza d\'arancia grattugiata (facoltativa).',1.00,'€','chocolate','chocolate cake','Whole milk, Fresh cream, Sugar,Cocoa powder, Eggs,Dark chocolate (melted),Vanilla (optional), Grated orange peel (optional).',1.00,'$','img/gelati/cioccolato.jpg',1),
	(2,'fragola','gelato alla fragola','Fragole fresche,Zucchero,Succo di limone,Panna fresca,Latte intero,Vaniglia',3.00,'€','strawberry','strawberry ice cream','Fresh strawberries,Sugar,Lemon juice,Fresh cream,Whole milk,Vanilla',3.00,'$','img/gelati/fragola.jpg',1),
	(3,'pistacchio','gelato al pistacchio','Pistacchi non salati e sgusciati,Latte intero, Panna fresca,Zucchero,Amido di mais,Estratto di vaniglia ',3.00,'€','pistachio','pistachio  ice cream','Unsalted and shelled pistachios,Whole milk,Fresh cream,Sugar,Cornstarch,Vanilla extract ',3.00,'$','img/gelati/pistacchio.jpg',1),
	(4,'vaniglia','gelato alla vaniglia','Latte intero,Panna fresca,Zucchero,Tuorli d\'uovo,Estratto di vaniglia',3.00,'€','vanilla','vanilla  ice cream','Whole milk,Fresh cream,Sugar,Egg yolks,Vanilla extract',3.00,'$','img/gelati/vaniglia.jpg',1),
	(5,'nocciola','gelato alla nocciola','Nocciole tostate,Latte intero,Panna fresca,Zucchero,Amido di mais,Estratto di vaniglia',2.00,'€','hazelnut','hazelnut  ice cream','Roasted hazelnuts,Whole milk,Fresh cream,Sugar,Cornstarch,Vanilla extract',2.00,'$','img/gelati/nocciola.jpg',1),
	(6,'panna','gelato alla panna','Panna fresca,Latte intero,Zucchero,Vaniglia (opzionale)',3.00,'€','cream','cream  ice cream','Fresh cream,Whole milk,Sugar,Vanilla (optional)',3.00,'$','img/gelati/panna.jpg',1),
	(7,'limone','gelato al limone','Succo di limone fresco,Scorza di limone grattugiata,Latte intero,Panna fresca,Zucchero',3.00,'€','lemon','lemon  ice cream','Fresh lemon juice,Grated lemon peel,Whole milk,Fresh cream,Sugar',3.00,'$','img/gelati/limone.jpg',1),
	(8,'stracciatella','gelato alla stracciatella','Panna fresca,Latte intero,Zucchero,Estratto di vaniglia,Cioccolato fondente',2.00,'€','stracciatella','stracciatella ice cream','Fresh cream,Whole milk,Sugar,Vanilla extract,Dark chocolate',2.00,'$','img/gelati/stracciatella.jpg',1),
	(9,'caffè','gelato al caffè','Caffè espresso forte,Panna fresca,Latte intero,Zucchero,Estratto di vaniglia',1.00,'€','coffee','coffee ice cream','Strong espresso coffee,Fresh cream,Whole milk,Sugar,Vanilla extract',1.00,'$','img/gelati/caffè.jpg',1),
	(10,'tortaalcioccolato','torta al cioccolato','Biscotti secchi al cioccolato,Burro fuso,Panna fresca,Latte intero,Cioccolato fondente,Zucchero,Uova',7.00,'€','chocolatecake','chocolate cake','Dried chocolate biscuits,Melted butter,Fresh cream,Whole milk,Dark chocolate,Sugar,Eggs',7.00,'$','img/torte/tortaalcioccolato.jpg',2),
	(11,'tortaallafragola','torta alla fragola','Biscotti secchi ,Burro fuso,Fragole,Zucchero,Panna fresca,Latte condensato',9.00,'€','strawberrycake','strawberrycake','Dry biscuits ,Melted butter,Strawberries,Sugar,Fresh cream,Condensed milk',9.00,'$','img/torte/tortaallafragola.jpg',2),
	(12,'tortaalpistacchio','torta al pistacchio','Biscotti secchi,Burro fuso,gelato al pistacchio',8.00,'€','pistachiocake','pistachio cake','Dry biscuits,melted butter,pistachio ice cream',8.00,'$','img/torte/tortaalpistacchio.jpg',2),
	(13,'tortaallavaniglia','torta alla viniglia','Biscotti secchi,Burro fuso,gelato alla vaniglia',9.00,'€','vanillacake',' vanilla cake','Dry biscuits,melted butter,vanilla ice cream',9.00,'$','img/torte/tortaallavaniglia.jpg',2),
	(14,'tortaallanocciola','torta alla nocciola','Biscotti secchi,Burro fuso,gelato alla nocciola',7.00,'€','hazelnutcake','hazelnut cake','Biscuits,melted butter,hazelnut ice cream',7.00,'$','img/torte/tortaallanocciola.jpg',2),
	(15,'tortaallapanna','torta alla panna','Biscotti secchi,Burro fuso,gelato alla panna',8.00,'€','creamcake','cream cake','Biscuits, Melted Butter, Cream Ice Cream',8.00,'$','img/torte/tortaallapanna.jpg',2),
	(16,'tortaallimone','torta al limone','Biscotti secchi,Burro fuso,gelato al limone',9.00,'€','lemoncake','lemon cake','Biscuits, melted butter, lemon ice cream',9.00,'$','img/torte/tortaallimone.jpg',2),
	(17,'tortaallastracciatella','torta alla stracciatella','Biscotti secchi,Burro fuso,gelato alla stracciatella',8.00,'€','stracciatellacake','stracciatella cake','Biscuits, Nutella Ice Cream, Melted Butter',8.00,'$','img/torte/tortaallastracciatella.jpg',2),
	(18,'tortaalcaffè','torta al caffè','Biscotti secchi,Burro fuso,gelato al caffe',7.00,'€','coffeecake','coffee cake','Biscuits,melted butter,coffee ice cream',7.00,'$','img/torte/tortaalcaffè.jpg',2),
	(19,'milkshakealcioccolato','Milkshake Al Cioccolato','Gelato al cioccolato,Latte,Sciroppo di cioccolato,Panna montata.',20.00,'€','chocolatemilkshake','chocolate Milkshake','Chocolate ice cream,Milk,Chocolate syrup,Whipped cream ',20.00,'$','img/milkshake/milkshakealcioccolato.jpg',3),
	(20,'milkshakeallafragola','Milkshake Alla Fragola','Fragole fresche,gelato alla fragola,Latte,Zucchero,Panna montata',24.00,'€','strawberrymilkshake','Strawberry Milkshake','Fresh strawberries,Strawberry ice cream,Milk,Sugar,Whipped cream',24.00,'$','img/milkshake/milkshakeallafragola.jpg',3),
	(21,'milkshakealpistacchio','Milkshake Al Pistacchio','Gelato al pistacchio,Latte,Pistacchi tritati,Zucchero,Panna montata',20.00,'€','pistachiomilkshake','Pistachio Milkshake','Pistachio ice cream,Milk,Chopped pistachios,Sugar,Whipped cream',20.00,'$','img/milkshake/milkshakealpistacchio.jpg',3),
	(22,'milkshakeallavaniglia','Milkshake Alla Vaniglia','Gelato alla vaniglia,Latte,Estratto di vaniglia,Zucchero,Panna montata ',21.00,'€','vanillamilkshake','Vanilla Milkshake','Vanilla ice cream,Milk,Vanilla extract,Sugar,Whipped cream ',21.00,'$','img/milkshake/milkshakeallavaniglia.jpg',3),
	(23,'milkshakeallanocciola','Milkshake Alla Nocciola','Gelato alla nocciola,Latte,Crema di nocciole,Nocciole tritate,Zucchero ,Panna montata ',21.00,'€','hazelnutmilkshake','Hazelnut Milkshake','Hazelnut ice cream,Milk,Hazelnut cream,Chopped hazelnuts,Sugar,Whipped cream',21.00,'$','img/milkshake/milkshakeallanocciola.jpg',3),
	(24,'milkshakeallapanna','Milkshake Alla Panna','Gelato alla crema,Panna fresca,Latte,Zucchero ,Estratto di vaniglia,Panna montata',22.00,'€','creammilkshake','Cream Milkshake','Cream ice cream,Fresh cream,Milk,Sugar,Vanilla extract,Whipped cream',22.00,'$','img/milkshake/milkshakeallapanna.jpg',3),
	(25,'milkshakeallimone','Milkshake Al Limone','Gelato al limone,Yogurt al limone,Latte,Zucchero,Scorza di limone grattugiata,Ghiaccio',23.00,'€','lemonmilkshake','Lemon Milkshake','Lemon ice cream,Lemon yogurt,Milk,Sugar,Grated lemon peel,Ice.',23.00,'$','img/milkshake/milkshakeallimone.jpg',3),
	(26,'milkshakeallastracciatella','Milkshake Alla Stracciatella','Gelato alla stracciatella,Latte,Cioccolato fondente,Zucchero,Panna montata',21.00,'€','stracciatellamilkshake','Stracciatella Milkshake','Stracciatella ice cream,Milk,Dark chocolate,Sugar,Whipped cream',21.00,'$','img/milkshake/milkshakeallastracciatella.jpg',3),
	(27,'milkshakealcaffè','Milkshake Al Caffè','Gelato al caffè,LatteCaffè espresso ,Zucchero,Panna montata.',22.00,'€','coffeemilkshake','Coffee Milkshake','Coffee ice cream,LatteCaffè espresso,Sugar,Whipped cream',22.00,'$','img/milkshake/milkshakealcaffè.jpg',3);

/*!40000 ALTER TABLE `gusti` ENABLE KEYS */;
UNLOCK TABLES;


# Dump della tabella ordini
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ordini`;

CREATE TABLE `ordini` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `o_data` date NOT NULL,
  `o_idutente` int(11) NOT NULL,
  `o_idprodotto` int(11) DEFAULT NULL,
  `o_tot` decimal(7,2) NOT NULL,
  `o_quant` int(11) NOT NULL,
  `o_descrizione` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump della tabella prodotti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prodotti`;

CREATE TABLE `prodotti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(20) NOT NULL,
  `p_tipo` int(11) NOT NULL,
  `p_conf` int(11) NOT NULL,
  `p_prezzo` decimal(6,2) NOT NULL,
  `p_peso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump della tabella prodotti_gusti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prodotti_gusti`;

CREATE TABLE `prodotti_gusti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `o_idgusto` int(11) NOT NULL,
  `o_idprodotto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump della tabella tipo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;

CREATE TABLE `tipo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `t_nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;

INSERT INTO `tipo` (`id`, `t_nome`)
VALUES
	(1,'gelato'),
	(2,'torta'),
	(3,'milkshake');

/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump della tabella utenti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `utenti`;

CREATE TABLE `utenti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `CF` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

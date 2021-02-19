CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `continent_id` int(11) NOT NULL,
  PRIMARY KEY(`country_id`)
)

INSERT INTO `countries` (`country_id`, `country`, `continent_id`) VALUES
(1, 'India', 1),
(2, 'Vietnam', 1),
(3, 'Indonesia', 1),
(4, 'Philippines', 1),
(5, 'Bhutan', 1),
(6, 'Maldives', 1),
(7, 'Hong Kong', 1),
(8, 'Australia', 2),
(9, 'New Zealand', 2),
(12, 'Papua New Guinea', 2),
(13, 'Kenya', 3),
(14, 'Rwanda', 3),
(15, 'South Africa', 3),
(16, 'United Kingdom', 4),
(17, 'France', 4),
(18, 'Switzerland', 4),
(19, 'United States', 5),
(20, 'Mexico', 5),
(21, 'Canada', 5),
(22, 'Brazil', 6),
(23, 'Bolivia', 6);


CREATE TABLE `continents` (
  `continent_id` int(11) NOT NULL AUTO_INCREMENT,
  `continent` varchar(255) NOT NULL,
   PRIMARY KEY (`continent_id`)
)


INSERT INTO `continents` (`continent_id`, `continent`) VALUES
(1, 'Asia'),
(2, 'Australia'),
(3, 'Africa'),
(4, 'Europe'),
(5, 'North America'),
(6, 'South America');

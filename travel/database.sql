/*login system */

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4

/*booking */
CREATE TABLE `book` (
  `firstname` varchar(25) NOT NULL,
  `secondname` varchar(25) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phonecode` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `guests` varchar(50) NOT NULL,
  `arrivals` varchar(50) NOT NULL,
  `leaving` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*admin*/
CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
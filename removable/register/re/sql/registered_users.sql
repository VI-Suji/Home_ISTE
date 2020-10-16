--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
     'id'   int(8)  AUTOINCREMENT() NOTNULL,
  
);


CREATE TABLE IF NOT EXISTS `registered_users` (
    'id'   int(8)  AUTOINCREMENT() NOTNULL,
    `name` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `birthay` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);
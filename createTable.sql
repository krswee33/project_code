CREATE TABLE IF NOT EXISTS `topAlbums` (
  `Position` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Artist` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Subgenre` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL,
  `Cover` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `topAlbums`
  ADD PRIMARY KEY (`Position`);
  

ALTER TABLE `topAlbums`
  MODIFY `Position` int(11) NOT NULL AUTO_INCREMENT;




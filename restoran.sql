CREATE DATABASE GIS;
USE GIS;
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `username` varchar(256) NOT NULL,
  `password` mediumtext NOT NULL,
  `nama` varchar(256) NOT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `petugas` (`id_petugas`, `id_admin`, `username`, `password`, `nama`, `no_telp`, `tgl_lahir`, `alamat`) VALUES
(1, NULL, 0, 'admin', '6fcf8c37607e46be2e425319a96d6fe5', 'Administrator', 23339, '1990-01-07', 'bandung');

ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`), ADD KEY `id_admin` (`id_admin`);

ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;

ALTER TABLE `petugas`
ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

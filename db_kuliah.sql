/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_kuliah

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-20 00:05:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `dosen`
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id_dosen` int(5) NOT NULL AUTO_INCREMENT,
  `nid` varchar(5) NOT NULL,
  `nm_dosen` varchar(30) NOT NULL,
  `alamat_dosen` varchar(40) NOT NULL,
  `no_tlp_dosen` varchar(12) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO dosen VALUES ('2', '99223', 'Budi', 'Cikokol', '114455');
INSERT INTO dosen VALUES ('3', '99234', 'Anto', 'Kutabumi', '11488');
INSERT INTO dosen VALUES ('4', '99235', 'Rudi', 'Bugel', '11488');

-- ----------------------------
-- Table structure for `mahasiswa`
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id_mhs` int(5) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nm_mhs` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO mahasiswa VALUES ('2', '1011234456', 'Tono', 'Cimone', '552233', 'Sistem Informasi');
INSERT INTO mahasiswa VALUES ('8', '1011234457', 'Tini', 'Pasar Baru', '225533', 'Teknik Informatika');
INSERT INTO mahasiswa VALUES ('9', '1011234458', 'Udin', 'Pasar Kemis', '334455', 'Teknik Informatika');

-- ----------------------------
-- Table structure for `matkul`
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul` (
  `id_matkul` int(4) NOT NULL AUTO_INCREMENT,
  `kd_matkul` varchar(5) NOT NULL,
  `nm_matkul` varchar(30) NOT NULL,
  `jml_sks` int(2) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO matkul VALUES ('1', 'P01', 'Pemrograman Berbasis Web', '4');
INSERT INTO matkul VALUES ('3', 'P02', 'XHTML', '2');
INSERT INTO matkul VALUES ('4', 'P03', 'Visual Basic', '2');

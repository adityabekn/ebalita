/*
 Navicat Premium Data Transfer

 Source Server         : DevelopmentDB
 Source Server Type    : MySQL
 Source Server Version : 50732
 Source Host           : localhost:3306
 Source Schema         : ebalita

 Target Server Type    : MySQL
 Target Server Version : 50732
 File Encoding         : 65001

 Date: 05/02/2021 08:54:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for balita
-- ----------------------------
DROP TABLE IF EXISTS `balita`;
CREATE TABLE `balita`  (
  `nik_balita` bigint(255) NOT NULL,
  `nik_orangtua` bigint(255) NULL DEFAULT NULL,
  `nama_balita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_balita` date NULL DEFAULT NULL,
  `kelamin_balita` enum('laki-laki','perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nik_balita`) USING BTREE,
  UNIQUE INDEX `nik_orangtua`(`nik_orangtua`) USING BTREE,
  CONSTRAINT `balita_ibfk_1` FOREIGN KEY (`nik_orangtua`) REFERENCES `orangtua` (`nik_orangtua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for imunisasi
-- ----------------------------
DROP TABLE IF EXISTS `imunisasi`;
CREATE TABLE `imunisasi`  (
  `nik_balita` bigint(255) NOT NULL,
  `tgl_imunisasi` date NULL DEFAULT NULL,
  `jenis_imunisasi` enum('Hepatitis B','Polio','BCG','DTP','Pneumokokus','Rotavirus','Influenza','Campak','MMR/MR','Varisela','HPV','JE','Dengue') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_imunisasi` enum('Sudah','Belum') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `nik_balita`(`nik_balita`) USING BTREE,
  CONSTRAINT `imunisasi_ibfk_1` FOREIGN KEY (`nik_balita`) REFERENCES `balita` (`nik_balita`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for orangtua
-- ----------------------------
DROP TABLE IF EXISTS `orangtua`;
CREATE TABLE `orangtua`  (
  `nik_orangtua` bigint(255) NOT NULL,
  `nama_orangtua` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_orangtua` date NULL DEFAULT NULL,
  `email_orangtua` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password_orangtua` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nik_orangtua`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pengukuran
-- ----------------------------
DROP TABLE IF EXISTS `pengukuran`;
CREATE TABLE `pengukuran`  (
  `nik_balita` bigint(255) NOT NULL,
  `tgl_pengukuran` date NULL DEFAULT NULL,
  `bb_pengukuran` double NULL DEFAULT NULL,
  `tb_pengukuran` double NULL DEFAULT NULL,
  `lk_pengukuran` double NULL DEFAULT NULL,
  `ll_pengukuran` double NULL DEFAULT NULL,
  INDEX `nik_balita`(`nik_balita`) USING BTREE,
  CONSTRAINT `pengukuran_ibfk_1` FOREIGN KEY (`nik_balita`) REFERENCES `balita` (`nik_balita`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

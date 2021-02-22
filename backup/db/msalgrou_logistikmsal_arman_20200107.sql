/*
 Navicat Premium Data Transfer

 Source Server         : production 231
 Source Server Type    : MySQL
 Source Server Version : 50728
 Source Host           : 192.168.1.231:3306
 Source Schema         : msalgrou_logistikmsal_arman

 Target Server Type    : MySQL
 Target Server Version : 50728
 File Encoding         : 65001

 Date: 07/01/2020 11:46:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for afd
-- ----------------------------
DROP TABLE IF EXISTS `afd`;
CREATE TABLE `afd`  (
  `ID` int(11) NULL DEFAULT NULL,
  `PT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` int(11) NULL DEFAULT NULL,
  `kodetxt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `AFD` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanam` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `coa_afd` double NULL DEFAULT NULL,
  `tmtbm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `coa_tmtbm` double NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of afd
-- ----------------------------
INSERT INTO `afd` VALUES (411, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '01', NULL, 202401000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (412, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '02', NULL, 202402000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (413, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '03', NULL, 202403000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (414, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '04', NULL, 202404000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (415, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '05', NULL, 202405000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (416, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '01', NULL, 700501000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (417, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '02', NULL, 700502000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (418, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '03', NULL, 700503000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (419, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '04', NULL, 700504000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (420, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 6, '06', '05', NULL, 700505000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (421, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '06', NULL, 700506000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (422, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '06', NULL, 202406000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (433, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '09', NULL, 202409000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (434, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '14', NULL, 202414000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (436, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '16', NULL, 202416000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (437, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '17', NULL, 202417000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (438, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '99', NULL, 202499000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (439, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '07', NULL, 700507000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (440, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '08', NULL, 700508000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (441, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '09', NULL, 700509000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (442, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '10', NULL, 700510000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (443, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 6, '06', '11', NULL, 700511000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (444, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '12', NULL, 700512000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (445, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '99', NULL, 700599000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (446, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '11', NULL, 202411000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (447, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '12', NULL, 202412000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (448, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '08', NULL, 202408000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (449, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '15', NULL, 202415000000000, 'TBM', 202400000000000);
INSERT INTO `afd` VALUES (450, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '', NULL, 700515201400000, 'TM', 700515000000000);
INSERT INTO `afd` VALUES (451, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '15', NULL, 700515000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (452, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '14', NULL, 700514000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (454, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '16', NULL, 700516000000000, 'TM', 700500000000000);
INSERT INTO `afd` VALUES (455, 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 6, '06', '17', NULL, 700517000000000, 'TM', 700500000000000);

-- ----------------------------
-- Table structure for approval_bkb
-- ----------------------------
DROP TABLE IF EXISTS `approval_bkb`;
CREATE TABLE `approval_bkb`  (
  `id` int(11) NOT NULL,
  `no_bkb` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_ref_bkb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty_diminta` int(11) NULL DEFAULT NULL,
  `status_ktu` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_ktu` datetime(0) NULL DEFAULT NULL,
  `ket_ktu` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status_kasie_gudang` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_kasie_gudang` datetime(0) NULL DEFAULT NULL,
  `ket_kasie_gudang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status_kasie_pembukuan` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_pembukuan` datetime(0) NULL DEFAULT NULL,
  `ket_kasie_pembukuan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of approval_bkb
-- ----------------------------
INSERT INTO `approval_bkb` VALUES (1, '6600001', 'EST-BKB/SWJ/12/2019/00001', '102505990000189', 'ALAT ALAT KOMPUTER', 10, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL);
INSERT INTO `approval_bkb` VALUES (2, '6600001', 'EST-BKB/SWJ/12/2019/00001', '102505990000050', 'KEYBOARD KOMPUTER', 0, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL);
INSERT INTO `approval_bkb` VALUES (3, '6600002', 'EST-BKB/SWJ/12/2019/00002', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 20, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL);
INSERT INTO `approval_bkb` VALUES (4, '6600003', 'EST-BKB/SWJ/12/2019/00003', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, '0', NULL, NULL, '1', '2019-12-30 09:57:18', NULL, '3', '2019-12-30 09:58:00', NULL);

-- ----------------------------
-- Table structure for approval_bpb
-- ----------------------------
DROP TABLE IF EXISTS `approval_bpb`;
CREATE TABLE `approval_bpb`  (
  `id` int(11) NOT NULL,
  `no_bpb` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `norefbpb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty_diminta` double NULL DEFAULT NULL,
  `status_asisten_afd` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_asisten_afd` datetime(0) NULL DEFAULT NULL,
  `ket_asisten_afd` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status_kepala_kebun` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `ket_kepala_kebun` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_kepala_kebun` datetime(0) NULL DEFAULT NULL,
  `status_kasie_agronomi` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_kasie_agronomi` datetime(0) NULL DEFAULT NULL,
  `ket_kasie_agronomi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status_ktu` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju',
  `tgl_ktu` datetime(0) NULL DEFAULT NULL,
  `ket_ktu` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status_gm` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=Menunggu Konfirmasi, 1=Setuju, 2=Tidak Setuju, 3=Mengetahui',
  `tgl_gm` datetime(0) NULL DEFAULT NULL,
  `ket_gm` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `flag_req_rev_qty` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '0=Default, 1=Menunggu Konfirmasi, 2=Setuju, 3=Tidak Setuju',
  `user_req_rev_qty` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_appr_req_ktu` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of approval_bpb
-- ----------------------------
INSERT INTO `approval_bpb` VALUES (1, '6600001', 'EST-BPB/SWJ/12/2019/00001', '102505990000130', 'KOMPUTER', 200, '1', '2019-12-24 14:59:25', NULL, '1', NULL, '2019-12-24 15:00:38', '3', '2019-12-24 15:01:38', NULL, '1', '2019-12-24 15:02:04', NULL, '3', '2019-12-24 15:03:01', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (2, '6600002', 'EST-BPB/SWJ/12/2019/00002', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 20, '1', '2019-12-24 14:59:18', NULL, '1', NULL, '2019-12-24 15:00:33', '3', '2019-12-24 15:01:31', NULL, '1', '2019-12-24 15:01:58', NULL, '3', '2019-12-24 15:02:55', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (3, '6600003', 'EST-BPB/SWJ/12/2019/00003', '102505010100015', 'PUPUK MOP', 20, '1', '2019-12-24 14:59:13', NULL, '1', NULL, '2019-12-24 15:00:27', '3', '2019-12-24 15:01:23', NULL, '1', '2019-12-24 15:01:50', NULL, '3', '2019-12-24 15:02:45', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (4, '6600004', 'EST-BPB/SWJ/12/2019/00004', '102505990000189', 'ALAT ALAT KOMPUTER', 10, '1', '2019-12-24 14:59:00', NULL, '1', NULL, '2019-12-24 15:00:08', '3', '2019-12-24 15:01:14', NULL, '1', '2019-12-24 15:01:41', NULL, '3', '2019-12-24 15:02:34', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (5, '6600003', 'EST-BPB/SWJ/12/2019/00003', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 10, '1', '2019-12-24 14:59:10', NULL, '1', NULL, '2019-12-24 15:00:25', '3', '2019-12-24 15:01:26', NULL, '1', '2019-12-24 15:01:47', NULL, '3', '2019-12-24 15:02:43', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (6, '6600004', 'EST-BPB/SWJ/12/2019/00004', '102505990000050', 'KEYBOARD KOMPUTER', 0, '1', '2019-12-24 14:58:58', NULL, '1', NULL, '2019-12-24 15:00:05', '3', '2019-12-24 15:01:11', NULL, '1', '2019-12-24 15:01:38', NULL, '3', '2019-12-24 15:02:30', NULL, '0', NULL, NULL);
INSERT INTO `approval_bpb` VALUES (7, '6600005', 'EST-BPB/SWJ/12/2019/00005', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, '1', '2019-12-27 13:28:51', NULL, '1', NULL, '2019-12-27 13:29:15', '3', '2019-12-27 13:29:36', NULL, '1', '2019-12-27 13:30:00', NULL, '3', '2019-12-27 13:30:17', NULL, '0', NULL, NULL);

-- ----------------------------
-- Table structure for bpb
-- ----------------------------
DROP TABLE IF EXISTS `bpb`;
CREATE TABLE `bpb`  (
  `id` int(11) NULL DEFAULT NULL,
  `nobpb` int(10) NULL DEFAULT NULL,
  `norefbpb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobkb_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglbpb` datetime(6) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `approval` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_bkb` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpb
-- ----------------------------
INSERT INTO `bpb` VALUES (1, 6600001, 'EST-BPB/SWJ/12/2019/00001', '', '', '2019-12-24 14:41:59.000000', '2019-12-24', '14:41:59', '201801', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'untuk afd 99', 'MIS', 0, NULL, 'User Gudang', 0, 0, '1', '0');
INSERT INTO `bpb` VALUES (2, 6600002, 'EST-BPB/SWJ/12/2019/00002', '', '', '2019-12-24 14:39:19.000000', '2019-12-24', '14:39:19', '201801', '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'keperluan kerja', 'TANAMAN', 0, NULL, 'User Gudang', 0, 0, '1', '1');
INSERT INTO `bpb` VALUES (3, 6600003, 'EST-BPB/SWJ/12/2019/00003', '', '', '2019-12-24 14:51:03.000000', '2019-12-24', '14:51:03', '201801', '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'keperluan kerja', 'TANAMAN', 0, NULL, 'User Gudang', 0, 0, '1', '0');
INSERT INTO `bpb` VALUES (4, 6600004, 'EST-BPB/SWJ/12/2019/00004', '', '', '2019-12-24 14:51:38.000000', '2019-12-24', '14:51:38', '201801', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'tes 2019', 'MIS', 0, NULL, 'User Gudang', 0, 0, '1', '1');
INSERT INTO `bpb` VALUES (5, 6600005, 'EST-BPB/SWJ/12/2019/00005', '', '', '2019-12-27 13:28:12.000000', '2019-12-27', '13:28:12', '202001', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'unutuk perbaikan', 'MIS', 0, NULL, 'User Gudang', 0, 0, '1', '1');

-- ----------------------------
-- Table structure for bpb dari bkb
-- ----------------------------
DROP TABLE IF EXISTS `bpb dari bkb`;
CREATE TABLE `bpb dari bkb`  (
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` smallint(6) NULL DEFAULT NULL,
  `no_mutasi` double NULL DEFAULT NULL,
  `tujuan_mutasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUB` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USER1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpb dari bkb
-- ----------------------------
INSERT INTO `bpb dari bkb` VALUES (1, '2019-07-08 00:00:00', 1100001, '1100001', 'PST-BKB/BWJ/07/2019/00001', 'iioijsad', NULL, NULL, NULL, NULL, '2019-07-08 17:25:16', 20190708, 2019, '2019-07-09 00:00:00', NULL, 201907, 201907, '03', 'MSAL HO', NULL, 'laiodas', 'asdasd iaweiowqi', 'TANAMAN', 1, 'salah input', 'Staff Purchasing', NULL, NULL, 0, 0);
INSERT INTO `bpb dari bkb` VALUES (2, '2019-07-09 00:00:00', 1100002, '1100002', 'PST-BKB/BWJ/07/2019/00002', 'asd', NULL, NULL, NULL, NULL, '2019-07-09 17:22:58', 20190709, 2019, '2019-07-09 00:00:00', NULL, 201907, 201907, '03', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', 'ad', 'asd', 'TANAMAN', 0, NULL, 'Staff Purchasing', NULL, NULL, 0, 0);
INSERT INTO `bpb dari bkb` VALUES (3, '1970-01-01 00:00:00', 1100003, '1100003', 'PST-BKB/BWJ/07/2019/00003', '1100003', NULL, NULL, NULL, NULL, '2019-07-11 14:09:47', 19700101, 1970, '2019-07-11 00:00:00', NULL, 201907, 201907, '', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', NULL, '', NULL, 0, NULL, 'Staff Purchasing', NULL, NULL, 0, 0);

-- ----------------------------
-- Table structure for bpb_booking
-- ----------------------------
DROP TABLE IF EXISTS `bpb_booking`;
CREATE TABLE `bpb_booking`  (
  `id` int(11) NULL DEFAULT NULL,
  `nobpb` int(10) NULL DEFAULT NULL,
  `norefbpb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobkb_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglbpb` datetime(6) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `approval` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_bkb` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpb_booking
-- ----------------------------
INSERT INTO `bpb_booking` VALUES (1, 6600001, 'EST-BPB/SWJ/12/2019/00001', '', '', '2019-12-24 14:41:59.000000', '2019-12-24', '14:41:59', '201801', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'untuk afd 99', 'MIS', 0, NULL, 'User Gudang', 0, 0, '0', '0');
INSERT INTO `bpb_booking` VALUES (2, 6600002, 'EST-BPB/SWJ/12/2019/00002', '', '', '2019-12-24 14:39:19.000000', '2019-12-24', '14:39:19', '201801', '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'keperluan kerja', 'TANAMAN', 0, NULL, 'User Gudang', 0, 0, '0', '0');
INSERT INTO `bpb_booking` VALUES (3, 6600003, 'EST-BPB/SWJ/12/2019/00003', '', '', '2019-12-24 14:51:03.000000', '2019-12-24', '14:51:03', '201801', '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'keperluan kerja', 'TANAMAN', 0, NULL, 'User Gudang', 0, 0, '0', '0');
INSERT INTO `bpb_booking` VALUES (4, 6600004, 'EST-BPB/SWJ/12/2019/00004', '', '', '2019-12-24 14:51:38.000000', '2019-12-24', '14:51:38', '201801', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'tes 2019', 'MIS', 0, NULL, 'User Gudang', 0, 0, '0', '0');
INSERT INTO `bpb_booking` VALUES (5, 6600005, 'EST-BPB/SWJ/12/2019/00005', '', '', '2019-12-27 13:28:12.000000', '2019-12-27', '13:28:12', '202001', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'unutuk perbaikan', 'MIS', 0, NULL, 'User Gudang', 0, 0, '0', '0');

-- ----------------------------
-- Table structure for bpb_copy1
-- ----------------------------
DROP TABLE IF EXISTS `bpb_copy1`;
CREATE TABLE `bpb_copy1`  (
  `id` int(11) NULL DEFAULT NULL,
  `nobpb` int(10) NULL DEFAULT NULL,
  `nobkb_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo_ro` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglbpb` datetime(6) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` int(6) NULL DEFAULT NULL,
  `alokasi` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpb_copy1
-- ----------------------------
INSERT INTO `bpb_copy1` VALUES (1, 190700001, '', '', '2019-07-17 13:10:08.000000', '2019-07-17', '13:10:08', 7, '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'tes', 0, NULL, 'User SITE', 0, 0);
INSERT INTO `bpb_copy1` VALUES (2, 190700002, '', '', '2019-07-17 13:36:51.000000', '2019-07-17', '13:36:51', 7, '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'untuk keperluan apa', 0, NULL, 'User SITE', 0, 0);

-- ----------------------------
-- Table structure for bpbitem
-- ----------------------------
DROP TABLE IF EXISTS `bpbitem`;
CREATE TABLE `bpbitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `norefbpb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty_disetujui` double NULL DEFAULT NULL,
  `tglbpb` datetime(0) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `norefbkb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpbitem
-- ----------------------------
INSERT INTO `bpbitem` VALUES (1, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600001, 'EST-BPB/SWJ/12/2019/00001', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 200, 200, '2019-12-24 14:41:59', '2019-12-24', '14:41:59', '201801', '-', '-', '-', 0, '-', NULL, '203510010000000', 'PERALATAN DAN PERABOT - KANTOR', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem` VALUES (2, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', '03', '06', 6600002, 'EST-BPB/SWJ/12/2019/00002', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 20, '2019-12-24 14:39:19', '2019-12-24', '14:39:19', '201801', '-', '01', 'C34', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, 'EST-BKB/SWJ/12/2019/00002');
INSERT INTO `bpbitem` VALUES (3, '102505010100015', 'PUPUK MOP', 'KG', 'PUPUK', '03', '06', 6600003, 'EST-BPB/SWJ/12/2019/00003', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 20, '2019-12-24 14:51:03', '2019-12-24', '14:51:03', '201801', '-', '01', 'C36', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem` VALUES (4, '102505990000189', 'ALAT ALAT KOMPUTER', 'UNIT', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'EST-BPB/SWJ/12/2019/00004', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 10, 10, '2019-12-24 14:51:38', '2019-12-24', '14:51:38', '201801', '-', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, 'EST-BKB/SWJ/12/2019/00001');
INSERT INTO `bpbitem` VALUES (5, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', '03', '06', 6600003, 'EST-BPB/SWJ/12/2019/00003', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 10, 10, '2019-12-24 14:51:39', '2019-12-24', '14:51:39', '201801', '-', '01', 'C37', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem` VALUES (6, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'EST-BPB/SWJ/12/2019/00004', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, 0, '2019-12-24 14:56:29', '2019-12-24', '14:56:29', '201801', '-', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, 'EST-BKB/SWJ/12/2019/00001');
INSERT INTO `bpbitem` VALUES (7, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', '06', '06', 6600005, 'EST-BPB/SWJ/12/2019/00005', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 20, '2019-12-27 13:28:12', '2019-12-27', '13:28:12', '202001', 'urgent', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, 'EST-BKB/SWJ/12/2019/00003');

-- ----------------------------
-- Table structure for bpbitem dari bkb
-- ----------------------------
DROP TABLE IF EXISTS `bpbitem dari bkb`;
CREATE TABLE `bpbitem dari bkb`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty2` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpbitem dari bkb
-- ----------------------------
INSERT INTO `bpbitem dari bkb` VALUES (1, 102505530000024, '102505530000024', '59T HELICAL GEAR-TL', 'PCS', NULL, '03', NULL, 0, 'MSAL HO', '01', NULL, 1, 1, '2019-07-08 00:00:00', 1100001, '1100001', 'PST-BKB/BWJ/07/2019/00001', '2019-07-08 17:25:16', 20190708, 2019, '0000-00-00 00:00:00', 201907, 0, 'oke', 202401201102100, '202401201102100', NULL, 102505130000434, '102505130000434', ' BELT V 4632728', 1, 'salah input', 'Staff Purchasing', 0, 0);
INSERT INTO `bpbitem dari bkb` VALUES (2, 102505950000183, '102505950000183', 'ABBOCATH NO 24', 'PCS', NULL, '03', '01', 0, 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', NULL, 1, 1, '2019-07-08 00:00:00', 1100001, '1100001', 'PST-BKB/BWJ/07/2019/00001', '2019-07-09 15:38:16', 20190708, 2019, '0000-00-00 00:00:00', 201907, 0, '-', 202401201102100, '202401201102100', NULL, 102505130000434, '102505130000434', ' BELT V 4632728', 1, 'salah input', 'Staff Purchasing', 0, 0);
INSERT INTO `bpbitem dari bkb` VALUES (3, 102505950000183, '102505950000183', 'ABBOCATH NO 24', 'PCS', NULL, '03', '01', 0, 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', NULL, 1, 1, '2019-07-09 00:00:00', 1100002, '1100002', 'PST-BKB/BWJ/07/2019/00002', '2019-07-09 17:22:58', 20190709, 2019, '0000-00-00 00:00:00', 201907, 0, 'ket 1', 202401201102100, '202401201102100', NULL, 102505820000133, '102505820000133', ' JRA 1/14 RECEIVER ADAPTER', 0, NULL, 'Staff Purchasing', 0, 0);
INSERT INTO `bpbitem dari bkb` VALUES (4, 102505530000024, '102505530000024', '59T HELICAL GEAR-TL', 'PCS', NULL, '03', '01', 0, 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', NULL, 1, 1, '2019-07-09 00:00:00', 1100002, '1100002', 'PST-BKB/BWJ/07/2019/00002', '2019-07-09 17:23:39', 20190709, 2019, '0000-00-00 00:00:00', 201907, 0, 'ket 2', 202401201105100, '202401201105100', NULL, 102505820000133, '102505820000133', ' JRA 1/14 RECEIVER ADAPTER', 0, NULL, 'Staff Purchasing', 0, 0);
INSERT INTO `bpbitem dari bkb` VALUES (5, 102505530000023, '102505530000023', '39T HELICAL GEAR -TR', 'PCS', NULL, '', '01', NULL, 'PT.MULIA SAWIT AGRO LESTARI (HO)', NULL, NULL, 1, NULL, '1970-01-01 00:00:00', 1100003, '1100003', 'PST-BKB/BWJ/07/2019/00003', '2019-07-11 14:09:47', 19700101, 1970, '0000-00-00 00:00:00', 201907, 0, 'ket 1', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Staff Purchasing', 0, 0);

-- ----------------------------
-- Table structure for bpbitem_booking
-- ----------------------------
DROP TABLE IF EXISTS `bpbitem_booking`;
CREATE TABLE `bpbitem_booking`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `norefbpb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty_disetujui` double NULL DEFAULT NULL,
  `tglbpb` datetime(0) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `norefbkb` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bpbitem_booking
-- ----------------------------
INSERT INTO `bpbitem_booking` VALUES (1, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600001, 'EST-BPB/SWJ/12/2019/00001', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 200, 0, '2019-12-24 14:41:59', '2019-12-24', '14:41:59', '201801', '-', '-', '-', 0, '-', NULL, '203510010000000', 'PERALATAN DAN PERABOT - KANTOR', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (2, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', '03', '06', 6600002, 'EST-BPB/SWJ/12/2019/00002', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 0, '2019-12-24 14:39:19', '2019-12-24', '14:39:19', '201801', '-', '01', 'C34', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (3, '102505010100015', 'PUPUK MOP', 'KG', 'PUPUK', '03', '06', 6600003, 'EST-BPB/SWJ/12/2019/00003', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 0, '2019-12-24 14:51:03', '2019-12-24', '14:51:03', '201801', '-', '01', 'C36', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (4, '102505990000189', 'ALAT ALAT KOMPUTER', 'UNIT', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'EST-BPB/SWJ/12/2019/00004', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 10, 0, '2019-12-24 14:51:38', '2019-12-24', '14:51:38', '201801', '-', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (5, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', '03', '06', 6600003, 'EST-BPB/SWJ/12/2019/00003', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 10, 0, '2019-12-24 14:51:39', '2019-12-24', '14:51:39', '201801', '-', '01', 'C37', 0, '700501200805100', NULL, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (6, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'EST-BPB/SWJ/12/2019/00004', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, 0, '2019-12-24 14:56:29', '2019-12-24', '14:56:29', '201801', '-', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, NULL);
INSERT INTO `bpbitem_booking` VALUES (7, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', '06', '06', 6600005, 'EST-BPB/SWJ/12/2019/00005', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 20, 0, '2019-12-27 13:28:12', '2019-12-27', '13:28:12', '202001', 'urgent', '-', '-', 0, '-', NULL, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0, NULL);

-- ----------------------------
-- Table structure for bpbitem_copy1
-- ----------------------------
DROP TABLE IF EXISTS `bpbitem_copy1`;
CREATE TABLE `bpbitem_copy1`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tglbpb` datetime(0) NULL DEFAULT NULL,
  `tglinput` date NULL DEFAULT NULL,
  `jaminput` time(0) NULL DEFAULT NULL,
  `periode` int(6) NULL DEFAULT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for dept
-- ----------------------------
DROP TABLE IF EXISTS `dept`;
CREATE TABLE `dept`  (
  `id` int(11) NULL DEFAULT NULL,
  `kode` double NULL DEFAULT NULL,
  `nama` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `singkat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dept
-- ----------------------------
INSERT INTO `dept` VALUES (12, 1, 'TANAMAN', 'TNM');
INSERT INTO `dept` VALUES (13, 3, 'PABRIK', 'PKS');
INSERT INTO `dept` VALUES (14, 4, 'FINANCE & ACCOUNTING', 'FAC');
INSERT INTO `dept` VALUES (15, 5, 'HUMAS DAN KEMITRAAN', 'HMS');
INSERT INTO `dept` VALUES (16, 6, 'PURCHASING', 'PRC');
INSERT INTO `dept` VALUES (17, 7, 'HRD & UMUM', 'HRD');
INSERT INTO `dept` VALUES (18, 8, 'TEKNIK', 'TNK');
INSERT INTO `dept` VALUES (20, 10, 'GIS', 'GIS');
INSERT INTO `dept` VALUES (21, 11, 'MIS', 'MIS');
INSERT INTO `dept` VALUES (22, 12, 'SUSTAINABILITY', 'HSE');
INSERT INTO `dept` VALUES (23, 13, 'BQC', 'BQC');
INSERT INTO `dept` VALUES (24, 2, 'TANAMAN UMUM', 'TNM');
INSERT INTO `dept` VALUES (24, 14, 'LEGAL', 'LGL');
INSERT INTO `dept` VALUES (25, 15, 'AUDIT', 'AUD');

-- ----------------------------
-- Table structure for item_po
-- ----------------------------
DROP TABLE IF EXISTS `item_po`;
CREATE TABLE `item_po`  (
  `id` int(11) NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refppo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `jumharga` double NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Untuk kode departemen di app logistik web',
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Untuk nama departemen di app logistik web',
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `merek` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hargasblm` double NULL DEFAULT NULL,
  `disc` double NULL DEFAULT NULL,
  `kurs` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `cek_pp` smallint(6) NULL DEFAULT NULL,
  `KODE_BPO` double NULL DEFAULT NULL,
  `JUMLAHBPO` double NULL DEFAULT NULL,
  `kode_bebanbpo` double NULL DEFAULT NULL,
  `nama_bebanbpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konversi` double NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_po
-- ----------------------------
INSERT INTO `item_po` VALUES (1, 3100001, '3100001', 6600013, '6600013', 'EST-SPP/SWJ/12/19/6600013', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 31, 300000, 8835000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:51:56', 201912, 2019, 'cus', '2019-12-24 13:51:56', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100001', 'HO', 300000, 5, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 15000, NULL, 'transport', 0);
INSERT INTO `item_po` VALUES (2, 3100001, '3100001', 6600009, '6600009', 'EST-SPP/SWJ/12/19/6600009', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100026, '102505010100026', 'PUPUK ZINCOBOS', 'KG', 1000, 500000, 450000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:45', 201912, 2019, 'zin', '2019-12-24 13:52:45', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100001', 'HO', 500000, 10, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (3, 3100002, '3100002', 6600001, '6600001', 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000092, '102505990000092', 'KOMPAS', 'PCS', 100, 500000, 50000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:51', 201912, 2019, 'D', '2019-12-24 13:52:51', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 500000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0);
INSERT INTO `item_po` VALUES (4, 3100002, '3100002', 6600002, '6600002', 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000137, '102505990000137', 'LCD MONITOR', 'UNIT', 2, 8000000, 16000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:52', 201912, 2019, 'C', '2019-12-24 13:52:52', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 8000000, 0, 'Rp', 0, 'PABRIK', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0);
INSERT INTO `item_po` VALUES (5, 3100002, '3100002', 6600001, '6600001', 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000113, '102505990000113', 'GPS GAMIN 78S', 'UNIT', 50, 70000, 3500000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:53', 201912, 2019, 'B', '2019-12-24 13:52:53', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 70000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 20000, NULL, '-', 0);
INSERT INTO `item_po` VALUES (6, 3100002, '3100002', 6600002, '6600002', 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 2, 500000, 1000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:55', 201912, 2019, 'A', '2019-12-24 13:52:55', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 500000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0);
INSERT INTO `item_po` VALUES (7, 3100003, '3100003', 6600005, '6600005', 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 100, 20000, 2000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:54:49', 201912, 2019, 'kecil', '2019-12-24 13:54:49', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100003', 'HO', 20000, 0, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (8, 3100003, '3100003', 6600005, '6600005', 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 500, 15000, 7500000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:54:51', 201912, 2019, 'sedang', '2019-12-24 13:54:51', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100003', 'HO', 15000, 0, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (9, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 15, 50000, 750000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:03', 201912, 2019, 'bayfolan', '2019-12-24 13:57:03', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 50000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (10, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 20, 45000, 900000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:04', 201912, 2019, 'borate', '2019-12-24 13:57:04', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 45000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (11, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 100, 30000, 3000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:06', 201912, 2019, 'apron', '2019-12-24 13:57:06', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 30000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (12, 3300001, '3300001', 6600022, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 20, 1000000, 20000000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 13:22:34', 201912, 2019, 'asus', '2019-12-27 13:22:34', 'User Gudang', 'segera', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 'SITE', 1000000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, 'ongkir', 0);
INSERT INTO `item_po` VALUES (13, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 50, 10000, 500000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:18:47', 201912, 2019, 'asus', '2019-12-27 16:18:47', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 10000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 50000, NULL, '-', 0);
INSERT INTO `item_po` VALUES (14, 3300003, '3300003', 6600017, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 00:00:00', 20191224, '2019-12-27 00:00:00', 20191227, 102505910000159, '102505910000159', 'MAP TULANG PLASTIK', 'PCS', 3, 75000, 225000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:45:34', 201912, 2019, 'as', '2019-12-27 16:45:34', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 'SITE', 75000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);
INSERT INTO `item_po` VALUES (15, 3300003, '3300003', 6600017, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 00:00:00', 20191224, '2019-12-27 00:00:00', 20191227, 102505930000043, '102505930000043', 'STOPMAP BATIK', 'PCS', 2, 637500, 1275000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:50:25', 201912, 2019, 'ae', '2019-12-27 16:50:25', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 'SITE', 637500, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0);

-- ----------------------------
-- Table structure for item_po_history
-- ----------------------------
DROP TABLE IF EXISTS `item_po_history`;
CREATE TABLE `item_po_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refppo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `jumharga` double NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `merek` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hargasblm` double NULL DEFAULT NULL,
  `disc` double NULL DEFAULT NULL,
  `kurs` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `cek_pp` smallint(6) NULL DEFAULT NULL,
  `KODE_BPO` double NULL DEFAULT NULL,
  `JUMLAHBPO` double NULL DEFAULT NULL,
  `kode_bebanbpo` double NULL DEFAULT NULL,
  `nama_bebanbpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konversi` double NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_po_history
-- ----------------------------
INSERT INTO `item_po_history` VALUES (1, 1, 3100001, '3100001', 6600013, '6600013', 'EST-SPP/SWJ/12/19/6600013', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 31, 300000, 8835000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:51:56', 201912, 2019, 'cus', '2019-12-24 13:51:56', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100001', 'HO', 300000, 5, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 15000, NULL, 'transport', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:51:56', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (2, 2, 3100001, '3100001', 6600009, '6600009', 'EST-SPP/SWJ/12/19/6600009', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100026, '102505010100026', 'PUPUK ZINCOBOS', 'KG', 1000, 500000, 450000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:45', 201912, 2019, 'zin', '2019-12-24 13:52:45', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100001', 'HO', 500000, 10, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:45', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (3, 3, 3100002, '3100002', 6600001, '6600001', 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000092, '102505990000092', 'KOMPAS', 'PCS', 100, 500000, 50000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:51', 201912, 2019, 'D', '2019-12-24 13:52:51', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 500000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:51', 'Staff Purchasing', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_po_history` VALUES (4, 4, 3100002, '3100002', 6600002, '6600002', 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000137, '102505990000137', 'LCD MONITOR', 'UNIT', 2, 8000000, 16000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:52', 201912, 2019, 'C', '2019-12-24 13:52:52', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 8000000, 0, 'Rp', 0, 'PABRIK', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:52', 'Staff Purchasing', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_po_history` VALUES (5, 5, 3100002, '3100002', 6600001, '6600001', 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000113, '102505990000113', 'GPS GAMIN 78S', 'UNIT', 50, 70000, 3500000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:53', 201912, 2019, 'B', '2019-12-24 13:52:53', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 70000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 20000, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:53', 'Staff Purchasing', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_po_history` VALUES (6, 6, 3100002, '3100002', 6600002, '6600002', 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 2, 500000, 1000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:52:55', 201912, 2019, 'A', '2019-12-24 13:52:55', 'Staff Purchasing', 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini yaitu Nvidia versi 1060 atau 1070 dan Radeon RX570 atau RX580, karena menawarkan berbagai kelengkapan fitur efisiensi daya, kinerja kartu grafis yang optimal, dan paling efisien.', 'EST/BWJ/JKT/12/19/3100002', 'HO', 500000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:55', 'Staff Purchasing', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_po_history` VALUES (7, 7, 3100003, '3100003', 6600005, '6600005', 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 100, 20000, 2000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:54:49', 201912, 2019, 'kecil', '2019-12-24 13:54:49', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100003', 'HO', 20000, 0, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:54:49', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (8, 8, 3100003, '3100003', 6600005, '6600005', 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 500, 15000, 7500000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:54:51', 201912, 2019, 'sedang', '2019-12-24 13:54:51', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100003', 'HO', 15000, 0, 'Rp', 0, 'BIBITAN', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:54:51', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (9, 9, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 15, 50000, 750000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:03', 201912, 2019, 'bayfolan', '2019-12-24 13:57:03', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 50000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:57:03', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (10, 10, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 20, 45000, 900000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:04', 201912, 2019, 'borate', '2019-12-24 13:57:04', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 45000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:57:04', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (11, 11, 3100004, '3100004', 6600003, '6600003', 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 00:00:00', 20191224, '2019-12-24 00:00:00', 20191224, 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 100, 30000, 3000000, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:57:06', 201912, 2019, 'apron', '2019-12-24 13:57:06', 'Staff Purchasing', '-', 'EST/BWJ/JKT/12/19/3100004', 'HO', 30000, 0, 'Rp', 0, 'RAWAT', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:57:06', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_po_history` VALUES (12, 12, 3300001, '3300001', 6600022, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 20, 100000, 2000000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 13:22:22', 201912, 2019, 'asus', '2019-12-27 13:22:22', 'User Gudang', 'segera', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 'SITE', 100000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, 'ongkir', 0, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 13:22:22', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (13, 12, 3300001, '3300001', 6600022, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 20, 100000, 2000000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 13:22:22', 201912, 2019, 'asus', '2019-12-27 13:22:22', 'User Gudang', 'segera', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 'SITE', 100000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 100000, NULL, 'ongkir', 0, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300001', '2019-12-27 13:22:34', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (14, 13, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 50, 10000, 500000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:18:47', 201912, 2019, 'asus', '2019-12-27 16:18:47', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 10000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 50000, NULL, '-', 0, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:18:48', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (15, 14, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, 21000, 1050000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:21:20', 201912, 2019, '-', '2019-12-27 16:21:20', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 21000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:21:20', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (16, 14, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, 21000, 1050000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:21:20', 201912, 2019, '-', '2019-12-27 16:21:20', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 21000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300002', '2019-12-27 16:22:19', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (17, 14, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, 21000, 1050000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:22:20', 201912, 2019, '-', '2019-12-27 16:22:20', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 21000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 20000, NULL, '-', 0, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300002', '2019-12-27 16:22:55', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (18, 14, 3300002, '3300002', 6600023, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, 50000, 2500000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:22:55', 201912, 2019, '-', '2019-12-27 16:22:55', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 'SITE', 50000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 20000, NULL, '-', 0, 'DATA SEBELUM DIHAPUS', 'User Gudang menghapus barang 102505990000050|KEYBOARD KOMPUTER pada SPP EST/SWJ/PO-Lokal/JKT/12/19/3300002', '2019-12-27 16:23:13', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (19, 14, 3300003, '3300003', 6600017, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 00:00:00', 20191224, '2019-12-27 00:00:00', 20191227, 102505910000159, '102505910000159', 'MAP TULANG PLASTIK', 'PCS', 3, 75000, 225000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:45:11', 201912, 2019, 'as', '2019-12-27 16:45:11', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 'SITE', 75000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:45:11', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (20, 14, 3300003, '3300003', 6600017, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 00:00:00', 20191224, '2019-12-27 00:00:00', 20191227, 102505910000159, '102505910000159', 'MAP TULANG PLASTIK', 'PCS', 3, 75000, 225000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:45:11', 201912, 2019, 'as', '2019-12-27 16:45:11', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 'SITE', 75000, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300003', '2019-12-27 16:45:34', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_po_history` VALUES (21, 15, 3300003, '3300003', 6600017, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 00:00:00', 20191224, '2019-12-27 00:00:00', 20191227, 102505930000043, '102505930000043', 'STOPMAP BATIK', 'PCS', 2, 637500, 1275000, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:50:25', 201912, 2019, 'ae', '2019-12-27 16:50:25', 'User Gudang', '-', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 'SITE', 637500, 0, 'Rp', 0, 'KANTOR', 0, NULL, 0, 0, 0, 0, NULL, '-', 0, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:50:25', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for item_ppo
-- ----------------------------
DROP TABLE IF EXISTS `item_ppo`;
CREATE TABLE `item_ppo`  (
  `id` int(11) NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `kodedept` double NULL DEFAULT NULL,
  `namadept` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` double NULL DEFAULT NULL,
  `noreftxt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `QTY2` double NULL DEFAULT NULL,
  `STOK` double NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `jumharga` double NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2` smallint(6) NULL DEFAULT NULL,
  `TGL_APPROVE` datetime(0) NULL DEFAULT NULL,
  `ada_penawar` bit(1) NULL DEFAULT NULL,
  `LOKASI` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `po` smallint(6) NULL DEFAULT NULL,
  `saldo_po` double NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_ppo
-- ----------------------------
INSERT INTO `item_ppo` VALUES (1, 6600001, '6600001', '2019-12-24 13:06:44', 20191224, 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', 102505990000092, '102505990000092', 'KOMPAS', 'PCS', 100, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:06:44', 201912, 2019, 'SUUNTO', '2019-12-24 13:06:44', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (2, 6600001, '6600001', '2019-12-24 13:07:10', 20191224, 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', 102505990000113, '102505990000113', 'GPS GAMIN 78S', 'UNIT', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:07:10', 201912, 2019, 'ASUS', '2019-12-24 13:07:10', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (3, 6600002, '6600002', '2019-12-24 13:16:31', 20191224, 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', 102505990000137, '102505990000137', 'LCD MONITOR', 'UNIT', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:16:31', 201912, 2019, 'LG', '2019-12-24 13:16:31', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (4, 6600002, '6600002', '2019-12-24 13:16:56', 20191224, 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:16:56', 201912, 2019, 'ASUS', '2019-12-24 13:16:56', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (5, 6600003, '6600003', '2019-12-24 13:17:53', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:53', 201912, 2019, 'apron', '2019-12-24 13:17:53', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (6, 6600003, '6600003', '2019-12-24 13:17:54', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:54', 201912, 2019, 'bayfolan', '2019-12-24 13:17:54', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (7, 6600003, '6600003', '2019-12-24 13:17:55', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 50000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:55', 201912, 2019, 'barote', '2019-12-24 13:17:55', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, 'KURANG');
INSERT INTO `item_ppo` VALUES (8, 6600004, '6600004', '2019-12-24 13:18:06', 20191224, 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 2000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:18:06', 201912, 2019, 'DOLOMITE', '2019-12-24 13:18:06', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, 'KURANG');
INSERT INTO `item_ppo` VALUES (9, 6600004, '6600004', '2019-12-24 13:18:46', 20191224, 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 500, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:18:46', 201912, 2019, 'BORATE', '2019-12-24 13:18:46', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (10, 6600005, '6600005', '2019-12-24 13:19:27', 20191224, 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:19:27', 201912, 2019, 'mangkok kecil', '2019-12-24 13:19:27', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (11, 6600005, '6600005', '2019-12-24 13:19:29', 20191224, 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 10000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:19:29', 201912, 2019, 'sedang', '2019-12-24 13:19:29', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, 'REVISI');
INSERT INTO `item_ppo` VALUES (12, 6600006, '6600006', '2019-12-24 13:20:02', 20191224, 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', 102505850000255, '102505850000255', 'DODOS 8\"', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:20:02', 201912, 2019, 'DODOS', '2019-12-24 13:20:02', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (13, 6600006, '6600006', '2019-12-24 13:20:26', 20191224, 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', 102505760000157, '102505760000157', 'TOJOK', 'PCS', 22, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:20:26', 201912, 2019, 'LOGITECH', '2019-12-24 13:20:26', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (14, 6600007, '6600007', '2019-12-24 13:21:04', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 150, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:04', 201912, 2019, 'dolomite', '2019-12-24 13:21:04', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (15, 6600007, '6600007', '2019-12-24 13:21:06', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 200, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:06', 201912, 2019, 'hi kay', '2019-12-24 13:21:06', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (16, 6600007, '6600007', '2019-12-24 13:21:07', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100003, '102505010100003', 'PUPUK HUMEGA CRUMLE', 'KG', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:07', 201912, 2019, 'humega', '2019-12-24 13:21:07', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (17, 6600008, '6600008', '2019-12-24 13:21:53', 20191224, 3, 'PABRIK', 6600008, 'EST-SPP/SWJ/12/19/6600008', 102505530000023, '102505530000023', '39T HELICAL GEAR -TR', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:53', 201912, 2019, 'gear', '2019-12-24 13:21:53', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (18, 6600009, '6600009', '2019-12-24 13:22:36', 20191224, 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', 102505010100025, '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 'KG', 2000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:36', 201912, 2019, '', '2019-12-24 13:22:36', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (19, 6600010, '6600010', '2019-12-24 13:22:50', 20191224, 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', 102505950000183, '102505950000183', 'ABBOCATH NO 24', 'PCS', 25, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:50', 201912, 2019, 'no 24', '2019-12-24 13:22:50', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (20, 6600010, '6600010', '2019-12-24 13:22:51', 20191224, 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', 102505950000045, '102505950000045', 'ABBOCATH NO.22', 'PCS', 25, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:51', 201912, 2019, 'no 22', '2019-12-24 13:22:51', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (21, 6600009, '6600009', '2019-12-24 13:22:53', 20191224, 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', 102505010100026, '102505010100026', 'PUPUK ZINCOBOS', 'KG', 1000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:53', 201912, 2019, '', '2019-12-24 13:22:53', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (22, 6600011, '6600011', '2019-12-24 13:23:30', 20191224, 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', 102505910000012, '102505910000012', 'KERTAS A4', 'RIM', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:23:30', 201912, 2019, 'SINAR AKHIRAT', '2019-12-24 13:23:30', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (23, 6600012, '6600012', '2019-12-24 13:24:21', 20191224, 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:21', 201912, 2019, 'msi', '2019-12-24 13:24:21', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (24, 6600012, '6600012', '2019-12-24 13:24:23', 20191224, 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', 102505990000072, '102505990000072', 'KEYBOARD/ORGAN', 'UNIT', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:23', 201912, 2019, 'msi', '2019-12-24 13:24:23', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (25, 6600013, '6600013', '2019-12-24 13:24:28', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 34.15, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:28', 201912, 2019, 'merk apa aja 1', '2019-12-24 13:24:28', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (26, 6600011, '6600011', '2019-12-24 13:24:35', 20191224, 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', 102505910000048, '102505910000048', 'ISI SPIDOL', 'PAK', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:35', 201912, 2019, 'SINAR DUNIA', '2019-12-24 13:24:35', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (27, 6600013, '6600013', '2019-12-24 13:24:56', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 31, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:56', 201912, 2019, 'merk apa aja 2', '2019-12-24 13:24:56', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (28, 6600014, '6600014', '2019-12-24 13:25:15', 20191224, 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', 102505700000002, '102505700000002', 'SOLAR', 'LTR', 20000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:15', 201912, 2019, 'SOLAR', '2019-12-24 13:25:15', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (29, 6600015, '6600015', '2019-12-24 13:25:36', 20191224, 14, 'LEGAL', 6600015, 'EST-SPP/SWJ/12/19/6600015', 102505910000148, '102505910000148', 'LETTER FILE 401', 'BH', 40, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:36', 201912, 2019, '401', '2019-12-24 13:25:36', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (30, 6600014, '6600014', '2019-12-24 13:25:38', 20191224, 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', 102505700000001, '102505700000001', 'BENSIN', 'LTR', 2000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:38', 201912, 2019, 'BENSIN', '2019-12-24 13:25:38', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (31, 6600013, '6600013', '2019-12-24 13:25:51', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505930000042, '102505930000042', 'STOPMAP', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:51', 201912, 2019, 'merk apa aja 3', '2019-12-24 13:25:51', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (32, 6600016, '6600016', '2019-12-24 13:26:20', 20191224, 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', 102505990000018, '102505990000018', 'KASUR SINGLE BED', 'SET', 4, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:26:20', 201912, 2019, 'TIDUR', '2019-12-24 13:26:20', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (33, 6600016, '6600016', '2019-12-24 13:26:48', 20191224, 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', 102505990000015, '102505990000015', 'BANTAL', 'BH', 4, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:26:48', 201912, 2019, 'TIDUR', '2019-12-24 13:26:48', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (34, 6600017, '6600017', '2019-12-24 13:27:03', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505930000042, '102505930000042', 'STOPMAP', 'PCS', 1, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:03', 201912, 2019, 'stopmap 1', '2019-12-24 13:27:03', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (35, 6600017, '6600017', '2019-12-24 13:27:19', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505930000043, '102505930000043', 'STOPMAP BATIK', 'PCS', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:19', 201912, 2019, 'mmerk 2', '2019-12-24 13:27:19', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (36, 6600017, '6600017', '2019-12-24 13:27:44', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505910000159, '102505910000159', 'MAP TULANG PLASTIK', 'PCS', 3, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:44', 201912, 2019, 'merk 3', '2019-12-24 13:27:44', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (37, 6600018, '6600018', '2019-12-24 13:28:44', 20191224, 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', 102505850000231, '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 'LBR', 3000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:28:44', 201912, 2019, 'ASUS', '2019-12-24 13:28:44', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (38, 6600018, '6600018', '2019-12-24 13:29:33', 20191224, 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', 102505790000365, '102505790000365', 'SARUNG TANGAN', 'PSG', 200, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:29:33', 201912, 2019, 'SUBARU', '2019-12-24 13:29:33', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (39, 1100001, '1100001', '2019-12-24 13:29:45', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000057, '102505990000057', 'KOMPUTER SET', 'SET', 2, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:29:45', 201912, 2019, 'merk cpu set 1', '2019-12-24 13:29:45', 'User HO', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (40, 6600019, '6600019', '2019-12-24 13:30:29', 20191224, 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', 102505410000220, '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 'PCS', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:29', 201912, 2019, 'lampu kaki', '2019-12-24 13:30:29', 'User Gudang', 'TIDAK DISETUJUI', 3, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (41, 6600019, '6600019', '2019-12-24 13:30:30', 20191224, 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', 102505730000061, '102505730000061', 'BOLA LAMPU XL-60 WATT', 'PCS', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:30', 201912, 2019, '60 wat', '2019-12-24 13:30:30', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (42, 6600020, '6600020', '2019-12-24 13:30:32', 20191224, 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', 102505850000128, '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 'PCS', 33, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:32', 201912, 2019, 'ICOM', '2019-12-24 13:30:32', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (43, 1100001, '1100001', '2019-12-24 13:30:32', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000048, '102505990000048', 'UPS', 'UNIT', 1, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:30:32', 201912, 2019, 'merk ups', '2019-12-24 13:30:32', 'User HO', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (44, 6600020, '6600020', '2019-12-24 13:31:03', 20191224, 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', 102505850000132, '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:31:03', 201912, 2019, 'ICOM', '2019-12-24 13:31:03', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (45, 6600021, '6600021', '2019-12-24 13:31:47', 20191224, 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', 102505910000046, '102505910000046', 'TINTA HITAM', 'BTL', 12, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:31:47', 201912, 2019, 'EPSON', '2019-12-24 13:31:47', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (46, 6600021, '6600021', '2019-12-24 13:32:09', 20191224, 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', 102505910000008, '102505910000008', 'TINTA PRINTER HP (WARNA)', 'PCS', 40, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:32:09', 201912, 2019, 'EPSON', '2019-12-24 13:32:09', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (47, 1100001, '1100001', '2019-12-24 13:32:34', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000035, '102505990000035', 'CAMERA DIGITAL', 'UNIT', 2, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:32:34', 201912, 2019, 'camdig', '2019-12-24 13:32:34', 'User HO', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (48, 6100001, '6100001', '2019-12-24 14:48:24', 20191224, 8, 'TEKNIK', 6100001, 'EST-SPP/SWJ/12/19/6100001', 102505700000002, '102505700000002', 'SOLAR', 'LTR', 2000, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 14:48:24', 201912, 2019, 'solar', '2019-12-24 14:48:24', 'Dept Head', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (49, 6600022, '6600022', '2019-12-27 13:15:48', 20191227, 11, 'MIS', 6600022, 'EST-SPPI/SWJ/12/19/6600022', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 13:15:48', 201912, 2019, 'asus', '2019-12-27 13:15:48', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (50, 6600023, '6600023', '2019-12-27 16:12:46', 20191227, 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:12:46', 201912, 2019, 'b100', '2019-12-27 16:12:46', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');
INSERT INTO `item_ppo` VALUES (51, 6600023, '6600023', '2019-12-27 16:13:18', 20191227, 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:13:18', 201912, 2019, 'b200', '2019-12-27 16:13:18', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', b'0', 'SITE', 1, 0, 0, '', 0, '');

-- ----------------------------
-- Table structure for item_ppo_approval
-- ----------------------------
DROP TABLE IF EXISTS `item_ppo_approval`;
CREATE TABLE `item_ppo_approval`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_ppo` int(11) NULL DEFAULT NULL,
  `noppotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noreftxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` int(11) NULL DEFAULT NULL,
  `flag_waiting_ktu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_ktu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_ktu` datetime(0) NULL DEFAULT NULL,
  `status_ktu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_ktu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_ktu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_kasie` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_kasie` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_kasie` datetime(0) NULL DEFAULT NULL,
  `status_kasie` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_kasie` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_kasie` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_gm` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_gm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_gm` datetime(0) NULL DEFAULT NULL,
  `status_gm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_gm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_gm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_mill_mgr` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_mill_mgr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_mill_mgr` datetime(0) NULL DEFAULT NULL,
  `status_mill_mgr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_mill_mgr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_mill_mgr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dept_head` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dept_head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dept_head` datetime(0) NULL DEFAULT NULL,
  `status_dept_head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dept_head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dept_head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dir_ops` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dir_ops` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dir_ops` datetime(0) NULL DEFAULT NULL,
  `status_dir_ops` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dir_ops` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dir_ops` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dir_hrd` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dir_hrd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dir_hrd` datetime(0) NULL DEFAULT NULL,
  `status_dir_hrd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dir_hrd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dir_hrd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dir_mis` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dir_mis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dir_mis` datetime(0) NULL DEFAULT NULL,
  `status_dir_mis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dir_mis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dir_mis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dir_legal` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dir_legal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dir_legal` datetime(0) NULL DEFAULT NULL,
  `status_dir_legal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dir_legal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dir_legal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_dir_area` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_dir_area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_dir_area` datetime(0) NULL DEFAULT NULL,
  `status_dir_area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_dir_area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_dir_area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flag_waiting_kp` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_approval_kp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval_kp` datetime(0) NULL DEFAULT NULL,
  `status_kp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2_kp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_kp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_ppo_approval
-- ----------------------------
INSERT INTO `item_ppo_approval` VALUES (1, 2, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000113', 'GPS GAMIN 78S', 50, '0', 'KTU', '2019-12-24 13:16:50', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:10:42', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:34:27', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:49:04', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (2, 1, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000092', 'KOMPAS', 100, '0', 'KTU', '2019-12-24 13:16:52', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:14:40', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:34:30', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:49:07', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (3, 4, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000130', 'KOMPUTER', 2, '1', 'KTU', '2019-12-24 13:17:17', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:17:56', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:06', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:52', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (4, 3, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000137', 'LCD MONITOR', 2, '1', 'KTU', '2019-12-24 13:17:20', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:17:58', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:08', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:55', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (5, 5, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 50, '0', 'KTU', '2019-12-24 13:20:03', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:18:11', 'DIKETAHUI', '4', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:28', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (6, 6, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100001', 'PUPUK BAYFOLAN', 10, '0', 'KTU', '2019-12-24 13:20:06', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:18:13', 'DIKETAHUI', '4', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:31', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (7, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50000, '1', 'KTU', '2019-12-24 13:20:28', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:22:46', 'DIKETAHUI', '4', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:33', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (8, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 2000, '1', 'KTU', '2019-12-24 13:19:53', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:22:55', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:37:13', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:21', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (9, 9, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100007', 'PUPUK BORATE', 500, '1', 'KTU', '2019-12-24 13:19:28', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:22:52', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:37:11', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:18', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (10, 12, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505850000255', 'DODOS 8\"', 20, '1', 'KTU', '2019-12-24 13:20:47', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:02', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:37:46', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:54', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (11, 13, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505760000157', 'TOJOK', 22, '1', 'KTU', '2019-12-24 13:20:57', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:04', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:37:49', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:57', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (12, 10, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 50, '0', 'KTU', '2019-12-24 13:21:09', 'DIKETAHUI', '4', 'SITE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'GM', '2019-12-24 13:37:23', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:06', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (13, 11, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 10000, '0', 'KTU', '2019-12-24 13:21:55', 'DIKETAHUI', '4', 'SITE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'GM', '2019-12-24 13:37:26', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:48:09', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (14, 17, '6600008', 'EST-SPP/SWJ/12/19/6600008', '102505530000023', '39T HELICAL GEAR -TR', 20, '1', 'KTU', '2019-12-24 13:22:02', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:33', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:26', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:33', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (15, 14, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100009', 'PUPUK DOLOMITE', 150, '1', 'KTU', '2019-12-24 13:22:09', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:14', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:06', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:40', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (16, 15, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100010', 'PUPUK HI-KAY', 200, '1', 'KTU', '2019-12-24 13:22:11', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:16', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:08', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:43', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (17, 16, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100003', 'PUPUK HUMEGA CRUMLE', 50, '1', 'KTU', '2019-12-24 13:22:14', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:19', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:10', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:46', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (18, 22, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000012', 'KERTAS A4', 20, '0', 'KTU', '2019-12-24 13:29:11', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:23:39', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:55', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:46:31', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (19, 18, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 2000, '0', 'KTU', '2019-12-24 13:28:58', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:24:23', 'DIKETAHUI', '4', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:23', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (20, 21, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100026', 'PUPUK ZINCOBOS', 1000, '0', 'KTU', '2019-12-24 13:28:55', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:24:26', 'DIKETAHUI', '4', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:25', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (21, 19, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000183', 'ABBOCATH NO 24', 25, '1', NULL, NULL, NULL, NULL, NULL, '0', 'Kasie HRD GA', '2019-12-24 13:24:34', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:45', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:10', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (22, 20, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000045', 'ABBOCATH NO.22', 25, '1', NULL, NULL, NULL, NULL, NULL, '0', 'Kasie HRD GA', '2019-12-24 13:24:36', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:38:48', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:47:14', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (23, 24, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000072', 'KEYBOARD/ORGAN', 50, '0', 'KTU', '2019-12-24 13:29:06', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:24:50', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:37', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:46:16', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (24, 23, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000050', 'KEYBOARD KOMPUTER', 50, '0', 'KTU', '2019-12-24 13:29:03', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:24:53', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:35', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:46:12', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (25, 25, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100001', 'PUPUK BAYFOLAN', 34, '0', 'KTU', '2019-12-24 13:29:21', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:24:59', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:34:42', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:57', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (26, 27, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100008', 'PUPUK CUSO4', 31, '0', 'KTU', '2019-12-24 13:29:23', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:25:02', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:34:45', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:59', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (27, 29, '6600015', 'EST-SPP/SWJ/12/19/6600015', '102505910000148', 'LETTER FILE 401', 40, '0', 'KTU', '2019-12-24 13:29:44', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:25:59', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:20', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:40', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (28, 30, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000001', 'BENSIN', 2000, '0', 'KTU', '2019-12-24 13:29:31', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:26:03', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:28', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:48', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (29, 28, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000002', 'SOLAR', 20000, '0', 'KTU', '2019-12-24 13:29:34', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:26:06', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:30', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:51', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (30, 31, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505930000042', 'STOPMAP', 5, '0', 'KTU', '2019-12-24 13:29:26', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:26:11', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:34:47', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:46:02', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (31, 32, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000018', 'KASUR SINGLE BED', 4, '0', 'KTU', '2019-12-24 13:29:56', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:26:28', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:11', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:31', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (32, 34, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000042', 'STOPMAP', 1, '0', 'KTU', '2019-12-24 13:30:03', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:27:38', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:00', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:14', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (33, 35, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000043', 'STOPMAP BATIK', 2, '0', 'KTU', '2019-12-24 13:30:07', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:27:40', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:36:02', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:17', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (34, 26, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000048', 'ISI SPIDOL', 20, '0', 'KTU', '2019-12-24 13:29:13', 'DIKETAHUI', '4', 'SITE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'GM', '2019-12-24 13:36:52', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:46:28', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (35, 33, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000015', 'BANTAL', 4, '0', 'KTU', '2019-12-24 13:29:53', 'DIKETAHUI', '4', 'SITE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'GM', '2019-12-24 13:36:09', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:29', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (36, 36, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505910000159', 'MAP TULANG PLASTIK', 3, '0', 'KTU', '2019-12-24 13:30:01', 'DIKETAHUI', '4', 'SITE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'GM', '2019-12-24 13:35:58', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:45:11', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (37, 37, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 3000, '1', 'KTU', '2019-12-24 13:30:12', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:30:41', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:47', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:44:55', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (38, 38, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505790000365', 'SARUNG TANGAN', 200, '1', 'KTU', '2019-12-24 13:30:15', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:30:39', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:49', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:44:58', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (39, 40, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 10, '0', 'KTU', '2019-12-24 13:31:36', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:30:46', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:40', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Dept Head', '2019-12-24 13:41:02', 'TIDAK DISETUJUI', '3', 'HO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (40, 41, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505730000061', 'BOLA LAMPU XL-60 WATT', 10, '0', 'KTU', '2019-12-24 13:31:34', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:30:49', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:42', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:41:10', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (41, 42, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 33, '0', 'KTU', '2019-12-24 13:31:44', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:30:55', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:35', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:40:41', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (42, 44, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 20, '0', 'KTU', '2019-12-24 13:31:42', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-24 13:31:19', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-24 13:35:32', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:40:37', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (45, 47, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000035', 'CAMERA DIGITAL', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:42:48', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (46, 39, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000057', 'KOMPUTER SET', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:42:51', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (47, 43, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000048', 'UPS', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-24 13:42:54', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (48, 49, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, '0', 'KTU', '2019-12-27 13:18:43', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-27 13:18:17', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-27 13:19:33', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-27 13:19:53', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (49, 50, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505990000050', 'KEYBOARD KOMPUTER', 50, '0', 'KTU', '2019-12-27 16:15:13', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-27 16:14:47', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-27 16:15:34', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-27 16:15:55', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `item_ppo_approval` VALUES (50, 51, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 50, '0', 'KTU', '2019-12-27 16:15:15', 'DIKETAHUI', '4', 'SITE', '0', 'Kasie HRD GA', '2019-12-27 16:14:49', 'DIKETAHUI', '4', 'SITE', '0', 'GM', '2019-12-27 16:15:36', 'DISETUJUI', '1', 'SITE', '1', NULL, NULL, NULL, NULL, NULL, '0', 'Dept Head', '2019-12-27 16:15:57', 'DISETUJUI', '1', 'HO', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for item_ppo_approval_history
-- ----------------------------
DROP TABLE IF EXISTS `item_ppo_approval_history`;
CREATE TABLE `item_ppo_approval_history`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_id_item_ppo` int(11) NULL DEFAULT NULL,
  `noppotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noreftxt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` int(11) NULL DEFAULT NULL,
  `nama_approval` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_approval` datetime(0) NULL DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_level` int(11) NULL DEFAULT NULL,
  `status_lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 186 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_ppo_approval_history
-- ----------------------------
INSERT INTO `item_ppo_approval_history` VALUES (1, 2, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000113', 'GPS GAMIN 78S', 50, 'Kasie HRD GA', '2019-12-24 13:10:42', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:10:42', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (2, 1, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000092', 'KOMPAS', 100, 'Kasie HRD GA', '2019-12-24 13:14:40', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:14:40', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (3, 2, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000113', 'GPS GAMIN 78S', 50, 'KTU', '2019-12-24 13:16:50', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:16:50', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (4, 1, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000092', 'KOMPAS', 100, 'KTU', '2019-12-24 13:16:52', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:16:52', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (5, 4, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000130', 'KOMPUTER', 2, 'KTU', '2019-12-24 13:17:17', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:17:17', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (6, 3, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000137', 'LCD MONITOR', 2, 'KTU', '2019-12-24 13:17:21', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:17:21', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (7, 4, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000130', 'KOMPUTER', 2, 'Kasie HRD GA', '2019-12-24 13:17:56', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:17:56', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (8, 3, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000137', 'LCD MONITOR', 2, 'Kasie HRD GA', '2019-12-24 13:17:58', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:17:58', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (9, 5, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 50, 'Kasie HRD GA', '2019-12-24 13:18:11', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:18:11', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (10, 6, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100001', 'PUPUK BAYFOLAN', 10, 'Kasie HRD GA', '2019-12-24 13:18:13', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:18:13', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (11, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50, 'Kasie HRD GA', '2019-12-24 13:18:15', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:18:15', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (12, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 1000, 'Kasie HRD GA', '2019-12-24 13:18:22', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:18:22', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (13, 9, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100007', 'PUPUK BORATE', 500, 'KTU', '2019-12-24 13:19:28', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:19:28', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (14, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 1000, NULL, NULL, NULL, NULL, NULL, NULL, 'SITE', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505010100009|PUPUK DOLOMITE dengan qty sebelum di revisi 1000 KG', '2019-12-24 13:19:49', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (15, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 2000, 'KTU', '2019-12-24 13:19:53', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:19:53', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (16, 5, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 50, 'KTU', '2019-12-24 13:20:04', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:20:04', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (17, 6, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100001', 'PUPUK BAYFOLAN', 10, 'KTU', '2019-12-24 13:20:06', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:20:06', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (18, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50, NULL, NULL, NULL, NULL, NULL, NULL, 'SITE', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505010100007|PUPUK BORATE dengan qty sebelum di revisi 50 KG', '2019-12-24 13:20:19', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (19, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50000, 'KTU', '2019-12-24 13:20:28', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:20:28', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (20, 12, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505850000255', 'DODOS 8\"', 20, 'KTU', '2019-12-24 13:20:48', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:20:48', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (21, 13, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505760000157', 'TOJOK', 22, 'KTU', '2019-12-24 13:20:57', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:20:57', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (22, 10, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 50, 'KTU', '2019-12-24 13:21:09', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:21:09', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (23, 11, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 100, 'KTU', '2019-12-24 13:21:37', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:21:37', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (24, 13, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 100, NULL, NULL, NULL, NULL, NULL, NULL, 'SITE', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505850000015|MANGKOK SEDANG ( TAKARAN PUPUK ) dengan qty sebelum di revisi 100 BH', '2019-12-24 13:21:50', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (25, 11, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 10000, 'KTU', '2019-12-24 13:21:55', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:21:55', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (26, 17, '6600008', 'EST-SPP/SWJ/12/19/6600008', '102505530000023', '39T HELICAL GEAR -TR', 20, 'KTU', '2019-12-24 13:22:03', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:22:03', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (27, 14, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100009', 'PUPUK DOLOMITE', 150, 'KTU', '2019-12-24 13:22:09', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:22:09', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (28, 15, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100010', 'PUPUK HI-KAY', 200, 'KTU', '2019-12-24 13:22:11', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:22:11', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (29, 16, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100003', 'PUPUK HUMEGA CRUMLE', 50, 'KTU', '2019-12-24 13:22:14', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:22:14', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (30, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50000, 'Kasie HRD GA', '2019-12-24 13:22:46', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:22:46', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (31, 9, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100007', 'PUPUK BORATE', 500, 'Kasie HRD GA', '2019-12-24 13:22:52', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:22:52', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (32, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 2000, 'Kasie HRD GA', '2019-12-24 13:22:55', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:22:55', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (33, 12, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505850000255', 'DODOS 8\"', 20, 'Kasie HRD GA', '2019-12-24 13:23:02', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:02', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (34, 13, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505760000157', 'TOJOK', 22, 'Kasie HRD GA', '2019-12-24 13:23:04', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:04', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (35, 14, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100009', 'PUPUK DOLOMITE', 150, 'Kasie HRD GA', '2019-12-24 13:23:14', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:14', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (36, 15, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100010', 'PUPUK HI-KAY', 200, 'Kasie HRD GA', '2019-12-24 13:23:16', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:16', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (37, 16, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100003', 'PUPUK HUMEGA CRUMLE', 50, 'Kasie HRD GA', '2019-12-24 13:23:19', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:19', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (38, 17, '6600008', 'EST-SPP/SWJ/12/19/6600008', '102505530000023', '39T HELICAL GEAR -TR', 20, 'Kasie HRD GA', '2019-12-24 13:23:33', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:33', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (39, 22, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000012', 'KERTAS A4', 20, 'Kasie HRD GA', '2019-12-24 13:23:39', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:23:39', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (40, 18, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 2000, 'Kasie HRD GA', '2019-12-24 13:24:23', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:23', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (41, 21, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100026', 'PUPUK ZINCOBOS', 1000, 'Kasie HRD GA', '2019-12-24 13:24:26', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:26', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (42, 19, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000183', 'ABBOCATH NO 24', 25, 'Kasie HRD GA', '2019-12-24 13:24:34', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:34', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (43, 20, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000045', 'ABBOCATH NO.22', 25, 'Kasie HRD GA', '2019-12-24 13:24:36', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:36', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (44, 24, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000072', 'KEYBOARD/ORGAN', 50, 'Kasie HRD GA', '2019-12-24 13:24:50', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:50', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (45, 23, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'Kasie HRD GA', '2019-12-24 13:24:53', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:53', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (46, 25, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100001', 'PUPUK BAYFOLAN', 34, 'Kasie HRD GA', '2019-12-24 13:24:59', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:24:59', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (47, 27, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100008', 'PUPUK CUSO4', 31, 'Kasie HRD GA', '2019-12-24 13:25:02', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:25:02', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (48, 29, '6600015', 'EST-SPP/SWJ/12/19/6600015', '102505910000148', 'LETTER FILE 401', 40, 'Kasie HRD GA', '2019-12-24 13:25:59', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:25:59', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (49, 30, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000001', 'BENSIN', 2000, 'Kasie HRD GA', '2019-12-24 13:26:04', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:26:04', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (50, 28, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000002', 'SOLAR', 20000, 'Kasie HRD GA', '2019-12-24 13:26:06', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:26:06', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (51, 31, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505930000042', 'STOPMAP', 5, 'Kasie HRD GA', '2019-12-24 13:26:11', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:26:11', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (52, 32, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000018', 'KASUR SINGLE BED', 4, 'Kasie HRD GA', '2019-12-24 13:26:28', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:26:28', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (53, 34, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000042', 'STOPMAP', 1, 'Kasie HRD GA', '2019-12-24 13:27:38', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:27:38', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (54, 35, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000043', 'STOPMAP BATIK', 2, 'Kasie HRD GA', '2019-12-24 13:27:41', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:27:41', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (55, 21, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100026', 'PUPUK ZINCOBOS', 1000, 'KTU', '2019-12-24 13:28:55', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:28:55', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (56, 18, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 2000, 'KTU', '2019-12-24 13:28:58', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:28:58', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (57, 23, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'KTU', '2019-12-24 13:29:03', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:03', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (58, 24, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000072', 'KEYBOARD/ORGAN', 50, 'KTU', '2019-12-24 13:29:06', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:06', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (59, 22, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000012', 'KERTAS A4', 20, 'KTU', '2019-12-24 13:29:11', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:11', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (60, 26, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000048', 'ISI SPIDOL', 20, 'KTU', '2019-12-24 13:29:13', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:13', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (61, 25, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100001', 'PUPUK BAYFOLAN', 34, 'KTU', '2019-12-24 13:29:21', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:21', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (62, 27, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100008', 'PUPUK CUSO4', 31, 'KTU', '2019-12-24 13:29:23', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:23', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (63, 31, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505930000042', 'STOPMAP', 5, 'KTU', '2019-12-24 13:29:26', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:26', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (64, 30, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000001', 'BENSIN', 2000, 'KTU', '2019-12-24 13:29:31', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:31', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (65, 28, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000002', 'SOLAR', 20000, 'KTU', '2019-12-24 13:29:34', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:34', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (66, 29, '6600015', 'EST-SPP/SWJ/12/19/6600015', '102505910000148', 'LETTER FILE 401', 40, 'KTU', '2019-12-24 13:29:44', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:44', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (67, 33, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000015', 'BANTAL', 4, 'KTU', '2019-12-24 13:29:53', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:53', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (68, 32, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000018', 'KASUR SINGLE BED', 4, 'KTU', '2019-12-24 13:29:56', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:29:56', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (69, 36, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505910000159', 'MAP TULANG PLASTIK', 3, 'KTU', '2019-12-24 13:30:01', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:30:01', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (70, 34, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000042', 'STOPMAP', 1, 'KTU', '2019-12-24 13:30:03', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:30:03', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (71, 35, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000043', 'STOPMAP BATIK', 2, 'KTU', '2019-12-24 13:30:07', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:30:07', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (72, 37, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 3000, 'KTU', '2019-12-24 13:30:13', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:30:13', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (73, 38, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505790000365', 'SARUNG TANGAN', 200, 'KTU', '2019-12-24 13:30:15', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:30:15', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (74, 38, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505790000365', 'SARUNG TANGAN', 200, 'Kasie HRD GA', '2019-12-24 13:30:39', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:30:39', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (75, 37, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 3000, 'Kasie HRD GA', '2019-12-24 13:30:41', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:30:41', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (76, 40, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 10, 'Kasie HRD GA', '2019-12-24 13:30:46', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:30:46', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (77, 41, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505730000061', 'BOLA LAMPU XL-60 WATT', 10, 'Kasie HRD GA', '2019-12-24 13:30:49', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:30:49', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (78, 42, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 33, 'Kasie HRD GA', '2019-12-24 13:30:55', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:30:55', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (79, 44, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 20, 'Kasie HRD GA', '2019-12-24 13:31:19', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:31:19', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (80, 41, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505730000061', 'BOLA LAMPU XL-60 WATT', 10, 'KTU', '2019-12-24 13:31:34', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:31:34', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (81, 40, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 10, 'KTU', '2019-12-24 13:31:36', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:31:36', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (82, 44, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 20, 'KTU', '2019-12-24 13:31:42', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:31:42', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (83, 42, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 33, 'KTU', '2019-12-24 13:31:44', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:31:44', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (84, 45, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000046', 'TINTA HITAM', 12, 'Kasie HRD GA', '2019-12-24 13:31:58', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:31:58', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (85, 45, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000046', 'TINTA HITAM', 12, 'KTU', '2019-12-24 13:32:25', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:32:25', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (86, 46, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000008', 'TINTA PRINTER HP (WARNA)', 40, 'KTU', '2019-12-24 13:32:27', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-24 13:32:27', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (87, 46, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000008', 'TINTA PRINTER HP (WARNA)', 40, 'Kasie HRD GA', '2019-12-24 13:33:09', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-24 13:33:09', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (88, 2, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000113', 'GPS GAMIN 78S', 50, 'GM', '2019-12-24 13:34:27', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:34:27', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (89, 1, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000092', 'KOMPAS', 100, 'GM', '2019-12-24 13:34:30', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:34:30', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (90, 25, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100001', 'PUPUK BAYFOLAN', 34, 'GM', '2019-12-24 13:34:42', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:34:42', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (91, 27, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100008', 'PUPUK CUSO4', 31, 'GM', '2019-12-24 13:34:45', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:34:45', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (92, 31, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505930000042', 'STOPMAP', 5, 'GM', '2019-12-24 13:34:47', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:34:47', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (93, 4, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000130', 'KOMPUTER', 2, 'GM', '2019-12-24 13:35:06', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:06', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (94, 3, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000137', 'LCD MONITOR', 2, 'GM', '2019-12-24 13:35:08', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:08', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (95, 45, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000046', 'TINTA HITAM', 12, 'GM', '2019-12-24 13:35:21', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:21', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (96, 46, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000008', 'TINTA PRINTER HP (WARNA)', 40, 'GM', '2019-12-24 13:35:23', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:23', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (97, 44, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 20, 'GM', '2019-12-24 13:35:33', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:33', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (98, 42, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 33, 'GM', '2019-12-24 13:35:35', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:35', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (99, 40, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 10, 'GM', '2019-12-24 13:35:40', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:40', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (100, 41, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505730000061', 'BOLA LAMPU XL-60 WATT', 10, 'GM', '2019-12-24 13:35:42', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:42', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (101, 37, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 3000, 'GM', '2019-12-24 13:35:47', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:47', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (102, 38, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505790000365', 'SARUNG TANGAN', 200, 'GM', '2019-12-24 13:35:49', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:49', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (103, 36, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505910000159', 'MAP TULANG PLASTIK', 3, 'GM', '2019-12-24 13:35:58', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:35:58', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (104, 34, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000042', 'STOPMAP', 1, 'GM', '2019-12-24 13:36:00', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:00', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (105, 35, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000043', 'STOPMAP BATIK', 2, 'GM', '2019-12-24 13:36:02', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:02', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (106, 33, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000015', 'BANTAL', 4, 'GM', '2019-12-24 13:36:09', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:09', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (107, 32, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000018', 'KASUR SINGLE BED', 4, 'GM', '2019-12-24 13:36:12', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:12', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (108, 29, '6600015', 'EST-SPP/SWJ/12/19/6600015', '102505910000148', 'LETTER FILE 401', 40, 'GM', '2019-12-24 13:36:20', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:20', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (109, 30, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000001', 'BENSIN', 2000, 'GM', '2019-12-24 13:36:28', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:28', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (110, 28, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000002', 'SOLAR', 20000, 'GM', '2019-12-24 13:36:30', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:30', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (111, 23, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'GM', '2019-12-24 13:36:35', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:35', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (112, 24, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000072', 'KEYBOARD/ORGAN', 50, 'GM', '2019-12-24 13:36:37', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:37', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (113, 26, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000048', 'ISI SPIDOL', 20, 'GM', '2019-12-24 13:36:52', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:52', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (114, 22, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000012', 'KERTAS A4', 20, 'GM', '2019-12-24 13:36:55', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:36:55', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (115, 9, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100007', 'PUPUK BORATE', 500, 'GM', '2019-12-24 13:37:11', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:11', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (116, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 2000, 'GM', '2019-12-24 13:37:13', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:13', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (117, 10, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 50, 'GM', '2019-12-24 13:37:23', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:23', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (118, 11, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 10000, 'GM', '2019-12-24 13:37:26', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:26', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (119, 12, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505850000255', 'DODOS 8\"', 20, 'GM', '2019-12-24 13:37:46', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:46', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (120, 13, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505760000157', 'TOJOK', 22, 'GM', '2019-12-24 13:37:49', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:37:49', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (121, 14, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100009', 'PUPUK DOLOMITE', 150, 'GM', '2019-12-24 13:38:06', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:06', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (122, 15, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100010', 'PUPUK HI-KAY', 200, 'GM', '2019-12-24 13:38:08', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:08', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (123, 16, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100003', 'PUPUK HUMEGA CRUMLE', 50, 'GM', '2019-12-24 13:38:10', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:10', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (124, 17, '6600008', 'EST-SPP/SWJ/12/19/6600008', '102505530000023', '39T HELICAL GEAR -TR', 20, 'GM', '2019-12-24 13:38:26', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:26', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (125, 19, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000183', 'ABBOCATH NO 24', 25, 'GM', '2019-12-24 13:38:46', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:46', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (126, 20, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000045', 'ABBOCATH NO.22', 25, 'GM', '2019-12-24 13:38:48', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-24 13:38:48', 'GM', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (127, 45, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000046', 'TINTA HITAM', 12, 'Dept Head', '2019-12-24 13:40:26', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:40:26', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (128, 46, '6600021', 'EST-SPP/SWJ/12/19/6600021', '102505910000008', 'TINTA PRINTER HP (WARNA)', 40, 'Dept Head', '2019-12-24 13:40:29', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:40:29', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (129, 44, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 20, 'Dept Head', '2019-12-24 13:40:37', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:40:37', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (130, 42, '6600020', 'EST-SPP/SWJ/12/19/6600020', '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 33, 'Dept Head', '2019-12-24 13:40:41', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:40:41', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (131, 40, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 10, 'Dept Head', '2019-12-24 13:41:02', 'TIDAK DISETUJUI', '3', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:41:02', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (132, 41, '6600019', 'EST-SPP/SWJ/12/19/6600019', '102505730000061', 'BOLA LAMPU XL-60 WATT', 10, 'Dept Head', '2019-12-24 13:41:10', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:41:10', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (133, 47, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000035', 'CAMERA DIGITAL', 2, 'Dept Head', '2019-12-24 13:42:48', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:42:48', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (134, 39, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000057', 'KOMPUTER SET', 2, 'Dept Head', '2019-12-24 13:42:51', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:42:51', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (135, 43, '1100001', 'PST-SPPA/BWJ/12/19/1100001', '102505990000048', 'UPS', 1, 'Dept Head', '2019-12-24 13:42:54', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:42:54', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (136, 37, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 3000, 'Dept Head', '2019-12-24 13:44:55', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:44:55', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (137, 38, '6600018', 'EST-SPP/SWJ/12/19/6600018', '102505790000365', 'SARUNG TANGAN', 200, 'Dept Head', '2019-12-24 13:44:58', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:44:58', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (138, 36, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505910000159', 'MAP TULANG PLASTIK', 3, 'Dept Head', '2019-12-24 13:45:11', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:11', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (139, 34, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000042', 'STOPMAP', 1, 'Dept Head', '2019-12-24 13:45:14', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:14', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (140, 35, '6600017', 'EST-SPPI/SWJ/12/19/6600017', '102505930000043', 'STOPMAP BATIK', 2, 'Dept Head', '2019-12-24 13:45:17', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:17', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (141, 33, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000015', 'BANTAL', 4, 'Dept Head', '2019-12-24 13:45:29', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:29', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (142, 32, '6600016', 'EST-SPP/SWJ/12/19/6600016', '102505990000018', 'KASUR SINGLE BED', 4, 'Dept Head', '2019-12-24 13:45:31', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:31', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (143, 29, '6600015', 'EST-SPP/SWJ/12/19/6600015', '102505910000148', 'LETTER FILE 401', 40, 'Dept Head', '2019-12-24 13:45:41', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:41', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (144, 30, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000001', 'BENSIN', 2000, 'Dept Head', '2019-12-24 13:45:48', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:48', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (145, 28, '6600014', 'EST-SPP/SWJ/12/19/6600014', '102505700000002', 'SOLAR', 20000, 'Dept Head', '2019-12-24 13:45:51', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:51', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (146, 25, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100001', 'PUPUK BAYFOLAN', 34, 'Dept Head', '2019-12-24 13:45:57', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:57', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (147, 27, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505010100008', 'PUPUK CUSO4', 31, 'Dept Head', '2019-12-24 13:45:59', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:45:59', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (148, 31, '6600013', 'EST-SPP/SWJ/12/19/6600013', '102505930000042', 'STOPMAP', 5, 'Dept Head', '2019-12-24 13:46:02', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:46:02', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (149, 23, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'Dept Head', '2019-12-24 13:46:12', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:46:12', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (150, 24, '6600012', 'EST-SPP/SWJ/12/19/6600012', '102505990000072', 'KEYBOARD/ORGAN', 50, 'Dept Head', '2019-12-24 13:46:16', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:46:16', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (151, 26, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000048', 'ISI SPIDOL', 20, 'Dept Head', '2019-12-24 13:46:28', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:46:28', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (152, 22, '6600011', 'EST-SPP/SWJ/12/19/6600011', '102505910000012', 'KERTAS A4', 20, 'Dept Head', '2019-12-24 13:46:31', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:46:31', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (153, 19, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000183', 'ABBOCATH NO 24', 25, 'Dept Head', '2019-12-24 13:47:10', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:10', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (154, 20, '6600010', 'EST-SPP/SWJ/12/19/6600010', '102505950000045', 'ABBOCATH NO.22', 25, 'Dept Head', '2019-12-24 13:47:14', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:14', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (155, 18, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 2000, 'Dept Head', '2019-12-24 13:47:23', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:23', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (156, 21, '6600009', 'EST-SPP/SWJ/12/19/6600009', '102505010100026', 'PUPUK ZINCOBOS', 1000, 'Dept Head', '2019-12-24 13:47:25', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:25', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (157, 17, '6600008', 'EST-SPP/SWJ/12/19/6600008', '102505530000023', '39T HELICAL GEAR -TR', 20, 'Dept Head', '2019-12-24 13:47:33', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:33', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (158, 14, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100009', 'PUPUK DOLOMITE', 150, 'Dept Head', '2019-12-24 13:47:40', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:40', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (159, 15, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100010', 'PUPUK HI-KAY', 200, 'Dept Head', '2019-12-24 13:47:43', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:43', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (160, 16, '6600007', 'EST-SPP/SWJ/12/19/6600007', '102505010100003', 'PUPUK HUMEGA CRUMLE', 50, 'Dept Head', '2019-12-24 13:47:46', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:46', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (161, 12, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505850000255', 'DODOS 8\"', 20, 'Dept Head', '2019-12-24 13:47:54', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:54', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (162, 13, '6600006', 'EST-SPP/SWJ/12/19/6600006', '102505760000157', 'TOJOK', 22, 'Dept Head', '2019-12-24 13:47:57', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:47:57', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (163, 10, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 50, 'Dept Head', '2019-12-24 13:48:06', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:06', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (164, 11, '6600005', 'EST-SPP/SWJ/12/19/6600005', '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 10000, 'Dept Head', '2019-12-24 13:48:09', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:09', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (165, 9, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100007', 'PUPUK BORATE', 500, 'Dept Head', '2019-12-24 13:48:18', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:18', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (166, 8, '6600004', 'EST-SPP/SWJ/12/19/6600004', '102505010100009', 'PUPUK DOLOMITE', 2000, 'Dept Head', '2019-12-24 13:48:21', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:21', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (167, 5, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 50, 'Dept Head', '2019-12-24 13:48:28', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:28', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (168, 6, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100001', 'PUPUK BAYFOLAN', 10, 'Dept Head', '2019-12-24 13:48:31', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:31', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (169, 7, '6600003', 'EST-SPP/SWJ/12/19/6600003', '102505010100007', 'PUPUK BORATE', 50000, 'Dept Head', '2019-12-24 13:48:33', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:33', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (170, 4, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000130', 'KOMPUTER', 2, 'Dept Head', '2019-12-24 13:48:52', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:52', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (171, 3, '6600002', 'EST-SPP/SWJ/12/19/6600002', '102505990000137', 'LCD MONITOR', 2, 'Dept Head', '2019-12-24 13:48:55', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:48:55', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (172, 2, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000113', 'GPS GAMIN 78S', 50, 'Dept Head', '2019-12-24 13:49:04', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:49:04', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (173, 1, '6600001', 'EST-SPP/SWJ/12/19/6600001', '102505990000092', 'KOMPAS', 100, 'Dept Head', '2019-12-24 13:49:07', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-24 13:49:07', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_approval_history` VALUES (174, 49, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, 'Kasie HRD GA', '2019-12-27 13:18:18', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-27 13:18:18', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (175, 49, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, 'KTU', '2019-12-27 13:18:43', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-27 13:18:43', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (176, 49, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, 'GM', '2019-12-27 13:19:33', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-27 13:19:33', 'GM', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (177, 49, '6600022', 'EST-SPPI/SWJ/12/19/6600022', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 20, 'Dept Head', '2019-12-27 13:19:53', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-27 13:19:53', 'Dept Head', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (178, 50, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'Kasie HRD GA', '2019-12-27 16:14:47', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-27 16:14:47', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (179, 51, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 50, 'Kasie HRD GA', '2019-12-27 16:14:49', 'DIKETAHUI', '4', 'Kasie HRD GA', 12, 'SITE', NULL, NULL, '2019-12-27 16:14:49', 'Kasie HRD GA', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (180, 50, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'KTU', '2019-12-27 16:15:13', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-27 16:15:13', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (181, 51, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 50, 'KTU', '2019-12-27 16:15:15', 'DIKETAHUI', '4', 'KTU', 11, 'SITE', NULL, NULL, '2019-12-27 16:15:15', 'KTU', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (182, 50, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'GM', '2019-12-27 16:15:34', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-27 16:15:34', 'GM', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (183, 51, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 50, 'GM', '2019-12-27 16:15:36', 'DISETUJUI', '1', 'GM', 15, 'SITE', NULL, NULL, '2019-12-27 16:15:36', 'GM', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (184, 50, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505990000050', 'KEYBOARD KOMPUTER', 50, 'Dept Head', '2019-12-27 16:15:55', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-27 16:15:55', 'Dept Head', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_approval_history` VALUES (185, 51, '6600023', 'EST-SPPI/SWJ/12/19/6600023', '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 50, 'Dept Head', '2019-12-27 16:15:57', 'DISETUJUI', '1', 'Dept. Head', 21, 'HO', NULL, NULL, '2019-12-27 16:15:57', 'Dept Head', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');

-- ----------------------------
-- Table structure for item_ppo_history
-- ----------------------------
DROP TABLE IF EXISTS `item_ppo_history`;
CREATE TABLE `item_ppo_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `kodedept` double NULL DEFAULT NULL,
  `namadept` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` double NULL DEFAULT NULL,
  `noreftxt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `QTY2` double NULL DEFAULT NULL,
  `STOK` double NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `jumharga` double NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2` smallint(6) NULL DEFAULT NULL,
  `TGL_APPROVE` datetime(0) NULL DEFAULT NULL,
  `ada_penawar` bit(1) NULL DEFAULT NULL,
  `LOKASI` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `po` smallint(6) NULL DEFAULT NULL,
  `saldo_po` double NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_ppo_history
-- ----------------------------
INSERT INTO `item_ppo_history` VALUES (1, 1, 6600001, '6600001', '2019-12-24 13:06:44', 20191224, 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', 102505990000092, '102505990000092', 'KOMPAS', 'PCS', 100, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:06:44', 201912, 2019, 'SUUNTO', '2019-12-24 13:06:44', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:06:44', 'User SITE', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (2, 2, 6600001, '6600001', '2019-12-24 13:07:10', 20191224, 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', 102505990000113, '102505990000113', 'GPS GAMIN 78S', 'UNIT', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:07:10', 201912, 2019, 'ASUS', '2019-12-24 13:07:10', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:07:10', 'User SITE', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (3, 3, 6600002, '6600002', '2019-12-24 13:16:31', 20191224, 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', 102505990000137, '102505990000137', 'LCD MONITOR', 'UNIT', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:16:31', 201912, 2019, 'LG', '2019-12-24 13:16:31', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:16:31', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (4, 4, 6600002, '6600002', '2019-12-24 13:16:56', 20191224, 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:16:56', 201912, 2019, 'ASUS', '2019-12-24 13:16:56', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:16:56', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (5, 5, 6600003, '6600003', '2019-12-24 13:17:53', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:53', 201912, 2019, 'apron', '2019-12-24 13:17:53', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:17:53', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (6, 6, 6600003, '6600003', '2019-12-24 13:17:54', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:54', 201912, 2019, 'bayfolan', '2019-12-24 13:17:54', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:17:54', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (7, 7, 6600003, '6600003', '2019-12-24 13:17:55', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:55', 201912, 2019, 'barote', '2019-12-24 13:17:55', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:17:55', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (8, 8, 6600004, '6600004', '2019-12-24 13:18:06', 20191224, 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 1000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:18:06', 201912, 2019, 'DOLOMITE', '2019-12-24 13:18:06', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:18:07', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (9, 9, 6600004, '6600004', '2019-12-24 13:18:46', 20191224, 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 500, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:18:46', 201912, 2019, 'BORATE', '2019-12-24 13:18:46', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:18:46', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (10, 10, 6600005, '6600005', '2019-12-24 13:19:27', 20191224, 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:19:27', 201912, 2019, 'mangkok kecil', '2019-12-24 13:19:27', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:19:27', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (11, 11, 6600005, '6600005', '2019-12-24 13:19:29', 20191224, 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 100, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:19:29', 201912, 2019, 'sedang', '2019-12-24 13:19:29', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:19:29', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (12, 8, 6600004, '6600004', '2019-12-24 13:18:06', 20191224, 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 1000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:18:06', 201912, 2019, 'DOLOMITE', '2019-12-24 13:18:06', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505010100009|PUPUK DOLOMITE dengan qty sebelum di revisi 1000 KG', '2019-12-24 13:19:49', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (13, 12, 6600006, '6600006', '2019-12-24 13:20:02', 20191224, 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', 102505850000255, '102505850000255', 'DODOS 8\"', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:20:02', 201912, 2019, 'DODOS', '2019-12-24 13:20:02', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:20:02', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (14, 7, 6600003, '6600003', '2019-12-24 13:17:55', 20191224, 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:17:55', 201912, 2019, 'barote', '2019-12-24 13:17:55', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505010100007|PUPUK BORATE dengan qty sebelum di revisi 50 KG', '2019-12-24 13:20:19', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (15, 13, 6600006, '6600006', '2019-12-24 13:20:26', 20191224, 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', 102505760000157, '102505760000157', 'TOJOK', 'PCS', 22, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:20:26', 201912, 2019, 'LOGITECH', '2019-12-24 13:20:26', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:20:26', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (16, 14, 6600007, '6600007', '2019-12-24 13:21:04', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100009, '102505010100009', 'PUPUK DOLOMITE', 'KG', 150, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:04', 201912, 2019, 'dolomite', '2019-12-24 13:21:04', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:05', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (17, 15, 6600007, '6600007', '2019-12-24 13:21:06', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100010, '102505010100010', 'PUPUK HI-KAY', 'KG', 200, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:06', 201912, 2019, 'hi kay', '2019-12-24 13:21:06', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:06', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (18, 16, 6600007, '6600007', '2019-12-24 13:21:07', 20191224, 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', 102505010100003, '102505010100003', 'PUPUK HUMEGA CRUMLE', 'KG', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:07', 201912, 2019, 'humega', '2019-12-24 13:21:07', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:08', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (19, 11, 6600005, '6600005', '2019-12-24 13:19:29', 20191224, 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 100, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:19:29', 201912, 2019, 'sedang', '2019-12-24 13:19:29', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'DATA SEBELUM REV QTY', 'KTU melakukan revisi qty pada barang 102505850000015|MANGKOK SEDANG ( TAKARAN PUPUK ) dengan qty sebelum di revisi 100 BH', '2019-12-24 13:21:50', 'KTU', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (20, 17, 6600008, '6600008', '2019-12-24 13:21:53', 20191224, 3, 'PABRIK', 6600008, 'EST-SPP/SWJ/12/19/6600008', 102505530000023, '102505530000023', '39T HELICAL GEAR -TR', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:21:53', 201912, 2019, 'gear', '2019-12-24 13:21:53', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:54', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (21, 18, 6600009, '6600009', '2019-12-24 13:22:36', 20191224, 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', 102505010100025, '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 'KG', 2000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:36', 201912, 2019, '', '2019-12-24 13:22:36', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:36', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (22, 19, 6600010, '6600010', '2019-12-24 13:22:50', 20191224, 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', 102505950000183, '102505950000183', 'ABBOCATH NO 24', 'PCS', 25, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:50', 201912, 2019, 'no 24', '2019-12-24 13:22:50', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:50', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (23, 20, 6600010, '6600010', '2019-12-24 13:22:51', 20191224, 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', 102505950000045, '102505950000045', 'ABBOCATH NO.22', 'PCS', 25, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:51', 201912, 2019, 'no 22', '2019-12-24 13:22:51', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:51', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (24, 21, 6600009, '6600009', '2019-12-24 13:22:53', 20191224, 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', 102505010100026, '102505010100026', 'PUPUK ZINCOBOS', 'KG', 1000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:22:53', 201912, 2019, '', '2019-12-24 13:22:53', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:53', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (25, 22, 6600011, '6600011', '2019-12-24 13:23:30', 20191224, 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', 102505910000012, '102505910000012', 'KERTAS A4', 'RIM', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:23:30', 201912, 2019, 'SINAR AKHIRAT', '2019-12-24 13:23:30', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:23:30', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (26, 23, 6600012, '6600012', '2019-12-24 13:24:21', 20191224, 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:21', 201912, 2019, 'msi', '2019-12-24 13:24:21', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:24:21', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (27, 24, 6600012, '6600012', '2019-12-24 13:24:23', 20191224, 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', 102505990000072, '102505990000072', 'KEYBOARD/ORGAN', 'UNIT', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:23', 201912, 2019, 'msi', '2019-12-24 13:24:23', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:24:23', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (28, 25, 6600013, '6600013', '2019-12-24 13:24:28', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 34.15, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:28', 201912, 2019, 'merk apa aja 1', '2019-12-24 13:24:28', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:24:28', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (29, 26, 6600011, '6600011', '2019-12-24 13:24:35', 20191224, 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', 102505910000048, '102505910000048', 'ISI SPIDOL', 'PAK', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:35', 201912, 2019, 'SINAR DUNIA', '2019-12-24 13:24:35', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:24:35', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (30, 27, 6600013, '6600013', '2019-12-24 13:24:56', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505010100008, '102505010100008', 'PUPUK CUSO4', 'KG', 31, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:24:56', 201912, 2019, 'merk apa aja 2', '2019-12-24 13:24:56', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:24:56', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (31, 28, 6600014, '6600014', '2019-12-24 13:25:15', 20191224, 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', 102505700000002, '102505700000002', 'SOLAR', 'LTR', 20000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:15', 201912, 2019, 'SOLAR', '2019-12-24 13:25:15', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:25:15', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (32, 29, 6600015, '6600015', '2019-12-24 13:25:36', 20191224, 14, 'LEGAL', 6600015, 'EST-SPP/SWJ/12/19/6600015', 102505910000148, '102505910000148', 'LETTER FILE 401', 'BH', 40, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:36', 201912, 2019, '401', '2019-12-24 13:25:36', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:25:36', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (33, 30, 6600014, '6600014', '2019-12-24 13:25:38', 20191224, 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', 102505700000001, '102505700000001', 'BENSIN', 'LTR', 2000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:38', 201912, 2019, 'BENSIN', '2019-12-24 13:25:38', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:25:38', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (34, 31, 6600013, '6600013', '2019-12-24 13:25:51', 20191224, 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', 102505930000042, '102505930000042', 'STOPMAP', 'PCS', 5, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:25:51', 201912, 2019, 'merk apa aja 3', '2019-12-24 13:25:51', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:25:51', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (35, 32, 6600016, '6600016', '2019-12-24 13:26:20', 20191224, 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', 102505990000018, '102505990000018', 'KASUR SINGLE BED', 'SET', 4, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:26:20', 201912, 2019, 'TIDUR', '2019-12-24 13:26:20', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:26:20', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (36, 33, 6600016, '6600016', '2019-12-24 13:26:48', 20191224, 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', 102505990000015, '102505990000015', 'BANTAL', 'BH', 4, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:26:48', 201912, 2019, 'TIDUR', '2019-12-24 13:26:48', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:26:48', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (37, 34, 6600017, '6600017', '2019-12-24 13:27:03', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505930000042, '102505930000042', 'STOPMAP', 'PCS', 1, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:03', 201912, 2019, 'stopmap 1', '2019-12-24 13:27:03', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:27:03', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (38, 35, 6600017, '6600017', '2019-12-24 13:27:19', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505930000043, '102505930000043', 'STOPMAP BATIK', 'PCS', 2, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:19', 201912, 2019, 'mmerk 2', '2019-12-24 13:27:19', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:27:19', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (39, 36, 6600017, '6600017', '2019-12-24 13:27:44', 20191224, 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', 102505910000159, '102505910000159', 'MAP TULANG PLASTIK', 'PCS', 3, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:27:44', 201912, 2019, 'merk 3', '2019-12-24 13:27:44', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:27:44', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (40, 37, 6600018, '6600018', '2019-12-24 13:28:44', 20191224, 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', 102505850000231, '102505850000231', 'KARUNG PLASTIK 95 X 130 CM', 'LBR', 3000, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:28:44', 201912, 2019, 'ASUS', '2019-12-24 13:28:44', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:28:44', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (41, 38, 6600018, '6600018', '2019-12-24 13:29:33', 20191224, 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', 102505790000365, '102505790000365', 'SARUNG TANGAN', 'PSG', 200, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:29:33', 201912, 2019, 'SUBARU', '2019-12-24 13:29:33', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:29:33', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (42, 39, 1100001, '1100001', '2019-12-24 13:29:45', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000057, '102505990000057', 'KOMPUTER SET', 'SET', 2, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:29:45', 201912, 2019, 'merk cpu set 1', '2019-12-24 13:29:45', 'User HO', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '', 'INSERT', 'User HO membuat SPP baru', '2019-12-24 13:29:45', 'User HO', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (43, 40, 6600019, '6600019', '2019-12-24 13:30:29', 20191224, 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', 102505410000220, '102505410000220', 'BOLA LAMPU KAKI 1 MH 056215', 'PCS', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:29', 201912, 2019, 'lampu kaki', '2019-12-24 13:30:29', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:30:29', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (44, 41, 6600019, '6600019', '2019-12-24 13:30:30', 20191224, 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', 102505730000061, '102505730000061', 'BOLA LAMPU XL-60 WATT', 'PCS', 10, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:30', 201912, 2019, '60 wat', '2019-12-24 13:30:30', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:30:30', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (45, 42, 6600020, '6600020', '2019-12-24 13:30:32', 20191224, 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', 102505850000128, '102505850000128', 'BATTERY ICOM BP-222N (ICOM IC-V8)', 'PCS', 33, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:30:32', 201912, 2019, 'ICOM', '2019-12-24 13:30:32', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:30:32', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (46, 43, 1100001, '1100001', '2019-12-24 13:30:32', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000048, '102505990000048', 'UPS', 'UNIT', 1, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:30:32', 201912, 2019, 'merk ups', '2019-12-24 13:30:32', 'User HO', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '', 'INSERT', 'User HO membuat SPP baru', '2019-12-24 13:30:32', 'User HO', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (47, 44, 6600020, '6600020', '2019-12-24 13:31:03', 20191224, 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', 102505850000132, '102505850000132', 'ANTENNA (IC-V8/IC-V80)', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:31:03', 201912, 2019, 'ICOM', '2019-12-24 13:31:03', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:31:03', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (48, 45, 6600021, '6600021', '2019-12-24 13:31:47', 20191224, 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', 102505910000046, '102505910000046', 'TINTA HITAM', 'BTL', 12, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:31:47', 201912, 2019, 'EPSON', '2019-12-24 13:31:47', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:31:47', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (49, 46, 6600021, '6600021', '2019-12-24 13:32:09', 20191224, 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', 102505910000008, '102505910000008', 'TINTA PRINTER HP (WARNA)', 'PCS', 40, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-24 13:32:09', 201912, 2019, 'EPSON', '2019-12-24 13:32:09', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:32:09', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (50, 47, 1100001, '1100001', '2019-12-24 13:32:34', 20191224, 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', 102505990000035, '102505990000035', 'CAMERA DIGITAL', 'UNIT', 2, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 13:32:34', 201912, 2019, 'camdig', '2019-12-24 13:32:34', 'User HO', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '', 'INSERT', 'User HO membuat SPP baru', '2019-12-24 13:32:34', 'User HO', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `item_ppo_history` VALUES (51, 48, 6100001, '6100001', '2019-12-24 14:48:24', 20191224, 8, 'TEKNIK', 6100001, 'EST-SPP/SWJ/12/19/6100001', 102505700000002, '102505700000002', 'SOLAR', 'LTR', 2000, NULL, 0, 0, 0, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '2019-12-24 14:48:24', 201912, 2019, 'solar', '2019-12-24 14:48:24', 'Dept Head', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'HO', 0, 0, 0, '', 0, '', 'INSERT', 'Dept Head membuat SPP baru', '2019-12-24 14:48:24', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `item_ppo_history` VALUES (52, 49, 6600022, '6600022', '2019-12-27 13:15:48', 20191227, 11, 'MIS', 6600022, 'EST-SPPI/SWJ/12/19/6600022', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 20, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 13:15:48', 201912, 2019, 'asus', '2019-12-27 13:15:48', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-27 13:15:48', 'User Gudang', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `item_ppo_history` VALUES (53, 50, 6600023, '6600023', '2019-12-27 16:12:46', 20191227, 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:12:46', 201912, 2019, 'b100', '2019-12-27 16:12:46', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-27 16:12:46', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `item_ppo_history` VALUES (54, 51, 6600023, '6600023', '2019-12-27 16:13:18', 20191227, 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 50, NULL, 0, 0, 0, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '2019-12-27 16:13:18', 201912, 2019, 'b200', '2019-12-27 16:13:18', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', b'0', 'SITE', 0, 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-27 16:13:18', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for keluarbrgitem
-- ----------------------------
DROP TABLE IF EXISTS `keluarbrgitem`;
CREATE TABLE `keluarbrgitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty2` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of keluarbrgitem
-- ----------------------------
INSERT INTO `keluarbrgitem` VALUES (1, 102505990000189, '102505990000189', 'ALAT ALAT KOMPUTER', 'UNIT', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', '-', 10, 10, '2019-12-24 00:00:00', 6600001, '6600001', 'EST-BKB/SWJ/12/2019/00001', '2019-12-24 15:07:01', 20191224, 2019, '2018-01-01 00:00:00', 201801, 0, '-', 0, '-', NULL, 800510050000000, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `keluarbrgitem` VALUES (2, 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 'BARANG LOGISTIK TRANSIT ( ASET )', '06', '06', 6600004, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', '-', 0, 0, '2019-12-24 00:00:00', 6600001, '6600001', 'EST-BKB/SWJ/12/2019/00001', '2019-12-24 15:07:04', 20191224, 2019, '2018-01-01 00:00:00', 201801, 0, '-', 0, '-', NULL, 800510050000000, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `keluarbrgitem` VALUES (3, 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', '03', '06', 6600002, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '01', 'C34', 20, 20, '2019-12-24 00:00:00', 6600002, '6600002', 'EST-BKB/SWJ/12/2019/00002', '2019-12-24 15:07:30', 20191224, 2019, '2018-01-01 00:00:00', 201801, 0, '-', 700501200805100, '700501200805100', NULL, 700501200805107, '700501200805107', 'PENABURAN PUPUK (ORGANIK)', 1, '', 'User Gudang', 0, 0);
INSERT INTO `keluarbrgitem` VALUES (4, 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', '06', '06', 6600005, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', '-', 20, 20, '2019-12-27 00:00:00', 6600003, '6600003', 'EST-BKB/SWJ/12/2019/00003', '2019-12-27 13:31:00', 20191227, 2019, '2019-12-27 00:00:00', 202001, 0, 'urgent', 0, '-', NULL, 800510050000000, '800510050000000', 'BIAYA PEMELIHARAAN KOMPUTER', 0, NULL, 'User Gudang', 0, 0);

-- ----------------------------
-- Table structure for keluarbrgitem_history
-- ----------------------------
DROP TABLE IF EXISTS `keluarbrgitem_history`;
CREATE TABLE `keluarbrgitem_history`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty2` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for keluarbrgitem_mutasi
-- ----------------------------
DROP TABLE IF EXISTS `keluarbrgitem_mutasi`;
CREATE TABLE `keluarbrgitem_mutasi`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty2` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `flag_lpb` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for list_level_approval
-- ----------------------------
DROP TABLE IF EXISTS `list_level_approval`;
CREATE TABLE `list_level_approval`  (
  `spp_appr_ktu` int(11) NULL DEFAULT NULL,
  `spp_appr_kasie_agronomi` int(11) NULL DEFAULT NULL,
  `spp_appr_kasie_hrd_ga` int(11) NULL DEFAULT NULL,
  `spp_appr_gm` int(11) NULL DEFAULT NULL,
  `spp_appr_mill_mgr` int(11) NULL DEFAULT NULL,
  `spp_appr_dept_head` int(11) NULL DEFAULT NULL,
  `spp_appr_dir_ops` int(11) NULL DEFAULT NULL,
  `bpb_appr_asisten_afd` int(11) NULL DEFAULT NULL,
  `bpb_appr_kepala_kebun` int(11) NULL DEFAULT NULL,
  `bpb_appr_kasie_agronomi` int(11) NULL DEFAULT NULL,
  `bpb_appr_ktu` int(11) NULL DEFAULT NULL,
  `bpb_appr_gm` int(11) NULL DEFAULT NULL,
  `bkb_appr_ktu` int(11) NULL DEFAULT NULL,
  `bkb_appr_kasie_gudang` int(11) NULL DEFAULT NULL,
  `bkb_appr_kasie_pembukuan` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list_level_approval
-- ----------------------------
INSERT INTO `list_level_approval` VALUES (11, 13, 12, 15, 16, 21, 22, 20, 10, 13, 11, 15, 11, 18, 19);

-- ----------------------------
-- Table structure for masukitem
-- ----------------------------
DROP TABLE IF EXISTS `masukitem`;
CREATE TABLE `masukitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `kdpt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOKAL` smallint(6) NULL DEFAULT NULL,
  `ASSET` smallint(6) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `ttgtxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `BATAL` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kurs` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konversi` double NULL DEFAULT NULL,
  `USER` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of masukitem
-- ----------------------------
INSERT INTO `masukitem` VALUES (1, '06', 3100002, '3100002', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 200, '2019-12-24 00:00:00', 6600001, '6600001', '2019-12-24 14:31:05', 20191224, 2019, '2018-01-01', 201801, 0, 'Khusus mahasiswa yang pengerjaan tugas atau skripsinya membutuhkan proses olah grafis data seperti 3D modelling, video editing, dan lain-lain. Terdapat dua pilihan graphic card yaitu Nvidia Geforce GTX dan Radeon Graphics, pilihlah yang versi terkini', 'SITE', 'EST/BWJ/JKT/12/19/3100002', 'EST-LPB/SWJ/12/19/00001', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (2, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 1000000, '2019-12-24 00:00:00', 6600002, '6600002', '2019-12-24 14:21:10', 20191224, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00002', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (3, '06', 3100003, '3100003', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 500, '2019-12-24 00:00:00', 6600003, '6600003', '2019-12-24 14:21:19', 20191224, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100003', 'EST-LPB/SWJ/12/19/00003', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (4, '06', 3100003, '3100003', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 100, '2019-12-24 00:00:00', 6600003, '6600003', '2019-12-24 14:21:21', 20191224, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100003', 'EST-LPB/SWJ/12/19/00003', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (5, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 1, '2019-12-26 00:00:00', 6600004, '6600004', '2019-12-26 14:23:42', 20191226, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (6, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 1, '2019-12-26 00:00:00', 6600005, '6600005', '2019-12-26 14:26:58', 20191226, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00005', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (7, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 5, '2019-12-26 00:00:00', 6600006, '6600006', '2019-12-26 14:41:51', 20191226, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00006', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (8, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 1, '2019-12-26 00:00:00', 6600007, '6600007', '2019-12-26 14:56:17', 20191226, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00007', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (9, '06', 3100004, '3100004', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 12, '2019-12-26 00:00:00', 6600008, '6600008', '2019-12-26 15:17:46', 20191226, 2019, '2018-01-01', 201801, 0, '-', 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00008', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);
INSERT INTO `masukitem` VALUES (10, '06', 3300001, '3300001', 0, 0, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 20, '2019-12-27 00:00:00', 6600009, '6600009', '2019-12-27 13:26:09', 20191227, 2019, '2019-12-27', 202001, 0, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 'EST-LPB/SWJ/12/19/00009', 0, NULL, 'Rp', 0, 'User Gudang', 0, 0);

-- ----------------------------
-- Table structure for masukitem_history
-- ----------------------------
DROP TABLE IF EXISTS `masukitem_history`;
CREATE TABLE `masukitem_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `kdpt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOKAL` smallint(6) NULL DEFAULT NULL,
  `ASSET` smallint(6) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `ttgtxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `BATAL` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kurs` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konversi` double NULL DEFAULT NULL,
  `USER` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pemesan
-- ----------------------------
DROP TABLE IF EXISTS `pemesan`;
CREATE TABLE `pemesan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pemesan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pemesan
-- ----------------------------
INSERT INTO `pemesan` VALUES (23, '02', 'AGUS P', 'A');
INSERT INTO `pemesan` VALUES (24, '01', 'RAYMOND', 'A');
INSERT INTO `pemesan` VALUES (25, '03', 'IRVAN', 'A');
INSERT INTO `pemesan` VALUES (26, '04', 'FERDINAND', 'A');

-- ----------------------------
-- Table structure for po
-- ----------------------------
DROP TABLE IF EXISTS `po`;
CREATE TABLE `po`  (
  `id` int(11) NULL DEFAULT NULL,
  `kd_dept` int(11) NULL DEFAULT NULL,
  `ket_dept` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_budet` double NULL DEFAULT NULL,
  `kd_subbudget` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_subbudget` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_supply` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pemesan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pemesan` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Flag 1 jika qty LPB = qty PO',
  `no_refppo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_refppo` datetime(0) NULL DEFAULT NULL,
  `tgl_reftxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `bayar` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempo_bayar` double NULL DEFAULT NULL,
  `lokasikirim` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempo_kirim` double NULL DEFAULT NULL,
  `lokasi_beli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_acc` double NULL DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input nilai pph',
  `ket_acc` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input no penawaran di menu PO',
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ppn` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `totalbayar` double NULL DEFAULT NULL,
  `ket_kirim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noreftxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `uangmuka` double NULL DEFAULT NULL,
  `voucher` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `terbayar` smallint(6) NULL DEFAULT NULL,
  `nopp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `kirim` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of po
-- ----------------------------
INSERT INTO `po` VALUES (1, 0, '', '', 0, '0', NULL, '0002', 'A YONG, BPK.', '27', 'Staff Purchasing', 3100001, '3100001', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 3, 'jakarta', 3, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '001-01', '2019-12-24 13:51:56', 201912, 2019, '2019-12-24 13:51:56', 'Staff Purchasing', 'N', 458835000, 'keperluan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100001', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (2, 0, '', '', 0, '0', NULL, '0004', 'ABADI, PD', '27', 'Staff Purchasing', 3100002, '3100002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Kredit', 0, 'HO', 0, 'SITE', 'Pilih prosesor i3, i5, atau i7 dan perhatikan juga huruf dan angka dibelakangnya, misalnya i7 8550 U. Angka awal 8 pada 8550 menunjukkan generasi prosesor yaitu generasi ke-8, yang lebih bagus nyaris ', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '-', '2019-12-24 13:52:51', 201912, 2019, '2019-12-24 13:52:51', 'Staff Purchasing', 'Y', 70500000, 'SEGERA', 'HO', 'EST/BWJ/JKT/12/19/3100002', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (3, 0, '', '', 0, '0', NULL, '0004', 'ABADI, PD', '27', 'Staff Purchasing', 3100003, '3100003', 0, '1', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 5, 'jakarta', 5, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '002-02', '2019-12-24 13:54:49', 201912, 2019, '2019-12-24 13:54:49', 'Staff Purchasing', 'N', 9500000, 'perlengkapan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100003', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (4, 0, '', '', 0, '0', NULL, '0003', 'ABADI JAYA, TOKO', '27', 'Staff Purchasing', 3100004, '3100004', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 2, 'jakarta', 2, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '003-03', '2019-12-24 13:57:03', 201912, 2019, '2019-12-24 13:57:03', 'Staff Purchasing', 'N', 4650000, 'perlengkapan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100004', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (5, 0, '', '', 0, '0', NULL, '0003', 'ABADI JAYA, TOKO', '28', 'User Gudang', 3300001, '3300001', 0, '1', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'RO', 'tes', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 13:22:34', 201912, 2019, '2019-12-27 13:22:34', 'User Gudang', 'N', 20000000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (6, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300002, '3300002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:22:55', 201912, 2019, '2019-12-27 16:22:55', 'User Gudang', 'N', 500000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 0, '0', 0, NULL, 0, 1);
INSERT INTO `po` VALUES (7, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300003, '3300003', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:45:34', 201912, 2019, '2019-12-27 16:45:34', 'User Gudang', 'N', 1500000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 0, '0', 0, NULL, 0, 1);

-- ----------------------------
-- Table structure for po_history
-- ----------------------------
DROP TABLE IF EXISTS `po_history`;
CREATE TABLE `po_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `kd_dept` int(11) NULL DEFAULT NULL,
  `ket_dept` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_budet` double NULL DEFAULT NULL,
  `kd_subbudget` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_subbudget` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_supply` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pemesan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pemesan` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_refppo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_refppo` datetime(0) NULL DEFAULT NULL,
  `tgl_reftxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `bayar` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempo_bayar` double NULL DEFAULT NULL,
  `lokasikirim` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempo_kirim` double NULL DEFAULT NULL,
  `lokasi_beli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namapt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_acc` double NULL DEFAULT NULL,
  `ket_acc` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Di logistik web, ini untuk data input no penawaran di menu PO',
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ppn` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `totalbayar` double NULL DEFAULT NULL,
  `ket_kirim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noreftxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `uangmuka` double NULL DEFAULT NULL,
  `voucher` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `terbayar` smallint(6) NULL DEFAULT NULL,
  `nopp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `kirim` smallint(6) NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of po_history
-- ----------------------------
INSERT INTO `po_history` VALUES (1, 1, 0, '', '', 0, '0', NULL, '0002', 'A YONG, BPK.', '27', 'Staff Purchasing', 3100001, '3100001', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 3, 'jakarta', 3, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '001-01', '2019-12-24 13:51:56', 201912, 2019, '2019-12-24 13:51:56', 'Staff Purchasing', 'N', 0, 'keperluan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100001', 0, '0', 0, NULL, 0, 1, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:51:56', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `po_history` VALUES (2, 2, 0, '', '', 0, '0', NULL, '0004', 'ABADI, PD', '27', 'Staff Purchasing', 3100002, '3100002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Kredit', 0, 'HO', 0, 'SITE', 'Pilih prosesor i3, i5, atau i7 dan perhatikan juga huruf dan angka dibelakangnya, misalnya i7 8550 U. Angka awal 8 pada 8550 menunjukkan generasi prosesor yaitu generasi ke-8, yang lebih bagus nyaris ', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '-', '2019-12-24 13:52:51', 201912, 2019, '2019-12-24 13:52:51', 'Staff Purchasing', 'Y', 0, 'SEGERA', 'HO', 'EST/BWJ/JKT/12/19/3100002', 0, '0', 0, NULL, 0, 1, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:52:51', 'Staff Purchasing', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `po_history` VALUES (3, 3, 0, '', '', 0, '0', NULL, '0004', 'ABADI, PD', '27', 'Staff Purchasing', 3100003, '3100003', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 5, 'jakarta', 5, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '002-02', '2019-12-24 13:54:49', 201912, 2019, '2019-12-24 13:54:49', 'Staff Purchasing', 'N', 0, 'perlengkapan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100003', 0, '0', 0, NULL, 0, 1, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:54:49', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `po_history` VALUES (4, 4, 0, '', '', 0, '0', NULL, '0003', 'ABADI JAYA, TOKO', '27', 'Staff Purchasing', 3100004, '3100004', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-24 00:00:00', 20191224, '0000-00-00 00:00:00', 0, 'Cash', 2, 'jakarta', 2, 'HO', '-', '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 0, '003-03', '2019-12-24 13:57:03', 201912, 2019, '2019-12-24 13:57:03', 'Staff Purchasing', 'N', 0, 'perlengkapan kerja', 'HO', 'EST/BWJ/JKT/12/19/3100004', 0, '0', 0, NULL, 0, 1, 'INSERT', 'Staff Purchasing membuat PO baru', '2019-12-24 13:57:03', 'Staff Purchasing', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `po_history` VALUES (5, 5, 0, '', '', 0, '0', NULL, '0003', 'ABADI JAYA, TOKO', '28', 'User Gudang', 3300001, '3300001', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'RO', 'tes', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 13:22:22', 201912, 2019, '2019-12-27 13:22:22', 'User Gudang', 'N', 0, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 0, '0', 0, NULL, 0, 1, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 13:22:22', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (6, 5, 0, '', '', 0, '0', NULL, '0003', 'ABADI JAYA, TOKO', '28', 'User Gudang', 3300001, '3300001', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'RO', 'tes', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 13:22:22', 201912, 2019, '2019-12-27 13:22:22', 'User Gudang', 'N', 2000000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 0, '0', 0, NULL, 0, 1, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300001', '2019-12-27 13:22:34', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (7, 6, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300002, '3300002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:18:47', 201912, 2019, '2019-12-27 16:18:47', 'User Gudang', 'N', 0, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 0, '0', 0, NULL, 0, 1, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:18:48', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (8, 6, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300002, '3300002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:18:47', 201912, 2019, '2019-12-27 16:18:47', 'User Gudang', 'N', 1550000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 0, '0', 0, NULL, 0, 1, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300002', '2019-12-27 16:22:19', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (9, 6, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300002, '3300002', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:22:20', 201912, 2019, '2019-12-27 16:22:20', 'User Gudang', 'N', 1550000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300002', 0, '0', 0, NULL, 0, 1, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300002', '2019-12-27 16:22:55', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (10, 7, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300003, '3300003', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:45:11', 201912, 2019, '2019-12-27 16:45:11', 'User Gudang', 'N', 0, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 0, '0', 0, NULL, 0, 1, 'INSERT', 'User Gudang membuat PO baru', '2019-12-27 16:45:11', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `po_history` VALUES (11, 7, 0, '', '', 0, '0', NULL, '562', 'VENUS COMPUTER/YUNITA TANWIN', '28', 'User Gudang', 3300003, '3300003', 0, '0', '', '0000-00-00 00:00:00', 0, '2019-12-27 00:00:00', 20191227, '0000-00-00 00:00:00', 0, 'Cash', 0, 'site', 0, 'SITE', 'urgent', '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 0, '-', '2019-12-27 16:45:11', 201912, 2019, '2019-12-27 16:45:11', 'User Gudang', 'N', 225000, 'segera', 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300003', 0, '0', 0, NULL, 0, 1, 'DATA LAMA (SEBELUM UPDATE)', 'User Gudang melakukan perubahan data PO EST/SWJ/PO-Lokal/JKT/12/19/3300003', '2019-12-27 16:45:34', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for pp
-- ----------------------------
DROP TABLE IF EXISTS `pp`;
CREATE TABLE `pp`  (
  `id` int(11) NULL DEFAULT NULL,
  `nopp` double NULL DEFAULT NULL,
  `nopptxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglpp` datetime(0) NULL DEFAULT NULL,
  `tglpptxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `ref_po` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_supply` double NULL DEFAULT NULL,
  `kode_supplytxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kepada` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `KURS` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `pajak` double NULL DEFAULT NULL,
  `jumlahpo` double NULL DEFAULT NULL,
  `KODE_BPO` double NULL DEFAULT NULL,
  `jumlah_bpo` double NULL DEFAULT NULL,
  `total_po` double NULL DEFAULT NULL,
  `terbilang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `status_vou` smallint(6) NULL DEFAULT NULL,
  `no_vou` double NULL DEFAULT NULL,
  `no_voutxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_vou` datetime(0) NULL DEFAULT NULL,
  `tgl_voutxt` double NULL DEFAULT NULL,
  `tgl_bayar_real` datetime(0) NULL DEFAULT NULL,
  `kasir_bayar` double NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_account` double NULL DEFAULT NULL,
  `nama_account` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pp
-- ----------------------------
INSERT INTO `pp` VALUES (1, 660001, '660001', 3300001, '3300001', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 3, '0003', 'ABADI JAYA, TOKO', 'ABADI JAYA, TOKO', 'Cash', 'Rp', 20100000, 0, 20000000, 0, 100000, 20100000, 'Dua Puluh Juta Seratus Ribu', 'pelunasaan', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 00:00:00', 202001, 'User Gudang', '2019-12-27 13:45:05', 0, NULL, NULL, NULL, NULL, NULL, 20100000, 0, '', 0, '', 0);

-- ----------------------------
-- Table structure for pp_history
-- ----------------------------
DROP TABLE IF EXISTS `pp_history`;
CREATE TABLE `pp_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `nopp` double NULL DEFAULT NULL,
  `nopptxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglpp` datetime(0) NULL DEFAULT NULL,
  `tglpptxt` double NULL DEFAULT NULL,
  `tglpo` datetime(0) NULL DEFAULT NULL,
  `tglpotxt` double NULL DEFAULT NULL,
  `ref_po` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_supply` double NULL DEFAULT NULL,
  `kode_supplytxt` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kepada` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bayar` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `KURS` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `pajak` double NULL DEFAULT NULL,
  `jumlahpo` double NULL DEFAULT NULL,
  `KODE_BPO` double NULL DEFAULT NULL,
  `jumlah_bpo` double NULL DEFAULT NULL,
  `total_po` double NULL DEFAULT NULL,
  `terbilang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `status_vou` smallint(6) NULL DEFAULT NULL,
  `no_vou` double NULL DEFAULT NULL,
  `no_voutxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_vou` datetime(0) NULL DEFAULT NULL,
  `tgl_voutxt` double NULL DEFAULT NULL,
  `tgl_bayar_real` datetime(0) NULL DEFAULT NULL,
  `kasir_bayar` double NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_account` double NULL DEFAULT NULL,
  `nama_account` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pp_history
-- ----------------------------
INSERT INTO `pp_history` VALUES (1, 1, 660001, '660001', 3300001, '3300001', '2019-12-27 00:00:00', 20191227, '2019-12-27 00:00:00', 20191227, 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 3, '0003', 'ABADI JAYA, TOKO', 'ABADI JAYA, TOKO', 'Cash', 'Rp', 20100000, 0, 20000000, 0, 100000, 20100000, 'Dua Puluh Juta Seratus Ribu', 'pelunasaan', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 00:00:00', 202001, 'User Gudang', '2019-12-27 13:45:05', 0, NULL, NULL, NULL, NULL, NULL, 20100000, 0, '', 0, '', 0, 'INSERT', 'User Gudang membuat PP baru 660001', '2019-12-27 13:45:05', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for ppo
-- ----------------------------
DROP TABLE IF EXISTS `ppo`;
CREATE TABLE `ppo`  (
  `id` int(11) NULL DEFAULT NULL,
  `kpd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `tgltrm` datetime(0) NULL DEFAULT NULL,
  `kodedept` double NULL DEFAULT NULL,
  `namadept` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` double NULL DEFAULT NULL,
  `noreftxt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglref` datetime(0) NULL DEFAULT NULL,
  `ket` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_acc` double NULL DEFAULT NULL,
  `ket_acc` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN',
  `status2` smallint(6) NULL DEFAULT NULL COMMENT '0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN',
  `TGL_APPROVE` datetime(0) NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `po` smallint(6) NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'Di aplikasi logistik web untuk store data alasan batal spp/ubah spp/revisi quantity'
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ppo
-- ----------------------------
INSERT INTO `ppo` VALUES (1, 'Bagian Purchasing', 6600001, '6600001', 'SPP', '2019-12-24 13:06:44', 20191224, '2019-12-24 13:06:44', 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 13:06:44', 'UNTUK PERLENGKAPAN KERJA GIS', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:06:44', 201912, 2019, '2019-12-24 13:06:44', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');
INSERT INTO `ppo` VALUES (2, 'Bagian Purchasing', 6600002, '6600002', 'SPP', '2019-12-24 13:16:31', 20191224, '2019-12-24 13:16:31', 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 13:16:31', 'perlengkapan komputer', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:16:31', 201912, 2019, '2019-12-24 13:16:31', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');
INSERT INTO `ppo` VALUES (3, 'Bagian Purchasing', 6600003, '6600003', 'SPP', '2019-12-24 13:17:53', 20191224, '2019-12-24 13:17:53', 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 13:17:53', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:17:53', 201912, 2019, '2019-12-24 13:17:53', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');
INSERT INTO `ppo` VALUES (4, 'Bagian Purchasing', 6600004, '6600004', 'SPP', '2019-12-24 13:18:06', 20191224, '2019-12-24 13:18:06', 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', '2019-12-24 13:18:06', 'PUPUK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:18:06', 201912, 2019, '2019-12-24 13:18:06', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (5, 'Bagian Purchasing', 6600005, '6600005', 'SPP', '2019-12-24 13:19:27', 20191224, '2019-12-24 13:19:27', 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 13:19:27', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:19:27', 201912, 2019, '2019-12-24 13:19:27', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');
INSERT INTO `ppo` VALUES (6, 'Bagian Purchasing', 6600006, '6600006', 'SPP', '2019-12-24 13:20:02', 20191224, '2019-12-24 13:20:02', 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', '2019-12-24 13:20:02', 'DODOS', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:20:02', 201912, 2019, '2019-12-24 13:20:02', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (7, 'Bagian Purchasing', 6600007, '6600007', 'SPP', '2019-12-24 13:21:04', 20191224, '2019-12-24 13:21:04', 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', '2019-12-24 13:21:04', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:21:04', 201912, 2019, '2019-12-24 13:21:04', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (8, 'Bagian Purchasing', 6600008, '6600008', 'SPP', '2019-12-24 13:21:53', 20191224, '2019-12-24 13:21:53', 3, 'PABRIK', 6600008, 'EST-SPP/SWJ/12/19/6600008', '2019-12-24 13:21:53', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:21:53', 201912, 2019, '2019-12-24 13:21:53', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (9, 'Bagian Purchasing', 6600009, '6600009', 'SPP', '2019-12-24 13:22:36', 20191224, '2019-12-24 13:22:36', 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', '2019-12-24 13:22:36', 'PUPUK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:22:36', 201912, 2019, '2019-12-24 13:22:36', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (10, 'Bagian Purchasing', 6600010, '6600010', 'SPP', '2019-12-24 13:22:50', 20191224, '2019-12-24 13:22:50', 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', '2019-12-24 13:22:50', 'keperluan karyawab', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:22:50', 201912, 2019, '2019-12-24 13:22:50', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (11, 'Bagian Purchasing', 6600011, '6600011', 'SPP', '2019-12-24 13:23:30', 20191224, '2019-12-24 13:23:30', 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', '2019-12-24 13:23:30', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:23:30', 201912, 2019, '2019-12-24 13:23:30', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (12, 'Bagian Purchasing', 6600012, '6600012', 'SPP', '2019-12-24 13:24:21', 20191224, '2019-12-24 13:24:21', 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', '2019-12-24 13:24:21', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:24:21', 201912, 2019, '2019-12-24 13:24:21', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (13, 'Bagian Purchasing', 6600013, '6600013', 'SPP', '2019-12-24 13:24:28', 20191224, '2019-12-24 13:24:28', 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', '2019-12-24 13:24:28', 'tes ', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:24:28', 201912, 2019, '2019-12-24 13:24:28', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (14, 'Bagian Purchasing', 6600014, '6600014', 'SPP', '2019-12-24 13:25:15', 20191224, '2019-12-24 13:25:15', 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', '2019-12-24 13:25:15', 'SOLAR', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:25:15', 201912, 2019, '2019-12-24 13:25:15', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (15, 'Bagian Purchasing', 6600015, '6600015', 'SPP', '2019-12-24 13:25:36', 20191224, '2019-12-24 13:25:36', 14, 'LEGAL', 6600015, 'EST-SPP/SWJ/12/19/6600015', '2019-12-24 13:25:36', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:25:36', 201912, 2019, '2019-12-24 13:25:36', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (16, 'Bagian Purchasing', 6600016, '6600016', 'SPP', '2019-12-24 13:26:20', 20191224, '2019-12-24 13:26:20', 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', '2019-12-24 13:26:20', 'KASUR', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:26:20', 201912, 2019, '2019-12-24 13:26:20', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (17, 'Bagian Purchasing', 6600017, '6600017', 'SPPI', '2019-12-24 13:27:03', 20191224, '2019-12-24 13:27:03', 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 13:27:03', 'tes sppi', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:27:03', 201912, 2019, '2019-12-24 13:27:03', 'User SITE', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (18, 'Bagian Purchasing', 6600018, '6600018', 'SPP', '2019-12-24 13:28:44', 20191224, '2019-12-24 13:28:44', 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', '2019-12-24 13:28:44', 'KARUNG', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:28:44', 201912, 2019, '2019-12-24 13:28:44', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (19, 'Bagian Purchasing', 1100001, '1100001', 'SPPA', '2019-12-24 13:29:45', 20191224, '2019-12-24 13:29:45', 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', '2019-12-24 13:29:45', 'tes sppa', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', '2019-12-24 13:29:45', 201912, 2019, '2019-12-24 13:29:45', 'User HO', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'HO', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (20, 'Bagian Purchasing', 6600019, '6600019', 'SPP', '2019-12-24 13:30:29', 20191224, '2019-12-24 13:30:29', 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', '2019-12-24 13:30:29', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:30:29', 201912, 2019, '2019-12-24 13:30:29', 'User Gudang', 'SEBAGIAN', 2, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (21, 'Bagian Purchasing', 6600020, '6600020', 'SPP', '2019-12-24 13:30:32', 20191224, '2019-12-24 13:30:32', 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', '2019-12-24 13:30:32', 'BATTERY', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:30:32', 201912, 2019, '2019-12-24 13:30:32', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (22, 'Bagian Purchasing', 6600021, '6600021', 'SPP', '2019-12-24 13:31:47', 20191224, '2019-12-24 13:31:47', 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', '2019-12-24 13:31:47', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:31:47', 201912, 2019, '2019-12-24 13:31:47', 'User Gudang', 'UBAH', 6, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (23, 'Bagian Purchasing', 6100001, '6100001', 'SPP', '2019-12-24 14:48:24', 20191224, '2019-12-24 14:48:24', 8, 'TEKNIK', 6100001, 'EST-SPP/SWJ/12/19/6100001', '2019-12-24 14:48:24', 'solar', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', '2019-12-24 14:48:24', 201912, 2019, '2019-12-24 14:48:24', 'Dept Head', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'HO', 0, 0, '', 0, '');
INSERT INTO `ppo` VALUES (24, 'Bagian Purchasing', 6600022, '6600022', 'SPPI', '2019-12-27 13:15:48', 20191227, '2019-12-27 13:15:48', 11, 'MIS', 6600022, 'EST-SPPI/SWJ/12/19/6600022', '2019-12-27 13:15:48', 'untuk servis', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 13:15:48', 201912, 2019, '2019-12-27 13:15:48', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');
INSERT INTO `ppo` VALUES (25, 'Bagian Purchasing', 6600023, '6600023', 'SPPI', '2019-12-27 16:12:46', 20191227, '2019-12-27 16:12:46', 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 16:12:46', 'perbaikan pc', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 16:12:46', 201912, 2019, '2019-12-27 16:12:46', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 1, 0, '', 0, '');

-- ----------------------------
-- Table structure for ppo_history
-- ----------------------------
DROP TABLE IF EXISTS `ppo_history`;
CREATE TABLE `ppo_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `kpd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noppo` double NULL DEFAULT NULL,
  `noppotxt` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglppo` datetime(0) NULL DEFAULT NULL,
  `tglppotxt` double NULL DEFAULT NULL,
  `tgltrm` datetime(0) NULL DEFAULT NULL,
  `kodedept` double NULL DEFAULT NULL,
  `namadept` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` double NULL DEFAULT NULL,
  `noreftxt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglref` datetime(0) NULL DEFAULT NULL,
  `ket` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_acc` double NULL DEFAULT NULL,
  `ket_acc` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `periodetxt` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `tglisi` datetime(0) NULL DEFAULT NULL,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status2` smallint(6) NULL DEFAULT NULL,
  `TGL_APPROVE` datetime(0) NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `po` smallint(6) NULL DEFAULT NULL,
  `kode_budget` double NULL DEFAULT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `main_acct` double NULL DEFAULT NULL,
  `nama_main` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ppo_history
-- ----------------------------
INSERT INTO `ppo_history` VALUES (1, 1, 'Bagian Purchasing', 6600001, '6600001', 'SPP', '2019-12-24 13:06:44', 20191224, '2019-12-24 13:06:44', 10, 'GIS', 6600001, 'EST-SPP/SWJ/12/19/6600001', '2019-12-24 13:06:44', 'UNTUK PERLENGKAPAN KERJA GIS', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:06:44', 201912, 2019, '2019-12-24 13:06:44', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:06:44', 'User SITE', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `ppo_history` VALUES (2, 2, 'Bagian Purchasing', 6600002, '6600002', 'SPP', '2019-12-24 13:16:31', 20191224, '2019-12-24 13:16:31', 11, 'MIS', 6600002, 'EST-SPP/SWJ/12/19/6600002', '2019-12-24 13:16:31', 'perlengkapan komputer', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:16:31', 201912, 2019, '2019-12-24 13:16:31', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:16:31', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (3, 3, 'Bagian Purchasing', 6600003, '6600003', 'SPP', '2019-12-24 13:17:53', 20191224, '2019-12-24 13:17:53', 1, 'TANAMAN', 6600003, 'EST-SPP/SWJ/12/19/6600003', '2019-12-24 13:17:53', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:17:53', 201912, 2019, '2019-12-24 13:17:53', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:17:53', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (4, 4, 'Bagian Purchasing', 6600004, '6600004', 'SPP', '2019-12-24 13:18:06', 20191224, '2019-12-24 13:18:06', 1, 'TANAMAN', 6600004, 'EST-SPP/SWJ/12/19/6600004', '2019-12-24 13:18:06', 'PUPUK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:18:06', 201912, 2019, '2019-12-24 13:18:06', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:18:07', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (5, 5, 'Bagian Purchasing', 6600005, '6600005', 'SPP', '2019-12-24 13:19:27', 20191224, '2019-12-24 13:19:27', 1, 'TANAMAN', 6600005, 'EST-SPP/SWJ/12/19/6600005', '2019-12-24 13:19:27', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:19:27', 201912, 2019, '2019-12-24 13:19:27', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:19:27', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (6, 6, 'Bagian Purchasing', 6600006, '6600006', 'SPP', '2019-12-24 13:20:02', 20191224, '2019-12-24 13:20:02', 1, 'TANAMAN', 6600006, 'EST-SPP/SWJ/12/19/6600006', '2019-12-24 13:20:02', 'DODOS', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:20:02', 201912, 2019, '2019-12-24 13:20:02', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:20:02', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (7, 7, 'Bagian Purchasing', 6600007, '6600007', 'SPP', '2019-12-24 13:21:04', 20191224, '2019-12-24 13:21:04', 2, 'TANAMAN UMUM', 6600007, 'EST-SPP/SWJ/12/19/6600007', '2019-12-24 13:21:04', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:21:04', 201912, 2019, '2019-12-24 13:21:04', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:04', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (8, 8, 'Bagian Purchasing', 6600008, '6600008', 'SPP', '2019-12-24 13:21:53', 20191224, '2019-12-24 13:21:53', 3, 'PABRIK', 6600008, 'EST-SPP/SWJ/12/19/6600008', '2019-12-24 13:21:53', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:21:53', 201912, 2019, '2019-12-24 13:21:53', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:21:54', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (9, 9, 'Bagian Purchasing', 6600009, '6600009', 'SPP', '2019-12-24 13:22:36', 20191224, '2019-12-24 13:22:36', 1, 'TANAMAN', 6600009, 'EST-SPP/SWJ/12/19/6600009', '2019-12-24 13:22:36', 'PUPUK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:22:36', 201912, 2019, '2019-12-24 13:22:36', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:36', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (10, 10, 'Bagian Purchasing', 6600010, '6600010', 'SPP', '2019-12-24 13:22:50', 20191224, '2019-12-24 13:22:50', 7, 'HRD & UMUM', 6600010, 'EST-SPP/SWJ/12/19/6600010', '2019-12-24 13:22:50', 'keperluan karyawab', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:22:50', 201912, 2019, '2019-12-24 13:22:50', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:22:50', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (11, 11, 'Bagian Purchasing', 6600011, '6600011', 'SPP', '2019-12-24 13:23:30', 20191224, '2019-12-24 13:23:30', 7, 'HRD & UMUM', 6600011, 'EST-SPP/SWJ/12/19/6600011', '2019-12-24 13:23:30', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:23:30', 201912, 2019, '2019-12-24 13:23:30', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:23:30', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (12, 12, 'Bagian Purchasing', 6600012, '6600012', 'SPP', '2019-12-24 13:24:21', 20191224, '2019-12-24 13:24:21', 11, 'MIS', 6600012, 'EST-SPP/SWJ/12/19/6600012', '2019-12-24 13:24:21', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:24:21', 201912, 2019, '2019-12-24 13:24:21', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:24:21', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (13, 13, 'Bagian Purchasing', 6600013, '6600013', 'SPP', '2019-12-24 13:24:28', 20191224, '2019-12-24 13:24:28', 2, 'TANAMAN UMUM', 6600013, 'EST-SPP/SWJ/12/19/6600013', '2019-12-24 13:24:28', 'tes ', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:24:28', 201912, 2019, '2019-12-24 13:24:28', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:24:28', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `ppo_history` VALUES (14, 14, 'Bagian Purchasing', 6600014, '6600014', 'SPP', '2019-12-24 13:25:15', 20191224, '2019-12-24 13:25:15', 8, 'TEKNIK', 6600014, 'EST-SPP/SWJ/12/19/6600014', '2019-12-24 13:25:15', 'SOLAR', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:25:15', 201912, 2019, '2019-12-24 13:25:15', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:25:15', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (15, 15, 'Bagian Purchasing', 6600015, '6600015', 'SPP', '2019-12-24 13:25:36', 20191224, '2019-12-24 13:25:36', 14, 'LEGAL', 6600015, 'EST-SPP/SWJ/12/19/6600015', '2019-12-24 13:25:36', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:25:36', 201912, 2019, '2019-12-24 13:25:36', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:25:36', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (16, 16, 'Bagian Purchasing', 6600016, '6600016', 'SPP', '2019-12-24 13:26:20', 20191224, '2019-12-24 13:26:20', 7, 'HRD & UMUM', 6600016, 'EST-SPP/SWJ/12/19/6600016', '2019-12-24 13:26:20', 'KASUR', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:26:20', 201912, 2019, '2019-12-24 13:26:20', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:26:20', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (17, 17, 'Bagian Purchasing', 6600017, '6600017', 'SPPI', '2019-12-24 13:27:03', 20191224, '2019-12-24 13:27:03', 1, 'TANAMAN', 6600017, 'EST-SPPI/SWJ/12/19/6600017', '2019-12-24 13:27:03', 'tes sppi', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:27:03', 201912, 2019, '2019-12-24 13:27:03', 'User SITE', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User SITE membuat SPP baru', '2019-12-24 13:27:03', 'User SITE', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `ppo_history` VALUES (18, 18, 'Bagian Purchasing', 6600018, '6600018', 'SPP', '2019-12-24 13:28:44', 20191224, '2019-12-24 13:28:44', 1, 'TANAMAN', 6600018, 'EST-SPP/SWJ/12/19/6600018', '2019-12-24 13:28:44', 'KARUNG', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:28:44', 201912, 2019, '2019-12-24 13:28:44', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:28:44', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (19, 19, 'Bagian Purchasing', 1100001, '1100001', 'SPPA', '2019-12-24 13:29:45', 20191224, '2019-12-24 13:29:45', 11, 'MIS', 1100001, 'PST-SPPA/BWJ/12/19/1100001', '2019-12-24 13:29:45', 'tes sppa', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', '2019-12-24 13:29:45', 201912, 2019, '2019-12-24 13:29:45', 'User HO', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'HO', 0, 0, '', 0, '', 'INSERT', 'User HO membuat SPP baru', '2019-12-24 13:29:45', 'User HO', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `ppo_history` VALUES (20, 20, 'Bagian Purchasing', 6600019, '6600019', 'SPP', '2019-12-24 13:30:29', 20191224, '2019-12-24 13:30:29', 5, 'HUMAS DAN KEMITRAAN', 6600019, 'EST-SPP/SWJ/12/19/6600019', '2019-12-24 13:30:29', 'keperluan kerja', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:30:29', 201912, 2019, '2019-12-24 13:30:29', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:30:29', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (21, 21, 'Bagian Purchasing', 6600020, '6600020', 'SPP', '2019-12-24 13:30:32', 20191224, '2019-12-24 13:30:32', 7, 'HRD & UMUM', 6600020, 'EST-SPP/SWJ/12/19/6600020', '2019-12-24 13:30:32', 'BATTERY', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:30:32', 201912, 2019, '2019-12-24 13:30:32', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:30:32', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (22, 22, 'Bagian Purchasing', 6600021, '6600021', 'SPP', '2019-12-24 13:31:47', 20191224, '2019-12-24 13:31:47', 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', '2019-12-24 13:31:47', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:31:47', 201912, 2019, '2019-12-24 13:31:47', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-24 13:31:47', 'User Gudang', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (23, 23, 'Bagian Purchasing', 6100001, '6100001', 'SPP', '2019-12-24 14:48:24', 20191224, '2019-12-24 14:48:24', 8, 'TEKNIK', 6100001, 'EST-SPP/SWJ/12/19/6100001', '2019-12-24 14:48:24', 'solar', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (HO)', '01', '2019-12-24 14:48:24', 201912, 2019, '2019-12-24 14:48:24', 'Dept Head', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'HO', 0, 0, '', 0, '', 'INSERT', 'Dept Head membuat SPP baru', '2019-12-24 14:48:24', 'Dept Head', '192.168.1.192', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `ppo_history` VALUES (24, 22, 'Bagian Purchasing', 6600021, '6600021', 'SPP', '2019-12-24 13:31:47', 20191224, '2019-12-24 13:31:47', 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', '2019-12-24 13:31:47', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:31:47', 201912, 2019, '2019-12-24 13:31:47', 'User Gudang', 'DISETUJUI', 1, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'Data sebelum User request untuk ubah data', 'User Gudang request ubah SPP EST-SPP/SWJ/12/19/6600021', '2019-12-27 10:45:26', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `ppo_history` VALUES (25, 22, 'Bagian Purchasing', 6600021, '6600021', 'SPP', '2019-12-24 13:31:47', 20191224, '2019-12-24 13:31:47', 7, 'HRD & UMUM', 6600021, 'EST-SPP/SWJ/12/19/6600021', '2019-12-24 13:31:47', 'ATK', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-24 13:31:47', 201912, 2019, '2019-12-24 13:31:47', 'User Gudang', 'REQUEST UBAH', 7, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'User melakukan unlock ubah data', 'KTU menyetujui unlock ubah data SPP EST-SPP/SWJ/12/19/6600021', '2019-12-27 10:50:03', 'KTU', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `ppo_history` VALUES (26, 24, 'Bagian Purchasing', 6600022, '6600022', 'SPPI', '2019-12-27 13:15:48', 20191227, '2019-12-27 13:15:48', 11, 'MIS', 6600022, 'EST-SPPI/SWJ/12/19/6600022', '2019-12-27 13:15:48', 'untuk servis', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 13:15:48', 201912, 2019, '2019-12-27 13:15:48', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-27 13:15:48', 'User Gudang', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `ppo_history` VALUES (27, 25, 'Bagian Purchasing', 6600023, '6600023', 'SPPI', '2019-12-27 16:12:46', 20191227, '2019-12-27 16:12:46', 11, 'MIS', 6600023, 'EST-SPPI/SWJ/12/19/6600023', '2019-12-27 16:12:46', 'perbaikan pc', 0, '', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '2019-12-27 16:12:46', 201912, 2019, '2019-12-27 16:12:46', 'User Gudang', 'DALAM PROSES', 0, '9999-12-31 23:59:59', 'SITE', 0, 0, '', 0, '', 'INSERT', 'User Gudang membuat SPP baru', '2019-12-27 16:12:46', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for pt
-- ----------------------------
DROP TABLE IF EXISTS `pt`;
CREATE TABLE `pt`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` double NULL DEFAULT NULL,
  `kodetxt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namaalias` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_kud` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kud` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamatnpwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pt
-- ----------------------------
INSERT INTO `pt` VALUES (16, 6, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', 'PT.MSAL (SITE)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt` VALUES (17, 1, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 'PT.MSAL (HO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio Dalam Raya No. 87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru, Jakarta Selatan, DKI Jakarta Raya-12140');
INSERT INTO `pt` VALUES (18, 2, '02', 'PT.MULIA SAWIT AGRO LESTARI (RO)', 'PT.MSAL (RO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt` VALUES (19, 3, '03', 'PT.MULIA SAWIT AGRO LESTARI (PKS)', 'PT.MSAL (PKS)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');

-- ----------------------------
-- Table structure for pt_copy
-- ----------------------------
DROP TABLE IF EXISTS `pt_copy`;
CREATE TABLE `pt_copy`  (
  `id` int(11) NOT NULL DEFAULT 0,
  `kode` double NULL DEFAULT NULL,
  `kodetxt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namaalias` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_kud` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kud` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamatnpwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pt_copy
-- ----------------------------
INSERT INTO `pt_copy` VALUES (16, 6, '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'PT.MSAL (ESTATE1)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt_copy` VALUES (17, 1, '01', 'PT.MULIA SAWIT AGRO LESTARI (HO)', 'PT.MSAL(HO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt_copy` VALUES (18, 2, '02', 'PT.MULIA SAWIT AGRO LESTARI (RO)', 'PT.MSAL (RO)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt_copy` VALUES (19, 3, '03', 'PT.MULIA SAWIT AGRO LESTARI (PKS)', 'PT.MSAL (PKS)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');
INSERT INTO `pt_copy` VALUES (21, 7, '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'PT.MSAL (ESTATE2)', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140', '-', '-', '02.380.716.7-019.000', 'Jl.Radio dalam raya no 87A RT.005/RW.014 Gandaria Utara Kebayoran Baru Jakarta Selatan DKI Jakarta raya-12140');

-- ----------------------------
-- Table structure for ret_masukitem
-- ----------------------------
DROP TABLE IF EXISTS `ret_masukitem`;
CREATE TABLE `ret_masukitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `no_ret` double NULL DEFAULT NULL,
  `no_rettxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdpt` double NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `tgl_ret` datetime(0) NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `txttgl_ret` double NULL DEFAULT NULL,
  `ket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ret_skbitem
-- ----------------------------
DROP TABLE IF EXISTS `ret_skbitem`;
CREATE TABLE `ret_skbitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `no_ret` double NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` double NULL DEFAULT NULL,
  `pt` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT 0,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ret_stokmasuk
-- ----------------------------
DROP TABLE IF EXISTS `ret_stokmasuk`;
CREATE TABLE `ret_stokmasuk`  (
  `id` int(11) NULL DEFAULT NULL,
  `no_ret` double NULL DEFAULT NULL,
  `no_retTXT` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `tgl_ret` datetime(0) NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_supply` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `no_pengtr` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi_gudang` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` double NULL DEFAULT NULL,
  `txttgl_ret` double NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for retskb
-- ----------------------------
DROP TABLE IF EXISTS `retskb`;
CREATE TABLE `retskb`  (
  `id` int(11) NULL DEFAULT NULL,
  `no_ret` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` double NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT 0,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for stockawal
-- ----------------------------
DROP TABLE IF EXISTS `stockawal`;
CREATE TABLE `stockawal`  (
  `id` int(11) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `KODE` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saldoawal_qty` double NULL DEFAULT NULL,
  `saldoawal_nilai` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `saldoakhir_qty` double NULL DEFAULT NULL,
  `saldoakhir_nilai` double NULL DEFAULT NULL,
  `nilai_masuk` double NULL DEFAULT NULL,
  `QTY_MASUK` double NULL DEFAULT NULL,
  `QTY_KELUAR` double NULL DEFAULT NULL,
  `QTY_ADJMASUK` double NULL DEFAULT NULL,
  `QTY_ADJKELUAR` double NULL DEFAULT NULL,
  `HARGAPORAT` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` int(11) NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `minstok` double NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockawal
-- ----------------------------
INSERT INTO `stockawal` VALUES (1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 200, 0, 0, 200, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0);
INSERT INTO `stockawal` VALUES (2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:20:20', 2019, 100, 0, 0, 100, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:20:43', 2019, 500, 0, 0, 500, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 50000, 100000000, '2019-12-24 14:20:49', 2019, 1050000, 100000000, 0, 1000000, 0, 0, 0, 95.238095238095, '2018-01-01 00:00:00', 201801, '0', '-', '-', 10000);
INSERT INTO `stockawal` VALUES (5, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100025, '102505010100025', 'PUPUK ROCK PHOSPHATE (RP)', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:35:44', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:36:08', 2019, 1000000, 0, 0, 1000000, 0, 0, 0, 95.238095238095, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 20, 0, 0, 20, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (8, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100015, '102505010100015', 'PUPUK MOP', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:50:14', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000189, '102505990000189', 'ALAT ALAT KOMPUTER', 'UNIT', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:51:05', 2019, -10, 0, 0, 0, 10, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0);
INSERT INTO `stockawal` VALUES (10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:56:15', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0);
INSERT INTO `stockawal` VALUES (11, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505950000183, '102505950000183', 'ABBOCATH NO 24', 'PCS', 'PERSEDIAAN OBAT OBATAN', 0, 0, '2019-12-24 17:27:48', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2019-12-27 10:37:01', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2019-01-01 00:00:00', 201901, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:25:54', 2019, 0, 0, 20100000, 20, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (14, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-30 10:46:35', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);
INSERT INTO `stockawal` VALUES (15, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2020-01-07 10:42:44', 2020, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0);

-- ----------------------------
-- Table structure for stockawal_harian
-- ----------------------------
DROP TABLE IF EXISTS `stockawal_harian`;
CREATE TABLE `stockawal_harian`  (
  `id` int(11) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `KODE` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saldoawal_qty` double NULL DEFAULT NULL,
  `saldoawal_nilai` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `saldoakhir_qty` double NULL DEFAULT NULL,
  `saldoakhir_nilai` double NULL DEFAULT NULL,
  `nilai_masuk` double NULL DEFAULT NULL,
  `qty_masuk_per_tgl` double NULL DEFAULT NULL,
  `QTY_MASUK` double NULL DEFAULT NULL,
  `qty_keluar_per_tgl` double NULL DEFAULT NULL,
  `QTY_KELUAR` double NULL DEFAULT NULL,
  `QTY_ADJMASUK` double NULL DEFAULT NULL,
  `QTY_ADJKELUAR` double NULL DEFAULT NULL,
  `HARGAPORAT` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` int(11) NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `minstok` double NULL DEFAULT NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockawal_harian
-- ----------------------------
INSERT INTO `stockawal_harian` VALUES (1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:24', 2019, 0, 0, 20100000, 20, 20, 20, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2019-12-27 00:00:00');
INSERT INTO `stockawal_harian` VALUES (2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:24', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2019-12-28 00:00:00');
INSERT INTO `stockawal_harian` VALUES (3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:24', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2019-12-29 00:00:00');
INSERT INTO `stockawal_harian` VALUES (4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:24', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2019-12-30 00:00:00');
INSERT INTO `stockawal_harian` VALUES (5, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:24', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2019-12-31 00:00:00');
INSERT INTO `stockawal_harian` VALUES (6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-01 00:00:00');
INSERT INTO `stockawal_harian` VALUES (7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-02 00:00:00');
INSERT INTO `stockawal_harian` VALUES (8, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-03 00:00:00');
INSERT INTO `stockawal_harian` VALUES (9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-04 00:00:00');
INSERT INTO `stockawal_harian` VALUES (10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-05 00:00:00');
INSERT INTO `stockawal_harian` VALUES (11, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:25', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-06 00:00:00');
INSERT INTO `stockawal_harian` VALUES (12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-07 00:00:00');
INSERT INTO `stockawal_harian` VALUES (13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-08 00:00:00');
INSERT INTO `stockawal_harian` VALUES (14, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-09 00:00:00');
INSERT INTO `stockawal_harian` VALUES (15, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-10 00:00:00');
INSERT INTO `stockawal_harian` VALUES (16, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-11 00:00:00');
INSERT INTO `stockawal_harian` VALUES (17, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-12 00:00:00');
INSERT INTO `stockawal_harian` VALUES (18, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:26', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-13 00:00:00');
INSERT INTO `stockawal_harian` VALUES (19, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:27', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-14 00:00:00');
INSERT INTO `stockawal_harian` VALUES (20, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:27', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-15 00:00:00');
INSERT INTO `stockawal_harian` VALUES (21, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:27', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-16 00:00:00');
INSERT INTO `stockawal_harian` VALUES (22, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:27', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-17 00:00:00');
INSERT INTO `stockawal_harian` VALUES (23, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:27', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-18 00:00:00');
INSERT INTO `stockawal_harian` VALUES (24, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-19 00:00:00');
INSERT INTO `stockawal_harian` VALUES (25, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-20 00:00:00');
INSERT INTO `stockawal_harian` VALUES (26, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-21 00:00:00');
INSERT INTO `stockawal_harian` VALUES (27, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-22 00:00:00');
INSERT INTO `stockawal_harian` VALUES (28, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-23 00:00:00');
INSERT INTO `stockawal_harian` VALUES (29, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:28', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-24 00:00:00');
INSERT INTO `stockawal_harian` VALUES (30, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:45:29', 2019, 0, 0, 20100000, 0, 20, 0, 20, 0, 0, 1005000, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, '2020-01-25 00:00:00');

-- ----------------------------
-- Table structure for stockawal_history
-- ----------------------------
DROP TABLE IF EXISTS `stockawal_history`;
CREATE TABLE `stockawal_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `KODE` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saldoawal_qty` double NULL DEFAULT NULL,
  `saldoawal_nilai` double NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `saldoakhir_qty` double NULL DEFAULT NULL,
  `saldoakhir_nilai` double NULL DEFAULT NULL,
  `nilai_masuk` double NULL DEFAULT NULL,
  `QTY_MASUK` double NULL DEFAULT NULL,
  `QTY_KELUAR` double NULL DEFAULT NULL,
  `QTY_ADJMASUK` double NULL DEFAULT NULL,
  `QTY_ADJKELUAR` double NULL DEFAULT NULL,
  `HARGAPORAT` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` int(11) NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_account` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `minstok` double NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockawal_history
-- ----------------------------
INSERT INTO `stockawal_history` VALUES (1, 1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600001', '2019-12-24 14:17:10', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (2, 1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 0, 0, NULL, 2, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:17:19', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (3, 4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 50000, 100000000, '2019-12-24 14:20:49', 2019, 80000, 50000000, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 10000, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600002', '2019-12-24 14:21:00', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (4, 4, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 50000, 100000000, '2019-12-24 14:20:49', 2019, 80000, 50000000, NULL, 100, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 10000, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:21:10', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (5, 3, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000015, '102505850000015', 'MANGKOK SEDANG ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:20:43', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600003', '2019-12-24 14:21:19', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `stockawal_history` VALUES (6, 2, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000014, '102505850000014', 'MANGKOK  KECIL ( TAKARAN PUPUK )', 'BH', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:20:20', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang 102505850000014|MANGKOK  KECIL ( TAKARAN PUPUK ) pada LPB 6600003', '2019-12-24 14:21:21', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `stockawal_history` VALUES (7, 1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 20, 0, 0, 20, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:30:36', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (8, 1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 20, 0, 0, 40, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:30:44', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (9, 1, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000130, '102505990000130', 'KOMPUTER', 'SET', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:17:06', 2019, 20, 0, 0, 43, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:31:05', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (10, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600004', '2019-12-24 14:39:51', 'User Gudang', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `stockawal_history` VALUES (11, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, NULL, 20, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-24 14:40:00', 'User Gudang', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `stockawal_history` VALUES (12, 9, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000189, '102505990000189', 'ALAT ALAT KOMPUTER', 'UNIT', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:51:05', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) BKB', 'User Gudang menambahkan BKB EST-BKB/SWJ/12/2019/00001 dengan barang 102505990000189|ALAT ALAT KOMPUTER', '2019-12-24 15:07:01', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `stockawal_history` VALUES (13, 10, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505990000050, '102505990000050', 'KEYBOARD KOMPUTER', 'BH', 'BARANG LOGISTIK TRANSIT ( ASET )', 0, 0, '2019-12-24 14:56:15', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '0', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) BKB', 'User Gudang menambahkan BKB EST-BKB/SWJ/12/2019/00001 dengan barang 102505990000050|KEYBOARD KOMPUTER', '2019-12-24 15:07:04', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `stockawal_history` VALUES (14, 6, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505850000175, '102505850000175', 'APRON PUPUK (FERTILIZER APRON)', 'PCS', 'BAHAN DAN PERLENGKAPAN KERJA', 0, 0, '2019-12-24 14:36:08', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) BKB', 'User Gudang menambahkan BKB EST-BKB/SWJ/12/2019/00002 dengan barang 102505850000175|APRON PUPUK (FERTILIZER APRON)', '2019-12-24 15:07:30', 'User Gudang', '192.168.1.155', 'Chrome 79.0.3945.88 Windows 10');
INSERT INTO `stockawal_history` VALUES (15, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600005', '2019-12-26 11:08:21', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (16, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 1, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:08:31', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (17, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 51, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600004', '2019-12-26 11:26:42', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (18, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 52, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:26:51', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (19, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 102, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600004', '2019-12-26 11:32:13', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (20, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 107, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:32:57', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (21, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 127, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:42:54', 'User Gudang', '192.168.1.42', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (22, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 147, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600004', '2019-12-26 11:48:18', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (23, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 148, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:48:34', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (24, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 168, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 11:50:55', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (25, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 169, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600005', '2019-12-26 14:16:38', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (26, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 170, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600006', '2019-12-26 14:18:01', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (27, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 171, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600004', '2019-12-26 14:23:44', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (28, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 172, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600005', '2019-12-26 14:27:00', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (29, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 173, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600006', '2019-12-26 14:41:32', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (30, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 174, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 14:41:45', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (31, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 176, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 14:41:53', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (32, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 181, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600007', '2019-12-26 14:43:28', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (33, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 0, 0, 0, 182, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-26 14:56:19', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (34, 7, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100007, '102505010100007', 'PUPUK BORATE', 'KG', 'PUPUK', 0, 0, '2019-12-24 14:39:41', 2019, 8, 0, 0, 8, 0, 0, 0, 0, '2018-01-01 00:00:00', 201801, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600008', '2019-12-26 15:17:48', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');
INSERT INTO `stockawal_history` VALUES (35, 12, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505010100001, '102505010100001', 'PUPUK BAYFOLAN', 'LTR', 'PUPUK', 0, 0, '2019-12-27 10:37:01', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-01 00:00:00', 201901, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', '', '2019-12-27 11:35:09', 'User Gudang', '192.168.1.43', 'Chrome 79.0.3945.88 Windows 7');
INSERT INTO `stockawal_history` VALUES (36, 13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:25:54', 2019, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) LPB', 'User Gudang menambahkan barang pada LPB 6600009', '2019-12-27 13:26:09', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');
INSERT INTO `stockawal_history` VALUES (37, 13, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', '-', 102505600000052, '102505600000052', 'POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', 'PCS', 'SPARE PART MESIN PABRIK UMUM', 0, 0, '2019-12-27 13:25:54', 2019, 0, 0, NULL, 20, NULL, NULL, NULL, NULL, '2019-12-27 00:00:00', 202001, '-', '-', '-', 0, 'DATA LAMA (SEBELUM UPDATE) BKB', 'User Gudang menambahkan BKB EST-BKB/SWJ/12/2019/00003 dengan barang 102505600000052|POWER SUPPLY INPUT 220 V AC OUT 24 V DC 4 A', '2019-12-27 13:31:00', 'User Gudang', '192.168.1.43', 'Firefox 71.0 Windows 7');

-- ----------------------------
-- Table structure for stockkeluar
-- ----------------------------
DROP TABLE IF EXISTS `stockkeluar`;
CREATE TABLE `stockkeluar`  (
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` smallint(6) NULL DEFAULT NULL,
  `no_mutasi` double NULL DEFAULT NULL,
  `tujuan_mutasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUB` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USER1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `approval` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockkeluar
-- ----------------------------
INSERT INTO `stockkeluar` VALUES (1, '2019-12-24 00:00:00', 6600001, '6600001', 'EST-BKB/SWJ/12/2019/00001', '6600004', NULL, NULL, NULL, NULL, '2019-12-24 15:07:01', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, 201801, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'tes 2019', 'MIS', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, NULL);
INSERT INTO `stockkeluar` VALUES (2, '2019-12-24 00:00:00', 6600002, '6600002', 'EST-BKB/SWJ/12/2019/00002', '6600002', NULL, NULL, NULL, NULL, '2019-12-24 15:07:30', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, 201801, '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'keperluan kerja', 'TANAMAN', 0, '', 'User Gudang', NULL, NULL, 0, 0, NULL);
INSERT INTO `stockkeluar` VALUES (3, '2019-12-27 00:00:00', 6600003, '6600003', 'EST-BKB/SWJ/12/2019/00003', '6600005', NULL, NULL, NULL, NULL, '2019-12-27 13:31:00', 20191227, 2019, '2019-12-27 00:00:00', NULL, 202001, 202001, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'unutuk perbaikan', 'MIS', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');

-- ----------------------------
-- Table structure for stockkeluar_copy1
-- ----------------------------
DROP TABLE IF EXISTS `stockkeluar_copy1`;
CREATE TABLE `stockkeluar_copy1`  (
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` smallint(6) NULL DEFAULT NULL,
  `no_mutasi` double NULL DEFAULT NULL,
  `tujuan_mutasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUB` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USER1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `approval` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockkeluar_copy1
-- ----------------------------
INSERT INTO `stockkeluar_copy1` VALUES (1, '2019-08-30 00:00:00', 6600001, '6600001', 'EST-BKB/SWJ/08/2019/00001', '6600001', NULL, NULL, NULL, NULL, '2019-08-30 15:13:50', 20190830, 2019, '2019-08-30 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'peralengkapan it', 'MIS', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');
INSERT INTO `stockkeluar_copy1` VALUES (2, '2019-08-30 00:00:00', 6600002, '6600002', 'EST-BKB/SWJ/08/2019/00002', '6600002', NULL, NULL, NULL, NULL, '2019-08-30 15:33:26', 20190830, 2019, '2019-08-30 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'perlengkapan kerja', 'UMUM & HRD', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');
INSERT INTO `stockkeluar_copy1` VALUES (3, '2019-08-30 00:00:00', 6600003, '6600003', 'EST-BKB/SWJ/08/2019/00003', '6600003', NULL, NULL, NULL, NULL, '2019-08-30 15:34:00', 20190830, 2019, '2019-08-30 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'perlngkapan kantor', 'UMUM & HRD', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');
INSERT INTO `stockkeluar_copy1` VALUES (4, '2019-09-02 00:00:00', 6600004, '6600004', 'EST-BKB/SWJ/09/2019/00004', '6600004', NULL, NULL, NULL, NULL, '2019-09-02 14:44:48', 20190902, 2019, '2019-09-02 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'kerja', 'UMUM & HRD', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, NULL);
INSERT INTO `stockkeluar_copy1` VALUES (5, '2019-09-03 00:00:00', 6600005, '6600005', 'EST-BKB/SWJ/09/2019/00005', '6600005', NULL, NULL, NULL, NULL, '2019-09-03 16:32:31', 20190903, 2019, '2019-09-03 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'perlengkapan it', 'MIS', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');
INSERT INTO `stockkeluar_copy1` VALUES (6, '2019-09-04 00:00:00', 6600006, '6600006', 'EST-BKB/SWJ/09/2019/00006', '6600007', NULL, NULL, NULL, NULL, '2019-09-04 14:10:21', 20190904, 2019, '2019-09-04 00:00:00', NULL, 201909, 201909, '06', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User SITE', '-', 'UMUM & HRD', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, '1');

-- ----------------------------
-- Table structure for stockkeluar_history
-- ----------------------------
DROP TABLE IF EXISTS `stockkeluar_history`;
CREATE TABLE `stockkeluar_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` smallint(6) NULL DEFAULT NULL,
  `no_mutasi` double NULL DEFAULT NULL,
  `tujuan_mutasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUB` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USER1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `approval` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stockkeluar_history
-- ----------------------------
INSERT INTO `stockkeluar_history` VALUES (1, 2, '2019-12-24 00:00:00', 6600002, '6600002', 'EST-BKB/SWJ/12/2019/00002', '6600002', NULL, NULL, NULL, NULL, '2019-12-24 15:07:30', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, 201801, '03', 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 'User Gudang', 'keperluan kerja', 'TANAMAN', 0, NULL, 'User Gudang', NULL, NULL, 0, 0, NULL, 'DATA SEBELUM BATAL BKB, Alasan Batal :  ', 'User Gudang membatalkan BKB EST-BKB/SWJ/12/2019/00002', '2019-12-27 10:09:16', 'User Gudang', '::1', 'Firefox 70.0 Windows 10');

-- ----------------------------
-- Table structure for stockkeluar_mutasi
-- ----------------------------
DROP TABLE IF EXISTS `stockkeluar_mutasi`;
CREATE TABLE `stockkeluar_mutasi`  (
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` smallint(6) NULL DEFAULT NULL,
  `no_mutasi` double NULL DEFAULT NULL,
  `tujuan_mutasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt_mutasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keperluan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUB` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USER1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `flag_lpb` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for stokmasuk
-- ----------------------------
DROP TABLE IF EXISTS `stokmasuk`;
CREATE TABLE `stokmasuk`  (
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOKAL` smallint(6) NULL DEFAULT NULL,
  `ASSET` smallint(6) NULL DEFAULT NULL,
  `kode_supply` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `ttgtxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_pengtr` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi_gudang` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` int(11) NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `BATAL` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stokmasuk
-- ----------------------------
INSERT INTO `stokmasuk` VALUES (1, '2019-12-24 00:00:00', 3100002, '3100002', 0, 0, '0004', 'ABADI, PD', 6600001, '6600001', '123', 'SITE ', '-', '2019-12-24 14:31:05', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 1, 'SITE', 'EST/BWJ/JKT/12/19/3100002', 'EST-LPB/SWJ/12/19/00001', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (2, '2019-12-24 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600002, '6600002', '2', '2', '-', '2019-12-24 14:21:10', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00002', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (3, '2019-12-24 00:00:00', 3100003, '3100003', 0, 0, '0004', 'ABADI, PD', 6600003, '6600003', '002-02', 'jakarta', '-', '2019-12-24 14:21:19', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100003', 'EST-LPB/SWJ/12/19/00003', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (4, '2019-12-24 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600004, '6600004', '2', '', '-', '2019-12-24 14:40:00', 20191224, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (5, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600005, '6600005', 'ad', 'asd', '-', '2019-12-26 11:08:31', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00005', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (6, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600004, '6600004', 'asd', 'lokasi', '-', '2019-12-26 11:26:51', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (7, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600004, '6600004', 'no pengantar', 'lokasi gudang', '-', '2019-12-26 11:42:54', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (8, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600004, '6600004', 'no pengantar', 'lokasi gudang', '-', '2019-12-26 11:50:53', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (9, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600005, '6600005', 'nopena', 'lokasi ', '-', '2019-12-26 14:16:36', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00005', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (10, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600006, '6600006', 'asd', 'lokas', '-', '2019-12-26 14:17:59', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00006', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (11, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600004, '6600004', 'no pengantar', 'lokasi gudang', '-', '2019-12-26 14:23:42', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00004', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (12, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600005, '6600005', 'no pengantar', 'lokasi gudang', '-', '2019-12-26 14:26:58', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00005', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (13, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600006, '6600006', 'qwweqw', 'loas', '-', '2019-12-26 14:41:51', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00006', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (14, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600007, '6600007', 'sada', 'lokasi', '-', '2019-12-26 14:56:17', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 1, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00007', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (15, '2019-12-26 00:00:00', 3100004, '3100004', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600008, '6600008', 'asd', 'asd', '-', '2019-12-26 15:17:46', 20191226, 2019, '2018-01-01 00:00:00', NULL, 201801, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/BWJ/JKT/12/19/3100004', 'EST-LPB/SWJ/12/19/00008', 0, NULL, 'User Gudang', 0, 0);
INSERT INTO `stokmasuk` VALUES (16, '2019-12-27 00:00:00', 3300001, '3300001', 0, 0, '0003', 'ABADI JAYA, TOKO', 6600009, '6600009', 'a', 'site', '-', '2019-12-27 13:26:09', 20191227, 2019, '2019-12-27 00:00:00', NULL, 202001, NULL, 'PT.MULIA SAWIT AGRO LESTARI (SITE)', '06', 0, 'SITE', 'EST/SWJ/PO-Lokal/JKT/12/19/3300001', 'EST-LPB/SWJ/12/19/00009', 0, NULL, 'User Gudang', 0, 0);

-- ----------------------------
-- Table structure for stokmasuk_history
-- ----------------------------
DROP TABLE IF EXISTS `stokmasuk_history`;
CREATE TABLE `stokmasuk_history`  (
  `no_urut` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOKAL` smallint(6) NULL DEFAULT NULL,
  `ASSET` smallint(6) NULL DEFAULT NULL,
  `kode_supply` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_supply` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `ttgtxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_pengtr` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi_gudang` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode1` datetime(0) NULL DEFAULT NULL,
  `periode2` datetime(0) NULL DEFAULT NULL,
  `txtperiode1` double NULL DEFAULT NULL,
  `txtperiode2` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mutasi` int(11) NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `BATAL` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL,
  `keterangan_transaksi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `user_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `client_platform` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_urut`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier`  (
  `id` int(11) NULL DEFAULT NULL,
  `kode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `supplier` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tlp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fax` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usaha` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sales` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lama` double NULL DEFAULT NULL,
  `lamatxt` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pkp` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `norek` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namabank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `atasnama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `account` double NULL DEFAULT NULL,
  `nama_account` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pph` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pph_rule` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES (3131, '0133', 'DELI JAYA', 'JL JEMBATAN MERAH LOS 23-25', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000009, 'DELI JAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3132, '0134', 'DELTA ABADI SENTOSA, PT', 'JL. R.SUPRAPTO NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000010, 'DELTA ABADI SENTOSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3133, '0135', 'DELTA BUMI JAYA, PT', 'JLN. KH DEWANTORO NO. 88', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000011, 'DELTA BUMI JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3134, '0136', 'DEWI SARTIKA, FURNITURE', 'JL. FATMAWATI 36 (CIPETE)', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000012, 'DEWI SARTIKA, FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3135, '0137', 'DEWI SRIRAMA, CV', 'PANDAAN - JAWA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000013, 'DEWI SRIRAMA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3136, '0138', 'DHARMA GUNA WIBAWA, PT', 'JLN DANAU SUNTER UTARA PERKANTORAN SUNTER PERMAI BI B/7, SUNTER AGUNG, TJ PRIUK', '(021) 652 0222', '(021) 652 0111', '-', 'ALINA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001040000014, 'DHARMA GUNA WIBAWA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3137, '0139', 'DIDY, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000015, 'DIDY, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3138, '0140', 'DINAMIKA BERKAT SEJAHTERA, CV', 'JL. GELONG BARU BARAT V NO. 19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000016, 'DINAMIKA BERKAT SEJAHTERA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3139, '0141', 'DINAMIKA NUSANTARA PRATANA, PT', 'JL.PANGERAN JAYAKARTA NO.44/22-24', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000017, 'DINAMIKA NUSANTARA PRATANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3140, '0142', 'DIRJEN TANAMAN PANGAN', 'JL AUP PS MINGGU NO.3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000018, 'DIRJEN TANAMAN PANGAN', 'N', '-');
INSERT INTO `supplier` VALUES (3141, '0143', 'DOKTER AC MOBIL', 'JL RADIO DALAM NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000019, 'DOKTER AC MOBIL', 'N', '-');
INSERT INTO `supplier` VALUES (3142, '0144', 'DUNIA ALAT KANTOR.COM', 'JL.OTISTA RAYA NO.109', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000020, 'DUNIA ALAT KANTOR.COM', 'N', '-');
INSERT INTO `supplier` VALUES (3143, '0145', 'DUNIA BAN, TOKO', 'JL KEDUNGSARI 95', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000021, 'DUNIA BAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3144, '0146', 'DUNIA KERAMIK, TOKO', 'JL. BALIWERTI 48D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000022, 'DUNIA KERAMIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3145, '0147', 'DUTA BANGUNAN, TOKO', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000023, 'DUTA BANGUNAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3146, '0148', 'DWI PUTRA SUYAMTO, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000024, 'DWI PUTRA SUYAMTO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3147, '0149', 'DWIKARSA SINERGI, PT', 'LTC LANTAI GF2 BLOK RA NO.70', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000025, 'DWIKARSA SINERGI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3148, '0150', 'EATON INDUSTRIES PTE LTD.', 'SINGAPORE', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000001, 'EATON INDUSTRIES PTE LTD', 'N', '-');
INSERT INTO `supplier` VALUES (3149, '0151', 'EDISON, TOKO', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000002, 'EDISON, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3150, '0152', 'EICOM INTERNATIONAL', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000003, 'EICOM INTERNATIONAL', 'N', '-');
INSERT INTO `supplier` VALUES (3151, '0153', 'ELECTRONIC SOLUTION', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000004, 'ELECTRONIC SOLUTION', 'N', '-');
INSERT INTO `supplier` VALUES (3152, '0154', 'ELEGANT INDONESIA, PT', 'JL. UTAMA SAKTI RAYA NO. 28A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000005, 'ELEGANT INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3153, '0155', 'EMMA FLORIST', 'JL. YUSUF NO 9 RAWABELONG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000006, 'EMMA FLORIST', 'N', '-');
INSERT INTO `supplier` VALUES (3154, '0156', 'ERA MANDIRI DIESEL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000007, 'ERA MANDIRI DIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3155, '0157', 'ERLANGGA, PENERBIT', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000008, 'ERLANGGA, PENERBIT', 'N', '-');
INSERT INTO `supplier` VALUES (3156, '0158', 'ERWIN, BPK.', 'TUMBANG TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000009, 'ERWIN, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3157, '0159', 'EUROASIATIC JAYA, PT', 'JL.RAYA DAAN MOGOT NO.44', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000010, 'EUROASIATIC JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3158, '0160', 'EZRA BERKAT ANUGERAH, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000011, 'EZRA BERKAT ANUGERAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3159, '0161', 'FACTORY OUTLET, FURNITURE', 'PLUIT VILLAGE 3RD FL #107', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001060000001, 'FACTORY OUTLET, FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3160, '0162', 'FINGERSPOT', 'JAKARTA', '', '', '', '', 0, 'Hari', '-', 'N', '', '', '', 301001060000002, 'FINGERSPOT', 'N', '-');
INSERT INTO `supplier` VALUES (3161, '0163', 'FORD JAKARTA BARAT', 'JL. PANJANG NO.8 ARTERI KEDOYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001060000003, 'FORD JAKARTA BARAT', 'N', '-');
INSERT INTO `supplier` VALUES (3162, '0164', 'FORD JAKARTA SELATAN', 'JL.TB.SIMATUPANG NO.14', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001060000004, 'FORD JAKARTA SELATAN', 'N', '-');
INSERT INTO `supplier` VALUES (3163, '0165', 'FORD PALANGKARAYA', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001060000005, 'FORD PALANGKARAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3164, '0166', 'FREEMAN AIR CONDITIONER', 'JL GANDARIA II RT04/02 NO.52', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001060000006, 'FREEMAN AIR CONDITIONER', 'N', '-');
INSERT INTO `supplier` VALUES (3165, '0167', 'GADING MAS INDAH, PT', 'JL JEND BASUKI RACHMAD NO.17 MALANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000001, 'GADING MAS INDAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3166, '0168', 'GAGAH SATRIA MANUNGGAL, PT', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000002, 'GAGAH SATRIA MANUNGGAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3167, '0169', 'GALATTA LESTARINDO, PT', 'JL.PUTRI HIJAU BARU NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000003, 'GALATTA LESTARINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3168, '0170', 'GARUDA TASCO INDONESIA, PT', 'JL. JEMBATAN TIGA NO. 8C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000004, 'GARUDA TASCO INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3169, '0171', 'GAYA LISTRIK, TOKO', 'JL. KEMBANG JEPUN NO.7, SURABAYA', '031-3526290', '031-3551365', '-', '-', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001070000005, 'GAYA LISTRIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3170, '0172', 'GEMILANG MULIALESTARI, PT', 'KAWASAN INDUSTRI KM 19.8 BLOK F8 PORIS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000006, 'GEMILANG MULIALESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3171, '0173', 'GEMILANG, CV', 'JL GOTONG ROYONG NO.7 LARANGAN INDAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000007, 'GEMILANG, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3172, '0174', 'GEMILANG, UD (CANON SP.PART)', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000008, 'GEMILANG, UD (CANON SP.PART)', 'N', '-');
INSERT INTO `supplier` VALUES (3173, '0175', 'GENTRAK, CV', 'JL MANGGA BESAR 4-P NO.50C JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000009, 'GENTRAK, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3174, '0176', 'GERINDO SUPERTEKNIK', 'JL SUKARJO WIRYOPRANOTO 52 A.', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000010, 'GERINDO SUPERTEKNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3175, '0177', 'GERRINDO SURYA MAKMUR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000011, 'GERRINDO SURYA MAKMUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3176, '0178', 'GK KOMPUTER, TOKO', 'HARCO MANGGA DUA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000012, 'GK KOMPUTER, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3177, '0179', 'GLOBAL CITRA ANUGRAH', 'JL GATOT SUBROTO NO.177 KAV 64', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000013, 'GLOBAL CITRA ANUGRAH', 'N', '-');
INSERT INTO `supplier` VALUES (3178, '0180', 'GLOBAL MANDIRI TRAKTOR', 'KOMP MEGA SPAREPART BLOK D 22A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000014, 'GLOBAL MANDIRI TRAKTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3179, '0181', 'GLOBAL MUARA NETINDO,PT', 'KOMP. MANGGA DUA ELOK BLOK A-10', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000015, 'GLOBAL MUARA NETINDO,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3180, '0182', 'GLODOK ELEKTRONIK', 'JL SULTAN ISKANDAR MUDA KAV.77-78', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000016, 'GLODOK ELEKTRONIK', 'N', '-');
INSERT INTO `supplier` VALUES (3181, '0183', 'GOAUTAMA SINARBATUAH, PT', 'Jl. A Yani Km 11,200 No. 10 - BANJARMASIN', '0511-422 0370', '0511-422 0369', '-', '-', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001070000017, 'GOAUTAMA SINARBATUAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3182, '0184', 'GOSYEN ANUGERAH, PT', 'JL. YON ZIKON 13 NO 26A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000018, 'GOSYEN ANUGERAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3183, '0185', 'GRAFIKA KARYA INDAH LESTARI,PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000019, 'GRAFIKA KARYA INDAH LESTARI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3184, '0186', 'GRAHA SERVICE INDONESIA, PT', 'JL. SULTAN ISKANDAR MUDA NO.9 C-D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000020, 'GRAHA SERVICE INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3185, '0187', 'GRAND EXPRESS', 'JL JEMBATAN 3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000021, 'GRAND EXPRESS', 'N', '-');
INSERT INTO `supplier` VALUES (3186, '0188', 'GREEN PLANET INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000022, 'GREEN PLANET INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3187, '0189', 'GUNAWAN PLASTIK', 'Jl. Industri No. 9, Betro-Sedati, Sidoarjo', '(031) 10240', '(031) 10241', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001070000023, 'GUNAWAN PLASTIK', 'N', '-');
INSERT INTO `supplier` VALUES (3188, '0190', 'GUNTUR, BPK.', 'TUMBANG TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001070000024, 'GUNTUR, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3189, '0191', 'H.SAMALI, BPK.', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000001, 'H.SAMALI, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3190, '0192', 'H.SARONI, BPK.', 'PANGKALAN BUN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000002, 'H.SARONI, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3191, '0193', 'HABETEC, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000003, 'HABETEC, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3192, '0194', 'HALAYUNG FARMA, TOKO', 'Jl Tjilik Riwut KM 1\r\nSeberang pasar kahayan', '0813-49005004', '-', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001080000004, 'HALAYUNG FARMA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3193, '0195', 'HAMBIT, BPK.', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000005, 'HAMBIT, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3194, '0196', 'HANAMPI SEJAHTERA KAHURIPAN,PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000006, 'HANAMPI SEJAHTERA KAHURIPAN,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3195, '0197', 'HANDIJAYA SUKATAMA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000007, 'HANDIJAYA SUKATAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3196, '0198', 'HANDOKO SUGIANTO, BPK.', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000008, 'HANDOKO SUGIANTO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3197, '0199', 'HARAPAN SAKTI UTAMA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000009, 'HARAPAN SAKTI UTAMA', 'N', '-');
INSERT INTO `supplier` VALUES (3198, '0200', 'HARPINDO MULIA ARMADA MAJU, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000010, 'HARPINDO MULIA ARMADA MAJU, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3199, '0201', 'HARRIS, BPK.', 'JL. RIAU PELABUHAN RAMBANG NO.68, RT.002, PALANGKARAYA, KALTENG', '0852-49178864', '-', '-', 'BP. HARIS', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001080000011, 'HARRIS, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3200, '0202', 'HARVEST APOTIK', 'Jln Menganti kramat No.56 Citraland - Surabaya ', '031-7521800', '-', '-', 'IBU. VINA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001080000012, 'HARVEST APOTIK', 'N', '-');
INSERT INTO `supplier` VALUES (3201, '0203', 'HAS SALON MOBIL', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000013, 'HAS SALON MOBIL', 'N', '-');
INSERT INTO `supplier` VALUES (3202, '0204', 'HASIL BUMI, UD', 'Jalan Veteran 3 RT 022, Kuripan, BANJARMASIN TIMUR', '0511-3255466', '0511-3267095', '-', 'IBU. BETSI', 30, 'Hari', '-', 'N', '', '', '', 301001080000014, 'HASIL BUMI, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3203, '0205', 'HELINDO DIRG.AUTO CENTER, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000015, 'HELINDO DIRG.AUTO CENTER, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3204, '0206', 'HEXINDO ADIPERKASA, PT', 'JL PULO KAMBING II KAV.1-2 NO.33', '0531-31941 - Ext 104', '0531-31942', '-', 'Bp. Furkon', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001080000016, 'HEXINDO ADIPERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3205, '0207', 'HIGH POINT CENTER-DUTAMAS', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000017, 'HIGH POINT CENTER-DUTAMAS', 'N', '-');
INSERT INTO `supplier` VALUES (3206, '0208', 'HJ HANJAYA, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000018, 'HJ HANJAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3207, '0209', 'HNF CONCEPT', 'KEDUNGDORO 39', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000019, 'HNF CONCEPT', 'N', '-');
INSERT INTO `supplier` VALUES (3208, '0210', 'HOME CENTER INDONESIA,PT-INDEX', 'JL.R.S.FATMAWATI BLOK A NO.1-7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000020, 'HOME CENTER INDONESIA,PT-INDEX', 'N', '-');
INSERT INTO `supplier` VALUES (3209, '0211', 'HONDA AHASS SERVICE', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000021, 'HONDA AHASS SERVICE', 'N', '-');
INSERT INTO `supplier` VALUES (3210, '0212', 'HONGKONG ELECTRONIC, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000022, 'HONGKONG ELECTRONIC, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3211, '0213', 'HP CLINIC', 'JLN PINANGSIA RAYA NO.1 JAKARTA BARAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001080000023, 'HP CLINIC', 'N', '-');
INSERT INTO `supplier` VALUES (3212, '0214', 'ICA MGK', 'MEGA GLODOK KEMAYORAN LT.1 BLOK C02/7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000001, 'ICA MGK', 'N', '-');
INSERT INTO `supplier` VALUES (3213, '0215', 'ICA SERVICE CENTER', 'JLN PINANGSIA 1 NO. 22-BB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000002, 'ICA SERVICE CENTER', 'N', '-');
INSERT INTO `supplier` VALUES (3214, '0216', 'ICOM, TOKO', 'GLODOK HARCO LT. II BLOK C II NO.174', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000003, 'ICOM, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3215, '0217', 'IDA BAGUS MAYUN W, BPK.', 'PEKANBARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000004, 'IDA BAGUS MAYUN W, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3216, '0218', 'IMAM SODIKIN, BPK.', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000005, 'IMAM SODIKIN, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3217, '0219', 'IMANNUEL SEJAHTERA, TOKO', 'PLAZA KENARI MAS, LG NO. B83', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000006, 'IMANNUEL SEJAHTERA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3218, '0220', 'INDITANI, TOKO', 'PALANGKA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000007, 'INDITANI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3219, '0221', 'INDO DAYA, TOKO', 'RUKO GLODOK PLAZA BLOK B NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000008, 'INDO DAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3220, '0222', 'INDOBEARINGINDO LOGAMSARI', 'KOMP. KARANG ANYAR PERMAI BLOK B NO.12', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000009, 'INDOBEARINGINDO LOGAMSARI', 'N', '-');
INSERT INTO `supplier` VALUES (3221, '0223', 'INDOGEOTECH DARMA SOLUSI, CV', 'JL. H.MERIN NO.1B MERUYA SELATAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000010, 'INDOGEOTECH DARMA SOLUSI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3222, '0224', 'INDOHARDWARE SEMESTA, PT', 'KOMPLEK DAAN MOGOT BARU LN.12 JAKARTA', '021-50121005', '021-5444932', 'SALE DISTRIBUTOR SHM FLOWMETER', 'BPK RUSMA ', 0, 'Hari', '-', 'N', '1180005419063', 'BANK MANDIRI ', 'SISKA ASTRARIDEWI', 301001090000011, 'INDOHARDWARE SEMESTA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3223, '0225', 'INDOKITA MAKMUR, PT', 'JL. GAJAH MADA NO.150ABC & 149G', '(021) 649 2518 / 649 3811', '(021) 649 6653', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001090000012, 'INDOKITA MAKMUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3224, '0226', 'INDOMAS EKAPUTRA, PT', 'KOMP. GLODOK JAYA NO.55', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000013, 'INDOMAS EKAPUTRA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3225, '0227', 'INDOPART DIESEL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000014, 'INDOPART DIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3226, '0228', 'INDOPOWER', 'JL TAMAN SARI, KOMP 56 NO. 61C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000015, 'INDOPOWER', 'N', '-');
INSERT INTO `supplier` VALUES (3227, '0229', 'INDOPUTRA MAS, PT', 'JL. KEMUKUS 32 BLOK A NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000016, 'INDOPUTRA MAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3228, '0230', 'INDORHAMA MOTOR', 'JL CILIK RIWUT KM.9', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000017, 'INDORHAMA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3229, '0231', 'INJAYA POMPA AIR', 'JLN PANGLIMA POLIM 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000018, 'INJAYA POMPA AIR', 'N', '-');
INSERT INTO `supplier` VALUES (3230, '0232', 'INTAN JAYA GLASS', 'JLN H.MENCONG NO.68 CILEDUG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000019, 'INTAN JAYA GLASS', 'N', '-');
INSERT INTO `supplier` VALUES (3231, '0233', 'INTI JAYA, TOKO', 'JL FATMAWATI NO.6 BLOK A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001090000020, 'INTI JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3232, '0234', 'INTISARI BEARING, CV', 'Karang anyar permai Blok B No.12', '021-6008555', '021-6245659', '-', 'IBU. TANTI', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001090000021, 'INTISARI BEARING, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3233, '0235', 'JASA ARSITEK TIARA WIDYA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000001, 'JASA ARSITEK TIARA WIDYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3234, '0236', 'JASA KARYA, EKSPEDISI', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000002, 'JASA KARYA, EKSPEDISI', 'N', '-');
INSERT INTO `supplier` VALUES (3235, '0237', 'JASARAHARJA PUTERA ASURANSI', 'JL. TB SIMATUPANG KAV. 1 CILANDAK TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000003, 'JASARAHARJA PUTERA ASURANSI', 'N', '-');
INSERT INTO `supplier` VALUES (3236, '0238', 'JASTINDO RAYA, PT', 'SATELITE TOWN SQUARE A6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000004, 'JASTINDO RAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3237, '0239', 'JAYA ABADI, TB', 'Jln. Darmosugondo No 74 B-C, Palangkaraya', '0536-3305668', '0536-3234121', '-', 'BP. IRAWAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001100000005, 'JAYA ABADI, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3238, '0240', 'JAYA ABADI, TOKO', 'JLN KRAMAT BUNDER 15 SENEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000006, 'JAYA ABADI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3239, '0241', 'JAYA KURNIA PERKASA', 'PERTOKOAN GLODOK JAYA NO 6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000007, 'JAYA KURNIA PERKASA', 'N', '-');
INSERT INTO `supplier` VALUES (3240, '0242', 'JAYA MAKMUR DIESEL, CV', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000008, 'JAYA MAKMUR DIESEL, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3241, '0243', 'JAYA MAKMUR, TB', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000009, 'JAYA MAKMUR, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3242, '0244', 'JCC BAN', 'Jl. Sukarjowiryopranoto No.35B,JAKARTA', '021-70942390', '021-6254570', '-', 'BP. KOLIN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001100000010, 'JCC BAN', 'N', '-');
INSERT INTO `supplier` VALUES (3243, '0245', 'JOKO, BPK.', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000011, 'JOKO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3244, '0246', 'JUPITER 4X4 ACCESORIES', 'KEMAYORAN - JAKARTA UTARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001100000012, 'JUPITER 4X4 ACCESORIES', 'N', '-');
INSERT INTO `supplier` VALUES (3245, '0247', 'KAI COMMUNICATION', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000001, 'KAI COMMUNICATION', 'N', '-');
INSERT INTO `supplier` VALUES (3246, '0248', 'KARUNIA BARU, TOKO MEUBEL', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000003, 'KARYA JAYA ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3247, '0249', 'KARYA JAYA ABADI', 'JL PELITA NO.107A RT.028/005 MENTAWA BR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000003, 'KARYA JAYA ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3248, '0250', 'KARYA JAYA LESTARI, CV', 'JL. RAJAWALI DESA CANDIMAS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000004, 'KARYA JAYA LESTARI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3249, '0251', 'KARYA JAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000005, 'KARYA JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3250, '0252', 'KARYA MULIA, TOKO', 'JL CILEDUG RAYA NO.106', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000006, 'KARYA MULIA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3251, '0253', 'KAUSAR, TOKO', 'JL DARMOSUGONDO NO.52', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000007, 'KAUSAR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3252, '0254', 'KAWAN LAMA SEJAHTERA, PT', 'JL. PURI KENCANA NO.1 MERUYA KEMBANGAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000008, 'KAWAN LAMA SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3253, '0255', 'KEBAYORAN, TB', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000009, 'KEBAYORAN, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3254, '0256', 'KJS LEATHER/AUTO CENTER', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000010, 'KJS LEATHER/AUTO CENTER', 'N', '-');
INSERT INTO `supplier` VALUES (3255, '0257', 'KREASI AUTO KENCANA, PT', 'JL KH. HASYIM ASHARI NO.45 JAKARA PUSAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000011, 'KREASI AUTO KENCANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3256, '0258', 'KUDA MAS, TOKO', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000012, 'KUDA MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3257, '0259', 'KUMALA MOTOR', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000013, 'KUMALA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3258, '0260', 'KUMALA MOTOR JAKARTA', 'KOMPLEK KREKOT JAYA BLOK C2 NO 3A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000014, 'KUMALA MOTOR JAKARTA', 'N', '-');
INSERT INTO `supplier` VALUES (3259, '0261', 'KUMALA PUTRA NUSANTARA', 'JL KAPTEN DULASIM RT 04 RW 05 GRESIK', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000015, 'KUMALA PUTRA NUSANTARA', 'N', '-');
INSERT INTO `supplier` VALUES (3260, '0262', 'KURUN MAKMUR JAYA, PT', 'JL.ANTANG II NO.45', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001110000016, 'KURUN MAKMUR JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3261, '0263', 'LAHAN MAKMUR SENTOSA, CV', 'JL.ISKANDAR GG.BUMI DAYA NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000001, 'LAHAN MAKMUR SENTOSA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3262, '0264', 'LAKSMANAKARYA ADIYASA, PT', 'JL.DAAN MOGOT 100II', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000002, 'LAKSMANAKARYA ADIYASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3263, '0265', 'LATIMOJONG SEJATI, PT', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000003, 'LATIMOJONG SEJATI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3709, '712', 'CAHAYA MAJU', 'LINDETEVES TRADE CENTRE (LTC) LANTAI GF2, BLOK C7, NO.1', '021-62200860', '-', '-', 'YUDI SYAHPUTRA', 0, 'Hari', '-', '-', '', '', '', 301001030000040, 'CAHAYA MAJU', 'N', '-');
INSERT INTO `supplier` VALUES (3710, '713', 'TAMPUNG PENYANG ,UD', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301501200000003, 'TAMPUNG PENYANG ,UD', 'N', '-');
INSERT INTO `supplier` VALUES (3711, '714', 'ANUGERAH SEJAHTERA MAKMUR,PT', 'JL.MOH.TOHA RUKO PONDOK ARUM BLOK A1 NO.7-8,TANGERANG,BANTEN', '021-55768986 / 081354563378', '-', '-', 'IBU WARNI', 30, 'Hari', '-', '-', '', '', '', 301001010000090, 'ANUGERAH SEJAHTERA MAKMUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3712, '715', 'SUMBER BARU, CV - P.BUN', 'JL. PANGLIMA UTAR NO.70 RT.04 SEI TENDANG\r\nKEC. KUMAT, PANGKALAN BUN\r\nKALTENG 74181', '0532-61967, 61103', '0532-61967', '-', '-', 0, 'Hari', '-', 'Y', '', '', '', 301001190000100, 'SUMBER BARU,CV - P.BUN', 'N', '-');
INSERT INTO `supplier` VALUES (3713, '716', 'RIYANI JAYA MANDIRI,PT', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001180000026, 'RIYANI JAYA MANDIRI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3714, '717', 'ALWI MEDICINE,TOKO', 'JL. SISINGAMANGARAJA NO.8 (JALUR G.OBOS-RTA. MILONO) PALANGKARAYA', '082253700400', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001010000091, 'ALWI MEDICINE,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3715, '718', 'TRIWIRA MANDIRI,UD', 'JL. KARANG ANYAR RAYA KOMP.PERMAI 53-54 BLOK A16 - JAKARTA', '021-62304955 / 081310638166', '021', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001200000037, 'TRIWIRA MANDIRI,UD', 'N', '-');
INSERT INTO `supplier` VALUES (3716, '719', 'GRAHA HARAPAN AUTO SERVICE, PT ', 'JL BHAYANGKARA RAYA NO.46 SERPONG  ', '021-5396311', '021-53122603', 'modifikasi 4x4 truck ', 'BPK BUDI NUGRAHA ', 0, 'Hari', '-', '-', '', '', '', 301001070000029, 'GRAHA HARAPAN AUTO SERVICE, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3717, '720', 'YOSCALE BORNEO BROTHERS,PT', 'JL. H.IMRAN NO.80A RT.13/06 KEL.KETAPANG,KEC. MB KETAPANG,SAMPIT ', '085249730499 / 085753816888', '-', '-', 'BP. YOHAN', 0, 'Hari', '-', '-', '', '', '', 301001250000005, 'YOSCALE BORNEO BROTHERS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3718, '721', 'GRAHA SEMESTA JAYA, PT ', 'JL BHAYANGKARA 1 NO.9 RT 0005/001 PAKUJAYA, SERPONG UTARA, TANGGERANG SELATAN ', '021-5396311', '021-53122603', 'MODIFIKASI TRUCK ', 'BPK BUDI', 0, 'Hari', '31.607.104.2-411.000', 'Y', '547.510.8181', 'BCA - KCP GRAHA RAYA ', 'S BUDI NUGRAHA SE', 301001070000029, 'GRAHA SEMESTA JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3719, '722', 'SUMBER AGUNG JAYA, UD', '-', '-', '-', '-', 'HARTONO', 0, 'Hari', '-', '-', '', '', '', 301001190000101, 'SUMBER AGUNG JAYA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3720, '723', 'JAYA MANDIRI,CV', 'JL. CHRISTOPEL MIHING NO.39 SAMPIT', '0531-2035001 / 08125106897', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001100000018, 'JAYA MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3721, '724', 'MITRA LASER, TOKO', 'JL.CIPTO MANGUNKUSUMA, PERUMAHAN MAHKOTA SIMPRUG BLOK B-14/06\r\nTANGERANG SELATAN', '021-29040157', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000062, 'MITRA LASER, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3722, '725', 'ATRIA RAYA DEANRO, PT', 'KOMP. RUKO DASANAH CENTER BLOK CD NO.57 TANGERANG-INDONESIA', '021-54204696', '-', '-', 'FENNY OLVIANITA', 0, 'Hari', '-', '-', '', '', '', 301001010000092, '', 'N', '-');
INSERT INTO `supplier` VALUES (3723, '726', 'PRABU PANDAWA MOTOR, PT ', 'JL GURU MUGHNI NO.8 JAKARTA SELATAN ', '021-5221201', '-', '-', 'AGUS THERESIAN', 0, 'Hari', '-', '-', '', '', '', 301001160000065, 'PRABU PANDAWA MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3724, '727', 'FORTUNA ANEKAMULTI GEMILANG, PT ', 'Jl. Karang Anyar Raya 55 block B no 24\r\nJakarta Pusat - 10740', '6221-6591959 / 60', '6221-6595169 / 70', 'DISTRIBUTOR FAG ', 'FERRY ', 0, 'Hari', '-', '-', '', '', '', 301001060000009, 'FORTUNA ANEKAMULTI GEMILANG, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3725, '728', 'BAGUS PERDANA,TOKO', 'PALANGKARAYA', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001020000054, 'BAGUS PERDANA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3726, '729', 'BINTANG BANGUN KAHAYAN,PT', 'Jl. Tmg Tilung XVIII Blok A No 3 Palangka Raya', '08125064445', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001020000055, 'BINTANG BANGUN KAHAYAN, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3727, '730', 'MEGA MURNI KIMIA,CV', 'JL. A.YANI KM.7.8 KEC.KERTAKHANYAR,BANJARMASIN', '0511-6344777 / 0818375663', '-', '-', 'BP. HERRY', 30, 'Hari', '-', '-', '', '', '', 301001130000063, 'MEGA MURNI KIMIA,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3728, '731', 'BINTANG PERSADA SATELIT, PT', 'JL. BRIDGEN HAMID, GG. LADANG - SUMUT', '061-7861158', '-', '-', 'EDI SUGIANTO, S.KOM', 0, 'Hari', '-', '-', '', '', '', 301001020000056, 'BINTANG PERSADA SATELIT, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3729, '732', 'UNITAMA MAKMUR ABADI, PT ', 'EQUITY TOWER 35TH FLOOR, JL JEND SUDIRMAN KAV.52-53, JAKARTA 12190', '021-29398919', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001210000006, 'UNITAMA MAKMUR ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3730, '733', 'ANUGRAH JAYA TRAKTOR ', 'JL CILIK RIWUT KM 2.5 NO.166B PALANGKARAYA KALTENG ', '0536-3222393', '-', 'TOKO SPAREPART', 'DPK ROHIANTO', 0, 'Hari', '-', '-', '0310007213344', 'BANK MANDIRI ', 'ROHIANTO ', 301001010000093, 'ANUGERAH JAYA TRAKTOR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3654, '657', 'PADLOCK,TOKO', 'JL. PERINTIS RAYA, JAKARTA 11820', '085920657458', '-', '-', 'BP. THOMAS BAYU', 0, 'Hari', '-', '-', '4768040735', 'BCA', 'THOMAS BAYU PRAHASTOMO', 301001160000059, 'PADLOCK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3655, '658', 'SUPER SUKSES MOTOR,PT', '-', '-', '-', '-', 'BU AYU SETIANI', 0, 'Hari', '-', '-', '', '', '', 301001190000092, 'SUPER SUKSES MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3656, '659', 'MOHUSINDO,PT', 'JL. A.YANI KM.21.9 LANDASAN ULIN TENGAH,BANJARBARU', '0511-4705161 / 4705162', '0511-4705163', '-', 'BP. AGUS RUSNANDAR', 30, 'Hari', '-', '-', '', '', '', 301001130000056, 'MOHUSINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3657, '660', 'INDOTEHNIK TOKO', 'GEDUNG LTC GLODOK LT.1 BLOK C36 NO.3 JL HAYAM WURUK NO.127 JAKARTA', '021-26071342', '-', 'SUPPLIER ALAT TEHNIK ', 'BU NOVI ', 0, 'Hari', '-', '-', '', '', '', 301001090000028, 'INDOTEKNIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3658, '661', 'RATU UNGGUL SAHABAT,PT', 'JL.DANAU DAMPLAS BLOK.E II/65 A,BENDUNGAN HILIR,JAKARTA 10210', '021-30296888/57906155', '021-57906156', '-', 'IBU. NIKE', 30, 'Hari', '-', '-', '', '', '', 301001190000093, 'RATU UNGGUL SAHABAT,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3659, '662', 'SINAR BARU 2, TB', 'JL. PANGLIMA POLIM RAYA NO.46B,KEB.BARU,JAKARTA SELATAN', '021-7220824/72789955', '021-72789114', '-', 'IBU. LANNY', 0, 'Hari', '-', '-', '', '', '', 301001190000094, 'SINAR BARU 2,TB', 'N', '-');
INSERT INTO `supplier` VALUES (3660, '663', 'PT SIWITEK ', 'JL GUNUNG SAHARI II NO.1/2/374 RT 012/007 KEMAYORAN JAKARTA PUSAT', '-', '-', 'DISTRIBUTOR PUPUK ', 'BU IKA', 30, 'Hari', '31.460.080.0-027.000', 'Y', '', '', '', 301001190000095, 'SIWITEK,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3661, '664', 'PT MERCK CHEMICAL AND LIFE SCIENCES', 'JL T.B.SIMATUPANG NO.8 PASAR REBO', '021-28565600', '-', 'CHEMICAL AND LABORAROTIUM ', 'BU SEFY WURI', 0, 'Hari', '-', 'Y', '0017871000', 'DEUTSCHE BANK ', 'PT MERCK CHEMICAL AND LIFE SCIENCES', 301001130000057, 'MERCK CHEMICALS AND LIFE SCIENCES (MCLS), PT', 'N', '-');
INSERT INTO `supplier` VALUES (3653, '656', 'SRIKANDI DIAMONDS MOTOR, PT ', 'Jl Mampang prapatan Raya No.21-23 Mampang Prapatan Jakarta selatan\r\n', '021-22530123  ext 207', '021-22530222', 'DEALER MITSUBISHI', 'BU SUSI', 0, 'Hari', '-', '-', '', '', '', 301001190000090, 'SRIKANDI DIAMOND MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3637, '640', 'INDONESIA PRIMA EQUIPMENT, PT ', 'JL A.YANI KM.8.9 RT.14 KERTAK HANYAR, BANJARMASIN', '081287335888', '-', 'DISTRIBUTOR JCB PART', 'BPK CAI ZULI', 30, 'Hari', '-', '-', '', '', '', 301001090000027, 'INDONESIA PRIMA EQUIPMENT, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3638, '641', 'ADY WATER,CV', 'JL. MANDE RAYA NO.26,CIKADUT,CICAHEUM,BANDUNG', '022-7238019', '022-7238019', '-', 'BP. RUSMAN', 0, 'Hari', '-', '-', '1310033314446', 'MANDIRI', 'CV.ADY WATER', 301001010000083, 'ADY WATER, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3639, '642', 'VISCO PRIMA INDONESIA,PT', 'KOMP. NORTHLAND NO.35,JL. R.E MARTADINATA,ANCOL,JAKARTA 14420', '021-26692908', '021-26692836', '-', 'BP. HERRY', 0, 'Hari', '-', '-', '', '', '', 301001220000009, 'VISCO PRIMA INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3080, '0082', 'BHINNEKA BAJANAS, PT', 'JL KARANG BOLONG RAYA NO.5 ANCOL', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000026, 'BHINNEKA BAJANAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3081, '0083', 'BILAH AGUNG PERKASA, CV', 'JL. A.YANI KM 7.7 NO.38', '0511-4281839', '0511-3201007', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000027, 'BILAH AGUNG PERKASA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3082, '0084', 'BILAH MAKMUR ABADI, UD', 'JL. A.YANI KM.7 BANJARMASIN', '0511-4281839', '0511-3201007', '-', 'BP. KURNIAWAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000028, 'BILAH MAKMUR ABADI, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3083, '0085', 'BIMA SAKTI, TOKO', 'JL. KEDUNGDORO 16C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000029, 'BIMA SAKTI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3084, '0086', 'BINA PERTIWI, PT', 'JL.RAYA BEKASI KM.22 CAKUNG', '0531-21145', '0531-24071', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000030, 'BINA PERTIWI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3085, '0087', 'BINTANG MULIA TEKNIK, PT', 'JL.A.YANI KM16, GAMBUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000031, 'BINTANG MULIA TEKNIK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3086, '0088', 'BINTANG MULIA, UD', 'JLN A.YANI KM.3,5 DEPAN POLTABES NO.7', '0511-4220026', '0511-4221598', '-', 'BP.RIDWAN', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000032, 'BINTANG MULIA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3087, '0089', 'BINTANG SERVICE', 'JL.KEBAYORAN LAMA NO 24D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000033, 'BINTANG SERVICE', 'N', '-');
INSERT INTO `supplier` VALUES (3088, '0090', 'BINTANG TIMUR MULIA GEMILANG ,PT', 'KELAPA GADING PERMAI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000034, 'BINTANG TIMUR MULIA GEMILANG ,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3089, '0091', 'BINTANG TIMUR, TOKO', 'JL. K.S TUBUN 36', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000035, 'BINTANG TIMUR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3090, '0092', 'BIRO JASA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000036, 'BIRO JASA', 'N', '-');
INSERT INTO `supplier` VALUES (3091, '0093', 'BMW PRIMA', 'JL RS FATMAWATI NO.10', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000037, 'BMW PRIMA', 'N', '-');
INSERT INTO `supplier` VALUES (3092, '0094', 'BOBBY, BPK.', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000038, 'BOBBY, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3093, '0095', 'BROQUETE INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000039, 'BROQUETE INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3094, '0096', 'BUANA SURVEY', 'Jl. Ciledug Raya, Komplek Surya Buana Blok L 19,Kreo Cipadu', '021-7321129', '021-7302811', '-', 'BP. IRVAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000040, 'BUANA SURVEY', 'N', '-');
INSERT INTO `supplier` VALUES (3095, '0097', 'BUDI BERKAH, TOKO', 'JL JAWA NO.1 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000041, 'BUDI BERKAH, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3096, '0098', 'BUMEN REDJA ABADI, PT', 'JL.PROF.DR.LATUMENTEN I NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000042, 'BUMEN REDJA ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3097, '0099', 'BUMI TANI SUBUR, PT', 'JL PINANGSIA II NO. 8A JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000043, 'BUMI TANI SUBUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3098, '0100', 'CAHAYA BERDIKARI, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000001, 'CAHAYA BERDIKARI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3099, '0101', 'CAHAYA BORNEO TRACTOR', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000002, 'CAHAYA BORNEO TRACTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3100, '0102', 'CAHAYA MAS, TOKO', 'JL K.S TUBUN NO. 35, PALANGKARAYA', '0536 - 3221628', '0536 - 3234383', '-', 'Bp. Ardian Ruslan', 0, 'Hari', '-', 'N', '', '', '', 301001030000003, 'CAHAYA MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3101, '0103', 'CAHAYA TERANG, TOKO', 'JL GEMBONG TEBASAN 29 SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000004, 'CAHAYA TERANG, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3102, '0104', 'CAHAYA TIMUR ABADI', 'PLAZA JAYAKARTA LT 1 SUITE 2090-2091', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000005, 'CAHAYA TIMUR ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3103, '0105', 'CAHAYA UTAMA', 'JL HAYAM WURUK 108 PLAZA 2 BLOK B 1071', '021-34831483', '021-34831443', '-', 'BP. ANDRE', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001030000006, 'CAHAYA UTAMA', 'N', '-');
INSERT INTO `supplier` VALUES (3104, '0106', 'CAHAYA YAKINDO', 'LTC GLODOK GF.2 BLOK A9 NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000007, 'CAHAYA YAKINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3105, '0107', 'CAKRA LIMA, PT', 'PINANGSIA INDAH BLOK 2-M', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000008, 'CAKRA LIMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3106, '0108', 'CAKRA PERKASA JAYA MULIA, PT', 'JL. A.YANI KM 13.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000009, 'CAKRA PERKASA JAYA MULIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3107, '0109', 'CAKRA PERKASA TEKNIK, CV', 'JL.NAGASARI 64, MAWAR, BANJARMASIN', '0511-', '0511-3354119', NULL, 'IBU. YOSEFIN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001030000010, 'CAKRA PERKASA TEKNIK, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3108, '0110', 'CATUR INTI PARTINDO', 'JLN TAMAN SARI LT 1 AL.01 BKS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000011, 'CATUR INTI PARTINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3109, '0111', 'CEMARA ENGINEERING, CV', 'KALIMANTAN TENGAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000012, 'CEMARA ENGINEERING, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3110, '0112', 'CEMERLANG PERKASA SURABAYA, PT', 'JL. KERTAJAYA 180', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000013, 'CEMERLANG PERKASA SURABAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3111, '0113', 'CENTA BRASINDO ABADI, PT', 'JL CBD PARAMOUNT SERPONG KAV.6 GADING SERPONG KEC. KELAPA DUA TANGGERANG BANTEN 15811 ', '021-29324888', '021-29324777', 'CHEMICAL PESTISIDA ', 'BPK SUGIANTO', 30, 'Hari', '-', 'N', '353 165 4709', 'BANK DANAMON ', 'PT CENTA BRASINDO ABADI', 301001030000014, 'CENTA BRASINDO ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3112, '0114', 'CENTRAL ASIA TEHNIK', 'LTC GLODOK GF 1 B19/8', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000015, 'CENTRAL ASIA TEHNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3113, '0115', 'CHINA INSURANCE INDONESIA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000016, 'CHINA INSURANCE INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3114, '0116', 'CIDAR ENGINEERING, SDN BHD.', 'SUBANG JAYA, SELANGOR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000017, 'CIDAR ENGINEERING, SDN BHD.', 'N', '-');
INSERT INTO `supplier` VALUES (3115, '0117', 'CIPTA BARU, TOKO', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000018, 'CIPTA BARU, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3116, '0118', 'CIPTA MAPAN LOGISTIK, PT', 'JL. TAMBANK LANGON 20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000019, 'CIPTA MAPAN LOGISTIK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3117, '0119', 'CIPTO, BPK.', 'S A M P I T', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000020, 'CIPTO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3118, '0120', 'CITRA DIESEL, CV', 'JL. JEND. SUDIRMAN KM.4,2 SAMPIT', '0531-2035678', '0531-2035678', '-', 'BP. AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001030000021, 'CITRA DIESEL, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3119, '0121', 'CITRA JAYA, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000022, 'CITRA JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3120, '0122', 'CITRA KOLEGA MANDIRI, CV', 'JL. LAUTZE RAYA NO.54,JAKARTA PUSAT', '021-3521610 / 3522134', '021-3521620', '-', 'BP. VINSEN', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001030000023, 'CITRA KOLEGA MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3121, '0123', 'CONTINENTAL DUTA INTERNATIONAL, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000024, 'CONTINENTAL DUTA INTERNATIONAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3122, '0124', 'CYAN KOMPUTER', 'PLAZA PINANGSIA LT.1 NO.30', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001030000025, 'CYAN KOMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3123, '0125', 'DALLY, BPK.', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000001, 'DALLY, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3124, '0126', 'DAMARUS PANEN UTAMA, PT', 'JL. KAJI NO.51', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000002, 'DAMARUS PANEN UTAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3125, '0127', 'DAMI MAS SEJAHTERA, PT', 'SINAR MAS LAND PLAZA MENARA 2 LT.30 ', '021-50338899', '021-50389999', '-', NULL, 0, 'Hari', '-', 'N', '2-003-044549', 'BANK INTERNATIONAL INDONESIA', 'PT DAMI MAS SEJAHTERA ', 301001040000003, 'DAMI MAS SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3126, '0128', 'DANACO, CV', 'SEMARANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000004, 'DANACO, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3127, '0129', 'DANI G, BPK.', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000005, 'DANI G, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3128, '0130', 'DANSAS PAN SUKSESA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000006, 'DANSAS PAN SUKSESA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3129, '0131', 'DARMA MOTOR', 'JL BUNGUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000007, 'DARMA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3026, '0028', 'ALUNA BINA TRIBUMI', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000030, 'ALUNA BINA TRIBUMI', 'N', '-');
INSERT INTO `supplier` VALUES (3027, '0029', 'AMAZON MOTOR', 'SUNTER', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000031, 'AMAZON MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3028, '0030', 'AMIN, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000032, 'AMIN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3029, '0031', 'ANEKA INDAH, FURNITURE SHOP', 'JL. RS.FATMAWATI 50', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000033, 'ANEKA INDAH, FURNITURE SHOP', 'N', '-');
INSERT INTO `supplier` VALUES (3030, '0032', 'ANEKA TANI', 'JL HARYONO MT, KAW PLAZA SAMPIT NO.134', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000035, 'ANEKA TANI', 'N', '-');
INSERT INTO `supplier` VALUES (3031, '0033', 'ANEKA TANI UNGGUL', 'Jln.Irian No.18 Palangkaraya', '0536 - 3235172', '0536 - 3235172', NULL, 'IBU.NAZARIPAH', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000036, 'ANEKA TANI UNGGUL', 'N', '-');
INSERT INTO `supplier` VALUES (3032, '0034', 'ANGGREK, TOKO', 'PALANGKA RAYA - KALIMANTAN TENGAH', '0536-3237464 / 0821-53299775', '0536-3237464', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000037, 'ANGGREK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3033, '0035', 'ANGKASA, CV', 'GUDANG 218 TANJUNG PRIOK - PLYRN MERATUS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000038, 'ANGKASA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3034, '0036', 'ANGKUTAN BS, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000039, 'ANGKUTAN BS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3035, '0037', 'ANTAR NIAGA NUSANTARA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000040, 'ANTAR NIAGA NUSANTARA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3036, '0038', 'ANUGERAH AC', 'JL. ALTERNATIF CIBUBUR NO.12BB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000041, 'ANUGERAH AC', 'N', '-');
INSERT INTO `supplier` VALUES (3037, '0039', 'ANUGERAH MUSTIKA OSTINDO, PT', 'KOMP.BOJONG INDAH, JL.PAKIS RAYA 88 CB', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000042, 'ANUGERAH MUSTIKA OSTINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3038, '0040', 'AREK SPORT, TOKO', 'JLN. DAAN MOGOT BARAT JEMBATAN PESING', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000043, 'AREK SPORT, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3039, '0041', 'ARMADA ACCESSORIES/BUMEN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000045, 'ARMADA ACCESSORIES/BUMEN', 'N', '-');
INSERT INTO `supplier` VALUES (3040, '0042', 'ARTHUR PRINTER', 'JL KAPT.P.TENDEAN NO.42 PONCOL JAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000046, 'ARTHUR PRINTER', 'N', '-');
INSERT INTO `supplier` VALUES (3041, '0043', 'ASENG, BPK.', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000047, 'ASENG, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3042, '0044', 'ASIA DIGITAL', 'STC SENAYAN LT.5 NO.177 JAKARTA', '021-57931916 /17', '021-57931915', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000048, 'ASIA DIGITAL', 'N', '-');
INSERT INTO `supplier` VALUES (3043, '0045', 'ASIAN BEARINDO SEJAHTERA', 'JL LAUTZE 103-105', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000049, 'ASIAN BEARINDO SEJAHTERA', 'N', '-');
INSERT INTO `supplier` VALUES (3044, '0046', 'ASTRA INTERNATIONAL, PT', 'JL. JEND SUDIRMAN KAV.5 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000050, 'ASTRA INTERNATIONAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3045, '0047', 'ASTRIDO JAYA MOBILINDO, PT', 'JL.RS FATMAWATI NO.1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000051, 'ASTRIDO JAYA MOBILINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3046, '0048', 'ASTRIDO TOYOTA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000070, 'ASTRIDO TOYOTA', 'N', '-');
INSERT INTO `supplier` VALUES (3047, '0049', 'ASURANSI CENTRAL ASIA, PT', 'WISMA ASIA LT.10, 12-15', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000052, 'ASURANSI CENTRAL ASIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3048, '0050', 'ASURANSI TAKAFUL UMUM, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000053, 'ASURANSI TAKAFUL UMUM, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3049, '0051', 'ATRISCO MUTIARA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000071, 'ATRISCO MUTIARA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3050, '0052', 'AUDIO PLAZA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000054, 'AUDIO PLAZA', 'N', '-');
INSERT INTO `supplier` VALUES (3051, '0053', 'AUTO 2000 - BEKASI TIMUR', 'JL DIPONEGORO NO.38 BEKASI 17510', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000055, 'AUTO 2000 - BEKASI TIMUR', 'N', '-');
INSERT INTO `supplier` VALUES (3052, '0054', 'AUTO 2000 - JAKARTA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000056, 'AUTO 2000 - JAKARTA', 'N', '-');
INSERT INTO `supplier` VALUES (3053, '0055', 'AUTO 2000 - PURI KEMBANGAN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000057, 'AUTO 2000 - PURI KEMBANGAN', 'N', '-');
INSERT INTO `supplier` VALUES (3054, '0056', 'AW DIESEL, TOKO', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000060, 'AW DIESEL, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3055, '0057', 'BAHAGIA TEKNIK, CV', 'JL.CICURUG RAYA NO.98 KM 2, TANGERANG', '021-7076 7704 / 5980072', '021-598 6154', '-', 'CI. ING', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000001, 'BAHAGIA TEKNIK, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3056, '0058', 'BAHARI BIMA ANFA UNNAS', 'TAMAN PONDOK LEGI III BLOK W NO.9A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000002, 'BAHARI BIMA ANFA UNNAS', 'N', '-');
INSERT INTO `supplier` VALUES (3057, '0059', 'BAHLIAS RESEARCH STATION', 'JLN A.YANI NO.2 PO BOX 1154', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000003, 'BAHLIAS RESEARCH STATION', 'N', '-');
INSERT INTO `supplier` VALUES (3058, '0060', 'BAJA SEJAHTERA MANDIRI', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000004, 'BAJA SEJAHTERA MANDIRI', 'N', '-');
INSERT INTO `supplier` VALUES (3059, '0061', 'BALAI PENELITIAN GETAS', 'SALATIGA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000005, 'BALAI PENELITIAN GETAS', 'N', '-');
INSERT INTO `supplier` VALUES (3060, '0062', 'BALAI PENELITIAN TANAH', 'JL.IR.H.JUANDA NO 98', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000006, 'BALAI PENELITIAN TANAH', 'N', '-');
INSERT INTO `supplier` VALUES (3061, '0063', 'BANINDO RODA PERKASA, PT', 'JL.A.YANI KM 8,2 MANARAP LAMA, K.HANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000007, 'BANINDO RODA PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3062, '0064', 'BANJAR AGRO SEJAHTERA,PT', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000008, 'BANJAR AGRO SEJAHTERA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3063, '0065', 'BANJARMASIN BIRAY UTAMA, PT', 'JLN GUNUNG SARI UJUNG NO.20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000010, 'BANJARMASIN BIRAY UTAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3064, '0066', 'BANUA PETRA PRIMA, PT', 'JL.H.HASAN BASRI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000011, 'BANUA PETRA PRIMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3065, '0067', 'BANYUWANGI MOTOR, TOKO', 'JL SERAM 5 LANGKAI, PAHANDUT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000012, 'BANYUWANGI MOTOR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3066, '0068', 'BAYUMAS JAYA MANDIRI, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000013, 'BAYUMAS JAYA MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3067, '0069', 'BBS KACA, TOKO', 'PALANGKA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000014, 'BBS KACA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3068, '0070', 'BBS, TOKO', 'PASAR KAHAYAN BLOK L-5', '0536-3221997', '0536-3236423', '-', 'BP. IMRAN', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001020000015, 'BBS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3069, '0071', 'BCS COMPUTER', 'JL. KH.SYAHDAN NO 18 KEMANGGISAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000016, 'BCS COMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3070, '0072', 'BEFINDO SEJAHTERA ELEKTRONICS', 'JL. PROF DR LATUMENTEN RAYA NO.2D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000017, 'BEFINDO SEJAHTERA ELEKTRONICS', 'N', '-');
INSERT INTO `supplier` VALUES (3071, '0073', 'BENGAWAN KARYA SAKTI, PT', 'KAWAN INDUSTRI AGARINDO NO.168, CIKUPA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000018, 'BENGAWAN KARYA SAKTI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3072, '0074', 'BENGKEL AC & INTERIOR', 'APARTEMEN CITY PARK TOWER B1 NO.62', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000019, 'BENGKEL AC & INTERIOR', 'N', '-');
INSERT INTO `supplier` VALUES (3073, '0075', 'BENGKEL KARYA, CV', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000020, 'BENGKEL KARYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3074, '0076', 'BENGKEL MOTOR SS', 'JL. CILIK RIWUT KM 1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000021, 'BENGKEL MOTOR SS', 'N', '-');
INSERT INTO `supplier` VALUES (3075, '0077', 'BENUA MAKMUR PRINTING', 'JL. MUWARDI RAYA NO. 37 GROGOL', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000022, 'BENUA MAKMUR PRINTING', 'N', '-');
INSERT INTO `supplier` VALUES (3076, '0078', 'BERCA CAKRA TEKNOLOGI', 'JL ISKANDAR MUDA 8D JAKARTA SELATAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000023, 'BERCA CAKRA TEKNOLOGI', 'N', '-');
INSERT INTO `supplier` VALUES (3077, '0079', 'BERKAT HANDANY MOTOR', 'KOMP MEGA SPAREPART BLOK D NO.02 A-B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000047, 'BERKAT HANDANY MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3078, '0080', 'BERKAT, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000024, 'BERKAT, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3079, '0081', 'BERSAMA, PT', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001020000025, 'BERSAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3130, '0132', 'DAYA SANTOSA REKAYASA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001040000008, 'DAYA SANTOSA REKAYASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3264, '0266', 'LAUTAN LUAS, PT', 'Graha Indramas \r\nJl. AIP II K. S. Tubun Raya No. 77 Jakarta 11410 Indonesia', '+62 21 8066 0777', '+62 21 8066 0020', 'PUPUK', '-', 0, 'Hari', '-', 'N', '', '', '', 301001120000004, 'LAUTAN LUAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3265, '0267', 'LAUTAN TRANS JAYA', 'JL ALUMINIUM RAYA 5, TANJUNG MULIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000005, 'LAUTAN TRANS JAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3266, '0268', 'LG ELECTRONICS INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000006, 'LG ELECTRONICS INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3267, '0269', 'LIA MOTOR', 'JL CILIK RIWUT NO. 127 KM 1,5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000007, 'LIA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3268, '0270', 'LIMA SAUDARA, UD', 'JL.TJILIK RIWUT KM 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000008, 'LIMA SAUDARA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3269, '0271', 'LIMA UTAMA WISESA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000009, 'LIMA UTAMA WISESA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3270, '0272', 'LINTAS JAWA & SUMATRA, EKSPEDISI', 'JL KH MAS MANSUR NO. 38A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000010, 'LINTAS JAWA & SUMATRA, EKSPEDISI', 'N', '-');
INSERT INTO `supplier` VALUES (3271, '0273', 'LOGAM JAYA ALUMUNIUM', 'JL.MANUNGGAL II NO.38', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001120000011, 'LOGAM JAYA ALUMUNIUM', 'N', '-');
INSERT INTO `supplier` VALUES (3272, '0274', 'MADJU DJAJA, CV', 'JL. A.YANI KM.14.3, BANJARMASIN', '0511-4221625/26', '0511-4221627', '-', 'BP. YANTO', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000001, 'MADJU DJAJA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3273, '0275', 'MADY JAYA MOTOR', 'JL.RADIO DALAM RAYA 99A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000002, 'MADY JAYA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3274, '0276', 'MAHDUN, BPK.', 'JL. CILIK RIWUT KM 45 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000003, 'MAHDUN, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3275, '0277', 'MAHKOTA, TOKO', 'Jln. A.Yani 91, Palangkaraya 73111', '0536-3221671', '0536-3224221', '-', 'IBU. WATI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000004, 'MAHKOTA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3276, '0278', 'MAIZA LUBRIKA, PT', 'JLN PERAK TIMUR 52 LT.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000005, 'MAIZA LUBRIKA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3277, '0279', 'MAJU JAYA, TB', 'JL DARMO SUGONDO', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000006, 'MAJU JAYA, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3278, '0280', 'MANDALA JAYA AC', 'JL SUKARJO WIRYOPRANOTO 90E', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000007, 'MANDALA JAYA AC', 'N', '-');
INSERT INTO `supplier` VALUES (3279, '0281', 'MANDIRI SEJAHTERA BUANA', 'JL LAUTZE RAYA NO.51 KARANG ANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000008, 'MANDIRI SEJAHTERA BUANA', 'N', '-');
INSERT INTO `supplier` VALUES (3280, '0282', 'MANGGALA JATI, ALUMUNIUM', 'JL.ROBUSTA RAYA NO.7A, PONDOK KOPI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000009, 'MANGGALA JATI, ALUMUNIUM', 'N', '-');
INSERT INTO `supplier` VALUES (3281, '0283', 'MANTAP, PD', 'HWI LINDETEVES LT DASAR NO.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000010, 'MANTAP, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3282, '0284', 'MARSONO, BPK.', 'TUMBANG TELAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000011, 'MARSONO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3283, '0285', 'MASTEL SERVICE CENTER', 'JL ARTERI KELAPA DUA NO.1A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000012, 'MASTEL SERVICE CENTER', 'N', '-');
INSERT INTO `supplier` VALUES (3284, '0286', 'MEGA ELTRA, PT', 'BANJARMASIN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000013, 'MEGA ELTRA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3285, '0287', 'MEGA GLOBAL SOLUTION, PT', 'KOMP PERKANTORAN HARMONI PLAZA NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000014, 'MEGA GLOBAL SOLUTION, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3286, '0288', 'MEGA SURYA, UD', 'JL. GARUDA NO.7D,KEL. SUKADAMAI,MEDAN', '061-77111773', '061-4537877', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000015, 'MEGA SURYA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3287, '0289', 'MEGA TRUKINDO UTAMA, PT', 'JL.LINGKAR SELATAN JATAKE JAHA NO.61', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000016, 'MEGA TRUKINDO UTAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3288, '0290', 'MEROKE TETAP JAYA, PT', 'KOMP MEGA GLODOK KEMAYORAN BLOK B-7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000017, 'MEROKE TETAP JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3289, '0291', 'METRO TIGA BERLIAN, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000018, 'METRO TIGA BERLIAN, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3290, '0292', 'MEX BARLIAN DIRGANTARA, EKSPEDISI', 'JL P JAYAKARTA BLOK 24 NO.63-65', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000019, 'MEX BARLIAN DIRGANTARA, EKSPEDISI', 'N', '-');
INSERT INTO `supplier` VALUES (3291, '0293', 'MIRUSA GRAHA, PT', 'JL. GUNTUR NO.32', '021-8291900', '021-8291769', '-', 'BP.EFFENDI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000020, 'MIRUSA GRAHA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3292, '0294', 'MITRA FARMA APOTIK', 'PS PRAMUKA', '021-8511948', '021-8511948', '-', 'BP. CHAIRUL', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000021, 'MITRA FARMA APOTIK / CHAIRUL AMAL', 'N', '-');
INSERT INTO `supplier` VALUES (3293, '0295', 'MITRA INFOPARAMA, PT', 'JL SULTAN ISKANDAR MUDA NO. 7D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000022, 'MITRA INFOPARAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3294, '0296', 'MITRA JAYA, CV', 'JL KALIMAS BARU NO. 64', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000023, 'MITRA JAYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3295, '0297', 'MITRA NIAGA ABADI', 'JLN LABU 1 LT.DASAR NO.1121', '021-62307277/78', '021-62307278', 'TOKO SPAREPART', 'BPK HENDRA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000024, 'MITRA NIAGA ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3296, '0298', 'MITRA TIMUR LESTARI, PT', 'KOMPL.TAMAN DUTAMAS BLOK A6 NO.31-32', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000025, 'MITRA TIMUR LESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3297, '0299', 'MITRA USAHA POWERINDO', 'JLN TAMAN SARI VIII NO. 14C,JAKARTA', '021-62317052', '021-62317054', '-', 'BP. DEDY', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000026, 'MITRA USAHA POWERINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3298, '0300', 'MITSUI LEASING CAPITAL, PT', 'GEDUNG SATU LT.6 NO.609  - KELAPA GADING', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000027, 'MITSUI LEASING CAPITAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3299, '0301', 'MORTEN.SA, TOKO', 'LINDETEVES TRADE CENTER LT UG BLOK B7/3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000028, 'MORTEN.SA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3300, '0302', 'MUGI, PT', 'JL.PLN DUREN TIGA NO.99', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000029, 'MUGI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3301, '0303', 'MUHAMAD MANSYUR, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000030, 'MUHAMAD MANSYUR, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3302, '0304', 'MULIA JAYA KOMPUTER, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000031, 'MULIA JAYA KOMPUTER, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3303, '0305', 'MULIA JAYA, TB', 'JL PASAR KAHAYAN B1 L/18', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000032, 'MULIA JAYA, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3304, '0306', 'MULIA MAKMUR ABADI, PT', 'JLN DAAN MOGOT RAYA KM 18,8', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000033, 'MULIA MAKMUR ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3305, '0307', 'MULTI CHEMICAL, PD', 'JL PANGLIMA POLIM RAYA 125F', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000034, 'MULTI CHEMICAL, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3306, '0308', 'MULTI MAS CHEMINDO, PT', 'JL. IMAM BONJOL NO.40 MEDAN 20152', '061-4550039 / 4563016', '061-4550151', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000035, 'MULTI MAS CHEMINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3307, '0309', 'MULYANA MANDIRI, TOKO', 'JL KELAPA DUA RAYA GG LANGGAR NO.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000036, 'MULYANA MANDIRI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3308, '0310', 'MURNI BERLIAN MOTORS, PT', 'P A L A N G K A R A Y A', '0536-3234334 / 3234335', '0536-3234336', NULL, NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001130000037, 'MURNI BERLIAN MOTORS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3309, '0311', 'MUTUAGUNG LESTARI, PT', 'JL.RAYA BOGOR KM 33,5 NO.19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001130000038, 'MUTUAGUNG LESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3310, '0312', 'NAGA MAS, TOKO', 'JL DARMOSUGONDO NO. 88', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000001, 'NAGA MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3311, '0313', 'NALCO INDONESIA, PT', 'GEDUNG BRI II - 1506, JL.SUDIRMAN 44-46', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000002, 'NALCO INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3312, '0314', 'NAWILIS CAR CARE SPECIALIST', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000003, 'NAWILIS CAR CARE SPECIALIST', 'N', '-');
INSERT INTO `supplier` VALUES (3313, '0315', 'NEW SERDANG MOTOR', 'PASAR PALMERAH H3 BLOK A NO.12', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000004, 'NEW SERDANG MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3314, '0316', 'NEW STAR SPORT', 'JL PETAK BARU NO.7 PASAR PAGI LAMA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000005, 'NEW STAR SPORT', 'N', '-');
INSERT INTO `supplier` VALUES (3315, '0317', 'NIAGA TANI NUSANTARA', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000006, 'NIAGA TANI NUSANTARA', 'N', '-');
INSERT INTO `supplier` VALUES (3316, '0318', 'NIAGARA, TOKO', 'JL. DHARMO SUGONDO, PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', 'N', '8600149777', 'BCA', 'HM SYAIRAZI', 301001140000007, 'NIAGARA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3317, '0319', 'NIKYSAY, UD', 'JL.RADEN SALEH NO.7C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000008, 'NIKYSAY, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3318, '0320', 'NIPPON TEKNINDO, PT', 'JLN TRANSYOGI KM.6 CIBUBUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000009, 'NIPPON TEKNINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3319, '0321', 'NIRWANA TRANSPORT INDONESIA, EKSPEDISI', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000010, 'NIRWANA TRANSPORT INDONESIA, EKSPEDISI', 'N', '-');
INSERT INTO `supplier` VALUES (3320, '0322', 'NOORHASAN, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000011, 'NOORHASAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3321, '0323', 'NUSA PUSAKA KECANA, PT', 'PO BOX 35 BAHLIANG ESTATE TEBING TINGGI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000012, 'NUSA PUSAKA KECANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3322, '0324', 'NUSANTARA AUTOSERVICE', 'JL.CILIK RIWUT KM 1,6 NO 67', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000013, 'NUSANTARA AUTOSERVICE', 'N', '-');
INSERT INTO `supplier` VALUES (3323, '0325', 'NUSANTARA BERLIAN MOTOR, PD', 'JL PALMERAH UTARA NO.107 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000014, 'NUSANTARA BERLIAN MOTOR, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3324, '0326', 'NUSANTARA EXPRESS MANDIRI', 'JLN DURI 1 NO.9 BLOK A-1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001140000015, 'NUSANTARA EXPRESS MANDIRI', 'N', '-');
INSERT INTO `supplier` VALUES (3325, '0327', 'ONG ELECTRONIC', 'GLODOK HARCO LT 11 BLOK B2 NO.205A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001150000001, 'ONG ELECTRONIC', 'N', '-');
INSERT INTO `supplier` VALUES (3326, '0328', 'ONNA INTERIOR', 'JL. RS FATMAWATI NO. 5B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001150000002, 'ONNA INTERIOR', 'N', '-');
INSERT INTO `supplier` VALUES (3327, '0329', 'ONNA PRIMA UTAMA,PT', 'JL KAPUK UTARA 1 NO.3 JAKARTA 14460', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001150000003, 'ONNA PRIMA UTAMA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3328, '0330', 'PACIFIC COMMUNICATION', 'GLODOK HARCO LT.2 BLOC C NO.60', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000001, 'PACIFIC COMMUNICATION', 'N', '-');
INSERT INTO `supplier` VALUES (3329, '0331', 'PADI MAS MOTOR', 'JL.HADIAH 18, DAAN MOGOT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000003, 'PADI MAS MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3330, '0332', 'PAN PACIFIC INSURANCE, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000004, 'PAN PACIFIC INSURANCE, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3331, '0333', 'PANCA INDRATAMA, PT', 'JL.BENDUNGAN HILIR RAYA BLOK A/17', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000005, 'PANCA INDRATAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3332, '0334', 'PANDU COMMUNICATION', 'GLODOK HARCO BLOK C II NO. 278', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000006, 'PANDU COMMUNICATION', 'N', '-');
INSERT INTO `supplier` VALUES (3333, '0335', 'PARTIT KONDANG JAYA, CV', 'JL. JEND.SUDIRMAN KM 3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000007, 'PARTIT KONDANG JAYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3334, '0336', 'PASIFIC AUDIO', 'KOMP GLODOK PLAZA BLOK F NO.45', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000008, 'PASIFIC AUDIO', 'N', '-');
INSERT INTO `supplier` VALUES (3335, '0337', 'PELITA KARYA BAN, TOKO', 'JL. SAWAH BESAR 10 A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000009, 'PELITA KARYA BAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3336, '0338', 'PEMUDA BAJA RAYA, PT', 'TAMAN MERUYA BLOK M NO.33', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000010, 'PEMUDA BAJA RAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3337, '0339', 'PERISAI INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000011, 'PERISAI INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3338, '0340', 'PERTAMINA PATRA NIAGA, PT', 'GRAHA ELNUSA 15TH FL, TB SIMATUPANG K.1B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000012, 'PERTAMINA PATRA NIAGA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3339, '0341', 'PERTAMINA, PT', 'PULANG PISAU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000013, 'PERTAMINA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3340, '0342', 'PERUSAHAAN PERDAGANGAN IND. PT', 'JL. LAKS.L.RE.MARTADINATA 19', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000014, 'PERUSAHAAN PERDAGANGAN IND. PT', 'N', '-');
INSERT INTO `supplier` VALUES (3341, '0343', 'PHONIXINDO @ M2', 'MANGGA DUA MAL LANTAI 4 NO. A-16', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000015, 'PHONIXINDO @ M2', 'N', '-');
INSERT INTO `supplier` VALUES (3342, '0344', 'PIA PRATAMA CARGO, PT', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000016, 'PIA PRATAMA CARGO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3343, '0345', 'PIMSF PULOGADUNG, PT. (TJOKRO)', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000017, 'PIMSF PULOGADUNG, PT. (TJOKRO)', 'N', '-');
INSERT INTO `supplier` VALUES (3344, '0346', 'PLAZA AUTO PRIMA, PT', 'JL. PEMUDA RAYA 1 NO.6 JAKARTA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000018, 'PLAZA AUTO PRIMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3345, '0347', 'PMT INDUSTRIES (LABUAN) LTD', 'MALAYSIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000019, 'PMT INDUSTRIES (LABUAN) LTD', 'N', '-');
INSERT INTO `supplier` VALUES (3346, '0348', 'POLDA', 'K A L T E N G', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000020, 'POLDA', 'N', '-');
INSERT INTO `supplier` VALUES (3347, '0349', 'POLOWIJO GOSARI, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000021, 'POLOWIJO GOSARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3348, '0350', 'POSITIVE FOAM INDUSTRY, PT', 'JL BETRO INDUSTRI 20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000022, 'POSITIVE FOAM INDUSTRY, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3349, '0351', 'PPKS-MEDAN', 'JL. BRIGJEN KATAMSO NO.51, KP.BARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000023, 'PPKS-MEDAN', 'N', '-');
INSERT INTO `supplier` VALUES (3350, '0352', 'PRADIPTA NAYA GRIWA, PT', 'JL.PULOKAMBING II NO.26, PULOGADUNG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000024, 'PRADIPTA NAYA GRIWA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3351, '0353', 'PRAPTO, BPK.', 'GUNUNG MAS-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000025, 'PRAPTO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3352, '0354', 'PRATAMA LISTRIK', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000026, 'PRATAMA LISTRIK', 'N', '-');
INSERT INTO `supplier` VALUES (3353, '0355', 'PRIMA JAYA KOMINDO', 'JL PANGERAN JAYAKARTA 24/12A,JAKARTA', '021-6284393', '021-6390527 / 6597944', '-', 'IBU. NINA', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001160000027, 'PRIMA JAYA KOMINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3354, '0356', 'PRIMA MULIA ABADI, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000028, 'PRIMA MULIA ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3355, '0357', 'PRIMA SARANA TEKNIK', 'LTC GF2 BLOK A23 NO.3-7', '021-62303238', '021-62200848', '-', 'BP. ASEP', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001160000029, 'PRIMA SARANA TEKNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3356, '0358', 'PRIMAJAYA KOMPUTER', 'MALL AMBASSADOR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000030, 'PRIMAJAYA KOMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3357, '0359', 'PRIMANTARA SANDIESEL', 'JL BANDENGAN JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000031, 'PRIMANTARA SANDIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3358, '0360', 'PROMUDIA', 'MANGGA DUA MALL, LT.4, NO.3-4', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000032, 'PROMUDIA', 'N', '-');
INSERT INTO `supplier` VALUES (3359, '0361', 'AGRI HIKAY INDONESIA, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000033, 'AGRI HIKAY INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3360, '0362', 'PURWO TEKNIK', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000034, 'PURWO TEKNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3361, '0363', 'PURWO, BPK.', 'S I D O A R J O', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000035, 'PURWO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3362, '0364', 'PUTERA CORRY MAJU BERSAMA, PT', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000036, 'PUTERA CORRY MAJU BERSAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3363, '0365', 'PUTRA BORNEO NUSANTARA INDAH, PT', 'FORD JAKARTA TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000037, 'PUTRA BORNEO NUSANTARA INDAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3364, '0366', 'PUTRA HADISURYA MAHESA, PT', 'RUKO PALMERAH NO.11I', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000038, 'PUTRA HADISURYA MAHESA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3365, '0367', 'PUTRA JAYA MOTOR', 'JL.PALMERAH BERAT NO.11I/J', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000039, 'PUTRA JAYA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3366, '0368', 'PUTRAGUNA TYRE SERVICE CENTER', 'JL. FATMAWATI NO.11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000040, 'PUTRAGUNA TYRE SERVICE CENTER', 'N', '-');
INSERT INTO `supplier` VALUES (3367, '0369', 'QUANTUM - RAKITAN.NET', 'MANGGA DUA MALL, LV.5 BLOK D.26', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001170000001, 'QUANTUM - RAKITAN.NET', 'N', '-');
INSERT INTO `supplier` VALUES (3368, '0370', 'RADIAN JAYA POWERINDO', 'HARCO MANGGA DUA LT3 BLOK B NO.58', '021-62203394', '021-62203394', '-', 'IBU. IRA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001180000001, 'RADIAN JAYA POWERINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3369, '0371', 'RADIO DALAM RAYA MOTOR', 'JLN RADIO DALAM RAYA NO.49A-B', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000002, 'RADIO DALAM RAYA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3370, '0372', 'RAFINDO OCEAN TRANS ABADI, PT', 'JL. YOS SUDARSO BLOK I LT.2 NO. 6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000003, 'RAFINDO OCEAN TRANS ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3371, '0373', 'RAHMAD MOTOR', 'JL DARMO SUGONDO NO.5', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000004, 'RAHMAD MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3372, '0374', 'RAHMAT JAYA, MEUBEL', 'JL. BELIANG NO 007', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000005, 'RAHMAT JAYA, MEUBEL', 'N', '-');
INSERT INTO `supplier` VALUES (3373, '0375', 'RAJA KANTOR', 'JLN OTISTA RAYA NO.30 CAWANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000006, 'RAJA KANTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3374, '0376', 'RAJAWALI PENTA GRAFIKA, PT', 'JL.DR.MUWARDI RAYA NO.10-11', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000007, 'RAJAWALI PENTA GRAFIKA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3375, '0377', 'RAKSA INDO STEEL, PT', 'JLN RAYA SUMENGKO KM.30 WRINGINANOM', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000008, 'RAKSA INDO STEEL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3376, '0378', 'RAKSA PRATIKARA ASURANSI, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000009, 'RAKSA PRATIKARA ASURANSI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3377, '0379', 'RALON BAN', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000010, 'RALON BAN', 'N', '-');
INSERT INTO `supplier` VALUES (3378, '0380', 'RAMA JAYA, TOKO', 'JL RAJAWALI PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000011, 'RAMA JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3379, '0381', 'REJEKI, TOKO OBAT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000012, 'REJEKI, TOKO OBAT', 'N', '-');
INSERT INTO `supplier` VALUES (3380, '0382', 'REMAJA MOTOR', 'Jln Tanah Tinggi 1 No. 17B-C Jakarta pusat ', '021-4250175', '021-42800392', NULL, 'BP. DAVID', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001180000013, 'REMAJA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3381, '0383', 'RESTU JAYA SENTOSA', 'JLN BANGKA BLOK DII NO.3', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000014, 'RESTU JAYA SENTOSA', 'N', '-');
INSERT INTO `supplier` VALUES (3382, '0384', 'RIDWAN ENGENEERING', 'JLN. KRAMAT 1 NO.10 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000015, 'RIDWAN ENGENEERING', 'N', '-');
INSERT INTO `supplier` VALUES (3383, '0385', 'RIZAL COPY SERVICE', 'RUKAN MAHKOTA SIMPRUG BLOK A 10/7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000016, 'RIZAL COPY SERVICE', 'N', '-');
INSERT INTO `supplier` VALUES (3384, '0386', 'ROBBY FURNITURE', 'JL PANGLIMA POLIM RAYA NO.7A BLOK A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000017, 'ROBBY FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3385, '0387', 'ROLIMEX KIMIA NUSAMAS, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001180000018, 'ROLIMEX KIMIA NUSAMAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3386, '0388', 'SAGALA, BPK.', 'TB.TALAKEN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000001, 'SAGALA, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3387, '0389', 'SAHABAT, TOKO', 'JL. A.YANI KM.8 NO.7,BANJARMASIN', '0511-4281838', '0511-4283717', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000002, 'SAHABAT, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3388, '0390', 'SAHANA MOTOR, BENGKEL', 'JL.RADIO DALAM RAYA 99A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000003, 'SAHANA MOTOR, BENGKEL', 'N', '-');
INSERT INTO `supplier` VALUES (3389, '0391', 'SALAMAH, IBU', 'PALANGKARAYA-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000004, 'SALAMAH, IBU', 'N', '-');
INSERT INTO `supplier` VALUES (3390, '0392', 'SAMAFITRO, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000005, 'SAMAFITRO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3391, '0393', 'SAMUDRA MAS, TOKO', 'JL P. ANTASARI NO.123 RUKO DEKAT PASAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000006, 'SAMUDRA MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3392, '0394', 'SANJAYA TEHNIK, TOKO', 'PLAZA JAYAKARTA NO.1119 JL. LABU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000007, 'SANJAYA TEHNIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3393, '0395', 'SANJAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000008, 'SANJAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3394, '0396', 'SAPROTAN UTAMA, CV', 'KOMPLEKS KEDOYA ELOK PLAZA BLOK DB-34', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000009, 'SAPROTAN UTAMA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3395, '0397', 'SARANA INTI PRATAMA, PT', 'PEKANBARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000010, 'SARANA INTI PRATAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3396, '0398', 'SARANA PRIMA LESTARI, CV', 'JL.PRAMUKA NO.3 RT.16', '0511-3269593', '0511-3272142 / 3252455', '-', 'BP. MUKLAS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000011, 'SARANA PRIMA LESTARI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3397, '0399', 'SARI HIKMAH NUSANTARA, CV', 'JLN KECAPI NO.1 BEJI TIMUR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000012, 'SARI HIKMAH NUSANTARA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3398, '0400', 'SARI MURAH, TOKO', 'Ps Palmerah lt dasar AK5 No.1', '021-53668699', '021-53668699', '-', 'IBU. ESTER HERMANTO', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000013, 'SARI MURAH, TOKO / ESTER', 'N', '-');
INSERT INTO `supplier` VALUES (3399, '0401', 'SATRIA BUANA TEHNIK', 'LTC LANTAI 2 BLOK B8 NO. 7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000014, 'SATRIA BUANA TEHNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3400, '0402', 'SEDERHANA MOTOR', 'JL DARMOSUGONDO NO.55 ,PALANGKARAYA', '0536-3222718', '0536-3221498', '-', 'IBU. LUSY', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000015, 'SEDERHANA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3401, '0403', 'SEFAS KELIANTAMA, PT', 'JL.CIDENG BARAT NO.87, JAKARTA PUSAT', '021-3858756', '021-3866056', NULL, 'IBU.YENNE', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000016, 'SEFAS KELIANTAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3402, '0404', 'SEIRAMA, UD', 'KUALA KAPUAS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000017, 'SEIRAMA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3403, '0405', 'SEJAHTERA RAYA, CV', 'BEKASI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000018, 'SEJAHTERA RAYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3404, '0406', 'SELARAS NUSA ABADI, PT', 'JL. TB. SIMATUPANG NO. 14', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000019, 'SELARAS NUSA ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3405, '0407', 'SEMBADA GRAHA PERSADA, PT', 'JLPEJATEN BARAT II NO.80', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000020, 'SEMBADA GRAHA PERSADA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3406, '0408', 'SEMESTA MANDIRI INDONESIA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000021, 'SEMESTA MANDIRI INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3407, '596', 'SENTANA ADIDAYA PRATAMA, PT', 'JL TEMBUS MENTUIL NO,90 RT 04 BANJARMASIN ', '08125048480', '-', 'SUPPLIER PUPUK ', 'BPK SETIO', 30, 'Hari', '01 907 041.6-092.000', 'Y', NULL, NULL, NULL, 301001190000022, 'SENTANA ADIDAYA PRATAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3408, '0410', 'SENTRA TEKNIK', 'PERTOKOAN GLODOK JAYA NO.17', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000023, 'SENTRA TEKNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3409, '0411', 'SENTRAL TEKNOLOGI RAKSA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000024, 'SENTRAL TEKNOLOGI RAKSA', 'N', '-');
INSERT INTO `supplier` VALUES (3410, '0412', 'SENTRASARANA TIRTABENING, PT', 'MANGGA BESAR RAYA 81', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000025, 'SENTRASARANA TIRTABENING, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3411, '0413', 'SERBA AGUNG TEHNIK', 'LTC Lt.2 Blok C43 No.2 Jakarta ', '021-62201560 / 62316988', '021-62201561', '-', 'BP. TEDDY', 30, 'Hari', '-', 'N', '', '', '', 301001190000026, 'SERBA AGUNG TEHNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3412, '0414', 'SETIA WIJAYA', 'JL PELITA 107A RT028/005 MENTAWA BARU', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000027, 'SETIA WIJAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3413, '0415', 'SHOP AND DRIVE', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000028, 'SHOP AND DRIVE', 'N', '-');
INSERT INTO `supplier` VALUES (3414, '0416', 'SIMPRUG MOBIL', 'JL.SULTAN ISKANDAR MUDA NO.1, KEBAYORAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000029, 'SIMPRUG MOBIL', 'N', '-');
INSERT INTO `supplier` VALUES (3415, '0417', 'SINAR BARU, TOKO', 'JL DARMO SUGONDO NO.39', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000030, 'SINAR BARU, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3416, '0418', 'SINAR BARU, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000031, 'SINAR BARU, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3417, '0419', 'SINAR BINTANG ABADI', 'LTC GLODOK LT. UG BLOK A2 NO.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000032, 'SINAR BINTANG ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3418, '0420', 'SINAR INTI TEKNOLOGI, PT', 'JL. MANYAR JAYA I NO.32', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000033, 'SINAR INTI TEKNOLOGI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3419, '0421', 'SINAR KAHAYAN, TOKO', 'JL DARMO SUGONDO NO.17 PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000034, 'SINAR KAHAYAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3420, '0422', 'SINAR MANDIRI KREASINDO, CV', 'JL.TAMANSARI RAYA BLOK D28 NO.08-09', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000035, 'SINAR MANDIRI KREASINDO, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3421, '0423', 'SINAR PLASTIK', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000036, 'SINAR PLASTIK', 'N', '-');
INSERT INTO `supplier` VALUES (3422, '0424', 'SINAR SELATAN, TOKO', 'JL PANGLIMA POLIM RAYA NO. 192', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000037, 'SINAR SELATAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3423, '0425', 'SINAR TERANG (TIREZONE), UD', 'JL. UNDAAN KULON NO. 29 SURABAYA', '031-5328818', '031-5323698', '-', 'BP. HENDRA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000038, 'SINAR TERANG (TIREZONE), UD', 'N', '-');
INSERT INTO `supplier` VALUES (3424, '0426', 'SINAR TERANG ABADI, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000039, 'SINAR TERANG ABADI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3425, '0427', 'SINARALAM DUTAPERDANA II, PT', 'JL. KP TENDEAN NO.174 LT.II BANJARMASIN', '0511-3268280', '0511-3268174', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000040, 'SINARALAM DUTAPERDANA II, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3426, '0428', 'SOCFIN INDONESIA, PT', 'MEDAN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000041, 'SOCFIN INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3427, '0429', 'SOLARTEK, PT', 'JL.TAMAN PENDIDIKAN NO.2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000042, 'SOLARTEK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3428, '0430', 'SOLO TEHNIK', 'LTC HWI LT DASAR BLOK D NO.80', '021-6244641', '021-6244641', '-', 'IBU. ALVINA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000043, 'SOLO TEHNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3429, '0431', 'SUARA MAS, TOKO', 'JLN IR. H JUANDA NO.17 CIPUTAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000044, 'SUARA MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3430, '0432', 'SUBUR BAN MOTOR', 'JL DR MURJANI NO. 36 LANGKAI PAHANDUT,PALANGKARAYA', '0536-3225309', '0536-3225309', '-', 'IBU. YANA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000045, 'SUBUR BAN MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3431, '0433', 'SUCOFINDO, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000046, 'SUCOFINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3432, '0434', 'SUKSES MOTOR', 'JL MANDALA RAYA NO.6 TOMANG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000047, 'SUKSES MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3433, '0435', 'SUKSES TUNGGAL MANDIRI, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000048, 'SUKSES TUNGGAL MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3434, '0436', 'SUMBER AGRINDO SEJAHTERA, PT', 'BANJARMASIN', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000049, 'SUMBER AGRINDO SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3435, '0437', 'SUMBER BERLIAN MOTOR, PT', 'KM 10,300 KERTAK HANYAR', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000050, 'SUMBER BERLIAN MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3436, '0438', 'SUMBER KARYA, TOKO', 'JLN DARMOSUGONDO 72', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000051, 'SUMBER KARYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3437, '0439', 'SUMBER MAWAR MOTOR', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000052, 'SUMBER MAWAR MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3438, '0440', 'SUMBER MAWAR TEHNIK', 'JL NIAS 10', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000053, 'SUMBER MAWAR TEHNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3439, '0441', 'SUMBER MULIA', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000054, 'SUMBER MULIA', 'N', '-');
INSERT INTO `supplier` VALUES (3440, '0442', 'SUMBER REZEKI, TOKO', 'LINDETEVES TRADE CENTER GF2 A25 N0.7', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000055, 'SUMBER REZEKI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3441, '0443', 'SUMBER UTAMA BEARING', 'Krekot Jaya Molek Blok C3/1 Jakarta Pusat 10710', '021-3440421, 3505008', '021-344 0425', NULL, NULL, 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000056, 'SUMBER UTAMA BEARING', 'N', '-');
INSERT INTO `supplier` VALUES (3442, '0444', 'SUMBERPARTS BERINDO, PT', 'J A K A R T A', '021-3440421', '021-3440425', '-', NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000057, 'SUMBERPARTS BERINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3443, '0445', 'SUN STAR PRIMA MOTOR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000058, 'SUN STAR PRIMA MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3444, '0446', 'SUNDA MOTOR, TOKO', 'J A K A R T A', '021-384 6970', '021-384 6970', '-', NULL, 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001190000059, 'SUNDA MOTOR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3445, '0447', 'SUPER DIESEL', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000060, 'SUPER DIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3446, '0448', 'SUPRIANTO, BPK.', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000061, 'SUPRIANTO, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3447, '0449', 'SURYA BORNEO TRACTOR, TOKO', 'B A N J A R M A S I N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000062, 'SURYA BORNEO TRACTOR, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3448, '0450', 'SURYA CHANDRA, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000063, 'SURYA CHANDRA, BPK.', 'N', '-');
INSERT INTO `supplier` VALUES (3449, '0451', 'SURYA KENCANA SS., BENGKEL', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000064, 'SURYA KENCANA SS., BENGKEL', 'N', '-');
INSERT INTO `supplier` VALUES (3450, '0452', 'SURYA MANUNGGAL AGRO SEJATI,PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000065, 'SURYA MANUNGGAL AGRO SEJATI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3451, '0453', 'SURYA NUSA AGRO MAKMUR, PT', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000066, 'SURYA NUSA AGRO MAKMUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3452, '0454', 'SURYA TANI, UD', 'M E D A N', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000067, 'SURYA TANI, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3453, '0455', 'SUTINDO RAYA MULIA', 'JL TANJUNG SARI 44I SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000068, 'SUTINDO RAYA MULIA', 'N', '-');
INSERT INTO `supplier` VALUES (3454, '0456', 'SWEET CORNER STATIONERY', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000069, 'SWEET CORNER STATIONERY', 'N', '-');
INSERT INTO `supplier` VALUES (3455, '0457', 'TAIKO PERSADA INDOPRIMA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000001, 'TAIKO PERSADA INDOPRIMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3456, '0458', 'TAMARA, TOKO', 'P A L A N G K A R A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000002, 'TAMARA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3457, '0459', 'TEDJO JAYA DIESEL, UD', 'JL HUSIN II / 1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000003, 'TEDJO JAYA DIESEL, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3458, '0460', 'TEGUH ANUGERAH, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000004, 'TEGUH ANUGERAH, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3459, '0461', 'TEGUH ANUGRAH, UD', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000005, 'TEGUH ANUGRAH, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3460, '0462', 'TEGUH, PD', 'SURABAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000006, 'TEGUH, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3461, '0463', 'TEHNIK UTAMA, TOKO', 'JL HALMAHERA 15 LANGKAI, PAHADUT', '0536-3229682', '0536-3235575', '-', 'BU HUSNA / BU IMAR', 0, 'Hari', '-', 'N', '031 00989 58963', 'Bank Mandiri', 'Hj Misliyani', 301001200000007, 'TEHNIK UTAMA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3462, '0464', 'TEKNIK BAN, TOKO', 'JL DR MURJANI 7, LANGKAI PAHANDUT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000008, 'TEKNIK BAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3463, '0465', 'TELAGA MULYA, CV', 'JL FLAMBOYAN RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000009, 'TELAGA MULYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3464, '0466', 'TERBIT, PD', 'RUKO WISMA HARAPAN BLOK E-1 NO.34', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000010, 'TERBIT, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3465, '0467', 'TERUS JAYA, TOKO', 'HWI LINDETEVES LT.DASAR BLOK DKS NO.111', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000011, 'TERUS JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3466, '0468', 'THOMINDO MANDIRI SUKSES, PT', 'JL. HUSEIN S.NEGARA 22A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000012, 'THOMINDO MANDIRI SUKSES, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3467, '0469', 'TIGA DARA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000013, 'TIGA DARA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3468, '0470', 'TIMUR BARU, TB', 'JL. PANGLIMA POLIM RAYA NO.54', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000014, 'TIMUR BARU, TB', 'N', '-');
INSERT INTO `supplier` VALUES (3469, '0471', 'TIMUR JAYA, TOKO', 'PS.MOBIL KEMAYORAN BLOK 5/III-H', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000015, 'TIMUR JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3470, '0472', 'TJANDI MAS, TOKO', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000016, 'TJANDI MAS, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3471, '0473', 'TJOKRO BERSAUDARA BANJARINDO, PT', 'JL.A.YANI KM12.9 , BANJARMASIN', '0511-4220489', '0511-4220499', '-', '-', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001200000017, 'TJOKRO BERSAUDARA BANJARINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3472, '0474', 'TJOKRO PUTRA PERSADA, PT', 'JL. EROPA 1 KAV.G2 - KIEC - CILEGON', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000018, 'TJOKRO PUTRA PERSADA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3473, '0475', 'TOKO ( KAS )', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000019, 'TOKO ( KAS )', 'N', '-');
INSERT INTO `supplier` VALUES (3474, '0476', 'TRACLINK AUTO PART', 'RUKO GALAXY BLOK O NO.60 CENGKARENG', '021-55957434', '021-55957434', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001200000020, 'TRACLINK AUTO PART', 'N', '-');
INSERT INTO `supplier` VALUES (3475, '0477', 'TRACLINKDO MAKMUR', 'RUKO GALAXY BLOK O NO.50 CENGKARENG', '021-5595 7434', '021-5595 7434', NULL, 'Bp.Agus', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001200000021, 'TRACLINKDO MAKMUR', 'N', '-');
INSERT INTO `supplier` VALUES (3476, '0478', 'TRAKTOR NUSANTARA, PT', 'JL PULOGADUNG NO. 32 KAWASAN INDUSTRI PULOGADUNG, JAKARTA 13930 - 1403/JAT (13014)', '4608836.4608840.4603657', '4508843. 45820763', 'ALAT BERAT ', 'FAHRI FAJRI ', 0, 'Hari', '-', 'Y', '', '', '', 301001200000022, 'TRAKTOR NUSANTARA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3477, '0479', 'TRIMEGA POWER', 'KOMP.MEGA SPARE PART JL. TAMAN SARI RAYA BLOK.D1 NO.1A', '021-6262107', '021-6262723', '-', 'IBU. HUSNUL', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001200000023, 'TRIMEGA POWER', 'N', '-');
INSERT INTO `supplier` VALUES (3478, '0480', 'TRISULA INTI USAHA, PT', 'JL. CIPINANG JAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000024, 'TRISULA INTI USAHA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3479, '0481', 'TUNAS HARAPAN BARU, PT', 'JL.JEND SUDIRMAN NO.10/22', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000025, 'TUNAS HARAPAN BARU, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3480, '0482', 'TUNAS RIDEAN TBK, PT', 'JLN RAYA KEBAYORAN LAMA NO.38 PALMERAH', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000026, 'TUNAS RIDEAN TBK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3481, '0483', 'TUNAS TOYOTA RADIN INTEN', 'JL.RADIN INTEN II NO.62', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001200000027, 'TUNAS TOYOTA RADIN INTEN', 'N', '-');
INSERT INTO `supplier` VALUES (3482, '0484', 'UNGGUL JAYA DIESEL', 'JL. BEKASI I / 21C, JATINEGARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001210000001, 'UNGGUL JAYA DIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3483, '0485', 'UNI PARAMANDALA PATHYA, PT', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001210000002, 'UNI PARAMANDALA PATHYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3484, '0486', 'UNITED MOBIL INTERNATIONAL, PT', 'JL.CILIK RIWUT KM.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001210000003, 'UNITED MOBIL INTERNATIONAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3485, '0487', 'UNITED TRACTORS, PT', 'JL. JEND.SUDIRMAN KM.7.2,SAMPIT, KALIMANTAN TENGAH', '0531-2035706/16/26', '0531-', 'SUPPLIER SPAREPART KOMATSU', 'BPK RIDHO', 0, 'Hari', '01.308.524.6-091.000', 'Y', '031-0004957703', 'BANK MANDIRI ', 'PT UNITED TRACTOR TBK', 301001210000004, 'UNITED TRACTORS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3486, '0488', 'V21, TOKO', 'JLN SAWAH BESAR 1 NO.21 JAKARTA', '021-625 8496', '021-649 7372', '-', 'IBU. WIDIA', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001220000001, 'V21, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3487, '0489', 'VENETA SYSTEM', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001220000002, 'VENETA SYSTEM', 'N', '-');
INSERT INTO `supplier` VALUES (3488, '0490', 'VICENZA', 'JL. RADIO DALAM RAYA NO.14A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001220000003, 'VICENZA', 'N', '-');
INSERT INTO `supplier` VALUES (3489, '0491', 'VITALI, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001220000004, 'VITALI, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3490, '0492', 'WAHANA AUTO EKAMARGA, PT', 'JL LETJEN S PARMAN KAV N-1', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000001, 'WAHANA AUTO EKAMARGA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3491, '0493', 'WAREKON GEOPERTA UTAMA SEJATI, PT', 'B E K A S I', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000002, 'WAREKON GEOPERTA UTAMA SEJATI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3492, '0494', 'WELLRACOM NUSANTARA, PT', 'S U R A B A Y A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000003, 'WELLRACOM NUSANTARA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3493, '0495', 'WELLY, TOKO LISTRIK', 'JL PALMERAH BARAT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000004, 'WELLY, TOKO LISTRIK', 'N', '-');
INSERT INTO `supplier` VALUES (3494, '0496', 'WILLIAM JAYA MOTOR, TK', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000005, 'WILLIAM JAYA MOTOR, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3495, '0497', 'WIRA MEGAH PROFITAMAS, PT', 'JL.TJILIK RIWUT KM.5 NO.6', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001230000006, 'WIRA MEGAH PROFITAMAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3496, '0498', 'X-COM MEDIA', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001240000001, 'X-COM MEDIA', 'N', '-');
INSERT INTO `supplier` VALUES (3497, '0499', 'YAMAICA', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001250000001, 'YAMAICA', 'N', '-');
INSERT INTO `supplier` VALUES (3498, '0500', 'YANCHE JAYA, CV', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001250000002, 'YANCHE JAYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3499, '0501', 'YAYAN PUTRA BAHARINDO PT.', 'JL.ALIPANDI SARJEN NO 43 RT 09', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001250000003, 'YAYAN PUTRA BAHARINDO PT.', 'N', '-');
INSERT INTO `supplier` VALUES (3500, '0502', 'YESTV INDONESIA, PT', 'JL RADIO DALAM RAYA NO.17A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001250000004, 'YESTV INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3501, '0503', 'ZOE MUSIC', 'JL A.YANI SEBELAH BANK BRI', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001260000001, 'ZOE MUSIC', 'N', '-');
INSERT INTO `supplier` VALUES (3502, '0504', 'ELCO ELEKTRONIK', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001050000013, 'ELCO ELEKTRONIK', 'N', '-');
INSERT INTO `supplier` VALUES (3503, '0505', 'SUMBER ARUM ABADI, PT', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001190000077, 'SUMBER ARUM ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3504, '0506', 'LIMAS LABORATORY ABADI', 'JL.SERSAN ASWAN NO.70,RAWA SEMUT,BEKASI TIMUR', '021-98991439', '021-88347133', '-', 'BP. DEDI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001120000014, 'LIMAS LABORATORY ABADI', 'N', '-');
INSERT INTO `supplier` VALUES (3505, '0507', 'VICTORIA PRIMA PERKASA,PT', 'JL GARUDA NO.34-E KEMAYORAN JAKARTA UTARA 10610', '021-4207318', '021-4207317', 'PERALATAN LAB ', 'BU LENNA', 0, 'Hari', '-', 'N', '070 1960 475', 'BANK PERMATA ', 'PT VICTORIA PRIMA PERKASA', 301001220000006, 'VICTORIA PRIMA PERKASA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3506, '0508', 'PRIMA SENTOSA PRATAMA PUTRA', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001160000044, 'PRIMA SENTOSA PRATAMA PUTRA', 'N', '-');
INSERT INTO `supplier` VALUES (3507, '0509', 'PANAMAS SEJAHTERA, PT', 'JL CEMPEDAK IV BLOK G9 NO.29 PAMULANG ESTATE, TANGSEL ', '021-236373359', '021-7413230', 'BORDIR ', 'BPK BENNY ', 0, 'Hari', '-', 'N', '1.127.01.000124.30-4', 'BANK BRI  KCP PAMULANG ', 'PT PANAMAS SEJAHTERA', 301001160000041, 'PANAMAS SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3508, '0510', 'BUANA SURVEY', 'JLN MUCHTAR RAYA NO.1D KREO', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 301001020000040, 'BUANA SURVEY', NULL, NULL);
INSERT INTO `supplier` VALUES (3509, '511', 'INDAH UTAMA,PD', '-', '021-6283831', '021-6248287', '-', 'BP. ARDIAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001020000044, 'BANJAR BEARING SENTOSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3510, '512', 'SEGELINDO PUTRA MANDIRI, CV ', 'JLN KAJI RAYA NO.221 JAKARTA PUSAT', '-', '-', '-', '-', 1, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000070, 'SEGELINDO PUTRA MANDIRI', 'N', '-');
INSERT INTO `supplier` VALUES (3511, '513', 'JNE EXPRESS', 'JL. RADIO DALAM RAYA', '021-', '021-', 'EKSPEDISI', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001140000017, 'NUSA JAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3512, '514', 'JAYATECH PALMINDO', 'KAWASAN INDUSTRI MEDAN 2 JL PULAU SOLOR NO.18 KEC. PERCUT SEI TUAN, DELI SERDANG 20371 SUMATERA UTARA', '061 6871988', '061-6871983', '-', 'SUSANTO MARGONO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001100000014, 'JAYATECH PALMINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3513, '515', 'TITIPAN INTERNAL', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 0, NULL, 'N', '-');
INSERT INTO `supplier` VALUES (3514, '516', 'NUSA JAYA', 'HARCO MANGGA DUA LT.2 BLOK.B2-77,99,100', '021-6013830 / 6121831', '021-6125485', 'COMPUTER', 'RINI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001140000017, 'NUSA JAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3515, '517', 'PUTRA BENGAWAN MANDIRI,CV', 'JL. GUB.SOEBARJO/LINGKAR SELATAN,BANJARBARU', '0511-7755597', '0511-', '-', 'BP. FRANS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000046, 'PUTRA BENGAWAN MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3516, '518', 'DJUN ELECTRONIC', 'RUKO GLODOK MAKMUR NO.26 , JAKARTA', '021-6590104', '021-6590117', '-', 'IBU. ELLIS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001040000026, 'DJUN ELECTRONIC', 'N', '-');
INSERT INTO `supplier` VALUES (3517, '519', 'CENTURY COMPUTER', 'HARCO MANGGA DUA BLOK.A LT.1 NO. 20 JAK-UT', '021-62307455 / 6121484', '021-62307455 / 6121484', '-', 'IBU. ATRIA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001030000028, 'CENTURY COMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3518, '520', 'KARIMA MOTOR', 'BANJARMASIN', '0511-7759227', '0511', '-', '-', 0, 'Hari', '-', '-', '0310007116661', 'MANDIRI', 'UMI ASTI', 301001110000018, 'KARIMA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3519, '521', 'ALAM JEMBAR BARU,PT', 'Komp.Perumahan Pembina No.75 Jl. HM.Arsyad/Jl.Pembina 1 Sampit', '0531-33311', '0531-33311', '-', 'IBU. SYARI LIANI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000063, 'ALAM SEMBAR BAR, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3520, '522', 'MEGA JAYA MANDIRI', 'JL. BUNI BLOK.J NO.28-30,JAKARTA BARAT', '021-6241196', '021-6243285', '-', 'BP. RIO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000040, 'MEGA JAYA MANDIRI', 'N', '-');
INSERT INTO `supplier` VALUES (3521, '523', 'JAYA TEKNIK,CV', 'Taman Sari Raya No.37A', '021-6296106', '021-6241678', NULL, 'Bp. Hambali', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001100000013, 'JAYA TEKNIK, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3522, '524', 'CIPTA SINERGI MANDIRI,CV', 'JL. RAYA TIPAR CAKUNG,GRIYA TIPAR CAKUNG NO.7,JAK-TIM', '021-90277133 / 49551076', '021-49551076', '-', 'IBU.ARINY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001030000029, 'CIPTA SINERGI MANDIRI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3523, '525', 'SENTRA MULIA MANDIRI,PT', 'JL.TAMAN SARI RAYA 10 NO.10,JAK-PUS', '021-6259802 / 6259716', '021-62309647', '-', 'BP. DAVID', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000072, 'SENTRA MULIA MANDIRI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3524, '526', 'SUKSES MANDIRI SENTOSA,CV', 'JL.A.YANI KM 15,5 NO.3 SAMPING KANTOR PLN BAMBUT,BANJARMASIN', '0511-4220026', '0511-4221598', '-', 'BP. RIDWAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000076, 'SUKSES MANDIRI SENTOSA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3525, '527', 'UNITED PRATAMA,UD', 'JL. A.YANI KM.3,5 NO.7 BANJARMASIN', '0511-3258066', '0511-3258066', '-', 'BP. VERNANDY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001210000005, 'UNITED PRATAMA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3526, '528', 'AGRINDO KALIMANTAN LESTARI ', 'JL PANGERAN SURIANSYAH NO.32 BANJARBARU - KAL SEL 70711', '0511 4777407 / 4871459', '0511 4773135', 'SUPPLIER PART PABRIK ', 'EDDY CHALIKDJEN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000010, 'AGRINDO KALIMANTAN LESTARI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3527, '529', 'LEGENDA FURNITURE', 'JL RAYA SERPONG KM.7 NO.88D-E-F SERPONG, TANGGERANG 15123', '021 53121132, 53125869', '021 53125869', 'FURNITURE', 'BU RINA', 0, 'Hari', '-', '-', '883 0520 555', 'BCA ', 'RICHAELD', 301001120000013, 'LEGENDA FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3528, '530', 'MIRUSA GRAHA,PT', 'Jl. Guntur No.32 Manggarai', '021-8291900', '021-8291769', '-', 'BP. EFFENDI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000020, 'MIRUSA GRAHA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3529, '531', 'PT ELCOLAB INTERNATIONAL INDONESIA ', 'JL PAHLAWAN DESA KARANGASEM TIMUR, CITEREUP. BOGOR 16810', '021-8753175. 87940010', '021-8753167', 'SUPPLIER CHEMICAL ', 'BPK SOLEHUDIN ', 30, 'Hari', '01.061.597.9-052.000', 'Y', '0-105234-015', 'CITIBANK ', 'PT ELCOLAB INTERNATIONAL INDONESIA', 301001050000012, 'ECO LAB INTERNATIONAL INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3530, '532', 'SUMBER JAYA ', 'JL. S. PARMAN\r\nPALANGKARAYA ', '0536-3290039 / 08125116639', '-', 'SUPPLIER BESI ', 'BPK HARIJONO / DICKY', 0, 'Hari', '-', '-', '8600.472.888', 'BCA ', 'HARIJONO TAUFIK', 301001190000078, 'SUMBER JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3531, '533', 'KEJURUTERAAN WANG YUEN SDN BHD', '11. JALAN TIGA. OOF JALAN CHAN SOW LIN, 55200 KUALA LUMPUR, MALAYSIA ', '603-922 10331', '603-922 11039', 'SPAREPART PABRIK ', 'DANIEL CHEONG', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301501110000002, 'KEJURUTERAAN WANG YUEN SDN BHD', 'N', '-');
INSERT INTO `supplier` VALUES (3532, '534', 'ARITA PRIMA INDONESIA,PT', 'JL. TJILIK RIWUT KM.2,5 RUKO NO.3 & 4 SAMPIT', '0531-32129', '0531-31262', '-', 'BP. DIDI AHMAD', 30, 'Hari', '-', '-', '428.167.8668', 'BANK BCA', 'PT ARITA PRIMA INDONESIA', 301001010000044, 'ARITA PRIMA INDONESIA TBK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3533, '535', 'HARTA BAN INDONESIA,PT', 'Gd.Menara Satu Sentra Kelapa Gading Lt 0705 Jl.Boulevard Kelapa Gading LA3 No.1', '021- 2937 5677', '021- 2937 5795', '-', 'BP. AGUNG ANUGROHO', 30, 'Hari', '31.328.250.1-043.000', 'Y', NULL, NULL, NULL, 301001080000024, 'HARTA BAN INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3534, '536', 'KEN ELECTRIC', 'GLODOK MAKMUR LT.DASAR', '021-6009071', '021-6009071', '-', 'BP. BUDI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001110000019, 'KEN ELECTRICS', 'N', '-');
INSERT INTO `supplier` VALUES (3535, '537', 'FORTUNA,TOKO', 'JL. MT.HARYONO NO.25, SAMPIT', '-', '-', '-', 'BP. ALIANUR', 0, 'Hari', '-', '-', '1590005538888', 'MANDIRI', 'Mohamad Alianur', 301001060000007, 'FORTUNA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3536, '538', 'SPACE COMPUTER', 'Mangga Dua MALL Lt.5 Blok C No.20-24 | 021-6124560', '021 6124560 / 02193530752', NULL, NULL, 'Bp. Fadli', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000074, 'SPACE COMPUTER, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3537, '539', 'AKR CORPORINDO TBK, PT ', 'WISMA AKR 8TH FLOOR JL PANJANG NO.5 KEBON JERUK, JAKARTA BARAT 11530', '021-5311110', '021-5311388', 'PEMASOK BBM SOLAR', 'EKO NIKO ', 0, 'Hari', '-', '-', '117-00-333-66667 ', 'BANK MANDIRI', 'PT. AKR Corporindo Tbk', 301001010000022, 'AKR CORPORINDO TBK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3538, '540', 'GEMILANG AUDIO,TOKO', 'GLODOK PLAZA LT. DASAR BLOK. GF50', '021-62307250', '021-62307250', '-', 'KO ASAU', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001070000025, 'GEMILANG AUDIO, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3539, '541', 'NUSANTARA NURAGA. PT ', 'Jl.Jafry zam-zam no 4 Rt31 Rw 03, Kuin Cerucuk, Banjarmasin Barat,\r\nBanjarmasin, Kalimantan Selatan 70129', '0511 - 3367309', '0511 - 3367309', 'SUPPLIER BBM INDUSTRI', 'SURYO BASUKI', 0, 'Hari', '-', '-', '120.000.979.7916', 'BANK MANDIRI CAB.SUNTER PARADISE', 'PT NUSANTARA NURAGA', 301001140000018, 'NUSANTARA NURAGA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3540, '542', 'KALIANDA GOLDEN BUNKER,PT', 'JL. K.P TENDEAN NO.174 RT.17 LT.II BANJARMASIN', '0511-3268280', '0511-3268174', NULL, 'IBU. HANDINDA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001110000017, 'KALIANDA GOLDEN BUNKER, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3541, '543', 'CENTRAL CASTELINDO ABADI,CV', 'PERUM METRO 2 BLOK D5 NO.20,KARANG TENGAH,CILEDUG,TANGERANG', '082126250069', '-', '-', 'BP. ALDO PERMANA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001030000027, 'CENTRAL CASTELINDO ABADI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3542, '544', 'AUTO 2000 SUDIRMAN', 'JL JEND. SUDIRMAN NO.5 JAKARTA PUSAT', '021-5303325', '021-5737027', 'DEALER TOYOTA', 'FERY FAIZAL', 0, 'Hari', NULL, '-', NULL, NULL, NULL, 301001010000058, 'AUTO 2000- SUDIRMAN', 'N', '-');
INSERT INTO `supplier` VALUES (3543, '545', 'AUTO 2000 CILANDAK', 'JL TB.SIMATUPANG - LEBAK BULUS CILANDAK JAKARTA 12430', '021-7651025', '021-7505308', 'DEALER TOYOTA', 'YOGI YOGASWARA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000059, 'AUTO 2000-CILANDAK', 'N', '-');
INSERT INTO `supplier` VALUES (3544, '546', 'TUNAS BAHANA SPARTA,PT', 'JL. MUNDU PESISIR NO.54A,CIREBON 45181,JAWA BARAT', '0231-510121', '0231-510394', '-', 'BP. TRI HARTAWANTO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001200000028, 'TUNAS BAHANA SPARTA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3545, '547', 'HASFINDO GLOBAL UTAMA,PT', 'JL. TANAH MERDEKA NO.96F,CIRACAS,JAKARTA TIMUR', '021-87795250', '021-87793990', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001080000025, 'HASFINDO GLOBAL UTAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3546, '548', 'LABORINDO SARANA,PT', 'JL. ARTERI RAYA PONDOK INDAH NO.8A,JAKARTA SELATAN', '021-7255165', '021-7257226', '-', 'IBU. ICHA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001120000012, 'LABORINDO SARANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3547, '549', 'MULTIMAS,CV', 'JL. TEMBUS PRAMUKA KM.6 RUKO NO.83,BANJARMASIN', '0511-3268080', '0511-3201007', '-', 'IBU. MELA', 30, 'Hari', '-', '-', '', '', '', 301001130000045, 'MULTIMAS, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3548, '599', 'PMT INDUSTRI,PT', 'JL.H.MISBAH (DALAM),KOMP.MULTATULI INDAH,BLOK A NO.15,MEDAN 20151', '061-4529822 / 4529833', '061-4529811', '-', 'IBU. JULIA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000050, 'PMT INDUSTRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3549, '551', 'GEMILANG EKA DHARMA,PT', 'PURI NIAGA BLOK.K7 NO.1-Q, JL. PURI KENCANA,KEMBANGAN,JAK-BAR', '021-58358098', '021-58357988', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001070000026, 'GEMILANG EKA DHARMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3550, '552', 'HEXTAR FERTILIZER INDONESIA, PT', 'JL BATU CEPER NO.87A JAKARTA 10120', '021-29614963', '021-29614963', 'DISTRIBUTOR PUPUK', 'BPK HERRY EKA ', 45, 'Hari', '-', '-', '902-030584-075', 'BANK EKONOMI CABANG KOPI', 'PT HEXTAR FERTILIZER INDONESIA', 301001080000028, 'HEXTAR FERTILIZER INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3551, '553', 'PART SOLUTION DIESEL ', 'JL GELONG BARU RAYA NO.31 TOMANG JAKARTA BARAT - INDONESIA 11440 ', '021-92701300 / 5669894', '021-5672283', 'ALAT LISTRIK ', 'PAK HENDRY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000042, 'PART SOLUTION DIESEL', 'N', '-');
INSERT INTO `supplier` VALUES (3552, '554', 'AURA MAKMUR', 'JL. PONCOL II/34 GANDARIA SELATAN, JAK-SEL', '021-94768838', '021', '-', 'BP. YUNUS', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000066, 'AURA MAKMUR / YUNUS', 'N', '-');
INSERT INTO `supplier` VALUES (3553, '555', 'MIRUSA HAM ELEKTRONIK,PT', 'JL. GUNTUR NO.34, SETIABUDI,JAKARTA SELATAN', '021-8291900', '021-8291769', '-', 'BP. ADI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000043, 'MIRUSA HAM ELEKTRONIK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3554, '556', 'CEMERLANG AUDIO,TOKO/SAU KIONG', 'GLODOK PLAZA LT.DASAR GF-16,JL.PINANGSIA RAYA,JAKARTA', '021-32702985', '021-62307250', '-', 'BP. ASAU', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001030000026, 'CEMERLANG AUDIO / SAU KIONG', 'N', '-');
INSERT INTO `supplier` VALUES (3555, '557', 'PRIMA MAKMUR,TOKO/EDDY ADYANTO', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000043, 'PRIMA MAKMUR, TOKO / EDDY ADYONTO', 'N', '-');
INSERT INTO `supplier` VALUES (3556, '558', 'MEGA ENGINEERING SYSTEM,PT', 'JL. AGATIS RAYA NO.11,SAMPIT,KALIMANTAN TENGAH', '0531-24558', '0531-23558', '-', 'BP. JOKO SUGIHARTO', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000039, 'MEGA ENGINEERING SYSTEMS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3557, '559', 'BLESSINDO PRIMA SARANA,PT', 'JL. TAMAN SARI RAYA,KOMP.RUKO 56 NO.61C,JAK-BAR 11150', '021-6220 2518', '021-624 8730 / 625 0779', '-', 'ibu. ayu', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001020000045, 'BLESSINDO PRIMA SARANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3558, '560', 'HOLINDO,CV', 'JL. A.YANI KM.3,5 NO.7 BANJARMASIN', '0511-3258066', '0511-3258066', '-', 'BP. VERNANDY', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001080000029, 'HOLINDO, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3559, '561', 'SUKSES MANDIRI SEJATI, PT', 'JL RAYA BAYUR NO.1 PRIUK JAYA - TANGGERANG ', '021-5521980, 55761622', '021-5521908', 'KAROSERIE ', 'PAK SUWITO SULAIMAN', 1, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000075, 'SUKSES MANDIRI SEJATI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3560, '562', 'VENUS COMPUTER/YUNITA TANWIN', 'MANGGA 2 MALL LT.5 ,BLOK K2, JAKARTA', '021-62301978', '021-62303999', '-', 'IBU. ANITA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001220000005, 'VENUS COMPUTER / YUNITA TANWIN', 'N', '-');
INSERT INTO `supplier` VALUES (3561, '563', 'SELARAS UTAMA RAYA', 'RUKAN TAMAN RATU BLOK B4/18, JAKARTA BARAT 11510', '021-56972495 / 99', '021-5650947', '-', 'IBU. RAYAWATI ', 0, 'Hari', '-', '-', '', '', '', 301001190000071, 'SELARAS UTAMA RAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3562, '564', 'MULIA ANDALAN GEMILANG,CV', 'KOMP. TAMAN KOTA BASMOL B4 NO.38, KEMBANGAN UTARA-JAKARTA BARAT', '021-5809155', '021-58354847', 'DISTRIBUTOR KABEL SUPREME', 'BU NURVENI', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000046, 'MULIA ANDALAN GEMILANG', 'N', '-');
INSERT INTO `supplier` VALUES (3563, '565', 'PALMINDO PERSADA,PT', 'KOMP. KRAKATAU ASRI BLOK.C-12,MEDAN', '061-6634070 / 6634111', '061-6632579', '-', 'IBU. RIRIN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000047, 'PALMINDO PERSADA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3564, '634', 'REMAJA MOTOR BANJARMASIN', 'JL. A.YANI KM.6 NO.22, BANJARMASIN', '0511-7477304 / 7477305', '0511-4229522', '-', '-', 0, 'Hari', '-', '-', '0310006984564', 'MANDIRI', 'DIANA KUMALASARI', 301001180000023, 'REMAJA MOTOR BANJARMASIN', 'N', '-');
INSERT INTO `supplier` VALUES (3565, '567', 'BANJAR BEARING SENTOSA,PT', 'JL. MT.HARYONO NO.68B, SAMPIT', '0531-22508', '0531-22509', '-', 'BP. ADE', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001020000009, 'BANJAR BEARING SENTOSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3566, '568', 'AUTO 2000 PLUIT ', 'JL RAYA PLUIT SELATAN NO.6 ', '021-6672000', '021-6603526', 'DEALER TOYOTA', '-', 0, 'Hari', '-', '-', '386 301 7200', 'BCA KCP PLUIT TIMUR', 'PT ASTRA INTERNATIONAL,TBK', 301001010000067, 'AUTO 2000 - PLUIT', 'N', '-');
INSERT INTO `supplier` VALUES (3567, '569', 'HARAPAN RAYA JAYA SUKSES,CV', 'JL. A.YANI KM.9,2 NO.18 RT.004/RW.02,MANDAR SARI,KERTAK HANYAR,BANJARMASIN', '0511-3262619', '0511-3264974', '-', 'BP. TEDDY', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001080000032, 'HARAPAN RAYA JAYA SUKSES, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3568, '570', 'SINAR GEMILANG ELECTRIC,TOKO', 'PERTOKOAN HWI LT.DASAR BLOK.D NO.30, JAKARTA', '021-60424208 / 05', '021-6280917', '-', 'IBU. AKIM', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000079, 'SINAR GEMILANG ELECTRIC, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3569, '571', 'BORNEO MAJUJAYA,PT', 'JL. KAHURIPAN NO.2A RT.05, BANJARMASIN', '0511-3257427', '0511-3258441', '-', 'IBU. FRANSISKA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001020000048, 'BORNEO MAJUJAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3570, '572', 'ALTRAK 1978,PT - JAKARTA', 'JL. RSC.VETERAN NO.4 BINTARO,JAK-SEL', '021-7361978', '021-7361977', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000072, 'ALTRAK 1978, PT - JAKARTA', 'N', '-');
INSERT INTO `supplier` VALUES (3571, '573', 'KARYA TEHNIK MANDIRI', 'JL ANGKASA KOP CITRA RAYA ANGKASA BLOK L-31 LANDASAN ULIN. BANJARBARU. BANJARMASIN ', '0511-7402370', '0511-4708246', 'SPAREPART PKS ', 'PAK KARDIMAN', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001110000022, 'KARYA TEHNIK MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3572, '574', 'RAJAWALI AMARTA SEMESTA,PT', 'JL. RAYA LEUWINANGGUNG,BUKIT GOLF RIVERSIDE,BLOK.AR NO.109,CIMANGGIS,CIBUBUR', '021-84594994', '021-84594994', '-', 'BP. ARDYAN', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001180000020, 'RAJAWALI AMARTA SEMESTA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3573, '575', 'NUSA INDAH MEGAH, PT ', 'JL MENGANTI RAYA NO.26 KERUDUS KARANG PILANG SURABAYA ', '031-7666846', '031-7662134', 'SUPPLIER WATER TREATMENT', 'BU CATHERINE ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001140000019, 'NUSA INDAH MEGAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3574, '576', 'PUTERA PUTERI TEHNIK MANDIR, PT', 'JL MARGAMULYA NO.48 KITA CIMAHI 40525', '022-88886962', '022-88886962', 'SUPPLIER PUMP', 'BPK SETIA BUDI UTARA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000048, 'PUTERA PUTERI TEKNIK MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3575, '577', 'PRIMASAWIT TEHNIK BERJAYA,PT', 'JL MARELAN RAYA NO.555 MEDAN 20245', '0261-6859911/33/55', '0261-6853085', 'SUPPLIER BAKTERI ', 'BU GUSTIANA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001160000049, 'PRIMA SAWIT TEKNIK BERJAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3576, '578', 'ANEKA JAYA,CV', 'JL. HASANUDDIN NO.49, BANJARMASIN', '0511-3352569', '0511-4369957', '-', 'BP. SUKMADI ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000073, 'ANEKA JAYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3577, '579', 'DAMAI SEJAHTERA ABADI,PT', 'JL. KERTAJAYA 149,AIRLANGGA,GUBENG,SURABAYA', '0511-4415262', '0511-4415264', '-', 'BP. HANDOKO', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001040000027, 'DAMAI SEJAHTERA ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3578, '580', 'PUTRA BORNEO NUSANTARA INDAH,PT', 'JL MT.HARYONO KAV.29-30 RT 011 RW 006 TEBET JAKARTA SELATAN DKI JAKARTA RAYA 12820', '081287866630', '-', '-', 'BPK CHAIRUL RIZA', 0, 'Hari', '01.741.174.5-015.000', '-', NULL, NULL, NULL, 301001160000037, 'PUTRA BORNEO NUSANTARA INDAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3579, '581', 'ASCO PRIMA MOBILINDO, PT / DAIHATSU FATMAWATI', 'JAKARTA SELATAN', '-', '-', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', '', '', '', 301001010000075, 'ASCO PRIMA MOBILINDO, PT / DAIHATSU FATMAWATI', 'N', '-');
INSERT INTO `supplier` VALUES (3580, '582', 'INDOMOBIL TRADA NASIONAL, PT / NISSAN PONDOK INDAH', 'JL. SULTAN ISKANDARMUDA KAV.29, PONDOK INDAH\r\nJAKARTA SELATAN 12310', '(021) 729.3999', '(021) 729.2238', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001090000024, 'INDOMOBIL TRADA NASIONAL, PT / NISSAN PONDOK INDAH', 'N', '-');
INSERT INTO `supplier` VALUES (3581, '583', 'KEBAYORAN JAYA INDAH UTAMA, PT / SUZUKI RADIO DALAM RAYA', 'JL. RADIO DALAM RAYA NO.125\r\nJAKARTA 12140', '021-739.8213', '021-720.4560', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001110000021, 'KEBAYORAN JAYA INDAH UTAMA, PT / SUZUKI RADIO DALAM RAYA', 'N', '-');
INSERT INTO `supplier` VALUES (3582, '584', 'AUTO 2000 - RADIO DALAM RAYA / PT. ASTRA INTERNATIONAL TBK', 'JL. RADIO DALAM RAYA NO. 124 A-B\r\nKEBAYORAN BARU - JAKARTA 12140', '021-7252000', '021-7398887', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000077, 'AUTO 2000 - RADIO DALAM RAYA / PT. ASTRA INTERNATIONAL TBK', 'N', '-');
INSERT INTO `supplier` VALUES (3583, '585', 'ISTANA KEBAYORAN RAYA MOTOR, PT / HONDA PONDOK INDAH', 'JL. SULTAN ISKANDAR MUDA KAV.8\r\nARTERI PONDOK INDAH KOSTRAD, JAKARTA SELATAN 12240', '-', '-', 'DEALER MOBIL', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001090000025, 'ISTANA KEBAYORAN RAYA MOTOR, PT / HONDA PONDOK INDAH', 'N', '-');
INSERT INTO `supplier` VALUES (3584, '586', 'DWI JAYA EKAPRIMA,PT', 'JL. RAYA BELITUNG NO.6, GRESIK,JAWA TIMUR', '031-3957335', '031-3959715', '-', 'BP. KETUT SUKARTA', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001040000029, 'DWI JAYA EKAPRIMA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3585, '587', 'VISUALDATA,TOKO', 'MALL AMBASSADOR,LT.2 NO.33,JAKARTA', '021-5762549', '021', '-', 'BP.ARIE', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001220000007, 'VISUALDATA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3586, '588', 'TOKO 79 / AGUS', 'MGK LT.6 BLOK.D12 NO.1 JAKARTA', '0813-11011679', '-', '-', 'Bp. Agus', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001200000030, 'TOKO 79', 'N', '-');
INSERT INTO `supplier` VALUES (3587, '589', 'MILA GORDEN, TOKO', 'JL JAWA, PALANGKARAYA', '-', '-', 'FURNITURE', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001130000047, 'MILA GARDEN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3588, '590', 'DHARMABHAKTI KAPUAS MENTAYA,PT', 'JL. SUDIMAMPIR NO.3, BANJARMASIN', '0511-3352160', '0511-3350809', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001040000028, 'DHARMA BHAKTI KAPUAS MENTAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3589, '592', 'SURYA TERANG PRATAA, PT ', 'JL KEDOYA DURI RAYA NO.30A JAKARTA BARAT 11520', '021-58356915', '021-58356914', 'JUAL SPAREPART ', 'BU MARIA ', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000081, 'SURYA TERANG PRATAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3590, '593', 'PC SMART / PATRICIA TEGUH', 'MANGGA DUA MALL LT.5 BLOK D-3A,JAKARTA', '021-6127709', '021-62304519', '-', '-', 0, 'Hari', '-', '-', '105.000.9992.219 ', 'MANDIRI', 'PATRICIA TEGUH', 301001160000051, 'PC SMART / PATRICIA TEGUH', 'N', '-');
INSERT INTO `supplier` VALUES (3591, '594', 'ASKOTAMA INTI NUSANTARA,PT', 'KOMP.BUMI DIRGANTARA PERMAI,JL.HERCULES BLOK J1 NO.10,BEKASI', '021-84307981 / 84307982', '021-8449782', '-', 'IBU.WINA', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000076, 'ASKOTAMA INTI NUSANTARA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3592, '595', 'CAHAYA METAL PERKASA,PT', 'JL. RAYA NAROGONG KM.15 PANGKALAN 6 NO.111,BANTARGEBANG,BEKASI', '021-82492111 / 29469222', '021-82495222', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001030000030, 'CAHAYA METAL PERKASA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3593, '597', 'ALFA LAVAL INDONESIA,PT', 'GRAHA INTI FAUZI 4TH FLOOR,JAKARTA 12510', '021-7918 2288', '021-7918 2266', '-', '-', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000074, 'ALFA LAVAL INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3594, '598', 'TUNAS AGUNG SEMESTA,CV', 'JL.KEADILAN 2C RT.01/04 NO.1L,JAKARTA BARAT', '021-6303774 / 6303786', '021-6303779', '-', 'BP. TEDDY LIM', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001200000031, 'TUNAS AGUNG SEMESTA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3595, '600', 'JAYA MOTOR,TOKO', 'JL. DR.MURJANI NO. 134, PALANGKARAYA', '0823-10981684', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001100000015, 'JAYA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3596, '601', 'ANEKA HYDRAULIC SYSTEM, CV', 'JL TOL TRIKORA SIMPANG SEI SALAK RT033/RW05 KEC. GUNTUNG MANGGIS KAB. LANDASAN ULIN - BANJARMASIN ', '0811 5127870', '-', 'DISTIBUTOR VICKERS', 'ALIMUDDIN ZAINAL ', 30, 'Hari', '-', '-', NULL, NULL, NULL, 301001010000078, 'ANEKA HYDRAULIC SYSTEMS, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3597, '602', 'LINA,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001120000015, 'LINA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3598, '603', 'SUMBER LOGAM,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001190000082, 'SUMBER LOGAM, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3599, '604', 'JALI GORDEN,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', NULL, NULL, NULL, 301001100000016, 'JALI GORDEN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3600, '605', 'RAHMAH,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001180000021, 'RAHMAH, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (2999, '0001', '999 BACKHOE, CV', 'JL. DIPONEGORO 68', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 0, '999 BACKHOE, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3000, '0002', 'A YONG, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000001, 'A YONG, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3001, '0003', 'ABADI JAYA, TOKO', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000002, 'ABADI JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3002, '0004', 'ABADI, PD', 'JL. TOKO TIGA NO.30, JAKARTA KOTA', '021-6904410', '021-6905326', '-', 'IBU.ETTY', 0, 'Hari', '-', 'N', '', '', '', 301001010000003, 'ABADI, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3003, '0005', 'ABRAHAM, BPK.', NULL, NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000004, 'ABRAHAM, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3004, '0006', 'ACHMAD BAIJURI, BPK.', 'JLN GUNUNG SARI NO.20', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000005, 'ACHMAD BAIJURI, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3005, '0007', 'ACRYLIC SIGN MATERIAL', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000006, 'ACRYLIC SIGN MATERIAL', 'N', '-');
INSERT INTO `supplier` VALUES (3006, '0008', 'ADAM PERCETAKAN & SABLON', 'T A N G E R A N G', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000007, 'ADAM PERCETAKAN & SABLON', 'N', '-');
INSERT INTO `supplier` VALUES (3007, '0009', 'ADS CARGO', 'PELABUHAN TJ PRIOK DEPO 104D', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000008, 'ADS CARGO', 'N', '-');
INSERT INTO `supplier` VALUES (3008, '0010', 'AGRIMININDO TRACKTOR, PT', 'JLN CILIK RIWUT KM 2', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000009, 'AGRIMININDO TRACKTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3009, '0011', 'AGRITAMA MULTI SARANA, PT', 'JL. A.YANI KM 8,4 NO.7 KERTAK HANYAR', '0511-4281838', '0511-4283717', '-', 'BP.AGUS', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000011, 'AGRITAMA MULTI SARANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3010, '0012', 'AGRO NATURAL, PT', 'JL. BANDENGAN UTARA NO.80 JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000012, 'AGRO NATURAL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3011, '0013', 'AGRO TANI MANDIRI, UD', 'PALANGKARAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000013, 'AGRO TANI MANDIRI, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3012, '0014', 'AGROMAS GEMILANG INDONESIA, PT', 'KOMP. DHI BLOK KK NO.63 KAPUK MUARA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000014, 'AGROMAS GEMILANG INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3013, '0015', 'AGROTANI UNGGUL LESTARI, PT', 'JL. LAPANGAN BOLA NO.1C KEBUN JERUK', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000015, 'AGROTANI UNGGUL LESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3014, '0016', 'AGUNG JAYA TEKNIK', 'SAMPIT', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000016, 'AGUNG JAYA TEKNIK', 'N', '-');
INSERT INTO `supplier` VALUES (3015, '0017', 'AGUNG JAYA, TOKO', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000017, 'AGUNG JAYA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3016, '0018', 'AGUSTINI, IBU', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000018, 'AGUSTINI, IBU', 'N', '-');
INSERT INTO `supplier` VALUES (3017, '0019', 'AHMAD BASRI, BPK.', 'PALANGKARAYA-KALTENG', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000019, 'AHMAD BASRI, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3018, '0020', 'AHMAD MAKRUFI, BPK.', 'J A K A R T A', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000020, 'AHMAD MAKRUFI, BPK', 'N', '-');
INSERT INTO `supplier` VALUES (3019, '0021', 'AICOM KOMPUTER', 'JLN. KH SYAHDAN BINUS', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000021, 'AICOM KOMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3020, '0022', 'AKS JAKARTA, CV', 'JL.MUARA BARU NO.3 A-B-C', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000023, 'AKS JAKARTA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3021, '0023', 'ALAM JAYA, UD', 'JL MANGGA DUA RAYA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000024, 'ALAM JAYA, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3022, '0024', 'ALCOM SERVICE CENTER', 'JAKARTA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000026, 'ALCOM SERVICE CENTER', 'N', '-');
INSERT INTO `supplier` VALUES (3023, '0025', 'ALFA GAYA BAKTI PERTIWI, PT', 'JL.HASANUDDIN H.M NO.20, BANJARMASIN', '0511-335 2160', '0511-335 0809', NULL, 'IBU. SUSI', 0, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000027, 'ALFA GAYA BAKTI PERTIWI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3024, '0026', 'ALFA LAVAL (MALAYSIA) SDN.BHD', 'MALAYSIA', NULL, NULL, NULL, NULL, 0, NULL, '-', 'N', NULL, NULL, NULL, 301001010000028, 'ALFA LAVAL (MALAYSIA) SDN.BHD', 'N', '-');
INSERT INTO `supplier` VALUES (3025, '0027', 'ALTRAK 1978, PT', 'Jl. S.PARMAN NO.17 SAMPIT', '0531-34008', '0531-34007', '-', 'BP. POLTAK MANALU', 30, 'Hari', '-', 'N', NULL, NULL, NULL, 301001010000029, 'ALTRAK 1978, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3601, '606', 'MEGA ENGINEERING SERVICES,PT', 'JL. NEGARA NO.8/2 MEDAN 20233', '061-4519975', '061-4537606', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001130000048, 'MEGA ENGINEERING SERVICES, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3602, '591', 'PANDAI BESI CAHAYA MULYA/KASNO', 'LADA MANDALA JAYA,RT 17/RW 04 GG. JALAK 1 KAB.KOTAWARINGIN BARAT,KAL-TENG', '0812-51035580 / 0822-54277799', '-', '-', 'BP. KASNO', 30, 'Hari', '-', '-', '1590000650787', 'MANDIRI', 'KASNO', 301001160000052, 'PANDAI BESI CAHAYA MULYA', 'N', '-');
INSERT INTO `supplier` VALUES (3603, '607', 'SUBUR SUKSES MANDIRI,PT', 'JL.KH. HASYIM ASHARI NO.9,CIPONDOH,TANGERANG', '021-5543392', '021-5527115', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000083, 'SUBUR SUKSES MANDIRI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3604, '608', 'FORESTA TRANSTEK,PT', 'KAWASAN PANTAI INDAH DADAP,JL.PERANCIS NO.2 BLOK FF 12,DADAP,TANGERANG', '021-5555994', '021-55956062', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001060000008, 'FORESTA TRANSTEK, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3605, '609', 'MELAKIM INTI PERKASA,PT', 'JL. PROF. DR.LATUMENTEN,KOMP.GROGOL PERMAI BLOK.B NO.30,JAKARTA 11460', '021-56980459', '021-56982120', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001130000049, 'MELAKIM INTI PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3606, '610', 'SAINTIFIK INDONESIA,PT', 'JL. BUNGUR BESAR NO.82 RT.001/007,GN.SAHARI SELATAN,KEMAYORAN,JAKARTA PUSAT', '021-42802002', '021-42802003', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000084, 'SAINTIFIK INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3607, '611', 'TUNGGAL JAYA STEEL, PT', 'DSN.TAMBAKKEMERAAN KM 29\r\nTAMBAKKEMERAKAN\r\nKRIAN - SIDOARJO 61262', '-', '-', '-', '-', 30, 'Hari', '02.102.665.3-641.000', 'Y', '', '', '', 301001200000032, 'TUNGGAL JAYA STEEL, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3608, '612', 'SINDO ELTAPRIMA,PT', 'JL. SUNTER MAS UTARA BLOK. H-1 NO.17Q, JAKARTA 14350', '021-6522117 / 6519279', '021-6500973', '-', 'BP. KELVIN SUTANDAR', 0, 'Hari', '-', '-', '', '', '', 301001190000085, 'SINDO ELTAPRIMA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3609, '613', 'AUTO DAYA AMARA, PT / HONDA PONDOK CABE', 'JL. CABE RAYA NO.88\r\nPONDOK CABE - TANGERANG - 15418', '021-741.0000', '021-744.2921', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001010000080, 'AUTO DAYA AMARA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3610, '614', 'ARMINDO PERKASA, PT ', 'JL. DAAN MOGOT KM.20 NO.8 BETUCEPER KOTA TANGGERANG ', '021-55733253', '021-55733251', 'DEALER HINO', 'BPK ERWIN', 0, 'Hari', '-', '-', '', '', '', 301001010000081, 'ARMINDO PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3611, '615', 'RAHAYU SENTOSA, PT ', 'JL RAYA BOGOR KM.48 CIBINONG-BOGOR', '021-8752530', '021-8652451.52.53', 'KAROSERIE BUS ', 'BPK SAMUEL ', 0, 'Hari', '-', '-', '', '', '', 301001180000022, 'RAHAYU SENTOSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3614, '616', 'INTERJAYA SURYA MEGAH, PT ', 'JL DAAN MOGOT KM 21.5 TANGGERANG KOMP PERGUDANGAN  ARCADIA BLOK G12 NO.10 ', '021-29006565', '021-29006547', 'SUPPLIER GENSET&PART', 'BPK HENDRADI ', 14, 'Hari', '-', '-', '', '', '', 301001090000026, 'INTERJAYA SURYA MEGAH, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3615, '617', 'PRIMA JAYA AXINDO', 'JL. P. JAYAKARTA 24/12A,JAKARTA', '021-6284393', '021-6390527', '-', 'BP. PRIYO', 0, 'Hari', '-', '-', '', '', '', 301001160000055, 'PRIMA JAYA AXINDO', 'N', '-');
INSERT INTO `supplier` VALUES (3616, '618', 'MEUBLE NAJWA,TOKO', 'JL. JAWA NO. 10D, PALANGKARAYA', '083150152128 / 081348908268', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000041, 'MEUBEL NAJWA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3617, '619', 'BATAVIA BINTANG BERLIAN,PT', 'JL. RAYA BEKASI KM.19,PULO GADUNG, JAKARTA TIMUR', '021-47863456', '021-4715012', '-', 'BP. ANDREAS', 0, 'Hari', '-', '-', '', '', '', 301001020000049, 'BATAVIA BINTANG BERLIAN, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3618, '620', 'AFE TUNAS ANDALAN ', 'JL RAYA LEWINANGGUNG, BUKIT GOLF RIVERSIDE BLOK AR NO.109 CIMANGGIS-CIBUBUR', '021-84594994', '-', '-', 'Bpk Ardyan ', 30, 'Hari', '-', '-', '', '', '', 301001010000079, 'AFE TUNAS ANDALAN', 'N', '-');
INSERT INTO `supplier` VALUES (3619, '621', 'MTECH ENGINEERING NUSANTARA,PT', 'RUKAN GREEN GARDEN BLOK.Z2-78,JL.PANJANG,KEDOYA,JAKARTA 11520', '021-58352036-39', '021-58354027', '-', 'bu.Warni (081296287120)', 0, 'Hari', '-', '-', '', '', '', 301001130000051, 'MTECH ENGINEERING NUSANTARA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3620, '622', 'VICTORIA CEMERLANG,PT', 'JL. GAJAH MADA NO.156 EE,JAKARTA BARAT 11130', '021-6323228', '021-6323168', '-', 'IBU. LING LING', 30, 'Hari', '-', '-', '', '', '', 301001220000008, 'VICTORIA CEMERLANG, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3621, '623', 'SAWIT ABADI PERKASA,PT', 'JL. S.PARMAN NO.21, SAMPIT,KOTIM,KAL-TENG', '0531-22386', '0531-22386', '-', 'BP. JOKO', 30, 'Hari', '-', '-', '', '', '', 301001190000086, 'SAWIT ABADI PERKASA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3622, '624', 'EVERSEIKO INDONESIA, PT ', 'KAWASAN PUSAT NIAGA TERPADU JL DAAN MOGOT RAYA KM 19,6 BLOK E NO.8E-F BATU CEPER TANGGERANG ', '021-54377592', '021-54395736', 'DISTRIBUTOR BAN ', 'BP RUDDY ', 30, 'Hari', '02.648.296.8-415.000', 'Y', '', '', '', 301001050000014, 'EVERSEIKO INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3623, '625', 'SUMBER BERKAT ABADI, CV', 'JL PRAMUKA NO.63 RT 007/RW 001 PEMURUS LUAR, BANJARMASIN TIMUR, KALIMANTAN SELATAN ', '-', '-', 'SUPPLIER BAHAN BANGUNAN ', 'BPK RIDUAN ', 30, 'Hari', '73.520.799.5-731.000', 'Y', '', '', '', 301001190000087, 'SUMBER BERKAT ABADI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3624, '626', 'TIGA SEKAWAN TEKNIK,TOKO', 'BUKIT GOLF RIVERSIDE BLOK.AR NO.109,CIMANGGIS-CIBUBUR', '021-84594994', '021', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001200000033, 'TIGA SEKAWAN TEKNIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3625, '627', 'VIRA JAYA COMPUTER,TOKO', 'MANGGA DUA MALL LT.5, JAKARTA', '021-62304049, 62303934, 62307480', '021', '', 'BU. RETNO', 0, 'Hari', '-', '-', '', '', '', 301001230000007, 'VIRA JAYA COMPUTER', 'N', '-');
INSERT INTO `supplier` VALUES (3626, '628', 'TRIARGA JAYA MAKMUR,PT', 'JL. BUNGA RAMPAI RAYA NO.35A RT.017/009,MALAKA JAYA,DUREN SAWIT,JAKARTA TIMUR 13460', '021-80397234', '021-8014303', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001200000034, 'TRIARGA JAYA MAKMUR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3627, '629', 'WILMAR CHEMICAL INDONESIA, PT', 'GEDUNG MULTIVISION TOWER LT.12 JL KUNINGAN MULIA BLOK.9B, SETIABUDI JAKARTA SELATAN - 12980', '08125048480', '-', '-', 'BPK ROWIS', 45, 'Hari', '21.003.099.5-056.000', '-', '', '', '', 301001230000008, 'WILMAR CHEMICAL INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3628, '630', 'CIPTA KARYA ANGGUN, CV', 'PONDOK JATIMURNI BLOK K/11\r\nRT.003/RW.007\r\nJATIMURNI, PONDOK MELATI\r\nBEKASI, JAWA BARAT', '-', '-', 'Perlengkapan Elektronik Rumah Tangga', '-', 0, 'Hari', '21.134.596.2-432.000', 'Y', '', '', '', 301001030000031, 'CIPTA KARYA ANGGUN, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3629, '631', 'MAULANA MEUBLE,TOKO', 'JL. A.YANI (SEBERANG BANK MANDIRI), PALANGKARAYA', '08115200511 / 081251612211', '-', '-', 'H. MAULANA', 0, 'Hari', '-', '-', '', '', '', 301001130000052, 'MAULANA MEUBLE, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3630, '632', 'AFE CITRA EXPRESS', 'JL LEUWINANGGUNG ARCADIA HOUSING BLOK AR NO.109 CIBUBUR', '021-84594994', '021-84594994', 'EKPEDISI PENGIRIMAN ', 'UP. BPK ARDYAN ', 0, 'Hari', '-', '-', '', '', '', 301001010000082, 'AFE CITRA EXPRESS', 'Y', '-');
INSERT INTO `supplier` VALUES (3631, '633', 'SARANA KARYA, CV - WWW.FOTOVIDEOUDARA.COM', 'JL. RAYA PLERET-JEJERAN KM2\r\nKANGGOTAN RT08, PLERET\r\nBANTUL, YOGYAKARTA 55791', '(0274) 4415237', '-', 'JASA FOTO UDARA GIS', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000088, 'SARANA KARYA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3632, '635', 'MANDIRI TEKNIK,CV', 'APL TOWER LT.6 JL. LETJEN S.PARMAN KAV.28, TJ.DUREN SELATAN,GROGOL,JAKARTA 11470', '021-5872361 / 50111117', '021-5872361', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000053, 'MANDIRI TEKNIK, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3633, '636', 'CV ERA JAYA MOTOR', 'JL KAMPUNG MELAYU DARAT, GG AMAL RT9 NO.15 BANJARMASIN KALIMANTAN SELATAN ', '0511-3267175', '-', 'DISTRIBUTOR BAN ', 'BPK EFFENDY', 30, 'Hari', '-', '-', '', '', '', 301001050000015, 'ERA JAYA MOTOR, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3634, '637', 'PT KARYA GEMILANG INDONUSA ', 'KAWASAN PERGUDANGAN LIO BARU ASRI BLOK AA 3 & AA 5 JL BOURAQ NO.33 BATUSARI TANGGERANG ', '021-5581656', '021-5581666', 'PRODUSEN SEGEL ', 'BPK SOEDARMAN', 14, 'Hari', '-', 'Y', '', '', '', 301001110000023, 'KARYA GEMILANG INDONUSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3635, '638', 'KRISBOW INDONESIA,PT', 'GEDUNG KAWAN LAMA JL.PURI KENCANA NO.1, MERUYA,KEMBANGAN 11610', '021-5828282', '021-5826688', '-', 'BP. SOBARI', 0, 'Hari', '-', '-', '', '', '', 301001110000024, 'KRISBOW INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3636, '639', 'REVINDO JAYA ABADI, UD', 'JL KUNINGAN NO.28 RT/RW 030/004. KEL KETAPANG KEC.MENTAWA BARU KETAPANG', '-', '-', 'DISTRIBUTOR SPAREPART HITACHI', 'BPK FURKON ', 30, 'Hari', '2.00001681.05.03', 'Y', '', '', '', 301001180000024, 'REVINDO JAYA ABADI, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3640, '643', 'PANCA AGRO NIAGA LESTARI.PT', 'JL BANJAR GAWI BARAT NO.8B LIK LIANG ANGGANG LANDASAN ULIN SELATAN BANJAR BARU', '08119629067', '-', 'DISTRIBUTOR CHEMICAL ', 'BPK HENDRIK SUKAMTO', 30, 'Hari', '-', '-', '', '', '', 301001160000056, 'PANCA AGRO NIAGA LESTARI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3641, '644', 'PANAJAYA SUKSES. CV', 'JL MELAYU DARAT GG III/AMAL NO.15 RT 009/001 MELAYU, BANJARMASIN TENGAH. KALIMANTAN SELATAN ', '-', '-', 'DISTRIBUTOR PANAOIL ', 'BPK EFFENDY ', 30, 'Hari', '-', '-', '', '', '', 301001160000057, '', 'N', '-');
INSERT INTO `supplier` VALUES (3642, '645', 'KARYA BARU ABADI,PT', 'KOMP. DUTA HARAPAN INDAH, BLOK.OO NO.45.RT.008/002,KAPUK MUARA,PENJARINGAN,JAK-UT', '081514407531', '-', '-', 'bp. anthony', 0, 'Hari', '-', '-', '', '', '', 301001110000025, 'KARYA BARU ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3643, '646', 'TAUFIK,TOKO', 'JL. JAWA NO.26-27, PALANGKARAYA', '0536-3237494 / 0852-52070790', '0536', '-', 'BP. TAUFIK', 0, 'Hari', '-', '-', '', '', '', 301001200000035, 'TAUFIK, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3644, '647', 'REVOLUTION MULTIMEDIA SYSTEM,PT', 'KOMP.RUKO HARCO MANGGA DUA BLOK.H/33, JAKARTA', '021-6121393 EXT.109', '021', '-', 'IBU. SANTI', 0, 'Hari', '-', '-', '7460152997', 'BCA', 'PT.REVOLUTION MULTIMEDIA SYSTEM', 301001180000025, 'REVOLUTION MULTIMEDIA SYSTEM,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3645, '648', 'GVINDO GLOBAL GROUP, PT', 'JL.A.YANI KM.15,GAMBUT,BANJARMASIN,KAL-SEL', '0511-4221482', '-', 'SUPPLIER ALAT PANEN', 'BP. JUNAIDI', 0, 'Hari', '-', '-', '', '', '', 301001070000028, 'GVINDO GLOBAL GROUP, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3646, '649', 'SLS BEARINDO,PT', 'JL.H.M.ARSYAD,KOMP.JERUK 1,NO.8,SAMPIT 74323,KAL-TENG', '0531-31288', '0531-31268', '-', 'BP. YUDHI', 30, 'Hari', '-', '-', '', '', '', 301001190000089, 'SLS BEARINDO,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3647, '650', 'CAKRA BINTANG UNITAMA. PT ', 'JL KARANG ANYAR NO.55 BLOK B3 KEL.KARANG ANYAR KEC. SAWAH BESAR JAKARTA PUSAT ', '021-62300757.62313319', '021-62310853', 'SUPPLIER SPAREPART MOBIL', 'VERDI ', 30, 'Hari', '709499487075000', '-', '', '', '', 301001030000032, 'CAKRA BINTANG UNITAMA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3648, '651', 'NUSA PERTIWI ABADI ', 'JL KARANG ANYAR RAYA KOMP RUKO 55 KARANG ANYAR PERMAI BLOK C NO.25 JAKARTA PUSAT 10740', '021-62306666', '021-6242881', 'SUPPLIER SPAREPART MOBIL', 'BPK WANDYANTO KAMBONG', 30, 'Hari', '-', '-', '', '', '', 301001140000020, 'NUSA PERTIWI ABADI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3649, '652', 'KEMENANGAN JAYA FURNITURE', 'JLP.JAYAKARTA NO.22 C JAKARTA PUSAT 10730', '021-6243480.6246718', '021-6120469', 'TOKO MEBEL ', 'BU IWEY ', 0, 'Hari', '-', 'N', '', '', '', 301001110000026, 'KEMENANGAN JAYA FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3650, '653', 'MITRA SUKSES BERSAMA', 'TAMAN RATU INDAH BLOK F10 NO.25', '021-60313171', '021-5651657', 'SPAREPART KENDARAAN ', 'BPK RUDI HARIANTO ', 30, 'Hari', '-', '-', '', '', '', 301001130000054, 'MITRA SUKSES BERSAMA', 'N', '-');
INSERT INTO `supplier` VALUES (3651, '654', 'MAKMUR WIJAYA SEJAHTERA,PT', 'OFFICE 8,LT.18-A,SCBD JL. JEND.SUDIRMAN KAV.52-53,JAKARTA 12190', '021-29490582 / 0511-3353916', '021', '-', 'BP. JUSEP', 14, 'Hari', '-', '-', '', '', '', 301001130000055, 'MAKMUR WIJAYA SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3652, '655', 'SERBA GUNA,CV', 'JL. CIPUTAT RAYA NO.1 PD.PINANG RT.005/01,KEB.LAMA,JAK-SEL 12310', '0813-19334666 / 0851-02625444', '-', '-', 'BP. RUSLI', 0, 'Hari', '-', '-', '', '', '', 301001190000091, 'SERBA GUNA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3662, '665', 'PALANGKA TRIO TIRTA SARI,PT', 'JL.A.YANI NO.47B,RT.01/11,TUMBANG RUNGAN-PAHANDUT, PALANGKARAYA 73111', '0536', '0536', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001160000061, 'PALANGKA TRIO TIRTA SARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3663, '667', 'MALINDO KARYA LESTARI,PT', 'JL. BANJAR GAWI BARAT NO.1H,LANDASAN ULIN SELATAN,KAL-SEL', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000058, 'MALINDO KARYA LESTARI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3664, '668', 'ENRICH SOLUTIONS, PT ', 'JL LAPANGAN BOLA RUKO NO.16 RT/RW 007/001 KEBON JERUK-JAKARTA BARAT ', '-', '-', 'DISTRIBUTOR BAN ', 'BPK RUDDY ', 30, 'Hari', '02.745.372.9-035.000', 'Y', '', '', '', 301001050000016, 'ENRICH SOLUTIONS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3665, '669', 'KOKAI INDO ABADI,PT', 'JL. HM.RAFI\'I NO.10 RT.16,MADUREJO,PANGKALAN BUN,KAL-TENG', '0532-2030865', '0532-2030865', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001110000027, 'KOKAI INDO ABADI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3666, '670', 'EDULAB MEDIKA,TOKO', 'JL. RADEN SALEH 6 NO.4B,PALANGKARAYA,KAL-TENG', '085246880448', '-', '-', 'BP. SYAHRIAL', 0, 'Hari', '-', '-', '', '', '', 301001050000017, 'EDULAB MEDIKA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3667, '671', 'MITRA CHEMINDO UTAMA,PT', 'JL.RAYA BOULEVARD HIJAU,SENTRA NIAGA 3 BARAT,BLOK.B6 NO.29,HARAPAN INDAH,BEKASI 17131', '021-88984445 ', '021-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000059, 'MITRA CHEMINDO UTAMA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3668, '672', 'WEARINASIA,TOKO', 'RUKO PARAMOUNT SERPONG BLOK.F NO.25 GADING SERPONG', '021-91764028', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001230000009, 'WEARINASIA,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3669, '673', 'ALNINDO ELECTRONICS,CV', 'JL. DR.MAKALIWE 1 NO.8A GROGOL,JAKARTA BARAT', '021-56942888/56968845', '021-56942888', '-', 'BP.ERIC', 0, 'Hari', '-', '-', '', '', '', 301001010000084, 'ALNINDO ELECTRONICS, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3670, '674', 'CENTRAL FURNITURE', 'Jl. Wijaya Kusuma no 50 Tomang raya Jakarta Barat ', '085100308650', '-', '-', 'BP. MULYO', 0, 'Hari', '-', '-', '', '', '', 301001030000033, 'CENTRAL FURNITURE', 'N', '-');
INSERT INTO `supplier` VALUES (3672, '675', 'LISINDO SINAR HARAPAN,PT', 'JL. KEDOYA DURI RAYA NO. 20B,JAKARTA BARAT', '021-58354531 / 98128974', '021-58354530', '-', 'IBU. SILVI', 0, 'Hari', '-', '-', '', '', '', 301001130000060, 'LISINDO SINAR HARAPAN,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3673, '676', 'MILENIA MULTIVISI,PT', 'JL. KAJI NO.11D,JAKARTA 10130', '021-6322345 / 6308660', '021-6322347', '-', 'IBU. WATI', 0, 'Hari', '-', '-', '', '', '', 301001130000061, 'MILENIA MULTIVISI', 'N', '-');
INSERT INTO `supplier` VALUES (3674, '677', 'ESA PROJECTOR,CV', 'MANGGA DUA MALL,LT.1 NO.26B JAKARTA', '021- 6006605', '021-', '-', 'BP. ARI', 0, 'Hari', '-', '-', '', '', '', 301001050000018, 'ESA PROJECTOR,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3675, '678', 'ARNA PRO', 'JL. OTISTA RAYA NO.64A,JAKARTA', '082111731307', '-', '-', 'BP. ARI', 0, 'Hari', '-', '-', '', '', '', 301001010000085, 'ARNA PRO', 'N', '-');
INSERT INTO `supplier` VALUES (3676, '679', 'KREASI INTERNUSA MANDIRI', 'KOMP.RUKAN MULTIGUNA BLOK 6S-R LT.3 JL. RAJAWALI SELATAN RAYA,JAK-PUS', '021-6412636', '021-6412504', '-', 'BP. ARIANTO', 0, 'Hari', '-', '-', '', '', '', 301001110000028, 'KREASI INTERNUSA MANDIRI', 'N', '-');
INSERT INTO `supplier` VALUES (3677, '680', 'NUANSA MOTOR', 'JL. HIU PUTIH VIII, PALANGKARAYA', '086594744380 / 082352245223', '0536', '-', 'BP.', 0, 'Hari', '-', '-', '', '', '', 301001140000021, 'NUANSA MOTOR', 'N', '-');
INSERT INTO `supplier` VALUES (3678, '681', 'DWI SURYA ABADI KHARISMA, PT ', 'JL TANAH ABANG 2 NO 121 JAKARTA ', '021-3442878', '-', 'DISTURBUTOR PROMINENT PUMP ', 'BPK ALDI ', 0, 'Hari', '-', '-', '', '', '', 301001040000030, 'DWI SURYA ABADI KHARISMA , PT', 'N', '-');
INSERT INTO `supplier` VALUES (3679, '682', 'DUNIA SAFTINDO,PT', 'MEGA KEMAYORAN TOWER A LT.5, JL.ANGKASA KAV.B6,JAKARTA 10610', '021-29371188', '021-65865614 / 087880877557', '-', 'IBU. RETNO', 0, 'Hari', '-', '-', '', '', '', 301001040000031, 'DUNIA SAFTINDO,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3680, '683', 'CAKRAWALA PUTRA MOTOR,PT', 'JL. JEND.SUDIRMAN KM.2,5, SAMPIT,KALIMANTAN TENGAH', '085250736067', '-', '-', 'BP. DJAUHHARI', 0, 'Hari', '-', '-', '', '', '', 301001030000034, 'CAKRAWALA PUTRA MOTOR,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3681, '684', 'TRIKANDI METTA PRESISI,PT', 'KOMP.GOLDEN VILLE NO.88 BG,JL.DAAN MOGOT 2,DURI KEPA,JAKARTA BARAT 11510', '021-29336555', '021-29336999', '-', 'IBU. AMEL', 0, 'Hari', '-', '-', '', '', '', 301001200000036, 'TRIKANDI METTA PRESISI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3682, '685', 'CEMARA SARINGAN, PT ', 'JL MANUNGGAL NO.148 MEDAN 20373', '061-50365669', '061-75015483', 'SUPPLIER SWECO ', 'BU IFNA', 30, 'Hari', '31.718.292.1-125.000', '-', '', '', '', 301001030000035, 'CEMARA SARINGAN, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3683, '686', 'SAWIT UNGGUL SAKTI, PT ', 'GD SARINAH LT 11 JL MH.THAMBRIN NO.11 GONDANGDIA  MENTENG, JAKARTA PUSAT, DKI JAKARTA', '08811232657', '-', 'KECAMBAH SAWIT ', 'PAK HANTARMAN TASLIM ', 0, 'Hari', '-', '-', '', '', '', 301001190000096, 'SAWIT UNGGUL SAKTI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3684, '687', 'CENTRAL TEHNIK, CV ', 'JL MANGGIS II NO.4 SAMPIT KALIMANTAN TENGAH ', '0531-21305', '-', 'PERBAIKAN DINAMO', 'BPK SUGI SANTOSO', 0, 'Hari', '02.884.518.8-712.000', 'Y', '159*.00.0022284-3', 'BANK MANDIRI', 'CV.CENTRAL TEHNIK', 301001030000036, 'CENTRAL TEHNIK, CV', 'Y', '-');
INSERT INTO `supplier` VALUES (3685, '688', 'SINAR MANDIRI,TOKO', 'LTC GLODOK,LT.1 BLOK C9 NO.8,JAKARTA', '021-62320339 / 081382121790', '021-62320339', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000097, 'SINAR MANDIRI,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3686, '689', 'HASIL USAHA,CV', 'JL. KS.TUBUN NO.36, PALANGKARAYA', '0536-3229614', '0536-3229613', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001080000034, 'HASIL USAHA,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3687, '690', 'WEARINASIA', 'RUKO PARAMOUNT SERPONG BLOK F NO.25 GADING SERPONG - TANGGERANG ', '021-91764028', '-', 'SUPPLIER DRONE ', 'BPK ANDREW JASON ', 0, 'Hari', '-', '-', '8830255011', 'BANK BCA', 'ANDREW JASON GUNAWAN', 301001230000009, 'WEARINASIA,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3688, '691', 'ALAM PELITA TRISAKTI, PT ', 'Jl. Puri Kencana, Rukan Grand Puri Niaga Blok K6-3M Kembangan Selatan, Jakarta 11610', '021-58351597-98, 021-68768008', '-', 'SPAREPART PABRIK ', 'GHANI ', 30, 'Hari', '-', '-', '', '', '', 301001010000086, 'ALAM PELITA TRISAKTI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3689, '692', 'TOKO CCTV3S', 'MANGGA DUA MALL LANTAI DASAR NO.30 ', '021-62202696', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001030000037, 'CCTV3S, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3690, '693', 'INDOMULTI PRAKARSA MANDIRI,CV', 'KOMP. GRAND CITY BLOK.C1 NO.15,SEPATAN,TANGERANG 15520', '0812-93108967', '021-', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001090000029, 'INDOMULTI PRAKARSA MANDIRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3691, '694', 'PT LESTARI MAJU MOTOR', 'JL BANJAR GAWI RAYA D. NO.6 RT 07 RW 03 LANDASAN ULIN SELATAN, LIANG ANGGANG, KOTA BANJARBARU KALIMANTAN SELATAN', '-', '-', 'DISTIBUTOR BAN MRF', 'BPK RUDDY ', 0, 'Hari', '80.591.016.3-732.000', 'Y', '', '', '', 301001120000016, 'LESTARI MAJU MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3692, '695', 'DUNIA NUTRISI RETAILINDO,PT', 'WISMA INDOVISION 2 LT.6,JL. RAYA PANJANG KOMP.GREEN GARDEN BLOK A-8 NO.1, KEDOYA UTARA,KB.JERUK,JAK-BAR', '021-5809859 / 58354682', '021', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001040000032, 'DUNIA NUTRISI RETAILINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3693, '698', 'SARANA TOOLINDO PERKASA, PT ', 'MANGGA DUA PLAZA BLOK J NO.1 JAKARTA 10730', '021-6121352 / 6013880', '021-6013879', 'ALAT TEHNIK ', 'BPK AMIR ', 30, 'Hari', '-', '-', '', '', '', 301001190000098, 'SARANA TOOLINDO PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3694, '697', 'BENGARIS PERMAI,CV', 'Jl. Tjilik Riwut Km 1,5 Komplek Pertokoan CIMB Niaga ', '0536-4210412', '0536', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001020000051, 'BENGARIS PERMAI,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3695, '699', 'ET TEDEON, TK ', 'JL HAYAM WURUK NO.127 GEDUNG LTC LANTAI UG BLOK A12 NO.1 ', '08170977788', '-', '-', 'BPK PETER', 0, 'Hari', '-', '-', '', '', '', 301001050000019, 'ET TEDEON, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3696, '700', 'IMEX TAMA,CV', 'JL. KYAI TAMBAK DERES NO.287-291 SURABAYA', '031-51503390 / 51503500', '031-', '-', '-', 30, 'Hari', '-', '-', '', '', '', 301001090000030, 'IMEX TAMA,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3697, '701', 'CAHAYA PENGAJARAN ABADI, PT ', 'JL SAMPURNA NO.36 SAMPIT 74313', '0531-22423', '0531-22423', 'DISTRIBUTOR SHELL ', 'ROBBIAN NUR ', 30, 'Hari', '-', '-', '3510.728.110', 'DANAMON BALIKPAPAN ', 'PT. CAHAYA PENGAJARAN ABADI', 301001030000038, 'CAHAYA PENGAJARAN ABADI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3698, '702', 'CAKRAWALA MULTINIAGA INTERNATIONAL,PT', 'HARCO MANGGA DUA RUKO BLOK.N NO.26 JAKARTA', '021-6000777', '021-6123020', '-', 'IBU. VIAN', 0, 'Hari', '-', '-', '', '', '', 301001030000039, 'CAKRAWALA MULTINIAGA INTERNATIONAL,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3699, '703', 'SYSMAX PRATAMA PERKASA, PT ', 'HARKOT MALL BLOK A2 NO.1 JLN MERDEKA NO.53-TANGGERANG ', '021-55768986', '-', 'PABRIKASI ', 'WARNI ', 30, 'Hari', '-', '-', '', '', '', 301001190000099, 'SYSMAX PRATAMA PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3700, '704', 'ALOHA,TOKO', 'PALANGKARAYA', '0536', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001010000087, 'ALOHA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3701, '705', 'PALMAS ENTRACO, PT ', 'JL K.H.SAMANHUDI 85 ', '3841681', '3802660', 'AGEN POMPA SHIBURA', 'ALVIN ', 0, 'Hari', '-', '-', '', '', '', 301001160000062, 'PALMAS ENTRACO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3702, '706', 'ANEKA SPORT, TOKO', 'KIOS PETAK BARU PASAR PAGI BLOK A NO.3B ', '021-6928749', '-', 'TOKO OLAH RAGA ', 'BU LINA CHEN / BU CAROLINE', 0, 'Hari', '-', '-', '5300099914', 'BCA', 'CAROLINE ', 301001010000089, 'ANEKA SPORT, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3703, '707', 'ALL SPORT, TK ', 'JLN PETAK PASAR PAGI LAMA BLOK B NO.25/37 JAKARTA BARAT ', '021-6912315', '-', 'TOKO OLAH RAGA ', '-', 0, 'Hari', '-', '-', '', '', '', 301001010000088, 'ALL SPORT, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3704, '708', 'JAYA MAKMUR SAMPIT, TOKO', 'SAMPIT KALIMANTAN TENGAH ', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001100000017, 'JAYA MAKMUR SAMPIT, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3705, '709', 'PONDOK TEKNIK,TOKO', 'JL. DARMOSUGONDO NO.10, PALANGKARAYA', '0822-50587339', '0536', '-', 'FAHMI ARIF', 0, 'Hari', '-', '-', '', '', '', 301001160000063, 'PONDOK TEKNIK PALANGKARAYA,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3706, '710', 'KARYAGUNA TIRTA MANDIRI, PT', 'JL. BINTARA IV NO. 26 RT.001/RW.015\r\nBEKASI BARAT, BEKASI 17136', '(021) 8660 7821', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001110000029, 'KARYAGUNA TIRTA MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3707, '711', 'KAPUAS KENCANA JAYA, PT', 'JL. H.M. ARSYAD NO. 68 SAMPIT KALTENG ', '053122955', '-', '-', 'MERRY AUGUSIINA', 0, 'Hari', '-', '-', '', '', '', 301001110000030, 'KAPUAS KENCANA JAYA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3731, '734', 'SEMUT GRUP INDONESIA, PT', 'KOMPLEK CENYTAL BISNIS DISTRIK POLONIA DD NO.63 SUKA DAMAI MEDAN POLONIA KOTA MEDAN SUMATERA UTARA', '08116082880', '-', '-', 'BENNY', 0, 'Hari', '-', '-', '', '', '', 301001190000103, 'SEMUT GRUP INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3732, '735', 'HOLLY PERKASA, CV ', 'KOMP SUAKA INDAH PT KHARISMA JAYA BLOK C-5 BUNGU/INDRA SARI - MARTAPURA - BANJAR 70617', '-', '-', '-', '-', 0, 'Hari', '02.753.948.5-732.000', '-', '', '', '', 301001080000035, 'HOLLY PERKASA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3733, '736', 'BENTENG MAS PERKASA, PT', 'Jl. Agung Perkasa 9, Blok K2. No 31.\r\nSunter - Jakarta Utara', '021-65836677', '021', '-', 'IBU. Kathrien Mandagi', 0, '', '-', '', '', '', '', 301001020000058, 'BENTENG MAS PERKASA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3734, '737', 'SASCO INDONESIA,PT', 'Mayapada Tower 18th Floor Suite 07\r\nJl. Jend. Sudirman Kav.28\r\nJakarta 12920', '021-521-3668', '021-521-3670', '-', '-', 0, '', '-', 'Y', '', '', '', 301001190000104, 'SASCO INDONESIA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3735, '738', 'ABB SAKTI INDUSTRI, PT ', '15TH FLOOR WTC 1 JL JEND SUDIRMAN KAV 29-31 JAKARTA 12920', '021-25515267', '-', '-', 'JAP LIH YUN ', 0, 'Hari', '-', '-', '', '', '', 301001010000094, 'ABB SAKTI INDUSTRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3736, '739', 'SOLUSI SUKSES TEKNOLOGI,CV', 'PERUM GRIYA JAYA CIKEAS BLOK B1/NO.17,CICADAS,GUNUNG PUTRI,BOGOR', '021-29095414', '021', '-', '-', 0, '', '-', '', '', '', '', 301001190000105, 'SOLUSI SUKSES TEKNOLOGI,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3737, '740', 'YAMAMOTO KEIKI INDONESIA,PT', 'JL. AKASIA I BLOK A5 NO.1B LIPPO CIKARANG,BEKASI,JAWA BARAT 17550', '021-8972124', '021-89907865', '-', 'BP. MASKUR', 0, '', '-', '', '', '', '', 301001250000006, 'YAMAMOTO KEIKI INDONESIA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3738, '741', 'CATUR KENCANA MAKMUR,PT', 'KOTA CITRA GRHA CLUSTER ALAMANDA R.10 JL.A.YANI KM.17.5, BANJARMASIN', '0811-518208', '-', '-', 'BP. JOHANNIS', 0, '', '-', '', '', '', '', 301001030000041, 'CATUR KENCANA MAKMUR,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3739, '742', 'MAXIMAS, PD', 'KOMPLEK RUKO SUNTER MALL BLOK G-7I NO.19, JL, DANAU SUNTER UTARA, SUNTER AGUNG PODOMORO, JAKARTA UTARA', '021-6401854', '021-6400733', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000064, 'MAXIMAS, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3740, '744', 'ANUGERAH SARANA HAYATI, PT ', 'JL RASAMALA NO.46 RT/RW 002/003 CURUG MEKAR, BOGOR BARAT, BOGOR-JAWA BARAT ', '-', '-', 'DISTIRBUTOR INSEKTISIDA', 'DERI ', 30, 'Hari', '31.490.919.3.404.000', 'Y', '', '', '', 301001010000095, 'ANUGERAH SARANA HAYATI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3741, '745', 'JAYA MAKMUR BAN, TOKO', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001100000019, 'JAYA MAKMUR BAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3742, '746', 'PUTERA AUTO KENCANA, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301001160000066, 'PUTERA AUTO KENCANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3743, '747', 'BINTANG ANUGRAH SAMUELRENO, PT', 'JL. JEMBATAN BATU NO.82-83,PINANGSIA,TAMANSARI,JAKARTA BARAT 11110', '021-62308414', '021-6257179', '-', 'IBU. NELLIDA SIANIPAR', 0, '', '-', '', '', '', '', 301001020000059, 'BINTANG ANUGRAH SAMUELRENO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3744, '748', 'KARUNIA BAJA PERSADA, PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001110000031, 'KARUNIA BAJA PERSADA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3745, '749', 'BAHTERA AGRITAMA JAYA ABADI,PT', 'JL. GAJAH MADA PASAR JAYA UPB PASAR GLODOK AL05 AKS 001,TAMANSARI', '', '', '', '', 0, '', '', '', '', '', '', 301001020000060, 'BAHTERA AGRITAMA JAYA ABADI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3746, '750', 'JADIMAS, PT', 'JL AGUNG NIAGA BLOK G7A NO.8 SUNTER, JAKARTA UTARA', '021-6504624', '021-65302126', 'DISTRIBUTOR PUPUK ', 'BPK TEDY KOMALA', 0, '', '-', '', '', '', '', 301001100000020, 'JADIMAS, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3747, '751', 'ELISA GORDEN,TOKO', 'JL. A.YANI SAMPING SANDY\'S SWALAYAN', '081250841838', '0536', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001050000021, 'ELISA GORDEN,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3748, '752', 'CITY LED, TOKO', 'LTC GLODOK, JL HAYAM WURUK 127 LT.UG, BLOK B16 NO.9 JAKARTA', '021-62305554', '-', 'TOKO LAMPU LED', 'BPK STEVEN ', 0, 'Hari', '-', '-', '5770577855', 'BCA ', 'STEVEN NOGIDSON CHANDRA GAN ', 301001030000042, 'CITY LED, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3749, '753', 'SINAR ABADI, TK', '', '', '', '', '', 0, '', '', '', '', '', '', 301001190000106, 'SINAR ABADI, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3750, '754', 'SETIANITA MEGAH MOTOR, PT', 'Jl. Prof Dr. Soepomo No. 44\r\nJakarta Selatan, 12870', '021 - 8302060', '-', 'Dealer Mobil', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000107, 'SETIANITA MEGAH MOTOR, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3751, '755', 'MAJU JAYA,TOKO', 'JL. DARMO SUGONDO NO.15-29, PALANGKARAYA 73111', '0536-3221753', '0536-3222475', '-', '-', 0, '', '-', '', '', '', '', 301001130000065, 'MAJU JAYA,TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3752, '756', 'RESTU IBU PUSAKA, PT', 'JL RAYA CITEREUP KM.2.5 GUNUNG PUTRI, KAB.BOGOR JAWA BARAT ', '021-8754959', '021-8758117', 'KAROSERIE BUS ', 'BU RENY ', 0, 'Hari', '-', '-', '', '', '', 301001180000027, 'RESTU IBU PUSAKA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3753, '757', 'MITRA KELUARGA SEHAT,PT', 'JL.PRAMUKA KM.6 RUKO MITRA MAS NO.11/L BANJARMASIN TIMUR 70238', '0511-6743945 ', '0511- 6744608', '-', '-', 30, 'Hari', '-', '', '', '', '', 301001130000066, 'MITRA KELUARGA SEHAT,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3754, '758', 'LIMAS SUMBER ABADI, CV', 'JL. SESERAN ASWAN NO.70, RAWA SEMUT, BEKASI TIMUR', '-', '-', '-', 'INGE E', 0, 'Hari', '-', '-', '', '', '', 301001120000017, 'LIMAS SUMBER ABADI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3755, '759', 'INVALTECH SYSTEM INDONESIA', 'RUKO METRO SUNTER BLOK B/29 JL DANAU SUNTER UTARA, JAKARTA 14340', '021-65300461', '021-65300970', 'DISTRIBUTOR FESTO ', 'BPK AGUS S', 0, 'Hari', '-', '-', '', '', '', 301001090000031, 'INVALTECH SYSTEM INDONESIA', 'N', '-');
INSERT INTO `supplier` VALUES (3756, '760', 'INVALTECH SYSTEM INDONESIA, PT', 'RUKO METRO SUNTER BLOK B/29 JL. DANAU SUNTER UTARA, JAKARTA 14340', '021-65300461', '021-65300970', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001090000031, 'INVALTECH SYSTEM INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3757, '761', 'TUNAS HARAPAN UTAMA', 'LTC LT.2 BLOK C43 NO.12', '021-62320571', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001200000038, 'TUNAS HARAPAN UTAMA', 'N', '-');
INSERT INTO `supplier` VALUES (3758, '762', 'DUNIA MOTORINDO GEMILANG, PT', 'JL RAYA KEBAYORAN LAMA NO.556 RT 006/001 KEL GROGOL SELATAN, KEC KEBAYORAN LAMA, JAKARTA SELATAN, DKI JAKARTA', '081294731505', '-', 'DEALER HONDA', 'NOVI ', 0, '', '-', '', '', '', '', 301001040000033, 'DUNIA MOTORINDO GEMILANG, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3759, '763', 'ISMAIL, UD', '', '', '', '', '', 0, '', '', '', '', '', '', 301001090000032, 'ISMAIL, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3760, '764', 'BANGKIT JAYA PACKING, TOKO', 'GLODOK JAYA LT.3 BLOK A NO.36 JAKARTA BARAT', '081356208548', '-', 'JUAL PACKING ', 'DAUS', 0, 'Hari', '-', '-', '', '', '', 301001020000061, 'BANGKIT JAYA PACKING, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3761, '765', 'TELAGA, TOKO', '', '', '', '', '', 0, '', '', '', '', '', '', 301001200000039, 'TELAGA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3762, '766', 'INTAN, TOKO', 'JL. Hiu Putih Palangkaraya', '081250809566', '-', '-', '-', 20, 'Hari', '-', '', '7903-01-004156-53-5', 'BRI', 'GUNTUR SETIAWAN', 301001090000033, 'INTAN, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3763, '767', 'MAXIMA SURYA ABADI,PT', 'GRAHA SA BUILDING FL.5TH, SUITE #505 JL. RAYA GUBENG 19-21, SURABAYA 60281', '031-5023500', '-', '-', 'BP. YOHANES SUBIYANTO', 0, '', '-', '', '', '', '', 301001130000067, 'MAXIMA SURYA ABADI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3764, '768', 'MANDIRI KARYA LESTARI', 'JL P.JAYAKARTA BUDI RAHAYU 3 NO.6 SAWAH BESAR - JAKARTA UTARA', '021-26075391', '-', 'SPAREPART ALAT BERAT', 'WANDYANTO KAMBONG ', 1, 'Bulan', '-', '', '', '', '', 301001130000068, 'MANDIRI KARYA LESTARI', 'N', '-');
INSERT INTO `supplier` VALUES (3765, '769', 'MITRA SOLUSI INDUSTRI, CV', 'JL CIBUBUR COUNTRY BOULEVARD RUKO FRESH MARKET BLOK RFM2 NO.17 KEL.CIKEAS KEC.GUNUNG PUTRI KAB.BOGOR 16966', '021-21384224', '-', 'PART PABRIK ', 'ARINI ANDRIYANI ', 30, '', '-', '', '', '', '', 301001130000069, 'MITRA SOLUSI INDUSTRI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3766, '770', 'TOTAL SARANA MANDIRI, PT', 'KOMPLEK DUTA INDAH KARYA BLOK A NO.10 JL DAAN MOGOT KM.13 JAKARTA BARAT 11740', '021-29675301', '021-29675302', 'GENERAL PART', 'JONATHAN ANDRE', 30, '', '-', '', '', '', '', 301001200000040, 'TOTAL SARANA MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3767, '771', 'MOTOR SUKSES MANDIRI, PT', 'GRAND SLIPI TOWER, 5TH FLOOR JL. LETJEND S.PARMAN KAV 22 - 24 PALMERAH', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000070, 'MOTOR SUKSES MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3768, '772', 'MOTAR SUKSES MANDIRI, PT', 'GRAND SLIPI TOWER, 5TH FLOOR JL. LETJEND S.PARMAN KAV 22 - 24 PALMERAH', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001130000070, 'MOTAR SUKSES MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3769, '773', 'SERUMPUN INDAH LESTARI, PT', 'JL PULAU SOLOR, KAWASAN INDUSTRI MEDAN II, MEDAN 20252, INDONESIA', '061-6871221', '061-6871429', 'GENERAL PART PKS ', 'SANDY ', 0, '', '-', '', '', '', '', 301001190000108, 'SERUMPUN INDAH LESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3770, '774', 'NORD INDONESIA, PT', 'JL MH.THAMRIN-KOMP.MULTI GUNA BLOK D NO.1, PAKULONAN, SERPONG UTARA, TANGGERANG SELATAN, BANTEN 15325', '021-5312222', '-', 'DISTRIBUTOR NORD ', 'BU CORY ', 0, 'Hari', '-02.005.601.6-056.000', '-', '', '', '', 301001140000023, 'NORD INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3771, '775', 'CAHAYA MAS PRINTING', 'JL KEPU TIMUR NO.1B, KEMAYORAN - JAKARTA PUSAT ', '021-4247397', '021-4248328', 'PERCETAKAN ', 'BU FELICIA ', 7, 'Hari', '-', '-', '', '', '', 301001030000043, 'CAHAYA MAS PRINTING', 'N', '-');
INSERT INTO `supplier` VALUES (3772, '776', 'BUDI TANTOSO', 'PONTIANAK - KALIMANTAN BARAT ', '-', '-', 'VENDOR ALAT BERAT ', 'BPK BUDI TANTOSO', 0, 'Hari', '-', '-', '146.000.414.368-6', 'BANK MANDIRI ', 'BUDI TANTOSO ', 301001020000062, 'BUDI TANTOSO', 'N', '-');
INSERT INTO `supplier` VALUES (3773, '777', 'SAMATOR GAS INDUSTRI,PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000109, 'SAMATOR GAS INDUSTRI,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3774, '778', 'BALIMAS MOTOR, CV', 'JL PRAMUKA NO.2/3 SUNGAI LUHUT, BANJARMASIN TIMUR, KOTA BANJARMASIN, KALIMANTAN SELATAN ', '0511-3270853', '-', 'TOKO SPAREPART', 'BPK STEVEN ', 0, 'Hari', '-', '-', '2403000088', 'MAYBANK - CAB A.YANI BANJARMASIN ', 'CV BALIMAS MOTOR', 301001020000063, 'BALIMAS MOTOR, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3775, '779', 'SUMBER LOGAM UTAMA, CV', 'Jl. Pasar Baru No. 27 Banjarmasin', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000110, 'SUMBER LOGAM UTAMA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3776, '780', 'KARYA HIDUP SENTOSA, CV', 'JL MAGELANG NO.144 JOGJAKARTA 55241 INDONESIA', '0274-512095', '0274-563523', 'DISTRIBUTOR TRAKTOR ', 'M.NAUFAL ADDIFFA', 0, 'Hari', '-', '-', '060.002.0005', 'BANK BCA KCP PINGIT - YOGYAKARTA', 'CV.KARYA HIDUP SENTOSA', 301001110000032, 'KARYA HIDUP SENTOSA, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3777, '783', 'BERKAT PARTINDO ABADI, CV', 'GD. MEGA GLODOK KEMAYORAN LT UG BLOK A-18 NO.07 GUNUNG SAHARI SELATAN - KEMAYORAN JAKARTA PUSAT', '0858.11885599', '-', 'DISTRIBUTOR BAN ', 'BU ARY RAHAYU', 0, 'Hari', '03.317.467.3-027.000', '-', '419.303.5038', 'BANK BCA', 'CV. BERKAT PARTINDO ABADI ', 301001020000064, 'BERKAT PARTINDO ABADI, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3778, '782', 'FLOTECH CONTROLS INDONESIA, PT', 'KOMP RUKAN ARTHA GADING NIAGA, BLOK F/7 - JAKARTA 14240 ', '021-45850778', '-', 'DISTRIBUTOR FLOWMETER ISOLV', 'BU RISMA NARINDRA', 0, '', '02.115.853.0.059.000', '', '', '', '', 301001060000010, 'FLOTECH CONTROLS INDONESIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3779, '784', 'GEMAH RIPAH LOH JENAWE', '', '', '', '', '', 0, '', '', '', '', '', '', 301001070000030, 'GEMAH RIPAH LOH JENAWE', 'N', '-');
INSERT INTO `supplier` VALUES (3780, '785', 'SURYA TEKNIK GEMILANG, CV', 'JL LINGKAR DALAM SELATAN RT 022 / RW 002 PEMURUS BARU, BANJARMASIN SELATAN', '0822 9878 6606', '-', 'AGEN ALAT PANEN ', 'APIK ISKANDAR', 0, 'Hari', '75.261.441.2-731.000', 'Y', '', '', '', 301001190000111, 'SURYA TEKNIK GEMILANG, CV', 'N', '-');
INSERT INTO `supplier` VALUES (3781, '786', 'RADHWAA, TOKO', 'Jl. Widuri III No 12, G. Obos 12, Palangkaraya Kalimantan Tengah 73112', '081250958599', '-', '-', 'BP. KHOLIF', 0, '', '-', '', '', '', '', 301001180000028, 'RADHWAA, TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3782, '787', 'JAYA MACHINDO LESTARI, PT', 'Komplek Gading Bukit Indah Blok U20, 2nd Floor\r\nKelapa Gading, Jakarta 14240 - Indonesia', '+62-21-29574215', '+62-21-45846856', 'Alat Berat Second', '-', 0, '', '', 'Y', '', '', '', 301001100000021, 'JAYA MACHINDO LESTARI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3783, '788', 'BPK S BUDI NUGRAHA SE - NON PPN', 'JL BHAYANGKARA 1 NO.9 PAKUJAYA SERPONG, TANGGERANG SELATAN', '021-5396311', '-', '-', '-', 0, '', '-', '', 'S BUDI NUGRAHA SE', 'BCA KCP GRAHA SAYA ', '547.510.8181', 301001020000065, 'BPK S BUDI NUGRAHA SE - NON PPN', 'N', '-');
INSERT INTO `supplier` VALUES (3784, '789', 'DIGITAL AKURASI, PT', 'Jl. Puri Agung T5 No. 18\r\nSentra Niaga Puri Indah, Kembangan Selatan\r\nJakarta 11610', '(021) 58357596-98', '(021) 58350755', '-', '-', 0, '', '-', 'Y', '', '', '', 301001040000034, 'DIGITAL AKURASI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3785, '790', 'POWERINDO PRIMA PERKASA,PT', 'JL. RAYA SILIWANGI RT.006/004\r\nKEL. ALAM JAYA,KEC.JATIUWUNG,TANGERANG', '021-5903801 / 59308111', '-', '-', '-', 0, '', '-', '', '', '', '', 301001160000067, 'POWERINDO PRIMA PERKASA,PT', 'N', '-');
INSERT INTO `supplier` VALUES (3786, '791', 'BANJAR BATTERINDO SENTOSA, PT', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001020000066, 'BANJAR BATTERINDO SENTOSA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3787, '792', 'TERPAL DIKA ALFARIZI , TOKO', '', '', '', '', '', 0, '', '', '', '', '', '', 301001200000041, 'TERPAL DIKA ALFARIZI , TOKO', 'N', '-');
INSERT INTO `supplier` VALUES (3788, '793', 'PUTRA AUTO KENCANA, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301001160000068, 'PUTRA AUTO KENCANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3789, '794', 'SINAR MAS ELECTRINDO, PD', '-', '-', '-', '-', '-', 0, 'Hari', '-', '-', '', '', '', 301001190000112, 'SINAR MAS ELECTRINDO, PD', 'N', '-');
INSERT INTO `supplier` VALUES (3790, '795', 'SEKAWAN, UD', 'Jalan pelita timur no75\r\nSAMPIT', '085252800915', '-', '-', 'Bp. AGUS', 0, 'Hari', '-', '-', '726601000029536', 'BRI', 'Rudiansyah', 301001190000113, 'SEKAWAN, UD', 'N', '-');
INSERT INTO `supplier` VALUES (3791, '796', 'GUTRADO UTAMA TRAD & CO, PT', 'JL A.YANI NO.34-A/III BANJARMASIN ', '082151398555', '-', 'AGEN STHILL', 'BPK FENDI ', 0, '', '01.110.706.7-731.000', 'Y', '', '', '', 301001070000031, 'GUTRADO UTAMA TRAD & CO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3792, '797', 'SINAR LAUT MANDIRI, PT', 'Jl. Mangga Besar 1 No 78, Jakarta Barat 1180 ', '(021) 625-3030, 626-5533 - Ext. : 171', '', '', '', 0, '', '', '', '', '', '', 301001190000114, 'SINAR LAUT MANDIRI, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3793, '798', 'WAHANA JAYA MAKMUR,CV', '', '', '', '', '', 0, '', '', '', '', '', '', 301001230000010, 'WAHANA JAYA MAKMUR,CV', 'N', '-');
INSERT INTO `supplier` VALUES (3794, '799', 'MAPA, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301005130000000, 'MAPA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3795, '800', 'DUPAN ANUGERAH LESTARI, PT', 'AMG Tower 20th Floor\r\nJl. Dukuh Menanggal 1-A Gayungan, Surabaya 60234, Jawa Timur', '031-82516888', '031-82516555', 'PUPUK', '-', 0, 'Hari', '-', '-', '', '', '', 301001040000035, 'DUPAN ANUGERAH LESTARI, PT', 'Y', '-');
INSERT INTO `supplier` VALUES (3796, '801', 'FESTO, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301001060000011, 'FESTO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3797, '802', 'AGRO KIMIA ASIA, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301001010000096, 'AGRO KIMIA ASIA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3798, '803', 'MANDIRI SEJAHTERA BUANA, PT', 'JL KREKOT BUNDER III NO.1 PASAR BARU SAWAH BESAR, JAKARTA PUSAT, DKI JAKARTA 10710', '021-3520216/17', '021-3520219', 'AGEN ALAT BERAT ', 'MELLY ', 30, 'Hari', '31.217.304.0-075.000', 'Y', '', '', '', 301001130000071, 'MANDIRI SEJAHTERA BUANA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3799, '804', 'POHON MAS SEJAHTERA, PT', 'Taman Pulo Indah Blok L26 \r\nPenggilingan, Jakarta Timur', '021.48703060', '021.48703044', 'PUMP', '-', 0, '', '-', '', '', '', '', 301001160000069, 'POHON MAS SEJAHTERA, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3800, '805', 'PMT INDUSTRIES SDN BHD (MALAYSIA)', '', '', '', '', '', 0, '', '', '', '', '', '', 301001160000070, 'PMT INDUSTRIES SDN BHD (MALAYSIA)', 'N', '-');
INSERT INTO `supplier` VALUES (3801, '806', 'MITRA BORNEO AGRINDO, PT', '', '', '', '', '', 0, '', '', '', '', '', '', 301001130000072, 'MITRA BORNEO AGRINDO, PT', 'N', '-');
INSERT INTO `supplier` VALUES (3802, '807', 'SENTRAL AVR, TK', 'LTC, Lantai 2, Blok C19, No. 2, JL. Hayam Wuruk, No. 127, RT.1/RW.6, Mangga Besar, Tamansari, Jakarta Barat,', '', '', '', '', 0, '', '', '', '', '', '', 301001190000115, 'SENTRAL AVR, TK', 'N', '-');
INSERT INTO `supplier` VALUES (3803, '808', 'MITRAINDO RAYA SEJAHTERA, PT', 'JL HAYAM WURUK 127 LTC LT.UG BLOK A5 NO.5 RT 001/006 TAMAN SARI, JAKARTA BARAT', '021-62320508', '62320509', '-', 'Bpk Reyna Arief ', 14, 'Hari', '31.779.275.2-032.000', 'Y', '', '', '', 301001130000073, 'MITRAINDO RAYA SEJAHTERA, PT', 'N', '-');

-- ----------------------------
-- Table structure for tahun_tanam
-- ----------------------------
DROP TABLE IF EXISTS `tahun_tanam`;
CREATE TABLE `tahun_tanam`  (
  `id` int(11) NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `thn_tanam` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `coa_thntanam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `coa_material` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmtbm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tahun_tanam
-- ----------------------------
INSERT INTO `tahun_tanam` VALUES (939, '04', '2009', '700504200900000', '700504200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (940, '04', '2010', '700504201000000', '700504201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (941, '04', '2010', '700504201000000', '700504201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (942, '04', '2010', '700504201000000', '700504201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (943, '04', '2011', '700504201100000', '700504201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (944, '04', '2011', '700504201100000', '700504201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (945, '04', '2011', '700504201100000', '700504201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (946, '05', '2008', '700505200800000', '700505200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (947, '05', '2008', '700505200800000', '700505200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (948, '05', '2008', '700505200800000', '700505200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (949, '05', '2009', '700505200900000', '700505200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (950, '05', '2009', '700505200900000', '700505200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (951, '05', '2009', '700505200900000', '700505200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (952, '05', '2010', '700505201000000', '700505201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (953, '05', '2010', '700505201000000', '700505201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (954, '05', '2010', '700505201000000', '700505201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (955, '05', '2011', '700505201100000', '700505201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (956, '05', '2011', '700505201100000', '700505201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (957, '05', '2011', '700505201100000', '700505201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1059, '08', '2016', '202408201600000', '202408201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1060, '08', '2016', '202408201600000', '202408201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1, '11', '2016', '202411201600000', '202411201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (2, '11', '2016', '202411201600000', '202411201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (958, '06', '2008', '700506200800000', '700506200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (959, '06', '2008', '700506200800000', '700506200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (960, '06', '2008', '700506200800000', '700506200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (895, '03', '2015', '202403201500000', '202403201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (897, '03', '2016', '202403201600000', '202403201602100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (899, '03', '2016', '202403201600000', '202403201605100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (910, '04', '2014', '202404201400000', '202404201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (912, '04', '2014', '202404201400000', '202404201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (916, '09', '2011', '202409201100000', '202409201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (970, '08', '2011', '202408201100000', '202408201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (971, '08', '2011', '202408201100000', '202408201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (972, '08', '2013', '202408201300000', '202408201302100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (973, '08', '2013', '202408201300000', '202408201305100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 2)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (885, '02', '2015', '202402201500000', '202402201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (887, '02', '2015', '202402201500000', '202402201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (856, '01', '2014', '202401201400000', '202401201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (858, '01', '2014', '202401201400000', '202401201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (860, '01', '2015', '202401201500000', '202401201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (862, '01', '2015', '202401201500000', '202401201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (961, '06', '2009', '700506200900000', '700506200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (962, '06', '2009', '700506200900000', '700506200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (963, '06', '2009', '700506200900000', '700506200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (964, '06', '2010', '700506201000000', '700506201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (965, '06', '2010', '700506201000000', '700506201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (966, '06', '2010', '700506201000000', '700506201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (967, '06', '2011', '700506201100000', '700506201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (968, '06', '2011', '700506201100000', '700506201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (969, '06', '2011', '700506201100000', '700506201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (917, '09', '2011', '202409201100000', '202409201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (918, '09', '2012', '202409201200000', '202409201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (919, '09', '2012', '202409201200000', '202409201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (920, '09', '2013', '202409201300000', '202409201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (868, '01', '2008', '700501200800000', '700501200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (870, '01', '2008', '700501200800000', '700501200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (872, '01', '2008', '700501200800000', '700501200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (874, '01', '2009', '700501200900000', '700501200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (876, '01', '2009', '700501200900000', '700501200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (889, '03', '2011', '202403201100000', '202403201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (891, '03', '2011', '202403201100000', '202403201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (906, '04', '2011', '202404201100000', '202404201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (908, '04', '2011', '202404201100000', '202404201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (914, '05', '2011', '202405201100000', '202405201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (915, '05', '2011', '202405201100000', '202405201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (879, '01', '2010', '700501201000000', '700501201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (882, '01', '2009', '700501200900000', '700501200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (866, '06', '2011', '202406201100000', '202406201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (867, '06', '2011', '202406201100000', '202406201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (869, '06', '2015', '202406201500000', '202406201502100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (871, '06', '2015', '202406201500000', '202406201505100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (883, '06', '2016', '202406201600000', '202406201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (881, '02', '2011', '202402201100000', '202402201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (854, '01', '2011', '202401201100000', '202401201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (855, '01', '2011', '202401201100000', '202401201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (884, '01', '2010', '700501201000000', '700501201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (887, '01', '2010', '700501201000000', '700501201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (889, '01', '2011', '700501201100000', '700501201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (891, '01', '2011', '700501201100000', '700501201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (893, '01', '2011', '700501201100000', '700501201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (893, '03', '2015', '202403201500000', '202403201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (886, '09', '2016', '202409201600000', '202409201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (888, '09', '2016', '202409201600000', '202409201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (900, '16', '2016', '202416201600000', '202416201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (894, '14', '2016', '202414201600000', '202414201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (896, '15', '2016', '202415201600000', '202415201602100', 'Upkeep Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (898, '15', '2016', '202415201600000', '202415201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (885, '06', '2016', '202406201600000', '202406201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (883, '02', '2011', '202402201100000', '202402201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1050, '12', '2017', '202412201700000', '202412201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (897, '02', '2008', '700502200800000', '700502200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (899, '02', '2008', '700502200800000', '700502200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (901, '02', '2008', '700502200800000', '700502200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (903, '02', '2009', '700502200900000', '700502200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (905, '02', '2009', '700502200900000', '700502200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (907, '02', '2009', '700502200900000', '700502200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (908, '02', '2010', '700502201000000', '700502201002100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (909, '02', '2010', '700502201000000', '700502201005100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (910, '02', '2010', '700502201000000', '700502201008100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (911, '02', '2010', '700502201100000', '700502201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (931, '04', '2008', '700504200800000', '700504200802100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (932, '04', '2008', '700504200800000', '700504200805100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (933, '04', '2008', '700504200800000', '700504200808100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1066, '3', '2008', '700503200800000', '700503200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1067, '3', '2008', '700503200800000', '700503200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1068, '3', '2008', '700503200800000', '700503200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1069, '3', '2009', '700503200900000', '700503200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1070, '3', '2009', '700503200900000', '700503200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1071, '3', '2009', '700503200900000', '700503200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1072, '3', '2010', '700503201000000', '700503201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1073, '3', '2010', '700503201000000', '700503201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1074, '3', '2010', '700503201000000', '700503201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (934, '04', '2008', '700504200900000', '700504200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (935, '04', '2008', '700504200900000', '700504200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (904, '17', '2016', '202417201600000', '202417201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (906, '17', '2016', '202417201600000', '202417201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (912, '99', '2016', '202499201600000', '202499201602100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (914, '99', '2016', '202499201600000', '202499201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1051, '12', '2017', '202412201700000', '202412201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (936, '04', '2008', '700504200900000', '700504200908100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (913, '02', '2010', '700502201100000', '700502201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (915, '02', '2010', '700502201100000', '700502201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (916, '02', '2011', '700502201100000', '700502201102100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (917, '02', '2011', '700502201100000', '700502201105100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1050, '03', '2009', '700503200900000', '700503200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (937, '04', '2009', '700504200900000', '700504200902100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (938, '04', '2009', '700504200900000', '700504200905100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (921, '09', '2013', '202409201300000', '202409201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (922, '09', '2014', '202409201400000', '202409201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (923, '09', '2014', '202409201400000', '202409201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (924, '09', '2015', '202409201500000', '202409201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (925, '09', '2015', '202409201500000', '202409201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (938, '17', '2014', '202417201400000', '202417201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (939, '17', '2014', '202417201400000', '202417201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (940, '17', '2015', '202417201500000', '202417201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (941, '17', '2015', '202417201500000', '202417201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (902, '16', '2016', '202416201600000', '202416201605100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (934, '16', '2014', '202416201400000', '202416201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (935, '16', '2014', '202416201400000', '202416201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (895, '14', '2016', '202414201600000', '202414201605100', 'Pemupukan Bahan', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (926, '14', '2014', '202414201400000', '202414201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (927, '14', '2014', '202414201400000', '202414201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (942, '99', '2012', '202499201200000', '202499201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (943, '99', '2012', '202499201200000', '202499201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (944, '99', '2013', '202499201300000', '202499201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (945, '99', '2013', '202499201300000', '202499201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (946, '99', '2014', '202499201400000', '202499201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (947, '99', '2014', '202499201400000', '202499201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (951, '07', '2008', '700507200800000', '700507200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (952, '07', '2008', '700507200800000', '700507200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (953, '07', '2009', '700507200900000', '700507200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (954, '07', '2009', '700507200900000', '700507200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (955, '07', '2009', '700507200900000', '700507200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (956, '07', '2010', '700507201000000', '700507201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (957, '07', '2010', '700507201000000', '700507201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (958, '07', '2010', '700507201000000', '700507201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (959, '08', '2008', '700508200800000', '700508200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (960, '08', '2008', '700508200800000', '700508200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (961, '08', '2008', '700508200800000', '700508200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (962, '08', '2009', '700508200900000', '700508200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (963, '08', '2009', '700508200900000', '700508200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (964, '08', '2009', '700508200900000', '700508200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (965, '08', '2010', '700508201000000', '700508201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (966, '08', '2010', '700508201000000', '700508201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (967, '08', '2010', '700508201000000', '700508201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (968, '08', '2011', '700508201100000', '700508201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (969, '08', '2011', '700508201100000', '700508201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (970, '08', '2011', '700508201100000', '700508201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (989, '10', '2008', '700510200800000', '700510200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (990, '10', '2008', '700510200800000', '700510200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (18, '09', '2009', '700509200900000', '700509200902100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (19, '09', '2009', '700509200900000', '700509200905100', 'PEMUPUKAN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (948, '99', '2015', '202499201500000', '202499201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (20, '09', '2009', '700509200900000', '700509200908100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (21, '09', '2010', '700509201000000', '700509201002100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (22, '09', '2010', '700509201000000', '700509201005100', 'PEMUPUKAN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (23, '09', '2010', '700509201000000', '700509201008100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (24, '09', '2011', '700509201100000', '700509201102100', 'UPKEEP BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (25, '09', '2011', '700509201100000', '700509201106100', 'PEMUPUKAN UPAH', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (26, '09', '2011', '700509201100000', '700509201108100', 'PANEN BAHAN', '07', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE2)', 'TM');
INSERT INTO `tahun_tanam` VALUES (991, '10', '2008', '700510200800000', '700510200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (992, '10', '2009', '700510200900000', '700510200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (993, '10', '2009', '700510200900000', '700510200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (994, '10', '2009', '700510200900000', '700510200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (995, '10', '2010', '700510201000000', '700510201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (996, '10', '2010', '700510201000000', '700510201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (997, '10', '2010', '700510201000000', '700510201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (998, '10', '2011', '700510201100000', '700510201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (999, '10', '2011', '700510201100000', '700510201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1000, '10', '2011', '700510201100000', '700510201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1001, '11', '2008', '700511200800000', '700511200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1002, '11', '2008', '700511200800000', '700511200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1003, '11', '2008', '700511200800000', '700511200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (12, '09', '2009', '700509200900000', '700509200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (13, '09', '2009', '700509200900000', '700509200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (14, '09', '2009', '700509200900000', '700509200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (15, '09', '2010', '700509201000000', '700509201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (16, '09', '2010', '700509201000000', '700509201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (17, '09', '2010', '700509201000000', '700509201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (27, '09', '2011', '700509201100000', '700509201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1004, '11', '2009', '700511200900000', '700511200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1005, '11', '2009', '700511200900000', '700511200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1006, '11', '2009', '700511200900000', '700511200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1007, '11', '2010', '700511201000000', '700511201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1008, '11', '2010', '700511201000000', '700511201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1009, '11', '2010', '700511201000000', '700511201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1010, '11', '2011', '700511201100000', '700511201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1011, '11', '2011', '700511201100000', '700511201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1012, '11', '2011', '700511201100000', '700511201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1013, '11', '2012', '700511201200000', '700511201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1014, '11', '2012', '700511201200000', '700511201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1015, '11', '2012', '700511201200000', '700511201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1031, '99', '2008', '700599200800000', '700599200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1032, '99', '2008', '700599200800000', '700599200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1033, '99', '2008', '700599200800000', '700599200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1034, '99', '2009', '700599200900000', '700599200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1035, '99', '2009', '700599200900000', '700599200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1075, '3', '2011', '700503201100000', '700503201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1017, '12', '2008', '700512200800000', '700512200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1018, '12', '2008', '700512200800000', '700512200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1019, '12', '2009', '700512200900000', '700512200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1020, '12', '2009', '700512200900000', '700512200905100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1021, '12', '2009', '700512200900000', '700512200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1076, '3', '2011', '700503201100000', '700503201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (28, '09', '2011', '700509201100000', '700509201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1077, '3', '2011', '700503201100000', '700503201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1036, '99', '2009', '700599200900000', '700599200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1037, '99', '2010', '700599201000000', '700599201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1038, '99', '2010', '700599201000000', '700599201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1039, '99', '2010', '700599201000000', '700599201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1040, '99', '2011', '700599201100000', '700599201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1041, '99', '2011', '700599201100000', '700599201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1042, '99', '2011', '700599201100000', '700599201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1043, '99', '2012', '700599201200000', '700599201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1022, '12', '2010', '700512201000000', '700512201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1023, '12', '2010', '700512201000000', '700512201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1024, '12', '2010', '700512201000000', '700512201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1025, '12', '2011', '700512201100000', '700512201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1026, '12', '2011', '700512201100000', '700512201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1027, '12', '2011', '700512201100000', '700512201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1028, '12', '2012', '700512201200000', '700512201202100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1029, '12', '2012', '700512201200000', '700512201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1051, '03', '2009', '700503200900000', '700503200908100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1078, '03', '2009', '700503200900000', '700503200902100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1079, '03', '2008', '700503200800000', '700503200802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1080, '03', '2008', '700503200800000', '700503200805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1081, '03', '2008', '700503200800000', '700503200808100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1082, '03', '2010', '700503201000000', '700503201002100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1088, '16', '2017', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tahun_tanam` VALUES (1047, '17', '2017', '202417201700000', '202417201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1048, '17', '2017', '202417201700000', '202417201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (936, '16', '2015', '202416201500000', '202416201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (937, '16', '2015', '202416201500000', '202416201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (928, '14', '2015', '202414201500000', '202414201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (929, '14', '2015', '202414201500000', '202414201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1051, '14', '2017', '202414201700000', '202414201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1052, '14', '2017', '202414201700000', '202414201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (930, '15', '2014', '202415201400000', '202415201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (931, '15', '2014', '202415201400000', '202415201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (932, '15', '2015', '202415201500000', '202415201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1044, '99', '2012', '700599201200000', '700599201205100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1046, '01', '2017', '202401201700000', '202401201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1053, '12', '2015', '202412201500000', '202412201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1054, '12', '2014', '202412201400000', '202412201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1061, '08', '2017', '202408201700000', '202408201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1030, '12', '2012', '700512201200000', '700512201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1031, '12', '2013', '700512201300000', '700512201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1049, '12', '2013', '700512201300000', '700512201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1052, '12', '2014', '700512201400000', '700512201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1083, '03', '2010', '700503201000000', '700503201005100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1084, '03', '2010', '700503201000000', '700503201008100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1085, '03', '2011', '700503201100000', '700503201102100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1086, '03', '2011', '700503201100000', '700503201105100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1062, '08', '2017', '202408201700000', '202408201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (952, '11', '2017', '202411201700000', '202411201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (953, '11', '2017', '202411201700000', '202411201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1057, '17', '2018', '202417201800000', '202417201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1058, '17', '2018', '202417201800000', '202417201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (933, '15', '2015', '202415201500000', '202415201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1049, '15', '2017', '202415201700000', '202415201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1050, '15', '2017', '202415201700000', '202415201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1055, '15', '2015', '202415201400000', '202415201408000', 'UPKEEP PIHAK KETIGA-KONTRAKTOR', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1056, '15', '2014', '202415201400000', '202415201408000', 'UPKEEP PIHAK KETIGA-KONTRAKTOR', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (949, '99', '2015', '202499201500000', '202499201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (950, '99', '2017', '202499201700000', '202499201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (951, '99', '2017', '202499201700000', '202499201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1045, '99', '2012', '700599201200000', '700599201208100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1046, '99', '2013', '700599201300000', '700599201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1047, '99', '2013', '700599201300000', '700599201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (886, '06', '2017', '202406201700000', '202406201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (887, '06', '2017', '202406201700000', '202406201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1063, '02', '2017', '202402201700000', '202402201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1055, '12', '2014', '202412201400000', '202412201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1056, '12', '2015', '202412201500000', '202412201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1086, '01', '2018', '202401201800000', '202401201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1087, '12', '2018', '202412201800000', '202412201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1088, '12', '2018', '202412201800000', '202412201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1046, '16', '2017', '202416201700000', '202416201702100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1059, '16', '2018', '202416201800000', '202416201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1060, '16', '2018', '202416201800000', '202416201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1061, '14', '2018', '202414201800000', '202414201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1062, '14', '2018', '202414201800000', '202414201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1063, '15', '2018', '202415201800000', '202415201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1064, '15', '2018', '202415201800000', '202415201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1066, '99', '2018', '202499201800000', '202499201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1067, '99', '2018', '202499201800000', '202499201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1048, '99', '2013', '700599201300000', '700599201308100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1068, '99', '2014', '700599201400000', '700599201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1069, '99', '2014', '700599201400000', '700599201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1070, '99', '2014', '700599201400000', '700599201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1071, '', '2014', '700515201408100', '700515201408102', 'ALAT PERKAKAS', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1080, '06', '2018', '202406201800000', '202406201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1081, '06', '2018', '202406201800000', '202406201805100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (5, '16', '2015', '700516201500000', '700516201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (6, '16', '2015', '700516201500000', '700516201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (7, '16', '2015', '700516201500000', '700516201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1082, '14', '2014', '700514201400000', '700514201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1083, '14', '2014', '700514201400000', '700514201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1077, '15', '2014', '700515201400000', '700515201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1078, '15', '2014', '700515201400000', '700515201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1079, '15', '2014', '700515201400000', '700515201405100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1065, '02', '2017', '202402201700000', '202402201705100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (1085, '02', '2018', '202402201800000', '202402201802100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TBM');
INSERT INTO `tahun_tanam` VALUES (918, '02', '2011', '700502201100000', '700502201108100', '-', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE 1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (958, '02', '2015', '700502201500000', '700502201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (959, '02', '2015', '700502201500000', '700502201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (960, '02', '2015', '700502201500000', '700502201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1084, '14', '2014', '700514201400000', '700514201408100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1085, '14', '2015', '700514201500000', '700514201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1086, '14', '2015', '700514201500000', '700514201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1087, '14', '2015', '700514201500000', '700514201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1088, '15', '2015', '700515201500000', '700515201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1089, '15', '2015', '700515201500000', '700515201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1090, '15', '2015', '700515201500000', '700515201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1091, '17', '2015', '700517201500000', '700517201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1092, '17', '2015', '700517201500000', '700517201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1093, '17', '2015', '700517201500000', '700517201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1053, '12', '2014', '700512201400000', '700512201402100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1094, '12', '2015', '700512201500000', '700512201502100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1095, '12', '2015', '700512201500000', '700512201505100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1096, '12', '2015', '700512201500000', '700512201508100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1098, '06', '2008', '700506200800000', '700506200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1087, '03', '2011', '700503201100000', '700503201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1099, '03', '2018', '700503200800000', '700503200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (1100, '03', '2008', '700503200800000', '700503200807100', 'PENGANGKUTAN PUPUK', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (29, '09', '2011', '700509201100000', '700509201108100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (30, '09', '2013', '700509201300000', '700509201302100', 'UPKEEP BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (31, '09', '2013', '700509201300000', '700509201305100', 'PEMUPUKAN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');
INSERT INTO `tahun_tanam` VALUES (32, '09', '2013', '700509201300000', '700509201308100', 'PANEN BAHAN', '06', 'PT.MULIA SAWIT AGRO LESTARI (ESTATE1)', 'TM');

-- ----------------------------
-- Table structure for tmp_posting_keluarbrgitem
-- ----------------------------
DROP TABLE IF EXISTS `tmp_posting_keluarbrgitem`;
CREATE TABLE `tmp_posting_keluarbrgitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alokasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodept` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nobpb` double NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `blok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `qty2` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `skb` double NULL DEFAULT NULL,
  `SKBTXT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NO_REF` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` datetime(0) NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebeban` double NULL DEFAULT NULL,
  `kodebebantxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketbeban` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodesub` double NULL DEFAULT NULL,
  `kodesubtxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ketsub` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batal` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `USER` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tmp_posting_masukitem
-- ----------------------------
DROP TABLE IF EXISTS `tmp_posting_masukitem`;
CREATE TABLE `tmp_posting_masukitem`  (
  `id` int(11) NULL DEFAULT NULL,
  `kdpt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nopo` double NULL DEFAULT NULL,
  `nopotxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LOKAL` smallint(6) NULL DEFAULT NULL,
  `ASSET` smallint(6) NULL DEFAULT NULL,
  `pt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `afd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kodebar` double NULL DEFAULT NULL,
  `kodebartxt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nabar` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` double NULL DEFAULT NULL,
  `tgl` datetime(0) NULL DEFAULT NULL,
  `ttg` double NULL DEFAULT NULL,
  `ttgtxt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tglinput` datetime(0) NULL DEFAULT NULL,
  `txttgl` double NULL DEFAULT NULL,
  `thn` double NULL DEFAULT NULL,
  `periode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `txtperiode` double NULL DEFAULT NULL,
  `noadjust` double NULL DEFAULT NULL,
  `ket` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `refpo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noref` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `BATAL` smallint(6) NULL DEFAULT NULL,
  `alasan_batal` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kurs` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konversi` double NULL DEFAULT NULL,
  `USER` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cetak` smallint(6) NULL DEFAULT NULL,
  `posting` smallint(6) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_level` int(11) NULL DEFAULT NULL,
  `level` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_pks` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_site` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_ro` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_ho` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_ktu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_kasie` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_gm` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_mill_mgr` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dept_head` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dir_ops` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dept_head_purchasing` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dir_purchasing` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'KTU', 'ktu', '$2y$10$ebXXuw69ms0auERZeijTRe5pqgsKUOuzXsetdNG01wf7AdJ9OFJ3u', 'SITE', 11, 'KTU', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (2, 'Kasie HRD GA', 'kasie_hrd_ga', '$2y$10$C.ntbfdkEzLwOSxzZbEJLOrdaL3WIoJN6aCAe5pzry9WDq.lgiP.m', 'SITE', 12, 'Kasie HRD GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (3, 'Kasie Agronomi', 'kasie_agronomi', '$2y$10$7nHco4eqCd8ZxVKDW3ISF.dwa.l2XnQ/ADcz7183qvisGYDpi23Lu', 'SITE', 13, 'Kasie Agronomi', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (4, 'Kasie Pabrik', 'kasie_pabrik', '$2y$10$0M8q3sE/i7Jnusr2MTRLR.X8iqCO7ee2pRusoOGk79x75znPAusJ6', 'PKS', 14, 'Kasie Pabrik', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (5, 'GM', 'gm', '$2y$10$OW8gNCzfQK408s0GMNCpKOM8fKrBaAAZJwG/OLoPJ6BrhYocWct26', 'SITE', 15, 'GM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (6, 'Mill Mgr', 'mill_mgr', '$2y$10$Jphbb58c1QiZV5RubzrtEOah925fYc9yI1F55FoLZ/rcfmwzsMPsC', 'PKS', 16, 'Mill Manager', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (7, 'Dept Head', 'dept_head', '$2y$10$CWths9iEaUIywTdvEWg4u.q4FvXFUYUe47B5m9CvBCq8DptF26/f.', 'HO', 21, 'Dept. Head', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (8, 'Dir Ops', 'dir_ops', '$2y$10$WwuFiFeYwk0pJOO8MygFiOgKNbwf8EKyBRTuu5iUSH2kj0RQiX466', 'HO', 22, 'Dir. Ops', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (9, 'Dept Head Purchasing', 'dept_head_purchasing', '$2y$10$j0BDiZhCn/EGDv.2F9eb0eSU385f8ZXdg5TStPHlZPDayX74czW3S', 'HO', 23, 'Dept. Head Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (10, 'Dir Purchasing', 'dir_purchasing', '$2y$10$sMPWuGyRZrc2SxsgFZE2qOGmY2CeKYa81vyiysKXx71Z16gFmg20m', 'HO', 24, 'Dir. Keuangan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (11, 'User HO', 'user_ho', '$2y$10$KdY70s02pOnMgDirqrl8Ge1dbYx/WjQJtio6Lav/U2DgsYGZEJzB.', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (12, 'User RO', 'user_ro', '$2y$10$ZGW0sC1eULkirKpxGm.XJO1l27y7QPCo6KB7v05G9MRaRZdhW0iXu', 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (13, 'User SITE', 'user_site', '$2y$10$YMfk7a8.MGWN4.tshDEqcOXPSJtPYMhGAgFWT7vfiVHMN6qnNXsFC', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (14, 'User PKS', 'user_pks', '$2y$10$9AsK6ibFLWV971r6vfAhyOcxDSDf2T8D2PN2Kda5XVGCDdbANt/42', 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (15, 'Dir MIS', 'dir_mis', '$2y$10$rgJPPclJR3IpMvawrTrfFexAMZUwIovUacbxPTkZXyf2vcVAje6XG', 'HO', 25, 'Dir. MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (16, 'Dir HR GA', 'dir_hr_ga', '$2y$10$gU3Iiw.CvaFY6itXFoN8C.tbymtXupw/kJpgOSxrh/NHCiztbdh4G', 'HO', 26, 'Dir. HR GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (17, 'Dir Accounting', 'dir_accounting', '$2y$10$bdTWZST2v7yDKr5WA1sO4e6zYS07vV0Zq5gmXUHkBmmEI4Ai9bK2K', 'HO', 27, 'Dir. Accounting', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (18, 'Kepala Perwakilan', 'kp', '$2y$10$LIj8m0ze325hodJuwfBoPeQihmg5CAUVV3fitZ.0jXytO36fYYd7S', 'RO', 17, 'Kepala Perwakilan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (19, 'Raymond HO', 'raymond_ho', '$2y$10$HT.4g3IhlT6z0gPaaC/ouOuvbGj35Zzq/dtv8jCVwlOmsI1loPgTK', 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (20, 'Raymond RO', 'raymond_ro', '$2y$10$HGOtqdNE2V5.9g2gpK8GNOTUtS/cGxTL14FfKZ/b2mnN7bJ2Xbg2W', 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (21, 'Raymond SITE', 'raymond_site', '$2y$10$BUFxhY8dXKTJBDzViTkG1OJO0yqEpKoHqfFVbug/lZN.OOg1pL6Fe', 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (22, 'Raymond PKS', 'raymond_pks', '$2y$10$yztB9GnOfOg6KbmPqPVLwuoqsgFYAc.6udElv0t/mxaM4fo5h51o2', 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (23, 'Siswanta', 'siswanta', '$2y$10$KEpeeFgwvWwC509naZntqegxkcPN7Mi2JgyCnz25Qg9b/GpzxOPXC', 'HO', 41, 'Direktur HRD & Umum', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (24, 'Timotius Aucky Wusman', 'timoti', '$2y$10$9r81i/sINBV3vfbDQmE70ewOkU94wrT.IN84gLE9CMC0ZZ1qwJYTG', 'HO', 42, 'Direktur MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (25, 'Dwi Dharmawan', 'dwi_dharmawan', '$2y$10$0Gf69Jlh7ZCgezy.9DXcJO0EnrgwgkhdnRo7rCcYXjcqBsdBsjzra', 'HO', 43, 'Direktur Legal', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (26, 'Nurul Huda', 'nurul_huda', '$2y$10$KBV/uTxdFjc3Ue3boMIX4exzDNxDdB0ML9h1Zs0qcMc7mJYINpyI6', 'HO', 44, 'Direktur Area', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (27, 'Staff Purchasing', 'staff_purchasing', '$2y$10$AiCzBhWSx8pUy0EuDX3JYOEjfd3O55/8d6KllWGePji22f/YWQMjS', 'HO', 35, 'Staff Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (28, 'User Gudang', 'user_gudang', '$2y$10$YW0zkH6vrFqbTf0BL8KYLun6euAIIhGA.xkjrZkh0NhpJgudu3G76', 'SITE', 36, 'User Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (29, 'Kasie Gudang', 'kasie_gudang', '$2y$10$SXvlP4rVZDI4z.v7ljbLGutWnZyUhVI1FGVudLTnpOCBkEmDtPWOS', 'SITE', 18, 'Kasie Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (30, 'Kasie Pembukuan', 'kasie_pembukuan', '$2y$10$Gl79xnzLIs/ekc9OXpR6NOXfakbIi9IypaBW.BdItwmCeg/GaSH0a', 'SITE', 19, 'Kasie Pembukuan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (31, 'Asisten Afdeling', 'asisten_afdeling', '$2y$10$S2bK3cfmvhi8wWm4n8lPWuoH5L8DvErE2DRJuDmrun4HKiQY2mxMy', 'SITE', 20, 'Asisten Afdeling', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user` VALUES (32, 'Kepala Kebun', 'kepala_kebun', '$2y$10$ruopUrov9eRgwrQoiajEp.RmqimkH9nYCZYNulhJrcV9SU0paxG36', 'SITE', 10, 'Kepala Kebun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for user_copy1
-- ----------------------------
DROP TABLE IF EXISTS `user_copy1`;
CREATE TABLE `user_copy1`  (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_level` int(11) NULL DEFAULT NULL,
  `level` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_lokasi_pks` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_site` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_ro` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `status_lokasi_ho` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_ktu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_kasie` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_gm` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_mill_mgr` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dept_head` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dir_ops` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dept_head_purchasing` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `level_dir_purchasing` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_copy1
-- ----------------------------
INSERT INTO `user_copy1` VALUES (1, 'KTU', 'ktu', NULL, 'SITE', 11, 'KTU', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (2, 'Kasie HRD GA', 'kasie_hrd_ga', NULL, 'SITE', 12, 'Kasie HRD GA', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (3, 'Kasie Agronomi', 'kasie_agronomi', NULL, 'SITE', 13, 'Kasie Agronomi', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (4, 'Kasie Pabrik', 'kasie_pabrik', NULL, 'PKS', 14, 'Kasie Pabrik', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (5, 'GM', 'gm', NULL, 'SITE', 15, 'GM', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (6, 'Mill Mgr', 'mill_mgr', NULL, 'PKS', 16, 'Mill Manager', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (7, 'Dept Head', 'dept_head', NULL, 'HO', 21, 'Dept. Head', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (8, 'Dir Ops', 'dir_ops', NULL, 'HO', 22, 'Dir. Ops', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (9, 'Dept Head Purchasing', 'dept_head_purchasing', NULL, 'HO', 23, 'Dept. Head Purchasing', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (10, 'Dir Purchasing', 'dir_purchasing', NULL, 'HO', 24, 'Dir. Keuangan', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (11, 'User HO', 'user_ho', NULL, 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (12, 'User RO', 'user_ro', NULL, 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (13, 'User SITE', 'user_site', NULL, 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (14, 'User PKS', 'user_pks', NULL, 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (15, 'Dir MIS', 'dir_mis', NULL, 'HO', 25, 'Dir. MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (16, 'Dir HR GA', 'dir_hr_ga', NULL, 'HO', 26, 'Dir. HR GA', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (17, 'Dir Accounting', 'dir_accounting', NULL, 'HO', 27, 'Dir. Accounting', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (18, 'Kepala Perwakilan', 'kp', NULL, 'RO', 17, 'Kepala Perwakilan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (19, 'Raymond HO', 'raymond_ho', NULL, 'HO', 31, 'User HO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (20, 'Raymond RO', 'raymond_ro', NULL, 'RO', 32, 'User RO', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (21, 'Raymond SITE', 'raymond_site', NULL, 'SITE', 33, 'User SITE', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (22, 'Raymond PKS', 'raymond_pks', NULL, 'PKS', 34, 'User PKS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (23, 'Siswanta', 'siswanta', NULL, 'HO', 41, 'Direktur HRD & Umum', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (24, 'Timotius Aucky Wusman', 'timoti', NULL, 'HO', 42, 'Direktur MIS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (25, 'Dwi Dharmawan', 'dwi_dharmawan', NULL, 'HO', 43, 'Direktur Legal', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (26, 'Nurul Huda', 'nurul_huda', NULL, 'HO', 44, 'Direktur Area', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (27, 'Staff Purchasing', 'staff_purchasing', NULL, 'HO', 35, 'Staff Purchasing', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (28, 'User Gudang', 'user_gudang', NULL, 'SITE', 36, 'User Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (29, 'Kasie Gudang', 'kasie_gudang', NULL, 'SITE', 18, 'Kasie Gudang', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (30, 'Kasie Pembukuan', 'kasie_pembukuan', NULL, 'SITE', 19, 'Kasie Pembukuan', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (31, 'Asisten Afdeling', 'asisten_afdeling', NULL, 'SITE', 20, 'Asisten Afdeling', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_copy1` VALUES (32, 'Kepala Kebun', 'kepala_kebun', NULL, 'SITE', 10, 'Kepala Kebun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- View structure for keluar_query
-- ----------------------------
DROP VIEW IF EXISTS `keluar_query`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `keluar_query` AS select `stockawal`.`id` AS `id`,`stockawal`.`KODE` AS `KODE`,`stockawal`.`kodebartxt` AS `kodebartxt`,`stockawal`.`nabar` AS `nabar`,sum(`keluarbrgitem`.`qty`) AS `SumOfqty`,`stockawal`.`txtperiode` AS `txtperiode`,`keluarbrgitem`.`batal` AS `batal` from (`stockawal` join `keluarbrgitem` on(((`stockawal`.`txtperiode` = `keluarbrgitem`.`txtperiode`) and (`stockawal`.`kodebartxt` = `keluarbrgitem`.`kodebartxt`)))) group by `stockawal`.`id`,`stockawal`.`KODE`,`stockawal`.`kodebartxt`,`stockawal`.`nabar`,`stockawal`.`txtperiode`,`keluarbrgitem`.`batal` having (`keluarbrgitem`.`batal` = 0);

-- ----------------------------
-- View structure for v_list_item_approval
-- ----------------------------
DROP VIEW IF EXISTS `v_list_item_approval`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_list_item_approval` AS select distinct `a`.`id` AS `id`,`b`.`no_id_item_ppo` AS `no_id_item_ppo`,`a`.`noppotxt` AS `noppotxt`,`a`.`tglppotxt` AS `tglppotxt`,`a`.`noreftxt` AS `noreftxt`,`a`.`kodebartxt` AS `kodebartxt`,`a`.`nabar` AS `nabar`,`a`.`sat` AS `sat`,`a`.`qty` AS `qty`,`a`.`STOK` AS `STOK`,`a`.`ket` AS `ket`,`a`.`status` AS `status`,`a`.`status2` AS `status2`,`a`.`po` AS `po`,`a`.`kodedept` AS `kodedept`,`a`.`namadept` AS `namadept`,`b`.`flag_waiting_ktu` AS `flag_waiting_ktu`,`b`.`nama_approval_ktu` AS `nama_approval_ktu`,`b`.`tgl_approval_ktu` AS `tgl_approval_ktu`,`b`.`status_ktu` AS `status_ktu`,`b`.`status2_ktu` AS `status2_ktu`,`b`.`status_lokasi_ktu` AS `status_lokasi_ktu`,`b`.`flag_waiting_kasie` AS `flag_waiting_kasie`,`b`.`nama_approval_kasie` AS `nama_approval_kasie`,`b`.`tgl_approval_kasie` AS `tgl_approval_kasie`,`b`.`status_kasie` AS `status_kasie`,`b`.`status2_kasie` AS `status2_kasie`,`b`.`status_lokasi_kasie` AS `status_lokasi_kasie`,`b`.`flag_waiting_gm` AS `flag_waiting_gm`,`b`.`nama_approval_gm` AS `nama_approval_gm`,`b`.`tgl_approval_gm` AS `tgl_approval_gm`,`b`.`status_gm` AS `status_gm`,`b`.`status2_gm` AS `status2_gm`,`b`.`status_lokasi_gm` AS `status_lokasi_gm`,`b`.`flag_waiting_mill_mgr` AS `flag_waiting_mill_mgr`,`b`.`nama_approval_mill_mgr` AS `nama_approval_mill_mgr`,`b`.`tgl_approval_mill_mgr` AS `tgl_approval_mill_mgr`,`b`.`status_mill_mgr` AS `status_mill_mgr`,`b`.`status2_mill_mgr` AS `status2_mill_mgr`,`b`.`status_lokasi_mill_mgr` AS `status_lokasi_mill_mgr`,`b`.`flag_waiting_dept_head` AS `flag_waiting_dept_head`,`b`.`nama_approval_dept_head` AS `nama_approval_dept_head`,`b`.`tgl_approval_dept_head` AS `tgl_approval_dept_head`,`b`.`status_dept_head` AS `status_dept_head`,`b`.`status2_dept_head` AS `status2_dept_head`,`b`.`status_lokasi_dept_head` AS `status_lokasi_dept_head`,`b`.`flag_waiting_dir_ops` AS `flag_waiting_dir_ops`,`b`.`nama_approval_dir_ops` AS `nama_approval_dir_ops`,`b`.`tgl_approval_dir_ops` AS `tgl_approval_dir_ops`,`b`.`status_dir_ops` AS `status_dir_ops`,`b`.`status2_dir_ops` AS `status2_dir_ops`,`b`.`status_lokasi_dir_ops` AS `status_lokasi_dir_ops`,`b`.`flag_waiting_dir_hrd` AS `flag_waiting_dir_hrd`,`b`.`nama_approval_dir_hrd` AS `nama_approval_dir_hrd`,`b`.`tgl_approval_dir_hrd` AS `tgl_approval_dir_hrd`,`b`.`status_dir_hrd` AS `status_dir_hrd`,`b`.`status2_dir_hrd` AS `status2_dir_hrd`,`b`.`status_lokasi_dir_hrd` AS `status_lokasi_dir_hrd`,`b`.`flag_waiting_dir_mis` AS `flag_waiting_dir_mis`,`b`.`nama_approval_dir_mis` AS `nama_approval_dir_mis`,`b`.`tgl_approval_dir_mis` AS `tgl_approval_dir_mis`,`b`.`status_dir_mis` AS `status_dir_mis`,`b`.`status2_dir_mis` AS `status2_dir_mis`,`b`.`status_lokasi_dir_mis` AS `status_lokasi_dir_mis`,`b`.`flag_waiting_dir_legal` AS `flag_waiting_dir_legal`,`b`.`nama_approval_dir_legal` AS `nama_approval_dir_legal`,`b`.`tgl_approval_dir_legal` AS `tgl_approval_dir_legal`,`b`.`status_dir_legal` AS `status_dir_legal`,`b`.`status2_dir_legal` AS `status2_dir_legal`,`b`.`status_lokasi_dir_legal` AS `status_lokasi_dir_legal`,`b`.`flag_waiting_dir_area` AS `flag_waiting_dir_area`,`b`.`nama_approval_dir_area` AS `nama_approval_dir_area`,`b`.`tgl_approval_dir_area` AS `tgl_approval_dir_area`,`b`.`status_dir_area` AS `status_dir_area`,`b`.`status2_dir_area` AS `status2_dir_area`,`b`.`status_lokasi_dir_area` AS `status_lokasi_dir_area`,`b`.`flag_waiting_kp` AS `flag_waiting_kp`,`b`.`nama_approval_kp` AS `nama_approval_kp`,`b`.`tgl_approval_kp` AS `tgl_approval_kp`,`b`.`status_kp` AS `status_kp`,`b`.`status2_kp` AS `status2_kp`,`b`.`status_lokasi_kp` AS `status_lokasi_kp` from (`item_ppo` `a` left join `item_ppo_approval` `b` on((`a`.`id` = `b`.`no_id_item_ppo`)));

SET FOREIGN_KEY_CHECKS = 1;

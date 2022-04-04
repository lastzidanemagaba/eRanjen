-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 03:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jti_bbmranrolog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kartus`
--

CREATE TABLE `kartus` (
  `kartu_id` int(80) NOT NULL,
  `kartu_tag_no` varchar(255) NOT NULL,
  `kartu_ranjen_is` int(11) NOT NULL COMMENT '1 ranjen, 2 kupon dukungan, 3 cadangan master, 4 cadangan jabatan',
  `kartu_kendaraan` int(11) NOT NULL,
  `kartu_banned` int(11) NOT NULL DEFAULT 0,
  `kartu_created_tgl` datetime DEFAULT NULL,
  `kartu_paired` int(11) NOT NULL DEFAULT 0,
  `kartu_paired_by` int(11) DEFAULT NULL,
  `kartu_paired_tgl` datetime DEFAULT NULL,
  `kartu_deleted` int(11) DEFAULT NULL,
  `kartu_deleted_by` int(11) DEFAULT NULL,
  `kartu_deleted_tgl` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_trxs`
--

CREATE TABLE `kartu_trxs` (
  `trx_id` int(25) NOT NULL,
  `trx_kartu` int(25) NOT NULL,
  `trx_kartu_tag_no` varchar(25) NOT NULL,
  `trx_tgl` datetime(6) NOT NULL,
  `trx_spbu` varchar(25) NOT NULL,
  `trx_wilayah` varchar(25) NOT NULL,
  `trx_user_spbu` int(25) NOT NULL,
  `trx_deleted` int(25) NOT NULL,
  `trx_deleted_by` int(25) NOT NULL,
  `trx_deleted_tgl` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `ran_id` int(25) NOT NULL,
  `ran_nopol` varchar(255) NOT NULL,
  `ran_bbm_jenis` varchar(255) NOT NULL,
  `ran_jen` varchar(255) NOT NULL,
  `ran_tipe` varchar(255) NOT NULL,
  `ran_satker` varchar(255) NOT NULL,
  `ran_kondisi` varchar(255) NOT NULL,
  `ran_wilayah` varchar(255) NOT NULL,
  `ran_liter` varchar(255) NOT NULL,
  `ran_bbm_isi` varchar(255) NOT NULL,
  `ran_spbu` varchar(255) NOT NULL,
  `ran_deleted` varchar(255) DEFAULT NULL,
  `ran_deleted_by` varchar(255) DEFAULT NULL,
  `ran_deleted_tgl` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `logak_id` int(255) NOT NULL,
  `logak_tgl` datetime NOT NULL,
  `logak_ket` varchar(255) NOT NULL,
  `logak_user` varchar(255) NOT NULL,
  `logak_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`logak_id`, `logak_tgl`, `logak_ket`, `logak_user`, `logak_ip`) VALUES
(1, '2022-03-02 16:36:10', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(2, '2022-03-02 16:38:35', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(3, '2022-03-02 16:58:09', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(4, '2022-03-02 17:01:00', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(5, '2022-03-02 17:04:56', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(6, '2022-03-02 17:07:58', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(7, '2022-03-02 17:08:14', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(8, '2022-03-02 17:12:15', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(9, '2022-03-02 17:12:30', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(10, '2022-03-02 17:12:45', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(11, '2022-03-04 15:46:50', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(12, '2022-03-07 10:33:34', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(13, '2022-03-07 15:35:30', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(14, '2022-03-08 10:05:07', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(15, '2022-03-09 10:45:30', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(16, '2022-03-09 16:19:33', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(17, '2022-03-09 16:26:37', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(18, '2022-03-09 16:50:16', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(19, '2022-03-10 10:09:57', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(20, '2022-03-10 11:15:58', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(21, '2022-03-10 11:35:51', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(22, '2022-03-11 10:29:16', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(23, '2022-03-11 10:48:47', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(24, '2022-03-11 10:52:43', 'Login Ke Aplikasi Web e-Ranjen', '3', '::1'),
(25, '2022-03-11 11:27:15', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(26, '2022-03-11 11:28:00', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(27, '2022-03-11 11:28:28', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(28, '2022-03-11 11:39:52', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(29, '2022-03-11 11:40:21', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(30, '2022-03-11 11:40:38', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(31, '2022-03-11 11:52:27', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(32, '2022-03-11 11:54:33', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(33, '2022-03-11 11:54:54', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(34, '2022-03-11 11:55:45', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(35, '2022-03-11 13:56:59', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(36, '2022-03-12 10:30:38', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(37, '2022-03-12 13:11:53', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(38, '2022-03-14 18:02:06', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(39, '2022-03-16 11:15:15', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(40, '2022-03-16 11:20:08', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(41, '2022-03-16 15:14:04', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(42, '2022-03-16 15:16:43', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(43, '2022-03-16 16:14:58', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(44, '2022-03-17 11:59:04', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(45, '2022-03-18 10:41:40', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(46, '2022-03-29 10:32:16', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(47, '2022-03-31 11:21:48', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(48, '2022-03-31 17:23:33', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(49, '2022-04-01 11:04:29', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(50, '2022-04-04 09:28:00', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1'),
(51, '2022-04-04 14:28:33', 'Login Ke Aplikasi Web e-Ranjen', '1', '::1'),
(52, '2022-04-04 14:41:36', 'Login Ke Aplikasi Web e-Ranjen', '2', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `master_alokasibbm`
--

CREATE TABLE `master_alokasibbm` (
  `ran_id_bbm` int(11) NOT NULL,
  `ran_total_bbm` int(255) NOT NULL,
  `ran_updated_by` int(11) DEFAULT NULL,
  `ran_updated_at` datetime DEFAULT NULL,
  `ran_deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_alokasibbm`
--

INSERT INTO `master_alokasibbm` (`ran_id_bbm`, `ran_total_bbm`, `ran_updated_by`, `ran_updated_at`, `ran_deleted_by`) VALUES
(1, 20000, 1, '2022-03-02 12:45:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_bbm_jenis`
--

CREATE TABLE `master_bbm_jenis` (
  `mbj_id` int(25) NOT NULL,
  `mbj_bbmnama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_bbm_jenis`
--

INSERT INTO `master_bbm_jenis` (`mbj_id`, `mbj_bbmnama`) VALUES
(1, 'PERTAMAX'),
(2, 'DEX LOW SULFUR');

-- --------------------------------------------------------

--
-- Table structure for table `master_kondisi`
--

CREATE TABLE `master_kondisi` (
  `mkon_id` int(25) NOT NULL,
  `mkon_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kondisi`
--

INSERT INTO `master_kondisi` (`mkon_id`, `mkon_nama`) VALUES
(1, 'BAIK'),
(2, 'RUSAK RINGAN');

-- --------------------------------------------------------

--
-- Table structure for table `master_ranjen_is`
--

CREATE TABLE `master_ranjen_is` (
  `id_ranjen_is` int(11) NOT NULL,
  `nama_ranjen_is` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_ranjen_is`
--

INSERT INTO `master_ranjen_is` (`id_ranjen_is`, `nama_ranjen_is`) VALUES
(1, 'Ranjen'),
(2, 'Cadangan Master'),
(3, 'Cadangan Jabatan');

-- --------------------------------------------------------

--
-- Table structure for table `master_ran_jen`
--

CREATE TABLE `master_ran_jen` (
  `mrj_id` int(25) NOT NULL,
  `mrj_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_ran_jen`
--

INSERT INTO `master_ran_jen` (`mrj_id`, `mrj_nama`) VALUES
(1, 'RANUM'),
(2, 'RANSUS');

-- --------------------------------------------------------

--
-- Table structure for table `master_ran_tipe`
--

CREATE TABLE `master_ran_tipe` (
  `mrt_id` int(25) NOT NULL,
  `mrt_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_ran_tipe`
--

INSERT INTO `master_ran_tipe` (`mrt_id`, `mrt_nama`) VALUES
(1, 'R2'),
(2, 'R2A'),
(3, 'R2B'),
(4, 'R4'),
(5, 'R6'),
(6, 'RANTIS');

-- --------------------------------------------------------

--
-- Table structure for table `master_satker`
--

CREATE TABLE `master_satker` (
  `msat_id` int(255) NOT NULL,
  `msat_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_satker`
--

INSERT INTO `master_satker` (`msat_id`, `msat_nama`) VALUES
(1, 'SPRIPIM'),
(2, 'ITWASDA'),
(3, 'RO OPS'),
(4, 'RO RENA'),
(5, 'RO SDM'),
(6, 'ROLOG'),
(7, 'BID PROPAM'),
(8, 'BID HUMAS'),
(9, 'BIDKUM'),
(10, 'BID TIK'),
(11, 'SETUM'),
(12, 'YANMA'),
(13, 'DIT INTELKAM'),
(14, 'DIT RESKRIM UM'),
(15, 'DIT RESKRIM SUS'),
(16, 'DIT RES NARKOBA'),
(17, 'DIT BINMAS'),
(18, 'DIT SAMAPTA'),
(19, 'DIT LANTAS'),
(20, 'DIT PAM OBVIT'),
(21, 'DIT TAHTI'),
(22, 'BID KEU'),
(23, 'BID DOKKES'),
(24, 'SPKT');

-- --------------------------------------------------------

--
-- Table structure for table `master_wilayah`
--

CREATE TABLE `master_wilayah` (
  `mwil_id` int(25) NOT NULL,
  `mwil_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_wilayah`
--

INSERT INTO `master_wilayah` (`mwil_id`, `mwil_nama`) VALUES
(1, 'UTARA'),
(2, 'TIMUR'),
(3, 'BARAT'),
(4, 'SELATAN'),
(5, 'PUSAT');

-- --------------------------------------------------------

--
-- Table structure for table `spbus`
--

CREATE TABLE `spbus` (
  `spbu_id` int(25) NOT NULL,
  `spbu_nama` varchar(255) NOT NULL,
  `spbu_kode` int(255) NOT NULL,
  `spbu_alamat` varchar(255) NOT NULL,
  `spbu_wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spbus`
--

INSERT INTO `spbus` (`spbu_id`, `spbu_nama`, `spbu_kode`, `spbu_alamat`, `spbu_wilayah`) VALUES
(1, 'SPBU 31.127.01', 3112701, 'JL. KEMANG SELATAN RAYA 105A', '4'),
(2, 'SPBU 31.121.04', 3112104, 'JL. GANDARIA I KAV.27-28', '4'),
(3, 'SPBU 31.122.03', 3112203, 'JL. ARTERI TENTARA PELAJAR PERMATA HIJAU', '4'),
(4, 'SPBU 31.122.04', 3112204, 'JL. SULTAN ISKANDAR MUDA ARTERI PONDOK INDAH', '4'),
(5, 'SPBU 31.124.01', 3112401, 'JL. FATMAWATI NO.06', '4'),
(6, 'SPBU 31.124.02', 3112402, 'JL. RS FATMAWATI NO. 16 - 19', '4'),
(7, 'SPBU 31.126.01', 3112601, 'JL. LENTENG AGUNG RAYA NO 8', '4'),
(8, 'SPBU 31.127.02', 3112702, 'JL. KAPTEN TENDEAN NO. 38', '4'),
(9, 'SPBU 31.129.02', 3112902, 'JL. HR RASUNA SAID', '4'),
(10, 'SPBU 34.121.05', 3412105, 'JL. KEMANG RAYA NO 39', '4'),
(11, 'SPBU 34.121.13', 3412113, 'JL. PANGERAN ANTASARI NO.10A', '4'),
(12, 'SPBU 34.121.15', 3412115, 'JL. RAYA RADIO DALAM NO 123', '4'),
(13, 'SPBU 34.122.04', 3412204, 'JL. RAWA KEMIRI KEBAYORAN LAMA', '4'),
(14, 'SPBU 34.122.08', 3412208, 'JL. CIPUTAT RAYA', '4'),
(15, 'SPBU 34.122.09', 3412209, 'JL. CILEDUG RAYA', '4'),
(16, 'SPBU 34.122.13', 3412213, 'JL. CIPUTAT RAYA NO 41 KEBAYORAN LAMA JAKARTA SELATAN', '4'),
(17, 'SPBU 34.122.14', 3412214, 'JL. RS VETERAN NO 35 TANAH KUSIR,KEBAYORAN LAMA JAKARTA SELATAN, JAKARTA SELATAN-DKI JAKARTA', '4'),
(18, 'SPBU 34.123.01', 3412301, 'JL. RC VETERAN', '4'),
(19, 'SPBU 34.123.02', 3412302, 'JL. SULTAN ISKANDAR MUDA', '4'),
(20, 'SPBU 34.123.03', 3412303, 'JL. BINTARO RAYA', '4'),
(21, 'SPBU 34.123.04', 3412304, 'JL. BINTARO PERMAI NO 45 PESANGGRAHAN JAKARTA SELATAN', '4'),
(22, 'SPBU 34.123.05', 3412305, 'JL. PAHLAWAN', '4'),
(23, 'SPBU 34.123.06', 3412306, 'JL. KESEHATAN RAYA NO. 15, BINTARO', '4'),
(24, 'SPBU 34.123.07', 3412307, 'JL. CIPUTAT RAYA NO. 12', '4'),
(25, 'SPBU 34.124.01', 3412401, 'JL. RS. FATMAWATI NO. 4', '4'),
(26, 'SPBU 34.124.07', 3412407, 'JL. TEROGONG RAYA NO.1', '4'),
(27, 'SPBU 34.124.09', 3412409, 'JL. KARANG TENGAH RAYA NO.20', '4'),
(28, 'SPBU 34.124.10', 3412410, 'JL. KARANG TENGAH RAYA NO. 7-8 LEBAK BULUS', '4'),
(29, 'SPBU 34.124.11', 3412411, 'JL. MARGAGUNA RAYA NO.11', '4'),
(30, 'SPBU 34.125.03', 3412503, 'JL. RAYA PASAR MINGGU NO.100', '4'),
(31, 'SPBU 34.125.04', 3412504, 'JL. AMPERA RAYA NO. 16', '4'),
(32, 'SPBU 34.125.05', 3412505, 'JL. RAYA TANJUNG BARAT NO.156 JAKARTA SELATAN', '4'),
(33, 'SPBU 34.125.07', 3412507, 'JL. RAYA CILANDAK KKO', '4'),
(34, 'SPBU 34.125.08', 3412508, 'JL. RAYA JAGAKARSA 2 NO 4', '4'),
(35, 'SPBU 34.125.09', 3412509, 'JL. TAMAN MARGASATWA NO. 21-22', '4'),
(36, 'SPBU 34.125.12', 3412512, 'JL. TAMAN MARGASATWA RAYA NO 28', '4'),
(37, 'SPBU 34.126.01', 3412601, 'JL. JAKARTA SELATAN', '4'),
(38, 'SPBU 34.126.02', 3412602, 'JL. LENTENG AGUNG NO. 93', '4'),
(39, 'SPBU 34.126.04', 3412604, 'JL. RAYA TANJUNG BARAT', '4'),
(40, 'SPBU 34.126.05', 3412605, 'JL. RAYA LENTENG AGUNG', '4'),
(41, 'SPBU 34.126.06', 3412606, 'JL. MOH. KAHFI I, CIGANJUR, JAKARTA SELATAN', '4'),
(42, 'SPBU 34.126.08', 3412608, 'JL. RAYA JAGAKARSA NO 1B', '4'),
(43, 'SPBU 34.126.10', 3412610, 'JL. M. KAHFI 2 NO. 17 JAGAKARSA', '4'),
(44, 'SPBU 34.127.01', 3412701, 'JL. WARUNG JATI BARAT NO.24', '4'),
(45, 'SPBU 34.127.02', 3412702, 'JL. KAPTEN TENDEAN NO. 34', '4'),
(46, 'SPBU 34.127.03', 3412703, 'JL. RAYA PASAR MINGGU NO. 14 A', '4'),
(47, 'SPBU 34.127.06', 3412706, 'JL. MAMPANG PRAPATAN RAYA NO. 98', '4'),
(48, 'SPBU 34.127.07', 3412707, 'JL. RAYA PASAR MINGGU', '4'),
(49, 'SPBU 34.128.05', 3412805, 'JL. CASABLANCA MENTENG DALAM', '4'),
(50, 'SPBU 34.129.01', 3412901, 'JL. MINANGKABAU TIMUR NO.33', '4'),
(51, 'SPBU 34.129.02', 3412902, 'JL. JEND GATOT SUBROTO KAV31', '4'),
(52, 'SPBU 34.122.05', 3412205, 'JL. PALMERAH BARAT NO 37', '4'),
(53, 'SPBU 33.142.01', 3314201, 'Jl. Pegangsaan Dua No.81', '1'),
(54, 'SPBU 33.144.01', 3314401, 'JL. PLUIT RAYA NO.3', '1'),
(55, 'SPBU 34.141.01', 3414101, 'JL. TIPAR CAKUNG NO.48', '1'),
(56, 'SPBU 34.141.03', 3414103, 'JL. PLUMPANG SEMPER NO.54', '1'),
(57, 'SPBU 34.141.05', 3414105, 'JL. RAYA CAKUNG CILINCING NO.89', '1'),
(58, 'SPBU 34.141.06', 3414106, 'JL. BIDARA NO. 5 MARUNDA', '1'),
(59, 'SPBU 34.141.07', 3414107, 'JL. RAYA CACING KBN CAKUNG', '1'),
(60, 'SPBU 34.141.08', 3414108, 'JL. SURABAYA KAV. C 3-4, KBN MARUNDA', '1'),
(61, 'SPBU 34.141.09', 3414109, 'JL. RAYA CILINCING', '1'),
(62, 'SPBU 34.142.01', 3414201, 'JL. BOULEVARD BARAT BLOK XB', '1'),
(63, 'SPBU 34.142.03', 3414203, 'JL. RAYA CAKUNG CILINGCING', '1'),
(64, 'SPBU 34.142.05', 3414205, 'JL. BOULEVARD TIMUR', '1'),
(65, 'SPBU 34.142.06', 3414206, 'JL. PEGANGSAAN 2 KELAPA GADING', '1'),
(66, 'SPBU 34.142.08', 3414208, 'JL. BOULEVARD ARTHA GADING KAV A3', '1'),
(67, 'SPBU 34.142.09', 3414209, 'JL. LOGISTIK PEGANGSAAN DUA NO.85', '1'),
(68, 'SPBU 34.142.10', 3414210, 'JL. BULEVARD ARTHA GADING BLOK D NO. 2', '1'),
(69, 'SPBU 34.143.01', 3414301, 'JL. DANAU SUNTER UTARA BLOK F20 NO.30 SUNTER AGUNG', '1'),
(70, 'SPBU 34.143.04', 3414304, 'JL. TONGKOL NO. 7', '1'),
(71, 'SPBU 34.143.05', 3414305, 'JL. SUNTER KEMAYORAN NO. 45', '1'),
(72, 'SPBU 34.143.06', 3414306, 'JL. DANAU SUNTER SELATAN', '1'),
(73, 'SPBU 34.143.07', 3414307, 'JL. DANAU SUNTER SELATAN BLOK O5 NO.10', '1'),
(74, 'SPBU 34.143.08', 3414308, 'JL. ENGGANO 14-16', '1'),
(75, 'SPBU 34.143.10', 3414310, 'JL. GAYA MOTOR RAYA NO. 13', '1'),
(76, 'SPBU 34.144.01', 3414401, 'JL. PLUIT RAYA SELATAN 10', '1'),
(77, 'SPBU 34.144.02', 3414402, 'JL. LODAN RAYA NO 103 MARINA JAYA ANCOL', '1'),
(78, 'SPBU 34.144.03', 3414403, 'JL. RAYA PLUIT SELATAN NO.10 JAKARTA UTARA', '1'),
(79, 'SPBU 34.144.05', 3414405, 'JL. KAMPUNG BANDAN NO 30', '1'),
(80, 'SPBU 34.144.06', 3414406, 'JL. KOMPLEK PELELANGAN IKAN', '1'),
(81, 'SPBU 34.144.07', 3414407, 'JL. JEMBATAN TIGA BLOK F 4-5', '1'),
(82, 'SPBU 34.144.08', 3414408, 'JL. BUDI MULYA RAYA', '1'),
(83, 'SPBU 34.144.09', 3414409, 'JL. KAPUK KAMAL RAYA NO.133', '1'),
(84, 'SPBU 34.144.10', 3414410, 'JL. KAPUK RAYA NO. 36, KAMAL MUARA PENJARINGAN JAKARTA UTARA', '1'),
(85, 'SPBU 34.144.11', 3414411, 'JL. KAPUK KAMAL RAYA NO.1A PENJARINGAN JAKARTA UTARA', '1'),
(86, 'SPBU 34.144.13', 3414413, 'JL. BENYAMIN SUEB BLOK C4', '1'),
(87, 'SPBU 34.144.14', 3414414, 'JL. GEDONG PANJANG NO.44', '1'),
(88, 'SPBU 34.144.15', 3414415, 'JL. BUKIT GOLF MEDITERANIA PANTAI INDAH KAPUK', '1'),
(89, 'SPBU 34.144.16', 3414416, 'JL. PLUIT PERMAI RAYA', '1'),
(90, 'SPBU 31.131.01', 3113101, 'JL. PTAMUKA RAYA NO. 18A', '2'),
(91, 'SPBU 31.133.01', 3113301, 'JL. OTISTA RAYA NO 69-71', '2'),
(92, 'SPBU 31.134.01', 3113401, 'JL. RAYA BEKASI TIMUR KLENDER', '2'),
(93, 'SPBU 31.134.02', 3113402, 'JL. RAYA KALIMALANG', '2'),
(94, 'SPBU 31.136.02', 3113602, 'JL. MAYJEN SUTOYO', '2'),
(95, 'SPBU 31.137.01', 3113701, 'JL. RAYA BOGOR KM 28', '2'),
(96, 'SPBU 31.139.02', 3113902, 'JL. RAYA BEKASI, KM.21 RAWATERTE', '2'),
(97, 'SPBU 33.134.01', 3313401, 'JL. ISPEKSI KALIMALANG NO 42', '2'),
(98, 'SPBU 33.134.02', 3313402, 'JL. KOLONEL SOEGIONO', '2'),
(99, 'SPBU 34.131.01', 3413101, 'JL. AHMAD YANI NO 114A', '2'),
(100, 'SPBU 34.131.02', 3413102, 'JL. MATRAMAN RAYA NO 44', '2'),
(101, 'SPBU 34.131.03', 3413103, 'JL. MATRAMAN RAYA NO 84', '2'),
(102, 'SPBU 34.132.01', 3413201, 'JL. I GUSTI NGURAH RAI', '2'),
(103, 'SPBU 34.132.02', 3413202, 'JL. PERINTIS KEMERDEKAAN 194', '2'),
(104, 'SPBU 34.132.03', 3413203, 'JL. KAYUPUTIH RAYA', '2'),
(105, 'SPBU 34.132.05', 3413205, 'JL. PERINTIS KEMERDEKAAN NO.50', '2'),
(106, 'SPBU 34.132.06', 3413206, 'JL. PEMUDA KAV 3-4', '2'),
(107, 'SPBU 34.132.08', 3413208, 'JL. RAWAMANGUN MUKA RAYA NO.1', '2'),
(108, 'SPBU 34.133.02', 3413302, 'JL. D.I PANJAITAN KAV 25', '2'),
(109, 'SPBU 34.133.05', 3413305, 'JL. RAYA OTISTA NO.64B', '2'),
(110, 'SPBU 34.133.06', 3413306, 'JL. JATINEGARA TIMUR NO.54', '2'),
(111, 'SPBU 34.133.07', 3413307, 'JL. JATINEGARA BARAT NO 83', '2'),
(112, 'SPBU 34.134.01', 3413401, 'JL. INSPEKSI SALURAN KALIMALANG NO.01 KAV. AGRARIA DUREN SAWIT JAKARTA TIMUR', '2'),
(113, 'SPBU 34.134.02', 3413402, 'JL. PAHLAWAN REVOLUSI', '2'),
(114, 'SPBU 34.134.03', 3413403, 'JL. PAHLAWAN REVOLUSI PONDOK NAMBU', '2'),
(115, 'SPBU 34.134.06', 3413406, 'JL. RAWA JAYA', '2'),
(116, 'SPBU 34.134.07', 3413407, 'JL. RADIN INTAN II. NO 49 BUARAN', '2'),
(117, 'SPBU 34.134.09', 3413409, 'JL. RADIN INTEN N0 17', '2'),
(118, 'SPBU 34.134.10', 3413410, 'JL. RADIN INTAN II, DUREN SAWIT', '2'),
(119, 'SPBU 34.134.12', 3413412, 'JL. BASUKI RAHMAT NO.9', '2'),
(120, 'SPBU 34.134.13', 3413413, 'JL. CIPINANG JAYA BLOK J 142 146', '2'),
(121, 'SPBU 34.134.14', 3413414, 'JL. BASUKI RAHMAT NO. 64', '2'),
(122, 'SPBU 34.134.16', 3413416, 'JL. SUKAMTO', '2'),
(123, 'SPBU 34.134.18', 3413418, 'JL. H. NAMAN NO. 29', '2'),
(124, 'SPBU 34.134.19', 3413419, 'JL. RADEN INTEN 2 NO 60', '2'),
(125, 'SPBU 34.134.20', 3413420, 'JL. RAYA KALIMALANG', '2'),
(126, 'SPBU 34.134.21', 3413421, 'JL. I GUSTI NGURAH RAI PONDOK KOPI JAKARTA TIMUR', '2'),
(127, 'SPBU 34.135.01', 3413501, 'JL. CONDET RAYA NO 321', '2'),
(128, 'SPBU 34.135.02', 3413502, 'JL. RAYA CONDET', '2'),
(129, 'SPBU 34.135.03', 3413503, 'JL. PINANG RANTI', '2'),
(130, 'SPBU 34.135.04', 3413504, 'JL. RAYA PONDOK GEDE NO.39', '2'),
(131, 'SPBU 34.135.05', 3413505, 'JL. RAYA BOGOR KM 19 NO. 109-110', '2'),
(132, 'SPBU 34.135.06', 3413506, 'JL. PUSDIKLAT DEPNAKER', '2'),
(133, 'SPBU 34.136.02', 3413602, 'JL. DEWI SARTIKA', '2'),
(134, 'SPBU 34.136.03', 3413603, 'JL. RAYA JATIWARINGIN NO. 4', '2'),
(135, 'SPBU 34.136.04', 3413604, 'JL. DEWI SARTIKA 232', '2'),
(136, 'SPBU 34.136.05', 3413605, 'JL. RAYA HALIM PERDANAKUSUMA NO 11', '2'),
(137, 'SPBU 34.137.03', 3413703, 'JL. RAYA CIRACAS NO 107 JAKARTA TIMUR', '2'),
(138, 'SPBU 34.137.04', 3413704, 'JL. RAYA BOGOR KM 24.7 CIRACAS', '2'),
(139, 'SPBU 34.137.06', 3413706, 'JL. JAMBORE RAYA NO. 8 CIBUBUR', '2'),
(140, 'SPBU 34.137.08', 3413708, 'JL. KELAPA DUA WETAN', '2'),
(141, 'SPBU 34.137.09', 3413709, 'JL. PKP RAYA NO.1', '2'),
(142, 'SPBU 34.138.01', 3413801, 'JL. PINTU II TMII', '2'),
(143, 'SPBU 34.138.02', 3413802, 'JL. RAYA PONDOK GEDE', '2'),
(144, 'SPBU 34.138.03', 3413803, 'JL. RAYA BINA MARGA', '2'),
(145, 'SPBU 34.138.04', 3413804, 'JL. SUPRIYADI NO 100', '2'),
(146, 'SPBU 34.138.05', 3413805, 'JL. PAGELARANG NO. 47', '2'),
(147, 'SPBU 34.138.06', 3413806, 'JL. SUPRIYADI OUTER RINGROAD NO.27', '2'),
(148, 'SPBU 34.138.08', 3413808, 'JL. RAYA CIPAYUNG', '2'),
(149, 'SPBU 34.138.09', 3413809, 'JL. TOL JAGORAWI KM 10 MUNJUL CIPAYUNG JAKARTA TIMUR', '2'),
(150, 'SPBU 34.139.01', 3413901, 'JL. BEKASI TIMUR RAYA NO 29', '2'),
(151, 'SPBU 34.139.03', 3413903, 'JL. RAYA PENGGILINGAN', '2'),
(152, 'SPBU 34.139.05', 3413905, 'JL. RY PULO GEBANG', '2'),
(153, 'SPBU 34.139.06', 3413906, 'JL. RAYA CAKUNG CILINCING KM 1.5', '2'),
(154, 'SPBU 34.139.07', 3413907, 'JL. SENTRA PRIMER', '2'),
(155, 'SPBU 34.139.08', 3413908, 'JL. SRI SULTAN HAMENGKUBUWONO IX KM.26', '2'),
(156, 'SPBU 34.139.09', 3413909, 'JL. KRT RADJIMAN', '2'),
(157, 'SPBU 34.139.10', 3413910, 'JL. SULTAN HAMENGKUBUWONO IX KM. 24', '2'),
(158, 'SPBU 34.139.11', 3413911, 'JL. ALTERNATIF SISI TOL PULO GEBANG', '2'),
(159, 'SPBU 34.132.09', 3413209, 'JL. PEMUDA NO. 40-41', '2'),
(160, 'SPBU 34.137.11', 3413711, 'JL. RAYA BOGOR KM.21', '2'),
(161, 'SPBU 31.114.01', 3111401, 'JL. LETJEND S. PARMAN KAV.70', '3'),
(162, 'SPBU 31.114.03', 3111403, 'JL. DAAN MOGOT KM 1 KAV 2', '3'),
(163, 'SPBU 31.114.04', 3111404, 'JL. TOMANG RAYA NO.42', '3'),
(164, 'SPBU 31.115.01', 3111501, 'JL. KEDOYA RAYA NO 14', '3'),
(165, 'SPBU 31.116.01', 3111601, 'JL. MERUYA ILIR RAYA', '3'),
(166, 'SPBU 31.116.02', 3111602, 'JL. KEMBANGAN UTARA NO.238', '3'),
(167, 'SPBU 31.117.02', 3111702, 'JL. DAAN MOGOT KM 10 PESING POGLAR', '3'),
(168, 'SPBU 31.118.02', 3111802, 'JL. DAAN MOGOT KM.16', '3'),
(169, 'SPBU 33.113.01', 3311301, 'JL. PANGERAN TUBAGUS ANGKE NO.10 JAKARTA BARAT', '3'),
(170, 'SPBU 34.111.03', 3411103, 'JL. KS. TUBUN NO. 20', '3'),
(171, 'SPBU 34.111.04', 3411104, 'JL. HAYAM WURUK 74-75', '3'),
(172, 'SPBU 34.112.01', 3411201, 'JL. KH.MOH. MANSYUR NO.133', '3'),
(173, 'SPBU 34.114.03', 3411403, 'JL. KEMANGGISAN UTAMA RAYA NO 6-8', '3'),
(174, 'SPBU 34.114.04', 3411404, 'JL. PROF. DR. LATUMENTEN RAYA. NO. 20', '3'),
(175, 'SPBU 34.114.05', 3411405, 'JL. PALMERAH UTARA NO. 56', '3'),
(176, 'SPBU 34.114.07', 3411407, 'JL. KEMANGGISAN UTAMA RAYA NO 52A', '3'),
(177, 'SPBU 34.115.02', 3411502, 'JL. ARTERI RING ROAD GREEN GARDEN', '3'),
(178, 'SPBU 34.115.06', 3411506, 'JL. KEDOYA RAYA NO 23', '3'),
(179, 'SPBU 34.115.07', 3411507, 'JL. ARTERI KELAPA DUA KEBON JERUK', '3'),
(180, 'SPBU 34.115.08', 3411508, 'JL. KELAPA DUA RAYA', '3'),
(181, 'SPBU 34.115.09', 3411509, 'JL. PANJANG ARTERI KELAPA DUA', '3'),
(182, 'SPBU 34.115.00', 3411510, 'JL. RAYA PANJANG NO 38', '3'),
(183, 'SPBU 34.115.01', 3411511, 'JL. KEMANGGISAN RAYA NO.14', '3'),
(184, 'SPBU 34.115.02', 3411512, 'JL. PANJANG NO 45C', '3'),
(185, 'SPBU 34.116.01', 3411601, 'JL. MERUYA ILIR', '3'),
(186, 'SPBU 34.116.02', 3411602, 'JL. PURI KEMBANGAN RAYA NO.81', '3'),
(187, 'SPBU 34.116.04', 3411604, 'JL. SWADARMA RAYA RT/RW 009/03, SRENGSENG JAKARTA BARAT', '3'),
(188, 'SPBU 34.116.08', 3411608, 'JL. RAYA POS PENGUMBEN', '3'),
(189, 'SPBU 34.116.09', 3411609, 'JL. JOGLO RAYA NO 77', '3'),
(190, 'SPBU 34.116.01', 3411611, 'JL. KEMBANGAN', '3'),
(191, 'SPBU 34.117.04', 3411704, 'JL. DAAN MOGOT RAYA NO.19', '3'),
(192, 'SPBU 34.117.05', 3411705, 'JL. LINGKAR LUAR BARAT NO.17, DURI KOSAMBI, CENGKARENG JAKARTA BARAT', '3'),
(193, 'SPBU 34.117.06', 3411706, 'JL. DAAN MOGOT KM 14,5', '3'),
(194, 'SPBU 34.117.07', 3411707, 'JL. KAMAL RAYA OUTER RING ROAD', '3'),
(195, 'SPBU 34.117.08', 3411708, 'JL. RAYA DURI KOSAMBI NO.59', '3'),
(196, 'SPBU 34.117.01', 3411711, 'JL. CENDRAWASIH RAYA NO. 99', '3'),
(197, 'SPBU 34.117.02', 3411712, 'JL. DAAN MOGOT KM 12', '3'),
(198, 'SPBU 34.117.04', 3411714, 'JL. LINGKAR LUAR BARAT NO 11', '3'),
(199, 'SPBU 34.118.02', 3411802, 'JL. KANAL RAYA NO. 20', '3'),
(200, 'SPBU 34.118.03', 3411803, 'JL. DAAN MOGOT KM. 18 NO. 15', '3'),
(201, 'SPBU 34.118.04', 3411804, 'JL. PETA BARAT NO. 108 KEL. KALIDERES, KEC. KALIDERES JAKARTA BARAT', '3'),
(202, 'SPBU 34.116.02', 3411612, 'JL. KEMBANG KEREP NO.56', '3'),
(203, 'SPBU 34.116.07', 3411607, 'JL. MERUYA UTARA RAYA BLOK 7 A NO 8', '3'),
(204, 'SPBU 31.114.05', 3111405, 'JL. TOMANG RAYA NO 59', '3'),
(205, 'SPBU 31.102.02', 3110202, 'JL. ABDUL MUIS NOMOR 68', '5'),
(206, 'SPBU 31.103.03', 3110303, 'JL. CIKINI RAYA NO 113-115', '5'),
(207, 'SPBU 31.107.01', 3110701, 'JL. INDUSTRI RAYA NO.1', '5'),
(208, 'SPBU 31.107.02', 3110702, 'JL. SAMANHUDI NO 20', '5'),
(209, 'SPBU 31.107.03', 3110703, 'JL. MANGGA BESAR RAYA NO 140', '5'),
(210, 'SPBU 34.102.01', 3410201, 'JL. BENDUNGAN HILIR', '5'),
(211, 'SPBU 34.102.05', 3410205, 'JL. CIDENG TIMUR NO.50', '5'),
(212, 'SPBU 34.102.06', 3410206, 'JL. HANGLEKIR 1 NO.4', '5'),
(213, 'SPBU 34.104.01', 3410401, 'JL. KRAMAT RAYA NO.116', '5'),
(214, 'SPBU 34.104.02', 3410402, 'JL. PRAMUKA RAYA NO.56-57', '5'),
(215, 'SPBU 34.105.01', 3410501, 'JL. PRAMUKA RAYA NO.68', '5'),
(216, 'SPBU 34.105.02', 3410502, 'JL. LETJEN SUPRAPTO', '5'),
(217, 'SPBU 34.105.07', 3410507, 'JL. CEMPAKA PUTIH RAYA KAV1-2', '5'),
(218, 'SPBU 34.106.03', 3410603, 'JL. GUNUNG SAHARI RAYA 12 NO.2', '5'),
(219, 'SPBU 34.106.04', 3410604, 'JL. BUNGUR BESAR NO 103', '5'),
(220, 'SPBU 34.106.05', 3410605, 'JL. LETJEND SUPRPATO KAV 26', '5'),
(222, 'SPBU 34.107.02', 3410702, 'JL. PANGERAN JAYAKARTA NO. 111', '5'),
(223, 'SPBU 31.103.04', 3110304, 'JL. GEREJA THERESIA', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` varchar(5) NOT NULL,
  `user_created_at` datetime NOT NULL,
  `user_created_by` varchar(255) DEFAULT NULL,
  `user_banned` varchar(255) DEFAULT '0',
  `user_banned_by` varchar(255) DEFAULT NULL,
  `user_banned_tgl` datetime DEFAULT NULL,
  `user_deleted` int(11) DEFAULT 0,
  `user_deleted_by` int(11) DEFAULT NULL,
  `user_deleted_tgl` datetime DEFAULT NULL,
  `user_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_email`, `user_pass`, `user_role`, `user_created_at`, `user_created_by`, `user_banned`, `user_banned_by`, `user_banned_tgl`, `user_deleted`, `user_deleted_by`, `user_deleted_tgl`, `user_updated_at`) VALUES
(1, 'admin123', 'rizkyalbonehirawan@gmail.com', '$2y$10$TVF.1BVjCxLmhGPlID0iguo1zt7JX4AE/SH17N37gjPnxLjE6DPDi', '1', '2022-04-04 14:19:15', NULL, '0', NULL, NULL, 0, NULL, NULL, NULL),
(2, 'superadmin123', 'ali@gmail.com', '$2y$10$YQnGOTg8bCsT6Rns6sAhxuP2lh2GnS0fscQQpzlPk/LhkWb4qITSy', '2', '2022-04-04 09:38:58', NULL, '0', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(25) NOT NULL,
  `role_nama` varchar(255) NOT NULL,
  `role_ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_nama`, `role_ket`) VALUES
(1, 'Admin', 'Manage Akses Admin'),
(2, 'Superadmin', 'Manage Akses Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartus`
--
ALTER TABLE `kartus`
  ADD PRIMARY KEY (`kartu_id`);

--
-- Indexes for table `kartu_trxs`
--
ALTER TABLE `kartu_trxs`
  ADD PRIMARY KEY (`trx_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`ran_id`);

--
-- Indexes for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`logak_id`);

--
-- Indexes for table `master_alokasibbm`
--
ALTER TABLE `master_alokasibbm`
  ADD PRIMARY KEY (`ran_id_bbm`);

--
-- Indexes for table `master_bbm_jenis`
--
ALTER TABLE `master_bbm_jenis`
  ADD PRIMARY KEY (`mbj_id`);

--
-- Indexes for table `master_kondisi`
--
ALTER TABLE `master_kondisi`
  ADD PRIMARY KEY (`mkon_id`);

--
-- Indexes for table `master_ranjen_is`
--
ALTER TABLE `master_ranjen_is`
  ADD PRIMARY KEY (`id_ranjen_is`);

--
-- Indexes for table `master_ran_jen`
--
ALTER TABLE `master_ran_jen`
  ADD PRIMARY KEY (`mrj_id`);

--
-- Indexes for table `master_ran_tipe`
--
ALTER TABLE `master_ran_tipe`
  ADD PRIMARY KEY (`mrt_id`);

--
-- Indexes for table `master_satker`
--
ALTER TABLE `master_satker`
  ADD PRIMARY KEY (`msat_id`);

--
-- Indexes for table `master_wilayah`
--
ALTER TABLE `master_wilayah`
  ADD PRIMARY KEY (`mwil_id`);

--
-- Indexes for table `spbus`
--
ALTER TABLE `spbus`
  ADD PRIMARY KEY (`spbu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kartus`
--
ALTER TABLE `kartus`
  MODIFY `kartu_id` int(80) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartu_trxs`
--
ALTER TABLE `kartu_trxs`
  MODIFY `trx_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `ran_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  MODIFY `logak_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `master_alokasibbm`
--
ALTER TABLE `master_alokasibbm`
  MODIFY `ran_id_bbm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_bbm_jenis`
--
ALTER TABLE `master_bbm_jenis`
  MODIFY `mbj_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_kondisi`
--
ALTER TABLE `master_kondisi`
  MODIFY `mkon_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_ranjen_is`
--
ALTER TABLE `master_ranjen_is`
  MODIFY `id_ranjen_is` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_ran_jen`
--
ALTER TABLE `master_ran_jen`
  MODIFY `mrj_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_ran_tipe`
--
ALTER TABLE `master_ran_tipe`
  MODIFY `mrt_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_satker`
--
ALTER TABLE `master_satker`
  MODIFY `msat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `master_wilayah`
--
ALTER TABLE `master_wilayah`
  MODIFY `mwil_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spbus`
--
ALTER TABLE `spbus`
  MODIFY `spbu_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 04:26 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `booking_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id_booking`, `id_users`, `id_tour`, `quantity`, `booking_date`) VALUES
(12, 24, 1, '2', '2021-11-25'),
(13, 24, 8, '2', '2021-11-25'),
(14, 7, 9, '2', '2021-11-25'),
(30, 24, 7, '5', '2021-11-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `tell` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `name`, `address`, `tell`) VALUES
(1, 'Hoa sen', 'Hà Nội', '1900100456'),
(4, 'Đại dương', 'Sài Gòn', '0983547637'),
(5, 'Phú Vân', 'Phú Quốc', '0398733565'),
(6, 'Vinpearl Nha Trang', 'Nha trang', '0984475878'),
(7, 'Vinpearl Phú Quốc', 'Phú Quốc', '0678837999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `place`
--

CREATE TABLE `place` (
  `id_place` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `place`
--

INSERT INTO `place` (`id_place`, `name`, `description`) VALUES
(1, 'Sài gòn', 'Sài Gòn'),
(9, 'Hà nội', 'Thủ đô'),
(10, 'Phú Quốc', 'Đảo Phú Quốc'),
(11, 'Đà Lạt', 'Thành phố mù sương'),
(12, 'Nha Trang', 'Hòn ngọc của biển Đông'),
(13, 'Sapa', 'Nóc nhà Đông Dương'),
(14, 'Hạ Long', 'Kỳ quan thế giới'),
(15, 'Hải phòng', 'Hải phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` int(11) NOT NULL,
  `description` text NOT NULL,
  `datepost` datetime NOT NULL,
  `thumbnail` text NOT NULL,
  `gallery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `name`, `user`, `description`, `datepost`, `thumbnail`, `gallery`) VALUES
(5, 'Địa điểm đẹp tại Đà Lạt', 7, 'đà lạt\r\n\r\n', '2021-11-11 00:00:00', 'assets/img/7-scaled-e1598947981952 (1).jpeg', ''),
(6, 'Địa điểm đẹp tại Đà Nẵng', 7, '<p>đà nẵng<br></p>', '2021-11-04 00:00:00', 'assets/img/Da-Nang-City-Centre-Where-to-stay-in-Da-Nang-Vietnam.jpeg', ''),
(8, 'Quán ngon Đà Lạt', 24, '<ul class=\"ez-toc-list ez-toc-list-level-1\" style=\"list-style-position: initial; list-style-image: none; background: 0px 0px rgb(237, 246, 255); line-height: 1.6; overflow: hidden; z-index: 1; counter-reset: item 0; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: medium; text-align: justify;\"><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-1\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Quan_an_ngon_Da_Lat_-_Lau_nuong_Tuy_Tuu_Lau\" title=\"Quán ăn ngon Đà Lạt – Lẩu nướng Túy Tửu Lầu\" style=\"touch-action: manipulation; text-decoration-line: underline; outline-width: 0px; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Quán ăn ngon Đà Lạt – Lẩu nướng Túy Tửu Lầu</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-2\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Banh_trang_nuong_-_Mon_ngon_Da_Lat_khong_the_bo_qua\" title=\"Bánh tráng nướng – Món ngon Đà Lạt không thể bỏ qua\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bánh tráng nướng – Món ngon Đà Lạt không thể bỏ qua</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-3\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Banh_uot_chong\" title=\"Bánh ướt chồng\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bánh ướt chồng</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-4\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Pho_tho_da_Chu_Gia_-_Mon_ngon_Da_Lat\" title=\"Phở thố đá Chu Gia – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Phở thố đá Chu Gia – Món ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-5\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Mon_ngon_Da_Lat_-_Banh_uot_long_ga\" title=\"Món ngon Đà Lạt – Bánh ướt lòng gà\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Món ngon Đà Lạt – Bánh ướt lòng gà</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-6\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Banh_mi_xiu_mai\" title=\"Bánh mì xíu mại\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bánh mì xíu mại</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-7\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Banh_can_-_Mon_ngon_Da_Lat\" title=\"Bánh căn – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bánh căn – Món ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-8\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Bun_bo_Hue_-_Mon_ngon_Da_Lat_dac_biet_khong_the_bo_qua\" title=\"Bún bò Huế – Món ngon Đà Lạt đặc biệt không thể bỏ qua\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bún bò Huế – Món ngon Đà Lạt đặc biệt không thể bỏ qua</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-9\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Lau_ga_la_e_Da_Lat\" title=\"Lẩu gà lá é Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Lẩu gà lá é Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-10\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Mon_ngon_Da_Lat_-_Nem_nuong\" title=\"Món ngon Đà Lạt – Nem nướng\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Món ngon Đà Lạt – Nem nướng</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-11\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Lau_bo_Ba_Toa_-_Mon_ngon_Da_Lat\" title=\"Lẩu bò Ba Toa – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Lẩu bò Ba Toa – Món ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-12\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Am_thuc_Da_Lat_-_Ga_nuong_com_lam\" title=\"Ẩm thực Đà Lạt – Gà nướng cơm lam\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Ẩm thực Đà Lạt – Gà nướng cơm lam</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-13\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Xien_nuong_duong_pho\" title=\"Xiên nướng đường phố\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Xiên nướng đường phố</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-14\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Memory_-_Quan_an_ngon_Da_Lat\" title=\"Memory – Quán ăn ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Memory – Quán ăn ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-15\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Banh_beo_-_Mon_ngon_Da_Lat\" title=\"Bánh bèo – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Bánh bèo – Món ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-16\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Mon_ngon_Da_Lat_-_Chao_ech\" title=\"Món ngon Đà Lạt – Cháo ếch\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Món ngon Đà Lạt – Cháo ếch</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-17\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Oc_nhoi_thit_-_Am_thuc_Da_Lat\" title=\"Ốc nhồi thịt – Ẩm thực Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Ốc nhồi thịt – Ẩm thực Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-18\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Canh_atiso_ham_gio_heo_-_Mon_ngon_Da_Lat\" title=\"Canh atiso hầm giò heo – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Canh atiso hầm giò heo – Món ngon Đà Lạt</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-19\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Com_nieu\" title=\"Cơm niêu\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Cơm niêu</a></li><li class=\"ez-toc-page-1 ez-toc-heading-level-2\" style=\"color: rgb(17, 17, 17); background: 0px 0px; list-style: none none; line-height: 1.6; overflow: hidden; z-index: 1; font-size: 15.2px;\"><a class=\"ez-toc-link ez-toc-heading-20\" href=\"https://reviewvilla.vn/mon-ngon-da-lat/#Sup_cua_-_Mon_ngon_Da_Lat\" title=\"Súp cua – Món ngon Đà Lạt\" style=\"touch-action: manipulation; box-shadow: none; text-shadow: none; color: rgb(23, 107, 150) !important;\">Súp cua – Món ngon Đà Lạt</a></li></ul>', '2021-11-17 00:00:00', 'assets/img/mon-ngon-da-lat-1.jpeg', 'assets/img/banh-uot-long-ga-da-lat-780x405.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(3, 'người dung', 'người dùng'),
(6, 'Tourguider', 'Người hướng dẫn viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `id_place` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_tourguider` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `datego` date NOT NULL,
  `dateback` date NOT NULL,
  `seats` int(11) NOT NULL,
  `vehicel` text NOT NULL,
  `thumbnail` text NOT NULL,
  `gallery` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id_tour`, `id_place`, `id_hotel`, `id_tourguider`, `name`, `datego`, `dateback`, `seats`, `vehicel`, `thumbnail`, `gallery`, `description`, `price`) VALUES
(1, 1, 1, 16, 'Hà nội', '2021-11-06', '2021-11-07', 25, '10', 'assets/img/ho-hoan-kiem.jpeg', '', 'Hà Nội là thủ đô, thành phố trực thuộc trung ương và cũng là một đô thị loại đặc biệt của Việt Nam. Hà Nội nằm về phía tây bắc của trung tâm vùng đồng bằng châu thổ sông Hồng, với địa hình bao gồm vùng đồng bằng trung tâm và vùng đồi núi ở phía bắc và phía tây thành phố. Với diện tích 3.358,6 km2 và dân số 8,05 triệu người (2019), Hà Nội là thành phố có diện tích lớn nhất Việt Nam, đồng thời cũng là thành phố đông dân thứ hai và có mật độ dân số cao thứ hai trong 63 đơn vị hành chính cấp tỉnh của Việt Nam, nhưng phân bố dân số không đồng đều. Hà Nội có 30 đơn vị hành chính cấp huyện, gồm 12 quận, 17 huyện và 1 thị xã.\r\nHà Nội là kinh đô của hầu hết các vương triều phong kiến tại Việt Nam trước đây, do đó, lịch sử Hà Nội gắn liền với sự thăng trầm của lịch sử Việt Nam qua các thời kỳ.[5] Năm 1010, vua Lý Thái Tổ, vị hoàng đế đầu tiên của nhà Lý, quyết định xây dựng kinh đô mới ở vùng đất này với cái tên \"Thăng Long\". Trong suốt thời kỳ của các triều đại Lý, Trần, Lê, Mạc, kinh thành Thăng Long là trung tâm văn hóa, giáo dục và buôn bán của cả nước. Khi Tây Sơn rồi nhà Nguyễn lên nắm quyền trị vì, kinh đô được chuyển về Huế và Thăng Long bắt đầu mang tên Hà Nội từ năm 1831, dưới thời vua Minh Mạng. Năm 1902, Hà Nội trở thành thủ đô của Liên bang Đông Dương và được người Pháp xây dựng, quy hoạch lại, được mệnh danh là \"Tiểu Paris phương Đông\" thời bấy giờ. Trong thời kỳ chiến tranh Việt Nam, Hà Nội là thủ đô của Việt Nam Dân chủ Cộng hòa và sau khi thống nhất tiếp tục là thủ đô của nước Cộng hòa Xã hội chủ nghĩa Việt Nam hiện nay. Đó là thủ đô của Đông Dương thuộc Pháp 1887–1946 và của miền Bắc Việt Nam 1954 – 1976 trước khi thống nhất miền Bắc và miền Nam Việt Nam.\r\n', 5000000),
(7, 1, 1, 16, 'Sài gòn', '2021-11-23', '2021-11-28', 30, 'Tàu hoả', 'assets/img/cho-ben-thanh---bieu-tuong-cua-sai-gon-3.jpeg', '', '', 7800000),
(8, 10, 7, 18, 'Phú Quốc', '2021-12-03', '2021-12-08', 15, 'Máy bay', 'assets/img/1549877055589-1500x1125-FIT_AND_TRIM-d64887b59ca65db37bef37d629e6d80d.jpeg', '', '', 11600000),
(9, 1, 1, 16, 'Đà Lạt', '2021-12-04', '2021-12-08', 17, 'Máy bay', 'assets/img/7-scaled-e1598947981952 (1).jpeg', '', '', 9500000),
(10, 12, 6, 18, 'Nha Trang', '2021-12-11', '2021-12-15', 12, 'Máy bay', 'assets/img/nha trang.jpeg', '', '', 13600000),
(11, 1, 1, 16, 'Hạ Long kỳ quan', '2022-01-23', '2022-01-26', 22, 'Du thuyền', 'assets/img/tải xuống.jpg', 'assets/img/hạ long 2.jpeg', '', 14100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourguider`
--

CREATE TABLE `tourguider` (
  `id_tourguider` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `tell` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tourguider`
--

INSERT INTO `tourguider` (`id_tourguider`, `name`, `dob`, `tell`) VALUES
(16, 'Nguyễn Hữu Đạt', '2000-10-08', '0989926103'),
(17, 'Nguyễn Trọng Quyết', '2000-07-12', '0989277725'),
(18, 'Đinh Văn Vinh', '2000-01-10', '0966655573');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `fullname` varchar(200) NOT NULL,
  `tel` text NOT NULL,
  `idcard` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `id_role`, `fullname`, `tel`, `idcard`, `dob`, `email`, `password`) VALUES
(7, 1, 'Đinh Văn Vinh', '0975594029', '031200008172', '2021-11-06', 'dinhvanvinh1001@gmail.com', '123456789'),
(24, 1, 'Nguyễn Hữu Đạt', '0989926103', '031200008174', '2021-11-12', 'dat@gmail.com', '12345'),
(26, 3, 'Lê Trọng Tấn', '0979555788', '03200007745', '1994-10-13', 'ltt@gmail.com', '12345a'),
(27, 3, 'Phan Văn Trường', '0346672978', '03200122387', '1999-09-15', 'pvt@gmail.com', '1234d'),
(28, 3, 'Trần Mạnh Hùng', '0346551300', '03200970013', '1997-06-13', 'tmh@gmail.com', '1234h');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `users` (`id_users`),
  ADD KEY `tour` (`id_tour`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Chỉ mục cho bảng `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user` (`user`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`),
  ADD KEY `place` (`id_place`),
  ADD KEY `hotel` (`id_hotel`),
  ADD KEY `tourguide` (`id_tourguider`);

--
-- Chỉ mục cho bảng `tourguider`
--
ALTER TABLE `tourguider`
  ADD PRIMARY KEY (`id_tourguider`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`id_role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `place`
--
ALTER TABLE `place`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tourguider`
--
ALTER TABLE `tourguider`
  MODIFY `id_tourguider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id_tour`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`id_place`) REFERENCES `place` (`id_place`),
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `tour_ibfk_3` FOREIGN KEY (`id_tourguider`) REFERENCES `tourguider` (`id_tourguider`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

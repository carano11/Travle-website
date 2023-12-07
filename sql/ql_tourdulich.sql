-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2020 lúc 01:10 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_tourdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PHONENUMBER` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CHILDS_AMOUNT` tinyint(4) NOT NULL,
  `ADULTS_AMOUNT` tinyint(4) NOT NULL,
  `NOTES` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `BIRTHDAY`, `EMAIL`, `CHILDS_AMOUNT`, `ADULTS_AMOUNT`, `NOTES`) VALUES
(1000084, 'Trương Tùng Dương', '42342234235', 'Thanh Hóa', '3123321', '2000-11-13', 'fbey@gmail.com', 0, 0, NULL),
(1000085, 'linh', '044301223423', 'tran dai nghia', '0987665432', '2020-10-08', 'batcan1202@gmail.com', 0, 0, NULL),
(1000086, 'dương thị mỹ duyên', '044301002098', '444 trần đại nghĩa', '0987664553', '2020-11-21', 'myduyen@gmail.com', 0, 0, NULL),
(1000087, 'dương thị mỹ duyên', '044301002099', '444 trần đại nghĩa,hòa quý', '0987664555', '2020-11-07', 'thuylinh@gmail.com', 0, 0, NULL),
(1000089, 'dương thị mỹ duyên', '044301002093', '444 trần đại nghĩa,hòa quý,NGŨ HÀNH SƠN', '0987664552', '2020-12-05', 'thuylih@gmail.com', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `ID` int(10) NOT NULL,
  `PASSWORD` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `GENDER` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`ID`, `PASSWORD`, `GENDER`, `SDT`, `email`) VALUES
(123456610, 'Linh102021', 'Nữ', 987665432, 'YEUDUOI@GMAIL.COM'),
(123456611, 'Linh12345', 'Nữ', 987665432, 'thuylinh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PHONENUMBER` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `POSITION` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `PART_DAY` date NOT NULL,
  `BIRTHDAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`ID`, `NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `POSITION`, `PART_DAY`, `BIRTHDAY`) VALUES
(1001000, 'Thùy Linh', '05665344', 'Thanh Hóa', '0333690617', 'Manager', '2020-06-30', '2020-07-03'),
(1001012, 'Mỹ Duyên', '213214', 'Thanh Oai', '34243', 'Manager', '2020-06-30', '2020-07-03'),
(1001013, 'Đỗ Thị Hoài', '23424', 'Kim Thành', '432432', 'Employee', '2020-06-30', '2020-07-03'),
(1001014, 'Đinh thị thùy linh', '044301002078', 'trần đại nghĩa', '0987668122', 'Employee', '2020-11-20', '1992-11-20'),
(1001015, 'Đinh thị thùy ', '044301002077', 'trần đại nghĩa', '0987668129', 'Employee', '2020-11-20', '1989-11-20');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `fullinfo_employees`
-- (See below for the actual view)
--
CREATE TABLE `fullinfo_employees` (
`ID` int(10)
,`NAME` varchar(50)
,`IDCARD` varchar(12)
,`ADDRESS` varchar(50)
,`PHONENUMBER` varchar(13)
,`POSITION` varchar(20)
,`PART_DAY` date
,`BIRTHDAY` date
,`POWER` varchar(10)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `PASSWORD` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '123456a',
  `POSITION` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID`, `PASSWORD`, `POSITION`) VALUES
(1001000, '111111', 'ADMIN'),
(1001012, '123456a', 'ADMIN'),
(1001013, '123456a', 'USER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `TOUR_ID` int(11) NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `CHILDS_AMOUNT` tinyint(4) NOT NULL,
  `ADULTS_AMOUNT` tinyint(4) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`ID`, `TOUR_ID`, `IDCARD`, `CHILDS_AMOUNT`, `ADULTS_AMOUNT`, `TOTAL`) VALUES
(1, 2000000011, '044301002099', 0, 1, 2390000),
(2, 2000000010, '044301002090', 0, 2, 35980000),
(3, 2000000011, '044301002093', 1, 2, 6770000);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `thongtinchitiettour`
-- (See below for the actual view)
--
CREATE TABLE `thongtinchitiettour` (
`ID` int(10)
,`NAME` varchar(100)
,`KIND_TOUR` varchar(255)
,`MAX_PEOPLE` tinyint(4)
,`IMAGE` varchar(255)
,`START` date
,`END` date
,`HOTEL_NAME` varchar(100)
,`VEHICLE` varchar(30)
,`CHILD_PRICE` float
,`ADULT_PRICE` float
,`TOUR_PROGRAM` text
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `KIND_TOUR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MAX_PEOPLE` tinyint(4) NOT NULL,
  `IMAGE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`ID`, `NAME`, `KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) VALUES
(2000000009, 'Hội An Đà Nẵng', 'Đà Nẵng', 17, 'hoian.jpg'),
(2000000010, 'Chợ Đêm-Đà Nẵng', 'Đà Nẵng', 14, 'chodem.jpg'),
(2000000011, 'Du Lịch Cầu Vàng - Đà Nẵng', 'Đà Nẵng', 10, '1152454088.jpg'),
(2000000012, 'Du lịch Đà Nẵng | Huế | Bà Nà Hills | Hội An 3N2Đ', 'Đà Nẵng', 15, 'hanoi.jpg'),
(2000000013, 'Tour Đà Nẵng Vinpearl', 'Đà Nẵng', 20, 'vinpeal.jpg'),
(2000000014, 'Du lịch Đà Nẵng tết 2021', 'Đà Nẵng', 15, 'tet.jpg'),
(2000000016, 'Cầu rồng - Đà Nẵng', 'Đà Nẵng', 20, 'caurong.jpg'),
(2000000017, 'Cầu Sông Hàn', 'Đà Nẵng', 10, 'causonghan.jpg'),
(2000000018, 'Bán đảo Sơn Trà', 'Đà Nẵng', 20, 'bandaosontra.jpg'),
(2000000020, 'Chùa Cầu-Hội An', 'Đà Nẵng', 12, 'chuacau.jpg'),
(2000000025, 'Aria Park - Son World DA NANG Wonders', 'Đà Nẵng', 20, 'aria.jpg'),
(2000000026, 'Chùa Linh Ứng- Đà Nẵng', 'Đà Nẵng', 20, 'chualinhung.jpg'),
(2000000027, 'Bà Nà Hill - Đà Nẵng', 'Đà Nẵng', 20, 'banahill.jpg'),
(2000000028, 'Núi Thần Tài - Đà Nẵng', 'Đà Nẵng', 20, 'nuithantai.jpg'),
(2000000030, 'Ngũ Hành Sơn - Đà Nẵng', 'Đà Nẵng', 20, 'nuinguhanh.jpg'),
(2000000031, 'Bãi biển Mỹ Khê - Đà Nẵng', 'Đà Nẵng', 20, 'phuquoc.jpg'),
(2000000032, 'Cù Lao Chàm - Đà Nẵng', 'Đà Nẵng', 20, 'culaocham.jpg'),
(2000000033, 'Khu du lịch sinh thái Suối Hoa', 'Đà Nẵng', 20, 'suoihoa.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_details`
--

CREATE TABLE `tour_details` (
  `ID` int(10) NOT NULL,
  `START` date NOT NULL,
  `END` date NOT NULL,
  `HOTEL_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'ĐANG CẬP NHẬT',
  `VEHICLE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CHILD_PRICE` float NOT NULL,
  `ADULT_PRICE` float NOT NULL,
  `TOUR_PROGRAM` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_details`
--

INSERT INTO `tour_details` (`ID`, `START`, `END`, `HOTEL_NAME`, `VEHICLE`, `CHILD_PRICE`, `ADULT_PRICE`, `TOUR_PROGRAM`) VALUES
(2000000009, '2017-01-01', '2017-01-01', 'Home stay Kim  Hoàng', 'bus', 1190000, 1290000, 'Sáng: Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng, đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành du lịch Hà Giang mùa Hè 2019. Trưa: Đoàn dừng chân ở Phú Thọ để dùng cơm trưa. Sau đó, đoàn tiếp tục hành trình tour Hà Giang mùa Hè giá rẻ để đến với mảnh đất Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tối: Dùng cơm tối và nghỉ đêm ở Hà Giang.'),
(2000000010, '2017-01-01', '2017-01-01', '4*- danis Hotel', 'Máy bay', 15990000, 17990000, '05h30: Xe và Hướng dẫn viên (HDV) đón Quý khách tại Nhà hát lớn, Xe khởi hành đi Bắc Kạn. Đoàn ăn sáng tại nhà hàng trên đường đi (Chi phí tự túc). 11h30: Ăn trưa tại nhà hàng ở thị trấn Chợ Rã Ba Bể. Đoàn tiếp tục hành trình đến Hồ Ba Bể. Qua những bản nhà sàn thấp thoáng bên sườn núi khoảng một giờ sau Quý khách có mặt tại bờ Hồ Ba Bể, nhận phòng. Quý khách thư giãn nghỉ ngơi trong không gian yên tĩnh của núi rừng.  Chiều: Xuống thuyền tại bến thuyền, quý khách đi quanh hồ Ba Bể thăm quan Lòng hồ, với các địa danh như: Đảo Bà Góa, Đền An Mã, chèo thuyền Kayaking trên lòng hồ, thuyền ghé thăm bản Pác Ngòi, Động Hua mạ,.. quý khách dạo bộ thăm quan bản với những nếp nhà sàn bên ven bờ hồ Ba Bể đặc trưng cho văn hóa dân tộc Tày sống bên lòng Hồ Ba bể Ăn tối với những món đặc sản núi rừng Ba Bể. Quý khách có thể tham gia giao lưu văn nghệ hát then, sli, lượn cùng đội văn nghệ của bản (Chi phí tự túc). Những bản tình ca mượt mà đằm thắm của cư dân vùng hồ, nhấp chén rượu ngô nho nhỏ trong ánh lửa bập bùng từ nhà sàn chắc hẳn không say cảnh nơi đây cũng say tình người bản xứ. Quý khách sẽ có một đêm ngon giấc và một kỷ niệm khó quên với Hồ Ba Bể.'),
(2000000011, '2019-06-05', '2019-06-07', 'ĐANG CẬP NHẬT', 'Xe du lịch', 1990000, 2390000, 'Quý khách tập trung tại Công ty Vietravel (190 Pasteur, Phường 6, Quận 3, TP.HCM) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến Phan Thiết đoàn tham quan: - Làng Chài Xưa: du khách sẽ được đi xuyên vào không gian tương tác tái hiện Làng Chài Xưa Mũi Né với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, vào xóm lò tĩn, thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị Nhận phòng nghỉ ngơi, tự do tắm biển hồ bơi tại khách sạn/resort, buổi chiều đoàn tham quan: - Đồi Cát Vàng: một trong những khu vực đẹp nhất nằm ở Mũi Né thu hút khá nhiều du khách do hình dáng đẹp của cát và màu sắc của cát, nơi đây được xem là đồi cát có một không hai tại Việt nam bắt nguồn từ mỏ sắt cổ tồn tại hàng trăm năm tạo nên.  Sau khi dùng bữa tối, Quý khách sẽ thưởng thức chương trình biểu diễn nghệ thuật: - Fishermen Show – Huyền Thoại Làng Chài: với không gian nghệ thuật độc đáo về sự giao thoa văn hóa hai dân tộc Kinh và Chăm tại Phan Thiết. Nội dung của chương trình lấy cảm hứng từ làng chài Phan Thiết năm 1762.  Nghỉ đêm tại Mũi Né '),
(2000000012, '2019-05-31', '2019-06-03', 'ĐANG CẬP NHẬT', 'Máy bay', 4390000, 4890000, 'Sáng:  Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng. Đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành đến Hà Giang. Trưa: Dừng chân Phú Thọ, dùng cơm trưa. Đoàn tiếp tục khởi hành đến Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tham quan Làng văn hóa du lịch sinh thái Hạ Thành, được bao quanh bởi những thửa ruộng bậc thang xếp nối nhau. Đến với Hạ Thành là đến với những ngôi nhà sàn truyền thống nguyên sơ, đến với những câu hát lượn, hát cọi, hát then ngọt ngào, những điệu múa dân gian, múa tín ngưỡng, những lễ hội truyền thống huyền bí, tạo cho bạn một cảm giác như trở về nơi cội nguồn của dân tộc. Tối: Dùng cơm tối. Nghỉ đêm Hà Giang.'),
(2000000013, '2019-07-07', '2019-07-10', 'ĐANG CẬP NHẬT', 'Máy bay', 4388000, 4580000, 'Ngày 01: TP. HỒ CHÍ MINH - PHÚ QUỐC (Ăn sáng, trưa, chiều) Đón khách tại văn phòng Saigontourist và đáp chuyến VJ321 lúc 07:05. Tham quan vườn tiêu, lò chế biến rượu Sim rừng Phú Quốc, trung tâm nuôi cấy ngọc trai Phú Quốc, thắng cảnh Dinh Cậu. Nghỉ đêm tại Vinpearl Resort Phú Quốc - khu nghỉ dưỡng 5 sao lớn nhất Phú Quốc. Ngày 02: NGHĨ DƯỠNG & GIẢI TRÍ TẠI VINPEARL RESORT PHÚ QUỐC  (Ăn sáng, trưa, chiều) Nghỉ ngơi tại resort, tắm biển và thư giãn trong hồ bơi lớn nhất Phú Quốc; tận hưởng các tiện ích của khu nghỉ dưỡng: đánh golf, các môn thể thao biển: chèo xuồng kayak, mô tô nước, dù lượn, lặn ngắm san hô…(tự túc chi phí) Nghỉ đêm tại Vinpearl Resort Phú Quốc  Lựa chọn (tự túc chi phí cho mỗi lần tham quan): - Khám phá Khu vui chơi giải trí Vinpearl Land Phú Quốc với các trò chơi trong nhà, trò chơi ngoài trời lần đầu tiên xuất hiện tại Việt Nam: Đĩa quay siêu tốc, Cối xay gió, Đĩa bay…, Lâu đài Cổ tích; Khu công viên nước với các trò chơi mạo hiểm: Boomerang khổng lồ, Đường trượt siêu lòng chảo, Dòng sông lười, lâu đài, bể tạo sóng…; Phim 5D với nhiều kỹ xảo và hiệu ứng hiện đại; Khu Thủy Cung với hàng trăm loài sinh vật biển quý hiếm: chim Cánh cụt,  cá Nemo, cá Napoleon, cá Mập trắng, cua King Crab…Thưởng thức chương trình biểu diễn nhạc nước, biểu diễn cá heo, nàng tiên cá,… - Trải nghiệm Khu Vinpearl Safari: khám phá Vườn Thú Hoang Dã đầu tiên tại Việt Nam cùng hơn 130 loài động vật quý hiếm và các chương trình Biểu diễn động vật, Khám phá và trải nghiệm Vườn thú mở trong rừng tự nhiên, gần gũi và thân thiện với con người'),
(2000000014, '2019-06-01', '2019-06-04', 'Bangquaches Resort', 'Máy bay', 7990000, 8990000, 'Khởi hành từ TpHCM '),
(2000000016, '2019-08-01', '2019-08-06', '5*- Baiyoke Resort', 'Máy bay', 9891000, 10990000, 'Nằm trong khu vực Đông Nam Á, Thái Lan được du khách ưu ái dành tặng cho nhiều mỹ danh như: “Đất Nước Chùa Vàng”, “Thiên Đường Du Lịch”, “Thiên Đường Mua Sắm”, “Xứ Sở Của Những Nụ Cười Thân Thiện”. Th'),
(2000000017, '2019-08-26', '2019-09-01', '3*- Kumlampark Resort', 'Máy bay', 5490000, 6470000, 'Đất nước Malaysia xinh đẹp và quyến rũ được tạo hóa hào phóng ban tặng rất nhiều cảnh quan thiên nhiên đẹp mê lòng người. Không quá ồn ào, náo nhiệt, trời trong mát, những ngày du lịch tại Malaysia sẽ'),
(2000000018, '2019-10-01', '2019-10-07', '4*- Tân Triều Hotel', 'Máy bay', 19990000, 21990000, 'Vạn Lý Trường Thành - một trong những kỳ quan của thế giới, là công trình nhân tạo với mục đích phục vụ cho quân sự có một không hai trên thế giới, Thập Tam Lăng - nơi thờ phụng 13 ngôi mộ Thời nhà Mi'),
(2000000020, '2020-11-20', '2020-11-20', 'ĐANG CẬP NHẬT', 'Xe Taxi', 129000, 250000, 'Nhóm 5 người'),
(2000000025, '2020-11-20', '2020-11-20', 'ĐANG CẬP NHẬT', 'XE MÁY', 200000, 500000, 'ĐI PHƯỢT'),
(2000000026, '2020-12-01', '2020-12-02', 'ĐANG CẬP NHẬT', 'XE MÁY', 200000, 900000, '05h30: Xe và Hướng dẫn viên (HDV) đón Quý khách tại Nhà hát lớn, Xe khởi hành đi Bắc Kạn. Đoàn ăn sáng tại nhà hàng trên đường đi (Chi phí tự túc). 11h30: Ăn trưa tại nhà hàng ở thị trấn Chợ Rã Ba Bể. Đoàn tiếp tục hành trình đến Hồ Ba Bể. Qua những bản nhà sàn thấp thoáng bên sườn núi khoảng một giờ sau Quý khách có mặt tại bờ Hồ Ba Bể, nhận phòng. Quý khách thư giãn nghỉ ngơi trong không gian yên tĩnh của núi rừng.  Chiều: Xuống thuyền tại bến thuyền, quý khách đi quanh hồ Ba Bể thăm quan Lòng hồ, với các địa danh như: Đảo Bà Góa, Đền An Mã, chèo thuyền Kayaking trên lòng hồ, thuyền ghé thăm bản Pác Ngòi, Động Hua mạ,.. quý khách dạo bộ thăm quan bản với những nếp nhà sàn bên ven bờ hồ Ba Bể đặc trưng cho văn hóa dân tộc Tày sống bên lòng Hồ Ba bể Ăn tối với những món đặc sản núi rừng Ba Bể. Quý khách có thể tham gia giao lưu văn nghệ hát then, sli, lượn cùng đội văn nghệ của bản (Chi phí tự túc). Những bản tình ca mượt mà đằm thắm của cư dân vùng hồ, nhấp chén rượu ngô nho nhỏ trong ánh lửa bập bùng từ nhà sàn chắc hẳn không say cảnh nơi đây cũng say tình người bản xứ. Quý khách sẽ có một đêm ngon giấc và một kỷ niệm khó quên với Hồ Ba Bể.'),
(2000000027, '2020-12-17', '2021-01-07', 'ĐANG CẬP NHẬT', 'XE MÁY', 300000, 1000000, 'Sáng: Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng, đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành du lịch Hà Giang mùa Hè 2019. Trưa: Đoàn dừng chân ở Phú Thọ để dùng cơm trưa. Sau đó, đoàn tiếp tục hành trình tour Hà Giang mùa Hè giá rẻ để đến với mảnh đất Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tối: Dùng cơm tối và nghỉ đêm ở Hà Giang.'),
(2000000028, '2020-12-18', '2020-12-19', 'ĐANG CẬP NHẬT', 'Máy Bay', 500000, 1500000, 'Sáng: Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng, đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành du lịch Hà Giang mùa Hè 2019. Trưa: Đoàn dừng chân ở Phú Thọ để dùng cơm trưa. Sau đó, đoàn tiếp tục hành trình tour Hà Giang mùa Hè giá rẻ để đến với mảnh đất Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tối: Dùng cơm tối và nghỉ đêm ở Hà Giang.'),
(2000000030, '2020-12-17', '2020-12-18', 'ĐANG CẬP NHẬT', 'ĐANG CẬP NHẬT', 400000, 700000, '05h30: Xe và Hướng dẫn viên (HDV) đón Quý khách tại Nhà hát lớn, Xe khởi hành đi Bắc Kạn. Đoàn ăn sáng tại nhà hàng trên đường đi (Chi phí tự túc). 11h30: Ăn trưa tại nhà hàng ở thị trấn Chợ Rã Ba Bể. Đoàn tiếp tục hành trình đến Hồ Ba Bể. Qua những bản nhà sàn thấp thoáng bên sườn núi khoảng một giờ sau Quý khách có mặt tại bờ Hồ Ba Bể, nhận phòng. Quý khách thư giãn nghỉ ngơi trong không gian yên tĩnh của núi rừng.  Chiều: Xuống thuyền tại bến thuyền, quý khách đi quanh hồ Ba Bể thăm quan Lòng hồ, với các địa danh như: Đảo Bà Góa, Đền An Mã, chèo thuyền Kayaking trên lòng hồ, thuyền ghé thăm bản Pác Ngòi, Động Hua mạ,.. quý khách dạo bộ thăm quan bản với những nếp nhà sàn bên ven bờ hồ Ba Bể đặc trưng cho văn hóa dân tộc Tày sống bên lòng Hồ Ba bể Ăn tối với những món đặc sản núi rừng Ba Bể. Quý khách có thể tham gia giao lưu văn nghệ hát then, sli, lượn cùng đội văn nghệ của bản (Chi phí tự túc). Những bản tình ca mượt mà đằm thắm của cư dân vùng hồ, nhấp chén rượu ngô nho nhỏ trong ánh lửa bập bùn'),
(2000000031, '2020-12-17', '2020-12-17', 'ĐANG CẬP NHẬT', 'ĐANG CẬP NHẬT', 300000, 450000, 'Sáng: Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng, đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành du lịch Hà Giang mùa Hè 2019. Trưa: Đoàn dừng chân ở Phú Thọ để dùng cơm trưa. Sau đó, đoàn tiếp tục hành trình tour Hà Giang mùa Hè giá rẻ để đến với mảnh đất Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tối: Dùng cơm tối và nghỉ đêm ở Hà Giang.'),
(2000000032, '2020-12-03', '2020-12-10', 'ĐANG CẬP NHẬT', 'ĐANG CẬP NHẬT', 600000, 1780000, '05h30: Xe và Hướng dẫn viên (HDV) đón Quý khách tại Nhà hát lớn, Xe khởi hành đi Bắc Kạn. Đoàn ăn sáng tại nhà hàng trên đường đi (Chi phí tự túc). 11h30: Ăn trưa tại nhà hàng ở thị trấn Chợ Rã Ba Bể. Đoàn tiếp tục hành trình đến Hồ Ba Bể. Qua những bản nhà sàn thấp thoáng bên sườn núi khoảng một giờ sau Quý khách có mặt tại bờ Hồ Ba Bể, nhận phòng. Quý khách thư giãn nghỉ ngơi trong không gian yên tĩnh của núi rừng.  Chiều: Xuống thuyền tại bến thuyền, quý khách đi quanh hồ Ba Bể thăm quan Lòng hồ, với các địa danh như: Đảo Bà Góa, Đền An Mã, chèo thuyền Kayaking trên lòng hồ, thuyền ghé thăm bản Pác Ngòi, Động Hua mạ,.. quý khách dạo bộ thăm quan bản với những nếp nhà sàn bên ven bờ hồ Ba Bể đặc trưng cho văn hóa dân tộc Tày sống bên lòng Hồ Ba bể Ăn tối với những món đặc sản núi rừng Ba Bể. Quý khách có thể tham gia giao lưu văn nghệ hát then, sli, lượn cùng đội văn nghệ của bản (Chi phí tự túc). Những bản tình ca mượt mà đằm thắm của cư dân vùng hồ, nhấp chén rượu ngô nho nhỏ trong ánh lửa bập bùn'),
(2000000033, '2020-12-03', '2020-12-04', 'ĐANG CẬP NHẬT', 'ĐANG CẬP NHẬT', 150000, 350000, 'Sáng: Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng, đại diện công ty Du Lịch Việt đón và hỗ trợ Quý khách làm thủ tục đón chuyến bay đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên đón Quý khách khởi hành du lịch Hà Giang mùa Hè 2019. Trưa: Đoàn dừng chân ở Phú Thọ để dùng cơm trưa. Sau đó, đoàn tiếp tục hành trình tour Hà Giang mùa Hè giá rẻ để đến với mảnh đất Hà Giang – nơi có những con đường đèo, cứ nối nhau quanh co uốn lượn, nơi có những con người dân tộc chân chất, mặc dù cuộc sống nghèo khổ nhưng trên môi luôn nở nụ cười. Tối: Dùng cơm tối và nghỉ đêm ở Hà Giang.');

-- --------------------------------------------------------

--
-- Cấu trúc cho view `fullinfo_employees`
--
DROP TABLE IF EXISTS `fullinfo_employees`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fullinfo_employees`  AS  select `a`.`ID` AS `ID`,`a`.`NAME` AS `NAME`,`a`.`IDCARD` AS `IDCARD`,`a`.`ADDRESS` AS `ADDRESS`,`a`.`PHONENUMBER` AS `PHONENUMBER`,`a`.`POSITION` AS `POSITION`,`a`.`PART_DAY` AS `PART_DAY`,`a`.`BIRTHDAY` AS `BIRTHDAY`,`b`.`POSITION` AS `POWER` from (`employees` `a` join `login` `b`) where `a`.`ID` = `b`.`ID` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `thongtinchitiettour`
--
DROP TABLE IF EXISTS `thongtinchitiettour`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `thongtinchitiettour`  AS  select `tours`.`ID` AS `ID`,`tours`.`NAME` AS `NAME`,`tours`.`KIND_TOUR` AS `KIND_TOUR`,`tours`.`MAX_PEOPLE` AS `MAX_PEOPLE`,`tours`.`IMAGE` AS `IMAGE`,`tour_details`.`START` AS `START`,`tour_details`.`END` AS `END`,`tour_details`.`HOTEL_NAME` AS `HOTEL_NAME`,`tour_details`.`VEHICLE` AS `VEHICLE`,`tour_details`.`CHILD_PRICE` AS `CHILD_PRICE`,`tour_details`.`ADULT_PRICE` AS `ADULT_PRICE`,`tour_details`.`TOUR_PROGRAM` AS `TOUR_PROGRAM` from (`tours` join `tour_details`) where `tours`.`ID` = `tour_details`.`ID` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000090;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456612;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001017;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001014;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000045;

--
-- AUTO_INCREMENT cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000039;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_LOGIN_EMPLOYEE` FOREIGN KEY (`ID`) REFERENCES `employees` (`ID`);

--
-- Các ràng buộc cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD CONSTRAINT `tour_details_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tours` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

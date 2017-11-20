-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 12:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoacntt`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `business` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `info`, `business`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Tiến sĩ Đinh Viết Tuấn', '<ul>\r\n	<li>Năm tốt nghiệp 1995</li>\r\n	<li>Cử Nh&acirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin - Trường Đại Học Mở TP.HCM: .</li>\r\n	<li>Vị tr&iacute; / Nơi c&ocirc;ng t&aacute;c: Giảng vi&ecirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin, Trường Đại Học Đ&agrave; Lạt.</li>\r\n</ul>', 1, 'img/students/iefx_dinh_viet_tuan.jpg', '2017-10-21 23:12:09', '2017-10-21 22:40:01'),
(3, 'Thạc sĩ Lê Thị Minh Châu', '<ul>\r\n	<li>Năm tốt nghiệp 2005</li>\r\n	<li>Cử Nh&acirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin - Trường Đại Học Mở TP.HCM</li>\r\n	<li>Vị tr&iacute; / Nơi c&ocirc;ng t&aacute;c: Giảng vi&ecirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin, Trường Đại Học Sư Phạm Kỹ Thuật</li>\r\n</ul>', 1, 'img/students/dRwQ_le_thi_minh_chau.jpg', '2017-10-22 10:12:11', '2017-10-22 10:12:11'),
(4, 'Tiến sĩ Nguyễn Vạn Phúc', '<ul>\r\n	<li>Năm Tốt nghiệp 2004</li>\r\n	<li>Cử Nh&acirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin - Trường Đại Học Mở TP.HCM</li>\r\n	<li>Vị tr&iacute;/ nơi c&ocirc;ng t&aacute;c: CHFI/Computer Hacking Forensic Investigator/CyberLaw Consultant tại ISRA - Information Security Research Association.</li>\r\n</ul>', 2, 'img/students/7LUK_nguyen_van_phuc.jpg', '2017-10-22 10:14:02', '2017-10-22 10:14:02'),
(5, 'Thạc sĩ Trần Đức Hiếu', '<ul>\r\n	<li>Năm tốt nghiệp 2010</li>\r\n	<li>Cử Nh&acirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin - Trường Đại Học Mở TP.HCM: .</li>\r\n	<li>Vị tr&iacute; / Nơi c&ocirc;ng t&aacute;c: Trưởng ph&ograve;ng Nghi&ecirc;n cứu v&agrave; Ph&aacute;t triển Phần Mềm, Viện Cơ học v&agrave; Tin học ứng dụng, Viện H&agrave;n L&acirc;m Khoa Học v&agrave; C&ocirc;ng Nghệ Việt Nam.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 2, 'img/students/ihsI_tran_duc_hieu.jpg', '2017-10-22 10:15:28', '2017-10-22 10:15:28'),
(6, 'Đinh Hoàng Dâng', '<ul>\r\n	<li>Năm tốt nghiệp 2011</li>\r\n	<li>Cử Nh&acirc;n khoa C&ocirc;ng Nghệ Th&ocirc;ng Tin - Trường Đại Học Mở TP.HCM</li>\r\n	<li>Vị tr&iacute; / Nơi c&ocirc;ng t&aacute;c: Kỹ sư phần mềm cao cấp, Simple Solutions Taipan Vietnam.</li>\r\n</ul>', 0, 'img/students/fBNP_dinh_hoang_dang.jpg', '2017-10-22 10:16:16', '2017-10-22 10:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `competition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `name`, `competition`, `gain`, `year`, `updated_at`, `created_at`) VALUES
(1, '<p>Hồ Tr&iacute; Dũng<br />\r\nƯng Kiến Hữu</p>', 'Tài năng khoa học trẻ Việt Nam - 2016', 'Giải Khuyến Khích', '2016', '2017-10-22 10:17:53', '2017-10-22 10:17:53'),
(2, '<p>L&ecirc; Ho&agrave;ng Chương<br />\r\nTrần Th&agrave;nh Long</p>', 'lập trình ứng dụng đa nền tảng thuộc Trung Tâm Đào tạo Khu Công Nghệ Cao Tp.HCM tháng 04/2015', 'Đạt giải cao nhất', '2015', '2017-10-22 10:18:29', '2017-10-22 10:18:29'),
(3, '<p>Đo&agrave;n Nguyễn Đăng Khoa<br />\r\nTrần Th&agrave;nh Long</p>', '“Tài năng Khoa học trẻ Việt Nam năm 2014”, cấp Bộ, ngày 15/11/2014 tại Hà Nội (giải cao nhất)', 'Giải nhì', '2014', '2017-10-22 10:19:14', '2017-10-22 10:19:14'),
(4, '<p>Chung Vĩnh Khang<br />\r\nNguyễn Duy Phượng</p>', 'Tài năng Khoa học trẻ Việt Nam năm 2014” - cấp Bộ', 'Giải Khuyến Khích', '2013', '2017-10-22 10:19:50', '2017-10-22 10:19:50'),
(5, '<p>L&ecirc; Ho&agrave;ng Chương</p>', 'Olympic Tin học Quốc Gia', 'Giải khuyến khích', '2013', '2017-10-22 10:20:14', '2017-10-22 10:20:14'),
(6, '<p>Đinh Ho&agrave;ng D&acirc;ng<br />\r\nPhạm Minh Tr&iacute;<br />\r\nTrần Hữu T&acirc;m<br />\r\nNguyễn Ngọc M&atilde;n</p>', 'Tài năng Khoa học trẻ Việt Nam năm 2014” - cấp Bộ', 'Giải Ba', '2012', '2017-10-22 10:20:45', '2017-10-22 10:20:45'),
(7, '<p>Chung Vĩnh Khang</p>', 'Olympic Tin học Quốc Gia', 'khuyến khích', '2012', '2017-10-22 10:21:03', '2017-10-22 10:21:03'),
(8, '<p>Nguyễn Văn Trường</p>\r\n\r\n<p>Gi&aacute;o vi&ecirc;n hướng dẫn: TS. L&ecirc; Xu&acirc;n Trường</p>', 'Đạt giải Euréka 2012 (cấp thành phố), đạt giải luận văn xuất sắc cấp thành phố', 'Luận văn xuất xắc', '2012', '2017-10-22 10:21:40', '2017-10-22 10:21:40'),
(9, '<p>Nguyễn Văn Th&acirc;u</p>', 'Olympic Tin học Quốc Gia', 'Giải Ba', '2011', '2017-10-22 10:21:59', '2017-10-22 10:21:59'),
(10, '<p>Chung Vĩnh Khang</p>', 'Olympic Tin học Quốc Gia', 'khuyến khích', '2011', '2017-10-22 10:22:33', '2017-10-22 10:22:33'),
(11, '<p>B&ugrave;i Bảo Anh</p>', 'Olympic Tin học Quốc Gia', 'Giải 3 cá nhân', '2010', '2017-10-22 10:22:51', '2017-10-22 10:22:51'),
(12, '<p>Dương B&iacute;nh Cường</p>', 'Eureka', 'Giải khuyến khích', '2010', '2017-10-22 10:23:09', '2017-10-22 10:23:09'),
(13, '<p>Nguyễn Đ&igrave;nh Kh&ocirc;i Nguy&ecirc;n</p>', 'Olympic Tin học Quốc Gia', 'Giải 3 cá nhân', '2009', '2017-10-22 10:23:31', '2017-10-22 10:23:31'),
(14, '<p>L&ecirc; Ho&agrave;ng Sơn</p>', 'Giải Tiếng anh Tin học', 'Giải nhì', '2009', '2017-10-22 10:24:22', '2017-10-22 10:24:22'),
(15, '<p>Trần Đức Hiếu</p>', 'Olympic Tin học Quốc Gia', 'Giải 2 cá nhân', '2008', '2017-10-22 10:24:42', '2017-10-22 10:24:42'),
(16, '<p>Đinh Đ&ocirc;ng Khoa</p>', 'Olympic Tin học Quốc Gia', 'Giải 3 cá nhân', '2008', '2017-10-22 10:25:02', '2017-10-22 10:25:02'),
(17, '<p>Hồ Long Đỉnh</p>', 'Olympic Tin học Quốc Gia', 'Giải 2&3 cá nhân', '2004', '2017-10-22 10:25:20', '2017-10-22 10:25:20'),
(18, '<p>Nguyễn Ngọc Tuấn</p>', 'Olympic Tin học Quốc Gia', 'Giải khuyến khích', '2003', '2017-10-22 10:26:00', '2017-10-22 10:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `company`, `author`, `year`, `category_id`, `page`, `sumary`, `lang`, `size`, `slug`, `updated_at`, `created_at`) VALUES
(1, 'Nhập môn công nghệ phần mềm', 'img/books/sach1.png', 'NXB Khoa học kỹ thuật', 'aaad', 1222, 1, '100', 'Bài giảng nhập môn công nghệ phần mềm', 'vn', '100', 'bai-giang-nhap-mon-cong-nghe-phan-mem-c-plus-plus', '0', '0'),
(2, 'sach lap trinh c#', 'img/books/sach2.png', 'Hn', 'thuong', 2017, 2, '200', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi expedita quaerat architecto laboriosam doloremque quam quod quo voluptatum ad, ut animi eum impedit deserunt, fugit, dolor sequi sapiente optio non fuga! Molestias soluta distinctio minus? Voluptate repellendus incidunt blanditiis, laudantium nesciunt, eaque vero distinctio rem at illum possimus reprehenderit laboriosam commodi consequatur optio dolorem vel. Aliquid officiis commodi, culpa nostrum asperiores illum iste iusto, voluptatem eaque quo animi. Odit voluptatibus culpa, repellat tenetur molestias ipsa velit voluptatum, iure cum saepe iste voluptas. Sit beatae, reiciendis? Tempore, nulla, officiis. Ratione est amet quia enim voluptate consectetur nesciunt eos quisquam sequi qui.', 'sadsad', '500MB', 'bai-giang-lap-tring-c-sharp', '0', '0'),
(3, 'Lập trình hướng đối tượng', 'img/books/lthdt.png', 'CĐ Công nghiệp Huế', 'Đặng Ngọc Hoàng Thành', 2012, 1, '230', '1 tài liệu gồm 231 trang rất đầy đủ. Tài liệu bắt đầu bằng các kiến thức cơ bản về C++ như biến, kiểu dữ liệu, các cấu trúc đk, lặp, ... Nói chung là đúng nghĩa từ cơ bản đến nâng cao C++ .', 'Tiếng việt', '5 MB', 'bai-giang-lap-trinh-hdt', '0', '0'),
(4, 'Bài giảng lập trình Windows', 'img/books/ltwindow.png', 'ĐẠI HỌC CÔNG NGHIỆP THỰC PHẨM TP.HCM', 'Trần Thanh Phước, Bùi Công Danh', 2013, 3, '144', 'Lập trình Windows là môn học rất quan trọng cho sinh viên đại hoặc, cao đẳng ngành Công nghệ thông tin. Đối với chuyên ngành Công nghệ phần mềm và Hệ thống thông tin thì đây là môn học bắt buộc. Môn học này đóng vai trò quan trọng, làm nền tảng cho sinh viên làm đồ án, thực tập tốt nghiệp cuối khóa.', 'Tiếng việt', '4.5 MB', 'tai-lieu-lap-trinh-window', '0', '0'),
(5, 'Java J2EE Và XML Developement', 'img/books/giaotrinhjava.jpg', 'MANNING', 'KURT A. GABRICK DAVID B. WEISS', 2002, 3, '275', 'J2EE là thuật ngữ viết tắc của Java 2 Platform, Enterprise Edition , đây là một distributed computing framework  của Sun Microsystems.\r\n\r\nJ2EE là một platform để phát triển những ứng dụng distributed . J2EE bao gồm những phần sau (được xem như là J2EE Framwork):\r\n\r\nJ2EE Platform – một platform chuẩn để hosting các ứng dụng J2EE.\r\nReference Implemetation – một application server hỗ trợ chuẩn mới nhất của J2EE, ngoại trừ những tiêu điểm của nó là những đặc tính mới trong phiên bản chuẩn của J2EE, đây chưa phải là 1 sản phẩm hoàn chỉnh.\r\nCompatibility Test Suite – một công cụ để kiểm tra xem một application server có tương thích với chuẩn J2EE hay không. Thiếu cái này thì mỗi nhà cung cấp có thể hiểu và từ đó phát triển chuẩn J2EE theo những hướng khác nhau mà như thế thì làm giảm đi thế mạnh của J2EE platform là “write once, run anywhere”.\r\nApplication Programming Model (APM) Blueprint – một mô hình ứng dụng tham khảo, được cung cấp để minh hoạ cách phát triển ứng dụng dùng J2EE', 'English', '1.1 MB', 'Java-J2EE-Va-XML-Developement', '0', '0'),
(6, 'Java: Hướng dẫn cho người mới học – Lập trình hướng đối tượng', 'img/books/java-hdt.jpg', 'Đại học FPT', 'Herbert Schildt', 2016, 3, '206', 'Cuốn sách Java: Hướng dẫn cho người mới học – Lập trình hướng đối tượng là một trong hai tập sách về Java, với tựa gốc là Java: A Beginer’s Guide.\r\n\r\nHọc những nguyên lý căn bản về lập trình hướng đối tượng trong Java từ chuyên gia nổi tiếng thế giới Herbert Schildt, tác giả của những tựa sách lập trình thuộc hàng bestseller. Java: Hướng dẫn cho người mới học – Lập trình hướng đối tượng là tập đầu tiên của bộ sách gồm 2 tập về lập trình Java ( Lập trình hướng đối tượng và lập trình Java), được Trường Đại học FPT mua bản quyền chuyển ngữ sang tiếng Việt từ nhà xuất bản MCGraw-Hill danh tiếng. Cuốn sách bắt đầu với những kiến thức cơ bản, như hướng dẫn cách biên dịch, các từ khóa, tính năng và những thành phần chính tạo nên ngôn ngữ Java. Sau đó, bạn sẽ được tìm hiểu những nội dung cốt yếu về lập trình hướng đối tượng, được minh họa bằng các chương trình Java ngắn gọn và sinh động. Cuốn sách dùng phương pháp tiếp cận từng bước, phù hợp với những bạn chưa có nhiều kinh nghiệm lập trình. Hãy tìm hiểu về lập trình hướng đối tượng trong Java, một lĩnh vực kiến thức không thể thiếu với các lập trình viên chuyên nghiệp, từ những bài học được xây dựng để phát huy tối đa khả năng tự học ở cuốn sách này.', 'English', 'Bìa cứng', 'java-huong-doi-tuong', '0', '0'),
(7, 'Beginning Java Programming-The Object-Oriented Approach', 'img/books/java-beginning.jpg', 'Wrox', 'Bart Baesens, Aimee Backiel, Seppe vanden Broucke', 2015, 3, '672', 'Beginning Java Programming-The Object-Oriented Approach là tài liệu hữu ích để bắt đầu với một trong những ngôn ngữ lập trình phổ biến nhất thế giới. Trên cơ sở các class được giảng dạy bởi tác giả, cuốn sách bắt đầu với những khái niệm cơ bản và dần dần tiếp cận những khái niệm nâng cao hơn. Phương pháp này sử dụng một môi trường phát triển tích hợp cho phép người đọc ngay lập tức áp dụng những gì họ học và làm theo các bước hướng dẫn với nhiều ví dụ mẫu. Mỗi chương có chứa bài tập dựa vào kịch bản thực tế là "kinh doanh" và "giáo dục".\r\n\r\nBeginning Java Programming-The Object-Oriented Approach cung cấp các thông tin và các công cụ mà người mới cần có để phát triển các kỹ năng Java, từ các khái niệm chung của lập trình hướng đối tượng.', 'English', '69 MB', 'Beginning-Java-Programming-The-Object-Oriented-Approach', '0', '0'),
(8, 'SQL- Hệ quản trị CSDL', 'img/books/sql-csdl.jpg', 'Minh Khai Books', 'None', 2015, 3, '200', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'Tiếng việt', '30.8 MB', 'tai-lieu-sql', '0', '0'),
(9, 'Head First SQL', 'img/books/sql-headfirst.jpg', 'Nhà xuất bản sài gòn ', 'Head First SQL', 2011, 3, '196', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'English', '35.9 MB', 'Head-First-SQL', '0', '0'),
(10, 'SQl Server Cơ bản', 'img/books/sql-beginning.jpg', 'Đại học FPT', 'Đại học FPT', 2015, 3, '200', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'Tiếng việt', '100 MB', 'sql-co-ban', '0', '0'),
(11, 'WEB DEVELOPER - Thiết kế web theo chuẩn', 'img/books/sach5.jpg', 'abc', 'ac', 2012, 7, '11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'tiếng việt', '196 MB', 'web-developer-thiet-ke-web-theo-chuan', '0', '0'),
(12, 'Thiết kế web với CSS', 'img/books/sach3.png', 'abc', 'adsa', 2016, 7, '123', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'Tiếng Việt', '800 MB', 'thiet-ke-web-voi-css', '0', '0'),
(13, 'Giáo trình IOS', 'img/books/ios-t3h.jpg', 'Trung tâm tin học đại học Khoa học tự nhiên.', 'Trung tâm tin học đại học Khoa học tự nhiên.', 2015, 8, '100', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'English', '30 MB', 'giao-trinh-ios', '0', '0'),
(14, 'android - head first', 'img/books/android-headfirst.jpg', 'VietKey', 'Jame', 2000, 8, '520', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'English', '125 MB', 'giao-trinh-adnroid-head-first', '0', '0'),
(15, 'Android Beginning', 'img/books/android-beginning.jpg', 'Android Beginning', 'Android Beginning', 2005, 8, '200', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem temporibus officia perferendis blanditiis, quas, praesentium officiis vero ut mollitia voluptas commodi iusto quo quae fugit aliquam molestias quia voluptatem qui libero nulla non sunt. Unde maxime, corporis sed optio quia ipsa iste labore enim consequuntur hic. Excepturi, ad, illo.', 'English', '16 MB', 'Android-Beginning', '0', '0'),
(16, 'Bài giảng Tiếng Anh chuyên ngành CNTT', 'img/books/englishchuyennganh.png', 'Học viện bưu chính viễn thông', 'Học viện bưu chính viễn thông', 2016, 9, '150', 'Học viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thôngHọc viện bưu chính viễn thông', 'Tiếng việt', '30', 'bai-giang-tieng-anh-chuyen-nganh', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `updated_at`, `created_at`) VALUES
(1, 'Sách lập trình c++', 'c-plus-plus', '', ''),
(2, 'sach lap trinh c#', 'C-sharp', '', ''),
(3, 'Lập trình ứng dụng', 'lap-trinh-win-form', '', ''),
(4, 'Java', 'lap-trinh-java', '', ''),
(5, 'WPF', 'lap-trinh-wpf', '', ''),
(6, 'SQL', 'lap-trinh-sql', '', ''),
(7, 'Lập trình web', 'lap-trinh-web', '', ''),
(8, 'Lập trình di động', 'lap-trinh-di-dong', '', ''),
(9, 'Tiếng anh chuyên ngành', 'tieng-anh-chuyen-nganh', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `content`, `news_id`, `updated_at`, `created_at`) VALUES
(1, 1, 'ada', '10', '2017-10-10 21:42:11', '2017-10-10 21:42:11'),
(2, 1, 'Thay đổi lịch gặp giáo viên hướng dẫn thực tập tốt rồi kìa mấy tình yêu <3', '9', '2017-10-10 21:42:52', '2017-10-10 21:42:52'),
(4, 1, 'Tuần sinh hoạt công dân sinh viên năm học 2017 – 2018 hấp dẫn ghê', '11', '2017-10-10 21:43:52', '2017-10-10 21:43:52'),
(105, 2, 'chắc là hấp dẫn ==))', '11', '2017-10-11 15:33:05', '2017-10-11 15:33:05'),
(109, 4, 'hấp dẫn ghê', '11', '2017-10-11 15:38:05', '2017-10-11 15:38:05'),
(110, 4, 'Hội thảo chia sẻ kinh nghiệm thực tế quá trình hình thành, phát triển... của dự án hỗ trợ thông tin.', '7', '2017-10-11 15:38:49', '2017-10-11 15:38:49'),
(111, 1, 'Tuyển sinh cao học chuyên ngành khoa học Máy tính', '8', '2017-10-11 16:14:42', '2017-10-11 16:14:42'),
(116, 2, 'hay quá', '12', '2017-10-16 11:04:04', '2017-10-16 11:04:04'),
(118, 1, 'hoành tráng qá ou ! <3', '12', '2017-10-16 11:07:33', '2017-10-16 11:07:33'),
(131, 5, 'admin nè', '12', '2017-10-16 11:21:23', '2017-10-16 11:21:23'),
(140, 1, 'có open day nữa mà ta???/', '12', '2017-10-16 11:48:45', '2017-10-16 11:48:45'),
(141, 4, 'Năm học 2017 – 2018, Trường tiếp tục phát huy các thành quả từ kết quả thực hiện đổi mới và thí điểm tự chủ, nhằm tăng cường các giá trị hữu ích cho người học, nâng cao chất lượng đào tạo và tiếp tục tạo dựng cơ hội học tập cho mọi người với sứ mạng góp phần thúc đẩy xã hội học tập phát triển.', '12', '2017-10-16 14:21:15', '2017-10-16 14:21:15'),
(148, 1, '55555', '12', '2017-10-20 14:05:22', '2017-10-20 14:05:22'),
(149, 1, 'Nghe có vẽ hay quá', '14', '2017-10-20 14:07:22', '2017-10-20 14:07:22'),
(150, 2, 'Theo Gartner, Cách mạng Công nghiệp 4.0 (hay Cách mạng Công nghiệp lần thứ Tư) xuất phát từ khái niệm "Industrie 4.0" trong một báo cáo của chính phủ Đức năm 2013. "Industrie 4.0" kết nối các hệ thống nhúng và cơ sở sản xuất thông minh để tạo ra sự hội tụ kỹ thuật số giữa Công nghiệp, Kinh doanh, chức năng và quy trình bên trong.', '14', '2017-10-21 15:57:38', '2017-10-21 15:57:38'),
(151, 5, 'aa', '14', '2017-10-21 17:20:53', '2017-10-21 17:20:53'),
(152, 1, 'Giải pháp thông minh cho cách mạng công nghiệp 4.0 của Viettel', '13', '2017-10-22 15:34:27', '2017-10-22 15:34:27'),
(153, 4, 'rất bổ ích', '14', '2017-10-22 17:57:00', '2017-10-22 17:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mssv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mssv`, `email`, `phone`, `content`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Văn Thương', '1451010189', 'doanvanthuong196@gmail.com', '01627022246', 'Cho em hỏi lịch thi học kì này,lớp DH14TH02\r\ncảm ơn', 'avc', '2017-10-18 16:50:12', '0'),
(2, 'Võ quỳnh thủy', '1456010121', 'quynhthuyheocon@gmail.com', '01687931973', 'ali baba', NULL, '2017-10-18 22:46:15', '0'),
(3, '123', '123', '13123', '12312312', '3123123', 'admin_asset/upload/contact/news/7gcT_logo3.jpg', '2017-10-18 22:49:18', '0'),
(4, '132', '23123', '131231', '123123123', '12312312312 12 312 321 312 312 3 13', 'admin_asset/upload/contact/news/WPWU_lichhoc.png', '2017-10-19 22:17:48', '0'),
(5, '123', '12313', '3123', '1231', '1qwe', 'admin_asset/upload/contact/news/hL2R_quick notes.txt', '2017-10-19 22:22:19', '0'),
(6, '2313', '12312', '123', '2313', '123', 'admin_asset/upload/contact/file/mXAe_Git_base.txt', '2017-10-19 22:28:53', '0'),
(7, '1231', '31', '13131', '2313', '2313123', ' ', '2017-10-21 16:17:46', '0'),
(8, 'aabb', '1123', 'ava', 'asdsd', 'adasd', ' ', '2017-10-21 17:12:49', '2017-10-21 17:12:49'),
(9, 'nguyễn văn quân', '1451010100001', 'ad@gmail.com', '098xx', '123123', 'admin_asset/upload/contact/file/YFot_HƯỚNG DẪN SỬ DỤNG TRELLO QUẢN LÝ CÔNG VIỆC TẠI HSPH.pdf', '2017-10-21 17:13:54', '2017-10-21 17:13:54'),
(10, '123', '123', '12', '123', 'aaaaaaa', ' ', '2017-10-22 13:07:35', '2017-10-22 13:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `company`, `type`, `year`, `startdate`, `enddate`, `tag`, `image`, `address`, `salary`, `content`, `slug`, `updated_at`, `created_at`) VALUES
(1, 'iOS Developer', 'Gameloft', 'Full Time', '2017', '2017-10-20', '2017-11-25', 'IOS, Lập trình IOS, Swift', 'img/logo/logo8.png', 'TpHCM', '300000$', '<h2>Top 3 Reasons To Join Us</h2>\r\n\r\n<ul>\r\n	<li>We are startup with open-mind and open culture</li>\r\n	<li>Go global with Google and Facebook Technology</li>\r\n	<li>Challenge with high performance for millions user</li>\r\n</ul>\r\n\r\n<h2>The Job</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You will be responsible for designing, coding and modifying websites, from UI layout into working websites (both frontend and backend) according to specifications:</p>\r\n\r\n<ul>\r\n	<li>Write well designed, efficient code by using best software development practices</li>\r\n	<li>Integrate data from various back-end services and databases</li>\r\n	<li>Gather and refine specifications and requirements based on technical needs</li>\r\n	<li>Create and maintain software documentation</li>\r\n	<li>Be responsible for maintaining internal websites and taking the lead of website projects</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Your Skills and Experience</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Must have:</strong></p>\r\n\r\n<ul>\r\n	<li>Information Technology or Computer Science background at a bachelor</li>\r\n	<li>Have solid knowledge about OOP</li>\r\n	<li><strong>1+ year(s) of experience working with Web Development</strong></li>\r\n	<li>Solid Experience with HTML5, JavaScript, CSS 3.0</li>\r\n	<li>Experience with Web API, databases</li>\r\n	<li>Team player who is passionate about developing award-winning work using latest progressive frameworks</li>\r\n</ul>\r\n\r\n<p><strong>Nice to have:</strong></p>\r\n\r\n<ul>\r\n	<li>Good at English speaking and writing</li>\r\n	<li>Good sense of teamwork, high responsibility</li>\r\n	<li>Strong logical thinking, proactive and open-minded for learning attitude</li>\r\n</ul>', 'ios-developer', '2017-10-20 13:48:45', '0'),
(2, 'Network and System Admin', 'FPT', 'Part time', '2017', '2017-10-13', '2018-10-20', 'Admininstrator , System Admin', 'img/logo/logo10.png', 'sài gòn', 'Thương lượng', '<p><strong>Lien hệ&nbsp;</strong></p>', 'network-and-system-admin', '2017-10-13 12:02:35', '0'),
(3, 'Front-end Dev (JavaScript, AngularJS)', 'FINVIET', 'Full time', '2017', '2017-10-14', '2017-12-31', 'JavaScript ,AngularJS ,FrontEnd', 'img/logo/vuI8_finviet-logo-170-151.png', 'Ho Chi Minh , District 10, Thành Thái', 'Thương lượng', '<div class="job_description" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<div class="title-apply-line" style="box-sizing: border-box;">\r\n<h2>The Job</h2>\r\n\r\n<div class="clearfix" style="box-sizing: border-box;">&nbsp;</div>\r\n</div>\r\n\r\n<div class="description" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Implement MIS /Portal designs using HTML5, CSS3, Bootstrap, AngularJS</li>\r\n	<li>Ajax and RestFull API, Websocket ...</li>\r\n	<li>Work with NoSQL and Oracle databases</li>\r\n	<li>Test ours applications&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="skills_experience" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<h2>Your Skills and Experience</h2>\r\n\r\n<div class="experience" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p><strong>Technical</strong></p>\r\n\r\n<ul>\r\n	<li>AngularJS / Javascript, Ajax, Websocket</li>\r\n	<li>HTML5, CSS3, Bootstrap</li>\r\n	<li>Responsive Design</li>\r\n	<li>SVN</li>\r\n</ul>\r\n</div>\r\n</div>', 'front-end-dev-javascript-angularjs', '2017-10-14 18:27:54', '2017-10-14 18:27:54'),
(4, 'Senior Software Tester', 'soXes GmbH', 'Full time', '2017', '2017-10-18', '2017-12-31', 'Tester', 'img/logo/myA7_soxes-gmbh-logo-170-151.jpg', 'Ho Chi Minh , District 1, Nguyen Thi Minh Khai', 'Thương lượng', '<div class="job_reason_to_join_us" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<h2>Top 3 Reasons To Join Us</h2>\r\n\r\n<div class="top-3-reasons" style="box-sizing: border-box; line-height: 1.7em;">\r\n<ul>\r\n	<li>Good chance for personal development and promotion</li>\r\n	<li>Good salary and many benefits</li>\r\n	<li>Comfortable working enviroment with dynamic teams</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class="job_description" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<div class="title-apply-line" style="box-sizing: border-box;">\r\n<h2>The Job</h2>\r\n\r\n<div class="clearfix" style="box-sizing: border-box;">&nbsp;</div>\r\n</div>\r\n\r\n<div class="description" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>JOB DESCRIPTION:</strong></p>\r\n\r\n<p>Sr. Software Test Engineer is power person who has responsible for working on both, Project Manager and Development Team, testing the developer’s work before it gets released, detecting bugs, communicating findings and advocating for problem to be fixed or cleared.</p>\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Design and creation of the test specifications to make sure quality for projects like: make requirement clear with PM, contribute for project, discuss with Developer how to handle Spec and checklist what Developer can help to check quality….</li>\r\n	<li>Active implementation of all needed tests such as: test plan, test cases, test script, report…</li>\r\n	<li>Coordination on high level with PM, Product Owner or Leader to define how to make project committed quality before releasing.</li>\r\n	<li>Responsible for the reporting of test result during the projects, write releasing note, update Specification if required,</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n\r\n<div class="skills_experience" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<h2>Your Skills and Experience</h2>\r\n\r\n<div class="experience" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>3-4 years experiences on testing for Automation test</li>\r\n	<li>Good communications and ability to explain about Business.</li>\r\n	<li>Experience using Jira, Confluences, Jenkin, SVN, Git.</li>\r\n	<li>Basic knowledge on programming like Java…</li>\r\n	<li>Proactive</li>\r\n	<li>Has problem solving skill and negotiation as well</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n\r\n<div class="love_working_here" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<h2>Why You''ll Love Working Here</h2>\r\n\r\n<div class="culture_description" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Work on international friendly environment</li>\r\n	<li>Improve yourself by working with international partners and clients</li>\r\n	<li>Work on open-environment for ideas, contribution, creative….</li>\r\n	<li>Good salary, good benefit for your efforts</li>\r\n	<li>Health care insurance</li>\r\n</ul>\r\n</div>\r\n</div>', 'senior-software-tester', '2017-10-18 11:56:36', '2017-10-18 11:56:36'),
(5, 'Quản trị cơ sở dữ liệu (MySQL)', 'Giao Hàng Tiết Kiệm', 'Full time', '2017', '2017-10-18', '2017-11-18', 'MySq', 'img/logo/EXR2_logo4.jpg', 'Ha Noi , Nam Tu Liem, K2', '750 – 1300$', '<div class="job_description" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<div class="title-apply-line" style="box-sizing: border-box;">\r\n<h2>The Job</h2>\r\n</div>\r\n\r\n<div class="description" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>– Quản lý hệ thống cơ sở dữ liệu của Giaohangtietkiem.vn;<br />\r\n– Chuẩn hóa và tối ưu cơ sở dữ liệu cho phù hợp với hạ tầng vật lý có sẵn;<br />\r\n– Thiết kế các giải pháp theo dõi, kiểm tra performance, backup và hệ thống dự phòng;<br />\r\n– Thiết kế và tư vấn các giải pháp dữ liệu phù hợp theo yêu cầu của dự án và đội ngũ phát triển sản phẩm;<br />\r\n– Thời gian làm việc: 09h00 – 18h00, Thứ 2 – Thứ 6;<br />\r\n<strong><span style="color:rgb(51, 51, 51)">Your Skills and Experience</span></strong><br />\r\n– Có ít nhất 3 năm kinh nghiệm quản trị cơ sở dữ liệu liên quan đến MySQL;<br />\r\n– Có kinh nghiệm quản trị các hệ thống cơ sở dữ liệu NoSQL;<br />\r\n– Tinh thần trách nhiệm cao với công việc;<br />\r\n– Đã làm việc với các hệ thống lớn nhiều người dùng là lợi thế;</p>\r\n</div>\r\n</div>\r\n\r\n<div class="skills_experience" style="box-sizing: border-box; padding: 20px 0px 10px; font-family: Roboto, sans-serif; font-size: 16px;">\r\n<div class="experience" style="box-sizing: border-box; color: rgb(58, 58, 58); line-height: 1.7em; width: 507.188px;">\r\n<p>– Có các chứng chỉ về quản trị MySQL là lợi thế;<br />\r\n<span style="color:rgb(51, 51, 51)">Why You''ll Love Working Here</span><br />\r\n– Lương thỏa thuận theo năng lực: 750 – 1300$;<br />\r\n– Môi trường làm việc năng động với cơ hội tạo dựng sự nghiệp bền vững, lâu dài;<br />\r\n– Được cung cấp đầy đủ phương tiện làm việc theo yêu cầu của tính chất công việc;<br />\r\n– Liên tục được đào tạo về kiến thức, kỹ năng liên quan đến các lĩnh vực hoạt động của Công ty;<br />\r\n– Có cơ hội để phát huy tối đa năng lực của bản thân;<br />\r\n– Đánh giá tăng lương theo năng lực định kỳ;<br />\r\n– Hưởng đầy đủ các chế độ theo quy định của Công ty và pháp luật hiện hành.</p>\r\n</div>\r\n</div>', 'quan-tri-co-so-du-lieu-mysql', '2017-10-18 15:11:54', '2017-10-18 15:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_25_100800_create_books_table', 1),
(4, '2017_09_25_112000_create_news_table', 2),
(5, '2017_09_25_112300_create_teachers_table', 3),
(6, '2017_25_09_115000_create_students_table', 4),
(7, '2017_25_09_1400_create_jobs_table', 5),
(8, '2017_09_25_115000_create_students_table', 6),
(9, '2017_09_25_1400_create_jobs_table', 7),
(11, '2017_09_25_140500_create_comments_table', 8),
(13, '2017_09_27_154500_update_news_table', 10),
(14, '2017_10_02_153000_update_books_table', 11),
(15, '2017_02_10_154000_update_books_table', 12),
(16, '2017_10_05_093000_update_students_table', 13),
(17, '2014_02_09_225721_create_visitor_registry', 14),
(18, '2017_10_7_170500_update_students_table', 15),
(19, '2017_10_08_140500_update_comments_table', 16),
(20, '2017_10_02_154000_update_books_table', 17),
(21, '2017_10_10_133600_update_newscategory_table', 18),
(22, '2017_10_10_094000_update_comments_table', 19),
(25, '2017_10_11_163350_drop_news-category_table', 22),
(27, '2017_10_11_163818_update_newscategory_table', 24),
(28, '2017_10_12_203500_update_news_table', 25),
(29, '2017_10_12_203700_update_news_table', 26),
(30, '2017_10_13_095521_UpdateTeacherTable', 27),
(31, '2017_10_13_103551_UpdateSachTable', 28),
(32, '2017_10_13_114403_UpdateJobTable', 29),
(33, '2017_10_13_141758_UpdateUserTable', 30),
(34, '2017_10_16_145200_UpdateStudentTable', 31),
(35, '2017_09_25_141000_create_categories_table', 32),
(36, '2017_09_27_150000_create_news-category_table', 32),
(37, '2017_10_16_154215_CreateLoaiSachTable', 33),
(38, '2017_10_16_155048_CreateSinhVienTable', 34),
(39, '2017_10_16_155702_UpdateStudents', 35),
(40, '2017_10_18_155157_CreateContactTable', 36),
(42, '2017_10_18_165337_UpdateContactTable', 37),
(43, '2017_10_21_170424_Award', 37),
(45, '2017_10_21_220955_CreateAward', 38),
(46, '2017_10_21_221225_AlumniTable', 39),
(47, '2017_10_22_103811_CreateSlideTable', 40),
(48, '2017_10_22_163806_UpdateSlideTable', 41);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `image`, `author`, `sumary`, `content`, `slug`, `news_category_id`, `updated_at`, `created_at`) VALUES
(2, 'Đón nhận Quyết định Chứng nhận đạt chuẩn chất lượng giáo dục từ bộ giáo dục', 'img/img-donnhanquyetdinh.png', 'Thương', '<p>Sáng ngày 18/9/2017, Trường Đại học Mở Tp. Hồ Chí Minh đã đón nhận Quyết định Chứng</p>', '<p>Sáng ngày 18/9/2017, Trường Đại học Mở Tp. Hồ Chí Minh đã đón nhận Quyết định Chứng nhận đạt chuẩn chất lượng giáo dục do Bộ trưởng Bộ Giáo dục và Đào tạo ban hành. Đến tham dự buổi trao Quyết định có PGS. TS. Mai Văn Trinh – Cục trưởng cục quản lý chất lượng giáo dục, Ông Phạm Thiên Kha – Phó Bí thư Đảng ủy khối các trường Đại học, Cao Đẳng Tp. Hồ Chí Minh, PGS. TS. Nguyễn Hội Nghĩa – Giám đốc Trung tâm kiểm định chất lượng giáo dục Đại học Quốc gia Thành phố Hồ Chí Minh, Ông Lã Hoài Tuấn – Chánh văn phòng Trung tâm Kiểm định, PGS. TS. Đoàn Thanh Hà – Phó Hiệu trưởng Trường ĐH Ngân Hàng, TS. Trần Khánh Lâm – Tổng thư ký Trưởng văn phòng Tp. HCM, Hội kiểm toán viên hành nghề Việt Nam, Đại diện Ban chấp hành Công Đoàn trường, Ban thường vụ Đoàn trường, Ban thư ký Hội sinh viên trường và đại diện viên chức, học viên, sinh viên trường. Trường cũng đã nhận được Hoa chúc mừng của các đơn vị: Bộ giáo dục và Đào tạo, Công Đoàn giáo dục Việt Nam, Đảng ủy khối các trường Đại học và Cao đẳng, Cục quản lý chất lượng giáo dục, Đại học Luật Tp. Hồ Chí Minh, Đại học Sài Gòn, Đại học Nông Lâm Tp. Hồ CHí Minh, Đại học Tài Chính Marketing…</p>', 'don-nhan-quyet-dinh-chung-nhan-dat-chuan-chat-luong-giao-duc-tu-bo-giao-duc', 3, '2017-10-13 19:28:32', '0'),
(5, 'Lịch thi học kỳ 2 năm học 2016-2017 – Hệ đại học chính quy', 'img/news/Gucp_lichthi-hechinhquy.jpg', 'abc', '<p>Phòng Quản lý đào tạo thông báo lịch thi học kỳ 2 năm học 2016-2017, Hệ đại học chính quy</p>', '<p>Phòng Quản lý đào tạo thông báo lịch thi học kỳ 2 năm học 2016-2017, Hệ đại học chính quy</p>', 'lich-thi-hoc-ky-2-nam-hoc-2016-2017-he-dai-hoc-chinh-quy', 1, '2017-10-16 10:41:21', '0'),
(6, 'Lịch thi học kỳ 2 năm học 2016-2017 – Hệ văn bằng 2 và hoàn chỉnh kiến thức', 'img/lichthi.jpg', 'asdasd', 'Phòng Quản lý đào tạo thông báo lịch thi học kỳ 2 năm học 2016-2017, Hệ văn bằng 2 và hoàn chỉnh kiến thức', 'Phòng Quản lý đào tạo thông báo lịch thi học kỳ 2 năm học 2016-2017, Hệ văn bằng 2 và hoàn chỉnh kiến thức', 'lich-thi-hoc-ky-2-he-van-bang-2', 1, '0', '0'),
(7, 'Hội thảo chia sẻ kinh nghiệm thực tế quá trình hình thành, phát triển... của dự án hỗ trợ thông tin.', 'img/img-hoithao1.jpg', 'VanThuong', 'Ngày 18/07 vừa qua, tại cơ sở 371 Nguyễn Kiệm,  khoa Công nghệ thông tin trường Đại học Mở Thành phố Hồ Chí Minh...', 'Ngày 18/07 vừa qua, tại cơ sở 371 Nguyễn Kiệm,  khoa Công nghệ thông tin trường Đại học Mở Thành phố Hồ Chí Minh đã tổ chức buổi hội thảo “Chia sẻ kinh nghiệm thực tế quá trình hình thành, phát triển, chuyển giao, vận hành của dự án HTTT” để sinh viên có thêm những hiểu biết thực tế về quá trình hình thành của một HTTT.', 'hoi-thao-chia-se-kinh-nghiem-thuc-te-qua-trinh-hinh-thanh-phat-trien-chuyen-giao-van-hanh-cua-du-an-ho-tro-thong-tin', 2, '0', '0'),
(8, 'Tuyển sinh cao học chuyên ngành khoa học Máy tính', 'img/tsch2017.jpg', 'Van thuong', 'Khoa Công nghệ Thông tin trường Đại học Mở Tp.HCM thông báo tuyển sinh Cao học chuyên ngành khoa học Máy tính cho năm học 2017-2018', 'Khoa Công nghệ Thông tin trường Đại học Mở Tp.HCM thông báo tuyển sinh Cao học chuyên ngành khoa học Máy tính cho năm học 2017-2018', 'thong-bao-tuyen-sinh-cao-hoc-nam-2017', 4, '0', '0'),
(9, 'Thay đổi lịch gặp giáo viên hướng dẫn thực tập tốt nghiệp học kỳ 1 năm học 2017-2018', 'img/img-thuctap.png', 'Van Thuong', 'Thay đổi lịch gặp giáo viên hướng dẫn thực tập tốt nghiệp học kỳ 1 năm học 2017-2018', 'Thay đổi lịch gặp giáo viên hướng dẫn thực tập tốt nghiệp học kỳ 1 năm học 2017-2018', 'thay-doi-lich-gap-giao-vien-huong-dan-thuc-tap-tot-nghiep-hoc-ky-1-nam-hoc-2017-2018', 4, '0', '0'),
(10, 'Tài liệu học tập HK1 năm học 2017-2018', 'img/slider/slidersach1.jpg', 'Van Thuong', 'Tài liệu học tập HK1 năm học 2017-2018 Khoa CNTT', 'Tài liệu học tập HK1 năm học 2017-2018', 'tai-lieu-hoc-tap-hk1-nam-hoc-2017-2018', 4, '0', '0'),
(11, 'Tuần sinh hoạt công dân sinh viên năm học 2017 – 2018', 'img/img-shcd.jpg', 'Van Thương', 'Tuần sinh hoạt công dân dành cho tân sinh viên, là cơ hội để các bạn tìm hiểu, tiếp cận với trường mới, lớp mới, thầy cô, bạn bè mới', '<p><em>Tuần sinh hoạt công dân dành cho tân sinh viên, là cơ hội để các bạn tìm hiểu, tiếp cận với trường mới, lớp mới, thầy cô, bạn bè mới. Các buổi sinh hoạt  được phân bổ thành nhiều buổi, mỗi Khoa có một ngày sinh hoạt,  đang diễn ra từ  ngày 07/09/2017 đến ngày 23/09/2017.</em></p>\r\n\r\n<img src="http://localhost:8000/img/img-shcd.jpg" class="img-responsive"/>\r\n\r\n<p>\r\nBuổi sinh hoạt được chia sẻ bởi các thầy cô là Ban Giám hiệu nhà trường, giới thiệu những thông tin tổng quát và cơ bản về trường. Nội dung sinh hoạt giúp các bạn hiểu rõ quyền lợi, nghĩa vụ, ý thức trách nhiệm của công dân – sinh viên.  Thông qua việc tuyên truyền, phổ biến pháp luật, các quy chế, quy định về đào tạo của Nhà trường cùng với lãnh đạo Khoa sẽ làm quen và giới thiệu sơ bộ với các bạn về ngành học mà các bạn sẽ theo đuổi. Phương pháp học mới ở bậc đại học cũng sẽ được thầy cô trình bày cụ thể, giúp các bạn bớt đi những bỡ ngỡ, lo lắng trong những bước đầu tiên lên giảng đường. Lãnh đạo Trung tâm Quản lý hệ thống thông tin và Phòng Công tác sinh viên cũng có những chia sẻ về các trang web của trường cho các bạn tìm kiếm thông tin dễ dàng cùng tư vấn hỗ trợ các hoạt động  dành cho sinh viên về quy chế công tác sinh viên. Đồng thời trạm Y tế cũng hướng dẫn theo dõi công tác y tế học đường, bảo hiểm cho sinh viên.\r\n</p>\r\n<p>Tuần sinh hoạt công dân cũng nhằm nâng cao nhận thức của sinh viên về đường lối, chủ trương của Đảng, chính sách, pháp luật của Nhà nước, giúp các bạn hiểu rõ và vận dụng các quy chế, quy định đào tạo, rèn luyện của Bộ Giáo dục – Đào tạo và Nhà trường,  trang bị đầy đủ, kịp thời một số thông tin cơ bản và cần thiết về tình hình kinh tế, chính trị, xã hội trong nước và quốc tế.</p>\r\n<p>Tuần sinh hoạt công dân sinh viên đầu năm thực sự bổ ích và có ý nghĩa khi các bạn sinh viên được trang bị các nội dung, kiến thức, thông tin mới của đầu năm học 2017 – 2018, được trực tiếp đối thoại với lãnh đạo Nhà trường và các thầy cô trong Khoa để chia sẻ những vấn đề quan tâm trong công tác của Nhà trường cùng các vấn đề liên quan đến học tập và các hoạt động sinh viên (Đoàn, Hội Sinh viên, ngoại khóa…)</p>\r\n', 'tuan-sinh-hoat-cong-dan-sinh-vien-nam-hoc-2017-2018', 2, '', '13-10-2017'),
(12, 'Lễ khai giảng năm học 2017 – 2018 và Ngày hội truyền thống The Open Day 2017', 'img/news/sZfK_KG2017-13.jpg', 'Nguyen Van A', '<p><span style="color:rgb(0, 0, 0); font-family:arial; font-size:14px">Ngày 11.10.2017 vừa qua, Trường Đại học Mở Thành phố Hồ Chí Minh đã long trọng tổ chức buổi lễ khai giảng năm học 2017-2018 tại Nhà thi đấu Quân Khu 7&nbsp;</span></p>', '<p>Ngày 11.10.2017 vừa qua, Trường Đại học Mở Thành phố Hồ Chí Minh đã long trọng tổ chức buổi lễ khai giảng năm học 2017-2018 tại Nhà thi đấu Quân Khu 7 với sự tham dự của các vị đại biểu, các vị khách quý cùng hơn 5000 sinh viên của trường.</p>\r\n\r\n<p>Năm 2017 là một năm đánh dấu nhiều cột mốc đáng nhớ của nhà trường. Ngày 16.9.2017, Trường được Ban Quản lý Khu công nghệ cao Thành phố Hồ Chí Minh trao giấy chứng nhận đầu tư cho dự án: “Trung tâm nghiên cứu phát triển giáo dục công nghệ cao”. Đặc biệt, ngày 18.9.2017, Trường được Trung tâm Kiểm định chất lượng giáo dục – Đại học Quốc gia Thành phố Hồ Chí Minh trao Chứng nhận đạt chuẩn chất lượng giáo dục do Bộ trưởng Bộ Giáo dục và Đào tạo ban hành,…</p>\r\n\r\n<p>Trong năm học 2017-2018 này, nhà trường đã tuyển sinh hơn 3300 sinh viên học tập tại 11 khoa cùng với nhiều ngành đào tạo. Trong quá trình dạy và học, nhà trường luôn quan tâm và thường xuyên cải tiến, trang bị cơ sở vật chất, đẩy mạnh công tác nghiên cứu khoa học của giảng viên và sinh viên, tạo cơ hội cho sinh viên giao lưu và tham gia các hoạt động ngoại khóa, công tác xã hội.</p>\r\n\r\n<p><img alt="KG2017 (3)" class="aligncenter size-full wp-image-5578" src="http://ou.edu.vn/wp-content/uploads/2017/10/KG2017-3.jpg" style="border:0px; box-sizing:border-box; display:block; font-family:inherit; font-style:inherit; font-weight:inherit; height:auto; margin:15px auto 5px; max-width:100%; outline:0px; padding:0px; vertical-align:baseline; width:800px" /></p>\r\n\r\n<p>Phát biểu tại lễ khai giảng, PGS. TS. Vũ Hữu Đức – Hiệu phó, Phụ trách Trường đã gửi lời chúc mừng tới các bạn Tân sinh viên, đồng thời, cũng gửi lời nhắn nhủ tới các bạn, phải tiếp tục cố gắng không ngừng, để có thể duy trì và phát huy các giá trị của nhà trường song song đó, nhà trường cũng sẽ hỗ trợ các bạn hết mình trong suốt quá trình các bạn theo học tại Trường Đại học Mở thành phố Hồ Chí Minh.</p>\r\n\r\n<p>Cũng tại buổi lễ khai giảng Nhà trường đã đón nhận học bổng trao tặng của các đơn vị doanh nghiệp dành cho sinh viên trường cụ thể:</p>\r\n\r\n<p>Ngân hàng TMCP Nam Á: 50.000.000 đ</p>\r\n\r\n<p>Ngân hàng TMCP Sài Gòn Thương Tín (Sacombank): 45.000.000đ</p>\r\n\r\n<p>Ngân hàng TMCP Công Thương Việt Nam (Viettinbank): 20.000.000 đ</p>\r\n\r\n<p>Ngân hàng NNPTNT Việt Nam (Agribank) – Chi nhánh TT Sài Gòn: 20.000.000 đ</p>\r\n\r\n<p>Ngân hàng NNPTNT Việt Nam (Agribank) – Chí nhánh Nam Hoa: 15.000.000 đ</p>\r\n\r\n<p>Ngân hàng TMCP Tiên Phong (TP Bank): 15.000.000 đ</p>\r\n\r\n<p>Viettel Quận 3: 10.000.000 đ</p>\r\n\r\n<p>Meed Maritime Bank: 10.000.000 đ</p>\r\n\r\n<p>Ngân hàng TMCP Bưu điện Liên Việt – Chi nhánh Chợ Lớn – PGD Bình Tây: 10.000.000 đ.</p>\r\n\r\n<p>Trong năm học 2016 – 2017 qua, ngoài việc thực hiện các chính sách cho sinh viên, Quỹ hỗ trợ sinh viên đã thực hiện tốt việc chăm lo cho 1.379 lượt sinh viên với tổng kinh phí học bổng và khen thưởng gần 4.000.000.000 đồng. Bên cạnh đó, nhằm khuyến khích học tập cho sinh viên trong năm học 2016 – 2017 Trường cũng đã trao tặng gần 6.000.000.000 đồng học bổng khuyến khích học tập cho hơn 2.500 sinh viên học tập tốt.</p>\r\n\r\n<p>Năm học 2017 – 2018, Trường tiếp tục phát huy các thành quả từ kết quả thực hiện đổi mới và thí điểm tự chủ, nhằm tăng cường các giá trị hữu ích cho người học, nâng cao chất lượng đào tạo và tiếp tục tạo dựng cơ hội học tập cho mọi người với sứ mạng góp phần thúc đẩy xã hội học tập phát triển.</p>', 'le-khai-giang-nam-hoc-2017-2018-va-ngay-hoi-truyen-thong-the-open-day-2017', 2, '2017-10-16 10:50:12', '2017-10-16 10:50:12'),
(13, 'Giải pháp thông minh cho cách mạng công nghiệp 4.0 của Viettel', 'img/news/3rLu_viettel2.jpg', 'Văn thương', '<p>Kỷ niệm 13 năm tham gia thị trường viễn th&ocirc;ng di động, Viettel tổ chức triển l&atilde;m trưng b&agrave;y c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ...</p>', ' Kỷ niệm 13 năm tham gia thị trường viễn thông di động, Viettel tổ chức triển lãm trưng bày các giải pháp công nghệ do hãng tự nghiên cứu phát triển, hướng tới cuộc cách mạng 4.0.\r\n\r\nTriển lãm với chủ đề “Viettel với cuộc cách mạng công nghiệp 4.0” khai mạc ngày 14/10 tại TP.HCM là một trong những hoạt động chào mừng kỷ niệm 13 năm ngày Viettel chính thức kinh doanh dịch vụ di động (15/10/2004- 15/10/2017).\r\n\r\nTriển lãm là nơi phô diễn các sản phẩm, giải pháp công nghệ thông tin, viễn thông do Viettel nghiên cứu, phát triển và đang ứng dụng trong mọi lĩnh vực của đời sống, từ quản lý nhà nước, nâng cao hiệu quả hoạt động của doanh nghiệp cho tới các tiện ích cho người dùng. Đáng chú ý nhất là trạm thu phát sóng 4G (eNodeB) do kỹ sư Viettel nghiên cứu, thiết kế và sản xuất, được xem là một thành tựu lớn, mang đến sự tự chủ về thiết bị, hạ tầng viễn thông 4G cho hãng viễn thông quân đội.\r\n\r\nSau 13 năm chính thức kinh doanh dịch vụ di động, Viettel hiện có gần 70 triệu thuê bao, là nhà mạng chiếm thị phần lớn nhất Việt Nam. Ngoài ra, họ cũng đang đầu tư kinh doanh tại 10 quốc gia khác trên thế giới.', 'giai-phap-thong-minh-cho-cach-mang-cong-nghiep-40-cua-viettel', 5, '2017-10-20 10:00:23', '2017-10-20 10:00:23'),
(14, 'Cách mạng Công nghiệp 4.0 là gì?', 'img/news/4aW2_53234f2b4c42c82cc67b67808b62ae77.jpg', 'Văn thương', '<p>Trong những ng&agrave;y qua, kh&aacute;i niệm &quot;C&aacute;ch mạng C&ocirc;ng nghiệp 4.0&quot; được nhắc đến nhiều tr&ecirc;n truyền th&ocirc;ng v&agrave; mạng x&atilde; hội...</p>', '<p>&quot;C&aacute;ch mạng C&ocirc;ng nghiệp 4.0&quot; đang diễn ra tại nhiều nước ph&aacute;t triển. N&oacute; mang đến cho nh&acirc;n loại cơ hội để thay đổi bộ mặt c&aacute;c nền kinh tế, nhưng tiềm ẩn nhiều rủi ro kh&ocirc;n lường.</p>\r\n\r\n<p>Trong những ng&agrave;y qua, kh&aacute;i niệm &quot;C&aacute;ch mạng C&ocirc;ng nghiệp 4.0&quot; được nhắc đến nhiều tr&ecirc;n truyền th&ocirc;ng v&agrave; mạng x&atilde; hội. C&ugrave;ng với đ&oacute; l&agrave; những hứa hẹn về cuộc &quot;đổi đời&quot; của c&aacute;c doanh nghiệp tại Việt Nam nếu đ&oacute;n được l&agrave;n s&oacute;ng n&agrave;y. Vậy cuộc c&aacute;ch mạng n&agrave;y n&ecirc;n được hiểu như thế n&agrave;o?&nbsp;</p>\r\n\r\n<h3>Định nghĩa về C&aacute;ch mạng C&ocirc;ng nghiệp 4.0</h3>\r\n\r\n<p>Theo&nbsp;<em>Gartner</em>, C&aacute;ch mạng C&ocirc;ng nghiệp 4.0 (hay C&aacute;ch mạng C&ocirc;ng nghiệp lần thứ Tư) xuất ph&aacute;t từ kh&aacute;i niệm &quot;Industrie 4.0&quot; trong một b&aacute;o c&aacute;o của ch&iacute;nh phủ Đức năm 2013. &quot;Industrie 4.0&quot; kết nối c&aacute;c hệ thống nh&uacute;ng v&agrave; cơ sở sản xuất th&ocirc;ng minh để tạo ra sự hội tụ kỹ thuật số giữa C&ocirc;ng nghiệp, Kinh doanh, chức năng v&agrave; quy tr&igrave;nh b&ecirc;n trong.</p>\r\n\r\n<p>Nếu định nghĩa từ&nbsp;<em>Gartner&nbsp;</em>c&ograve;n kh&oacute; hiểu, Klaus Schwab, người s&aacute;ng lập v&agrave; chủ tịch điều h&agrave;nh Diễn đ&agrave;n Kinh tế Thế Giới mang đến c&aacute;i nh&igrave;n đơn giản hơn về C&aacute;ch mạng C&ocirc;ng nghiệp 4.0 như sau:</p>\r\n\r\n<p>&quot;C&aacute;ch mạng c&ocirc;ng nghiệp đầu ti&ecirc;n sử dụng năng lượng nước v&agrave; hơi nước để cơ giới h&oacute;a sản xuất. Cuộc c&aacute;ch mạng lần 2 diễn ra nhờ ứng dụng điện năng để sản xuất h&agrave;ng loạt. Cuộc c&aacute;ch mạng lần 3 sử dụng điện tử v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin để tự động h&oacute;a sản xuất. B&acirc;y giờ, cuộc C&aacute;ch mạng C&ocirc;ng nghiệp Thứ tư đang nảy nở từ cuộc c&aacute;ch mạng lần ba, n&oacute; kết hợp c&aacute;c c&ocirc;ng nghệ lại với nhau, l&agrave;m mờ ranh giới giữa vật l&yacute;, kỹ thuật số v&agrave; sinh học&quot;.</p>\r\n\r\n<p><img alt="cong nghiep 4.0" src="/ckfinder/userfiles/images/cach_mang_40.jpg" style="height:474px; width:1024px" /></p>', 'cach-mang-cong-nghiep-40-la-gi', 5, '2017-10-20 10:14:40', '2017-10-20 10:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `slug`, `updated_at`, `created_at`) VALUES
(1, 'lịch thi', 'lich-thi', '', ''),
(2, 'hoạt động sinh viên', 'hoat-dong-sinh-vien', '', ''),
(3, 'tin tức tổng hợp', 'tin-tuc-tong-hop', '', ''),
(4, 'thông tin đào tạo', 'thong-tin-dao-tao', '', ''),
(5, 'Khoa học & Công nghệ', 'khoa-hoc-cong-nghe', '2017-10-20 09:53:20', '2017-10-20 09:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `type`, `image`, `updated_at`, `created_at`, `text`) VALUES
(2, 1, 'img/students/VGFo_slider4.4.jpg', '2017-10-22 16:48:06', '2017-10-22 11:15:49', 'khoa cntt trong quá khứ'),
(3, 1, 'img/students/I1xM_slider4.jpg', '2017-10-22 11:15:57', '2017-10-22 11:15:57', '0'),
(5, 1, 'img/students/HqFO_slider1.jpg', '2017-10-22 11:17:24', '2017-10-22 11:17:24', '0'),
(8, 1, 'img/slider/TGjw_slider2.jpg', '2017-10-22 16:04:29', '2017-10-22 16:04:29', '0'),
(10, 2, 'img/slider/ii35_slider1.jpg', '2017-10-22 16:08:00', '2017-10-22 16:08:00', '0'),
(11, 2, 'img/slider/dIxz_1-18.jpg', '2017-10-22 16:08:07', '2017-10-22 16:08:07', '0'),
(12, 2, 'img/slider/Jv6f_slider2.jpg', '2017-10-22 16:08:16', '2017-10-22 16:08:16', '0'),
(13, 2, 'img/slider/DvPd_slider3.jpg', '2017-10-22 16:36:16', '2017-10-22 16:36:16', '0'),
(14, 3, 'img/slider/Rw0i_logo-lk5.png', '2017-10-22 16:49:03', '2017-10-22 16:40:48', 'Khoa luật'),
(15, 3, 'img/slider/KzXP_logo-lk4.png', '2017-10-22 16:53:38', '2017-10-22 16:53:38', 'Khoa kế toán kiểm toán'),
(16, 3, 'img/slider/s5cu_logo-lk3.png', '2017-10-22 16:54:14', '2017-10-22 16:54:14', 'khoa đào tạo đặc biệt'),
(17, 3, 'img/slider/orUR_logo-lk1.png', '2017-10-22 16:54:31', '2017-10-22 16:54:31', 'khoa tài chính ngân hàng'),
(18, 3, 'img/slider/tjBz_logo-lk2.png', '2017-10-22 16:54:50', '2017-10-22 16:54:50', 'Khoa đào tạo sau đại học'),
(19, 3, 'img/slider/ip4z_logo-lk4.png', '2017-10-22 16:55:22', '2017-10-22 16:55:22', 'Khoa ngoại ngữ'),
(20, 3, 'img/slider/KCnX_logo-lk3.png', '2017-10-22 16:56:09', '2017-10-22 16:56:09', 'Khoa quản trị kinh doanh'),
(21, 4, 'img/slider/4n2J_logo8.png', '2017-10-22 16:58:54', '2017-10-22 16:58:54', 'gameloft'),
(22, 4, 'img/slider/LlOq_logo9.jpg', '2017-10-22 16:59:07', '2017-10-22 16:59:07', 'IMB'),
(23, 4, 'img/slider/iRNq_logo10.png', '2017-10-22 16:59:18', '2017-10-22 16:59:18', 'FPT'),
(24, 4, 'img/slider/SB1A_logo7.png', '2017-10-22 16:59:38', '2017-10-22 16:59:38', 'Larion'),
(25, 4, 'img/slider/zExX_myA7_soxes-gmbh-logo-170-151.jpg', '2017-10-22 16:59:57', '2017-10-22 16:59:57', 'soses'),
(26, 4, 'img/slider/QiH8_fn5J_finviet-logo-170-151.png', '2017-10-22 17:00:09', '2017-10-22 17:00:09', 'Finviet');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `sex`, `birth`, `class`, `year`, `study`, `type`, `phone`, `email`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1351010001, 'Tạ minh cát', 'Nam', '1995-10-18', 'DH13TH02', '2013', 'KHMT', 'chính quy', '01212121220', 'abc@gmail.com', 2, '', '2017-10-18 10:30:57', 'img/students/CL1E_user1.jpg'),
(1451010123, 'Nguyễn Thi B', 'Nữ', '', '', '', '', '', '', '', NULL, '', '', 'img/3.png'),
(1451010124, 'Nguyễn Thị D', '1', '1996-01-01', 'DH14TH03', '2015', 'KHMT', 'chính quy', '0989898888', 'd@gmail.com', NULL, '2017-10-17 16:37:49', '2017-10-17 16:37:49', 'img/students/X5zn_4.png'),
(1451010132, 'Nguyễn hoàng phúc', 'Nam', '', '', '', '', '', '', '', 3, '', '', 'img/2.png'),
(1451010189, 'Đoàn Văn Thương', 'Nam', '1996-05-04', 'DH14TH02', '2014', 'Khoa Học Máy Tính', 'Đại học chính quy', '01627022246', 'doanvanthuong196@gmail.com', 1, '', '2017-10-18 10:15:51', 'img/user1.jpg'),
(1456010121, 'Võ Quỳnh Thủy', 'Nữ', '06/11/1996', 'DH14TH02', '2014', '', '', '', '', 4, '', '', 'img/3.png'),
(1456010122, 'Administrator', 'Nam', '', '', '', '', '', '', '', 5, '', '', 'img/admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `image`, `alias`, `degree`, `subject`, `email`, `updated_at`, `created_at`) VALUES
(1, 'Lê xuân trường', 'img/teacher/le-xuan-truong.jpg', 'Trưởng khoa', 'Tiến sĩ', 'chủ tịch hội đồng khoa học khoa', 'truong.lx@ou.edu.vn', '0', '0'),
(2, 'Đào Thế Long', 'img/teacher/dao-the-long.jpg', 'Giảng viên', 'Tiến sĩ', 'An toàn bảo mật thông tin, Công nghệ mã nguồn mở.', 'longdao1950@yahoo.com', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mssv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mssv`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Đoàn Văn Thương', '1451010189', '$2y$10$CjtkmXWL.qwK4iGctizLLOxR4yz22eOgYRtOcsr2bgSGKZK67ZYTi', 'egD1Y7ki6nzm0CWtUkEzn1AxgpvONoUc08DNu8W8x9FvMv5dNLpRBGVgr2js', '2017-10-04 17:00:00', '2017-10-22 08:37:31', 0),
(2, 'Tạ minh cát', '1351010001', '$2y$10$n7UWIklJ7hU2RuILn08BDebrdS9lguqa7eo2gAcgeRsqw6Gc7vHO2', 'e2n3g4Z7dlZy7KMAbBA29gZySoVpu2klBpHPH5emyaJgkJEQOWMG1ZVDSbft', '2017-10-04 17:00:00', '2017-10-07 10:00:34', 0),
(3, 'Nguyễn hoàng phúc', '1451010132', '$2y$10$Tq.1ALZUiIK7F0K46EhLI.7BzGfAa2om00fn7OG3AyLY8WAfgr2ce', 'FzwtHLAiuF52Eap70nouTG5q4pC5COFTBoqe4qpKrK2GtsiD9QSGnQ1ZRZAv', NULL, NULL, 0),
(4, 'Võ quỳnh thủy', '1456010121', '$2y$10$Jt9B58Duanih.SC0IaS6xO1PbiEe5DHOZ4FItmPjuZ1YEMy1/QN22', 'ArbEhO3Fhi0UCLlg8jjsyI4TlbW6txfbuu8q9j5ODKfHEx5wERrgl5RF9fNi', NULL, NULL, 0),
(5, 'admin', '145999', '$2y$10$LYImMMe.YBeT.5yegjAq5O42/0/LLUgnS1J6xuP6ng5BrsM6SVXCC', '5L49SlAf3TSJqTvmM63jaAo22MV6926xFFkUaTGf0l7w04Dh8ceFwKn7Pe5U', NULL, '2017-10-21 09:15:44', 1),
(7, 'nguyễn admin', '1111', '$2y$10$NiQX9qYrB8l1VEUzYQ7yOeXL.bcqH/M6DGSd28P5gzWahFtQnmnUa', NULL, '2017-10-13 08:58:18', '2017-10-13 08:58:18', 1),
(8, 'Nguyễn văn a', '1451010000', '$2y$10$TY5ZOkH5sVVpUDvTkgqqfOuv5utqT62H/yHVJcoVU0F4fCPAUYSXy', 'PCMrADieQhRXIkHrXCejEGoibmMZiVvcrofiKad1n33wePoiZeyp68BIYliP', '2017-10-13 09:01:58', '2017-10-21 09:38:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_registry`
--

CREATE TABLE `visitor_registry` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicks` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_registry`
--

INSERT INTO `visitor_registry` (`id`, `ip`, `country`, `clicks`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', NULL, 22, '2017-10-05 00:39:56', '2017-10-05 00:39:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1456010123;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

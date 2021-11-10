-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2021 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_slide`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) NOT NULL,
  `attrName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `attrName`, `data`) VALUES
(1, 'slides', '[{\"title\":\"COMBO M\\u00f9a \\u0110\\u00f4ng 2022\",\"des\":\"M\\u00f9a \\u0111\\u00f4ng \\u0111ang \\u0111\\u1ebfn d\\u1ea7n \\u0111\\u00e2y l\\u00e0 c\\u01a1 h\\u1ed9i \\u0111\\u1ec3 b\\u1ea1n c\\u00f3 \\u0111\\u01b0\\u1ee3c tr\\u1ea3i nghi\\u1ec7m t\\u1ed1t nh\\u1ea5t v\\u1edbi ch\\u00fang t\\u00f4i\",\"btn_link\":\"https:\\/\\/www.youtube.com\\/watch?v=2pXPMh7dUj4\",\"btn_text\":\"Watch Now\",\"image_slide\":\"slide banner sport shoes web viet.jpg\"},{\"title\":\"Xin Ch\\u00e0oa\",\"des\":\"THE DEVOLUTION OF THE WEST CAN BE SEEN THROUGH POPULAR SPORTS\",\"btn_link\":\"https:\\/\\/www.returnofkings.com\\/195747\\/the-devolution-of-the-west-can-be-seen-through-popular-sports\",\"btn_text\":\"Click View\",\"image_slide\":\"download.jpg\"},{\"title\":\"S\\u1ea3n ph\\u1ea9m gi\\u00e0y 2021\",\"des\":\"trung qu\\u1ed1c c\\u01b0\\u1eddng qu\\u1ed1c d\\u1ea7u\",\"btn_link\":\"https:\\/\\/www.youtube.com\\/watch?v=2pXPMh7dUj4\",\"btn_text\":\"V\\u1ec9ew\",\"image_slide\":\"banner 1.png\"}]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

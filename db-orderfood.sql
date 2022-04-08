-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2022 lúc 04:42 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db-orderfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerID_PK` int(11) NOT NULL,
  `CustomerFirstName` text DEFAULT NULL,
  `CustomerLastName` text DEFAULT NULL,
  `CustomerAddress` text DEFAULT NULL,
  `CustomerPhoneContact` text DEFAULT NULL,
  `CustomerGender` text DEFAULT NULL,
  `CustomerDateOfBirth` date DEFAULT NULL,
  `CustomerEmail` text DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerID_PK`, `CustomerFirstName`, `CustomerLastName`, `CustomerAddress`, `CustomerPhoneContact`, `CustomerGender`, `CustomerDateOfBirth`, `CustomerEmail`, `updated_at`, `created_at`) VALUES
(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '0000-00-00', 'guenvesley@gmail.com', NULL, NULL),
(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '0000-00-00', 'tanthanh28082000@gmail.com', NULL, NULL),
(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '0000-00-00', 'gauvu107@gmail.com', NULL, NULL),
(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '0000-00-00', 'vihai147896345@gmail.com', NULL, NULL),
(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '0000-00-00', 'huynh123a2001a@gmail.com', NULL, NULL),
(6, 'lalalala', 'Lê', '125 ABC, Quận 2, Tp HCM', '0123454359', 'Nữ', '0000-00-00', 'lalala@gmail.com', NULL, NULL),
(7, 'Thiên Kim', 'Võ', '125 ABC, Quận 1, Tp HCM', '0123454360', 'Nữ', '0000-00-00', 'lelelel@gmail.com', NULL, NULL),
(8, 'Ô Long', 'Trần', '126 ABC, Quận 2, Tp HCM', '0123454361', 'Nam', '0000-00-00', 'lololo@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `CustomerID` bigint(20) UNSIGNED NOT NULL,
  `CustomerFirstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerLastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerPhoneContact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerGender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerDateOfBirth` date NOT NULL,
  `CustomerEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliveries`
--

CREATE TABLE `deliveries` (
  `DeliveryCode` bigint(20) UNSIGNED NOT NULL,
  `AddressDelivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `StatusGetOrder` tinyint(4) NOT NULL,
  `StatusDelivery` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryCode_PK` int(11) NOT NULL,
  `AddressDelivery` text DEFAULT NULL,
  `UserID_PFK` int(11) DEFAULT NULL,
  `StatusGetOrder` tinyint(1) DEFAULT NULL,
  `StatusDelivery` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drinks`
--

CREATE TABLE `drinks` (
  `DrinkCode_PK` int(11) NOT NULL,
  `DrinkName` text DEFAULT NULL,
  `DrinkPrice` double DEFAULT NULL,
  `DrinkSize` text DEFAULT NULL,
  `DrinkCategoryCode_PFK` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `DrinkCoverPhoto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `drinks`
--

INSERT INTO `drinks` (`DrinkCode_PK`, `DrinkName`, `DrinkPrice`, `DrinkSize`, `DrinkCategoryCode_PFK`, `Status`, `DrinkCoverPhoto`) VALUES
(1, 'Cocacola', 15000, 'lon', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg'),
(2, 'Sting', 17000, '1 lít', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg'),
(3, 'Sting', 15000, '500ml', 1, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg'),
(4, '7 Up', 17000, 'Lớn', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg'),
(5, 'Red Bull', 20000, 'Lon', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg'),
(6, 'StrongBow', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg'),
(7, 'Bia', 17500, 'lon', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg'),
(8, 'Nước uống nhiệt đới siêu special', 50000, 'ly 700ml', 3, 'Hết mùa', 'https://i.imgur.com/8kw8Llr.jpeg'),
(9, 'Nước uống nhiệt đới siêu special', 27000, 'ly 400ml', 3, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg'),
(10, 'Rượu Soju', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drink_categories`
--

CREATE TABLE `drink_categories` (
  `DrinkCategoryCode_PK` int(11) NOT NULL,
  `DrinkCategoryName` text DEFAULT NULL,
  `Note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `drink_categories`
--

INSERT INTO `drink_categories` (`DrinkCategoryCode_PK`, `DrinkCategoryName`, `Note`) VALUES
(1, 'Nước ngọt', NULL),
(2, 'Thức uống có cồn', '18+'),
(3, 'Special', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `FoodCode_PK` int(11) NOT NULL,
  `FoodName` text DEFAULT NULL,
  `FoodPrice` double DEFAULT NULL,
  `FoodCategoryCode_PFK` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `FoodCoverPhoto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`FoodCode_PK`, `FoodName`, `FoodPrice`, `FoodCategoryCode_PFK`, `Status`, `FoodCoverPhoto`) VALUES
(1, 'Mỳ Ý', 55000, 5, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg'),
(2, 'Gà chiên nước mắm', 35000, 2, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg'),
(3, 'Gà cháy tỏi', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg'),
(4, 'Beefsteak', 70000, 3, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg'),
(5, 'BurgurKing', 55000, 4, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg'),
(6, 'BigSpecial Combo', 150000, 6, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg'),
(7, 'Combo1', 100000, 6, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg'),
(8, 'Combo2', 120000, 6, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg'),
(9, 'Combo3', 130000, 6, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg'),
(10, 'Gà sốt me cay', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg'),
(11, 'Khoai tây chiên', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg'),
(12, 'Khoai tây nghiền', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food_categories`
--

CREATE TABLE `food_categories` (
  `FoodCategoryCode_PK` int(11) NOT NULL,
  `FoodCategoryName` text DEFAULT NULL,
  `Note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `food_categories`
--

INSERT INTO `food_categories` (`FoodCategoryCode_PK`, `FoodCategoryName`, `Note`) VALUES
(1, 'Thức ăn nhẹ', NULL),
(2, 'Gà', NULL),
(3, 'Bò', NULL),
(4, 'Burgur', NULL),
(5, 'Pasta', NULL),
(6, 'Special', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(137, '2014_10_12_000000_create_user_table', 1),
(138, '2014_10_12_100000_create_password_resets_table', 1),
(139, '2019_08_19_000000_create_failed_jobs_table', 1),
(140, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(141, '2022_04_04_071030_create_customers_table', 1),
(142, '2022_04_04_071049_create_deliveries_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderbill`
--

CREATE TABLE `orderbill` (
  `OrderCode_PK` int(11) NOT NULL,
  `Discount` text DEFAULT NULL,
  `SumBill` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderbill`
--

INSERT INTO `orderbill` (`OrderCode_PK`, `Discount`, `SumBill`) VALUES
(1, '0%', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `OrderDetailsCode_PK` int(11) NOT NULL,
  `OrderCode_PFK` int(11) NOT NULL,
  `ServicesCode_FK` int(11) DEFAULT NULL,
  `FoodCode_FK` int(11) DEFAULT NULL,
  `DrinkCode_FK` int(11) DEFAULT NULL,
  `DeliveryCode_FK` int(11) DEFAULT NULL,
  `UserID_FK` int(11) DEFAULT NULL,
  `PaymentCode_FK` int(11) DEFAULT NULL,
  `CheckStatus` int(11) DEFAULT NULL,
  `DatetimeReport` datetime DEFAULT NULL,
  `Note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `PaymentCode_PK` int(11) NOT NULL,
  `PaymentMethod` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`PaymentCode_PK`, `PaymentMethod`) VALUES
(1, 'Momo'),
(2, 'Paypal'),
(3, 'ZaloPay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `PermissionID_PK` int(11) NOT NULL,
  `PermissionDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`PermissionID_PK`, `PermissionDescription`) VALUES
(1, 'Admin'),
(2, 'Nhân viên'),
(3, 'Giao hàng'),
(4, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `ServiceCode_PK` int(11) NOT NULL,
  `Note` text DEFAULT NULL,
  `Fee` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`ServiceCode_PK`, `Note`, `Fee`) VALUES
(1, 'Khăn lạnh', 2000),
(2, 'Ly đá', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `StaffID_PK` int(11) NOT NULL,
  `StaffFirstName` text DEFAULT NULL,
  `StaffLastName` text DEFAULT NULL,
  `StaffAddress` text DEFAULT NULL,
  `StaffPhoneContact` text DEFAULT NULL,
  `StaffGender` text DEFAULT NULL,
  `StaffDateOfBirth` text DEFAULT NULL,
  `NationIdentityNumber_UNIQUE` text DEFAULT NULL,
  `StaffEmail` text DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`StaffID_PK`, `StaffFirstName`, `StaffLastName`, `StaffAddress`, `StaffPhoneContact`, `StaffGender`, `StaffDateOfBirth`, `NationIdentityNumber_UNIQUE`, `StaffEmail`, `updated_at`, `created_at`) VALUES
(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '01/01/1999', '12345656', 'guenvesley@gmail.com', NULL, NULL),
(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '01/02/2000', '12345657', 'tanthanh28082000@gmail.com', NULL, NULL),
(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '01/02/2000', '12345658', 'gauvu107@gmail.com', NULL, NULL),
(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '01/02/2000', '12345659', 'vihai147896345@gmail.com', NULL, NULL),
(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '01/02/2000', '12345660', 'huynh123a2001a@gmail.com', NULL, NULL),
(6, 'Lalala', 'Nguyễn', '123 lololo, Quận 1, Tp HCM', '0123456767', 'Nữ', '01/02/2001', '12345444', 'yolo@gmail.com', NULL, NULL),
(7, 'Lololo', 'Lê', '124 lelele, Quận 1, Tp HCM', '0123456768', 'Nam', '01/02/2002', '12345228', 'yola@gmail.com', NULL, NULL),
(8, 'Lelele', 'Trần', '125 lalala, Quận 1, Tp HCM', '0123456769', 'Nữ', '01/02/2003', '12345012', 'yole@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID_PK` int(11) NOT NULL,
  `Username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `PermissionID_PFK` int(11) NOT NULL,
  `CustomerID_FK` int(11) DEFAULT NULL,
  `StaffID_FK` int(11) DEFAULT NULL,
  `LoyaltyPoint` int(11) DEFAULT NULL,
  `Avatar` text DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID_PK`, `Username`, `Password`, `PermissionID_PFK`, `CustomerID_FK`, `StaffID_FK`, `LoyaltyPoint`, `Avatar`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'Admin', 1, 1, 1, 1000, 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-9/46814548_573615253087617_4001593194000154624_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=yv7vxX_L7YcAX_R-I53&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT9yP1LVkglWvQqp9TcQKBzIf3GAvrQGxc6tz08T1nysZw&oe=626FE189', NULL, NULL),
(2, 'Delivery1', 'Delivery', 3, NULL, 6, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(3, 'Staff1', 'Staff', 2, NULL, 7, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(4, 'User1', '123456', 4, 6, NULL, 123, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(5, 'User2', '123445', 4, 7, NULL, 421, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(6, 'User3', '123434', 4, 8, NULL, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(10, 'huynh123a2001a@gmail.com', '$2y$10$TKLSxWG7LegpSYD9lRIgSewpmqE0zXuH9318swpMpsjfvidmmJbqW', 4, 1, 1, 0, 'NULL', '2022-04-08', '2022-04-08'),
(11, 'User31@gmail.com', '$2y$10$byIgc8QX8O6eK0epk7k14OEO8cOewoYrRdnV9S5bFSGJ294hPX32C', 4, NULL, NULL, 0, 'NULL', '2022-04-08', '2022-04-08'),
(12, 'User32@gmail.com', '$2y$10$IfpZ8VJg93yD.SnTWPnItebxcZ.Ob/MvUukcSvNsoqa5/hKWGy5PG', 4, NULL, NULL, 0, 'NULL', '2022-04-08', '2022-04-08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID_PK`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Chỉ mục cho bảng `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`DeliveryCode`);

--
-- Chỉ mục cho bảng `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryCode_PK`),
  ADD KEY `UserID_PFK` (`UserID_PFK`);

--
-- Chỉ mục cho bảng `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`DrinkCode_PK`),
  ADD KEY `DrinkCategoryCode_PFK` (`DrinkCategoryCode_PFK`);

--
-- Chỉ mục cho bảng `drink_categories`
--
ALTER TABLE `drink_categories`
  ADD PRIMARY KEY (`DrinkCategoryCode_PK`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FoodCode_PK`),
  ADD KEY `FoodCategoryCode_PFK` (`FoodCategoryCode_PFK`);

--
-- Chỉ mục cho bảng `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`FoodCategoryCode_PK`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  ADD PRIMARY KEY (`OrderCode_PK`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDetailsCode_PK`,`OrderCode_PFK`),
  ADD KEY `OrderCode_PFK` (`OrderCode_PFK`),
  ADD KEY `ServicesCode_FK` (`ServicesCode_FK`),
  ADD KEY `FoodCode_FK` (`FoodCode_FK`),
  ADD KEY `DrinkCode_FK` (`DrinkCode_FK`),
  ADD KEY `DeliveryCode_FK` (`DeliveryCode_FK`),
  ADD KEY `UserID_FK` (`UserID_FK`),
  ADD KEY `PaymentCode_FK` (`PaymentCode_FK`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_username_index` (`username`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentCode_PK`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`PermissionID_PK`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceCode_PK`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID_PK`),
  ADD UNIQUE KEY `NationIdentityNumber_UNIQUE` (`NationIdentityNumber_UNIQUE`) USING HASH;

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID_PK`,`PermissionID_PFK`),
  ADD KEY `PermissionID_PFK` (`PermissionID_PFK`),
  ADD KEY `CustomerID_FK` (`CustomerID_FK`),
  ADD KEY `StaffID_FK` (`StaffID_FK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `DeliveryCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DeliveryCode_PK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `drinks`
--
ALTER TABLE `drinks`
  MODIFY `DrinkCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `drink_categories`
--
ALTER TABLE `drink_categories`
  MODIFY `DrinkCategoryCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `FoodCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `FoodCategoryCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  MODIFY `OrderCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDetailsCode_PK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `PermissionID_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `ServiceCode_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID_PK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`UserID_PFK`) REFERENCES `users` (`UserID_PK`);

--
-- Các ràng buộc cho bảng `drinks`
--
ALTER TABLE `drinks`
  ADD CONSTRAINT `drinks_ibfk_1` FOREIGN KEY (`DrinkCategoryCode_PFK`) REFERENCES `drink_categories` (`DrinkCategoryCode_PK`);

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`FoodCategoryCode_PFK`) REFERENCES `food_categories` (`FoodCategoryCode_PK`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`OrderCode_PFK`) REFERENCES `orderbill` (`OrderCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`ServicesCode_FK`) REFERENCES `services` (`ServiceCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`FoodCode_FK`) REFERENCES `food` (`FoodCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_4` FOREIGN KEY (`DrinkCode_FK`) REFERENCES `drinks` (`DrinkCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_5` FOREIGN KEY (`DeliveryCode_FK`) REFERENCES `delivery` (`DeliveryCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_6` FOREIGN KEY (`UserID_FK`) REFERENCES `users` (`UserID_PK`),
  ADD CONSTRAINT `order_details_ibfk_7` FOREIGN KEY (`PaymentCode_FK`) REFERENCES `payment` (`PaymentCode_PK`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`PermissionID_PFK`) REFERENCES `permission` (`PermissionID_PK`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`CustomerID_FK`) REFERENCES `customer` (`CustomerID_PK`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`StaffID_FK`) REFERENCES `staff` (`StaffID_PK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

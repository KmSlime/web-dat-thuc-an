-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2022 lúc 11:22 AM
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

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`CustomerID`, `CustomerFirstName`, `CustomerLastName`, `CustomerAddress`, `CustomerPhoneContact`, `CustomerGender`, `CustomerDateOfBirth`, `CustomerEmail`, `created_at`, `updated_at`) VALUES
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
-- Cấu trúc bảng cho bảng `drinks`
--

CREATE TABLE `drinks` (
  `DrinkCode` bigint(20) UNSIGNED NOT NULL,
  `DrinkName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DrinkPrice` double NOT NULL,
  `DrinkSize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DrinkCategoryCode` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DrinkCoverPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drinks`
--

INSERT INTO `drinks` (`DrinkCode`, `DrinkName`, `DrinkPrice`, `DrinkSize`, `DrinkCategoryCode`, `Status`, `DrinkCoverPhoto`, `created_at`, `updated_at`) VALUES
(1, 'Cocacola', 15000, 'lon', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg', NULL, NULL),
(2, 'Sting', 17000, '1 lít', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg', NULL, NULL),
(3, 'Sting', 15000, '500ml', 1, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg', NULL, NULL),
(4, '7 Up', 17000, 'Lớn', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg', NULL, NULL),
(5, 'Red Bull', 20000, 'Lon', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg', NULL, NULL),
(6, 'StrongBow', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg', NULL, NULL),
(7, 'Bia', 17500, 'lon', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg', NULL, NULL),
(8, 'Nước uống nhiệt đới siêu special', 50000, 'ly 700ml', 3, 'Hết mùa', 'https://i.imgur.com/8kw8Llr.jpeg', NULL, NULL),
(9, 'Nước uống nhiệt đới siêu special', 27000, 'ly 400ml', 3, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg', NULL, NULL),
(10, 'Rượu Soju', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drinks_categories`
--

CREATE TABLE `drinks_categories` (
  `DrinkCategoryCode` bigint(20) UNSIGNED NOT NULL,
  `DrinkCategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drinks_categories`
--

INSERT INTO `drinks_categories` (`DrinkCategoryCode`, `DrinkCategoryName`, `Note`, `created_at`, `updated_at`) VALUES
(1, 'Nước ngọt', '', NULL, NULL),
(2, 'Thức uống có cồn', '18+', NULL, NULL),
(3, 'Special', '', NULL, NULL);

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
  `FoodCode` bigint(20) UNSIGNED NOT NULL,
  `FoodName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FoodPrice` double NOT NULL,
  `FoodCategoryCode` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FoodCoverPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`FoodCode`, `FoodName`, `FoodPrice`, `FoodCategoryCode`, `Status`, `FoodCoverPhoto`, `created_at`, `updated_at`) VALUES
(1, 'Mỳ Ý', 55000, 5, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg', NULL, NULL),
(2, 'Gà chiên nước mắm', 35000, 2, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg', NULL, NULL),
(3, 'Gà cháy tỏi', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg', NULL, NULL),
(4, 'Beefsteak', 70000, 3, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg', NULL, NULL),
(5, 'BurgurKing', 55000, 4, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(6, 'BigSpecial Combo', 150000, 6, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg', NULL, NULL),
(7, 'Combo1', 100000, 6, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg', NULL, NULL),
(8, 'Combo2', 120000, 6, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg', NULL, NULL),
(9, 'Combo3', 130000, 6, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg', NULL, NULL),
(10, 'Gà sốt me cay', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg', NULL, NULL),
(11, 'Khoai tây chiên', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(12, 'Khoai tây nghiền', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food_categories`
--

CREATE TABLE `food_categories` (
  `FoodCategoryCode` bigint(20) UNSIGNED NOT NULL,
  `FoodCategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `food_categories`
--

INSERT INTO `food_categories` (`FoodCategoryCode`, `FoodCategoryName`, `Note`, `created_at`, `updated_at`) VALUES
(1, 'Thức ăn nhẹ', '', NULL, NULL),
(2, 'Gà', '', NULL, NULL),
(3, 'Bò', '', NULL, NULL),
(4, 'Burgur', '', NULL, NULL),
(5, 'Pasta', '', NULL, NULL),
(6, 'Special', '', NULL, NULL);

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
(69, '2014_10_12_000000_create_user_table', 1),
(70, '2014_10_12_100000_create_password_resets_table', 1),
(71, '2019_08_19_000000_create_failed_jobs_table', 1),
(72, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(73, '2022_04_04_071030_create_customers_table', 1),
(74, '2022_04_04_071049_create_deliveries_table', 1),
(75, '2022_04_04_071109_create_drinks_table', 1),
(76, '2022_04_04_071139_create_drinks_categories_table', 1),
(77, '2022_04_04_071151_create_food_table', 1),
(78, '2022_04_04_071210_create_food_categories_table', 1),
(79, '2022_04_04_071226_create_orderbills_table', 1),
(80, '2022_04_04_071239_create_order_details_table', 1),
(81, '2022_04_04_071254_create_payments_table', 1),
(82, '2022_04_04_071312_create_permissions_table', 1),
(83, '2022_04_04_071324_create_services_table', 1),
(84, '2022_04_04_071336_create_staff_table', 1),
(85, '2022_04_04_071345_create_users_table', 1),
(120, '2014_10_12_000000_create_user_table', 1),
(121, '2014_10_12_100000_create_password_resets_table', 1),
(122, '2019_08_19_000000_create_failed_jobs_table', 1),
(123, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(124, '2022_04_04_071030_create_customers_table', 1),
(125, '2022_04_04_071049_create_deliveries_table', 1),
(126, '2022_04_04_071109_create_drinks_table', 1),
(127, '2022_04_04_071139_create_drinks_categories_table', 1),
(128, '2022_04_04_071151_create_food_table', 1),
(129, '2022_04_04_071210_create_food_categories_table', 1),
(130, '2022_04_04_071226_create_orderbills_table', 1),
(131, '2022_04_04_071239_create_order_details_table', 1),
(132, '2022_04_04_071254_create_payments_table', 1),
(133, '2022_04_04_071312_create_permissions_table', 1),
(134, '2022_04_04_071324_create_services_table', 1),
(135, '2022_04_04_071336_create_staff_table', 1),
(136, '2022_04_04_071345_create_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderbills`
--

CREATE TABLE `orderbills` (
  `OrderCode` bigint(20) UNSIGNED NOT NULL,
  `Discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SumBill` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderbills`
--

INSERT INTO `orderbills` (`OrderCode`, `Discount`, `SumBill`, `created_at`, `updated_at`) VALUES
(1, '0%', 150000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `OrderDetailsCode` bigint(20) UNSIGNED NOT NULL,
  `OrderCode` int(11) NOT NULL,
  `ServicesCode` int(11) NOT NULL,
  `FoodCode` int(11) NOT NULL,
  `DrinkCode` int(11) NOT NULL,
  `DeliveryCode` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PaymentCode` int(11) NOT NULL,
  `CheckStatus` int(11) NOT NULL,
  `DatetimeReport` date NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `PaymentCode` bigint(20) UNSIGNED NOT NULL,
  `PaymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`PaymentCode`, `PaymentMethod`, `created_at`, `updated_at`) VALUES
(1, 'Momo', NULL, NULL),
(2, 'Paypal', NULL, NULL),
(3, 'ZaloPay', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `PermissionID` bigint(20) UNSIGNED NOT NULL,
  `PermissionDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`PermissionID`, `PermissionDescription`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Nhân viên', NULL, NULL),
(3, 'Giao hàng', NULL, NULL),
(4, 'Khách hàng', NULL, NULL);

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
  `ServiceCode` bigint(20) UNSIGNED NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fee` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`ServiceCode`, `Note`, `Fee`, `created_at`, `updated_at`) VALUES
(1, 'Khăn lạnh', 2000, NULL, NULL),
(2, 'Ly đá', 5000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `StaffID` bigint(20) UNSIGNED NOT NULL,
  `StaffFirstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffLastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffPhoneContact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffGender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffDateOfBirth` date NOT NULL,
  `NationIdentityNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StaffEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffFirstName`, `StaffLastName`, `StaffAddress`, `StaffPhoneContact`, `StaffGender`, `StaffDateOfBirth`, `NationIdentityNumber`, `StaffEmail`, `created_at`, `updated_at`) VALUES
(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '1999-01-01', '12345656', 'guenvesley@gmail.com', NULL, NULL),
(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '2000-02-01', '12345657', 'tanthanh28082000@gmail.com', NULL, NULL),
(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '2000-02-01', '12345658', 'gauvu107@gmail.com', NULL, NULL),
(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '2000-02-01', '12345659', 'vihai147896345@gmail.com', NULL, NULL),
(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '2000-02-01', '12345660', 'huynh123a2001a@gmail.com', NULL, NULL),
(6, 'Lalala', 'Nguyễn', '123 lololo, Quận 1, Tp HCM', '0123456767', 'Nữ', '2001-02-01', '12345444', 'yolo@gmail.com', NULL, NULL),
(7, 'Lololo', 'Lê', '124 lelele, Quận 1, Tp HCM', '0123456768', 'Nam', '2002-02-01', '12345228', 'yola@gmail.com', NULL, NULL),
(8, 'Lelele', 'Trần', '125 lalala, Quận 1, Tp HCM', '0123456769', 'Nữ', '2003-02-01', '12345012', 'yole@gmail.com', NULL, NULL);

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
  `UserID` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PermissionID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `LoyaltyPoint` int(11) NOT NULL,
  `Avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `email`, `password`, `PermissionID`, `CustomerID`, `StaffID`, `LoyaltyPoint`, `Avatar`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 1, 1, 1, 1000, 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-9/46814548_573615253087617_4001593194000154624_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=yv7vxX_L7YcAX_R-I53&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT9yP1LVkglWvQqp9TcQKBzIf3GAvrQGxc6tz08T1nysZw&oe=626FE1', NULL, NULL),
(2, 'Delivery1', 'Delivery', 3, 0, 6, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(3, 'Staff1', 'Staff', 2, 0, 7, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(4, 'User1', '123456', 4, 6, 0, 123, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(5, 'User2', '123445', 4, 7, 0, 421, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL),
(6, 'User3', '123434', 4, 8, 0, 0, 'https://i.imgur.com/S9Qqvtc.jpeg', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`DrinkCode`);

--
-- Chỉ mục cho bảng `drinks_categories`
--
ALTER TABLE `drinks_categories`
  ADD PRIMARY KEY (`DrinkCategoryCode`);

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
  ADD PRIMARY KEY (`FoodCode`);

--
-- Chỉ mục cho bảng `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`FoodCategoryCode`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderbills`
--
ALTER TABLE `orderbills`
  ADD PRIMARY KEY (`OrderCode`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDetailsCode`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_username_index` (`username`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentCode`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`PermissionID`);

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
  ADD PRIMARY KEY (`ServiceCode`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `staff_nationidentitynumber_unique` (`NationIdentityNumber`);

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
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `DeliveryCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `drinks`
--
ALTER TABLE `drinks`
  MODIFY `DrinkCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `drinks_categories`
--
ALTER TABLE `drinks_categories`
  MODIFY `DrinkCategoryCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `FoodCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `FoodCategoryCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `orderbills`
--
ALTER TABLE `orderbills`
  MODIFY `OrderCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDetailsCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `PermissionID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `ServiceCode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

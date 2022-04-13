-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2022 lúc 08:56 PM
-- Phiên bản máy phục vụ: 8.0.28
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
  `CustomerID_PK` int NOT NULL,
  `CustomerFirstName` text,
  `CustomerLastName` text,
  `CustomerAddress` text,
  `CustomerPhoneContact` text,
  `CustomerGender` text,
  `CustomerDateOfBirth` date DEFAULT NULL,
  `CustomerEmail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerID_PK`, `CustomerFirstName`, `CustomerLastName`, `CustomerAddress`, `CustomerPhoneContact`, `CustomerGender`, `CustomerDateOfBirth`, `CustomerEmail`) VALUES
(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '1999-01-01', 'guenvesley@gmail.com'),
(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '2000-01-02', 'tanthanh28082000@gmail.com'),
(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '2000-01-02', 'gauvu107@gmail.com'),
(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '2000-01-02', 'vihai147896345@gmail.com'),
(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '2000-01-02', 'huynh123a2001a@gmail.com'),
(6, 'lalalala', 'Lê', '125 ABC, Quận 2, Tp HCM', '0123454359', 'Nữ', '2005-01-02', 'lalala@gmail.com'),
(7, 'Thiên Kim', 'Võ', '125 ABC, Quận 1, Tp HCM', '0123454360', 'Nữ', '2007-01-02', 'lelelel@gmail.com'),
(8, 'Ô Long', 'Trần', '126 ABC, Quận 2, Tp HCM', '0123454361', 'Nam', '2007-01-02', 'lololo@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryCode_PK` int NOT NULL,
  `AddressDelivery` text,
  `UserID_PFK` int DEFAULT NULL,
  `StatusGetOrder` tinyint(1) DEFAULT NULL,
  `StatusDelivery` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drinks`
--

CREATE TABLE `drinks` (
  `DrinkCode_PK` int NOT NULL,
  `DrinkName` text,
  `DrinkPrice` double DEFAULT NULL,
  `DrinkSize` text,
  `DrinkCategoryCode_PFK` int DEFAULT NULL,
  `Status` text,
  `DrinkCoverPhoto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `DrinkCategoryCode_PK` int NOT NULL,
  `DrinkCategoryName` text,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `drink_categories`
--

INSERT INTO `drink_categories` (`DrinkCategoryCode_PK`, `DrinkCategoryName`, `Note`) VALUES
(1, 'Nước ngọt', NULL),
(2, 'Thức uống có cồn', '18+'),
(3, 'Special', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `FoodCode_PK` int NOT NULL,
  `FoodName` text,
  `FoodPrice` double DEFAULT NULL,
  `FoodCategoryCode_PFK` int DEFAULT NULL,
  `Status` text,
  `FoodCoverPhoto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `FoodCategoryCode_PK` int NOT NULL,
  `FoodCategoryName` text,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Cấu trúc bảng cho bảng `orderbill`
--

CREATE TABLE `orderbill` (
  `OrderCode_PK` int NOT NULL,
  `UserID_FK` int DEFAULT NULL,
  `PaymentCode_FK` int DEFAULT NULL,
  `CheckStatus` int DEFAULT NULL,
  `DatetimeReport` datetime DEFAULT NULL,
  `Discount` text,
  `SumBill` double DEFAULT NULL,
  `Note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orderbill`
--

INSERT INTO `orderbill` (`OrderCode_PK`, `UserID_FK`, `PaymentCode_FK`, `CheckStatus`, `DatetimeReport`, `Discount`, `SumBill`, `Note`) VALUES
(14, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 1270000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com'),
(15, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 75000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com'),
(16, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 105000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com'),
(17, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 35000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com'),
(18, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 105000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com'),
(19, 4, NULL, 0, '2022-04-12 00:00:00', NULL, 55000, 'Tên người nhận: lalalala Lê , Địa chỉ: 125 ABC, Quận 2, Tp HCM , Số điện thoại: 0123454359 , Email: lalala@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `OrderDetailsCode_PK` int NOT NULL,
  `OrderCode_PFK` int NOT NULL,
  `FoodCode_FK` int DEFAULT NULL,
  `DrinkCode_FK` int DEFAULT NULL,
  `Qty` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`OrderDetailsCode_PK`, `OrderCode_PFK`, `FoodCode_FK`, `DrinkCode_FK`, `Qty`) VALUES
(18, 14, 3, NULL, 12),
(19, 14, 4, NULL, 7),
(20, 14, 6, NULL, 2),
(21, 15, 2, NULL, 1),
(22, 15, 10, NULL, 1),
(23, 16, 2, NULL, 1),
(24, 16, 4, NULL, 1),
(25, 17, 2, NULL, 1),
(26, 18, 3, NULL, 1),
(27, 18, 2, NULL, 1),
(28, 18, 12, NULL, 1),
(29, 19, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `PaymentCode_PK` int NOT NULL,
  `PaymentMethod` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `PermissionID_PK` int NOT NULL,
  `PermissionDescription` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `StaffID_PK` int NOT NULL,
  `StaffFirstName` text,
  `StaffLastName` text,
  `StaffAddress` text,
  `StaffPhoneContact` text,
  `StaffGender` text,
  `StaffDateOfBirth` text,
  `StaffEmail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`StaffID_PK`, `StaffFirstName`, `StaffLastName`, `StaffAddress`, `StaffPhoneContact`, `StaffGender`, `StaffDateOfBirth`, `StaffEmail`) VALUES
(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '1999/01/01', 'guenvesley@gmail.com'),
(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '2000/01/02', 'tanthanh28082000@gmail.com'),
(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '2000/01/02', 'gauvu107@gmail.com'),
(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '2000/01/02', 'vihai147896345@gmail.com'),
(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '2000/01/02', 'huynh123a2001a@gmail.com'),
(6, 'Lalala', 'Nguyễn', '123 lololo, Quận 1, Tp HCM', '0123456767', 'Nữ', '2001/01/02', 'yolo@gmail.com'),
(7, 'Lololo', 'Lê', '124 lelele, Quận 1, Tp HCM', '0123456768', 'Nam', '2002/01/02', 'yola@gmail.com'),
(8, 'Lelele', 'Trần', '125 lalala, Quận 1, Tp HCM', '0123456769', 'Nữ', '2003/01/02', 'yole@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID_PK` int NOT NULL,
  `Username` text,
  `Password` text,
  `PermissionID_PFK` int NOT NULL,
  `CustomerID_FK` int DEFAULT NULL,
  `StaffID_FK` int DEFAULT NULL,
  `LoyaltyPoint` int DEFAULT NULL,
  `Avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID_PK`, `Username`, `Password`, `PermissionID_PFK`, `CustomerID_FK`, `StaffID_FK`, `LoyaltyPoint`, `Avatar`) VALUES
(1, 'Admin', 'Admin', 1, 1, 1, 1000, 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-9/46814548_573615253087617_4001593194000154624_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=yv7vxX_L7YcAX_R-I53&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT9yP1LVkglWvQqp9TcQKBzIf3GAvrQGxc6tz08T1nysZw&oe=626FE189'),
(2, 'Delivery1', 'Delivery', 3, NULL, 6, 0, 'https://i.imgur.com/S9Qqvtc.jpeg'),
(3, 'Staff1', 'Staff', 2, NULL, 7, 0, 'https://i.imgur.com/S9Qqvtc.jpeg'),
(4, 'User1', '123456', 4, 6, NULL, 123, 'https://i.imgur.com/S9Qqvtc.jpeg'),
(5, 'User2', '123445', 4, 7, NULL, 421, 'https://i.imgur.com/S9Qqvtc.jpeg'),
(6, 'User3', '123434', 4, 8, NULL, 0, 'https://i.imgur.com/S9Qqvtc.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID_PK`);

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
-- Chỉ mục cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  ADD PRIMARY KEY (`OrderCode_PK`),
  ADD KEY `UserID_FK` (`UserID_FK`),
  ADD KEY `PaymentCode_FK` (`PaymentCode_FK`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDetailsCode_PK`,`OrderCode_PFK`),
  ADD KEY `FoodCode_FK` (`FoodCode_FK`),
  ADD KEY `DrinkCode_FK` (`DrinkCode_FK`),
  ADD KEY `OrderCode_PFK` (`OrderCode_PFK`);

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
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID_PK`);

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
  MODIFY `CustomerID_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DeliveryCode_PK` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `drinks`
--
ALTER TABLE `drinks`
  MODIFY `DrinkCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `drink_categories`
--
ALTER TABLE `drink_categories`
  MODIFY `DrinkCategoryCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `FoodCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `FoodCategoryCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  MODIFY `OrderCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDetailsCode_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `PermissionID_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID_PK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Các ràng buộc cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  ADD CONSTRAINT `orderbill_ibfk_1` FOREIGN KEY (`UserID_FK`) REFERENCES `users` (`UserID_PK`),
  ADD CONSTRAINT `orderbill_ibfk_2` FOREIGN KEY (`PaymentCode_FK`) REFERENCES `payment` (`PaymentCode_PK`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`FoodCode_FK`) REFERENCES `food` (`FoodCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`DrinkCode_FK`) REFERENCES `drinks` (`DrinkCode_PK`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`OrderCode_PFK`) REFERENCES `orderbill` (`OrderCode_PK`);

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

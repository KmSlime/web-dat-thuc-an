
CREATE TABLE Permission(
    PermissionID_PK INT AUTO_INCREMENT PRIMARY KEY,
    PermissionDescription TEXT
);

INSERT INTO Permission VALUES (1, 'Admin');
INSERT INTO Permission VALUES (2, 'Nhân viên');
INSERT INTO Permission VALUES (3, 'Giao hàng');
INSERT INTO Permission VALUES (4, 'Khách hàng');

CREATE TABLE Customer(
    CustomerID_PK INT AUTO_INCREMENT PRIMARY KEY,
    CustomerFirstName TEXT,
    CustomerLastName TEXT,
    CustomerAddress TEXT,
    CustomerPhoneContact TEXT,
    CustomerGender TEXT,
    CustomerDateOfBirth date,
    CustomerEmail TEXT    
);

INSERT INTO Customer Values(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '01/01/1999', 'guenvesley@gmail.com');
INSERT INTO Customer Values(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '01/02/2000', 'tanthanh28082000@gmail.com');
INSERT INTO Customer Values(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '01/02/2000', 'gauvu107@gmail.com');
INSERT INTO Customer Values(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '01/02/2000', 'vihai147896345@gmail.com');
INSERT INTO Customer Values(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '01/02/2000', 'huynh123a2001a@gmail.com');
INSERT INTO Customer Values(6, 'lalalala', 'Lê', '125 ABC, Quận 2, Tp HCM', '0123454359', 'Nữ', '01/02/2005', 'lalala@gmail.com');
INSERT INTO Customer Values(7, 'Thiên Kim', 'Võ', '125 ABC, Quận 1, Tp HCM', '0123454360', 'Nữ', '01/02/2006', 'lelelel@gmail.com');
INSERT INTO Customer Values(8, 'Ô Long', 'Trần', '126 ABC, Quận 2, Tp HCM', '0123454361', 'Nam', '01/02/2007', 'lololo@gmail.com');

CREATE TABLE Staff(
    StaffID_PK INT AUTO_INCREMENT PRIMARY KEY,
    StaffFirstName TEXT,
    StaffLastName TEXT,
    StaffAddress TEXT,
    StaffPhoneContact TEXT,
    StaffGender TEXT,
    StaffDateOfBirth TEXT,
    NationIdentityNumber_UNIQUE TEXT UNIQUE,
    StaffEmail TEXT
);

INSERT INTO Staff Values(1, 'Hồng Liêm', 'Nguyễn', '123 ABC, Quận Gò Vấp, Tp HCM', '0792777911', 'Nam', '01/01/1999', '12345656', 'guenvesley@gmail.com');
INSERT INTO Staff Values(2, 'Tấn Thành', 'Trương', '456 DVB, Quận Gò Vấp, Tp HCM', '0852477277', 'Nam', '01/02/2000', '12345657', 'tanthanh28082000@gmail.com');
INSERT INTO Staff Values(3, 'Hoàng Vũ', 'Nguyễn', '123 ABC, Quận Thủ Đức, Tp HCM', '0903992107', 'Nam', '01/02/2000', '12345658', 'gauvu107@gmail.com');
INSERT INTO Staff Values(4, 'Vĩ Hải', 'Trần', '124 ABC, Quận Thủ Đức, Tp HCM', '0903068723', 'Nam', '01/02/2000', '12345659', 'vihai147896345@gmail.com');
INSERT INTO Staff Values(5, 'Tuấn Quỳnh', 'Nguyễn', '124 ABC, Quận Gò Vấp, Tp HCM', '0912360759', 'Nam', '01/02/2000', '12345660', 'huynh123a2001a@gmail.com');
INSERT INTO Staff Values(6, 'Lalala', 'Nguyễn', '123 lololo, Quận 1, Tp HCM', '0123456767', 'Nữ', '01/02/2001', '12345444', 'yolo@gmail.com');
INSERT INTO Staff Values(7, 'Lololo', 'Lê', '124 lelele, Quận 1, Tp HCM', '0123456768', 'Nam', '01/02/2002', '12345228', 'yola@gmail.com');
INSERT INTO Staff Values(8, 'Lelele', 'Trần', '125 lalala, Quận 1, Tp HCM', '0123456769', 'Nữ', '01/02/2003', '12345012', 'yole@gmail.com');

CREATE TABLE Payment(
    PaymentCode_PK INT PRIMARY KEY,
    PaymentMethod TEXT
);

INSERT INTO Payment Values(1, 'Momo');
INSERT INTO Payment Values(2, 'Paypal');
INSERT INTO Payment Values(3, 'ZaloPay');

CREATE TABLE OrderBill(
    OrderCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    Discount TEXT,
    SumBill double
);

INSERT INTO OrderBill (OrderCode_PK,Discount) Values(1, '0%');

CREATE TABLE Services(
    ServiceCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    Note TEXT,
    Fee double
);

INSERT INTO Services Values(1, 'Khăn lạnh',  2000);
INSERT INTO Services Values(2, 'Ly đá',  5000);


CREATE TABLE Drink_Categories(
    DrinkCategoryCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    DrinkCategoryName TEXT,
    Note TEXT
);

INSERT INTO Drink_Categories (DrinkCategoryCode_PK,DrinkCategoryName) Values(1, 'Nước ngọt');
INSERT INTO Drink_Categories (DrinkCategoryCode_PK,DrinkCategoryName, Note) Values(2, 'Thức uống có cồn', '18+');
INSERT INTO Drink_Categories (DrinkCategoryCode_PK,DrinkCategoryName) Values(3, 'Special');


CREATE TABLE Drinks(
    DrinkCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    DrinkName TEXT,
    DrinkPrice double,
	DrinkSize TExt,
    DrinkCategoryCode_PFK int,
    FOREIGN KEY (DrinkCategoryCode_PFK) REFERENCES Drink_Categories(DrinkCategoryCode_PK),
    Status TEXT, -- chuyển thành text
    DrinkCoverPhoto TEXT
);

INSERT INTO Drinks Values(1, 'Cocacola', 15000, 'lon', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg');
INSERT INTO Drinks Values(2, 'Sting', 17000, '1 lít', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg');
INSERT INTO Drinks Values(3, 'Sting', 15000, '500ml', 1, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg');
INSERT INTO Drinks Values(4, '7 Up', 17000, 'Lớn', 1, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg');
INSERT INTO Drinks Values(5, 'Red Bull', 20000, 'Lon', 1, 'Còn ', 'https://i.imgur.com/8kw8Llr.jpeg');
INSERT INTO Drinks Values(6, 'StrongBow', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg');
INSERT INTO Drinks Values(7, 'Bia', 17500, 'lon', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg');
INSERT INTO Drinks Values(8, 'Nước uống nhiệt đới siêu special', 50000, 'ly 700ml', 3, 'Hết mùa', 'https://i.imgur.com/8kw8Llr.jpeg');
INSERT INTO Drinks Values(9, 'Nước uống nhiệt đới siêu special', 27000, 'ly 400ml', 3, 'Còn ', 'https://i.imgur.com/M0ZkodO.jpeg');
INSERT INTO Drinks Values(10, 'Rượu Soju', 30000, 'chai', 2, 'Còn ', 'https://i.imgur.com/nhtCGLI.jpeg');


CREATE TABLE Food_Categories(
    FoodCategoryCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    FoodCategoryName TEXT,
    Note TEXT
);

INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(1, 'Thức ăn nhẹ');
INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(2, 'Gà');
INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(3, 'Bò');
INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(4, 'Burgur');
INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(5, 'Pasta');
INSERT INTO Food_Categories (FoodCategoryCode_PK,FoodCategoryName) Values(6, 'Special');



CREATE TABLE Food(
    FoodCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    FoodName TEXT,
    FoodPrice double,
    FoodCategoryCode_PFK int,
    FOREIGN KEY (FoodCategoryCode_PFK) REFERENCES Food_Categories(FoodCategoryCode_PK),
    Status TEXT, -- chuyển thành text
    FoodCoverPhoto TEXT
);

INSERT INTO Food Values(1, 'Mỳ Ý', 55000, 5, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg');
INSERT INTO Food Values(2, 'Gà chiên nước mắm', 35000, 2, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg');
INSERT INTO Food Values(3, 'Gà cháy tỏi', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg');
INSERT INTO Food Values(4, 'Beefsteak', 70000, 3, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg');
INSERT INTO Food Values(5, 'BurgurKing', 55000, 4, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Food Values(6, 'BigSpecial Combo', 150000, 6, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg');
INSERT INTO Food Values(7, 'Combo1', 100000, 6, 'còn phục vụ', 'https://i.imgur.com/JSB89us.jpeg');
INSERT INTO Food Values(8, 'Combo2', 120000, 6, 'còn phục vụ', 'https://i.imgur.com/yb5OHA6.jpeg');
INSERT INTO Food Values(9, 'Combo3', 130000, 6, 'còn phục vụ', 'https://i.imgur.com/t7vxCmr.jpeg');
INSERT INTO Food Values(10, 'Gà sốt me cay', 40000, 2, 'còn phục vụ', 'https://i.imgur.com/eBacrQz.jpeg');
INSERT INTO Food Values(11, 'Khoai tây chiên', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Food Values(12, 'Khoai tây nghiền', 30000, 1, 'còn phục vụ', 'https://i.imgur.com/C78iTEU.jpeg');


CREATE TABLE Users(
    UserID_PK INT AUTO_INCREMENT,
	Username TEXT,
    Password TEXT,
    PermissionID_PFK int,
    CustomerID_FK int,
    StaffID_FK int,   
	PRIMARY KEY(UserID_PK, PermissionID_PFK),
    FOREIGN KEY (PermissionID_PFK) REFERENCES Permission(PermissionID_PK),
    FOREIGN KEY (CustomerID_FK) REFERENCES Customer(CustomerID_PK),
    FOREIGN KEY (StaffID_FK) REFERENCES Staff(StaffID_PK),
    LoyaltyPoint int,
    Avatar TEXT
);

INSERT INTO Users VALUES (1, 'Admin' , 'Admin' , 1, 1, 1, 1000, 'https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-9/46814548_573615253087617_4001593194000154624_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=yv7vxX_L7YcAX_R-I53&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT9yP1LVkglWvQqp9TcQKBzIf3GAvrQGxc6tz08T1nysZw&oe=626FE189');
INSERT INTO Users (UserID_PK, Username, Password, PermissionID_PFK, StaffID_FK, LoyaltyPoint, Avatar) 
VALUES (2, 'Delivery1' , 'Delivery' , 3, 6, 0, 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Users (UserID_PK, Username, Password, PermissionID_PFK, StaffID_FK, LoyaltyPoint, Avatar) 
VALUES (3, 'Staff1' , 'Staff' , 2, 7, 0, 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Users (UserID_PK, Username, Password, PermissionID_PFK, CustomerID_FK, LoyaltyPoint, Avatar) 
VALUES (4, 'User1' , '123456' , 4, 6, 123, 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Users (UserID_PK, Username, Password, PermissionID_PFK, CustomerID_FK, LoyaltyPoint, Avatar) 
VALUES (5, 'User2' , '123445' , 4, 7, 421, 'https://i.imgur.com/S9Qqvtc.jpeg');
INSERT INTO Users (UserID_PK, Username, Password, PermissionID_PFK, CustomerID_FK, LoyaltyPoint, Avatar) 
VALUES (6, 'User3' , '123434' , 4, 8, 0, 'https://i.imgur.com/S9Qqvtc.jpeg');


CREATE TABLE Delivery(
    DeliveryCode_PK INT AUTO_INCREMENT PRIMARY KEY,
    AddressDelivery TEXT,
    UserID_PFK int,
    FOREIGN KEY (UserID_PFK) REFERENCES Users(UserID_PK),-- DeliveryStaff
    StatusGetOrder boolean,
    StatusDelivery boolean
);

CREATE TABLE Order_Details(
    OrderDetailsCode_PK INT AUTO_INCREMENT,
    OrderCode_PFK int,
    ServicesCode_FK int,
    FoodCode_FK int,
    DrinkCode_FK int,
    DeliveryCode_FK int,
    UserID_FK int,
    PaymentCode_FK int,
	PRIMARY KEY(OrderDetailsCode_PK, OrderCode_PFK),
    FOREIGN KEY (OrderCode_PFK) REFERENCES OrderBill(OrderCode_PK),
    FOREIGN KEY (ServicesCode_FK) REFERENCES Services(ServiceCode_PK),
    FOREIGN KEY (FoodCode_FK) REFERENCES Food(FoodCode_PK),
    FOREIGN KEY (DrinkCode_FK) REFERENCES Drinks(DrinkCode_PK),
    FOREIGN KEY (DeliveryCode_FK) REFERENCES Delivery(DeliveryCode_PK),
    FOREIGN KEY (UserID_FK) REFERENCES Users(UserID_PK), -- Customer  
    FOREIGN KEY (PaymentCode_FK) REFERENCES Payment(PaymentCode_PK),
    CheckStatus int,
    DatetimeReport datetime,
    Note TEXT
);
Đang hiển thị 1225202493968781281.
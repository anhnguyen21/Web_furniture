create database noithat;
use noithat;

create table User(
	id int primary key AUTO_INCREMENT,
	username varchar(50) UNIQUE,
	password varchar(50),
	fullname varchar(50),
	adress varchar(50),
    phone varchar(50)
);

insert into User values (null,'anh','123','Nguyen The anh','Quang Tri','016431566');
insert into User values (null,'nga','123','Mai Thi Nga','Quang Binh','0924515154');
insert into User values (null,'loan','123','Arat Thi Loan','Quang Nam','091543161');
insert into User values (null,'hoa','123','Dinh Thi Hoa','Quang Binh','018184235');

select *from User;

create table Oder(
	id int not null primary key auto_increment,
	idOder int not null,
    quantity int,
    idUser int
);

SELECT idUser,idOder,Sum(quantity) FROM Oder GROUP BY idOder ORDER BY Sum(quantity) DESC;
select *from Oder;

create table oderBought(
	id int not null primary key auto_increment,
	idOder int,
    quantity int,
    idUser int,
    dateOder datetime
);

SELECT COUNT(idOder) FROM Oder where idUser=1;

create table Admin(
id int primary key AUTO_INCREMENT,
username varchar(50) UNIQUE,
password varchar(50)
);
INSERT INTO `Admin`(`username`,`password`) VALUES ('admin', 'admin');
INSERT INTO `Admin`(`username`, `password`) VALUES ('anh','123');

create table product(
id int primary key AUTO_INCREMENT,
name varchar(50),
price float,
type varchar(50),
detai text,
image varchar(50),
typePro varchar(20),
quantity int,
dateInput date
);

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("12 bóng B38
",130000, "Led", "Dây đèn led trang trí bóng tròn 12 bóng B38 sử dụng trang trí nội thất và ngoại thất như phòng khách, phòng ngủ, sân vườn, hay trang trí cây ngày lễ,..."
, "img/den/d1.jpg","d",1000,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("​Trang trí cắm trại
", 80000, "LED USB", "Không chỉ trang trí nhà cửa trong dịp lễ tết, mà dây đèn dùng khi đi cắm trại. Dây đèn có thiết kế chống nước nên hoàn toàn yên tâm khi sử dụng ngoài ...",
"img/den/d2.jpg","d",50,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("​Trang trí ngoài trời
​", 300000, "Đèn Dây", "Bộ đèn dây trang trí ngoài trời 10m 20 bóng thường được treo bên ngoài, bên trong đều đẹp, hoặc là treo trên cây. Bộ đèn có khả năng chống nước, bền ...", 
"img/den/d3.jpg","d",12,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Trang trí Homelight
",4000000, "OPLD07-8", "Ánh sáng: 3 Màu - nhiều chế độ (Chế độ ngủ - Chế độ Dimmer tăng giảm cường độ ánh sáng - Chế độ chuyển dải màu từ trắng sang vàng...)", 
"img/den/d4.jpg","d",20,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Bàn Ăn Gỗ Sồi
",13000000, "BA-03", "Có thiết kế gần giống với mẫu bàn ăn BA-02, mẫu bàn ăn BA-03 được thiết kế thêm đệm bọc nỉ phía sau để mang lại cảm giác êm ái cho người sử dụng."
, "img/ban/b1.jpg","b",12,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("​Ghế Gỗ GHS-4123
", 13500000, "GHS-4123", "Bộ bàn ăn 2 tầng GHS-4123 với thiết kế hiện đại gồm 2 tầng giúp bạn lưu trữ được nhiều đồ và tiện ích sử dụng cao là 1 trong vô số mẫu tại Nội thất Go Home.",
"img/ban/b2.jpg","b",19,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("​BÀN GỖ TỰ NHIÊN
​", 11000000, "LG-BA001", "Bộ bà		n ăn LG-BA001 là một thiết kế scaninavian trong nội thất hiện đại đã có những thay đổi sáng tạo để mang lại trải nghiệm mới cho người sử dụng...", 
"img/ban/b3.jpg","b",20,"2017-06-15");
INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Bộ bàn ăn EAMES
",4000000, "BA16", "Bộ bàn ăn Hình Bầu Dục 6 ghế gỗ Xoan đào sản xuất tại Xưởng đồ gỗ Phạm Gia. Bàn ăn bầu dục kích thước 160x80cm + kính cường lực dày 8mm + 6 ghế đơn.)", 
"img/ban/b4.jpg","b",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Giường ngủ đẹp
",9200000, "NV004", "Giường ngủ đẹp hiện đại NV004 là giải pháp nội thất phòng ngủ thông minh, góp phần tạo nên không gian sống tiện nghi và hiện đại, ghỉ ngơi thật thoải mái..)", 
"img/giuong/g1.jpg","g",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Giường Ngủ Đẹp 
",7000000, "GN04", "Kích thước nệm: 1800mm Vật liệu: Mdf phủ melamine An Cường Bảo hành: 12 Tháng Free Thiết Kế 100% Lưu ý: Chưa bao gồm Tab)", 
"img/giuong/g2.jpg","g",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Nhà Phong Cách Hiện Đại  
",11000000, "TA-GI002", "Giường ngủ đẹp hiện đại NV004 là giải pháp nội thất phòng ngủ thông minh, góp phần tạo nên không gian sống tiện nghi và hiện đại, ghỉ ngơi thật thoải mái..)", 
"img/giuong/g3.jpg","g",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Giường Ngủ Giá Rẻ  
",5200000, "Tp.Hcm", "giường ngủ đẹp giá rẻ tphcm, giuong ngu dep gia re tphcm, giường ngủ đẹp tphcm, giuong ngu dep tphcm, giường ngủ giá rẻ tphcm, giuong ngu gia rfe ...)", 
"img/giuong/g4.jpg","g",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Tủ gỗ sồi
",9500000, "EUF202", "Công ty chuyên sản xuất đồ gỗ xuất khẩu hiện đang bán tu áo quần 3 buồng bằng gỗ sồi Mỹ hàng tháo ráp vận chuyển dễ dàng. Kích thước: 160 x 58 x 195 cm ...)", 
"img/tu/t1.jpg","t",30,"2017-06-15");


INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Tủ công nghiệp  
",10200000, "GHS-5194", "Một căn phòng ngủ hoàn hảo thì không thể nào thiếu đi sự có mặt của chiếc tủ áo quần đẹp đó là nơi bận cất giữ những bộ trang phục yêu quý của mình...)", 
"img/tu/t2.jpg","t",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Tủ gia đình   
",12300000, "GHS-5699", "Nổi bật với sự đa năng, tiện dụng, tính thẩm mỹ cao, sẵn sàng đáp ứng nhu cầu sử dụng của bạn. Không chỉ là mẫu quần áo gia đình thông thường, ...)", 
"img/tu/t3.jpg","t",30,"2017-06-15");

INSERT INTO `product`(`name`, `price`, `type`, `detai`, `image`,`typePro`,`quantity`,`dateInput`) VALUES ("Tủ Áo Quần Giá Rẻ  
",8800000, "104T", "Bên cạnh sự phát triển của xu hướng nội thất hiện đại thì những mẫu thiết kế với hơi hướng cổ điển vẫn khẳng định được vị trí của mình. Mẫu tủ quần áo ...)", 
"img/tu/t4.jpg","t",30,"2017-06-15");

select *from product;
SELECT idUser,idOder,SUM(quantity) FROM Oder GROUP BY idOder ORDER BY SUM(quantity) DESC;

select *from Oder;
SELECT * from Oder where idUser=1;

select id from Oder where idOder=3;



-- UPDATE Oder set quantity=((select quantity from Oder where idOder=1)+1) where id=(select id from Oder where idOder=1);
SELECT id from Oder where idOder=1;
SELECT quantity from Oder where idOder=1;

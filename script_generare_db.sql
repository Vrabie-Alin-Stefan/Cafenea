create table `User` (
    id int not null auto_increment,
    token varchar(64) not null, 
    numberTableOcupied int,
    age int,
    created_at int(12),
    updated_at int(12),
    PRIMARY KEY (id),
    INDEX(id)
) ENGINE=InnoDB;

create table Product (
    id int not null auto_increment,
    productName varchar(100) not null,
    price double not null,
    productStock int not null,
    created_at int(12),
    updated_at int(12),
    PRIMARY KEY (id),
    INDEX(id)
) ENGINE=InnoDB;

create table `Order` (
    id int not null auto_increment,
    id_user int not null,
    id_product int not null,
    orderedQuantity int not null,
    orderDate date not null,
    billPrice double not null,
    created_at int(12),
    updated_at int(12),
    PRIMARY KEY(id),
    INDEX (id_user),
    INDEX (id_product),
    FOREIGN KEY (id_user) REFERENCES `User`(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_product) REFERENCES Product(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

insert into Product (productName,price,productStock,created_at,updated_at) values ('Drip',5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('French Press',7.5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Vacuum Pot',8.5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Americano',10,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Cafe Mocha',11,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Cafe Latte',12,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Cappucino',10,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Frappucino',10,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Caramel Macchiatoo',13,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Mint Chocolate',10,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Espresso',9,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Vanilla Latte',11,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Earl Grey',5.75,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('English Breakfast',6.5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Green Tea',6.5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Jasmine Tea',6,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Orange Juice',9,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Apple Juice',8,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Iced Latte',7,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Iced Mocha',6,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Iced Tea',5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Lemonade',10,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Soda',5,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Beer',7,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Wine',12,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Peacon Pie',25,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Cheesecake',23,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Coffe Java',20,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Macaron',21,(select floor(rand() * 100)+1),now(),now());
insert into Product (productName,price,productStock,created_at,updated_at) values ('Croissant',15,(select floor(rand() * 100)+1),now(),now());

-- Exemple pt tabela User
--insert into `User` (token,numberTableOcupied,created_at,updated_at) values ('RP*AK^pbz\a4=Gu!%HLMEUE-sk!8E8N',1,now(),now());
--select * from  `User` where id=1;

-- Exemple pt tabela Order
--insert into `Order` (id_user,id_product,orderedQuantity,orderDate,billPrice,created_at,updated_at) values (1,1,1,now(),5,now(),now());
--select * from `Order` where id=1;

-- UPDATE `user` SET numberTableOcupied = NULL WHERE token='eo0!5lQ*RL7g^c,jN/0QF?<]92%^)ncv';

























CREATE TABLE users (
       id INT,
       username VARCHAR(10) UNIQUE KEY NOT NULL,
       password VARCHAR(10) NOT NULL,
       PRIMARY KEY(id)
);



CREATE TABLE orders (
       orderID INT NOT NULL AUTO_INCREMENT,
       orderItems VARCHAR(50) NOT NULL,
       total DECIMAL(10,2) NOT NULL,
       PRIMARY KEY (orderID)

);

CREATE TABLE product (
       productID INT NOT NULL,
       quantity INT NOT NULL,
       productName VARCHAR(20) NOT NULL,
       price INT NOT NULL,
       PRIMARY KEY(productID)

);

ALTER TABLE product AUTO_INCREMENT = 3;


CREATE TABLE cart (
       productName VARCHAR(20) PRIMARY KEY,
       quantity INT NOT NULL,
       price INT NOT NULL
       );

INSERT INTO orders VALUES(1, 'Watermelon', 42);
INSERT INTO orders VALUES(2, 'Strawberry', 22);


INSERT INTO users VALUES(1,'admin', 'admin');

INSERT INTO product VALUES(1, 4, 'Strawberry', 5);
INSERT INTO product VALUES(2, 44, 'Watermelon', 1);
INSERT INTO product VALUES(3, 25, 'Onion', 2);


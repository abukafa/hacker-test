-- create database store
CREATE DATABASE IF NOT EXISTS store;

-- create customer table
CREATE TABLE IF NOT EXISTS customer (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  customer_name VARCHAR(50) NOT NULL
);


-- create customer_address table
CREATE TABLE IF NOT EXISTS customer_address (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  customer_id INT(11) NOT NULL,
  address VARCHAR(255) NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES customer(id)
);

-- create product table
CREATE TABLE IF NOT EXISTS product (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);

-- create payment_method table
CREATE TABLE IF NOT EXISTS payment_method (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  is_active TINYINT(1) NOT NULL DEFAULT 1
);

CREATE TABLE IF NOT EXISTS `order` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `customer_id` INT(11) NOT NULL,
  `date` DATE DEFAULT CURRENT_DATE,
  `product_id` INT(11) NOT NULL,
  `quantity` INT(11) NOT NULL DEFAULT 0,
  `amount` DECIMAL(10,2) NOT NULL,
  `payment_id` INT(11) NOT NULL,
  FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`),
  FOREIGN KEY (`payment_id`) REFERENCES `payment_method`(`id`)
);


-- Menambahkan data customer
INSERT INTO customer VALUES
  (1, 'Asep Saepudin'),
  (2, 'Aceng Kasta'),
  (3, 'Ujang Emul');

-- Menambahkan data product
INSERT INTO product VALUES
  (1, 'Bala-bala', 5000),
  (2, 'Cireng', 7000),
  (3, 'Basreng', 6000);

-- Menambahkan data payment_method
INSERT INTO payment_method VALUES
  (1, 1),
  (2, 1),
  (3, 1);

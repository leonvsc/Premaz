CREATE DATABASE IF NOT EXISTS `premaz`;

USE `premaz`;

CREATE TABLE `Customers` (
	`CustomerNumber` VARCHAR(8) NOT NULL,
    `AC_Email` VARCHAR(50) NOT NULL,
    `FirstName` VARCHAR(50) NOT NULL,
    `LastName` VARCHAR(50) NOT NULL,
    `PhoneNumber` INT NOT NULL,
    CONSTRAINT `CustomersPK`
    	PRIMARY KEY (`CustomerNumber`)
);

CREATE TABLE `Accounts` (
    `Email` VARCHAR(50) NOT NULL,
    `Password` VARCHAR(128) NOT NULL,
    `Role` VARCHAR(20) NOT NULL,
    CONSTRAINT `AccountsPK`
        PRIMARY KEY (`Email`)
);

CREATE TABLE `ShippingAddress` (
    `ShippingAddressID` INT NOT NULL AUTO_INCREMENT,
    `CM_CustomerNumber` VARCHAR(8) NOT NULL,
    `Street` VARCHAR(50) NOT NULL,
    `HouseNumber` VARCHAR(6) NOT NULL,
    `PostalCode` VARCHAR(6) NOT NULL,
    `City` VARCHAR(50) NOT NULL,
    `Country` VARCHAR(50) NOT NULL,
    CONSTRAINT `ShippingAddressPK`
        PRIMARY KEY (`ShippingAddressID`)
);

CREATE TABLE `BillingAddress` (
    `BillingAddressID` INT NOT NULL AUTO_INCREMENT,
    `CM_CustomerNumber` VARCHAR(8) NOT NULL,
    `Street` VARCHAR(50) NOT NULL,
    `HouseNumber` VARCHAR(6) NOT NULL,
    `PostalCode` VARCHAR(6) NOT NULL,
    `City` VARCHAR(50) NOT NULL,
    `Country` VARCHAR(50) NOT NULL,
    CONSTRAINT `BillingAddressPK`
        PRIMARY KEY (`BillingAddressID`)
);

CREATE TABLE `Products` (
    `SKU` VARCHAR(20) NOT NULL,
    `ProductName` VARCHAR(100) NOT NULL, 
    `Price` FLOAT NOT NULL,
    `Stock` INT NOT NULL,
    `Category` VARCHAR(30) NOT NULL,
    CONSTRAINT `ProductsPK`
    	PRIMARY KEY (`SKU`)
);

CREATE TABLE `ShoppingCarts` (
    `ShoppingCartID` INT NOT NULL AUTO_INCREMENT,
    `AC_Email` VARCHAR(50) NOT NULL,
    CONSTRAINT `ShoppingCartsPK`
    	PRIMARY KEY (`ShoppingCartID`)
);

CREATE TABLE `CartItems` (
    `CartItemID` INT NOT NULL AUTO_INCREMENT,
    `SC_ShoppingCartID` INT NOT NULL,
    `PD_SKU` VARCHAR(20) NOT NULL,
    `Quantity` INT NOT NULL,
    CONSTRAINT `CartItemsPK`
        PRIMARY KEY (`CartItemID`)
);

CREATE TABLE `Orders` (
    `OrderNumber` INT NOT NULL AUTO_INCREMENT,
    `SA_ShippingAddressID` INT NOT NULL,
    `CM_CustomerNumber` VARCHAR(8) NOT NULL,
    `SC_ShoppingCartID` INT NOT NULL,
    `OrderStatus` VARCHAR(20) NOT NULL,
    `OrderDate` DATE NOT NULL,
    `TotalPrice` FLOAT NOT NULL,
    CONSTRAINT `OrdersPK`
        PRIMARY KEY (`OrderNumber`)
);

-- CREATE TABLE `Payments` (
--     `PaymentID` VARCHAR(8) NOT NULL,
--     `Price` FLOAT NOT NULL,
--     `Currency` VARCHAR(3) NOT NULL,
--     `Method` VARCHAR(20) NOT NULL,
--     `PaymentStatus` VARCHAR(20) NOT NULL,
--     `PaymentDate` DATE,
--     CONSTRAINT `PaymentsPK`
--     	PRIMARY KEY (`PaymentID`)
-- );

CREATE TABLE `Invoices` (
    `InvoiceNumber` VARCHAR(8) NOT NULL,
    `BA_BillingAddressID` INT NOT NULL,
    `OD_OrderNumber` INT NOT NULL,
    `VATNumber` VARCHAR(20),
    `InvoiceDate` DATE,
    CONSTRAINT `InvoicesPK`
        PRIMARY KEY(`InvoiceNumber`)
);

CREATE TABLE `SearchTerms` (
    `SearchTermID` INT NOT NULL AUTO_INCREMENT,
    `SearchTerm` VARCHAR(200),
    CONSTRAINT `SearchTermPK`
        PRIMARY KEY(`SearchTermID`)
);

-- CustomerFK

ALTER TABLE Customers
ADD CONSTRAINT CM_AccountFK
FOREIGN KEY (AC_Email) REFERENCES Accounts(Email);

-- CartItemFK

ALTER TABLE CartItems
ADD CONSTRAINT CI_ShoppingCartFK
FOREIGN KEY (SC_ShoppingCartID) REFERENCES ShoppingCarts(ShoppingCartID);

ALTER TABLE CartItems
ADD CONSTRAINT CI_ProductFK
FOREIGN KEY (PD_SKU) REFERENCES Products(SKU);

-- OrderFK

ALTER TABLE Orders
ADD CONSTRAINT OD_ShippingAddressFK
FOREIGN KEY (SA_ShippingAddressID) REFERENCES ShippingAddress(ShippingAddressID);

ALTER TABLE Orders
ADD CONSTRAINT OD_CustomerFK
FOREIGN KEY (CM_CustomerNumber) REFERENCES Customers(CustomerNumber);

ALTER TABLE Orders
ADD CONSTRAINT OD_ShoppingcartFK
FOREIGN KEY (SC_ShoppingCartID) REFERENCES ShoppingCarts(ShoppingCartID);

-- InvoiceFK

ALTER TABLE Invoices
ADD CONSTRAINT IV_BillingAddressFK
FOREIGN KEY (BA_BillingAddressID) REFERENCES BillingAddress(BillingAddressID);

ALTER TABLE Invoices
ADD CONSTRAINT IV_OrderFK
FOREIGN KEY (OD_OrderNumber) REFERENCES Orders(OrderNumber);

-- ShippingAddressFK
ALTER TABLE ShippingAddress
ADD CONSTRAINT SA_CustomerFK
FOREIGN KEY (CM_CustomerNumber) REFERENCES Customers(CustomerNumber);

-- BillingAddressFK
ALTER TABLE BillingAddress
ADD CONSTRAINT BA_CustomerFK
FOREIGN KEY (CM_CustomerNumber) REFERENCES Customers(CustomerNumber);

-- ShoppingCartFK
ALTER TABLE ShoppingCarts
ADD CONSTRAINT SC_CustomerFK
FOREIGN KEY (AC_Email) REFERENCES Accounts(Email);
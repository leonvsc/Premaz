CREATE DATABASE IF NOT EXISTS `premaz`;

USE `premaz`;

CREATE TABLE `Customers` (
	`CustomerNumber` INT,
    `FirstName` VARCHAR(35),
    `LastName` VARCHAR(35),
    `Address` VARCHAR(35),
    `HouseNumber` VARCHAR(6),
    `PostalCode` VARCHAR(6),
    `City` VARCHAR(35),
    CONSTRAINT `CustomersPK`
    	PRIMARY KEY (`CustomerNumber`)
);

CREATE TABLE `Accounts` (
    `Email` VARCHAR(30),
    `CT_CustomerNumber` INT,
    `SC_ShoppingCartID` INT,
    `OD_OrderNumber` VARCHAR(8),
    `Password` VARCHAR(128),
    `Role` VARCHAR(20),
    CONSTRAINT `AccountsPK`
    	PRIMARY KEY (`Email`)
);

CREATE TABLE `Orders` (
    `OrderNumber` VARCHAR(8),
    `PM_PaymentID` VARCHAR(8),
    `SC_ShoppingcartID` INT,
    `DeliveryAddress` VARCHAR(35),
    `DeliveryHouseNumber` VARCHAR(6),
    `DeliveryPostalCode` VARCHAR(6),
    `DeliveryCity` VARCHAR(35),
    `Track&Trace` VARCHAR(15),
    `OrderStatus` VARCHAR(20),
    CONSTRAINT `OrdersPK`
    	PRIMARY KEY (`OrderNumber`)
);

CREATE TABLE `Payments` (
    `PaymentID` VARCHAR(8),
    `IV_InvoiceNumber` VARCHAR(8),
    `Price` FLOAT,
    `Currency` VARCHAR(3),
    `Method` VARCHAR(20),
    `PaymentStatus` VARCHAR(20),
    CONSTRAINT `PaymentsPK`
    	PRIMARY KEY (`PaymentID`)
);

CREATE TABLE `Invoices` (
    `InvoiceNumber` VARCHAR(8),
    `VATNumber` VARCHAR(20),
    `InvoiceAddress` VARCHAR(35),
    `InvoiceHouseNumber` VARCHAR(6),
    `InvoicePostalCode` VARCHAR(6),
    `InvoiceCity` VARCHAR(35),
    CONSTRAINT `InvoicesPK`
    	PRIMARY KEY (`InvoiceNumber`)
);

CREATE TABLE `Products` (
    `SKU` VARCHAR(30),
    `Price` FLOAT,
    `Stock` INT,
    `Category` VARCHAR(35),
    `ShortDescription` TEXT,
    `Specifications` TEXT,
    CONSTRAINT `ProductsPK`
    	PRIMARY KEY (`SKU`)
);

CREATE TABLE `ShoppingCartRows` (
    `ShoppingCartRowID` INT,
    `PD_SKU` VARCHAR(30),
    `SC_ShoppingCartID` INT,
    `Quantity` INT,
    CONSTRAINT `ShoppingCartRowsPK`
    	PRIMARY KEY (`ShoppingCartRowID`)
);

CREATE TABLE `ShoppingCarts` (
    `ShoppingCartID` INT,
    `SCR_ShoppingCartRowID` INT,
    CONSTRAINT `ShoppingCartsPK`
    	PRIMARY KEY (`ShoppingCartID`)
);


-- AccountsFK

ALTER TABLE Accounts
ADD CONSTRAINT AC_CustomerFK
FOREIGN KEY (CT_CustomerNumber) REFERENCES Customers(CustomerNumber);

ALTER TABLE Accounts
ADD CONSTRAINT AC_ShoppingcartFK
FOREIGN KEY (SC_ShoppingcartID) REFERENCES ShoppingCarts(ShoppingCartID);

ALTER TABLE Accounts
ADD CONSTRAINT AC_OrderFK
FOREIGN KEY (OD_OrderNumber) REFERENCES Orders(OrderNumber);

-- OrdersFK

ALTER TABLE Orders
ADD CONSTRAINT OD_PaymentFK
FOREIGN KEY (PM_PaymentID) REFERENCES Payments(PaymentID);

ALTER TABLE Orders
ADD CONSTRAINT OD_ShoppingcartFK
FOREIGN KEY (SC_ShoppingCartID) REFERENCES ShoppingCarts(ShoppingCartID);

-- PaymentsFK

ALTER TABLE Payments
ADD CONSTRAINT PM_InvoicesFK
FOREIGN KEY (IV_InvoiceNumber) REFERENCES Invoices(InvoiceNumber);

-- ShoppingCartRowsFK

ALTER TABLE ShoppingCartRows
ADD CONSTRAINT SCR_ProductsFK
FOREIGN KEY (PD_SKU) REFERENCES Products(SKU);

ALTER TABLE ShoppingCartRows
ADD CONSTRAINT SCR_ShoppingCartFK
FOREIGN KEY (SC_ShoppingCartID) REFERENCES ShoppingCarts(ShoppingCartID);

-- ShoppingCartFK

ALTER TABLE ShoppingCarts
ADD CONSTRAINT SC_ShoppingCartRowFK
FOREIGN KEY (SCR_ShoppingCartRowID) REFERENCES ShoppingCartRows(ShoppingCartRowID);
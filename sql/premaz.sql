CREATE DATABASE IF NOT EXISTS `premaz`;

USE `premaz`;

CREATE TABLE `Customers` (
	`CustomerNumber` INT NOT NULL,
    `FirstName` VARCHAR(35) NOT NULL,
    `LastName` VARCHAR(35) NOT NULL,
    `Address` VARCHAR(35) NOT NULL,
    `HouseNumber` VARCHAR(6) NOT NULL,
    `PostalCode` VARCHAR(6) NOT NULL,
    `City` VARCHAR(35) NOT NULL,
    CONSTRAINT `CustomersPK`
    	PRIMARY KEY (`CustomerNumber`)
);

CREATE TABLE `Accounts` (
    `Email` VARCHAR(30) NOT NULL,
    `CT_CustomerNumber` INT,
    `SC_ShoppingCartID` INT,
    `OD_OrderNumber` VARCHAR(8),
    `Password` VARCHAR(128) NOT NULL,
    `Role` VARCHAR(20) NOT NULL,
    CONSTRAINT `AccountsPK`
    	PRIMARY KEY (`Email`)
);

CREATE TABLE `Orders` (
    `OrderNumber` VARCHAR(8) NOT NULL,
    `PM_PaymentID` VARCHAR(8),
    `SC_ShoppingcartID` INT,
    `DeliveryAddress` VARCHAR(35) NOT NULL,
    `DeliveryHouseNumber` VARCHAR(6) NOT NULL,
    `DeliveryPostalCode` VARCHAR(6) NOT NULL,
    `DeliveryCity` VARCHAR(35) NOT NULL,
    `Track&Trace` VARCHAR(15),
    `OrderStatus` VARCHAR(20) NOT NULL,
    CONSTRAINT `OrdersPK`
    	PRIMARY KEY (`OrderNumber`)
);

CREATE TABLE `Payments` (
    `PaymentID` VARCHAR(8) NOT NULL,
    `IV_InvoiceNumber` VARCHAR(8),
    `Price` FLOAT NOT NULL,
    `Currency` VARCHAR(3) NOT NULL,
    `Method` VARCHAR(20) NOT NULL,
    `PaymentStatus` VARCHAR(20) NOT NULL,
    CONSTRAINT `PaymentsPK`
    	PRIMARY KEY (`PaymentID`)
);

CREATE TABLE `Invoices` (
    `InvoiceNumber` VARCHAR(8) NOT NULL,
    `VATNumber` VARCHAR(20),
    `InvoiceAddress` VARCHAR(35) NOT NULL,
    `InvoiceHouseNumber` VARCHAR(6) NOT NULL,
    `InvoicePostalCode` VARCHAR(6) NOT NULL,
    `InvoiceCity` VARCHAR(35) NOT NULL,
    CONSTRAINT `InvoicesPK`
    	PRIMARY KEY (`InvoiceNumber`)
);

CREATE TABLE `Products` (
    `SKU` VARCHAR(30) NOT NULL,
    `Price` FLOAT NOT NULL,
    `Stock` INT NOT NULL,
    `Category` VARCHAR(35) NOT NULL,
    `ShortDescription` TEXT NOT NULL,
    `Specifications` TEXT,
    CONSTRAINT `ProductsPK`
    	PRIMARY KEY (`SKU`)
);

CREATE TABLE `ShoppingCartRows` (
    `ShoppingCartRowID` INT NOT NULL,
    `PD_SKU` VARCHAR(30) NOT NULL,
    `SC_ShoppingCartID` INT NOT NULL,
    `Quantity` INT NOT NULL,
    CONSTRAINT `ShoppingCartRowsPK`
    	PRIMARY KEY (`ShoppingCartRowID`)
);

CREATE TABLE `ShoppingCarts` (
    `ShoppingCartID` INT NOT NULL,
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
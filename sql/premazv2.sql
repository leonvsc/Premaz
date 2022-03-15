CREATE DATABASE IF NOT EXISTS `premaz`;

USE `premaz`;

CREATE TABLE `Customers` (
	`CustomerNumber` VARCHAR(8) NOT NULL,
    `AC_Email` VARCHAR(50) NOT NULL,
    `BA_BillingAddressID` INT,
    `SA_ShippingAddressID` INT,
    `SC_ShoppingCartID` INT,
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
    `ShippingAddressID` INT NOT NULL,
    `Street` VARCHAR(50) NOT NULL,
    `HouseNumber` VARCHAR(6) NOT NULL,
    `PostalCode` VARCHAR(6) NOT NULL,
    `City` VARCHAR(50) NOT NULL,
    `Country` VARCHAR(50) NOT NULL,
    CONSTRAINT `ShippingAddressPK`
        PRIMARY KEY (`ShippingAddressID`)
);

CREATE TABLE `BillingAddress` (
    `BillingAddressID` INT NOT NULL,
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
    `Price` FLOAT NOT NULL,
    `Stock` INT NOT NULL,
    `Category` VARCHAR(30) NOT NULL,
    CONSTRAINT `ProductsPK`
    	PRIMARY KEY (`SKU`)
);

CREATE TABLE `ShoppingCarts` (
    `ShoppingCartID` INT NOT NULL,
    `TotalPrice` FLOAT NOT NULL,
    CONSTRAINT `ShoppingCartsPK`
    	PRIMARY KEY (`ShoppingCartID`)
);

CREATE TABLE `CartItems` (
    `CartItemID` INT NOT NULL,
    `SC_ShoppingCartID` INT NOT NULL,
    `PD_SKU` VARCHAR(20) NOT NULL,
    `Quantity` INT NOT NULL,
    CONSTRAINT `CartItemsPK`
        PRIMARY KEY (`CartItemID`)
);

CREATE TABLE `Orders` (
    `OrderNumber` VARCHAR(8) NOT NULL,
    `SA_ShippingAddressID` INT NOT NULL,
    `CM_CustomerNumber` VARCHAR(8) NOT NULL,
    `PM_PaymentID` VARCHAR(8) NOT NULL,
    `SC_ShoppingCartID` INT NOT NULL,
    `Track&Trace` VARCHAR(20),
    `OrderStatus` VARCHAR(20) NOT NULL,
    CONSTRAINT `OrderPK`
        PRIMARY KEY (`OrderNumber`)
);

CREATE TABLE `Payment` (
    `PaymentID` VARCHAR(8) NOT NULL,
    `Price` FLOAT NOT NULL,
    `Currency` VARCHAR(3) NOT NULL,
    `Method` VARCHAR(20) NOT NULL,
    `PaymentStatus` VARCHAR(20) NOT NULL,
    CONSTRAINT `PaymentPK`
    	PRIMARY KEY (`PaymentID`)
);

CREATE TABLE `Invoice` (
    `InvoiceNumber` VARCHAR(8) NOT NULL,
    `BA_BillingAddressID` INT NOT NULL,
    `PM_PaymentID` VARCHAR(8) NOT NULL,
    `VATNumber` VARCHAR(20),
    CONSTRAINT `InvoicePK`
        PRIMARY KEY(`InvoiceNumber`)
);
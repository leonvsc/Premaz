USE `premaz`;

-- Vernieuwd
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('niels-warnaar@live.nl', 'Password1', 'Admin');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('johandevries@ziggo.nl', 'Password2', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('rietveldsandra@kpnmail.nl', 'Password3', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('merelvdam@gmail.com', 'Password4', 'Employee');

INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-LOW-001', 'Keyboard', 24.99, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-ERG-HIG-001', 'Muis', 64.99, 20, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-001', 'Keyboard', 80.00, 28, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-002', 'Keyboard', 65.50, 10, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-MID-002', 'Keyboard', 45.00, 47, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-001', 'Monitor', 150.00, 12, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-001', 'USB', 15.00, 149, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('EXT-HDD-MID-001', 'Drive', 65.00, 39, 'External Drive');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-HIG-001', 'Keyboard', 63.00, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-AMO-HIG-001', 'Monitor', 350.00, 18, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-002', 'Monitor', 145.00, 21, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-128-LOW-001', 'USB', 26.00, 121, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-002', 'USB', 13.99, 265, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('EXT-SSD-MID-001', 'Drive', 115.00, 72, 'External Drive');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-001', 'Keyboard', 120.00, 42, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-GAM-HIG-001', 'Muis', 80.00, 31, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-OFI-LOW-001', 'Muis', 9.99, 372, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-MID-001', 'Monitor', 219.99, 43, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-002', 'Keyboard', 149.99, 14, 'Keyboard');

INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`,  `FirstName`, `LastName`, `PhoneNumber`) VALUES ('CM00001', 'niels-warnaar@live.nl', 'Niels', 'Warnaar', 0612457892);
INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`,  `FirstName`, `LastName`, `PhoneNumber`) VALUES ('CM00002', 'johandevries@ziggo.nl', 'Johan', 'de Vries', 0645783210);
INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`,  `FirstName`, `LastName`, `PhoneNumber`) VALUES ('CM00003', 'rietveldsandra@kpnmail.nl', 'Sandra', 'Rietveld', 0689741326);
INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`,  `FirstName`, `LastName`, `PhoneNumber`) VALUES ('CM00004', 'merelvdam@gmail.com', 'Merel', 'van Dam', 0614852369);

INSERT INTO  `ShippingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00001', 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', 'Nederland');
INSERT INTO  `ShippingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00002', 'Pompmolenlaan', '10e', '3447GK', 'Woerden', 'Nederland');
INSERT INTO  `ShippingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00003', 'Klaprooswiede', '20a', '3448JJ', 'Woerden', 'Nederland');
INSERT INTO  `ShippingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00004', 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', 'Nederland');

INSERT INTO `BillingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00001', 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', 'Nederland');
INSERT INTO `BillingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00002', 'Dwergroosweide', '34', '3448JJ', 'Woerden', 'Nederland');
INSERT INTO `BillingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00003', 'Klaprooswiede', '20a', '3448JJ', 'Woerden', 'Nederland');
INSERT INTO `BillingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('CM00004', 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', 'Nederland');

INSERT INTO `ShoppingCarts` (`AC_Email`) VALUES ('niels-warnaar@live.nl');
INSERT INTO `ShoppingCarts` (`AC_Email`) VALUES ('johandevries@ziggo.nl');
INSERT INTO `ShoppingCarts` (`AC_Email`) VALUES ('rietveldsandra@kpnmail.nl');
INSERT INTO `ShoppingCarts` (`AC_Email`) VALUES ('merelvdam@gmail.com');

INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000001', 1, 'CM00001', 1, 'Betaald', '2021-11-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000002', 2, 'CM00002', 2, 'Afgeleverd', '2021-01-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000003', 3, 'CM00003', 3, 'Betaald', '2021-02-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000004', 4, 'CM00004', 4, 'Verzonden', '2021-03-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000005', 1, 'CM00001', 1, 'Betaald', '2021-03-06', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000006', 2, 'CM00002', 2, 'Afgeleverd', '2021-05-02', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000007', 3, 'CM00003', 3, 'Betaald', '2021-02-01', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000008', 4, 'CM00004', 4, 'Verzonden', '2021-10-15', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000009', 1, 'CM00001', 1, 'Betaald', '2021-09-13', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000010', 2, 'CM00002', 2, 'Afgeleverd', '2021-08-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000011', 3, 'CM00003', 3, 'Betaald', '2021-12-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000012', 4, 'CM00004', 4, 'Verzonden', '2021-05-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000013', 1, 'CM00001', 1, 'Betaald', '2021-03-24', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000014', 2, 'CM00002', 2, 'Afgeleverd', '2021-10-29', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000015', 3, 'CM00003', 3, 'Betaald', '2021-09-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000016', 4, 'CM00004', 4, 'Verzonden', '2021-04-09', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000017', 1, 'CM00001', 1, 'Betaald', '2021-11-20', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000018', 2, 'CM00002', 2, 'Afgeleverd', '2021-11-08', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000019', 3, 'CM00003', 3, 'Betaald', '2021-12-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000020', 4, 'CM00004', 4, 'Verzonden', '2021-12-06', 20);

INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000001', 2, 'OD000001', 'NL8120.53.576.B.01', '2021-11-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000002', 2, 'OD000002', 'NL8120.53.576.B.01', '2021-01-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000003', 2, 'OD000003', 'NL8120.53.576.B.01', '2021-02-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000004', 2, 'OD000004', 'NL8120.53.576.B.01', '2021-03-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000005', 2, 'OD000005', 'NL8120.53.576.B.01', '2021-03-06');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000006', 3, 'OD000006', NULL, '2021-05-02');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000007', 3, 'OD000007', NULL, '2021-02-01');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000008', 3, 'OD000008', NULL, '2021-10-15');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000009', 3, 'OD000009', NULL, '2021-09-13');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000010', 3, 'OD000010', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000011', 4, 'OD000011', NULL, '2021-12-25');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000012', 4, 'OD000012', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000013', 4, 'OD000013', NULL, '2021-03-24');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000014', 4, 'OD000014', NULL, '2021-10-29');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000015', 4, 'OD000015', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000016', 1, 'OD000016', NULL, '2021-04-09');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000017', 1, 'OD000017', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000018', 1, 'OD000018', NULL, '2021-11-08');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000019', 1, 'OD000019', NULL, '2021-12-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('IN000020', 1, 'OD000020', NULL, '2021-12-06');

INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'USB-128-LOW-001', 2);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'MON-LCD-MID-001', 1);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'KEY-MEC-MID-002', 4);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (2, 'KEY-MEM-LOW-001', 1);


USE `premaz`;

-- Vernieuwd
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('niels-warnaar@live.nl', 'Password1', 'Admin');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('johandevries@ziggo.nl', 'Password2', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('rietveldsandra@kpnmail.nl', 'Password3', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('merelvdam@gmail.com', 'Password4', 'Employee');

INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-LOW-001', 'Logitech - Klein bedraad membraam toetsenbord', 24.99, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-ERG-HIG-001', 'Logitech - Ergonomische muis', 64.99, 20, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-001', 'Logitech - Klein mechanisch toetsenbord', 80.00, 28, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-002', 'Razer - Gekleurd mechanisch toetsenbord', 65.50, 10, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-MID-002', 'Thrust - Membraam gaming toetsenbord', 45.00, 47, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-001', 'Samsung - Standaard lcd beeldscherm', 150.00, 12, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-001', 'SanDisk - USB stick 64GB', 15.00, 149, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('EXT-HDD-MID-001', 'Toshiba - Externe Harde Schijf', 65.00, 39, 'External Drive');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-HIG-001', 'Logitech - Klein membraam toetsenbord', 63.00, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-AMO-HIG-001', 'AOC - Amoled 4k beeldscherm', 350.00, 18, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-002', 'Samsung - Goedkoop lcd beeldscherm', 145.00, 21, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-128-LOW-001', 'SanDisk - USB stick 128GB', 26.00, 121, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-002', 'Kingston - Degelijke USB stick 64GB', 13.99, 265, 'USB');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('EXT-SSD-MID-001', 'Samsung - Externe SSD', 115.00, 72, 'External Drive');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-001', 'Ergowerken - Mechanisch toetsenbord', 120.00, 42, 'Keyboard');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-GAM-HIG-001', 'Thrust - Gaming muis', 80.00, 31, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MOU-OFI-LOW-001', 'Logitech - Goede kantoor muis', 9.99, 372, 'Mouse');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-MID-001', 'MoSamsung - Haarscherp lcd beeldschermnitor', 219.99, 43, 'Monitor');
INSERT INTO `Products` (`SKU`, `ProductName`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-002', 'Corsiar - Mechanisch gaming toetsenbord', 149.99, 14, 'Keyboard');

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

INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000001', 1, 'CM00001', 1, 'Betaald', '2021-11-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000002', 2, 'CM00002', 2, 'Afgeleverd', '2021-01-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000003', 3, 'CM00003', 3, 'Betaald', '2021-02-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000004', 4, 'CM00004', 4, 'Verzonden', '2021-03-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000005', 1, 'CM00001', 1, 'Betaald', '2021-03-06', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000006', 2, 'CM00002', 2, 'Afgeleverd', '2021-05-02', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000007', 3, 'CM00003', 3, 'Betaald', '2021-02-01', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000008', 4, 'CM00004', 4, 'Verzonden', '2021-10-15', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000009', 1, 'CM00001', 1, 'Betaald', '2021-09-13', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000010', 2, 'CM00002', 2, 'Afgeleverd', '2021-08-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000011', 3, 'CM00003', 3, 'Betaald', '2021-12-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000012', 4, 'CM00004', 4, 'Verzonden', '2021-05-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000013', 1, 'CM00001', 1, 'Betaald', '2021-03-24', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000014', 2, 'CM00002', 2, 'Afgeleverd', '2021-10-29', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000015', 3, 'CM00003', 3, 'Betaald', '2021-09-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000016', 4, 'CM00004', 4, 'Verzonden', '2021-04-09', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000017', 1, 'CM00001', 1, 'Betaald', '2021-11-20', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000018', 2, 'CM00002', 2, 'Afgeleverd', '2021-11-08', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000019', 3, 'CM00003', 3, 'Betaald', '2021-12-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `SC_ShoppingcartID`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('000020', 4, 'CM00004', 4, 'Verzonden', '2021-12-06', 20);

INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000001', 2, '000001', 'NL8120.53.576.B.01', '2021-11-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000002', 2, '000002', 'NL8120.53.576.B.01', '2021-01-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000003', 2, '000003', 'NL8120.53.576.B.01', '2021-02-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000004', 2, '000004', 'NL8120.53.576.B.01', '2021-03-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000005', 2, '000005', 'NL8120.53.576.B.01', '2021-03-06');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000006', 3, '000006', NULL, '2021-05-02');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000007', 3, '000007', NULL, '2021-02-01');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000008', 3, '000008', NULL, '2021-10-15');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000009', 3, '000009', NULL, '2021-09-13');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000010', 3, '000010', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000011', 4, '000011', NULL, '2021-12-25');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000012', 4, '000012', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000013', 4, '000013', NULL, '2021-03-24');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000014', 4, '000014', NULL, '2021-10-29');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000015', 4, '000015', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000016', 1, '000016', NULL, '2021-04-09');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000017', 1, '000017', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000018', 1, '000018', NULL, '2021-11-08');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000019', 1, '000019', NULL, '2021-12-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES ('000020', 1, '000020', NULL, '2021-12-06');

INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'USB-128-LOW-001', 2);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'MON-LCD-MID-001', 1);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'KEY-MEC-MID-002', 4);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (2, 'KEY-MEM-LOW-001', 1);


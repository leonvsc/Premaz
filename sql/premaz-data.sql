USE `premaz`;

-- Vernieuwd
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('niels-warnaar@live.nl', 'Password1', 'Admin');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('johandevries@ziggo.nl', 'Password2', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('rietveldsandra@kpnmail.nl', 'Password3', 'User');
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('merelvdam@gmail.com', 'Password4', 'Employee');

INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-LOW-001', 24.99, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MOU-ERG-HIG-001', 64.99, 20, 'Mouse');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-001', 80.00, 28, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-002', 65.50, 10, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-MID-002', 45.00, 47, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-001', 150.00, 12, 'Monitor');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-001', 15.00, 149, 'USB');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('EXT-HDD-MID-001', 65.00, 39, 'External Drive');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-HIG-001', 63.00, 32, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MON-AMO-HIG-001', 350.00, 18, 'Monitor');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-LOW-002', 145.00, 21, 'Monitor');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('USB-128-LOW-001', 26.00, 121, 'USB');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('USB-64G-MID-002', 13.99, 265, 'USB');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('EXT-SSD-MID-001', 115.00, 72, 'External Drive');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-001', 120.00, 42, 'Keyboard');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MOU-GAM-HIG-001', 80.00, 31, 'Mouse');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MOU-OFI-LOW-001', 9.99, 372, 'Mouse');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MON-LCD-MID-001', 219.99, 43, 'Monitor');
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-HIG-002', 149.99, 14, 'Keyboard');

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

INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000001', 145.50, 'EUR', "iDeal", 'Betaald', '2021-11-10');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000002', 24.99, 'EUR', 'PayPal', 'Betaald', '2021-01-10');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000003', 64.99, 'EUR', 'iDeal', 'Betaald', '2021-02-05');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000004', 190.00, 'EUR', 'BankTransfer', 'Betaald', '2021-03-05');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000005', 140.00, 'EUR', "iDeal", 'Betaald', '2021-03-06');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000006', 23.95, 'EUR', 'PayPal', 'Betaald', '2021-05-02');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000007', 1500.00, 'EUR', 'iDeal', 'Betaald', '2021-02-01');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000008', 635.50, 'EUR', 'iDeal', 'Betaald', '2021-10-15');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000009', 30.00, 'EUR', "BankTransfer", 'Betaald', '2021-09-13');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000010', 21.50, 'EUR', 'BankTransfer', 'Onbetaald', NULL);
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000011', 87.60, 'EUR', 'iDeal', 'Betaald', '2021-12-25');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000012', 201.50, 'EUR', 'BankTransfer', 'Onbetaald', NULL);
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000013', 306.30, 'EUR', "iDeal", 'Betaald', '2021-03-24');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000014', 20.00, 'EUR', 'PayPal', 'Betaald', '2021-10-29');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000015', 26.30, 'EUR', 'BankTransfer', 'Onbetaald', NULL);
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000016', 90.20, 'EUR', 'iDeal', 'Betaald', '2021-04-09');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000017', 602.50, 'EUR', "BankTransfer", 'Onbetaald', NULL);
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000018', 68.30, 'EUR', 'PayPal', 'Betaald', '2021-11-08');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000019', 89.70, 'EUR', 'iDeal', 'Betaald', '2021-12-10');
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`, `PaymentDate`) VALUES ('PM000020', 30.20, 'EUR', 'iDeal', 'Betaald', '2021-12-06');

INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000001', 1, 'CM00001', 'PM000001', 1, 'TRA000000000001', 'Betaald', '2021-11-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000002', 2, 'CM00002', 'PM000002', 2, 'TRA000000000002', 'Afgeleverd', '2021-01-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000003', 3, 'CM00003', 'PM000003', 3, 'TRA000000000003', 'Betaald', '2021-02-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000004', 4, 'CM00004', 'PM000004', 4, 'TRA000000000004', 'Verzonden', '2021-03-05', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000005', 1, 'CM00001', 'PM000005', 1, 'TRA000000000005', 'Betaald', '2021-03-06', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000006', 2, 'CM00002', 'PM000006', 2, 'TRA000000000006', 'Afgeleverd', '2021-05-02', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000007', 3, 'CM00003', 'PM000007', 3, 'TRA000000000007', 'Betaald', '2021-02-01', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000008', 4, 'CM00004', 'PM000008', 4, 'TRA000000000008', 'Verzonden', '2021-10-15', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000009', 1, 'CM00001', 'PM000009', 1, 'TRA000000000009', 'Betaald', '2021-09-13', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000010', 2, 'CM00002', 'PM000010', 2, 'TRA000000000010', 'Afgeleverd', '2021-08-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000011', 3, 'CM00003', 'PM000011', 3, 'TRA000000000011', 'Betaald', '2021-12-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000012', 4, 'CM00004', 'PM000012', 4, 'TRA000000000012', 'Verzonden', '2021-05-25', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000013', 1, 'CM00001', 'PM000013', 1, 'TRA000000000013', 'Betaald', '2021-03-24', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000014', 2, 'CM00002', 'PM000014', 2, 'TRA000000000014', 'Afgeleverd', '2021-10-29', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000015', 3, 'CM00003', 'PM000015', 3, 'TRA000000000015', 'Betaald', '2021-09-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000016', 4, 'CM00004', 'PM000016', 4, 'TRA000000000016', 'Verzonden', '2021-04-09', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000017', 1, 'CM00001', 'PM000017', 1, 'TRA000000000017', 'Betaald', '2021-11-20', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000018', 2, 'CM00002', 'PM000018', 2, 'TRA000000000018', 'Afgeleverd', '2021-11-08', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000019', 3, 'CM00003', 'PM000019', 3, 'TRA000000000019', 'Betaald', '2021-12-10', 20);
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `TrackAndTrace`, `OrderStatus`, `OrderDate`, `TotalPrice`) VALUES ('OD000020', 4, 'CM00004', 'PM000020', 4, 'TRA000000000020', 'Verzonden', '2021-12-06', 20);

INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000001', 2, 'PM000001', 'NL8120.53.576.B.01', '2021-11-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000002', 2, 'PM000002', 'NL8120.53.576.B.01', '2021-01-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000003', 2, 'PM000003', 'NL8120.53.576.B.01', '2021-02-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000004', 2, 'PM000004', 'NL8120.53.576.B.01', '2021-03-05');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000005', 2, 'PM000005', 'NL8120.53.576.B.01', '2021-03-06');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000006', 3, 'PM000006', NULL, '2021-05-02');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000007', 3, 'PM000007', NULL, '2021-02-01');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000008', 3, 'PM000008', NULL, '2021-10-15');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000009', 3, 'PM000009', NULL, '2021-09-13');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000010', 3, 'PM000010', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000011', 4, 'PM000011', NULL, '2021-12-25');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000012', 4, 'PM000012', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000013', 4, 'PM000013', NULL, '2021-03-24');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000014', 4, 'PM000014', NULL, '2021-10-29');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000015', 4, 'PM000015', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000016', 1, 'PM000016', NULL, '2021-04-09');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000017', 1, 'PM000017', NULL, NULL);
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000018', 1, 'PM000018', NULL, '2021-11-08');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000019', 1, 'PM000019', NULL, '2021-12-10');
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`, `InvoiceDate`) VALUES ('IN000020', 1, 'PM000020', NULL, '2021-12-06');

INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'USB-128-LOW-001', 2);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'MON-LCD-MID-001', 1);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (1, 'KEY-MEC-MID-002', 4);
INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (2, 'KEY-MEM-LOW-001', 1);


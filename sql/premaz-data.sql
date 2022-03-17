-- Deels vernieuwd
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000001, 'niels-warnaar@live.nl', 0001, 0001, ShoppingCartID, 'Niels', 'Warnaar', 0612457892)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000002, 'johandevries@ziggo.nl', 0002, 0002, ShoppingCartID, 'Johan', 'de Vries', 0645783210)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000003, 'rietveldsandra@kpnmail.nl', 0003, 0003, ShoppingCartID, 'Sandra', 'Rietveld', 0689741326)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000004, 'merelvdam@gmail.com', 0004, 0004, ShoppingCartID, 'Merel', 'van Dam', 0614852369)

-- Vernieuwd
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('niels-warnaar@live.nl', 'Password1', 'Admin')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('johandevries@ziggo.nl', 'Password2', 'User')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('rietveldsandra@kpnmail.nl', 'Password3', 'User')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('merelvdam@gmail.com', 'Password4', 'Employee')

-- Nieuw toegevoegd
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (00001, 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (00002, 'Pompmolenlaan', '10e', '3447GK', 'Woerden', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (00003, 'Klaprooswiede', '20a', '3448JJ', 'Woerden', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (00004, 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', `Nederland`)

-- Nieuw toegevoegd
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (0001, 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (0002, 'Pompmolenlaan', '10e', '3447GK', 'Woerden', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (0003, 'Klaprooswiede', '20a', '3448JJ', 'Woerden', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (0004, 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', `Nederland`)

-- Deels vernieuwd
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000001', 0001, 0000001, 'PM000001', 00000001, 'TRA000000000001', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000002', 0002, 0000002, 'PM000002', 00000002, 'TRA000000000002', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000003', 0003, 0000003, 'PM000003', 00000003, 'TRA000000000003', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000004', 0004, 0000004, 'PM000004', 00000004, 'TRA000000000004', 'Verzonden')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000005', 0001, 0000001, 'PM000005', 00000001, 'TRA000000000005', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000006', 0002, 0000002, 'PM000006', 00000002, 'TRA000000000006', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000007', 0003, 0000003, 'PM000007', 00000003, 'TRA000000000007', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000008', 0004, 0000004, 'PM000008', 00000004, 'TRA000000000008', 'Verzonden')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000009', 0001, 0000001, 'PM000009', 00000001, 'TRA000000000009', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000010', 0002, 0000002, 'PM000010', 00000002, 'TRA000000000010', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000011', 0003, 0000003, 'PM000011', 00000003, 'TRA000000000011', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000012', 0004, 0000004, 'PM000012', 00000004, 'TRA000000000012', 'Verzonden')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000013', 0001, 0000001, 'PM000013', 00000001, 'TRA000000000013', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000014', 0002, 0000002, 'PM000014', 00000002, 'TRA000000000014', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000015', 0003, 0000003, 'PM000015', 00000003, 'TRA000000000015', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000016', 0004, 0000004, 'PM000016', 00000004, 'TRA000000000016', 'Verzonden')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000017', 0001, 0000001, 'PM000017', 00000001, 'TRA000000000017', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000018', 0002, 0000002, 'PM000018', 00000002, 'TRA000000000018', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000019', 0003, 0000003, 'PM000019', 00000003, 'TRA000000000019', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000020', 0004, 0000004, 'PM000020', 00000004, 'TRA000000000020', 'Verzonden')


-- Vernieuwd
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000001', 145.50, 'EUR', "iDeal", 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000002', 24.99, 'EUR', 'PayPal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000003', 64.99, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000004', 190.00, 'EUR', 'BankTransfer', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000005', 140.00, 'EUR', "iDeal", 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000006', 23.95, 'EUR', 'PayPal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000007', 1500.00, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000008', 635.50, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000009', 30.00, 'EUR', "BankTransfer", 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000010', 21.50, 'EUR', 'BankTransfer', 'Onbetaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000011', 87.60, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000012', 201.50, 'EUR', 'BankTransfer', 'Onbetaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000013', 306.30, 'EUR', "iDeal", 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000014', 20.00, 'EUR', 'PayPal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000015', 26.30, 'EUR', 'BankTransfer', 'Onbetaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000016', 90.20, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000017', 602.50, 'EUR', "BankTransfer", 'Onbetaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000018', 68.30, 'EUR', 'PayPal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000019', 89.70, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000020', 30.20, 'EUR', 'iDeal', 'Betaald')

-- Deels vernieuwd
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`) VALUES ('IN000001', BillingAddressID, 'PM000001', NULL)
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`) VALUES ('IN000001', BillingAddressID, 'PM000002', 'NL8120.53.576.B.01')
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`) VALUES ('IN000001', BillingAddressID, 'PM000003', NULL)
INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `PM_PaymentID`, `VATNumber`) VALUES ('IN000001', BillingAddressID, 'PM000004', NULL)

-- Vernieuwd
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEM-LOW-001', 24.99, 32, 'Keyboard')
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('MOU-ERG-HIG-001', 64.99, 20, 'Mouse')
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-001', 80.00, 5, 'Keyboard')
INSERT INTO `Products` (`SKU`, `Price`, `Stock`, `Category`) VALUES ('KEY-MEC-MID-002', 65.50, 10, 'Keyboard')

-- Nieuw toegevoegd
INSERT INTO `CartItems` (`CartItemID`, `SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (CartItemID, ShoppingCartID, SKU, Quantity)
INSERT INTO `CartItems` (`CartItemID`, `SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (CartItemID, ShoppingCartID, SKU, Quantity)
INSERT INTO `CartItems` (`CartItemID`, `SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (CartItemID, ShoppingCartID, SKU, Quantity)
INSERT INTO `CartItems` (`CartItemID`, `SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (CartItemID, ShoppingCartID, SKU, Quantity)

-- Vernieuwd
INSERT INTO `ShoppingCarts` (`ShoppingCartID`, `TotalPrice`) VALUES (000000001, 145,50)
INSERT INTO `ShoppingCarts` (`ShoppingCartID`, `TotalPrice`) VALUES (000000002, 24,99)
INSERT INTO `ShoppingCarts` (`ShoppingCartID`, `TotalPrice`) VALUES (000000003, 64,99)
INSERT INTO `ShoppingCarts` (`ShoppingCartID`, `TotalPrice`) VALUES (000000004, 190,00)
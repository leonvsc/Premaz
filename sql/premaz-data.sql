-- Deels vernieuwd
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000001, 'niels-warnaar@live.nl', BillingAddressID, ShippingAddressID, ShoppingCartID, 'Niels', 'Warnaar', PhoneNumber)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000002, 'johandevries@ziggo.nl', BillingAddressID, ShippingAddressID, ShoppingCartID, 'Johan', 'de Vries', PhoneNumber)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000003, 'rietveldsandra@kpnmail.nl', BillingAddressID, ShippingAddressID, ShoppingCartID, 'Sandra', 'Rietveld', PhoneNumber)
INSERT INTO 'Customers' (`CustomerNumber`, `AC_Email`, `BA_BillingAddressID`, `SA_ShippingAddressID`, `SC_ShoppingCartID`, `FirstName`, `LastName`) VALUES (0000004, 'merelvdam@gmail.com', BillingAddressID, ShippingAddressID, ShoppingCartID, 'Merel', 'van Dam', PhoneNumber)

-- Vernieuwd
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('niels-warnaar@live.nl', 'Password1', 'Admin')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('johandevries@ziggo.nl', 'Password2', 'User')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('rietveldsandra@kpnmail.nl', 'Password3', 'User')
INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('merelvdam@gmail.com', 'Password4', 'Employee')

-- Nieuw toegevoegd
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (ShippingAddressID, 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (ShippingAddressID, 'Pompmolenlaan', '10e', '3447GK', 'Woerden', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (ShippingAddressID, 'Klaprooswiede', '20a', '3448JJ', 'Woerden', `Nederland`)
INSERT INTO  `ShippingAddress` (`ShippingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (ShippingAddressID, 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', `Nederland`)

-- Nieuw toegevoegd
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (BillingAddressID, 'Jacob Barneveldstraat', '69', '3461GA', 'Linschoten', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (BillingAddressID, 'Pompmolenlaan', '10e', '3447GK', 'Woerden', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (BillingAddressID, 'Klaprooswiede', '20a', '3448JJ', 'Woerden', `Nederland`)
INSERT INTO `BillingAddress` (`BillingAddressID`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES (BillingAddressID, 'Amsterdamsestraatweg', '116', '3513AL', 'Utrecht', `Nederland`)

-- Deels vernieuwd
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000001', ShippingAddressID, 0000001, 'PM000001', 00000001, 'TRA000000000001', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000002', ShippingAddressID, 0000002, 'PM000002', 00000002, 'TRA000000000002', 'Afgeleverd')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000003', ShippingAddressID, 0000003, 'PM000003', 00000003, 'TRA000000000003', 'Betaald')
INSERT INTO `Orders` (`OrderNumber`, `SA_ShippingAddressID`, `CM_CustomerNumber`, `PM_PaymentID`, `SC_ShoppingcartID`, `Track&Trace`, `OrderStatus`) VALUES ('OD000004', ShippingAddressID, 0000004, 'PM000004', 00000004, 'TRA000000000004', 'Verzonden')

-- Vernieuwd
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000001', 145.50, 'EUR', "iDeal", 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000002', 24.99, 'EUR', 'PayPal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000003', 64.99, 'EUR', 'iDeal', 'Betaald')
INSERT INTO `Payments` (`PaymentID`, `Price`, `Currency`, `Method`,`PaymentStatus`) VALUES ('PM000004', 190.00, 'EUR', 'iDeal', 'Betaald')

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
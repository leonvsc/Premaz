-- Systeembeheerder
CREATE USER 'Systeembeheerder'@'premaz' IDENTIFIED WITH caching_sha2_password BY 'Password1!';
GRANT ALL PRIVILEGES ON *.* TO 'Systeembeheerder'@'premaz' WITH GRANT OPTION;

-- Medewerker
CREATE USER 'Medewerker'@'premaz' IDENTIFIED WITH caching_sha2_password BY 'Password1!';
GRANT SELECT, UPDATE, INSERT ON premaz.Products TO 'Medewerker'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE ON premaz.Orders TO 'Medewerker'@'premaz' WITH GRANT OPTION;

-- Administratie
CREATE USER 'Administratie'@'premaz' IDENTIFIED WITH caching_sha2_password BY 'Password1!';
GRANT SELECT, UPDATE ON premaz.Invoices TO 'Administratie'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE ON premaz.Payments TO 'Administratie'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.Customers TO 'Administratie'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.BillingAddress TO 'Administratie'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.ShippingAddress TO 'Administratie'@'premaz' WITH GRANT OPTION;

-- Klant
CREATE USER 'Klant'@'premaz' IDENTIFIED WITH caching_sha2_password BY 'Password1!';
GRANT SELECT, UPDATE, INSERT ON premaz.Accounts TO 'Klant'@'premaz' WITH GRANT OPTION;
GRANT SELECT ON premaz.Invoices TO 'Klant'@'premaz' WITH GRANT OPTION;
GRANT SELECT ON premaz.Orders TO 'Klant'@'premaz' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.ShoppingCarts TO 'Klant'@'premaz' WITH GRANT OPTION;

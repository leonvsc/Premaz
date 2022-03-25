-- Systeembeheerder
CREATE USER 'systeembeheerder'@'localhost' IDENTIFIED WITH caching_sha2_password BY 't#X9!daZHxFnzuxHr#tyzhwVP';
GRANT ALL PRIVILEGES ON premaz.* TO 'systeembeheerder'@'localhost' WITH GRANT OPTION;

-- Medewerker
CREATE USER 'medewerker'@'localhost' IDENTIFIED WITH caching_sha2_password BY 't#X9!daZHxFnzuxHr#tyzhwVP';
GRANT SELECT, UPDATE, INSERT ON premaz.Products TO 'medewerker'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE ON premaz.Orders TO 'medewerker'@'localhost' WITH GRANT OPTION;

-- Administratie
CREATE USER 'administratie'@'localhost' IDENTIFIED WITH caching_sha2_password BY 't#X9!daZHxFnzuxHr#tyzhwVP';
GRANT SELECT, UPDATE ON premaz.Invoices TO 'administratie'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE ON premaz.Payments TO 'administratie'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.Customers TO 'administratie'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.BillingAddress TO 'administratie'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.ShippingAddress TO 'administratie'@'localhost' WITH GRANT OPTION;

-- Klant
CREATE USER 'klant'@'localhost' IDENTIFIED WITH caching_sha2_password BY 't#X9!daZHxFnzuxHr#tyzhwVP';
GRANT SELECT, UPDATE, INSERT ON premaz.Accounts TO 'klant'@'localhost' WITH GRANT OPTION;
GRANT SELECT ON premaz.Invoices TO 'klant'@'localhost' WITH GRANT OPTION;
GRANT SELECT ON premaz.Orders TO 'klant'@'localhost' WITH GRANT OPTION;
GRANT SELECT, UPDATE, INSERT ON premaz.ShoppingCarts TO 'klant'@'localhost' WITH GRANT OPTION;

-- Revoke permissies
REVOKE SELECT ON premaz.Invoices FROM 'klant'@'localhost';

-- Check de permissies
SHOW GRANTS FOR 'klant'@'localhost';
-- Hoeveel bestellingen heeft klant 1 gedaan?
SELECT count(OrderNumber) AS TotalOrders FROM Orders WHERE CM_CustomerNumber = "CM00001";

-- Wat is de omzet in maand januari 2021
SELECT cast(sum(Price) AS decimal(10,2)) AS Total_Price FROM Payments WHERE PaymentDate >= '2021-01-01' AND PaymentDate < '2021-02-01';

-- Welke maand wat de omzet het hoogst?
SELECT YEAR(PaymentDate) AS Year, MONTH(PaymentDate) AS Month, cast(SUM(Price) AS decimal(10,2)) AS Total_Sales FROM Payments WHERE PaymentStatus = 'Betaald' GROUP BY YEAR(PaymentDate), MONTH(PaymentDate) ORDER BY Total_Sales DESC LIMIT 1;

-- Hoeveel betaalde orders heeft een klant?
SELECT count(*) AS total FROM `Orders` WHERE CM_CustomerNumber = 'CM00001' AND (OrderStatus = 'Betaald' OR OrderStatus = 'Afgeleverd' OR OrderStatus = 'Verzonden');

-- Hoeveel onbetaalde facturen zijn er?
SELECT count(*) AS total FROM `Orders` WHERE CM_CustomerNumber = 'CM00001' AND OrderStatus = 'Betaald' OR OrderStatus = 'Afgeleverd' OR OrderStatus = 'Verzonden';

-- Hoeveel accounts zijn er?
SELECT count(*) AS totalAccounts FROM Accounts;

-- Wat is de meest gebruikte betalingsmethode?
SELECT Method, count(Method) AS TotalPaymentMethods FROM Payments GROUP BY Method;

-- Wat is de meest gebruikte valuta?
SELECT Currency,count(Currency) AS TotalCurrency FROM Payments GROUP BY Currency;

-- Laat alle betalingen boven bedrag €200,00 zien?
SELECT Price FROM Payments WHERE Price >= '200';

-- Wat is de gemiddelde prijs van alle orders?
SELECT AVG(Price) FROM `Payments`;

-- Wat is het totaal aantal orders van één klant?
SELECT CM_CustomerNumber, Email, OrderNumber, PM_PaymentID, TrackAndTrace, OrderStatus, OrderDate FROM `Accounts` right JOIN Orders ON Orders.CM_CustomerNumber=Orders.CM_CustomerNumber ORDER BY `Accounts`.`Email` ASC;

-- Stored Procedure ophalen van de omzet van een bepaalde maand
DELIMITER //

CREATE PROCEDURE TotalPriceByMonth (
    IN startDate DATE
    IN endDate DATE
)
BEGIN
    SELECT cast(sum(Price) AS decimal(10,2)) AS Total_Price 
    FROM Payments 
    WHERE PaymentDate >= startDate AND PaymentDate < endDate
END //

DELIMITER;

-- Aanroepen met
CALL TotalPriceByMonth(startDate, endDate)

-- Totaal aantal betalingen van een klant ophalen
CREATE FUNCTION totalPayments(CustomerNumber VARCHAR(8)) RETURNS FLOAT(10,2) DETERMINISTIC RETURN(
    SELECT SUM(Payments.Price)
    FROM `Orders`
    RIGHT JOIN Payments ON Orders.PM_PaymentID = Payments.PaymentID
    WHERE CM_CustomerNumber = CustomerNumber
)
-- Aanroepen met
CALL totalPayments(CustomerNumber)

-- Laat alle accounts met de role "User" zien
CREATE VIEW View_accounts AS SELECT Email, Role FROM Accounts WHERE Role = `User`;
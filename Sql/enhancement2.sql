****query 1
INSERT INTO clients
(clientFirstname, clientLastname, clientEmail, clientPassword, comments)
VALUES
("Tony", "Stark", "tony@starkent.com", "Iam1ronM@n", "I am the real Ironman");

****query 2
SELECT clientId, clientFirstname, clientLastname, clientLevel FROM clients;
Update clients SET clientLevel = "3" WHERE clientFirstname = 'Tony';

****query 3
SELECT invId, invMake, invModel, invDescription FROM inventory WHERE invMake = 'GM';
UPDATE inventory SET invDescription = REPLACE(invDescription, 'small interior', 'spacious interior');

****query 4
SELECT carclassification.classificationId, carclassification.classificationName, inventory.invMake, inventory.invModel FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId WHERE carclassification.classificationName = 'SUV';

****query 5
SELECT invId, invMake, invModel, invDescription FROM inventory WHERE invMake = 'Jeep';
DELETE FROM inventory WHERE invId = 1;

****query 6
SELECT invImage, invThumbnail FROM inventory;
UPDATE inventory SET invImage = CONCAT('/phpmotors', invImage), invThumbnail = CONCAT('/phpmotors', invThumbnail);
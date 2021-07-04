# Exercice 01:
## Créer la base codex, créer une table clients avec les colonnes id, lastName, firstName,birthDate, adress, phoneNumber et mail.

SHOW DATABASES;
CREATE DATABASE `codex`;
CREATE TABLE `clients`(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
lastName VARCHAR(50),
firstName VARCHAR(50),
--birthDate VARCHAR(50),
birthDate DATE,
adress VARCHAR(255),
phoneNumber INT,
mail VARCHAR(255));

# Exercice 02:
## Dans la base de donnée 'webDevelopment',ajouter à la table languages une colonne versions (VARCHAR).

SHOW DATABASES;
USE DATABASE webDevelopment;
ALTER TABLE `languages` ADD `versions` VARCHAR(50);
SHOW COLUMNS FROM `frameworks`;
DESCRIBE `frameworks`;

# Exercice 03:
## Ajouter à la table frameworks une colonne version (INT).

ALTER TABLE 'frameworks' ADD version INT;

# Exercice 04: 
## Dans la table languages renommer la colonne versions en version.

ALTER TABLE 'languages' CHANGE 'versions' 'version' VARCHAR(50);

# Exercice 05: 
## Dans la table frameworks, renommer la colonne name en framework.

ALTER TABLE 'frameworks' RENAME COLUMN name TO framework;
ALTER TABLE 'frameworks' CHANGE 'name' 'framework' VARCHAR(50);
ou
ALTER TABLE frameworks CHANGE 'name' 'framework';

# Exercice 06:
## à la table frameworks changer le type de la colonne version en VARCHAR de taille 10.

ALTER TABLE 'frameworks' CHANGE 'version' 'version' VARCHAR(10);

# Bonus:
## Dans la base codex, dans la table clients et en une seule requête :
-supprimer la colonne phoneNumber
-renommer la colonne mail par mails
--ajouter les colonnes zipCode(VARCHAR) et city(VARCHAR)

ALTER TABLE clients DROP 'phoneNumber', CHANGE 'mail' 'mails' VARCHAR(30), ADD 'zipCode' VARCHAR(10), ADD 'city' VARCHAR();


<?php

$serveur="localhost";
$login="root";
$pass="";

try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=codex",$login,$pass);//j'utilise les bloc try and catch pour la gestion des erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //exercice 1:
    // "Créer la base codex, créer une table clients avec les colonnes 
    // id, lastName, firstName,birthDate, adress, phoneNumber et mail."

    $connexion->exec("CREATE DATABASE codex");// j'ai crée une base de donnée codex
    $codesql= "CREATE TABLE clients(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        lastName VARCHAR (50),
        firstName VARCHAR (50),
        birthDate VARCHAR (70),
        adress VARCHAR (70),
        phoneNumber INT,
        email VARCHAR (50))";
    
    // exercice 2:
    // "Dans la base de donnée 'webDevelopment',ajouter à la table languages une colonne versions (VARCHAR)."
    
    // $codesql= "ALTER TABLE languages ADD lastName VARCHAR(50)";

    // exercice 3:
    // "Ajouter à la table frameworks une colonne version (INT)"
   
    // $codesql= "ALTER TABLE framworks ADD version INT";

    // exercice 4:
    // "Dans la table languages renommer la colonne versions en version."

    // $modif="ALTER TABLE languages CHANGE `lastName` `version`;"//cette partie je l'ai fait manuellement sur phpMyadmin car la requette ne passait pas
  
    // exercice 5:
    // "Dans la table frameworks, renommer la colonne name en framework."

    // $modif="ALTER TABLE `framworks` CHANGE `name` `framwork` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;";
 
    // exercice 6:
    //  "à la table frameworks changer le type de la colonne version en VARCHAR de taille 10."
    
    // $codesql="ALTER TABLE `framworks` CHANGE `version` `version` VARCHAR(10) NULL DEFAULT NULL";
    
    // bonus:
    // "Dans la base codex, dans la table clients et en une seule requête :
    // -supprimer la colonne phoneNumber
    // -renommer la colonne mail par mails
    // --ajouter les colonnes zipCode(VARCHAR) et city(VARCHAR)"

    // $codesql="ALTER TABLE `clients` DROP `phoneNumber`,
    // CHANGE `email` `mails` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
    //     ADD zipCode VARCHAR(50),
    //     ADD city VARCHAR(50)";
    
    $connexion->exec($codesql);
    echo "base de donnée codex créée<br>";
    // echo "connexion à la base de donnée codex est reussi<br>";
    // echo "ajouter la table clients dans la base de donnée codex avec 7 colonnes<br>";
    // echo "ajouter une colonne de type varchar à la base languages de la base de donnée webdevelopment <br>";
    // echo "ajouter une colonne de type INT  à la base framworks de la base de donnée webdevelopment <br>";
    // echo "changer le nom de la colonne lastName a version dans la table languages<br>";
    // echo "changer le nom de la colonne name a framwork dans la table frameworks<br>";
    // echo "changer le type de la colonne version de la table framworks de int a varchar 10 <br>";
    // echo "connexion à la base de donnée codex reussi<br>";
    // echo "bonus reussi";
}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();
}
?>

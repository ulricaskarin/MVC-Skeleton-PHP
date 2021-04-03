/**
 * Example SQL create Table
 */
 CREATE TABLE IF NOT EXISTS `accounts`
 ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
 `account_number` INT(11) NOT NULL ,
 `account_name` VARCHAR(255) NOT NULL,
 `owner` VARCHAR(255) NOT NULL ,
 `balance` INT(11) NOT NULL ,
 `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

 /**
  * Create Database
  */
CREATE DATABASE IF NOT EXISTS

/**
 * Delete Database
 */
DROP DATABASE IF EXISTS

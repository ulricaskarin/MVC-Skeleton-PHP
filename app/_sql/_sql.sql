/**
 * Create Database
 */
CREATE DATABASE IF NOT EXISTS database_name;

/**
* Delete Database
*/
DROP DATABASE IF EXISTS database_name;

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
 * Truncate Table [deletes data inside table]
 */
TRUNCATE TABLE `accounts`;

/**
 * Alter Table ADD
 */
ALTER TABLE `accounts`
ADD `owner_email` VARCHAR(255);

/**
 * Alter Table DROP
 */
ALTER TABLE `accounts`
DROP COLUMN `owner_email`;

 /**
  * Drop Table
  */
 DROP TABLE `accounts`;

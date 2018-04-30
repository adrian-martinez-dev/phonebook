
DELIMITER $$
CREATE DEFINER=`root`@`%` PROCEDURE `create_contact`(IN `namex` VARCHAR(50), IN `phonex` VARCHAR(50))
    NO SQL
INSERT INTO contacts (name,phone) VALUES (namex,phonex)$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`%` PROCEDURE `delete_contact`(IN `idx` INT)
    NO SQL
DELETE FROM contacts WHERE contacts.id = idx$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`%` PROCEDURE `select_all`()
    NO SQL
SELECT * FROM `contacts` ORDER BY id DESC$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`%` PROCEDURE `select_by_id`(IN `idx` INT)
    NO SQL
select * FROM contacts where id = idx$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`%` PROCEDURE `update_contact`(IN `idx` INT, IN `namex` VARCHAR(50), IN `phonex` VARCHAR(50))
    NO SQL
UPDATE contacts SET contacts.name=namex, contacts.phone=phonex WHERE contacts.id=idx$$
DELIMITER ;

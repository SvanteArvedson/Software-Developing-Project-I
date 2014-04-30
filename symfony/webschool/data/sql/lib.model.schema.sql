
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- webschool_user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `webschool_user`;


CREATE TABLE `webschool_user`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(25)  NOT NULL,
	`password` VARCHAR(8)  NOT NULL,
	`name` VARCHAR(40)  NOT NULL,
	`email` VARCHAR(50)  NOT NULL,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

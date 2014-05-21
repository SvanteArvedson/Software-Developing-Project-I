
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`userID` INTEGER  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(25)  NOT NULL,
	`password` VARCHAR(8)  NOT NULL,
	`name` VARCHAR(40)  NOT NULL,
	`email` VARCHAR(50)  NOT NULL,
	PRIMARY KEY (`userID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- result
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `result`;


CREATE TABLE `result`
(
	`resultID` INTEGER  NOT NULL AUTO_INCREMENT,
	`lessonID` INTEGER  NOT NULL,
	`userID` INTEGER  NOT NULL,
	`score` TINYINT  NOT NULL,
	`maxScore` TINYINT  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`resultID`),
	INDEX `result_FI_1` (`lessonID`),
	CONSTRAINT `result_FK_1`
		FOREIGN KEY (`lessonID`)
		REFERENCES `lesson` (`lessonID`),
	INDEX `result_FI_2` (`userID`),
	CONSTRAINT `result_FK_2`
		FOREIGN KEY (`userID`)
		REFERENCES `user` (`userID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- lesson
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lesson`;


CREATE TABLE `lesson`
(
	`lessonID` INTEGER  NOT NULL AUTO_INCREMENT,
	`text` TEXT  NOT NULL,
	`title` VARCHAR(40)  NOT NULL,
	PRIMARY KEY (`lessonID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- question
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `question`;


CREATE TABLE `question`
(
	`questionID` INTEGER  NOT NULL AUTO_INCREMENT,
	`text` VARCHAR(255)  NOT NULL,
	`answerID` INTEGER  NOT NULL,
	PRIMARY KEY (`questionID`),
	INDEX `question_FI_1` (`answerID`),
	CONSTRAINT `question_FK_1`
		FOREIGN KEY (`answerID`)
		REFERENCES `answer` (`answerID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- answer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `answer`;


CREATE TABLE `answer`
(
	`answerID` INTEGER  NOT NULL AUTO_INCREMENT,
	`text` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`answerID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- incorrectAnswer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `incorrectAnswer`;


CREATE TABLE `incorrectAnswer`
(
	`questionID` INTEGER  NOT NULL,
	`answerID` INTEGER  NOT NULL,
	PRIMARY KEY (`questionID`,`answerID`),
	CONSTRAINT `incorrectAnswer_FK_1`
		FOREIGN KEY (`questionID`)
		REFERENCES `question` (`questionID`),
	INDEX `incorrectAnswer_FI_2` (`answerID`),
	CONSTRAINT `incorrectAnswer_FK_2`
		FOREIGN KEY (`answerID`)
		REFERENCES `answer` (`answerID`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- quiz
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `quiz`;


CREATE TABLE `quiz`
(
	`lessonID` INTEGER  NOT NULL,
	`questionID` INTEGER  NOT NULL,
	PRIMARY KEY (`lessonID`,`questionID`),
	CONSTRAINT `quiz_FK_1`
		FOREIGN KEY (`lessonID`)
		REFERENCES `lesson` (`lessonID`),
	INDEX `quiz_FI_2` (`questionID`),
	CONSTRAINT `quiz_FK_2`
		FOREIGN KEY (`questionID`)
		REFERENCES `question` (`questionID`)
)Engine=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

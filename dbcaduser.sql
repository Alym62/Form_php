CREATE SCHEMA IF NOT EXISTS `form` DEFAULT CHARACTER SET utf8 ;
USE `form` ;

-- -----------------------------------------------------
-- Table `form`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `form`.`usuarios` (
  `Nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL)
ENGINE = InnoDB;
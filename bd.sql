-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema blogvoyage
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema blogvoyage
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `blogvoyage` DEFAULT CHARACTER SET utf8 ;
USE `blogvoyage` ;

-- -----------------------------------------------------
-- Table `blogvoyage`.`blog_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogvoyage`.`blog_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `mot_de_passe` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogvoyage`.`blog_categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogvoyage`.`blog_categorie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogvoyage`.`blog_article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogvoyage`.`blog_article` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NOT NULL,
  `contenu` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `blog_categorie_id` INT NOT NULL,
  `blog_user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_blog_article_blog_categorie1_idx` (`blog_categorie_id` ASC) ,
  INDEX `fk_blog_article_blog_user1_idx` (`blog_user_id` ASC) ,
  CONSTRAINT `fk_blog_article_blog_categorie1`
    FOREIGN KEY (`blog_categorie_id`)
    REFERENCES `blogvoyage`.`blog_categorie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_blog_article_blog_user1`
    FOREIGN KEY (`blog_user_id`)
    REFERENCES `blogvoyage`.`blog_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogvoyage`.`blog_commentaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogvoyage`.`blog_commentaire` (
  `id` INT NULL AUTO_INCREMENT,
  `contenu` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `blog_article_id` INT NOT NULL,
  `blog_user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_blog_commentaire_blog_article1_idx` (`blog_article_id` ASC) ,
  INDEX `fk_blog_commentaire_blog_user1_idx` (`blog_user_id` ASC) ,
  CONSTRAINT `fk_blog_commentaire_blog_article1`
    FOREIGN KEY (`blog_article_id`)
    REFERENCES `blogvoyage`.`blog_article` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_blog_commentaire_blog_user1`
    FOREIGN KEY (`blog_user_id`)
    REFERENCES `blogvoyage`.`blog_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

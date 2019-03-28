CREATE TABLE `students` (
                          `id` INT NOT NULL AUTO_INCREMENT,
                          `first_name` VARCHAR(50) NULL DEFAULT NULL,
                          `last_name` VARCHAR(50) NULL DEFAULT NULL,
                          `age` INT NULL DEFAULT NULL,
                          `grade` DOUBLE NULL DEFAULT NULL,
                          PRIMARY KEY (`id`)
)
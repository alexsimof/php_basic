CREATE TABLE IF NOT EXISTS `students`
(
    `student_id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(100) NOT NULL,
    `last_name` CHAR(100) NOT NULL,
    `birthdate` DATE,
    `email` CHAR(255) UNIQUE NOT NULL,
    `grade` INT,
    `password` CHAR(255) NOT NULL
    ) ENGINE InnoDB;

CREATE TABLE IF NOT EXISTS `teachers`
(
    `teacher_id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(100) NOT NULL,
    `last_name` CHAR(100) NOT NULL,
    `email` CHAR(255) UNIQUE NOT NULL,
    `subject` VARCHAR(100),
    `password` CHAR(255) NOT NULL
    ) ENGINE InnoDB;

INSERT INTO `students`(`name`, `last_name`, `email`, `birthdate`, `grade`, `password`)
VALUES ('Victor', 'Petrov', 'petrov@ukr.net', '2005-07-16', 1, 'pass2005'),
       ('Artem', 'Zinchuk', 'zinchuk@ukr.net', '2004-06-08', 2, 'pass2004'),
       ('Vitaliy', 'Usov', 'usov@ukr.net', '2004-09-16', 2, 'pass20'),
       ('Sergiy', 'Zubov', 'zubov@gmail.net', '2004-09-16', 2, 'passZub');

INSERT INTO `teachers`(`name`, `last_name`, `email`, `subject`, `password`)
VALUES ('Tatiana', 'Kravets', 'kravets@gmail.com', 'mathematics', 'pass314'),
       ('Kateryna', 'Yashchuk', 'yash@gmail.com', 'biology', 'passP33'),
       ('Iryna', 'Tereschenko', 'tere@gmail.com', 'chemistry', 'password');

SELECT * FROM `students`;
SELECT `name`, `last_name`, `birthdate` FROM `students`;
SELECT `name`, `last_name`, `subject` FROM `teachers`;
SELECT `birthdate` FROM `students` ORDER BY `birthdate` DESC;


UPDATE `students` SET `grade` = 3 WHERE `student_id` = 3;

DELETE FROM `students` WHERE `student_id` = 2;
CREATE TABLE `GPMS_Schema`.`branch`
(
 `id`   int NOT NULL AUTO_INCREMENT ,
 `name` varchar(45) NOT NULL ,

PRIMARY KEY (`id`)
);

CREATE TABLE `GPMS_Schema`.`comment`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `content`    text NOT NULL ,
 `created_at` timestamp NOT NULL ,
 `post_id`    int NOT NULL ,
 `user_id`    int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_314` (`post_id`),
CONSTRAINT `FK_314` FOREIGN KEY `fkIdx_314` (`post_id`) REFERENCES `GPMS_Schema`.`post` (`id`),
KEY `fkIdx_319` (`user_id`),
CONSTRAINT `FK_319` FOREIGN KEY `fkIdx_319` (`user_id`) REFERENCES `GPMS_Schema`.`user` (`id`)
);

CREATE TABLE `GPMS_Schema`.`phase`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `project_id` int NOT NULL ,
 `name`       varchar(100) NOT NULL ,
 `percent`    int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_175` (`project_id`),
CONSTRAINT `FK_175` FOREIGN KEY `fkIdx_175` (`project_id`) REFERENCES `GPMS_Schema`.`project` (`id`)
);

CREATE TABLE `GPMS_Schema`.`post`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `content`    text NOT NULL ,
 `created_at` timestamp NOT NULL ,
 `user_id`    int NOT NULL ,
 `project_id` int NOT NULL ,
 `title`      varchar(255) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_239` (`project_id`),
CONSTRAINT `FK_239` FOREIGN KEY `fkIdx_239` (`project_id`) REFERENCES `GPMS_Schema`.`project` (`id`),
KEY `fkIdx_297` (`user_id`),
CONSTRAINT `FK_297` FOREIGN KEY `fkIdx_297` (`user_id`) REFERENCES `GPMS_Schema`.`user` (`id`)
);

CREATE TABLE `GPMS_Schema`.`project`
(
 `id`        int NOT NULL AUTO_INCREMENT ,
 `name`      varchar(45) NOT NULL ,
 `completed` tinyint NOT NULL ,
 `branch_id` int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_158` (`branch_id`),
CONSTRAINT `FK_158` FOREIGN KEY `fkIdx_158` (`branch_id`) REFERENCES `GPMS_Schema`.`branch` (`id`)
);

CREATE TABLE `GPMS_Schema`.`project_assignment`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `project_id` int NOT NULL ,
 `student_id` int NOT NULL ,
 `teacher_id` int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_274` (`project_id`),
CONSTRAINT `FK_274` FOREIGN KEY `fkIdx_274` (`project_id`) REFERENCES `GPMS_Schema`.`project` (`id`),
KEY `fkIdx_281` (`student_id`),
CONSTRAINT `FK_281` FOREIGN KEY `fkIdx_281` (`student_id`) REFERENCES `GPMS_Schema`.`user` (`id`),
KEY `fkIdx_285` (`teacher_id`),
CONSTRAINT `FK_285` FOREIGN KEY `fkIdx_285` (`teacher_id`) REFERENCES `GPMS_Schema`.`user` (`id`)
);

CREATE TABLE `GPMS_Schema`.`role`
(
 `id`   int NOT NULL AUTO_INCREMENT ,
 `name` varchar(10) NOT NULL ,

PRIMARY KEY (`id`)
);

CREATE TABLE `GPMS_Schema`.`student`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `user_id`    int NOT NULL ,
 `class`      varbinary(45) NOT NULL ,
 `student_id` bigint NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_209` (`user_id`),
CONSTRAINT `FK_209` FOREIGN KEY `fkIdx_209` (`user_id`) REFERENCES `GPMS_Schema`.`user` (`id`)
);

CREATE TABLE `GPMS_Schema`.`task`
(
 `id`          int NOT NULL AUTO_INCREMENT ,
 `phase_id`    int NOT NULL ,
 `name`        varchar(100) NOT NULL ,
 `description` text NOT NULL ,
 `deadline`    timestamp NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_172` (`phase_id`),
CONSTRAINT `FK_172` FOREIGN KEY `fkIdx_172` (`phase_id`) REFERENCES `GPMS_Schema`.`phase` (`id`)
);

CREATE TABLE `GPMS_Schema`.`teacher`
(
 `id`          int NOT NULL AUTO_INCREMENT ,
 `user_id`     int NOT NULL ,
 `introduction` text NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_212` (`user_id`),
CONSTRAINT `FK_212` FOREIGN KEY `fkIdx_212` (`user_id`) REFERENCES `GPMS_Schema`.`user` (`id`)
);

CREATE TABLE `GPMS_Schema`.`user`
(
 `id`           int NOT NULL AUTO_INCREMENT ,
 `email`        varchar(100) NOT NULL ,
 `pass_hashed`  varchar(255) NOT NULL ,
 `name`         varchar(100) NOT NULL ,
 `phone_number` bigint NOT NULL ,
 `role_id`      int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_235` (`role_id`),
CONSTRAINT `FK_235` FOREIGN KEY `fkIdx_235` (`role_id`) REFERENCES `GPMS_Schema`.`role` (`id`)
);

CREATE TABLE `teacher_branch`
(
 `id`         int NOT NULL AUTO_INCREMENT ,
 `branch_id`  int NOT NULL ,
 `teacher_id` int NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_326` (`branch_id`),
CONSTRAINT `FK_326` FOREIGN KEY `fkIdx_326` (`branch_id`) REFERENCES `GPMS_Schema`.`branch` (`id`),
KEY `fkIdx_329` (`teacher_id`),
CONSTRAINT `FK_329` FOREIGN KEY `fkIdx_329` (`teacher_id`) REFERENCES `GPMS_Schema`.`teacher` (`id`)
);


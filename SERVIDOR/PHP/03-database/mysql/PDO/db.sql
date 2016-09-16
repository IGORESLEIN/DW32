/* mysql -u root -p test < db.sql */

DROP TABLE users;

CREATE TABLE users
(
userid int NOT NULL PRIMARY KEY,
name varchar(255),
surname varchar(255),
email varchar(255) NOT NULL
);

INSERT INTO users (userid,name,surname,email) VALUES (0,'Peru','test','peru@test.com');
INSERT INTO users (userid,name,surname,email) VALUES (1,'Koxme','test','koxme@test.com');

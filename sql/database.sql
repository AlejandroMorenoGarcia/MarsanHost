DELIMITER //
DROP TABLE IF EXISTS users;//


CREATE TABLE users(
                      id integer PRIMARY KEY AUTO_INCREMENT,
                      name varchar(255),
                      phone varchar(16),
                      birthdate date,
                      password varchar(255),
                      email varchar(255) UNIQUE
);//

insert into users (name, phone, birthdate, password, email)
values ('Carlos Martinez','965551515',STR_TO_DATE('26/05/2022','%d/%c/%Y'),
        '12345678','carlos@email.com');

//
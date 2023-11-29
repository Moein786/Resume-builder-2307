CREATE TABLE user(
    id int auto_increment primary key,
    name varchar(50),
    phone  char(10) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL
);
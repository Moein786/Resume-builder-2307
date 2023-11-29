CREATE TABLE regiser_user(
    name varchar(50),
    phone  int(10) NOT NULL,
    email varchar(25) NOT NULL,
    password varchar(8) NOT NULL,
    PRIMARY KEY(name)
);
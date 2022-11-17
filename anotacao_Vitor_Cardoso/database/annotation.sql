create database annotation;
use annotation;
drop database annotation;
CREATE TABLE user (
    Id_user int(8) NOT NULL  PRIMARY KEY auto_increment,
    name_user varchar(255) NOT NULL,
    email_user varchar(255) NOT NULL UNIQUE,
    pwd_user varchar(15) NOT NULL
   
);
select * from user;


CREATE TABLE annotation (
    Id_message int(8) NOT NULL  PRIMARY KEY auto_increment,
    Id_user  int(8) NOT NULL,
    title varchar(255) NOT NULL,
    content varchar(255) NOT NULL
    
   
);
select * from annotation;		


ALTER TABLE annotation
ADD FOREIGN KEY (Id_user)
REFERENCES user (Id_user);
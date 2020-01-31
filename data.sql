CREATE TABLE members (
      userId  int(11) not null primary key AUTO_INCREMENT,
      userName varchar(256) not null,
      name varchar(256) not null,
      userEmail varchar(256) not null,
      userPassword varchar(256) not null,
      role varchar(256) not  null DEFAULT 'user'
)
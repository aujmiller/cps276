DROP TABLE IF EXISTS admins;

CREATE TABLE admins
(
  id            int          NOT NULL AUTO_INCREMENT,
  name          char(50)     NOT NULL ,
  email         char(100)    NULL ,
  password      char(255)    NULL ,
  status        char(50)     NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;


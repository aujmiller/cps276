DROP TABLE IF EXISTS contacts;

CREATE TABLE contacts
(
  id            int       NOT NULL AUTO_INCREMENT,
  name          char(50)  NOT NULL ,
  address       char(100)  NULL ,
  city          char(50)  NULL ,
  state         char(50)  NULL ,
  phone         char(50)  NULL ,
  email         char(50)  NULL ,
  dob           char(50)  NULL ,
  contacts      char(100)  NULL ,
  age           char(50)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

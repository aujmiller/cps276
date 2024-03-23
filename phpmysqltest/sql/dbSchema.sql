
CREATE TABLE customer
(
  id           int       NOT NULL AUTO_INCREMENT,
  firstname    char(50)  NOT NULL ,
  lastname     char(50)  NOT NULL ,
  address      char(50)  NULL ,
  city         char(50)  NULL ,
  state        char(5)   NULL ,
  zip          char(10)  NULL ,
  phone        char(50)  NULL ,
  email        char(50) NULL ,
  password     char(50)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE productGroup
(
  id           int       NOT NULL AUTO_INCREMENT,
  groupid      char(50)  NOT NULL ,
  imagefolder  char(50)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE products
(
  id            int       NOT NULL AUTO_INCREMENT,
  groupid       char(50)  NOT NULL ,
  productname   char(50)  NULL ,
  productprice  char(50)  NULL ,
  image         char(50)  NULL ,
  description   char(50)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE orders
(
  id           int       NOT NULL AUTO_INCREMENT,
  customerid   int       NOT NULL ,
  timestamp    int       NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE orderInfo
(
  id         int       NOT NULL AUTO_INCREMENT,
  orderid    int       NOT NULL ,
  productid  int       NULL ,
  amount     int       NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;
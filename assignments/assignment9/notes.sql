CREATE TABLE note
(
  id          int        NOT NULL AUTO_INCREMENT,
  date_time   char(100)  NULL,
  note        char(255)  NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;
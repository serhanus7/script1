create table test(
   test_id INT NOT NULL AUTO_INCREMENT,
   test_title VARCHAR(100) NOT NULL,
   test_author VARCHAR(40) NOT NULL,
   submission_date DATE,
   PRIMARY KEY ( test_id )
);
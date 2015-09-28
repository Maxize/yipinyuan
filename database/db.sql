CREATE DATABASE yipinyuan;
CREATE TABLE entries(
id int(10) NOT NULL AUTO_INCREMENT,
title varchar(255) NOT NULL,
auther varchar(255) NOT NULL,
create_time datetime NOT NULL,
modify_time datetime NOT NULL,
content text NOT NULL,
column_id id(10) NOT NULL,
PRIMARY KEY (id)
)
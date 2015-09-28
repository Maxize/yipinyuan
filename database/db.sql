CREATE DATABASE yipinyuan;
CREATE TABLE entries(
    id int(10) NOT NULL auto_increment,
    title varchar(255) NOT NULL,
    auther varchar(255) NOT NULL,
    create_time datetime NOT NULL,
    modify_time datetime NOT NULL,
    content text NOT NULL,
    column_id id(10) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE columns(
    id int(10) not null auto_increment,
    content varchar(255) NOT NULL,
    create_time datetime DEFAULT CURRENT_TIMESTAMP,
    modify_time datetime ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
use yipinyuan;
INSERT INTO columns (content) VALUES ('第一栏目');
INSERT INTO columns (content) VALUES ('第二栏目');
INSERT INTO columns (content) VALUES ('第三栏目');
INSERT INTO columns (content) VALUES ('第四栏目');
INSERT INTO columns (content) VALUES ('第五栏目');
INSERT INTO columns (content) VALUES ('第六栏目');
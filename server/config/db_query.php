<?php
$crt_tb_users = "create table users 
            (
                id int unsigned not null auto_increment,
                name varchar(15) not null,
                email varchar(20) not null unique,
                birth varchar(15),
                age int unsigned,
                sex tinyint(2),
                constellation varchar(10),
                height int unsigned,
                weight int unsigned,
                location varchar(25),
                sign varchar(80),
                school varchar(20),
                edu_bkgrd varchar(10),
                major varchar(20),
                company varchar(20),
                hobby varchar(20),
                primary key(id)
            )engine=innodb default charset=utf8 auto_increment=1";

?>

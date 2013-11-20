<?php
require_once './db_func.php';
$conn = connect_db();
$db_query = "create table users 
            (
                id int unsigned not null auto_increment,
                name varchar(15) not null,
                email varchar(20) not null unique,
                birth varchar(15),
                age int unsigned,
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
$result = mysql_query( $db_query, $conn );
mysql_close( $conn );
echo "Table creating successfully\n";
?>

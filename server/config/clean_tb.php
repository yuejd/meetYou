<?php
require_once './db_func.php';
require_once './db_query.php';
$conn = connect_db();
mysql_query( 'drop table users', $conn );
$result = mysql_query( $crt_tb_users, $conn );
mysql_close( $conn );
echo "Table cleaning successfully\n";
?>

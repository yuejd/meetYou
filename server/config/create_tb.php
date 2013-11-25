<?php
require_once './db_func.php';
require_once './db_query.php';
$conn = connect_db();
$result = mysql_query( $crt_tb_users, $conn );
mysql_close( $conn );
echo "Table creating successfully\n";
?>

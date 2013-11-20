<?php
function connect_db() {
    require_once './config.php';
    $conn = mysql_connect( HOST, USER, PASSWORD );
    if( !$conn ) 
        exit( "Error:not connect, please check your config file and mysql engine\n" );
    if( !mysql_query( 'create database if not exists meetyou', $conn ) ) 
        exit( 'Error creating database: ' . mysql_error() );
    
    mysql_select_db( 'meetyou', $conn );
    mysql_query( "SET NAMES 'utf8'" );
    echo "Database connecting successfully\n";
    return $conn;
}
?>

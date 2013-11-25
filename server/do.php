<?php
//header is for web explorer test
header("Content-type: text/html; charset=utf-8"); 
require 'includes.php';

$act_array = array(
    'reg'=> 'action/reg_act.php',
    'upd_info'=> 'action/upd_info.php'
    // add more action here
);

$act_id = getActId();

if( array_key_exists( $act_id, $act_array ) ) {
    $act_target = $act_array[$act_id];
    require( $act_target );
} else
    echo 'action do not exist';
?>

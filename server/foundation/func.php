<?php
// this file is for function utility

//get action id 
function getActId(){
  if( isset( $_GET['act'] ) ) {
  	  return $_GET['act'];
  } else{
  	  echo 'para err';
  	  exit;
  }
}

//get post or get argument
function getArgs( $name )
{
	if( isset( $_POST[$name] ) ) return $_POST[$name];
	if( isset( $_GET[$name] ) ) return $_GET[$name];
	return null;
}

//get argument 
function getArgG( $name ){
	if( isset( $_GET[$name] ) ) return $_GET[$name];
	return null;
}

//post argument
function getArgP( $name ){
	if( isset( $_POST[$name] ) ) return $_POST[$name];
	return null;
}
?>

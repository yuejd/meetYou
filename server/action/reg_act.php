<?php
//get the user's information and add into database
$dbo = new Dbex;
$dbo->dbTarget();

$email = getArgG( 'email' );
if( $email ) {
    $sql = "select id from users where email='$email'";
    $user_info = $dbo->getRow( $sql );
    if( $user_info )    // if user exists in the table ,then exit
        exit("user exists\n");
    $name = getArgG( 'name' );
    $sex = getArgG( 'sex' );
    $location = getArgG( 'location' );
    $edu = getArgG( 'edu' );
    $sign = getArgG( 'sign' );
    echo '成都';

    $sql = "insert into users (name, email, sex, location, sign, edu_bkgrd)
            values ('$name', '$email', '$sex', '$location', '$sign', '$edu')";
    if( $dbo->exeUpdate( $sql ) )
        exit( "user register successfully.\n" );
    else exit( "user register failed,\n" );
}
/* test address and params
./do.php?act=reg&email=test1@example.com&name=yuetest&sex=1&location=成都&edu=phd&sign="signtest test"
 */
?>

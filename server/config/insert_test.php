<?php
require_once './db_func.php';
$conn = connect_db();
$constellations = array( '白羊座','金牛座','双子座',
                         '巨蟹座','狮子座','处女座',
                         '天秤座','天蝎座','射手座',
                         '魔羯座','水瓶座','双鱼座' );
for( $i = 0; $i < 100; $i++ ) {
    $name = "example_$i";
    $email = $name.'@test.com';
    $birth = '2003-04-02';
    $age = (($i+3)*($i+2))%59;
    $sex = $i % 7 % 2;
    $constellation = $constellations[$i%12];
    $height = 100 + $i / 2;
    $weight = 70 + $i / 2;
    $location = "城市test_$i";
    $sign = "sign_test_$i";
    $school = "school_teset_$i";
    $company = "company_test_$i";
    $hobby = "兴趣_$i";
    $db_query = "insert into users (name, email, birth, age, sex, constellation, height, 
                                    weight, location, sign, school, company, hobby )
                             values ('$name', '$email', '$birth', '$age', '$sex', '$constellation', '$height', 
                                    '$weight', '$location', '$sign', '$school', '$company', '$hobby')";
    $result = mysql_query( $db_query, $conn );
    if( !$result )
        exit( "insert failed with record $i \n" );
}
echo "100 records have been inserted into table users\n";
mysql_close( $conn );
?>

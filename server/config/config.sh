#!/bin/bash - 
#===============================================================================
#          FILE: config.sh
#         USAGE: ./config.sh 
# 
#   DESCRIPTION: config the env with mysql
# 
#        AUTHOR: JiaDi Yue (Brady), jdyue19@gmail.com
#       CREATED: 11/20/2013 16:38
#===============================================================================

php='php';
#make php in MAMP as default php
#php='/Applications/MAMP/bin/php/php5.5.3/bin/php';

if [ "$1" = 'init' ]
then
    $php -f create_tb.php;
    $php -f insert_test.php;
elif [ "$1" = 'clean' ]
then
    $php -f clean_tb.php;
elif [ "$1" = 'testdata' ]
then
    $php -f insert_test.php;
else
    echo 'usage: ./config.sh [init/clean/testdata]';
    echo '       init:     create database.tables and insert test data into tables';
    echo '       clean:    clean the records in the tables';
    echo '       testdata: insert 100 test data records into tables';
fi;

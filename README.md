## Meet You ##
-----------
A kind of mobile app. The source code consists of two parts: 

* Server
* Client

### Version ###
1.0

### Server
 The source code is written with php and mysql for database.The config file is used for 
 preparation and testing.
 Modify config.php with your own configuration (HOST, USER, PASSWORD).
```php
define( 'HOST', 'xxxxx' );
define( 'USER', 'xxxxx' );
define( 'PASSWORD', 'xxxxx' );
```
##### Preparation 
change directory to config file
```sh
#create database.tables and insert test data into tables
./config.sh init
#clean the records in the tables
./config.sh clean
#insert 100 test data records into tables
./config.sh testdata
```

### Client 
 The client is written in objective-c for ios.

### Contact
*jdyue19@gmail.com*

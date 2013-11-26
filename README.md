## Meet You 

A kind of mobile app. The source code consists of two parts: 

 * ####  Server

 * ####  Client

### Version 
1.0

### Server
 The source code is written with php and mysql for database.
 It provides the API with URL to the client.The format of the API is like:
 xxxx.com/do.php?act=action[&para1=param1[&para2=param2......]]

#### Structure


> ####config
>> The config file is used for 
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

> #### action
>> The files in this directory are used for handling the requests from the do.php file.
##### reg_act.php
##### upd_info.php
##### ......
   
> #### foundation
>> This directory is for some function utilities or some classes define.
##### cdbex.php
>>> data base class for db controll.

>> ##### func.php
>>> some function define

>> ##### ......

> ####do.php
>> used for get requests and actions from client and redirect the requests to the files in the `action` directory.


> ####include.php
>> including function and class files.

> ####......


### Client  
 The client is written in objective-c for ios.

### License 
*jdyue19@gmail.com*

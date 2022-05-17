<?php
#3
//create db TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='test';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
   
   //select
   mysqli_select_db( $conn,$dbname );

   //create table
   $sql = 'CREATE TABLE emp( emp_id INT NOT NULL AUTO_INCREMENT,
   emp_name VARCHAR(20) NOT NULL,
   emp_address  VARCHAR(20) NOT NULL,
   emp_salary   INT NOT NULL,
   join_date    timestamp(6) NOT NULL,
   primary key ( emp_id ))';

     $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not create table: ' . mysqli_error($conn));
   }
    
   echo "<br>Database Table  created successfully\n";
   mysqli_close($conn);
?>
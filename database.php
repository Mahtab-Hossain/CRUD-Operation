<?php
// database function
function create_database(){
    $server_name="localhost";
    $user_name="root";
    $pass="";
    $database_name="auctionDB";

    // connection var
    $connection=mysqli_connect($server_name,$user_name,$pass);
    // connection checking
    if(!$connection){
        die("Failed to connect ".mysqli_connect_error());
    }
    // database creation
    $sql="CREATE DATABASE IF NOT EXISTS $database_name";

    if(mysqli_query($connection,$sql)){
    $connection=mysqli_connect($server_name,$user_name,$pass,$database_name);
    
    $sql="
            CREATE TABLE IF NOT EXISTS auction_item(
                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                auction_item VARCHAR(50) NOT NULL,
                seller VARCHAR(15) NOT NULL,
                price FLOAT 
            );
        ";
      if(mysqli_query($connection,$sql)){
        return $connection;
      }else{
        echo "Table Could Not be Created";
      }
    }else{
        echo "database could not be created".mysqli_error($connection);
    }
    

}


?>
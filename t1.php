<?php
$con= mysqli_connect("localhost","root","","website")
or die (Mysqli_Connection_error() );
echo "connected <br>";

mysqli_query($con,"CREATE TABLE IF NOT EXISTS users_info(
  u_id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(u_id),u_name varchar(30),u_password varchar(30),u_email varchar(40))")
  or die(Mysqli_Connect_error() );
  echo "table created! <br>";

  mysqli_query($con,"INSERT INTO users_info (u_name,u_password,email) VALUES ()")
  or die(Mysqli_Connect_error());

?>

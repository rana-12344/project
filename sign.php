<?php
$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$u_password = $_POST['u_password'];

if(!empty($u_name) || !empty($u_email) ||!empty($u_password) ){
$host = "localhost" ;
$dbUsername ="root";
$dbPassword = "";
$dbName = "website";

$con= new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(Mysqli_Connect_error() ){
  die(' connect error('.Mysqli_Connect_error().')'.Mysqli_Connect_error());
} else {
  $SELECT = "SELECT u_email From users_info Where u_email = ? Limit 1";
  $INSERT = " INSERT into users_info (u_name,u_email,u_password) values(?,?,?)";

  $stmt = $con->prepare($SELECT);
  $stmt -> bind_param("s",$u_email);
  $stmt->execute();
  $stmt->bind_result($u_email);
  $stmt->store_result();
  $rnum = $stmt->num_rows ;

  if ($rnum==0) {
    $stmt->close();

    $stmt = $con->prepare($INSERT);
    $stmt->bind_param("sss" , $u_name , $u_email , $u_password);
    $stmt->execute();
    echo "New record inserted sucessfully";
  } else {
    echo "this email already used";
  }
  $stmt->close();
  $con->close();
}
}else {
    echo "not completed";
    die();
  }

?>

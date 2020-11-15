<?php
$u_email = $_POST['u_email'];
$u_password = $_POST['u_password'];

$con = new mysqli("localhost","root","","website");
if($con->connect_error){
  die("Failed connection :".$con->connect_error);
} else {
  $stmt = $con->prepare("select * from users_info where u_email = ?");
  $stmt->bind_param("s",$u_email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();

  if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
    if($data['u_password'] === $u_password){
      echo "تم تسجيل الدخول";
    } else {
      echo "خطأ في كلمة المرور او الايميل";
    }
  } else {
    echo "خطأ في كلمة المرور او الايميل";
  }
}
 ?>

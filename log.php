<?php
$u_name = $_POST['u_name'];
$u_password = $_POST['u_password'];

$con = new mysqli("localhost","root","","website");
if($con->connect_error){
  die("Failed connection :".$con->connect_error);
} else
  $stmt = $con->prepare("select * from users_info where u_name = ?");
  $stmt->bind_param("s",$u_name);
  $stmt->execute();
  $stmt_result = $stmt->get_result();

     if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
       if($data['u_password'] === $u_password){

        $sname=$_POST['u_name'];
        $spass=$_POST['u_password'];
           if($sname == $u_name and $spass == $u_password){
          session_start();
          $_SESSION['u_name']=$sname;
          header("Location:user.php");   }
      } else {echo "اسم المستخدم او كلمة السر خاطئة <br> لاعادة المحاولة <a href='login.php'>اضغط هنا</a>";}
    }else {echo "اسم المستخدم او كلمة السر خاطئة <br> لاعادة المحاولة <a href='login.php'>اضغط هنا</a>";}

 ?>

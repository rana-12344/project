<?php
session_start();
echo "welcome ". $_SESSION['u_name'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>....</title>
    <link rel="stylesheet" href="project.css">
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="home.html">الرئيسية</a>
      <a href="cities.html">الفعاليات</a>
      <a href="signIn.php">تسجيل الاشتراك</a>
      <a href="logIn.php">تسجيل الدخول</a>
    </div>

    <br><br>
  </body>
</html>

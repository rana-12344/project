<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>تسجيل الاشتراك</title>
    <link rel="stylesheet" href="project.css">
    <link rel="shortcut icon" href="m2.jpg"> <!-- https://www.omallqura.com/kingdom-tower-riyadh/-->
  </head>
  <body class="ba">
    <div class="topnav">
      <a class="active" href="home.html">الرئيسية</a>
      <a href="cities.html">الفعاليات</a>
      <a href="signIn.php">تسجيل الاشتراك</a>
      <a href="logIn.php">تسجيل الدخول</a>
    </div>
<div class="box">
    <h2> التسجيل  </h2>
  <form class="sign" action="sign.php" method="POST">
    <div class="inputBox">
    <input type="text" name="u_name" required>
    <label>اسم المستخدم</label>
    </div>
    <div class="inputBox">
    <input type="email" name="u_email" required>
    <label>البريد الالكتروني</label>
    </div>
    <div class="inputBox" >
    <input type="password" name="u_password" required>
    <label>الرمز</label>
    </div>
    <input  type="submit" name="sub"  value="ارسال" >
    </form>
    </div>
  </body>
</html>

<?php
session_start();
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
    </div> <br><br><br><br>
<center><?php
 echo "<h1>"."welcome ". $_SESSION['u_name'],"</h1>";
 ?>
    <br><h2>الحجوزات</h2><br></center>
    <table style="width:100%">
  <tr>
    <th>المهرجانات</th>
    <th>المتاحف</th>
    <th>المعالم السياحية</th>
  </tr>
  <tr>
    <td> <a href="">مهرجان الجنادرية</a> </td>
    <td> <a href="">قصر المربع </a> </td>
    <td> <a href=""> مدينة الثلج</a> </td>
  </tr>
  <tr>
    <td> <a href=""> مهرجان الملك عبد العزيز للإبل</a> </td>
    <td> <a href="">متحف الاثار</a> </td>
    <td> <a href="">برج المملكة </a> </td>
  </tr>
  <tr>
    <td> <a href=""> ليالي الرياض</a> </td>
    <td> <a href="">متحف جوي </a> </td>
    <td> <a href="">برج الفيصلي</a> </td>
  </tr>
  <tr>
    <td> <a href=""> مهرجان الدرعية للفروسية</a> </td>
    <td> <a href="">قصر المصمك </a> </td>
    <td> <a href="">برج رافال</a> </td>
  </tr>
  <tr>
    <td> <a href=""> مهرجان الملك عبدالعزيز للصقور</a> </td>
    <td> <a href="">قصر الحمرا</a> </td>
    <td> <a href="">حديقة الملك عبدالله</a> </td>
  </tr>
  <tr>
    <td> <a href="">سماء فانتوم</a> </td>
    <td></td>
    <td> <a href=""> رياض سفاري</a> </td>
  </tr>

</table>

  </body>
</html>

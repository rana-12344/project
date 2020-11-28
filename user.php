<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> تسجيل الدخول</title>
    <link rel="shortcut icon" href="m2.jpg"> <!-- https://www.omallqura.com/kingdom-tower-riyadh/ -->
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
 echo "<h1>"."welcome ". $_SESSION['u_name']."</h1>";
 ?>
    <br><h2>الجهة المنظمة للفعالية</h2><br></center>
    <table style="width:100%">
  <tr>
    <th>المهرجانات</th>
    <th>المتاحف</th>
    <th>المعالم السياحية</th>
  </tr>
  <tr>
    <td> <a href="https://twitter.com/aljanadriafest?lang=ar">مهرجان الجنادرية</a> </td>
    <td> <a href="https://www.visitsaudi.com/ar/see/highlights/Al-Murabba-Palace">قصر المربع </a> </td>
    <td> <a href="https://twitter.com/snowcityME?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> مدينة الثلج</a> </td>
  </tr>
  <tr>
    <td> <a href="https://camelclub.gov.sa/#"> مهرجان الملك عبد العزيز للإبل</a> </td>
    <td> <a href="https://www.visitsaudi.com/ar/do/culture/visit-the-antiquities-museum">متحف الاثار</a> </td>
    <td> <a href="https://kingdomcentre.com.sa/ar/home/">برج المملكة </a> </td>
  </tr>
  <tr>
    <td> <a href="https://riyadh.platinumlist.net/ar/usd/event/78945/riyadh-nights"> ليالي الرياض</a> </td>
    <td> <a href="https://www.mod.gov.sa/Services/SaqrAlJazira/Pages/default.aspx">متحف جوي </a> </td>
    <td> <a href="https://www.servcorp.com.sa/ar/locations/riyadh/al-faisaliah-center/">برج الفيصلية</a> </td>
  </tr>
  <tr>
    <td> <a href="https://diriyahseason.sa/ar/diriyah-equestrian-festival.html"> مهرجان الدرعية للفروسية</a> </td>
    <td> <a href="https://www.visitsaudi.com/ar/see/highlights/Al-Masmak-Fortress">قصر المصمك </a> </td>
    <td> <a href="http://www.rafal.com.sa/ar/our-communities/burj-rafal/">برج رافال</a> </td>
  </tr>
  <tr>
    <td> <a href="https://sfc.org.sa/"> مهرجان الملك عبدالعزيز للصقور</a> </td>
    <td> <a href="https://www.alhambradegranada.org/ar/info/%D8%A8%D9%8A%D8%B9-%D8%AA%D8%B0%D8%A7%D9%83%D8%B1-%D8%A7%D9%84%D8%AD%D9%85%D8%B1%D8%A7%D8%A1.asp">قصر الحمرا</a> </td>
    <td> <a href="https://twitter.com/mn_abdallh?lang=ar">حديقة الملك عبدالله</a> </td>
  </tr>
  <tr>
    <td> <a href="https://jeddah.platinumlist.net/ar/usd/event/77161/faaaly-sma-fantom">سماء فانتوم</a> </td>
    <td> <a href="https://riyadh.platinumlist.net/ar/usd/event-tickets/80188/museum-of-happiness">متحف السعادة</a></td>
    <td> <a href="https://www.visitsaudi.com/ar/do/adventure-activites/on-safari-in-riyadh"> رياض سفاري</a> </td>
  </tr>

</table>

  </body>
</html>

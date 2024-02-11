<?php
  $u_name=$_POST["name"];
  $u_tel=$_POST["tel"];
  $u_people=$_POST["people"];
  $u_date=$_POST["date"];
  $u_time=$_POST["time"];
  $u_menu=$_POST["menu"];
  $u_comment=$_POST["comment"];
?>      

<!DOCTYPE html>
<html>
  <head>
    <title>PHP실습하기</title>
    <meta charset="UTF-8">
  </head>
  <body>
      <?php
        echo "<p>예약이 완료 되었습니다.</p>";
        echo "<br><span>예약자: </span>$u_name";
        echo "<br><span>연락처: </span>$u_tel";
        echo "<br><span>예약인원: </span>$u_people";
        echo "<br><span>예약날짜: </span>$u_date";
        echo "<br><span>예약시간: </span>$u_time";
        echo "<br><span>메뉴: </span>$u_menu";
        echo "<br><span>요청사항: </span>$u_comment";
      ?>
  </body>
</html>
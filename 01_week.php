<?php include ('./header.php')?>
<?php
//week.php 34.224.53.46
 $week = array("일", "월", "화", "수", "목", "금", "토");
 //$weekend = array("토","일");
 $weekend = array($week[6],$week[0]);
 print ($weekend[0]."요일, ".$weekend[1]."요일 <br/>");
 print ($week[4]."요일, ".$week[2]."요일");
?>
<?php include ('./footer.php')?>
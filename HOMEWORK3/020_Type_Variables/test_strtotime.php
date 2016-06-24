<?php
  $d = strtotime("2012-09-10");//指的是當前(gmt標準)時間離(1970-01-01 00:00:00)的秒數
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  echo $d; //印出d
  echo "<br>";//強制換行
  echo date("Y-m-d", $d);//印出日期格式
?>

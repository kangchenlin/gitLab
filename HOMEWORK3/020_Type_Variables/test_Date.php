<?php
  $x = getdate(); //gettype()傳回伺服器當時所設的日期
  echo gettype($x), "<br>";
  
  $x = date('Y-m-d H:i:s');//設變數x為日期格式
  echo $x, "<br>"; //印出變數x為(2016-06-24 01:09:46)
  echo gettype($x), "<br>";//印出變數x型態(string)
  
  $x = gmdate('Y-m-d H:i:s');//設變數x為格林威治標準時間
  echo $x, "<br>";//印出變數x為(2016-06-24 01:09:46)
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//指的是當前(gmt標準)時間離(1970-01-01 00:00:00)的秒數
  echo $x, "<br>";//印出變數x型態(陣列)
  echo gettype($x), "<br>";//印出變數x型態(integer)
  
?>
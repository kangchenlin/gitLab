<?php
  header("content-type: text/html; charset=utf-8");     //跟瀏覽器講是設定utf-8
  $s = '許功蓋';
  echo $s."<br>";
  echo strlen($s);                //因為編碼是utf-8,所以字串長度是9
?>
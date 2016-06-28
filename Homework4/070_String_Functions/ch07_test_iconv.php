<?php
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");  //跟瀏覽器講是設定big5
  $s = "許功蓋";
  echo strlen($s), ", ";  // 9                      //系統預設是utf-8,所以字串長度是9
  echo strlen(iconv("UTF-8", "big5", $s));          //從utf-8轉成big5,所以字串長度是6
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);                  //從utf-8轉成big5,所以印出許功蓋
?>

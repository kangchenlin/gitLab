<?php
  
    echo "flag 1<br>"; //印出flag 1
    @require("MyLibrary.php"); //錯誤語法
    echo "flag 2<br>";   //因為上面的已經出現錯誤了所以不會印出結果

?>
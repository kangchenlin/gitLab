<?php

echo "Path and FileName:" . __FILE__ . "<br />"; //讀取到檔名
echo "Path: " . dirname ( __FILE__ );//讀取到資料夾
echo "Filename: " . basename ( __FILE__ ) . "<br />";//檔案名稱
echo "Filesize: " . filesize ( __FILE__ )  //檔案的大小?>

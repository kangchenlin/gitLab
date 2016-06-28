<?php
header("Content-Type: image/png");  //設定是圖片檔  //MIME

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");  //打開檔案
echo fread($fileHandle, filesize($filename));//讀檔案的大小
fclose($filename);      //關閉檔案

?>
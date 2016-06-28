<?php
	$contents = file_get_contents('data.txt'); //把檔案內容取出來在整理成字串
	echo (str_replace("\r\n", "<br />", $contents));
?>
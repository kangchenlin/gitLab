<?php
if (isset ( $_POST ["btnOK"] )) {    //判斷btnOK有沒有把資料送回來
	processFile ( $_FILES ["file1"] );  //呼叫processFile
}
function processFile($objFile) {
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );	//是將上傳的檔案移到新的位置
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />"; //檔案名稱
	echo "File type: " . $objFile ["type"] . "<br />"; //檔案型態
	echo "File size: " . $objFile ["size"] . "<br />"; //檔案大小
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">   <!--multipart是可以上傳多個檔案      -->
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>
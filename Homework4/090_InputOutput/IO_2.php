<?php

$fileDir = dirname ( __FILE__ );//讀取目前資料所在位置
$fileResource = opendir ( $fileDir ); //打開資料夾

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) :    /*讀取資料夾裡的資料*/?>
		<li><?php echo $item;  //印出資料//?></li> 
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); //關閉資料夾// ?> 
</body>
</html>

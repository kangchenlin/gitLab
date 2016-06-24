<?php
$a = 20; //設變數a為20
function myfunction($b) { //myfunction加入b參數
	//print "a=$a<br>";
	$a = 30; //設變數a為30
	//print "a=$a<br>";
	global $a, $c; //$a, $c為全域變數
	//print "a=$a<br>";
	return $c = ($b + $a);  //回傳$c的值
}
print myfunction(40) + $c;
?>
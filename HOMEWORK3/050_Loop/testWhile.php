<?php
$iSum = 0; //設iSum=0
$i = 1;		//設i=0
while ($i <= 10) //判斷i是否小於等於10
{
	$iSum += $i;   //計算iSum+i
	$i += 1;		//計算i+1
}
echo $iSum;			//印出iSum的值

echo "<hr>";		//水平分線

$iSum = 0;		//設iSum=0
$i = 0;			//設i=0
while ($i < 10)	//判斷i是否小於10
{
	$i++;		//計算i+1
	$iSum += $i;//計算iSum+i	
}
echo $iSum//印出iSum的值
?>
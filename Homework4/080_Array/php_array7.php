<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);
echo "<hr>";
var_dump($season);      //var_dump()可以判斷一般字串變數以及陣列變數
?>
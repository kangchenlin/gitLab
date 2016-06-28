<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");    //strtok()是以" "切割字串
while ($s != "")
{
   echo $s. "*" . "<br>";        
   $s = strtok(" .|/");          //以某個"|/"切割字串
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>
<?php
  $x = 3; //x=3
  if ($x >= 10 && foo()) //如果x的值沒有大於等於10 ,直接跳到else印出no,且不會執行function foo()
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3; //x=3
  if ($x >= 10 & foo()) //如果x的值沒有大於等於10 ,直接跳到else印出no,但會執行function foo()
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>
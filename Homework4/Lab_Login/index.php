<?php 

if (isset($_COOKIE["userName"]))
  $userName = $_COOKIE["userName"];
else 
  $userName = "Guest";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="bootstrap.min.css" rel="stylesheet">
<title>Lab - index</title>
</head>
<body>
<form id="form1" class="form-horizontal" name="form1" method="post" >
<div class="container">
<div class="col-md-offset-4 col-md-4">
  <center>
    <h2 class="page-title">會員系統 - 首頁</h2>
    
    <marquee scrollamount="10" style="font-size:25px"><?php echo "Welcome! " . $userName ?> </marquee>
  <?php if ($userName == "Guest"): ?>
    <a href="login.php" class="btn btn-default btn-primary">登入</a>
  <?php else: ?>
     <a href="login.php?signout=1" class="btn btn-default btn-primary">登出</a>
  <?php endif; ?>
    <a href="secret.php" class="btn btn-warning">會員專用頁</a>

  </center>

</div>
</div>
</form>
</body>
</html>
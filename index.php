<html>
<head>
</head>
<body>
  <?php
    if (!$_COOKIE["cookie_name"]) {
      ?>
  <form action="login.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
    <input type="submit"/>
    <br/>
	<br/>
    <a href="regpage.php"> register </a>
  </form>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>

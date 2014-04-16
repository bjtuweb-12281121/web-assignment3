<?php
setcookie("cookie_name","",time()-1);
setcookie("count","",time()-1);
header("Location: index.php");
?>

<?php 

setcookie('islog','',time()-10);
setcookie('username','',time()-10);
setcookie('uid','',time()-10);

header('location:index.php');



 ?>
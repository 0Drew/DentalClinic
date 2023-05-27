<?php
Session_start();
Session_destroy();


$locationLogin='login.php';
echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$locationLogin.'">';


?>
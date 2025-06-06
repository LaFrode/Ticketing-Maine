<?php


session_destroy();
$_SESSION['perm'] = "";
header("Location: index.php");


exit;

?>
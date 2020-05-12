<?
ob_start()<
?>
<?php
$parancs = "DELETE FROM users WHERE id =";
mysql_query($parancs);
header("Location: user_list.php");


?>
<?
ob_end_flush();
?>
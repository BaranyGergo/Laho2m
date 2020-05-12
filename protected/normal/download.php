<?php
	header("Content-disposition: attachment; filename=protected/files/Jatek.zip");
	header("Content-type: application/zip");
	readfile("files/Jatek.zip");

?>





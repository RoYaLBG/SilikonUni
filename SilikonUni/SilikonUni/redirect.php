<?php
if (isset($_POST['name'])) {
	header("Location: http://".$_POST['name'].".homo.com/index_bg.php");
	exit;
}
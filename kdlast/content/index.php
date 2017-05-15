<?php
	if($_SESSION['t1p3']!='')
	{
		include "./content/".$_SESSION['t1p3']."/index.php";
	}
	else include ('./form/login.php');
?>

<?php
	include('../../../../function/updateAllData.php');
	$no= $_POST['kodeasli'];
	$new = $_POST['kode'];
	$nipguru= $_POST['nipguruspv'];

	$guruspv= $_POST['guruspv'];

	$username= $_POST['username'];

	$passwd= $_POST['password'];
	$new = updateSpv($no,$new,$nipguru,$guruspv,$username,$passwd);
	
?>

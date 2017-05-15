<?php

	include('../../function/updateGuru.php');
	$no= $_POST['kode'];
	$new = $_POST['nipguru'];
	$new1 = $_POST['guru'];
	$asli= $_POST['kodeasli'];
		$new = updateGuru($no,$asli,$new, $new1);
?>

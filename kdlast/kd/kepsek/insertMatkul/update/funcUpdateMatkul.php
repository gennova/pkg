<?php
	include('../../../../function/updateAllData.php');
	$no= $_POST['kode'];
	$new = $_POST['matapelajaran'];
	$asli= $_POST['kodeasli'];
	$new = updateMatkul($no,$asli,$new, $new1);
	
?>

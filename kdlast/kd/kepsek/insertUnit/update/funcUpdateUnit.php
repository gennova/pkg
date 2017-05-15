<?php
	include('../../../../function/updateAllData.php');
	$no= $_POST['kode'];
	$new = $_POST['lokasiunit'];
	$asli= $_POST['kodeasli'];
	$new = updateUnit($no,$asli,$new);
	
?>

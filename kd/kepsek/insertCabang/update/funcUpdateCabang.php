<?php
	include('../../../../function/updateAllData.php');
	$no= $_POST['kode'];
	$new = $_POST['lokasicabang'];
	
	$asli= $_POST['kodeasli'];
	$new = updateCabang($no,$asli,$new);
	
?>

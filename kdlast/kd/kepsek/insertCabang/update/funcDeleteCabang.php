<?php
include('../../../../function/showCabang.php');

$index=$_GET['kode'];

$deletedata=deleteCabang($index);
if ($deletedata)
{
	echo "<script type='text/javascript'> alert('Data Guru telah Dihapus!');</script>";
	header("refresh: 0; url='updateCabang.php'");
}

else
{
	echo "Data Gagal Update!";
}
?>

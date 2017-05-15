<?php
include('../../../../function/showMatkul.php');

$index=$_GET['kode'];

$deletedata=deleteMatkul($index);
if ($deletedata)
{
	echo "<script type='text/javascript'> alert('Data Guru telah Dihapus!');</script>";
	header("refresh: 0; url='updateMatkul.php'");
}

else
{
	echo "Data Gagal Update!";
}
?>

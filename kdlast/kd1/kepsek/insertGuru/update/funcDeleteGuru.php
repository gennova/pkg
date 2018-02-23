<?php
include('../../../../function/showGuru.php');

$index=$_GET['kode'];

$deletedata=deleteGuru($index);
if ($deletedata)
{
	echo "<script type='text/javascript'> alert('Data Guru telah Dihapus!');</script>";
	header("refresh: 0; url='updateGuru.php'");
}

else
{
	echo "Data Gagal Update!";
}
?>

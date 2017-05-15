<?php
include('../../../../function/showUnit.php');

$index=$_GET['kode'];

$deletedata=deleteUnit($index);
if ($deletedata)
{
	echo "<script type='text/javascript'> alert('Data Guru telah Dihapus!');</script>";
	header("refresh: 0; url='updateUnit.php'");
}

else
{
	echo "Data Gagal Update!";
}
?>

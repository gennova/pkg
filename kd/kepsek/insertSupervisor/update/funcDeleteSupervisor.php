<?php
include('../../../../function/showSpv.php');

$index=$_GET['kode'];

$deletedata=deleteSpv($index);
if ($deletedata)
{
	echo "<script type='text/javascript'> alert('Data Supervisor telah Dihapus!');</script>";
	header("refresh: 0; url='updateSupervisor.php'");
}

else
{
	echo "Data Gagal Update!";
}
?>

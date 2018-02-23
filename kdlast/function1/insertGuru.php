<?php
include ('../function/database.php');


$nipguru= $_POST['nipguru'];
$guru= $_POST['guru'];

$res= insertGuru ($nipguru, $guru);
if ($res) 
{
	echo "<script type='text/javascript'> alert('Data Guru telah berhasil di input!');</script>";
	header("refresh: 0; url='../kd/kepsek/insertDataGuruBaru.php'");
}
else
{
	echo "Data Gagal di Input. Mohon diulang kembali!";
}


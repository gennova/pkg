<?php
include ('../function/database.php');


$nipguru= $_POST['nipsupervisor'];
$guru= $_POST['gurusupervisor'];
$username= $_POST['username'];
$passwd= $_POST['passwd'];

$res= insertDataSpv ($nipguru, $guru,$username,$passwd);
if ($res) 
{
	//echo "<script type='text/javascript'> alert('Data Guru Supervisor telah berhasil di input!');</script>";
	header("refresh: 0; url='../kd/kepsek/insertDataGuruBaru.php'");
}
else
{
	echo "Data Gagal di Input. Mohon diulang kembali!";
}


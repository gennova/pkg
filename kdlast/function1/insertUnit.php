<?php
include ('../function/database.php');


$unit= $_POST['unit'];


$res= insertUnit ($unit);
if ($res) 
{
	echo "<script type='text/javascript'> alert('Data Unit telah berhasil di input!');</script>";
	header("refresh: 0; url='../kd/kepsek/insertDataGuruBaru.php'");
}
else
{
	echo "Data Gagal di Input. Mohon diulang kembali!";
}


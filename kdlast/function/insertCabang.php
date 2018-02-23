<?php
include ('../function/database.php');


$namacabang= $_POST['cabang'];


$res= insertCabang ($namacabang);
if ($res) 
{
	echo "<script type='text/javascript'> alert('Data Cabang telah berhasil di input!');</script>";
	header("refresh: 0; url='../kd/kepsek/insertDataGuruBaru.php'");
}
else
{
	echo "Data Gagal di Input. Mohon diulang kembali!";
}


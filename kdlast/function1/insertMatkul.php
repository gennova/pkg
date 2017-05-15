<?php
include ('../function/database.php');


$matkul= $_POST['matakuliah'];


$res= insertMatkul ($matkul);
if ($res) 
{
	echo "<script type='text/javascript'> alert('Data Mata Kuliah telah berhasil di input!');</script>";
	header("refresh: 0; url='../kd/kepsek/insertDataGuruBaru.php'");
}
else
{
	echo "Data Gagal di Input. Mohon diulang kembali!";
}


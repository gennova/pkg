<?php
include ('../../function/database.php');
$user=$_GET['user'];
$password=$_GET['pass'];


if ($user == 'user' && $password == 'user')
{
echo 'Loading Data Evaluasi guru ';
header("refresh: 0; url='./hasilEvaluasiGuru.php");
}
else
{

//header("refresh: 0; url='./hasilEvaluasiGuru.php?kode=$insertuser'");
echo '<h3>Data Password Salah! Silahkan Cek password lagi <br /><br /> Cek Administrator!</h3>';
}

?>

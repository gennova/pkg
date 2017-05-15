<?php
include ('../../function/database.php');
$user=$_GET['user'];
$password=$_GET['pass'];
//echo loginchecker($user,$password);
if (loginchecker=='^')
{
//header("refresh: 0; url='./hasilEvaluasiGuru.php?kode=$insertuser'");
echo '<h3>Data Password Salah! Silahkan Cek password lagi <br /><br /> Cek Administrator!</h3>';
}
else
{
//echo 'Loading Data Evaluasi guru ';
header("refresh: 0; url='./hasilEvaluasiGuru.php");
}
?>
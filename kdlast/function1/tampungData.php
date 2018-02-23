<?php

include('./database.php');

$index=$_GET['indexuser'];

$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$bab3=$_GET['bab3'];

$bab4=$_GET['bab4'];

$bab5=$_GET['bab5'];

$bab6=$_GET['bab6'];

$oddeven=$_GET['oddeven'];
$tahun=$_GET['tahun'];

$waktudatenow=$_GET['waktudatenow'];

$new=insertAllData($index,$bab1,$bab2,$bab3,$bab4,$bab5,$bab6,$oddeven,$tahun,$waktudatenow);
echo $bab4;
?>

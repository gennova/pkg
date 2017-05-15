<?php
include ('../../function/database.php');
$waktusekarang=$_GET['waktusekarang'];
$guru=$_GET['guru'];
$cabang=$_GET['cabang'];
$unit=$_GET['unit'];
$matkul=$_GET['matkul'];
$kelas=$_GET['kelas'];
$semester=$_GET['semester'];
$tahun=$_GET['tahun'];

$satu = $_GET['satu'];
$satu2 = $_GET['satu2'];
$satu3 = $_GET['satu3'];
$satu4 = $_GET['satu4'];


$dua = $_GET['dua'];
$dua1 = $_GET['dua1'];
$dua2 = $_GET['dua2'];

$duaa = $_GET['duasuba'];
$duaa1 = $_GET['duasuba1'];
$duaa2 = $_GET['duasuba2'];
$duaa3 = $_GET['duasuba3'];
$duaa4 = $_GET['duasuba4'];
$duaa5 = $_GET['duasuba5'];
$duaa6 = $_GET['duasuba6'];
$duaa7 = $_GET['duasuba7'];


$duab1 = $_GET['duasubb1'];
$duab2 = $_GET['duasubb2'];
$duab3 = $_GET['duasubb3'];


$tiga = $_GET['tiga'];
$tiga1 = $_GET['tiga1'];
$tiga2 = $_GET['tiga2'];
$tiga3 = $_GET['tiga3'];




/*1*/
	$temporarysatu=($satu+$satu2+$satu3+$satu4);
	$hasilsatu= $temporarysatu;

/*2*/
	$temporarydua=($dua+$dua1+$dua2);
	$hasildua= $temporarydua;

/*3*/
	$temporarysubduaa=($duaa+$duaa1+$duaa2+$duaa3+$duaa4+$duaa5+$duaa6+$duaa7);
	$hitungtempsubduaa = ($temporarysubduaa * 2);
	$hasilduaa = $hitungtempsubduaa;

/*4*/
	$temporarysubduab=($duab1+$duab2+$duab3);
	$hasilduab = $temporarysubduab;

/*5*/
	$temporarytiga=($tiga+$tiga1+$tiga2+$tiga3);
	$hasiltiga = $temporarytiga;







$hitung=$hasilsatu+$hasildua+$hasilduaa+$hasilduab+$hasiltiga;




echo $hitung;
if ($hasilsatu && $hasildua && $hasilduaa && $hasilduab && $hasiltiga)
{
header("refresh: 0; url='../../kd/insertAep2.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$hasilsatu && dua=$hasildua && duaatemp=$hasilduaa && duabtemp=$hasilduab && tiga=$hasiltiga && totaltiga=$hitung");
}
else
{
echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
header("refresh: 0; url='../../kd/insertAep.php?waktusekarang=$waktusekarang && ambilguru=$guru && ambilcabang=$cabang && ambilunit=$unit && ambilmatkul=$matkul && ambilkelas=$kelas && ambilsemester=$semester && years=$tahun ");
}

?>




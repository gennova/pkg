<?php

/*Hak Akses   KEPALA SEKOLAH*/
include("database.php");
include ("showGuru.php");
$waktusekarang=$_GET['waktusekarang'];
$guru=$_GET['guru'];
$cabang=$_GET['cabang'];
$unit=$_GET['unit'];
$matkul=$_GET['matkul'];
$kelas=$_GET['kelas'];
$semester=$_GET['semester'];
$tahun=$_GET['tahun'];



$satu = $_GET['satu'];
$dua = $_GET['dua'];
$duaa = $_GET['duasuba'];
$duab = $_GET['duasubb'];
$tiga = $_GET['tiga'];
$totaltiga=$_GET['totaltiga'];
$empat=$_GET['empat'];
$lima=$_GET['lima'];
$enam=$_GET['enam'];

$tujuh=$_GET['tujuh'];
$delapan=$_GET['delapan'];
$sembilan=$_GET['sembilan'];
$sepuluh=$_GET['sepuluh'];

$sebelas=$_GET['sebelas'];
$duabelas=$_GET['duabelas'];
$tigabelas=$_GET['tigabelas'];
$empatbelas=$_GET['empatbelas'];
$limabelas=$_GET['limabelas'];
$enambelas=$_GET['enambelas'];
$tujuhbelas=$_GET['tujuhbelas'];
$kodespv=$_GET['kodespv'];
$idspv=$_GET['idspv'];
$no='';

$bab2=$dua+$duaa+$duab;
$new=showSpv($idspv,$kodespv);

if ($new)
{
	while ($row = mysql_fetch_array($new)) 
	{			
		echo $bab2;
		$nilai1=($row['scorebobot1']+($satu*2))/3;
		$nilai2=($row['scorebobot2']+($bab2*2))/3;
		$nilai3=($row['scorebobot3']+($tiga*2))/3;
		$nilai4=($row['scorebobot4']+($empat*2))/3;
		$nilai5=($row['scorebobot5']+($lima*2))/3;
		$nilai6=($row['scorebobot6']+($enam*2))/3;
		$nilai7=($row['scorebobot7']+($tujuh*2))/3;
		$nilai8=($row['scorebobot8']+($delapan*2))/3;
		$nilai9=($row['scorebobot9']+($sembilan*2))/3;
		$nilai10=($row['scorebobot10']+($sepuluh*2))/3;
		
	}

	$sqllast= "insert into tblShowAll (id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,
scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17) values('$no','$idspv','$kodespv','$tahun','$waktusekarang','$cabang','$unit','$guru','$matkul','$kelas','$semester','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5','$nilai6','$nilai7','$nilai8','$nilai9',
			'$nilai10','$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas','$tujuhbelas')";

	$query1=mysql_query($sqllast);
}

		$sql= "insert into tblEvaluasiKepsek (id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,
		scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17) values('$no','$idspv','$kodespv','$tahun','$waktusekarang','$cabang','$unit','$guru','$matkul','$kelas','$semester','$satu','$bab2','$tiga','$empat','$lima','$enam','$tujuh','$delapan','$sembilan',
		'$sepuluh','$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas','$tujuhbelas')";
		//echo $sql;
		
		$query=mysql_query($sql);
		if ($query && $query1)
		{
	
			echo "<script type='text/javascript'> alert(' Terima kasih Telah Evaluasi ! Data telah masuk di-input');</script>";
			header("refresh: 0; url='../kd/index.php'");

		}
		else
		{

			echo "failed";


		}




?>

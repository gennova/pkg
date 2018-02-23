<?php

/*Hak Akses Supervisor TIDAK BOLEH KEPALA SEKOLAH*/
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

		$sql= "insert into tblInsertDataSpv (id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,
		scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17) values('$no','$idspv','$kodespv','$tahun','$waktusekarang','$cabang','$unit','$guru','$matkul','$kelas','$semester','$satu','$bab2','$tiga','$empat','$lima','$enam','$tujuh','$delapan','$sembilan',
		'$sepuluh','$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas','$tujuhbelas')";
		//echo $sql;
		
		$query=mysql_query($sql);
		if ($query)
		{
	
			echo "<script type='text/javascript'> alert(' Terima kasih Telah Evaluasi ! Data telah masuk di-input');</script>";
			header("refresh: 0; url='../kd/index.php'");

		}
		else
		{

			echo "failed";


		}




?>

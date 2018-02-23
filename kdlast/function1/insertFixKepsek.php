<?php
include("database.php");
$waktusekarang=$_GET['waktusekarang'];
$guru=$_GET['guru'];
$cabang=$_GET['cabang'];
$unit=$_GET['unit'];
$matkul=$_GET['matkul'];
$kelas=$_GET['kelas'];
$semester=$_GET['semester'];
$tahun=$_GET['tahun'];



$satu = $_GET['satu']* 2;
$dua = $_GET['dua'] * 2;
$duaa = $_GET['duasuba']* 2;
$duab = $_GET['duasubb']* 2;
$tiga = $_GET['tiga']* 2;
$totaltiga=$_GET['totaltiga']* 2;
$empat=$_GET['empat']* 2;
$lima=$_GET['lima']* 2;
$enam=$_GET['enam']* 2;

$tujuh=$_GET['tujuh']* 2;
$delapan=$_GET['delapan']* 2;
$sembilan=$_GET['sembilan']* 2;
$sepuluh=$_GET['sepuluh']* 2;

$sebelas=$_GET['sebelas'];
$duabelas=$_GET['duabelas'];
$tigabelas=$_GET['tigabelas'];
$empatbelas=$_GET['empatbelas'];
$limabelas=$_GET['limabelas'];
$enambelas=$_GET['enambelas'];
$tujuhbelas=$_GET['tujuhbelas'];
$kodespv=$_GET['kodespv'];
$idspv=$_GET['idspv'];
$no=1;

$bab2=$dua+$duaa+$duab;

$sql= "insert into tbl (id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,
scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17) values('$no','$idspv','$kodespv','$tahun','$waktusekarang','$cabang','$unit','$guru','$matkul','$kelas','$semester','$satu','$bab2','$tiga','$empat','$lima','$enam','$tujuh','$delapan','$sembilan',
'$sepuluh','$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas','$tujuhbelas')";
echo $sql;

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

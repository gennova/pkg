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
$dua = $_GET['dua'];
$duaa = $_GET['duasuba'];
$duab = $_GET['duasubb'];
$tiga = $_GET['tiga'];
$totaltiga=$_GET['totaltiga'];
$empat=$_GET['empat'];
$lima=$_GET['lima'];
$enam=$_GET['enam'];

$tujuh=$_GET['tujuh'];
$tujuh1=$_GET['tujuh1'];
$tujuh2=$_GET['tujuh2'];

$delapan=$_GET['delapan'];
$delapan1=$_GET['delapan1'];
$delapan2=$_GET['delapan2'];

$sembilan=$_GET['sembilan'];
$sembilan1=$_GET['sembilan1'];
$sembilan2=$_GET['sembilan2'];

$sepuluh=$_GET['sepuluh'];
$sepuluh1=$_GET['sepuluh1'];
echo $satu;

global $tujuhtemp;
global $delapantemp;
global $sembilantemp;
global $sepuluhtemp;

/*7*/
	$tujuhtemp=($tujuh+$tujuh1+$tujuh2) ;
	$hasiltujuh= $tujuhtemp;

/*8*/
	$delapantemp =($delapan+$delapan1+$delapan2);
	$hasildelapan= $delapantemp;

/*9*/
	$sembilantemp =($sembilan+$sembilan1+$sembilan2) ;
	$hasilsembilan= $sembilantemp;

/*10*/
	$sepuluhtemp =($sepuluh+$sepuluh1);
	$hasilsepuluh=$sepuluhtemp;


$totalallnext3= $hasiltujuh + $hasildelapan + $hasilsembilan;
$alltotal= $totaltiga+$totalallnext3;

if ($alltotal && $tujuhtemp && $hasildelapan && $hasilsembilan && $hasilsepuluh)
{
	header("refresh: 0; url='../../kd/insertAep4.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$satu && dua=$dua && duaatemp=$duaa && duabtemp=$duab && tiga=$tiga && totaltiga=$totaltiga && empat= $empat && lima= $lima && enam=$enam && tujuh=$hasiltujuh && delapan=$hasildelapan && sembilan=$hasilsembilan && next3= $totalallnext3 && sumtotal=$alltotal && sepuluh=$hasilsepuluh");
}
else
{

echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";

header("refresh: 0; url='../../kd/insertAep3.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$satu && dua=$dua && duaatemp=$duaa && duabtemp=$duab && tiga=$tiga && totaltiga=$totaltiga && empat= $empat && lima= $lima && enam=$enam");
}

?>

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
$empat1=$_GET['empat1'];
$empat2=$_GET['empat2'];
$empat3=$_GET['empat3'];
$empat4=$_GET['empat4'];
$empat5=$_GET['empat5'];
$empat6=$_GET['empat6'];

$lima=$_GET['lima'];
$lima1=$_GET['lima1'];
$lima2=$_GET['lima2'];
$lima3=$_GET['lima3'];
$lima4=$_GET['lima4'];
$lima5=$_GET['lima5'];

$enam=$_GET['enam'];
$enam1=$_GET['enam1'];
$enam2=$_GET['enam2'];
$enam3=$_GET['enam3'];


global $empattemp;
global $limatemp;
global $enamtemp;

/*4*/

$empattemp = ($empat+$empat1+$empat2+$empat3+$empat4+$empat5+$empat6);
$hasilempat = $empattemp;

/*5*/
$limatemp = ($lima+$lima1+$lima2+$lima3+$lima4+$lima5) ;
$hasillima= $limatemp;

/*6*/
$enamtemp = ($enam+$enam1+$enam2+$enam3);
$hasilenam= $enamtemp;

$totalnext3= $hasilempat+$hasillima+$hasilenam;
echo $totalnext3;

if ($totalnext3 && $empattemp && $limatemp && $enamtemp)
{
	header("refresh: 0; url='../../kd/insertAep3.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$satu && dua=$dua && duaatemp=$duaa && duabtemp=$duab && tiga=$tiga && totaltiga=$totaltiga && empat= $hasilempat && lima= $hasillima && enam=$hasilenam && totalnext3=$totalnext3");
}
else
{
echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
header("refresh: 0; url='../../kd/insertAep2.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$satu && dua=$dua && duaatemp=$duaa && duabtemp=$duab && tiga=$tiga && totaltiga=$totaltiga");

}

?>

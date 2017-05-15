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


$sebelas=$_GET['kehadirankelas'];
$duabelas=$_GET['ketepatanwaktukerja'];
$tigabelas=$_GET['kontribusidalamkegiatankelas'];
$empatbelas=$_GET['kontribusipelatihan'];
$limabelas=$_GET['kesediaanberbagi'];
$enambelas=$_GET['citrasekolah'];
$tujuhbelas=$_GET['cattamb'];

$kodespv=$_GET['kodespv'];

global $empattemp;
global $limatemp;
global $enamtemp;
global $tujuhtemp;
global $delapantemp;
global $sembilantemp;
global $sepuluhtemp;


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


	$temporarysubduab=($duab1+$duab2+$duab3);
	$hasilduab = $temporarysubduab;



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


$sumtotal= $empat+$lima+$enam+$tujuh+$delapan+$sembilan+$sepuluh ;

$hitung=$hasilsatu+$hasildua+$hasilduaa+$hasilduab+$hasiltiga;


$all= ($sumtotal && $sebelas && $tigabelas &&$empatbelas && $limabelas&& $enambelas);

if ($all)
{
//echo $lima;
	header("refresh: 0; url='./insertToSql.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$hasilsatu && dua=$temporarydua && duaatemp=$hasilduaa && duabtemp=$hasilduab && tiga=$hasiltiga && totaltiga=$hitung && empat= $hasilempat && lima= $hasillima && enam=$hasilenam && tujuh=$hasiltujuh && delapan=$hasildelapan && sembilan=$hasilsembilan && sumtotal=$sumtotal && sepuluh=$hasilsepuluh && sebelas=$sebelas && duabelas=$duabelas && tigabelas=$tigabelas && empatbelas=$empatbelas && limabelas=$limabelas && enambelas=$enambelas && tujuhbelas=$tujuhbelas && kodespv=$kodespv");


}
else
{
	echo "<script type='text/javascript'> alert('Data ada yang belum di-isi! - Mohon Dicek data nya yaaa');</script>";
header("refresh: 0; url='../../kd/insertAep.php?waktusekarang=$waktusekarang && ambilguru=$guru && ambilcabang=$cabang && ambilunit=$unit && ambilmatkul=$matkul && ambilkelas=$kelas && ambilsemester=$semester && years=$tahun && kodespv=$kodespv ");

}

?>

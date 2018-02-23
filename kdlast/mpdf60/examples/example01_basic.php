<?php 

include('../../function/database.php');

include('../../function/showGuru.php');
include("../mpdf.php");


$kode=$_GET["kode"];
$new=tampilpdf($kode);

while($row = mysql_fetch_array($new)){
	if ($row['sum'] < 151)
	{
		 $bobot1="Bad ( D ) ";
	}
	else if ($row['sum'] >= 151 && $row['sum'] <= 180)
	{
		$bobot1="Below Average ( C ) ";
	}

	else if ($row['sum'] >= 181 && $row['sum'] <= 210)
	{
		$bobot1="Average ( BC ) ";
	}


	else if ($row['sum'] >= 211 && $row['sum'] <= 240)
	{
		$bobot1="Good ( B ) ";
	}

	else if ($row['sum'] >= 241 && $row['sum'] <= 270)
	{
		$bobot1="Very Good ( AB ) ";
	}

	else if ($row['sum'] >= 271)
	{
		$bobot1="Excellent ( A )";
	}


$html .= '<tr><td>'.$row['nomor'].'</td><td>' . $row['nilai']. '</td>';

$html = '



<div style="margin-top: 0pt; position:absolute; left:710px; ">
Hal.1

</div>

<div style="margin-top:20pt; position:absolute; left:90px; ">
<img style="vertical-align: top" src="logo.png" width="190" />
</div>

<div style="margin-top:30pt; position:absolute; left:340px; ">
<h2><a name="top"></a>
<center><u>YAYASAN <br /> PENYELENGGARAAN ILAHI <br /> INDONESIA</u></center>
</a></h2>
</div>


<div style="margin-top:129pt; position:absolute; left:160px; ">
<h2> <u>PENILAIAN KINERJA GURU </u></h2>
</div>


<div style="margin-top: 175pt; position:absolute; left:90px; ">
<table border="0">
<tbody>
<tr>
	<td>Kantor Cabang </td>
	<td>:</td>
	<td><u>'.$row['kantorcabang'].'</u></td>
</tr>

<tr>
	<td>Unit </td>
	<td>:</td>
	<td><u>'.$row['unit'].'</u></td>
</tr>

<tr>
	<td>Nama Guru  </td>
	<td>:</td>
	<td><u>'.$row['namaguru'].'</u></td>
</tr>

<tr>	
	<td>Mata Pelajaran </td>
	<td>:</td>
	<td><u>'.$row['matapelajaran'].'</u></td>
</tr>

<tr>
	<td>Kelas </td>
	<td>:</td>
	<td><u>'.$row['kelas'].'</u></td>
</tr>


<tr>
	<td>Guru Supervisor</td>

	<td>:</td>
	<td><u>'.$row['guruspv'].'</u></td>
</tr>
</tbody>
</table>
</div>

<div style="margin-top: 175pt; position:absolute; left:425px; ">

<table border="0">
<tr>
	<td>Semester </td>
	<td>:</td>	
	<td><u>'.$row['semester'].'</u></td>
</tr>

<tr>

	<td>Tahun Ajaran </td>
	<td>:</td>	
	<td><u>'.$row['tahun'].'</u></td>
</tr>



<tr>
	<td>Waktu Insert Evaluasi</td>
	<td>:</td>	
	<td><u>'.$row['waktusekarang'].'</u></td>
</tr>


<tr>
	<td>Nilai Total</td>
	<td>:</td>	

	<td><u>'.$row['sum'].'</u></td>

</tr>


<tr>

	<td>Status Nilai</td>
	<td>:</td>
	<td><u>'.$bobot1.'</u></td>


</tr>


</tbody>
</table>
</div>

<div style="margin-top: 268pt; position:absolute; left:90px; ">

<p>----------------------------------------------------------------------------------------------------------------------</p>
</div>
<div style="margin-top: 299pt; position:absolute; left:90px; ">
<table border="0">
<tbody>
<tr>
	<td>No </td>
	<td>Keterangan</td>
	<td></td>
	<td>Bobot Nilai</td>
</tr>


<tr>
	<td>1</td>
	<td>Kompetensi Pendagosis</td>
	<td>--</td>	
	<td>'.$row['scorebobot1'].'</td>
</tr>


<tr>
	<td>2</td>
	<td>Kompetensi Mengajar</td>
	<td></td>	
	<td>'.$row['scorebobot2'].'</td>
</tr>


<tr>
	<td>3</td>
	<td>Kompetensi Pengetahuan</td>
	<td></td>	
	<td>'.$row['scorebobot3'].'</td>
</tr>

<tr>
	<td>4</td>
	<td>Kompetensi Sikap</td>
	<td></td>	
	<td>'.$row['scorebobot4'].'</td>
</tr>


<tr>
	<td>5</td>
	<td>Kompetensi Perilaku</td>
	<td></td>	
	<td>'.$row['scorebobot5'].'</td>
</tr>


<tr>
	<td>6</td>
	<td>Kompetensi Spiritual</td>
	<td></td>	
	<td>'.$row['scorebobot6'].'</td>
</tr>

<tr>
	<td>7</td>
	<td>Kompetensi Komunikasi</td>
	<td></td>	
	<td>'.$row['scorebobot7'].'</td>
</tr>

<tr>
	<td>8</td>
	<td>Kompetensi Bahasa Inggris</td>
	<td></td>	
	<td>'.$row['scorebobot8'].'</td>
</tr>

<tr>
	<td>9</td>
	<td>Kompetensi Kolaborasi</td>
	<td></td>	
	<td>'.$row['scorebobot9'].'</td>
</tr>

<tr>
	<td>10</td>
	<td>Kompetensi Teknologi Informasi dan Komunikasi</td>
	<td></td>	
	<td>'.$row['scorebobot10'].'</td>
</tr>

</tbody>
</table>

</td>
</tr>
</table>

</div>

';
$x='


<div style="margin-top: 0pt; position:absolute; left:710px; ">
Hal.2

</div>


<div style="margin-top: 55pt; position:absolute; left:425px; ">

<table border="0">
<tr>
	<td>Semester </td>
	<td>:</td>	
	<td><u>'.$row['semester'].'</u></td>
</tr>

<tr>


	<td>Tahun Ajaran </td>
	<td>:</td>	
	<td><u>'.$row['tahun'].'</u></td>
</tr>



<tr>
	<td>Waktu Insert Evaluasi</td>
	<td>:</td>	
	<td><u>'.$row['waktusekarang'].'</u></td>
</tr>


<tr>
	<td>Nilai Total</td>
	<td>:</td>	

	<td><u>'.$row['sum'].'</u></td>

</tr>


<tr>

	<td>Status Nilai</td>
	<td>:</td>
	<td><u>'.$bobot1.'</u></td>


</tr>


</tbody>
</table>
</div>

<div style="margin-top: 55pt; position:absolute; left:90px; ">
<table border="0">

<tbody>
<tr>
	<td>Kantor Cabang </td>
	<td>:</td>

	<td><u>'.$row['kantorcabang'].'</u></td>
</tr>

<tr>
	<td>Unit </td>

	<td>:</td>
	<td><u>'.$row['unit'].'</u></td>
</tr>


<tr>
	<td>Nama Guru  </td>
	<td>:</td>
	<td><u>'.$row['namaguru'].'</u></td>
</tr>


<tr>	
	<td>Mata Pelajaran </td>
	<td>:</td>

	<td><u>'.$row['matapelajaran'].'</u></td>
</tr>

<tr>
	<td>Kelas </td>

	<td>:</td>
	<td><u>'.$row['kelas'].'</u></td>
</tr>


<tr>
	<td>Guru Supervisor</td>
	<td>:</td>
	<td><u>'.$row['guruspv'].'</u></td>
</tr>
</tbody>
</table>
</div>



<div style="margin-top: 158pt; position:absolute; left:90px; ">

<p>----------------------------------------------------------------------------------------------------------------------</p>
</div>
<div style="margin-top: 199pt; position:absolute; left:90px; ">
<table border="0">
<tbody>







<tr>
	<td>11</td>
	<td>Kehadiran Kelas</td>
	<td></td>	
	<td>'.$row['scorebobot11'].'</td>
</tr>

<tr>
	<td>12</td>
	<td>Ketepatan Waktu Kerja</td>
	<td></td>	
	<td>'.$row['scorebobot12'].'</td>
</tr>


<tr>
	<td>13</td>
	<td>Kontribusi Dalam Kegiatan Sekolah</td>
	<td></td>	
	<td>'.$row['scorebobot13'].'</td>
</tr>

<tr>
	<td>14</td>
	<td>Kontribusi Dalam Pelatihan</td>
	<td></td>	
	<td>'.$row['scorebobot14'].'</td>
</tr>

<tr>
	<td>15</td>
	<td>Kesediaan Untuk Berbagi</td>
	<td></td>	
	<td>'.$row['scorebobot15'].'</td>
</tr>



<tr>
	<td>16</td>
	<td>Kemauan dan Kemampuan Mengangkat Citra Sekolah</td>
	<td></td>	
	<td>'.$row['scorebobot16'].'</td>
</tr>


<tr>
	<td>17</td>
	<td>Catatan Tambahan</td>

	<td></td>	
	<td>'.$row['scorebobot17'].'</td>
</tr>


<tr>
	<td></td>
	<td><br /><br /><br /> <br />Tanda Tangan SPV<br /><br /><br /> <br /> '.$row['guruspv'].'</td>
	<td></td>	
	<td></td>
	<td><br /><br /><br /> <br />Tanda Tangan<br /><br /><br /> <br /> .......................</td>
</tr>




</tbody>
</table>

</td>
</tr>
</table>

</div>


';


}




$mpdf=new mPDF('c'); 
$mpdf->WriteHTML($html);
$mpdf->AddPage();
$mpdf->WriteHTML($x);

$mpdf->Output();
exit;
?>

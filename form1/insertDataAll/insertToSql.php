<?php
include ('../../function/database.php');

include ('../../function/showGuru.php');
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
$duaa = $_GET['duaatemp'];
$duab = $_GET['duabtemp'];
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
$alltotal=$_GET['sumtotal'];
$kodespv=$_GET['kodespv'];

$sumtotal=$totaltiga+$empat+$lima+$enam+$tujuh+$delapan+$sembilan+$sepuluh;


$shownamaspv=kodeSpv($kodespv);
if ($shownamaspv)
{
	while ($row = mysql_fetch_array($shownamaspv))
	{
		echo "<tr>";
		//echo "<td>".$row['guruspv']."</td>";
		echo "</tr>";
	
?>


<h3> DETAIL PENILAIAN </h3>


    <form method ="GET" action ="../../function1/insertFixUtama.php">
   
            <div class="table-responsive" >
                <table class="table table-hover" border="3"  bgcolor="#99999">
                    <thead>
                        <tr>
                       		<th bgcolor="#BCF5A9">No</th>
				
                       		<th bgcolor="#BCF5A9">Guru</th>
				<th bgcolor="#BCF5A9">Cabang</th>
				<th bgcolor="#BCF5A9">Unit</th>
				<th bgcolor="#BCF5A9">Mata Pelajaran</th>
				<th bgcolor="#BCF5A9">Kelas</th>
				<th bgcolor="#BCF5A9">Semester</th>
				<th bgcolor="#BCF5A9">Tahun</th>
				<th bgcolor="#BCF5A9">Total Nilai </th>
				<th bgcolor="#BCF5A9">Detail Penilaian</th>
		
			 </tr>

                    </thead>
		<tbody>
			<tr>
			<td>1</td>
			<td>	
				<?php echo $guru;?>
			</td>
			<td>	
				<?php echo $cabang;?>
			</td>
			<td>	
				<?php echo $unit;?>
			</td>
			<td>	
				<?php echo $matkul;?>
			</td>
			<td>	
				<?php echo $kelas;?>
			</td>
			<td>	
				<?php echo $semester;?>
			</td>
			<td>	
				<?php echo $tahun;?>
			</td>
			<td>	
				<?php echo $sumtotal;?>
			</td>
			<input type="hidden" name="waktusekarang" value="<?php echo $_GET['waktusekarang'];?>">
			<input type="hidden" name="guru" value="<?php echo $_GET['guru'];?>">
			<input type="hidden" name="cabang" value="<?php echo $_GET['cabang'];?>">	
			<input type="hidden" name="unit" value="<?php echo $_GET['unit'];?>">
			<input type="hidden" name="matkul" value="<?php echo $_GET['matkul'];?>">
			<input type="hidden" name="kelas" value="<?php echo $_GET['kelas'];?>">
			<input type="hidden" name="semester" value="<?php echo $_GET['semester'];?>">
			<input type="hidden" name="tahun" value="<?php echo $_GET['tahun'];?>">

			<input type="hidden" name="satu" value="<?php echo $_GET['satu'];?>">
			<input type="hidden" name="dua" value="<?php echo $_GET['dua'];?>">
			<input type="hidden" name="duasuba" value="<?php echo $_GET['duaatemp'];?>">
			<input type="hidden" name="duasubb" value="<?php echo $_GET['duabtemp'];?>">
			<input type="hidden" name="tiga" value="<?php echo $_GET['tiga'];?>">
			<input type="hidden" name="totaltiga" value="<?php echo $_GET['totaltiga'];?>">

			<input type="hidden" name="empat" value="<?php echo $_GET['empat'];?>">
		 	<input type="hidden" name="lima" value="<?php echo $_GET['lima'];?>">
		 	<input type="hidden" name="enam" value="<?php echo $_GET['enam'];?>">
		 
			<input type="hidden" name="tujuh" value="<?php echo $_GET['tujuh'];?>">
		 	<input type="hidden" name="delapan" value="<?php echo $_GET['delapan'];?>">
		 	<input type="hidden" name="sembilan" value="<?php echo $_GET['sembilan'];?>">
			<input type="hidden" name="sepuluh" value="<?php echo $_GET['sepuluh'];?>">
			<input type="hidden" name="sebelas" value="<?php echo $_GET['sebelas'];?>">
			<input type="hidden" name="duabelas" value="<?php echo $_GET['duabelas'];?>">
			<input type="hidden" name="tigabelas" value="<?php echo $_GET['tigabelas'];?>">
			<input type="hidden" name="empatbelas" value="<?php echo $_GET['empatbelas'];?>">
			<input type="hidden" name="limabelas" value="<?php echo $_GET['limabelas'];?>">
			<input type="hidden" name="enambelas" value="<?php echo $_GET['enambelas'];?>">
			<input type="hidden" name="tujuhbelas" value="<?php echo $_GET['tujuhbelas'];?>">
			<input type="hidden" name="idspv" value="<?php echo $kodespv;?>">
			<input type="hidden" name="kodespv" value="<?php echo $row['guruspv'];?>">
			<!--<input type="text" name="kodespv" value="<?php echo $row['nipguruspv'];?>">	-->

			
					<?php echo"<td>"."<a href='./cek/cekdata.php?waktusekarang=$waktusekarang && guru=$guru && cabang=$cabang && unit=$unit && matkul=$matkul && kelas=$kelas && semester=$semester && tahun=$tahun && satu=$satu && dua=$dua && duaatemp=$duaa && duabtemp=$duab && tiga=$tiga && totaltiga=$totaltiga && empat= $empat && lima= $lima && enam=$enam && tujuh=$tujuh && delapan=$delapan && sembilan=$sembilan && sumtotal=$sumtotal && sepuluh=$sepuluh && sebelas=$sebelas && duabelas=$duabelas && tigabelas=$tigabelas && empatbelas=$empatbelas && limabelas=$limabelas && enambelas=$enambelas && tujuhbelas=$tujuhbelas' && idspv=$kodespv>Detail Penilaian</a></td>";?>
		<tr>

		</tbody>
		</table>
	
	<br />	
	 <button type="submit"  onclick="return confirm('Apakah Data Ini Benar??')">Insert Nilai AEP Guru </button>
</form>
<?php
}
}		
		
?>
<!--
<table class="table table-hover" border="1">
	<thead>
		
		<tr>
		    <th>No</th>
		    <th>Persiapan Pembelajaran</th>
		    <th>Sub</th>
		    <th>Score</th>
					 
		</tr>
	</thead>



	<tbody>

		
	

		<tr>
			<td>1</td>
			<td>	
				KOMPETENSI PEDAGOSIS
			</td>
			<th></th>
			<th><?php echo $satu;?></th>
		<tr>

		<tr>
			<td rowspan=3>2</td>
			<td rowspan=3>KOMPETENSI MENGAJAR 
			</td>
			<td >Kegiatan Pembuka</td>
			<th><?php echo $dua;?></th>
					
			<tr>
				<td >Kegiatan Inti</td>
				<th><?php echo $duaa;?></th>
			</tr>
						
			<tr>
				<td >Kegiatan Penutup</td>
				<th><?php echo $duab;?></th>
			</tr>
						
		</tr>
	
		
		<tr>
			<td>3</td>
			<td>	
				KOMPETENSI PENGETAHUAN
			</td>
			<th></th>
			<th><?php echo $tiga;?></th>
		<tr>

		<tr>
			<td>4</td>
			<td>	
				KOMPETENSI SIKAP
			</td>
			<th></th>
			<th><?php echo $empat;?></th>
		<tr>

		
		<tr>
			<td>5</td>
			<td>	
				KOMPETENSI PERILAKU
			</td>
			<th></th>
			<th><?php echo $lima;?></th>
		<tr>

		
		<tr>
			<td>6</td>
			<td>	
				KOMPETENSI SPIRITUAL
			</td>
			<th></th>
			<th><?php echo $enam;?></th>
		<tr>

		
		<tr>
			<td>7</td>
			<td>	
				KOMPETENSI KOMUNIKASI
			</td>
			<th></th>
			<th><?php echo $tujuh;?></th>
		<tr>

		
		<tr>
			<td>8</td>
			<td>	
				KOMPETENSI BAHASA INGGRIS
			</td>
			<th></th>
			<th><?php echo $delapan;?></th>
		<tr>
	
				
		<tr>
			<td>9</td>
			<td>	
				KOMPETENSI KOLABORASI
			</td>
			<th></th>
			<th><?php echo $sembilan;?></th>
		<tr>



		

		


		<tr>
			<td>10</td>
			<td>	
				KOMPETENSI TEKNOLOGI INFORMASI DAN KOMUNIKASI
			</td>
			<th></th>
			<th><?php echo $sepuluh;?></th>
		<tr>
		
		<tr>
			<td></td>
			<td>	
				SUM TOTAL 
			</td>
			<th></th>
			<th><?php echo $sumtotal;?></th>
		<tr>


		<tr>
			<td colspan="4"><center><h4>CATATAN TAMBAHAN</h4></center></td>
		<tr>

		
		<tr>
			<td>11</td>
			<td>	
				Kehadiran di sekolah : 
			</td>
			<th></th>
			<th><?php echo $sebelas;?></th>
		<tr>
		
		<tr>
			<td>12</td>
			<td>	
				Ketepatan Waktu Kerja : 
			</td>
			<th></th>
			<th><?php echo $duabelas;?></th>
		<tr>

		<tr>
			<td>13</td>
			<td>	
				Kontribusi Dalam Kegiatan Sekolah :
			</td>
			<th></th>
			<th><?php echo $tigabelas;?></th>
		<tr>

		
		<tr>
			<td>14</td>
			<td>	
				Kontribusi Dalam Pelatihan :
			</td>
			<th></th>
			<th><?php echo $empatbelas;?></th>
		<tr>

		<tr>
			<td>15</td>
			<td>	
				Kesediaan Untuk Berbagi:
			</td>
			<th></th>
			<th><?php echo $limabelas;?></th>
		<tr>

		<tr>
			<td>16</td>
			<td>	
				Kemauan dan Kemampuan Mengangkat Citra Sekolah :

			</td>
			<th></th>
			<th><?php echo $enambelas;?></th>
		<tr>

		<tr>
			<td>17</td>
			<td>	
				Lain - Lain 
			</td>
			<th></th>
			<th><?php echo $tujuhbelas;?></th>
		<tr>




		</tbody>

-->



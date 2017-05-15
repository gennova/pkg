<?php
include ('../../../function/database.php');
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

$sumtotal=$totaltiga+$empat+$lima+$enam+$tujuh+$delapan+$sembilan+$sepuluh;
?>


<h3> DETAIL PENILAIAN </h3>


    

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





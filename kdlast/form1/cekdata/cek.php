<?php


$no1=$_GET['no1'];
$no2a=$_GET['no2a'];
$no2b=$_GET['no2b'];
$no3=$_GET['no3'];
$no4=$_GET['no4'];
$no5a=$_GET['no5a'];
$no5b=$_GET['no5b'];
$no6=$_GET['no6'];
$no7=$_GET['no7'];
$no8a=$_GET['no8a'];
$no8b=$_GET['no8b'];
$no9a=$_GET['no9a'];
$no9b=$_GET['no9b'];
$no10a=$_GET['no10a'];
$no10b=$_GET['no10b'];
$no10c=$_GET['no10c'];
$no11=$_GET['no11'];
$no12=$_GET['no12'];
$no13=$_GET['no13'];
$no14a=$_GET['no14a'];
$no14b=$_GET['no14b'];
$no14c=$_GET['no14c'];
$no14d=$_GET['no14d'];

$no15a=$_GET['no15a'];
$no15b=$_GET['no15b'];
$no16=$_GET['no16'];
$no17=$_GET['no17'];

$no18=$_GET['no18'];

$no19=$_GET['no19'];
$duapuluhX=$_GET['no20'];


?>
<h3> Detail Penilaian </h3>

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
		<td colspan=4><center> BAB A </center></td>
	</tr>

		<tr>
			<td>1</td>
			<td>	
				Kelengkapan Administrasi 
				(Prota , Prosem , Silabus ,rpp)
			</td>
			<th></th>
			<th><?php echo $no1;?></th>
		<tr>

		<tr>
			<td rowspan=2>2</td>
			<td rowspan=2>Kelengkapan dan kejelasan unsur-unsur RPP
			</td>
			<td >2a</td>
			<th><?php echo $no2a;?></th>
		
		<tr>
			<td>2b</td>
			<th><?php echo $no2b;?></th>
		<tr>

	<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB A </center></b></td>
		<td><b> <?php echo $no1+$no2a+$no2b ?></b></td>
	</tr>



	<tr>
		<td colspan=3><center> BAB B </center></td>
		
	</tr>


	<tr>
			<td>3</td>
			<td>	
				Kesiapan guru 
				(tepat waktu, penampilan awal,
				perlengkapan, presensi siswa)
			</td>
			<th></th>
			<th><?php echo $no3;?></th>
	<tr>

	<tr>
			<td>4</td>
			<td>						
				Guru melakukan Apersepsi,
				Hook dan menyampaikan tujuan pembelajaran
			</td>
			<th></th>
			<th><?php echo $no4;?></th>
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB B </center></b></td>
		<td><b> <?php echo $no3+$no4 ?></b></td>
	</tr>

	<tr>
		<td colspan=4><center> BAB C </center></td>
	</tr>


	<tr>
			<td rowspan=2>5</td>
			<td rowspan=2>						
				Penguasaan guru terhadap materi
			</td>
			<td>5a</td>
			<th><?php echo $no5a;?></th>

		<tr>
		
			<td>5b</td>
			<th><?php echo $no5b;?></th>
		<tr>

	<tr>


	<tr>
			<td>6</td>
			<td>						
				Penggunaan bahasa yang komunikatif
			</td>
			<th></th>
			<th><?php echo $no6;?></th>
	<tr>

	<tr>
			<td>7</td>
			<td>						
				Kemampuan menggunakan metode pembelajaran yang tepat
			</td>
			<th></th>
			<th><?php echo $no7;?></th>
	<tr>

	
	<tr>
			<td rowspan=2>8</td>
			<td rowspan=2>						
				Ketepatan penggunaan media, alat, dan sumber pembelajaran
			</td>
			<td>8a</td>
			<th><?php echo $no8a;?></th>

		<tr>
		
			<td>8b</td>
			<th><?php echo $no8b;?></th>
		<tr>

	<tr>


	<tr>
			<td rowspan=2>9</td>
			<td rowspan=2>						
				Kemampuan guru memberikan motivasi/penguatan kepada siswa
			</td>
			<td>9a</td>
			<th><?php echo $no9a;?></th>

		<tr>
		
			<td>9b</td>
			<th><?php echo $no9b;?></th>
		<tr>

	<tr>


	
	<tr>
			<td rowspan=4>10</td>
			<td rowspan=4>						
				Kemampuan guru melibatkan siswa dalam menemukan, membangun/mengkonstruksi konsep
			</td>
			<td>10a</td>
			<th><?php echo $no10a;?></th>

		<tr>
		
			<td>10b</td>
			<th><?php echo $no10b;?></th>
		<tr>
		<tr>
		
			<td>10c</td>
			<th><?php echo $no10c;?></th>
		<tr>

	<tr>


<!-- 11 -->
	<tr>
			<td>11</td>
			<td>						
					
				Kemampuan guru dalam menyampaikan materi
			</td>
			<th></th>
			<th><?php echo $no11;?></th>
	<tr>

	<tr>
			<td>12</td>
			<td>						
				Guru memberikan penilaian kinerja kepada siswa 
				selama kegiatan PBM (bukan test tertulis)
			</td>
			<th></th>
			<th><?php echo $no12;?></th>
	<tr>

	
	<tr>
			<td>13</td>
			<td>						
					
				Kemampuan guru menerapkanan COIS dalam PBM
			</td>
			<th></th>
			<th><?php echo $no13;?></th>
	<tr>



	
	<tr>
			<td rowspan=6>14</td>
			<td rowspan=6>						
				Kemampuan guru menerapkanan COIS dalam PBM
			</td>
			<td>14a</td>
			<th><?php echo $no14a;?></th>

		<tr>
		
			<td>14b</td>
			<th><?php echo $no14b;?></th>
		<tr>
		<tr>
		
			<td>14c</td>
			<th><?php echo $no14c;?></th>
		<tr>
	
		<tr>
		
			<td>14d</td>
			<th><?php echo $no14d;?></th>
		<tr>

	<tr>
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB C </center></b></td>
		<td><b> <?php echo $no5a+$no5b+$no6+$no7+$no8a+$no8b
			+$no9a+$no9b+$no10a+$no10b+$no10c+$no11+$no12+$no13+$no14a+$no14b+$no14c+$no14d ?></b></td>
	</tr>
	


	<tr>
		<td colspan=4><center> BAB D </center></td>
	</tr>


	
	<tr>
			<td rowspan=2>15</td>
			<td rowspan=2>						
				Kemampuan guru memberikan motivasi/penguatan kepada siswa
			</td>
			<td>15a</td>
			<th><?php echo $no15a;?></th>

		<tr>
		
			<td>15b</td>
			<th><?php echo $no15b;?></th>
		<tr>

	<tr>

	
	<tr>
			<td>16</td>
			<td>						
					
					
				Kemampuan guru mengadakan evaluasi
			</td>
			<th></th>
			<th><?php echo $no16;?></th>
	<tr>


	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB D </center></b></td>
		<td><b> <?php echo $no15a+$no15b+$no16?></b></td>
	</tr>

	
	<tr>
		<td colspan=4><center> BAB E </center></td>
	</tr>

	<tr>
			<td>17</td>
			<td>						
					
			Ekspresi guru
			</td>
			<th></th>
			<th><?php echo $no17;?></th>
	<tr>

	<tr>
			<td>18</td>
			<td>						
					
			Kerapian Guru
			</td>
			<th></th>
			<th><?php echo $no18;?></th>
	<tr>


		

	<tr>
			<td>19</td>
			<td>			
			Kematangan emosi guru (kehangatan, kesabaran, 
			keramahan, dan kepedulian)
			</td>
			<th></th>
			<th><?php echo $no19;?></th>
	<tr>


	
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB D </center></b></td>
		<td><b> <?php echo $no17+$no18+$no19?></b></td>
	</tr>

	<tr>
		<td colspan=4><center> BAB F </center></td>
	</tr>
		


		
	<tr>
			<td>20</td>
			<td>						
			Kesesuaian PBM dengan RPP
			</td>
			<th></th>
			<th><?php echo $duapuluhX;?></th>
	<tr>


		

		<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB E </center></b></td>
		<td><b> <?php echo $duapuluhX?></b></td>
	</tr>







	</tbody>


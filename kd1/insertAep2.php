<!DOCTYPE html>
<html lang="en">

<style type="text/css">
    .td
    {
            text-align: center;
            vertical-align: middle;
    }
</style>
    
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insert AEP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start AEP KD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="pilihGuru.php">Insert Aep</a>
                    </li>
                    <li>
                        <a href="insertGuru.php">Insert Guru</a>
                    </li>
                    <li>
                        <a href="loginkepsek.php">Login Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>SUPERVISI GURU</h2>
                        <hr class="small">
                        <span class="subheading">Have questions? Contact 08190128121</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->


    <div class="container" left=" 10px" ; >
                <h2><center>INSTRUKSI:</center></h2>
                1. Bpk/Ibu memiliki tugas untuk memberikan supervisi terhadap  guru sesuai dengan kewenangan yang diberikan oleh Yayasan Penyelenggaraan Ilahi. <br \>
                2. Evaluasi supervisi guru ini sangat penting untuk dijadikan dasar pengembangan para guru. Oleh sebab itu, Bpk/Ibu dimohon untuk mengisi secara obyektif terhadap guru-guru yang disupervisi.<br \>
                3. Tuliskan identitas guru yang Bapak/Ibu Supervisi di lembar identitas yang sudah disediakan. Berikan penilaian pada para guru sesuai dengan Kegiatan Belajar Mengajar yang berlangsung. <br \>
                4. Semua pernyataan harus diisi.
    </div>
    
    <hr>
    


    <form method="GET" action="../form/insertDataAll/insert2.php">
    <div align = "Center">
        
       
    <table border =1 >
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

 
        <tr>
            <th width="3%">NO</th>
            <th width="30%">UNSUR YANG DINILAI</th>
            <th widt="65%">RUBRIK</th>
            <th colspan=5>SCORE</th>
            
        </tr>
        
        <tr>
            <th>B</th>
            <u><th></th></u>
            <u><th></th></u>
            <td width=2%><center>5</center></td>
            <td width=2%><center>4</center></td>
            <td width=2%><center>3</center></td>
            <td width=2%><center>2</center></td>
            <td width=2%><center>1</center></td>
        </tr>
        
        <tr>
            <td rowspan="8"> 4 </td>
            <th  rowspan="8">
                <h4>
			Kompetensi Sikap                   
		</h4>
            </th>
            <td colspan="2"><b> </b></td>
           
        </tr>

        
        <tr>
            <td>
		Mengetahui dan memahami visi dan misi sekolah dan senantiasa berupaya menerapkannya             
	   </td>
       		 <td class="td">  <input type="radio" name="empat" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat" value="1" > </td>	 
        </tr>

        
        <tr>
            <td>
               Antusias dan selalu bersemangat di sekolah
	   </td>
          	 <td class="td">  <input type="radio" name="empat1" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat1" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat1" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat1" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat1" value="1" > </td>	 
        </tr>
        
        
        
          
        <tr>
            <td>
			Bertanggung jawab terhadap tugas sebagai guru dan tugas tambahan lain (bila ada) 		
		 </td>
             	 <td class="td">  <input type="radio" name="empat2" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat2" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat2" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat2" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat2" value="1" > </td>	 
        </tr>
      

	     
      

	     
        <tr>
            <td>
		Tanggap dan proaktif dalam segala situasi <br />
		<u>ct proaktif: berusaha mencari hal baru yang berhub dgn peningkatan mutu pendidikan scr terus menerus dengan kondisi siswa <br />
		Ct tanggap: segera merespon dan bertindak bila ada suatu masalah yang muncul tanpa diminta
		 </u></td>
            	 <td class="td">  <input type="radio" name="empat3" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat3" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat3" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat3" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat3" value="1" > </td>	 
        </tr>
      

     
        <tr>
            <td>
		Hadir sebagai pribadi yang otentik (berani bersikap)
			<br />
			<u>catatan <br /> 1.  memberikan penilaian secara juur dan dapat diperptanggung jawabkan <br /> 
			2. Memberikan laporan kerja (termasuk laporan keuangan) kepada atasan sesuai keadaan sebenarnya 
			</u>		
		 </td>
             	 <td class="td">  <input type="radio" name="empat4" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat4" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat4" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat4" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat4" value="1" > </td>	 
        </tr>
      

     
        <tr>
            <td>
			Solider terhadap semua kolega, siswa, karyawan dan orang tua
		 </td>
            	<td class="td">  <input type="radio" name="empat5" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat5" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat5" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat5" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat5" value="1" > </td>	 
        </tr>
      

	
     
        <tr>
            <td>
		Bangga menjadi bagian dari komunitas Sekolah Santo Yoseph 			
		</td>
            <td class="td">  <input type="radio" name="empat6" value="5" > </td>
		 <td class="td">  <input type="radio" name="empat6" value="4" > </td>
		 <td class="td">  <input type="radio" name="empat6" value="3" > </td>
		 <td class="td">  <input type="radio" name="empat6" value="2" > </td>
		 <td class="td">  <input type="radio" name="empat6" value="1" > </td>	 
        </tr>
        <td></td>
            
        <!-- ini ke 5 --> 
     

        <tr>
            <td rowspan="7">5</td>
            <th  rowspan="7">
                <h4>Kompetensi Perilaku</h4> 
            </th>
            <th colspan="2"> 
            </th>       
        </tr>
        
        
        <tr>
            <td>
               Kesiapan guru  <br /><u>(diambil dari form spv no. 3)</u> 
		</td>
             	 <td class="td">  <input type="radio" name="lima" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima" value="1" > </td>	 
        </tr>
        
        <tr>
            <td>
	          Efektivitas Waktu  
       
            </td>
             	 <td class="td">  <input type="radio" name="lima1" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima1" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima1" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima1" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima1" value="1" > </td>	 
          </tr>
        
        <tr>
            <td>
		Bertanggung jawab terhadap semua aturan  yang berlaku <br /> 
		<u>cat. Mempunyai rasa tanggung jawab untuk mematuhi peraturan yang berlaku di YPII, baik itu peraturan untuk guru maupun peraturan untuk siswa. 			Secara konsekuen menerapkan disiplin tersebut dalam pekerjaan sehari-hari
                </u>
            </td>
                 <td class="td">  <input type="radio" name="lima2" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima2" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima2" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima2" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima2" value="1" > </td>	 

        </tr>


	<tr>
            <td>
		Menyapa dan memberi salam, senyum, bersikap ramah kepada setiap orang di lingkungan sekolah
            </td>
                 <td class="td">  <input type="radio" name="lima3" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima3" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima3" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima3" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima3" value="1" > </td>	 

           
        </tr>


	<tr>
            <td>
		Tampil rapi dan menarik sesuai dengan aturan dan ketentuan sekolah (pakai sepatu, rambut rapi, dll)
		<br /><u>(diambil dari form spv no. 18 dan pengamatan keseharian lainnya)</u>

            </td>
                 <td class="td">  <input type="radio" name="lima4" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima4" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima4" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima4" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima4" value="1" > </td>	 

           
        </tr>


	<tr>
            <td>
		Menjaga dan memanfaatkan semua fasilitas sekolah dengan hati-hati dan bertanggung jawab
           </td>
              	 <td class="td">  <input type="radio" name="lima5" value="5" > </td>
		 <td class="td">  <input type="radio" name="lima5" value="4" > </td>
		 <td class="td">  <input type="radio" name="lima5" value="3" > </td>
		 <td class="td">  <input type="radio" name="lima5" value="2" > </td>
		 <td class="td">  <input type="radio" name="lima5" value="1" > </td>	 

        </tr>



        <tr>
            <td rowspan="7">6</td>
            <th  rowspan="7">
                <h4>KOMPETENSI SPIRITUAL</h4> 
            </th>
            <th colspan="2"> 
            </th>       
        </tr>

	<tr>
            <td>
		Menjadikan Tuhan sebagai sumber kekuatan dalam hidupnya  
           </td>
            	 <td class="td">  <input type="radio" name="enam" value="5" > </td>
		 <td class="td">  <input type="radio" name="enam" value="4" > </td>
		 <td class="td">  <input type="radio" name="enam" value="3" > </td>
		 <td class="td">  <input type="radio" name="enam" value="2" > </td>
		 <td class="td">  <input type="radio" name="enam" value="1" > </td>	 
        </tr>


	<tr>
            <td>
		Menerapkan nilai-nilai hidup religius dalam hidup sehari-hari  <br />
		<u>ct. tidak bergosip, tidak mengatasnamakan kegiatan rohani untuk tidak menjalankan tugas
		</u>
           </td>
             	<td class="td">  <input type="radio" name="enam1" value="5" > </td>
		 <td class="td">  <input type="radio" name="enam1" value="4" > </td>
		 <td class="td">  <input type="radio" name="enam1" value="3" > </td>
		 <td class="td">  <input type="radio" name="enam1" value="2" > </td>
		 <td class="td">  <input type="radio" name="enam1" value="1" > </td>	 
        
        </tr>


	<tr>
            <td>
		Melayani siswa atas dasar cinta dan kepedulian <br />
		<u>ct. (dalam hal akademis) Membantu siswa untuk mencapai standar ketuntasan minimal, bila perlu  melayani siswa tanpa meminta imbalan apapun. 
		</u>
           </td>
          	 <td class="td">  <input type="radio" name="enam2" value="5" > </td>
		 <td class="td">  <input type="radio" name="enam2" value="4" > </td>
		 <td class="td">  <input type="radio" name="enam2" value="3" > </td>
		 <td class="td">  <input type="radio" name="enam2" value="2" > </td>
		 <td class="td">  <input type="radio" name="enam2" value="1" > </td>	 
        
           
        </tr>


	<tr>
            <td>
		Bersyukur, senantiasa optimis dan selalu berpikir positif
           </td>
            	<td class="td">  <input type="radio" name="enam3" value="5" > </td>
		 <td class="td">  <input type="radio" name="enam3" value="4" > </td>
		 <td class="td">  <input type="radio" name="enam3" value="3" > </td>
		 <td class="td">  <input type="radio" name="enam3" value="2" > </td>
		 <td class="td">  <input type="radio" name="enam3" value="1" > </td>	 
        
           
        </tr>


					  
	<tr>
		<td>11</td>
	        <td>
			<label>KEHADIRAN KELAS</label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='kehadirankelas' placeholder="Mohon di isi kehadiran kelas!"></textarea>
		</td>
	</tr>
		  

			  
	<tr>
		<td>12</td>
	        <td>
			<label>KETEPATAN WAKTU KERJA </label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='ketepatanwaktukerja' placeholder="Mohon di isi ketepatan Waktu Kerja!"></textarea>
		</td>
	</tr>
		  
			  
	<tr>
		<td>13</td>
	        <td>
			<label>KONTRIBUSI DALAM KEGIATAN SEKOLAH </label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='kontribusidalamkegiatankelas' placeholder="Mohon di isi kontribusi kegiatan kelas!"></textarea>
		</td>
	</tr>	
 

	

	
	<tr>
		<td>14</td>
	        <td>
			<label>KONTRIBUSI DALAM PELATIHAN </label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='kontribusipelatihan' placeholder="Mohon di isi kontribusi pelatihan!"></textarea>
		</td>
	</tr>	

	
	<tr>
		<td>15</td>
	        <td>
			<label>KESEDIAAN UNTUK BERBAGI</label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='kesediaanberbagi' placeholder="Mohon di isi kesediaan untuk berbagi!"></textarea>
		</td>
	</tr>	

	
	<tr>
		<td>16</td>
	        <td>
			<label>KEMAUAN DAN KEMAMPUAN MENGANGKAT CITRA SEKOLAH</label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='citrasekolah' placeholder="Mohon di isi kemampuan mengangkat citra sekolah!"></textarea>
		</td>
	</tr>	

	<tr>
		<td>17</td>
	        <td>
			<label>CATATAN TAMBAHAN</label>
		</td>
		<td colspan=2>
			<textarea class="form-control" rows="3" name ='cattamb' placeholder="Mohon di isi Catatan tambahan!"></textarea>
		</td>
	</tr>	


        
    </table>
    </div>
        <center>         <button type="submit">Submit!</button></center>

    </form>
    
     
    
</div>    
    
    

    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>

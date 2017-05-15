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
    


    <form method="GET" action="../form/insertDataAll/insert3.php">
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

	<input type="hidden" name="empat" value="<?php echo $_GET['empat'];?>">
 	<input type="hidden" name="lima" value="<?php echo $_GET['lima'];?>">
 	<input type="hidden" name="enam" value="<?php echo $_GET['enam'];?>">
 
 
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
            <td rowspan="4"> 7 </td>
            <th  rowspan="4">
                <h4>
		KOMPETENSI KOMUNIKASI                  
		</h4>
            </th>
            <td colspan="2"><b> </b></td>
           
        </tr>

        
        <tr>
            <td>
		Berbicara dan berinteraksi kepada semua peserta didik secara adil, perhatian,dan empatik <br/> <u>
		(diambil dari form spv no. 19 dan pengamatan keseharian lainnya)</u>
        
	  </td>
		<td class="td">  <input type="radio" name="tujuh" value="5" > </td>
		<td class="td">  <input type="radio" name="tujuh" value="4" > </td>
		<td class="td">  <input type="radio" name="tujuh" value="3" > </td>
		<td class="td">  <input type="radio" name="tujuh" value="2" > </td>
		<td class="td">  <input type="radio" name="tujuh" value="1" > </td>
       	</tr>

        
        <tr>
            <td>
             Berkomunikasi, menjaga dan mempertahankan hubungan yang baik dengan sesama kolega
	   </td>
		<td class="td">  <input type="radio" name="tujuh1" value="5" > </td>
		<td class="td">  <input type="radio" name="tujuh1" value="4" > </td>
		<td class="td">  <input type="radio" name="tujuh1" value="3" > </td>
		<td class="td">  <input type="radio" name="tujuh1" value="2" > </td>
		<td class="td">  <input type="radio" name="tujuh1" value="1" > </td>
        </tr>
        
        
        
          
        <tr>
            <td>
		Berinteraksi dengan baik kepada orang tua berkaitan dengan kesulitan, kemajuan dan potensi peserta didik		
		 </td>
		<td class="td">  <input type="radio" name="tujuh2" value="5" > </td>
		<td class="td">  <input type="radio" name="tujuh2" value="4" > </td>
		<td class="td">  <input type="radio" name="tujuh2" value="3" > </td>
		<td class="td">  <input type="radio" name="tujuh2" value="2" > </td>
		<td class="td">  <input type="radio" name="tujuh2" value="1" > </td>
        </tr>
      

	  
        <!-- ini ke 8 --> 
     

        <tr>
            <td rowspan="4">8</td>
            <th  rowspan="4">
                <h4>KOMPETENSI BAHASA INGGRIS</h4> 
            </th>
            <th colspan="2"> 
            </th>       
        </tr>
        
        
        <tr>
            <td>
           Mempunyai kemauan untuk belajar bahasa Inggris
		</td>
		 <td class="td">  <input type="radio" name="delapan" value="5" > </td>
		<td class="td">  <input type="radio" name="delapan" value="4" > </td>
		<td class="td">  <input type="radio" name="delapan" value="3" > </td>
		<td class="td">  <input type="radio" name="delapan" value="2" > </td>
		<td class="td">  <input type="radio" name="delapan" value="1" > </td>
        </tr>
        
        <tr>
            <td>
	          Berusaha membaca bacaan yang berbahasa Inggris dan menggunakannya sebagai sumber pembelajaran
       
            </td>
		 <td class="td">  <input type="radio" name="delapan1" value="5" > </td>
		<td class="td">  <input type="radio" name="delapan1" value="4" > </td>
		<td class="td">  <input type="radio" name="delapan1" value="3" > </td>
		<td class="td">  <input type="radio" name="delapan1" value="2" > </td>
		<td class="td">  <input type="radio" name="delapan1" value="1" > </td>
          </tr>
        
        <tr>
            <td>
		
	Terbiasa mengucapkan salam dalam bahasa Inggris
            </td>
		<td class="td">  <input type="radio" name="delapan2" value="5" > </td>
		<td class="td">  <input type="radio" name="delapan2" value="4" > </td>
		<td class="td">  <input type="radio" name="delapan2" value="3" > </td>
		<td class="td">  <input type="radio" name="delapan2" value="2" > </td>
		<td class="td">  <input type="radio" name="delapan2" value="1" > </td>
        </tr>

        
        <tr>
            <td rowspan="4">9</td>
            <th  rowspan="4	">
                <h4>KOMPETENSI KOLABORASI</h4> 
            </th>
            <th colspan="2"> 
            </th>       
        </tr>
        
        
        <tr>
            <td>Mampu bekerja sebagai team dalam unitnya
		</td>
		<td class="td">  <input type="radio" name="sembilan" value="5" > </td>
		<td class="td">  <input type="radio" name="sembilan" value="4" > </td>
		<td class="td">  <input type="radio" name="sembilan" value="3" > </td>
		<td class="td">  <input type="radio" name="sembilan" value="2" > </td>
		<td class="td">  <input type="radio" name="sembilan" value="1" > </td>
 	 </tr>
        
	<tr>
            <td>Mampu bekerja sebagai team dengan unit kerja /cabang lainnya 
		</td>
		<td class="td">  <input type="radio" name="sembilan1" value="5" > </td>
		<td class="td">  <input type="radio" name="sembilan1" value="4" > </td>
		<td class="td">  <input type="radio" name="sembilan1" value="3" > </td>
		<td class="td">  <input type="radio" name="sembilan1" value="2" > </td>
		<td class="td">  <input type="radio" name="sembilan1" value="1" > </td>
        </tr>

	<tr>
            <td>Bersedia dan rela membantu rekan kerja tanpa diminta
		</td>
                <td class="td">  <input type="radio" name="sembilan2" value="5" > </td>
		<td class="td">  <input type="radio" name="sembilan2" value="4" > </td>
		<td class="td">  <input type="radio" name="sembilan2" value="3" > </td>
		<td class="td">  <input type="radio" name="sembilan2" value="2" > </td>
		<td class="td">  <input type="radio" name="sembilan2" value="1" > </td>
        </tr>

	


	 <tr>
            <td rowspan="4">10</td>
            <th  rowspan="4	">
                <h4>KOMPETENSI TEKNOLOGI INFORMASI DAN KOMUNIKASI</h4> 
            </th>
            <th colspan="2"> 
            </th>       
        </tr>
        
        
        <tr>
            <td>
		Trampil menggunakan perangkat IT dalam pembelajaran di kelas dan dalam pekerjaan lainnya.
		</td>
		<td class="td">  <input type="radio" name="sepuluh" value="5" > </td>
		<td class="td">  <input type="radio" name="sepuluh" value="4" > </td>
		<td class="td">  <input type="radio" name="sepuluh" value="3" > </td>
		<td class="td">  <input type="radio" name="sepuluh" value="2" > </td>
		<td class="td">  <input type="radio" name="sepuluh" value="1" > </td>
        
        </tr>
        
	<tr>
            <td>Mencari dan memanfaatkan sumber ilmu pengetahuan dengan  bantuan teknologi informasi dan komunikasi<br><u>
	cat. pengamatan bisa dilihat dari RPP juga bagaimana sumber2 yang dipakai</u>

		</td>
                 <td class="td">  <input type="radio" name="sepuluh1" value="5" > </td>
		<td class="td">  <input type="radio" name="sepuluh1" value="4" > </td>
		<td class="td">  <input type="radio" name="sepuluh1" value="3" > </td>
		<td class="td">  <input type="radio" name="sepuluh1" value="2" > </td>
		<td class="td">  <input type="radio" name="sepuluh1" value="1" > </td>
        </tr>



	<tr>
						  
		

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

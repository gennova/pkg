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
                        <h2> SUPERVISI GURU</h2>
                        <hr class="small">
                        <span class="subheading">Have questions? Contact 08190128121</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

<?php

$index= $_GET['kode'];





?>
<form method="GET" action='../form/insertData5.php'>
    <div class="container" left=" 10px" ; >
                <h2><center>INSTRUKSI:</center></h2>
                1. Bpk/Ibu memiliki tugas untuk memberikan supervisi terhadap  guru sesuai dengan kewenangan yang diberikan oleh Yayasan Penyelenggaraan Ilahi. <br \>
2. Evaluasi supervisi guru ini sangat penting untuk dijadikan dasar pengembangan para guru. Oleh sebab itu, Bpk/Ibu dimohon untuk mengisi secara obyektif terhadap guru-guru yang disupervisi.<br \>
3. Tuliskan identitas guru yang Bapak/Ibu Supervisi di lembar identitas yang sudah disediakan. Berikan penilaian pada para guru sesuai dengan Kegiatan Belajar Mengajar yang berlangsung. <br \>
4. Semua pernyataan harus diisi.
    </div>
    
    <hr>
    <div align = "Center">
    <table border =1 >
		<input type="hidden" name="indexuser" value="<?php echo $index;?>">
		<input type="hidden" name="bab1" value="<?php echo $_GET['bab1'];?>">
		<input type="hidden" name="bab2" value="<?php echo $_GET['bab2'];?>">
		<input type="hidden" name="bab3" value="<?php echo $_GET['bab3'];?>">	
		<input type="hidden" name="bab4" value="<?php echo $_GET['bab4'];?>">

		
		<input type="hidden" name="no1" value="<?php echo $_GET['no1'];?>">
		<input type="hidden" name="no2a" value="<?php echo $_GET['no2a'];?>">
		<input type="hidden" name="no2b" value="<?php echo $_GET['no2b'];?>">
		<input type="hidden" name="no3" value="<?php echo $_GET['no3'];?>">
		<input type="hidden" name="no4" value="<?php echo $_GET['no4'];?>">
		<input type="hidden" name="no5a" value="<?php echo $_GET['no5a'];?>">
		<input type="hidden" name="no5b" value="<?php echo $_GET['no5b'];?>">
		<input type="hidden" name="no6" value="<?php echo $_GET['no6'];?>">
		<input type="hidden" name="no7" value="<?php echo $_GET['no7'];?>">
		<input type="hidden" name="no8a" value="<?php echo $_GET['no8a'];?>">
		<input type="hidden" name="no8b" value="<?php echo $_GET['no8b'];?>">
		<input type="hidden" name="no9a" value="<?php echo $_GET['no9a'];?>">
		<input type="hidden" name="no9b" value="<?php echo $_GET['no9b'];?>">
		<input type="hidden" name="no10a" value="<?php echo $_GET['no10a'];?>">
		<input type="hidden" name="no10b" value="<?php echo $_GET['no10b'];?>">
		<input type="hidden" name="no10c" value="<?php echo $_GET['no10c'];?>">
		<input type="hidden" name="no11" value="<?php echo $_GET['no11'];?>">
		<input type="hidden" name="no12" value="<?php echo $_GET['no12'];?>">
	
		<input type="hidden" name="no13" value="<?php echo $_GET['no13'];?>">
		<input type="hidden" name="no14a" value="<?php echo $_GET['no14a'];?>">
		<input type="hidden" name="no14b" value="<?php echo $_GET['no14b'];?>">
		<input type="hidden" name="no14c" value="<?php echo $_GET['no14c'];?>">
		<input type="hidden" name="no14d" value="<?php echo $_GET['no14d'];?>">
		<input type="hidden" name="no14d" value="<?php echo $_GET['no14d'];?>">
		<input type="hidden" name="no15a" value="<?php echo $_GET['no15a'];?>">
		<input type="hidden" name="no15b" value="<?php echo $_GET['no15b'];?>">
		<input type="hidden" name="no16" value="<?php echo $_GET['no16'];?>">
	
	
		<input type="hidden" name="ganjilgenap" value="<?php echo $_GET['ganjilgenap'];?>">
		<input type="hidden" name="tahun" value="<?php echo $_GET['tahun'];?>">
		<input type="hidden" name="waktusekarang" value="<?php echo $_GET['waktusekarang'];?>">

        <tr>
            <th width="3%">NO</th>
            <th width="30%">UNSUR YANG DINILAI</th>
            <th width="65%">RUBRIK</th>
            <th colspan="2"> CHECK POINT</th>

        </tr>
        
        <tr>
            <th>E</th>
            <u><th>Performa Guru</th></u>
            <u><th> <br \>
            </th></u>
            <td> </td>
         
        </tr>
        
        
        <!-- ini no 17 --> 
        
        
         
        <tr>
            <td rowspan="5"> 17 </td>
            <th  rowspan="5"><h4>Ekspresi guru</h4></th>
            <td colspan="2">
		<b>
			Dari penyataan dibawah ini mana yang terlihat dalam PBM?
		</b>
            </td>
            
        </tr>
        

	<tr>
		<td>Suara dengan volume terdengar, artikulasi yang jelas dan intonasi yang tepat
		</td>
		
		<td class="td"><input type="checkbox" name="tujuhbelas[]" value="1"> </td>
	</tr>
        
        <tr>
            <td>
                Terjalinnya  kontak mata dengan siswa
            </td>
            <td class="td"><input type="checkbox" name="tujuhbelas[]" value="2"> </td>
        </tr>
         
         
        <tr>
            <td>
                Gerak (gesture) tubuh (mis. tidak memasukkan tangan ke dalam saku celana) menunjukkan semangat.
            </td>
            <td class="td">  <input type="checkbox" name="tujuhbelas[]" value="3"> </td>
        </tr>
         
         
        <tr>
            <td>
                Ekspresi guru tidak nampak
            </td>
            <td class="td">  <input type="checkbox" name="tujuhbelas[]" value="4"> </td>
         </tr>
         
         
         
        <tr>
            <td rowspan="5"> 18 </td>
            <th  rowspan="5"><h4>Kerapian Guru
            <th colspan="2">
              Dari penyataan dibawah ini mana yang terlihat dalam PBM?
            </th>
           
        </tr>
      
      
      
        <tr>
            <td>
                Pakaian rapi (tidak kusut dan tidak "belel/pudar") dan sopan (mis. tidak ketat, tidak transparan)
             </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="1"> </td>
            

        </tr>
        
         
        <tr>
            <td>
                Pakaian "matching" (mis. untuk pria antara dasi dan kemeja) dan sesuai dengan kondisi (mis. tidak memakai pakaian pesta ke sekolah) 
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="2"> </td>
        </tr>
         
        <tr>
            <td>
                Sepatu bersih dan tertutup           
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="3"> </td>
        </tr>
         
        <tr>
           <td>
               Rambut rapi dan bagi wanita diikat/gelung dan wajah dirias sewajarnya
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="4"> </td>
        </tr>
         
       
        <tr>
            <td rowspan="4"> 19 </td>
            <th  rowspan="4"><h4>Kematangan emosi guru (kehangatan, kesabaran, <br \> keramahan, dan kepedulian)
                <th>Dari penyataan dibawah ini mana yang terlihat dalam PBM?
                </th>
            <td>   </td>

        </tr>
      
      
      
        
        <tr>
            <td> 
                Guru mampu menunjukkan ketenangan diri dalam menghadapi situasi apa pun (terjadi polemik, kelas kurang/tidak terkendali)
            </td>
            <td class="td">  <input type="checkbox" name="sembilanbelas[]" value="1"> </td>
        </tr>
           
        <tr>
            <td>
                Guru sudah konsisten menunjukkan sikap penuh perhatian
            </td>
            <td class="td">  <input type="checkbox" name="sembilanbelas[]" value="2"> </td>
        </tr>
         
         
        
         
       
    </table>
 <center>	<button type="submit">Submit</button> <center>
 
    
</div>    
    </form>
    
    
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

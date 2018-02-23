<!DOCTYPE html>
<html lang="en">
    
<head>

    <style type="text/css">
	.td
	{
 		text-align: center;
  		vertical-align: middle;
	}
	.th
	{

	color : red;
	}
    </style>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insert AEP Kebon Dalem</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../index.html">Start AEP KD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../pilihGuru.php">Insert Aep</a>
                    </li>
                    <li>
                        <a href="../loginkepsek.php">Login Admin</a>
                    </li>
       		 <li>
                        <a href="./insertDataGuruBaru.php"><b><u>Insert Data Guru</u></b></a>
                    </li>
		
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>SUPERVISI GURU <br /> Yayasan Penyelenggaraan Ilahi Indonesia</h2>
                        <hr class="small">
                        <span class="subheading">Have questions? Contact 08190128121</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
               

   																																																					 <!-- Main Content -->
<form method="GET" action='../../form/cariHasilGuru.php'>
  Cari Nama Guru : <input type="text" name="cariguru"><br />
<!--  Cari Semester :	
	<select name="ganjilgenap">
	  <option value="Ganjil">Semester Ganjil</option>
	  <option value="Genap">Semester Genap</option>
	 </select><br />-->
  <input type="submit" value="Submit">
</form>


    <hr>																																																																																																																																																																																									
    <div align = "Center">

<?php

?>
    <form method ="POST" action ="">
   
            <div class="table-responsive" >
                <table class="table table-hover" border="3"  bgcolor="#99999">
                    <thead>
                        <tr>
                            	<th bgcolor="#BCF5A9">No</th>
				<th bgcolor="#BCF5A9">Nama Guru</th>
				<th bgcolor="#BCF5A9">Kantor Cabang</th>
				<th bgcolor="#BCF5A9">Unit </th>
				<th bgcolor="#BCF5A9">Mata Pelajaran</th>
				<th bgcolor="#BCF5A9">Kelas</th>
				<th bgcolor="#BCF5A9">Semester</th>
				<th bgcolor="#BCF5A9">Tahun Ajaran</th>
				
				<th bgcolor="#BCF5A9">Jumlah Score </th>
				
				<th bgcolor="#BCF5A9">Waktu Insert</th>
				
                        </tr>

                    </thead>
                    <tbody>
                        
<?php
include('../../function/showGuru.php');

$id=$_GET['kode'];
echo $id;
	$res = showWhere($id);

  	$i=0;
	if ($res)
    	{
		
		while ($row = mysql_fetch_array($res)) 
		{
			
	$p=0;	


		
                    		echo "<tr>";
					
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['namaguru']."</td>";
					echo "<td>".$row['kantorcabang']."</td>";
					echo "<td>".$row['unit']."</td>";				

					echo "<td>".$row['matapelajaran']."</td>";
					


					echo "<td>".$row['kelas']."</td>";				


					echo "<td>".$row['semester']."</td>";
					
					echo "<td>".$row['tahun']."</td>";
										
		
					echo "<td>".$row['sum']." </td>";
					echo "<td>".$row['waktusekarang']." </td>";
				
	       	
                  		 echo "</tr>";
			
				
		



?>

                        </tr>
                    </tbody>
                </table>
	    </div>

<br /> <br />

<form method ="GET" action ="">
   
            <div class="table-responsive" >
                <table class="table table-hover" border="3"  bgcolor="#99999">
                    <thead>
	
                        <tr>
				<th bgcolor="#BCF5A9">No</th>
				<th bgcolor="#BCF5A9">Keterangan</th>
				<th bgcolor="#T99999">BOBOT</th>
  			</tr>
                        <tr>	
				<th bgcolor="#BCF5A9">1</th>
				<th bgcolor="#BCF5A9">Kompetensi Pendagosis</th>
			
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot1']."</th>";?>

  			</tr>

                        <tr><th bgcolor="#BCF5A9">2</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Mengajar</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot2']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">3</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Pengetahuan</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot3']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">4</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Sikap</th>
			
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot4']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">5</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Perilaku</th>

				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot5']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">6</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Spiritual</th>

				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot6']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">7</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Komunikasi</th>
		
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot7']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">8</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Bahasa Inggris</th>

				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot8']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">9</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Kolabarosi</th>

				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot9']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">10</th>
				
				<th bgcolor="#BCF5A9">Kompetensi Teknologi Informasi Dan Komunikasi</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot10']."</th>";?>
				

  			</tr>


                        <tr>
				<th bgcolor="#BCF5A9" colspan='2'>Total </th>
				
				<?php	echo "<th bgcolor='yellow'>".$row['sum']."</th>";?>
				

  			</tr>

			<tr>
				<th bgcolor="#BCF5A9" colspan='2'>Hasil </th>
				
				<?php

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
				?>


				<?php	echo "<th bgcolor='yellow'>".$bobot1."</th>";?>
				

  			</tr>


			<tr bgcolor="G10191"></th> <th bgcolor="G99999"></th><th bgcolor="G99999">------------</th><th bgcolor="Y81910"></th></tr>

                        <tr>
				<th bgcolor="#BCF5A9">11</th>
				
				<th bgcolor="#BCF5A9">Kehadiran Kelas</th>

				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot11']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">12</th>
				

				<th bgcolor="#BCF5A9">Ketepatan Waktu Kerja</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot12']."</th>";?>


  			</tr>

                        <tr>

				<th bgcolor="#BCF5A9">13</th>
				
				<th bgcolor="#BCF5A9">kontribusi Dalam Kegiatan Sekolah</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot13']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">14</th>
				
				<th bgcolor="#BCF5A9">Kontribusi Dalam Pelatihan</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot14']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">15</th>
				
				<th bgcolor="#BCF5A9">Kesediaan Untuk Berbagi</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot15']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">16</th>
				
				<th bgcolor="#BCF5A9">Kemauan Dan Kemampuan Mengangkat Citra Sekolah</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot16']."</th>";?>


  			</tr>

                        <tr>
				<th bgcolor="#BCF5A9">17</th>
				
				<th bgcolor="#BCF5A9">Catatan tambahan</th>
				<?php	echo "<th bgcolor='#T99999'>".$row['scorebobot17']."</th>";?>


  			</tr>
			
			</thead>

                    <tbody>
                        
<?php
	

		echo "</tbody>";
		echo "</table>";		
	echo "<br />";
	
	echo"</form>";
 echo"<table><td><u><a href='../../mpdf60/examples/example01_basic.php?kode=".$row['0']."'>Print PDF</a></td></u></table>";
        
		}
	}

?>  

            <!-- /.table-responsive -->
      

            
       
    
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
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>

</body>

</html>

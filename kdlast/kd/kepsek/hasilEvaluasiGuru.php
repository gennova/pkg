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
				<th bgcolor="#BCF5A9">Lihat Detail Nilai</th>
				
                        </tr>

                    </thead>
                    <tbody>
                        
<?php
include('../../function/showGuru.php');
	$res = showAEP();
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
				
	       	
                        echo"<td>"."<a href='./cekNilai.php?kode=".$row['0']."'>Cek Nilai Data </a></td>";
                /*        echo"<td>"."<a href='./formeditPembayaran.php?kode=".$row['0']."'>Delete </a></td>";
			*/
                  		 echo "</tr>";
			
				
		}
	}
		
?>

                        </tr>
                    </tbody>
                </table>
            </div>
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

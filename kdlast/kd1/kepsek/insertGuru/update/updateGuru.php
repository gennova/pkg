<!DOCTYPE html>
<html lang="en">
    
<head>

    <style type="text/css">
	.td
	{
 		text-align: center;
  		vertical-align: middle;
	}
    </style>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insert AEP Kebon Dalem</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">



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
                        <a href="../../../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../../../pilihGuru.php">Insert Aep</a>
                    </li>
                    <li>
                        <a href="../../../insertGuru.php">Insert Guru</a>
                    </li>
                    <li>
                        <a href="../../../loginkepsek.php">Login Admin</a>
                    </li>
		</li>
			<li>
                        <a href="../../insertDataGuruBaru.php"><b><u>Insert Data Guru Baru </u></b></a>
			</li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../../img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>SUPERVISI GURU</h2>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <hr>
    <div align = "Center">

<?php

?>
    <form method ="GET" action ="">
   
            <div class="table-responsive">
                <table class="table table-hover" border="1">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>NIP</th>
                            <th>NAMA GURU</th>
                            <th>EDIT  DATA GURU</th>
                            <th>DELETE DATA GURU</th>
                        </tr>
                    </thead>
                    <tbody>
                        
<?php
include('../../../../function/showGuru.php');
	$res = showGuru();
	
  	$i=0;
	if ($res) 
        {
		while ($row = mysql_fetch_array($res)) 
		{
                    echo "<tr>";
			echo "<td>".$row['0']."</td>";
			echo "<td>".$row['1']."</td>";
			echo "<td>".$row['2']."</td>";
                        echo"<td>"."<a href='./formUpdateGuru.php?kode=".$row['0']."'>Edit Data Guru</a></td>";
                        echo"<td>"."<a href='./funcDeleteGuru.php?kode=".$row['0']."'>Delete Data Guru </a></td>";

                    echo "</tr>";
			
		}
	}
	else
	{
		echo "Data Gagal Dimuat!";
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
                    <p class="copyright text-muted"><center>Copyright &copy; Your Website 2016</center></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
  

</body>

</html>

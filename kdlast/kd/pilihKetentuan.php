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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
	
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
  <script src="./js/appdropdown.js"></script>
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
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/test.jpg')">
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


    <hr>
    <div>
   <form role="form" method="GET" action="../kd/insertAep2.php">
 <table class="table table-hover" border="3">
                    <thead>
                        <tr>
                            <th><b><u>TIPE</u></b></th>
                            <th><b><u>PILIHAN</u></b></th>
			</tr>
                    </thead>

		<tbody>
    

  			<tr>
                            <th>Nama Guru A </th>
                            <th>
				       <SELECT class='form-control' name="ambilnamaguru" id="personCity"> 
					<option value="">Pilih Guru</option>
					<?php
					include ('../function/database.php');
					$sql="SELECT idspv,namaguru,guruspv,kantorcabang,unit FROM tblInsertDataSpv group by guruspv" ;
					$result=mysql_query($sql); 
				
					while ($row=mysql_fetch_array($result))
					{ 
						$id=$row["idspv"]; 
						$nip=$row["guruspv"];										
					
						echo "<OPTION class='form-control' VALUE=$id>$nip</option> " ;
					}
					?>
					</SELECT>
			   </th>
			</tr>

		<tr>
                            <th>Nama Guru  </th>
                            <th>
				       <SELECT class='form-control' name="ambilnamaguru" id="personCity"> 
					<option value="">Pilih Guru</option>
					<?php
					
					$sql="SELECT id,detailguru FROM tblDetailNamaGuru group by detailguru" ;
					$result=mysql_query($sql); 
				
					while ($row=mysql_fetch_array($result))
					{ 
						$id=$row["id"]; 
						$nip=$row["detailguru"];										
					
						echo "<OPTION class='form-control' VALUE=$id>$nip</option> " ;
					}
					?>
					</SELECT>
			   </th>
			</tr>



<!--
			
			<tr>
                            <th>Unit</th>
                            <th>
					<SELECT NAME="ambilunit"> 
					<option value="">Pilih Unit</option>
					<?php
					
					$sql="SELECT id,detailunit FROM tblDetailUnit" ;
					$result=mysql_query($sql); 
					$options=""; 
					while ($row=mysql_fetch_array($result))
					{ 
						$id=$row["id"];   
						$du=$row["detailunit"];										
							
						echo "<OPTION VALUE=$du>$du</option>";
					} 
					?> 
					</SELECT> 
			    </th>
			</tr>

  			<tr>
                            <th>Mata Kuliah </th>
                            <th>
				<SELECT NAME="ambilmatkul"> 
					<option value="">Pilih Mata Kuliah</option>
					<?php
					
					$sql="SELECT id,detailmatapelajaran FROM tblDetailMataPelajaran" ;
					$result=mysql_query($sql); 
					$options=""; 
					while ($row=mysql_fetch_array($result))
					{ 
						$id=$row["id"];   
						$dmp=$row["detailmatapelajaran"];										
							
						echo "<OPTION VALUE=$dmp>$dmp</option>";
					} 
					?> 
				</SELECT>
			     </th>
			</tr>

  			<tr>
                            <th>Kelas</th>
                            <th><select name="ambilkelas">
				  <option value="">Pilih Kelas</option>
				  <option value="TK-A">TK A</option>
				  <option value="TK-B">TK B</option>
				  <option value="SD-1">SD 1</option>
				  <option value="SD-2">SD 2</option>
				  <option value="SD-3">SD 3</option>
				  <option value="SD-4">SD 4</option>
				  <option value="SD-5">SD 5</option>
				  <option value="SD-6">SD 6</option>
				  <option value="SMP-7">SMP 7</option>
				  <option value="SMP-8">SMP 8</option>
				  <option value="SMP-9">SMP 9</option>
				  <option value="SMA-10">SMA 10</option>
				  <option value="SMA-11">SMA 11</option>
				  <option value="SMA-12">SMA 12</option>
				 
			    </select></th>
			</tr>
		
  			<tr>
                            <th>Semester</th>
                            <th><select name="ambilsemester">
				  <option value="Ganjil">Semester Ganjil</option>
				  <option value="Genap">Semester Genap</option>
				 
			    </select></th>
			</tr>


			<tr>
				<th> Tahun Ajaran </th>
				<th>
				<select name="years">
				<?php 
				$x=2016 ;
				$f=2030;
				for($i=$x;$i<=$f; $i++)
				{

				    echo "<option value=".$i.">".$i."</option>";
				}
				?> 
				     <option name="years"> </option>   
				</select> 
				</th>
			</tr>
-->

		</tbody>




	</table>

	<button type="submit" class="btn btn-default">Submit Button</button>
   </form>
        
    </div>


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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>

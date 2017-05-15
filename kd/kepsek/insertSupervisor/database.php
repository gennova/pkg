<?php
	ini_set('max_execution_time', 0);
	$dbname = 'ypiisema_pkgs';
	$dbhost = 'localhost';
	$dbuser = 'ypiisema_pkgs';
	$dbpass = 'solider33';
	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());
	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());

	function after ($this, $inthat)
	{
	if (!is_bool(strpos($inthat, $this)))
	return substr($inthat, strpos($inthat,$this)+strlen($this));
	};

	function after_last ($this, $inthat)
	{
	if (!is_bool(strrevpos($inthat, $this)))
	return substr($inthat, strrevpos($inthat, $this)+strlen($this));
	};

	function before ($this, $inthat)
	{
	return substr($inthat, 0, strpos($inthat, $this));
	};

	function before_last ($this, $inthat)
	{
	return substr($inthat, 0, strrevpos($inthat, $this));
	};

	function between ($this, $that, $inthat)
	{
	return before ($that, after($this, $inthat));
	};

	function between_last ($this, $that, $inthat)
	{
	return after_last($this, before_last($that, $inthat));
	};

	

	function insertDataSpv($nipguru, $guru,$username,$passwd)
	{
		$sql="insert into tblusersupervisor (nipguruspv,guruspv,username,password) values ('$nipguru','$guru','$username','$passwd')";
		$mysqlquery= mysql_query($sql);
		return $mysqlquery;

	}

	function loginError()
	{
		echo"<h1>PLEASE USE VALID LOGIN ACCOUNT</h1>";
		header('refresh:2, ../');
		
	}

	
	function loginchecker($user,$pass)
	{
		$sql = "SELECT nama, jenis FROM loginlist WHERE disable=false AND user='$user' AND pass=md5('$pass') LIMIT 1";
		$query = mysql_query($sql) or die (mysql_error());
		$row = mysql_fetch_array($query);
		return $row['0'].'^'.$row['1'];
	}


	function insertGuru ($nipguru,$guru)
	{
		$no=0;
		$sql="insert into tbldetailnamaguru (id,nip,detailguru) values ('$no','$nipguru','$guru')";
		$mysqlquery= mysql_query($sql);
		return $mysqlquery;
	}


	function insertCabang ($namacabang)
	{
		$no=0;
		$sql= "insert into tbldetailkantorcabang (id,detailkantorcabang) values ('$no','$namacabang')";
		$query=mysql_query($sql);
		return $query;
	}	


	function insertUnit($unit)
	{
		$no=0;
		$sql= "insert into tbldetailunit (id,detailunit) values ('$no','$unit')";
		$query=mysql_query($sql);
		return $query;
	}	

	function insertMatkul($matkul)
	{
		$no=0;
		$sql= "insert into tbldetailmatapelajaran (id,detailmatapelajaran) values ('$no','$matkul')";
		$query=mysql_query($sql);
		return $query;
	}	

	function insertGuru1 ($nipguru,$guru,$kantorcabang,$unit,$matakuliah)
	{
		$no=0;
		$sql= "insert into tblguru(no,nama,nip) values ('$no','$guru','$nipguru')";
		$sql1="insert into tbldetailkantorkabang (id,detailkantorcabang) values ('$no','$kantorcabang')";
		$sql2="insert into tbldetailunit (id,detailunit) values ('$no','$unit')";	
		$sql3="insert into tbldetailnamaguru(id,detailguru) values ('$no','$guru')";
		$sql4="insert into tbldetailmatapelajaran (id,detailmatapelajaran) values ('$no,'$matakuliah')";

		$query= mysql_query($sql);
		$query1=mysql_query($sql1);
		$query2=mysql_query($sql2);
		$query3=mysql_query($sql3);
		$query4=mysql_query($sql4);
		if ($query && $query1 && $query2 && $query3 && $query4)
		{
			return $query;
		}
		else
		{
			echo "Error pada saat input";	
		}
	}


	/*

	function insertTanggalOddEven($indexuser,$oddeven,$tahunajaran, $waktudatenow)
	{
		$indextanggal=0;
		$sql= "insert into tblTanggalMatkul(indextanggal,no,ganjil,tahunpembelajaran,tanggalinsert) values 			('$indexuser','$oddeven','$tahunajaran','$waktudatenow')";
		$query= mysql_query($sql);
			
		return $query;
	}


	function insertAllData($index,$bab1,$bab2,$bab3,$bab4,$bab5,$bab6,$oddeven,$tahun,$waktudatenow)
	{

		$sqltgl="insert into tblTanggalMatkul(no,ganjil,tahunpembelajaran,tanggalinsert) values ('$index','$oddeven','$tahun','$waktudatenow') ";
		
		$sql1="insert into tblScoreI (no,bobot) values ('$index', '$bab1')";
		
		$sql2="insert into tblScoreII (no,bobot) values ('$index', '$bab2')";
		
		$sql3="insert into tblScoreIII (no,bobot3) values ('$index', '$bab3')";
			
		$sql4="insert into tblScoreIV (no,bobot4) values ('$index', '$bab4')";
			
		$sql5="insert into tblScoreV (no,bobot5) values ('$index', '$bab5')";
			
		$sql6="insert into tblScoreVI (no,bobot6) values ('$index', '$bab6')";
		
		$insertuser= "insert into tblRincianIsian (no,baba,babb,babc,babd,babe,babf,semester,tahunajaran,dateinsert) values 				('$index' ,'$bab1','$bab2','$bab3' ,'$bab4','$bab5','$bab6','$oddeven','$tahun','$waktudatenow')";		
	
		$query=mysql_query($sqltgl);	
		$query1=mysql_query($sql1);
		$query2=mysql_query($sql2);

		$query3=mysql_query($sql3);

		$query4=mysql_query($sql4);
		$query5=mysql_query($sql5);
		$query6=mysql_query($sql6);
		
		$querylast=mysql_query($insertuser);
		if ($querylast)
		{
			echo "t";		
		}
		else
		{
			echo "f";
		}


		if ($query && $query1 && $query2 && $query3 && $query4 && $query5 && $query5 && $query6 && $querylast)
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/index.php");
		}
		else
		{
			echo "Data gagal di input! Cek Ulang ";
		}
	}

	function insertSql1($insertuser,$last ,$oddeven,$tahunajaran, $waktudatenow)
	{
		/*echo $insertuser ."<br />";
		echo $last."<br />";
		echo $oddeven."<br />";
		echo $tahunajaran."<br />";
		echo $waktudatenow."<br />";
		
		$sql="insert into tblScoreI (no,bobot) values ('$insertuser', $last)";
		
		$sql1="insert into tblTanggalMatkul(no,ganjil,tahunpembelajaran,tanggalinsert) values 				       	('$insertuser','$oddeven','$tahunajaran','$waktudatenow') ";

	
		$mysql= mysql_query($sql1);
		$query= mysql_query($sql);
		if ($mysql && $query) 
		{
			
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/insertAep2.php?kode=$insertuser'");
		}
		else
		{
			echo "data failed";		
		echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}

	
	function insertSql2($indexuser,$last)
	{
		
		$sql="insert into tblScoreII (no,bobot) values ('$indexuser', $last)";
		$mysql= mysql_query($sql);
		if ($mysql) 
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/insertAep3.php?kode=$indexuser'");
		}
		else
		{
			echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}



	function insertSql3($insertuser,$count)
	{
		echo $insertuser;
		
		echo $count;
		$sql="insert into tblScoreIII (no,bobot3) values ('$insertuser', '$count')";
		echo $sql;
		$mysql= mysql_query($sql);
		if ($mysql) 
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/insertAep4.php?kode=$insertuser'");
		}
		else
		{
			echo "failed";
			echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}

	

	function insertSql4($index,$sumtotal)
	{
	
		
		
		$sql="insert into tblScoreIV (no,bobot4) values ('$index', '$sumtotal')";
		echo $sql;
		$mysql= mysql_query($sql);
		if ($mysql) 
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/insertAep5.php?kode=$index'");
		}
		else
		{
			echo "failed";
			echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}



	

	function insertSql5($indexuser,$sumtotal)
	{
		$sql="insert into tblScoreV (no,bobot5) values ('$indexuser', '$sumtotal')";
		echo $sql;
		$mysql= mysql_query($sql);
		if ($mysql) 
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/insertAep6.php?kode=$indexuser'");
		}
		else
		{
			echo "failed";
			echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}


	function insertSql6($indexuser,$duapuluhX)
	{
		$sql="insert into tblScoreVI (no,bobot6) values ('$indexuser', '$duapuluhX')";
		echo $sql;
		$mysql= mysql_query($sql);
		if ($mysql) 
		{
			echo "<script type='text/javascript'> alert('data Berhasil di insert);</script>";
			header("refresh: 0; url='../kd/index.php?kode=$indexuser'");
		}
		else
		{
			echo "failed";
			echo "<script type='text/javascript'> alert('data gagal di insert);</script>";
		}
		return $mysql;

	}

	*/
	function cariUser($carinama)
	{

		$sql= "SELECT distinct tblguru.nip,tblguru.no,tblguru.nama,tblrincianisian.no,tblrincianisian.baba as 'bobot1',tblrincianisian.babb as 'bobot2',tblrincianisian.babc as 'bobot3',tblrincianisian.babd as 'bobot4',tblrincianisian.babe as 'bobot5',tblrincianisian.babf as 'bobot6' , (tblrincianisian.baba+tblrincianisian.babb+tblrincianisian.babc+tblrincianisian.babd+tblrincianisian.babe+tblrincianisian.babf) as 'sum', tblrincianisian.semester,tblrincianisian.tahunajaran,tblrincianisian.dateinsert as 'tanggalinsert' from tblguru,tblrincianisian,tbltanggalmatkul where tblguru.no=tblrincianisian.no and tblGuru.nama LIKE '%$carinama%' ";
		$query=mysql_query($sql);
		return $query;

	}

	
?>
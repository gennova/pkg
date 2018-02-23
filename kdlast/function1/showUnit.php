<?php
	ini_set('max_execution_time', 0);
	$dbname = 'dbkd1';
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());
	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());


	function showUnit()
	{
		$sql= "select distinct id,detailunit from tbldetailunit";
		$query=mysql_query($sql);
		return $query;
	}



	function showAEP()
	{
		$sql="SELECT tblguru.nip,tblguru.no,tblguru.nama,tblrincianisian.no,tblrincianisian.baba as 'bobot1',tblrincianisian.babb as 'bobot2',tblrincianisian.babc as 'bobot3',tblrincianisian.babd as 'bobot4',tblrincianisian.babe as 'bobot5',tblrincianisian.babf as 'bobot6' , (tblrincianisian.baba+tblrincianisian.babb+tblrincianisian.babc+tblrincianisian.babd+tblrincianisian.babe+tblrincianisian.babf) as 'sum', tblrincianisian.semester,tblrincianisian.tahunajaran,tblrincianisian.dateinsert as 'tanggalinsert' from tblguru,tblrincianisian where tblguru.no=tblrincianisian.no
		
		";
		$query=mysql_query($sql);
		return $query;	
	}



	function showUnitUpdate($new)
	{
		$sql= "select id,detailunit from tbldetailunit where id=$new";
		$new= mysql_query($sql);
		
		return $new;

	}

	function deleteUnit($index)
	{
		$sql= "delete from tbldetailunit where id=$index";
		$query=mysql_query($sql);
		return $query;
	}

        
    
?>


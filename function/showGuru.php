<?php
	ini_set('max_execution_time', 0);
	$dbname = 'santoyos_pkgs';
	$dbhost = 'localhost';
	$dbuser = 'santoyos_pkgs';
	$dbpass = 'solider33';
	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());
	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());

	function showSpv($id,$guruspv)
	{
		$query="select guruspv,idspv,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,scorebobot8,scorebobot9,scorebobot10 from tblinsertdataSpv where idspv='$id' and guruspv='$guruspv'";
		echo $query;
		$fetch=mysql_query($query);
		return $fetch;
		
	}

	function showKodeSupervisi($id)
	{
		$sql="select id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7 scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17 from tblinsertdataspv where idspv = '$id'" ;	
		$query=mysql_query($sql);
		return $query;	
	}

	function showGuru()
	{
		$sql= "select distinct id,nip,detailguru from tbldetailnamaguru";
		$query=mysql_query($sql);
		return $query;
	}
	
	function tampilpdf($id)
	{

		$sql="select id,idspv,guruspv,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,
scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17, 
(scorebobot1+scorebobot2+scorebobot3+scorebobot4+scorebobot5+scorebobot6+scorebobot7+scorebobot8+scorebobot9+scorebobot10) as 'sum' 
from tblshowall where id='$id'";
		$query=mysql_query($sql);
		return $query;	
	}
	
	function showWhere($id)
	{
		$sql="select id,namaguru,kantorcabang,unit,matapelajaran,kelas,semester,tahun,waktusekarang , scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,
scorebobot16,scorebobot17,(scorebobot1+scorebobot2+scorebobot3+scorebobot4+scorebobot5+scorebobot6+scorebobot7+scorebobot8+scorebobot9+scorebobot10) as 'sum' from tblshowall where id='$id'";
		$query=mysql_query($sql);
		return $query;	
	}



	function showAep()
	{
		$sql="select id,tblshowall.idspv,tblshowall.guruspv,tblshowall.namaguru,tblshowall.kantorcabang,tblshowall.unit,tblshowall.matapelajaran,tblshowall.kelas,tblshowall.semester,tblshowall.tahun,tblshowall.waktusekarang , (tblshowall.scorebobot1+tblshowall.scorebobot2+tblshowall.scorebobot3+tblshowall.scorebobot4+tblshowall.scorebobot5+tblshowall.scorebobot6+tblshowall.scorebobot7+tblshowall.scorebobot8+tblshowall.scorebobot9+tblshowall.scorebobot10) as 'sum' from tblshowall";
		$query=mysql_query($sql);
		return $query;	
	}



	function showGuruUpdate($new)
	{
		$sql= "select id,nip,detailguru from tbldetailnamaguru where id=$new";
		$new= mysql_query($sql);
		
		return $new;

	}

	function deleteGuru($index)
	{
		$sql= "delete from tbldetailnamaguru where id=$index";
		$query=mysql_query($sql);
		return $query;
	}

	function kodeSpv($kodespv)
	{
		$sql="select id,nipguruspv,guruspv from tblusersupervisor where id=$kodespv";
		$query=mysql_query($sql);
		return $query;
	}       
    
?>
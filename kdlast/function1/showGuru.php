<?php
	ini_set('max_execution_time', 0);
	$dbname = 'dbkd1';
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbconn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ('mysql connect failed. ' . mysql_error());
	mysql_select_db($dbname) or die('cannot select database. ' . mysql_error());

	function showSpv($idspv,$kodespv)
	{
		$query="select guruspv,idspv,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,scorebobot8,scorebobot9,scorebobot10 from tblInsertDataSpv where idspv='$idspv' and guruspv='$kodespv'";
	
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
		$sql= "select distinct id,nip,detailguru from tblDetailNamaGuru";
		$query=mysql_query($sql);
		return $query;
	}


	
	function tampilpdf($id)
	{

		$sql="select id,tahun,waktusekarang,kantorcabang,unit,namaguru,matapelajaran,kelas,semester,scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,
scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,scorebobot16,scorebobot17, 
(scorebobot1+scorebobot2+scorebobot3+scorebobot4+scorebobot5+scorebobot6+scorebobot7+scorebobot8+scorebobot9+scorebobot10) as 'sum' 
from tblshowall where id='$id'";
		$query=mysql_query($sql);
		return $query;	
	}
	
	function showWhere($id)
	{
		$sql="select id,namaguru,kantorcabang,unit,matapelajaran,kelas,semester,tahun,waktusekarang , scorebobot1,scorebobot2,scorebobot3,scorebobot4,scorebobot5,scorebobot6,scorebobot7,scorebobot8,scorebobot9,scorebobot10,scorebobot11,scorebobot12,scorebobot13,scorebobot14,scorebobot15,
scorebobot16,scorebobot17,(scorebobot1+scorebobot2+scorebobot3+scorebobot4+scorebobot5+scorebobot6+scorebobot7+scorebobot8+scorebobot9+scorebobot10) as 'sum' from tblShowAll where id='$id'";
		$query=mysql_query($sql);
		return $query;	
	}



	function showAep()
	{
		$sql="select id,tblShowAll.idspv,tblShowAll.guruspv,tblshowall.namaguru,tblshowall.kantorcabang,tblshowall.unit,tblshowall.matapelajaran,tblshowall.kelas,tblshowall.semester,tblshowall.tahun,tblshowall.waktusekarang , (tblshowall.scorebobot1+tblshowall.scorebobot2+tblshowall.scorebobot3+tblshowall.scorebobot4+tblshowall.scorebobot5+tblshowall.scorebobot6+tblshowall.scorebobot7+tblshowall.scorebobot8+tblshowall.scorebobot9+tblshowall.scorebobot10) as 'sum' from tblShowAll";
		$query=mysql_query($sql);
		return $query;	
	}



	function showGuruUpdate($new)
	{
		$sql= "select id,nip,detailguru from tblDetailNamaGuru where id=$new";
		$new= mysql_query($sql);
		
		return $new;

	}

	function deleteGuru($index)
	{
		$sql= "delete from tblDetailNamaGuru where id=$index";
		$query=mysql_query($sql);
		return $query;
	}

	function kodeSpv($kodespv)
	{
		$sql="select id,nipguruspv,guruspv from tblUserSupervisor where id=$kodespv";
		$query=mysql_query($sql);
		return $query;
	}
        
    
?>


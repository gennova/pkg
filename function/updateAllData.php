<?php
include ('database.php');

	function updateSpv($no,$new,$nipguru,$guruspv,$username,$passwd)
	{

		$mysql="UPDATE `tblusersupervisor` SET `id`='$new',`nipguruspv`='$nipguru',`guruspv`='$guruspv',`username`='$username',`password`='$passwd' WHERE id=$no";
$querty= mysql_query($mysql);
		if ($querty)
		{
			echo "data berhasil di update!";
			header("refresh:0, ../update/updateSupervisor.php");
		}
		else
		{
			echo "data salah";
		}

	}
	function updateGuru($no,$asli,$new,$new1)
	{
		$mysql= "UPDATE tblDetailNamaGuru set id='$no', nip='$new', detailguru='$new1' where id='$asli'";
		$querty= mysql_query($mysql);
		if ($querty)
		{
			echo "data berhasil di update!";
			header("refresh:0, ../update/updateGuru.php");
		}
		else
		{
			echo "data salah";
		}
	}

	function updateCabang($no,$asli,$new)
	{
		$mysql= "UPDATE tbldetailkantorcabang set id='$no', detailkantorcabang='$new' where id='$asli'";
		$querty= mysql_query($mysql);
		if ($querty)
		{
			echo "data berhasil di update!";
			header("refresh:0, ../update/updateCabang.php");
		}
		else
		{
			echo "data salah";
		}
	}


	function updateUnit($no,$asli,$new)
	{
		$mysql= "UPDATE tbldetailunit set id='$no', detailunit='$new' where id='$asli'";
		$querty= mysql_query($mysql);
		if ($querty)
		{
			echo "data berhasil di update!";
			header("refresh:0, ../update/updateUnit.php");
		}
		else
		{
			echo "data salah";
		}
	}

	function updateMatkul($no,$asli,$new)
	{
		$mysql= "UPDATE tbldetailmatapelajaran set id='$no', detailmatapelajaran='$new' where id='$asli'";
		$querty= mysql_query($mysql);
		if ($querty)
		{
			echo "data berhasil di update!";
			header("refresh:0, ../update/updateMatkul.php");
		}
		else
		{
			echo "data salah";
		}
	}


?>

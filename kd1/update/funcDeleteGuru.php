<?php
include('../../function/updateGuru.php');
$kodekey= $_GET['kode'];
echo $kodekey;
$sql= "delete from tblGuru where no='$kodekey'";
$query=mysql_query($sql);
if ($query)
{
	echo "Jalan";
}
else
{
	echo "gak jalan";
}
?>

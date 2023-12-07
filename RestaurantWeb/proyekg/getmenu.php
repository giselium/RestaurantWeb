<?php
	include "connection.php";
	$param=mysqli_real_escape_string($conn,$_GET["param"]);
    $arr=[];
	$q="SELECT * FROM menu WHERE kategori='$param'";
	$res=mysqli_query($conn,$q);
	while ($row=mysqli_fetch_assoc($res))
	{
		$arr[]=$row;
	}

	$hasil["param"]=$param;
	$hasil["arr"]=$arr;
	echo json_encode($hasil);
?>
<?php
	include "connection.php";
	$user=$_SESSION["user"];
	$jumlah=$_POST["jumlah"];
	$id=$_POST["id"];

	print_r($user);
	echo "Jumlah ".$jumlah." food ".$id;

  $idp="";
	$q="SELECT * FROM pesanan WHERE status='P' AND user='".$user["id"]."'";
	$res=mysqli_query($conn,$q);
	if ($row=mysqli_fetch_assoc($res))
	{
		$idp=$row["id"];
	}
	else {
		$q="INSERT INTO pesanan (status,user) VALUES ('P','".$user["id"]."')";
		mysqli_query($conn,$q);
		$idp=mysqli_insert_id($conn);
	}

  $harga=0;
  $q="SELECT * FROM menu WHERE id='$id'";
  $res=mysqli_query($conn,$q);
  if ($row=mysqli_fetch_assoc($res))
  {
  		$harga=$row["price"];
  }
	$subtotal=$jumlah*$harga;
	$q="INSERT INTO detail_pesanan (id_pesanan,id_menu,jumlah,harga,subtotal) VALUES ('$idp','$id','$jumlah','$harga','$subtotal')";
	mysqli_query($conn,$q);
	header("location:menu.php");
?>
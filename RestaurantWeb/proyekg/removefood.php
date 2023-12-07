<?php

include "connection.php";

$idfood = $_GET['id'];

$sql = 'DELETE FROM detail_pesanan WHERE id = ?';
$conn = $connect->prepare($sql);
$conn->execute([$idfood]);


header("location:menu.php");

?>
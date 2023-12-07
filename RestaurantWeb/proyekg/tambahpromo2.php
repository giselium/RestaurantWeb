<?php

include "connection.php";

if (isset($_POST['tambah']))
{
    $promo = $_POST['gambarpromo'];
   
    $sql = 'INSERT INTO promo (image) VALUES (?)';
    $conn = $connect->prepare($sql);
    $conn->execute([$promo]);

    // Update
    // $sql = 'UPDATE login SET password = ? WHERE username = ?';
    // $conn = $connect->prepare($sql);
    // $conn->execute([ $password, $username ]);


    echo'<script>alert("Promo berhasil ditambahkan");
    window.location.href="admin.php"
    </script>';   
}
elseif(isset($_POST['back']))
{
    header('location: admin.php');
}

?>

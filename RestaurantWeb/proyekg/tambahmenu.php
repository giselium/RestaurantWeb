<?php

include "connection.php";

if (isset($_POST['tambah']))
{
    $nama = $_POST['namamakanan'];
    $kategori = $_POST['kategorimakanan'];
    $harga = $_POST['hargamakanan'];
    $gambar = $_POST['gambarmakanan'];
    $info = $_POST['infomakanan'];

    $sql = 'INSERT INTO menu (food_name,kategori,price,image,info) VALUES (?,?,?,?,?)';
    $conn = $connect->prepare($sql);
    $conn->execute([$nama, $kategori, $harga, $gambar, $info]);

    // Update
    // $sql = 'UPDATE login SET password = ? WHERE username = ?';
    // $conn = $connect->prepare($sql);
    // $conn->execute([ $password, $username ]);


    echo'<script>alert("Menu berhasil ditambahkan");
    window.location.href="admin.php"
    </script>';   
}
elseif(isset($_POST['back']))
{
    header('location: admin.php');
}






?>

<?php

include "connection.php";

if (isset($_POST['update']))
{
    $idfood = $_POST['food_id'];
    $nama = $_POST['namamakanan'];
    $kategori = $_POST['kategorimakanan'];
    $harga = $_POST['hargamakanan'];
    $gambar = $_POST['gambarmakanan'];
    $info = $_POST['infomakanan'];

        $sql = 'UPDATE menu SET food_name = ?, kategori = ?, price = ?, image = ?, info = ? WHERE food_id = ?';
        $conn = $connect->prepare($sql);
        $conn->execute([$nama, $kategori, $harga, $gambar, $info, $idfood]);


        echo'<script>alert("Menu berhasil di-Update");
        window.location.href="admin.php"
        </script>';
}
elseif(isset($_POST['back']))
{
    header('location: admin.php');
}
else
{
    $idfood = $_GET['id'];

        $sql = 'DELETE FROM menu WHERE food_id = ?';
        $conn = $connect->prepare($sql);
        $conn->execute([$idfood]);


        echo'<script>alert("Menu berhasil di-Delete");
        window.location.href="admin.php"
        </script>';
}
?>
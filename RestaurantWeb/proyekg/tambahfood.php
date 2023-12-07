<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "templates/link.php"; ?>
</head>

<body background="templates/green.jpg" style="background-size:cover">

    <h1>Tambah Menu</h1>
    <div class="container-fluid">
    <form method="POST" action="tambahmenu.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="namamakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kategori</label>
            <select name="kategorimakanan" style="color: black;" class="form-control">
                <option value="food">Food</option>
                <option value="Snack">Snack</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control" name="hargamakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambarmakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Info</label>
            <input type="text" class="form-control" name="infomakanan">
        </div>

        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>

        
        <button type="submit" class="btn btn-secondary" name="back">Back</button>      
    </form>
    </div>
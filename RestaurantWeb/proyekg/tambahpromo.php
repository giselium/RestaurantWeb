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

    <h1>Tambah Promo</h1>
    <div class="container-fluid">
    <form method="POST" action="tambahpromo2.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Promo</label>
            <input type="file" class="form-control" name="gambarpromo">
        </div>
       

        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>

        
        <button type="submit" class="btn btn-secondary" name="back">Back</button>      
    </form>
    </div>
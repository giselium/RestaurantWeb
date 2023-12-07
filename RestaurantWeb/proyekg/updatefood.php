<?php 
    include 'connection.php';

    $idfood = $_GET['id'];
    

    $food = $connect->prepare("SELECT food_name, kategori, price, info FROM menu WHERE food_id = ?");
    $food->execute([$idfood]);
    $fetch_data = $food->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "templates/link.php"; ?>
</head>
<body background="templates/green.jpg" style="background-size:cover">

    <h1>Update Menu</h1>
    <div class="container-fluid">
    <form method="POST" action="updatemenu.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?php echo $fetch_data['food_name']?>" name="namamakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kategori</label>
            <select name="kategorimakanan" value="<?php echo $fetch_data['kategori']?>" style="color: black;" class="form-control">
                <option value="food">Food</option>
                <option value="Snack">Snack</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control" value="<?php echo $fetch_data['price']?>" name="hargamakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambarmakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Info</label>
            <input type="text" class="form-control" value="<?php echo $fetch_data['info']?>" name="infomakanan">
        </div>

        <input type="hidden" name="food_id" value="<?php echo $idfood;?>">
        <button type="submit" class="btn btn-primary" name="update">Update</button>

        
        <button type="submit" class="btn btn-secondary" name="back">Back</button>      
    </form>
    </div>
    

    
    



    
</body>
</html>
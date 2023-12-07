<?php include 'connection.php' ?>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand"><?=$_SESSION['login']?></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" href="#" data-toggle="modal" data-target="#modaladm" aria-current="page">Register Admin</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="#" data-toggle="modal" data-target="#passadm" aria-current="page">Change Password</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="tambahfood.php" aria-current="page">Tambah Menu</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="tambahpromo.php" aria-current="page">Tambah Promo</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="checkmeja.php" aria-current="page">Check Meja</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="checkevent.php" aria-current="page">Check Event</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link active" href="home.php" aria-current="page">Logout</a>
                    </li>
                </ul>      
            </div>
        </div>
    </nav>

    <form action="regisadm.php" method="POST">
    <div class="modal fade" id="modaladm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Admin</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" name="usernameadmin" placeholder="Username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" name="passwordadmin" placeholder="Password" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="registeradmin">Register</button>
                </div>
                </div>
            </div>
        </div>
    </form>

    <form action="changepass.php" method="POST">
        <div class="modal fade" id="passadm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" name="usernameadmin" placeholder="Username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">New Password:</label>
                        <input type="password" name="passwordadmin" placeholder="Password" class="form-control" id="recipient-name">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="changepass">Change Password</button>
                </div>
                </div>
            </div>
        </div>
    </form>

    <div class="col-md-12">
        <div class="row text-center text-light" style="padding-top: 20px; padding-bottom: 10px;">
            <h2>Daftar Menu</h2>
        </div>

        <div class="row">
            <div class="col-1"></div>

            <div class="col-10">
                <table class="table ">
                    <thead>
                        <tr>
                        <th scope="col">Food</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Info</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $menu = $connect->prepare("SELECT * FROM menu");
                        $menu->execute();
                            foreach ($menu->fetchAll() as $row)
                            {
                                ?>
                                    <tr>
                                        <td style="font-size: 20px;">
                                            <?php
                                            echo $row["food_name"];
                                            ?>
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php
                                            echo $row["kategori"];
                                            ?>
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php
                                            echo $row["price"];
                                            ?>
                                        </td>
                                        <td style="font-size: 20px;">
                                            <?php
                                            echo $row["info"];
                                            ?>
                                        </td>
                                        <td style="font-size: 20px;">
                                            <button class="btn btn-primary"><a class="text-light" href="updatefood.php?id=<?php echo $row["id"];?>">Update</a></button>
                                             
                                            <button class="btn btn-danger"><a class="text-light" href="updatemenu.php?id=<?php echo $row["id"];?>">Delete</a></button>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>

            <div class="col-1"></div>
        </div>
    </div>





    
</body>
</html>
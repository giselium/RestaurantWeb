<?php
session_start();
session_destroy();
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
<br>
	<br>
	<br>
	<div class = "container-xl">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "col-md-12 mb-4 text-light text-center">
                    <h1 style="padding-top: 50px;" ><strong> Rumah Makan Lulus Amin </strong></h1>
                    <h5 style="padding: 0px;"><strong>Perut Kenyang Hati Senang</strong></h5>
                    <!-- <h5><strong>Tapi Makan Enak adalah Kebutuhan</strong></h5> -->
                 </div>
			</div>
		</div>

        <div class="row">
            <div class="col-md-12 text-center">
            <a class = "btn btn-light" data-toggle="modal" data-target="#modalreg">Register</a>
            <a class = "btn btn-light" data-toggle="modal" data-target="#modalcus">Login</a>
            </div>
        </div>
	</div>

	<form action="register.php" method="POST">
        <div class="modal fade" id="modalreg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
                </div>
            </div>
        </div>
    </form>

    <form action="login.php" method="POST">
        <div class="modal fade" id="modalcus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
                </div>
            </div>
        </div>
    </form>   
</body>
</html>
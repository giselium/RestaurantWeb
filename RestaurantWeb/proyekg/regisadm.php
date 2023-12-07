<?php

include "connection.php";

if (isset($_POST['registeradmin']))
{
    $username = $_POST['usernameadmin'];
    $password = $_POST['passwordadmin'];

    $check_user = $connect->prepare("SELECT password, level FROM login WHERE username = ?");
    $check_user->execute([$username]);


    if ($check_user->rowCount() > 0)
    {
        $fetch_data = $check_user->fetch();

            echo'<script>alert("Username Sudah Ada");
            window.location.href="admin.php"
            </script>';

    }
    else
    {
        $sql = 'INSERT INTO login (username, password, level) VALUES (?,?,?)';
        $conn = $connect->prepare($sql);
        $conn->execute([$username, $password, 'admin']);

        // Update
        // $sql = 'UPDATE login SET password = ? WHERE username = ?';
        // $conn = $connect->prepare($sql);
        // $conn->execute([ $password, $username ]);


        echo'<script>alert("Admin Baru berhasil daftar");
        window.location.href="admin.php"
        </script>';
    }
}






?>

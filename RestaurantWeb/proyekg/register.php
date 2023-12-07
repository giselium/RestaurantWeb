<?php

include "connection.php";

if (isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = $connect->prepare("SELECT password, level FROM login WHERE username = ?");
    $check_user->execute([$username]);


    if ($check_user->rowCount() > 0)
    {
        $fetch_data = $check_user->fetch();

            echo'<script>alert("Username Sudah Ada");
            window.location.href="home.php"
            </script>';

    }
    else
    {
        $sql = 'INSERT INTO login (username, password, level) VALUES (?,?,?)';
        $conn = $connect->prepare($sql);
        $conn->execute([$username, $password, 'user']);

        // Update
        // $sql = 'UPDATE login SET password = ? WHERE username = ?';
        // $conn = $connect->prepare($sql);
        // $conn->execute([ $password, $username ]);


        echo'<script>alert("Pengguna berhasil daftar");
        window.location.href="home.php"
        </script>';
    }
}






?>

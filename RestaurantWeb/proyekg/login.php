<?php

include "connection.php";

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = $connect->prepare("SELECT password, level FROM login WHERE username = ?");
    $check_user->execute([$username]);


    if ($check_user->rowCount() > 0)
    {
        $fetch_data = $check_user->fetch();

        if ($password != $fetch_data['password'])
        {
            echo'<script>alert("Katasandi anda salah");
            window.location.href="home.php"
            </script>';
        }
        else
        {
            // session login
            $_SESSION['login'] = $username;

            if ($fetch_data['level'] == 'admin')
                header('location: admin.php');
            else
                header('location: menu.php');
        }
    }
    else
    {
        echo'<script>alert("Username Tidak Ada");
            window.location.href="home.php"
            </script>';
    }
}

?>

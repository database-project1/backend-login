<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

       
        
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password')");

        $_SESSION['message'] = 'Registration have done successfully!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Passwords do not match';
        header('Location: ../register.php');
    }

?>

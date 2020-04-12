<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>khandyq.kz</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"></head>
<body>

<!-- Sign IN --> 

    <form action="vendor/signin.php" method="post">
        <label>Phone number</label>
        <input type="text" name="login" placeholder="Please enter your phone number">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <button type="submit">Sign in</button>
        <p>
            You don't have account- <a href="/register.php">Sign UP</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>

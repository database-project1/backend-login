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
</head>
<body>

    <!-- Sign UP -->

    <form action="vendor/signup.php" method="post">
        <label>First and Last  name</label>
        <input type="text" name="full_name" placeholder="Enter your full name">
        <label>Phone Number</label>
        <input type="number" name="login" placeholder="Enter your phone number">
        <p>Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Confirm Password</label>
        <input type="password" name="password_confirm" placeholder="Confirm your password">
        <button type="submit">Sign UP</button>
        <p>
            Already have account? - <a href="/">Sign IN</a>
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

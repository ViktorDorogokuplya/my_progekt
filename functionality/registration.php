<?php
//session_start();
//include "menu.php";
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/registration.css">
    <title>Registration</title>
</head>
<body>
<form class="form" action="../index.php/?process=process/signin" method="post">
    <div class="container-registration">
        <div class="title">
            <div class="title-item">
                <hr class="title-line">
            </div>
            <div class="title-item">
                <h1 class="title-text">Register</h1>
            </div>
            <div class="title-item">
                <hr class="title-line">
            </div>
        </div>
        <div class="title">
            <p class="text">
                Creat your account. It's free and only takes a minute.
            </p>
        </div>
        <div class="name">
            <div class="name-title">
                <input class="title-input" type="text" name="first-name" placeholder="First-name">
            </div>
            <div class="name-title">
                <input class="title-input" type="text" name="last-name" placeholder="Last-name">
            </div>
        </div>
        <div class="title">
            <input class="title-input" type="email" name="email" placeholder="Email">
        </div>
        <div class="title">
            <input class="title-input" type="password" name="password" placeholder="Password">
        </div>
        <div class="title">
            <input class="title-input" type="password" name="confirm-password" placeholder="Confirm-password">
        </div>
        <div class="title">
            <div class="checkbox">
            <input class="title-checkbox" type="checkbox" name="confirm" value="yes">
            </div>
            <div class="text-checkbox">
                <p class="text">I accept the
                    <a href="#" class="link-text">Therms of Use</a> &
                    <a href="#" class="link-text">Privacy Policy.</a>
                </p>
            </div>
        </div>
        <div class="title">
            <button class="title-button" type="submit">Register Now</button>
        </div>
        <?php
        if (isset($_SESSION['massage'])) {
            echo '<p class="msg">' . $_SESSION['massage'] . '</p>';
        }
        unset($_SESSION['massage']);
        ?>
    </div>
</form>
</body>
</html>
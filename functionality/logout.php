<?php

//include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/logout.css">
    <title>Logout</title>
</head>
<body>
    <form class="form" action="../index.php/?process=process/out" method="post">
    <div class="container-logout">
        <div class="title">
          <div class="title-item">
            <hr class="title-line" />
          </div>
          <div class="title-item">
            <p class="title-text">Do you want to log out?</p>
          </div>
          <div class="title-item">
            <hr class="title-line" />
          </div>
        </div>
        <div class=logout-title">
          <div class="logout-button">
            <button class="button" type="submit">Logout</button>
          </div>
        </div>
    </div>
    </form>
</body>
</html>
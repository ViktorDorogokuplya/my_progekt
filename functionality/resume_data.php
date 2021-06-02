<?php
//session_start();
require_once "process/connectionDB.php";

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' .  mysqli_error($connect));

$recive = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'editable'") or die ('Error connect' .  mysqli_error($connect));

$content = mysqli_fetch_array($recive);

if (count($content) == 0) {

    $recive = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'default'") or die ('Error connect' .  mysqli_error($connect));

    $content = mysqli_fetch_array($recive);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/resume_data.css">
    <title>Document</title>
</head>
<body>
<?php
//require_once 'resume_data.php';
//?>
    <form action="../process/change.php" class="form" method="post">
        <div class="container_registration">
            <div class="container-contacts">
                <p class="text-rd">
                Data editing
                </p>
            </div>
            <div class="change-contacts">
                <p class="title-contacts">Contacts</p>
                <div class="container-contacts">
                    <p class="contacts_text">Tel. number</p>
                    <input class="contacts-input" type="text" name="mobile-tel" value="<?php echo $content['mobile-tel']; ?>">
                </div>
                <div class="container-contacts">
                    <p class="contacts_text">Email</p>
                    <input class="contacts-input" type="text" name="contacts-email" value="<?php echo $content['contacts-email']; ?>">
                </div>
                <div class="container-contacts">
                    <p class="contacts_text">Address</p>
                    <input class="contacts-input" type="text" name="address" value="<?php echo $content['address']; ?>">
                </div>
                <div class="container-contacts">
                    <p class="contacts_text">Social networks</p>
                    <input class="contacts-input" type="text" name="social" value="<?php echo $content['social']; ?>">
                </div>
            </div>
            <div class="change-education">
                <p class="title-education">
                    Education
                </p>
                <div class="input-education">
                    <input class="input" type="text" name="education" value="<?php echo $content['education']; ?>">
                </div>
            </div>
            <div class="change-skills">
                <p class="title-skills">
                    Skills
                </p>
                <div class="input-skills">
                    <input class="input" type="text" name="skills" value="<?php echo $content['skills']; ?>">
                </div>
            </div>
            <div class="change-about_my">
                <p class="title-about_my">
                    About my
                </p>
                <div class="input-about_my">
                    <textarea class="input" name="about_my"><?php echo $content['about_my']; ?></textarea>
                </div>
            </div>
            <div class="button-change ">
                <button class="button" type="submit">change the data</button>
            </div>
        </div>
    </form>
<div class="form">
    <p class="dump-text">Back up database data</p>
    <div class="dump">
        <div class="form-dump">
            <form action="../process/dumpDb.php" class="create-dump" method="post">
            <button class="dump-button" type="submit">create dump</button>
            </form>
        </div>
        <div class="form-dump">
            <form action="../process/backupDb.php" class="create-dump" method="post">
            <button class="dump-button" type="submit">backup dump</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>
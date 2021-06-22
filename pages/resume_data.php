<?php
require_once "functionality/connectionDB.php";

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));

$recive = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'editable'") or die ('Error connect' . mysqli_error($connect));

$content = mysqli_fetch_array($recive);

if (count($content) == 0) {

    $recive = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'default'") or die ('Error connect' . mysqli_error($connect));

    $content = mysqli_fetch_array($recive);
}

?>

<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/resume_data.css">
    <title>Document</title>
</head>
<body>
<form action="../functionality/change.php" class="form" method="post">
    <div class="container_registration">
        <div class="container-contacts">
            <p class="text-rd">
                Data editing
            </p>
        </div>
        <div class="change-contacts">
            <p class="title">Contacts</p>
            <div class="container-contacts">
                <p class="contacts_text">Tel. number</p>
                <input class="contacts-input" type="text" name="mobile-tel"
                       value="<?php echo $content['mobile-tel']; ?>">
            </div>
            <div class="container-contacts">
                <p class="contacts_text">Email</p>
                <input class="contacts-input" type="text" name="contacts-email"
                       value="<?php echo $content['contacts-email']; ?>">
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
        <div class="change">
            <p class="title">
                Education
            </p>
            <div class="input-item">
                <input class="input" type="text" name="education" value="<?php echo $content['education']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Skills
            </p>
            <div class="input-item">
                <input class="input" type="text" name="skills" value="<?php echo $content['skills']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                About my
            </p>
            <div class="input-item">
                <textarea class="input-area" name="about_my"><?php echo $content['about_my']; ?></textarea>
            </div>
        </div>
        <div class="change">
            <p class="title">
                Position
            </p>
            <div class="input-item">
                <input class="input" type="text" name="position" value="<?php echo $content['position']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Company name
            </p>
            <div class="input-item">
                <input class="input" type="text" name="companyName" value="<?php echo $content['companyName']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Profession Experience
            </p>
            <div class="input-item">
                <textarea class="input-area" name="profExperience"><?php echo $content['profExperience']; ?></textarea>
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
            <form action="../functionality/dumpDb.php" class="create-dump" method="post">
                <button class="dump-button" type="submit">create dump</button>
            </form>
        </div>
        <div class="form-dump">
            <form action="../functionality/backupDb.php" class="create-dump" method="post">
                <button class="dump-button" type="submit">backup dump</button>
            </form>
        </div>
    </div>
</div>
</body>

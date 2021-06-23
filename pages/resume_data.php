<?php
require_once "functionality/connectionDB.php";

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
<form class="form" id="form" action="../index.php/?functionality=functionality/changeData"  method="post">
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
                <input class="contacts-input" id="mobile-tel" type="text" name="mobile-tel"
                       value="<?php echo $content['mobile-tel']; ?>">
            </div>
            <div class="container-contacts">
                <p class="contacts_text">Email</p>
                <input class="contacts-input" id="contacts-email" type="text" name="contacts-email"
                       value="<?php echo $content['contacts-email']; ?>">
            </div>
            <div class="container-contacts">
                <p class="contacts_text">Address</p>
                <input class="contacts-input" id="address" type="text" name="address" value="<?php echo $content['address']; ?>">
            </div>
            <div class="container-contacts">
                <p class="contacts_text">Social networks</p>
                <input class="contacts-input" id="social" type="text" name="social" value="<?php echo $content['social']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Education
            </p>
            <div class="input-item">
                <input class="input" id="education" type="text" name="education" value="<?php echo $content['education']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Skills
            </p>
            <div class="input-item">
                <input class="input" type="text" id="skills" name="skills" value="<?php echo $content['skills']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                About my
            </p>
            <div class="input-item">
                <textarea class="input-area" id="about-my" name="about-my"><?php echo $content['about-my']; ?></textarea>
            </div>
        </div>
        <div class="change">
            <p class="title">
                Position
            </p>
            <div class="input-item">
                <input class="input" id="position" type="text" name="position" value="<?php echo $content['position']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Company name
            </p>
            <div class="input-item">
                <input class="input" type="text" id="company-name" name="companyName" value="<?php echo $content['company-name']; ?>">
            </div>
        </div>
        <div class="change">
            <p class="title">
                Profession Experience
            </p>
            <div class="input-item">
                <textarea class="input-area" id="prof-experience" name="profExperience"><?php echo $content['prof-experience']; ?></textarea>
            </div>
        </div>
        <div class="button-change ">
            <button class="button" id="button_change" type="submit">change the data</button>
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
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" crossorigin="anonymous">
</script>
<script src="../js/checkDataResume.js"></script>
<script src="../js/changeData.js"></script>
</body>

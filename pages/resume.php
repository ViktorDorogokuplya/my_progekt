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
    <link rel="stylesheet" href="../css/resume.css">
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
            rel="stylesheet"
    />
    <title>Resume</title>
</head>
<body>
<div class="main-container">
    <div class="main-content">
        <div class="about-me">
            <h1 class="about-me-name">
                DOROGOKUPLYA VIKTOR
            </h1>
            <h2 class="about-me-profession">PHP DEVELOPER</h2>
        </div>
        <div class="main-profile">
            <h3 class="main-profile-title">PROFILE</h3>
            <p class="main-profile-text">
                <?php echo $content['about-my']; ?>
            </p>
        </div>
        <div class="main-professional-experience">
            <h3 class="main-professional-experience_title">PROFESSIONAL EXPERIENCE</h3>
            <div class="work-company">
                <h4 class="work-company-title"><?php echo $content['position']; ?></h4>
                <h5 class="work-company-about"><?php echo $content['company-name']; ?></h5>
                <p class="work-experience-content"><?php echo $content['prof-experience']; ?></p>

            </div>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-container">
            <div class="sidebar-section-img">
                <img class="sidebar-section-photo" src="../storage/images/photo.jpg" alt="my photo">
            </div>
            <div class="info">
                <div class="info-contact">
                    <h3 class="info-contacts">
                        CONTACTS
                    </h3>
                    <div class="info-contacts_text">
                        <div class="">
                            <p class="sidebar-content"><?php echo $content['mobile-tel'] . '<br>' . $content['contacts-email'] . "<br>" . $content['address'] . '<br>' . $content['social']; ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="info">
                <div class="info-educations">
                    <h3 class="info-education">
                        EDUCATION
                    </h3>
                    <div class="info-contacts_text">
                        <ul class="sidebar-content"><?php $educations = explode(' ', $content['education']);
                            foreach ($educations as $value) {
                                echo '<li>' . $value . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="info-skill">
                    <h3 class="info-skills">
                        SKILLS
                    </h3>
                    <div class="info-contacts_text">
                        <ul class="sidebar-content"><?php $allskills = explode(' ', $content['skills']);
                            foreach ($allskills as $value) {
                                echo '<li>' . $value . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

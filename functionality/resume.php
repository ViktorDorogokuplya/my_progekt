<?php
//include 'menu.php';
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


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
               <?php echo $content['about_my'] .'<br>'; ?>
<!--                   Hello! I am a beginner developer. I began to learn this profession on my own. At this stage, I am studying at PixelTeh, where I would very much like to stay in the future. I consider this work to be the most promising and highly paid area. I am ready to make every effort to achieve this goal.-->
               </p>
           </div>
           <div class="main-professional-experience">
               <h3 class="main-professional-experience_title">PROFESSIONAL EXPERIENCE</h3>
               <div class="work-company">
                   <h4 class="work-company-title">TECHNOLOGIST, MASTER OF PRODUCTION</h4>
                   <h5 class="work-company-about">Zaporizkiy Oil faktorу | Zaporizhya, Pishevaya str. | 2010 - 2016</h5>
                   <p class="work-company-text">Sunflower seed processing plant. Sunflower oil production by pressing and extraction. Getting high-protein meal.</p>
                   <ul class="work-company-experience">
                       <li class="work-company-experience-list">control of technological equipment</li>
                       <li class="work-company-experience-list">control of the technological process of processing</li>
                       <li class="work-company-experience-list">quality control of manufactured products</li>
                       <li class="work-company-experience-list">assignment of tasks to shift personnel</li>
                       <li class="work-company-experience-list">maintenance of technical documentation</li>
                   </ul>
               </div>
               <div class="work-company">
                   <h4 class="work-company-title">TECHNOLOGIST, MASTER OF PRODUCTION</h4>
                   <h5 class="work-company-about">"Agroproinvest 08" faktorу | Vilnyansk, Matrocova str. | 2016 - 2021</h5>
                   <p class="work-company-text">Sunflower seed processing plant. Sunflower oil production by pressing and extraction. Getting high-protein meal.</p>
                   <ul class="work-company-experience">
                       <li class="work-company-experience-list">control of technological equipment</li>
                       <li class="work-company-experience-list">control of the technological process of processing</li>
                       <li class="work-company-experience-list">quality control of manufactured products</li>
                       <li class="work-company-experience-list">assignment of tasks to shift personnel</li>
                       <li class="work-company-experience-list">maintenance of technical documentation</li>
                   </ul>
               </div>
           </div>
       </div>
        <div class="sidebar-section">
            <div class="sidebar-section-container">
                <div class="sidebar-section-img">
                    <img class="sidebar-section-photo" src="../images/photo.jpg" alt="my photo">
                </div>
                <div class="info">
                    <div class="info-contact">
                        <h3 class="info-contacts">
                            CONTACTS
                        </h3>
                        <div class="info-contacts_text">
                            <div class="">
                                <p class="sidebar-content"><?php echo $content['mobile-tel'] .'<br>' . $content['contacts-email'] . "<br>" . $content['address'] .'<br>' . $content['social']; ?></p>
                            </div>
<!--                            <div class="">-->
<!--                                <a class="info-contacts_link"-->
<!--                                   href="mailto:viktordorogokuplya@gmail.com">-->
<!--                                    viktordorogokuplya@gmail.com</a>-->
<!--                            </div>-->
<!--                            <div class=""><p class="info-contacts_state">Vilnyansk, Zachinyaeva str.</p></div>-->
<!--                            <div class=""><a class="info-contacts_linked" href="linkedin.com/in/victor-dorogokuplya-2b7249175 class="info-contacts_linked">-->
<!--                                Linkedin/Victor Dorogokuplya-->
<!---->
<!--                            </a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="info-educations">
                        <h3 class="info-education">
                       EDUCATION
                    </h3>
                        <div class="info-contacts_text">
                            <p class="sidebar-content"><?php echo $content['education'] .'<br>'; ?></p>

                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="info-skill">
                        <h3 class="info-skills">
                        SKILLS
                    </h3>
                        <div class="info-contacts_text">
                            <p class="sidebar-content"><?php echo $content['skills'] .'<br>'; ?></p>
<!--                            <ul class="info-skills_list">-->
<!--                                <li class="info-sills_item">HTML5</li>-->
<!--                                <li class="info-sills_item">CSS3</li>-->
<!--                                <li class="info-sills_item">JS+(OOP)</li>-->
<!--                                <li class="info-sills_item">PHP+(OOP)</li>-->
<!--                                <li class="info-sills_item">Bootstrap 4</li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
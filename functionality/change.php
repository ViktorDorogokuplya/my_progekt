<?php
require_once 'connectionDB.php';

$telNumber = filter_var(trim($_POST['mobile-tel']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['contacts-email']), FILTER_SANITIZE_EMAIL);
$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
$socialNetwork = filter_var(trim($_POST['social']), FILTER_SANITIZE_URL);
$education = filter_var(trim($_POST['education']), FILTER_SANITIZE_STRING);
$skills = filter_var(trim($_POST['skills']), FILTER_SANITIZE_STRING);
$aboutMy = filter_var(trim($_POST['about_my']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['position']), FILTER_SANITIZE_STRING);
$companyName = filter_var(trim($_POST['companyName']), FILTER_SANITIZE_STRING);
$profExperience = filter_var(trim($_POST['profExperience']), FILTER_SANITIZE_STRING);


$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));

$queryDel = mysqli_query($connect, "DELETE FROM `resume_data` WHERE `type` = 'editable'") or mysqli_error($queryDel);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));

$newData = mysqli_query($connect, "INSERT INTO `resume_data` (`id`, `type`, `mobile-tel`, `contacts-email`, `address`, `social`, `education`, `skills`, `about_my`, `position`, `companyName`, `profExperience`) VALUES (NULL, 'editable', '$telNumber', '$email', '$address', '$socialNetwork', '$education', '$skills', '$aboutMy', '$position', '$companyName', '$profExperience')") or die('Error connect' . mysqli_error($connect));

mysqli_close($connect);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));

$reciveData = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'editable'") or die ('Error connect' . mysqli_error($connect));

$result = mysqli_fetch_assoc($reciveData);
var_dump($result);

mysqli_close($connect);

header('Location: ../index.php');







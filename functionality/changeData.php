<?php

$output = ['success' => false];
$data = json_decode(file_get_contents('php://input'), true);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));


if (!$connect) {
    var_dump($data);
    $output['message'] = "Error: Unable to connect to MySQL." . mysqli_connect_error();
    goto output;
}

$telNumber = $data['mobile-tel'];
$email = $data['contacts-email'];
$address = $data['address'];
$socialNetwork = $data['social'];
$education = $data['education'];
$skills = $data['skills'];
$aboutMy = $data['about-my'];
$position = $data['position'];
$companyName = $data['company-name'];
$profExperience = $data['prof-experience'];

$queryDel = mysqli_query($connect, "DELETE FROM `resume_data` WHERE `type` = 'editable'") or mysqli_error($queryDel);


$newData = mysqli_query($connect, "INSERT INTO `resume_data` (`type`, `mobile-tel`, `contacts-email`, `address`, `social`, `education`, `skills`, `about-my`, `position`, `company-name`, `prof-experience`) VALUES ('editable', '$telNumber', '$email', '$address', '$socialNetwork', '$education', '$skills', '$aboutMy', '$position', '$companyName', '$profExperience')") or die('Error connect' . mysqli_error($connect));

mysqli_close($connect);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db') or die('Error connect' . mysqli_error($connect));

$reciveData = mysqli_query($connect, "SELECT * FROM `resume_data` WHERE `type` = 'editable'") or die ('Error connect' . mysqli_error($connect));

$result = mysqli_fetch_assoc($reciveData);
var_dump($result);

mysqli_close($connect);
output:
header('Content-Type: application/json');
echo json_encode($output);








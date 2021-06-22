<?php
require_once 'connectionDB.php';
$host = 'localhost';
$user = 'admin';
$password = 'password';
$database = 'my_db';

$import = '../storage/dumb_db.sql';
$command = 'mysql -h' . $host . ' -u' . $user . ' -p' . $password . ' root' . $database . ' < ' . $import;
exec($command, $output, $worked);
header('location:/index.php');


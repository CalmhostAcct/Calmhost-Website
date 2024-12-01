<?php
session_start();
require_once 'api-client.php';
$username = $_POST['uname'];
$password = $_POST['passwd'];
$vpClient = new VistapanelApi();
$vpClient->setCpanelUrl('https://cpanel.calmhost.ftp.sh');
$vpClient->login($username, $password);
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
header("Location: /dashboard.php");
die();
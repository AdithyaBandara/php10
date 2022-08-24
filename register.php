<?php
$fname = $_POST['f'];
$lname = $_POST['l'];
$email = $_POST['e'];
$mobile = $_POST['m'];
$password = $_POST['p'];
$city = $_POST['c'];
$gender = $_POST['g'];

$dbms = new mysqli("localhost", "root", "!ABandara2001", "db13", "3306");
$q = "INSERT INTO `user` (`fname`, `lname`, `email`, `mobile`, `password`, `city_id`, `gender`)
 VALUES ('".$fname."', '".$lname."', '".$email."', '".$mobile."', '".$password."', '".$city."', '".$gender."')";

$dbms->query($q);

echo "Registration Successful";

?>
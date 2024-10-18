<?php
require_once("connection.php");

$name = $conn->real_escape_string($_POST['name']);
$gender = $conn->real_escape_string($_POST['gender']);
$standard = $conn->real_escape_string($_POST['standard']);
$dob = $conn->real_escape_string($_POST['dob']);
$age = $conn->real_escape_string($_POST['age']);
$father_name = $conn->real_escape_string($_POST['father_name']);
$mobile = $conn->real_escape_string($_POST['mobile']);

$query = "INSERT INTO students (`name`, `gender`, `standard`, `dob`, `age`, `father_name`, `mobile`) VALUES ('$name', '$gender', '$standard', '$dob', '$age', '$father_name', '$mobile')";

$conn->query($query);
$conn->close();
echo "success";

?>
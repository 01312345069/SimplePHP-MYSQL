<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
// echo"Success connection to the db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO `picnic` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

echo $sql;

if ($con->query($sql)==true){
    echo"Successfully Inserted";
}else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

?>
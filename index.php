<?php
if(isset($_POST['name'])){


$insert = false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
// echo"Success connection to the db";
$insert = true;

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO `aug`. `picnic` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

// echo $sql;

if ($con->query($sql)==true){
    // echo"Successfully Inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>iThing</title>
</head> 
<body>
    <div class="container">
        <h3>Welcome to WEBSITE</h3>
        <p>Enter your detail to buy ticket</p>
        <p class="submitmgs">Thanks for submitting your form. We are happy to see you joining us for the China Trip.</p>
        <?php
        if($insert == true){
            echo "<p class='submitmsg'>Thank you for submitting your form.</p>";
        }
        
        ?>

        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="phone" id="phone" placeholder="Enter your number">
        <textarea name="other" id="other" placeholder="Enter your detail"></textarea>
        <button class="btn">Submit</button>
        </form>
    </div>
    


    <!-- INSERT INTO `picnic` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'testname', '24', 'male', 'test@test.com', '01819938936', 'this is test text', current_timestamp()); -->

    <script src="index.js"></script>
</body>
</html>

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
        <p class="submitmsg">Thank you for submitting your form.</p>

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

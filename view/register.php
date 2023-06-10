<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "/phpmotors/css/main.css">
    <title>Register | PHP Motors</title>
</head>
<body>
    <div class="white">
    <!--<header>--><?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\header.php'; ?>
<nav>
    <?php //include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\nav.php'; 
    echo $navList; ?>
</nav>
<main>
<h2> Register </h2>
<?php
if (isset($message)) {
 echo $message;
}
?>
<form method="post" action="/phpmotors/accounts/index.php">
<fieldset>
        <legend>Personal Details</legend>
        <label>First Name</label>
        <input type="text" name="clientFirstname" id="fname" placeholder="first name"  >
        <br>
        <label>Last Name</label>
        <input type="text" name="clientLastname" id="lname" placeholder="last name" >
        <br>
        <label>Email</label>
        <input type="email" name="clientEmail" id="email" placeholder="name@example.com" >
        <br>
        <label>Password</label>
        <input type="password" name="clientPassword" id="password" >
        <br>
        <input type = "submit" name = "submit" value = "Register"> 
           <!-- Add the action name - value pair -->
        <input type="hidden" name="action" value="register">
        </form>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"] . '\phpmotors\common\footer.php'; ?>
</div>
</body>  
</html>